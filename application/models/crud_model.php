<?php
    class Crud_model extends CI_Model
    {
        // 简单查询需要指定表名
        public $tb = null;
        // 是否显示执行的SQL语句
        public $db_debug = false;
        function __construct(){
            parent::__construct();
        }
        
        /**
         * 更新记录,返回是否成功
         * @param String $_sql
         * @param Array $_args
         * @return boolean
         */
        function update($_sql, $_args = null){
            $this->db->query($_sql, $_args);
            $this->print_sql($this->db_debug);
            return $this->db->affected_rows() ? true : false;
        }

        /**
         * 获取多条记录
         * @param String $_sql
         * @param Array $_args
         * @return Array
         */
        function queryRows($_sql, $_args = null){
            $query = $this->db->query($_sql, $_args);
            $rows = $query->result_array();
            $this->print_sql($this->db_debug);
            return $rows;
        }

        /**
         * 获取单条记录
         * @param String $_sql
         * @param Array $_args
         * @return Array
         */
        function queryRow($_sql, $_args = null){
            $rows = $this->queryRows($_sql, $_args);
            return count($rows) > 0 ? current($rows) : array();
        }

        /**
         * 修改字段信息
         * $_sets = array('money'=>array('-2'))
         * @return boolean
         */
        function upd_info($_sets = array(), $_where = array(), $_tb = null){
            foreach ($_sets as $k => $v) {
                if (is_array($v)) {
                    $i = $v[0];
                    $i = $i >= 0 ? '+' . $i : $i;
                    $this->db->set($k, $k . $i, false);
                } else {
                    $this->db->set($k, $v);
                }
            }
            $this->db->where($_where);
            $this->db->update(empty($_tb) ? $this->tb : $_tb);
            $this->print_sql($this->db_debug);
            return $this->db->affected_rows() ? true : false;
        }

        /**
         * 添加记录
         * @return id
         */
        function ins_info($_args, $_tb = null){
            if (!empty($_args)) {
                foreach ($_args as $k => $v) {
                	$this->db->set($k, $v);
                }
            }
            $this->db->insert(empty($_tb) ? $this->tb : $_tb);
            $this->print_sql($this->db_debug);
            return $this->db->insert_id();
        }

        /**
         * 删除记录
         */
        function del_info($_where, $_tb = null)
        {
            $this->db->where($_where);
            $this->db->delete(empty($_tb) ? $this->tb : $_tb);
            $this->print_sql($this->db_debug);
            return $this->db->affected_rows() ? true : false;
        }

        /**
         * 查询记录
         */
        function sel_info($_field = array(), $_where=null, $_tb = null, $_order_by = null, $_page = null, $_limit = null)
        {
            if (empty($_field)) {
                $this->db->select('*');
            } else {
                foreach ($_field as $k => $v) {
                    if (is_array($v)) {
                        $this->db->select($v[0] . ' ' . $k, false);
                    } else {
                        $this->db->select($v);
                    }
                }
            }
            if (!empty($_where)){	//条件
	            foreach ($_where as $index => $entry) {
	                if ('`like`' == $index) {
	                    foreach ($entry as $i => $item) {
	                        $this->db->like($i, $item);
	                    }
	                }elseif ('in' == $index){
	                	foreach ($entry as $i => $item) {
	                		$this->db->where_in($i, $item);
	                	}
	                } else {
	                    $this->db->where($index, $entry);
	                }
	
	            }
            }
            if (!empty($_order_by)) {	//排序
                $this->db->order_by($_order_by);
            }
            if (!empty($_limit)) {	//分页
                $start = $_page > 0 ? (intval($_page) - 1) * $_limit : 0;
                $this->db->limit($_limit, $start);
            }
            $query = $this->db->get(empty($_tb) ? $this->tb : $_tb);
            $this->print_sql($this->db_debug);
			return $query->result_array();
        }


        /**
         * 打印出最近一条SQL语句
         */
        private function print_sql($_echo){
            if ($_echo) {
                echo '<hr />' . $this->db->last_query() . '<hr />';
            }
        }

        /**
         * 生成插入SQL
         */
        function get_sql($_tb, $_opt = true)
        {
            $rows = $this->queryRows('DESC ' . $_tb);
            $sql = 'INSERT INTO ' . $_tb . ' (';
            $tmp = array();
            echo '<hr />';
            $count = 0;
            $len = count($rows);
            foreach ($rows as $row) {
                if ($row['Key'] == 'PRI' && $_opt) {
                    continue;
                }
                array_push($tmp, $row['Field']);
                $count++;
                echo '\'' . $row['Field'] . '\'=>■' . (($count == $len - 1) ? '' : ',') . '<br />';
            }
            $sql .= join(',', $tmp) . ') VALUES (' . join(',', array_fill(0, count($tmp), '?')) . ')';
            echo '<hr />';
            echo $sql;
            echo '<hr />';
            exit;
        }
    }