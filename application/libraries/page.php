<?php
    /**
     * filename: page.class.php
     * 2.0增加功能：支持自定义风格，自定义样式，同时支持PHP4和PHP5,
     * example:
     * 可以自定义多模式分页模式：
    require_once('../libs/classes/page.class.php');
    $page=new page(array('total'=>1000,'perpage'=>20));
    echo 'mode:1<br>'.$page->show();
    echo '<hr>mode:2<br>'.$page->show(2);
    开启AJAX：
    $ajaxpage=new page(array('total'=>1000,'perpage'=>20,'ajax'=>'ajax_page','page_name'=>'test'));
    echo 'mode:1<br>'.$ajaxpage->show();
    采用继承自定义分页显示模式：
     */
    class CI_Page
    {
        /**
         * config ,public
         */
        var $page_name = "p"; // page标签，用来控制url页。比如说xxx.php?PB_page=2中的PB_page
        var $next_page = '下一页'; // 下一页
        var $pre_page = '上一页'; // 上一页
        var $first_page = '首页'; // 首页
        var $last_page = '尾页'; // 尾页
        var $pre_bar = '<<'; // 上一分页条
        var $next_bar = '>>'; // 下一分页条
        var $format_left = '[';
        var $format_right = ']';
        var $is_ajax = false; // 是否支持AJAX分页模式
        var $show = '';
        /**
         * private
         *
         */
        var $pagebarnum = 5; // 控制记录条的个数。
        var $totalpage = 0; // 总页数
        var $ajax_action_name = ''; // AJAX动作名
        var $nowindex = 1; // 当前页
        var $url = ""; // url地址头
        var $offset = 0;
        var $totaln = 0; // 总记录数
        var $perpage = 10;

        /**
         * constructor构造函数
         *
         * @param array $array['total'],$array['perpage'],$array['nowindex'],$array['url'],$array['ajax']...
         */
        function __construct($array)
        {
            if (is_array($array)) {
                if (!array_key_exists('total', $array)) $this->error(__FUNCTION__, 'need a param of total');
                $total = intval($array['total']);
                $perpage = (array_key_exists('perpage', $array)) ? intval($array['perpage']) : 10;
                $nowindex = (array_key_exists('nowindex', $array)) ? intval($array['nowindex']) : '';
                $url = (array_key_exists('url', $array)) ? $array['url'] : '';
                $this->perpage = $perpage;
                if(array_key_exists('show', $array)){
                    $this->show=$array['show'];
                    if($this->show == 'front'){
                        $this->next_page = '下一页'; // 
                        $this->pre_page = '上一页'; // 
                        $this->first_page = '首页'; // 
                        $this->last_page = '尾页'; //                     
                    }
                }
            } else {
                $total = $array;
                $perpage = 10;
                $nowindex = '';
                $url = '';
                $this->perpage = 10;
            }
            if ((!is_int($total)) || ($total < 0)) $this->error(__FUNCTION__, $total . ' is not a positive integer!');
            if ((!is_int($perpage)) || ($perpage <= 0)) $this->error(__FUNCTION__, $perpage . ' is not a positive integer!');
            if (!empty($array['page_name'])) $this->set('page_name', $array['page_name']); //设置pagename

            $this->_set_nowindex($nowindex); //设置当前页
            $this->_set_url($url); //设置链接地址
            $this->totalpage = ceil($total / $perpage);
            if ($this->totalpage <> 0 && $this->nowindex > $this->totalpage) {
                header('Location:http://' . $_SERVER['SERVER_NAME'] . $this->url . $this->totalpage);
            }
            $this->totaln = $total;
            $this->offset = ($this->nowindex - 1) * $this->perpage;
            if (!empty($array['ajax'])) $this->open_ajax($array['ajax_action_name']); //打开AJAX模式
        }

        /**
         * 设定类中指定变量名的值，如果改变量不属于这个类，将throw一个exception
         *
         * @param string $var
         * @param string $value
         */
        function set($var, $value)
        {
            if (in_array($var, get_object_vars($this)))
                $this->$var = $value;
            else {
                $this->error(__FUNCTION__, $var . " does not belong to PB_Page!");
            }

        }

        /**
         * 打开倒AJAX模式
         *
         * @param string $action 默认ajax触发的动作。
         */
        function open_ajax($action)
        {
            $this->is_ajax = true;
            $this->ajax_action_name = $action;
        }

        /**
         * 获取显示"下一页"的代码
         *
         * @param string $style
         *
         * @return string
         */
        function next_page($style = '')
        {
            if ($this->nowindex < $this->totalpage) {
                return $this->_get_link($this->_get_url($this->nowindex + 1), $this->next_page, $style);
            }

            return '<a class="' . $style . '">' . $this->next_page . '</a> ';
        }

        function next_hpage($style = '')
        {
            if ($this->nowindex < $this->totalpage) {
                $nowindex = $this->nowindex + 1;
                $this->url = 'news' . $_GET['nid'] . '_' . $nowindex . '.html';
            } else {
                $this->url = 'news' . $_GET['nid'] . '_' . $this->nowindex . '.html';
            }
            $nextpage = '<a href="' . $this->url . '">' . $this->next_page . '</a> ';

            return $nextpage;
        }

        /**
         * 获取显示“上一页”的代码
         *
         * @param string $style
         *
         * @return string
         */
        function pre_page($style = '')
        {
            if ($this->nowindex > 1) {
                return $this->_get_link($this->_get_url($this->nowindex - 1), $this->pre_page, $style);
            }

            return '<a class="' . $style . '">' . $this->pre_page . '</a> ';
        }

        function pre_hpage($style = '')
        {

            if ($this->nowindex > 1) {
                $nowindex = $this->nowindex - 1;
                $this->url = 'news' . $_GET['nid'] . '_' . $nowindex . '.html';
            } else {
                $this->url = 'news' . $_GET['nid'] . '_' . $this->nowindex . '.html';
            }
            $prepage = '<a href="' . $this->url . '">' . $this->pre_page . '</a> ';

            return $prepage;
        }


        /**
         * 获取显示“首页”的代码
         *
         * @return string
         */
        function first_page($style = '')
        {
            if ($this->nowindex == 1) {
                return '<a class="' . $style . '">' . $this->first_page . '</a> ';
            }

            return $this->_get_link($this->_get_url(1), $this->first_page, $style);
        }

        function first_hpage($style = '')
        {
            $this->url = 'news' . $_GET['nid'] . '_1.html';
            $prepage = '<a href="' . $this->url . '">' . $this->first_page . '</a> ';

            return $prepage;
        }

        /**
         * 获取显示“尾页”的代码
         *
         * @return string
         */
        function last_page($style = '')
        {
            if ($this->nowindex == $this->totalpage) {
                return '<a class="' . $style . '">' . $this->last_page . '</a> ';
            }

            return $this->_get_link($this->_get_url($this->totalpage), $this->last_page, $style);
        }

        function last_hpage($style = '')
        {
            $this->url = 'news' . $_GET['nid'] . '_' . $this->totalpage . '.html';
            $prepage = '<a href="' . $this->url . '">' . $this->last_page . '</a> ';

            return $prepage;
        }


        function nowbar($style = '', $nowindex_style = '')
        {
            $plus = ceil($this->pagebarnum / 2);
            if ($this->pagebarnum - $plus + $this->nowindex > $this->totalpage) {
                $plus = ($this->pagebarnum - $this->totalpage + $this->nowindex);
            }
            $begin = $this->nowindex - $plus + 1;
            $begin = ($begin >= 1) ? $begin : 1;
            $return = '';
            for ($i = $begin; $i < $begin + $this->pagebarnum; $i++) {
                if ($i <= $this->totalpage) {
                    if ($i != $this->nowindex)
                        $return .= $this->_get_text($this->_get_link($this->_get_url($i), $i, $style));
                    else
                        $return .= $this->_get_text('<a class="' . $nowindex_style . '">' . $i . '</a> ');
                } else {
                    break;
                }
                $return .= "\n";
            }
            unset($begin);

            return $return;
        }

        function hnowbar($style = '', $nowindex_style = '')
        {
            $plus = ceil($this->pagebarnum / 2);
            if ($this->pagebarnum - $plus + $this->nowindex > $this->totalpage) $plus = ($this->pagebarnum - $this->totalpage + $this->nowindex);
            $begin = $this->nowindex - $plus + 1;
            $begin = ($begin >= 1) ? $begin : 1;
            $return = '';
            for ($i = $begin; $i < $begin + $this->pagebarnum; $i++) {
                if ($i <= $this->totalpage) {
                    if ($i != $this->nowindex) {
                        $url = 'news' . $_GET['nid'] . '_' . $i . '.html';
                        $return .= '<a href="' . $url . '" class="' . $style . '">' . $i . '</a> ';
                    } else {
                        $return .= '<a class="' . $nowindex_style . '">' . $i . '</a> ';
                    }
                } else {
                    break;
                }
                $return .= "\n";
            }
            unset($begin);

            return $return;
        }

        /**
         * 获取mysql 语句中limit需要的值
         *
         * @return string
         */
        function offset()
        {
            return $this->offset;
        }

        /**
         * 控制分页显示风格（你可以增加相应的风格）
         *
         * @param int $mode
         *
         * @return string
         */
        function show()
        {
            /**
            +-------------------------------------------------------------------
             * Mode2样式说明
            +-------------------------------------------------------------------
             * p_bar      整个DIV总的样式
             * p_total    一共有多少条记录样式
             * p_pages    当前页/总页 样式
             * p_redirect 首页、上页样式
             * p_num      非当前页样式
             * p_curpage  当前页样式
             * p_redirect 下页、未页样式
             * p_input    文本跳转框样式
            +-------------------------------------------------------------------
             */
            if ($this->totalpage<=1) {
                return '';
            }

            $this->format_left = '';
            $this->format_right = '';
            //$this->next_page = '&#8250;&#8250;';
            //$this->pre_page = '&#8249;&#8249;';
            //$this->first_page = '|&#8249;';
            //$this->last_page = '&#8250;|';
            if($this->show=='front'){
                $this->pagestr = '<DIV class=p_bar>'; 
              //  $this->pagestr .= $this->first_page('p_redirect');
                $this->pagestr .= $this->pre_page('p_redirect');
                $this->pagestr .= $this->nowbar('p_num', 'p_curpage');
                $this->pagestr .= $this->next_page('p_redirect');
               // $this->pagestr .= $this->last_page('p_redirect');
                $this->pagestr .= '</DIV>'; 
            }else{
                $this->pagestr = '<DIV class=p_bar>'; //<A class=p_total>&nbsp;' . $this->totaln . '&nbsp;</A>
              //  $this->pagestr .= '<A class=p_pages>&nbsp;' . $this->nowindex . '/' . $this->totalpage . '&nbsp;</A> ';
               // $this->pagestr .= $this->first_page('p_redirect');
                $this->pagestr .= $this->pre_page('p_redirect');
                $this->pagestr .= $this->nowbar('p_num', 'p_curpage');
                $this->pagestr .= $this->next_page('p_redirect').' 共'.$this->totalpage.'页 ';
               // $this->pagestr .= $this->last_page('p_redirect');
                //$this->pagestr .= '到第 <A class=p_pages style="border:0px;PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; PADDING-TOP: 0px"><INPUT size="5" id="p_input" class=p_input onkeydown="if(event.keyCode==13) {' . ($this->is_ajax ? 'go(' : 'window.location=\''. $this->url .'\'') .  '+this.value' . ($this->is_ajax ? ')' : '') . '; return false;}" name=custompage /></A> 页 <button type="submit" onclick="' . ($this->is_ajax ? 'go(' : 'window.location=\''. $this->url .'\'') .  '+document.getElementById(\'p_input\').value' . ($this->is_ajax ? ')' : '') . '" class="btnJump" >确定</button></DIV> ';
            }
            return $this->pagestr;

        }

        /*----------------private function (私有方法)-----------------------------------------------------------*/
        /**
         * 设置url头地址
         *
         * @param: String $url
         *
         * @return boolean
         */
        function _set_url($url = "")
        {
            if (!empty($url)) {
                //手动设置
                $this->url = $url . ((stristr($url, '?')) ? '&' : '?') . $this->page_name . "=";
            } else {
                //自动获取
                if (empty($_SERVER['QUERY_STRING'])) {
                    //不存在QUERY_STRING时
                    $this->url = $_SERVER['REQUEST_URI'] . "?" . $this->page_name . "=";
                } else {
                    //
                    if (stristr($_SERVER['QUERY_STRING'], $this->page_name . '=')) {
                        //地址存在页面参数就替换
                        $this->url = str_replace($this->page_name . '=' . $_GET[$this->page_name], '', $_SERVER['REQUEST_URI']);
                        $last = $this->url[strlen($this->url) - 1];
                        if ($last == '?' || $last == '&') {
                            $this->url .= $this->page_name . "=";
                        }
                    } else {
                        //没有就追加
                        $this->url = $_SERVER['REQUEST_URI'] . '&' . $this->page_name . '=';
                    }
                    //end if
                }
                //end if
            }
            //end if
        }


        /**
         * 设置当前页面
         *
         */
        function _set_nowindex($nowindex)
        {
            if (empty($nowindex)) {
                //系统获取

                if (isset($_GET[$this->page_name])) {
                    $this->nowindex = intval($_GET[$this->page_name]);
                }
            } else {
                //手动设置
                $this->nowindex = intval($nowindex);
            }
        }

        /**
         * 为指定的页面返回地址值
         *
         * @param int $pageno
         *
         * @return string $url
         */
        function _get_url($pageno = 1)
        {
            global $setup;
            if ($setup['rewrite'] == 1) {
                return $this->url . $pageno . '.html';
            } else {
                //用ajax的只传页码过去就好了
                return ($this->is_ajax ? '' : $this->url) . $pageno;
            }
        }

        /**
         * 获取分页显示文字，比如说默认情况下_get_text('<a href="">1</a>')将返回[<a href="">1</a>]
         *
         * @param String $str
         *
         * @return string $url
         */
        function _get_text($str)
        {
            return $this->format_left . $str . $this->format_right;
        }

        /**
         * 获取链接地址
         */
        function _get_link($url, $text, $style = '')
        {
            $style = (empty($style)) ? '' : 'class="' . $style . '"';
            if ($this->is_ajax) {
                //如果是使用AJAX模式
                return '<a ' . $style . ' href="javascript:' . $this->ajax_action_name . '(\'' . $url . '\')">' . $text . '</a> ';
            } else {
                return '<a ' . $style . ' href="' . $url . '">' . $text . '</a> ';
            }
        }

        /**
         * 出错处理方式
         */
        function error($function, $errormsg)
        {
            die('Error in file <b>' . __FILE__ . '</b> ,Function <b>' . $function . '()</b> :' . $errormsg);
        }
    }