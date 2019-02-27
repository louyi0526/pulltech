<?php
    class CI_Check_login
    {
	    function __construct(){
			if (!isset ($_SESSION)) {
				session_start();
			}
		}
        /**
         * 取SESSION中指定键对应的值
         * $_key:键值,例如user_id,user_name
         * $_url:默认是的null
         * 被设置值时说明SESSION失效后需要浏览器跳转
         *
         * 如果没设置值说明是ajax的请求,直接exit终止
         * 程序输出"no_login"字符串,javascript中需要做重新登录处理
         */
		
		function admin(){
			return 3;
		}
		
        function get_session($_key, $_url = null)
        {
            if (is_array($_key)) {
                $arr = array();
                foreach ($_key as $v) {
                    if (isset($_SESSION[$v])) {
                        array_push($arr, $_SESSION[$v]);
                    } else {
                    	if (false === $_url) {
                            //就想判断是不是登录
                            return false;
                        } else {
	                        redirect($_url);
                        }
                    }
                }

                return $arr;
            } else {
                if (isset($_SESSION[$_key])) {
                    return $_SESSION[$_key];
                } else {
                	if (false === $_url) {
                    	//就想判断是不是登录
                    	return false;
                    } else {
	                	redirect($_url);
                    }
                }
            }
        }

        /**
         * 仅判断用户是否登录
         */
        function is_login()
        {
            return isset($_SESSION['user_id']);
        }
		
        function role_auth($auth_role='0'){
	        $admin_role=$_SESSION['admin_role'];
	    	if ($admin_role != $auth_role){
	    		redirect(site_url('/admin'));
	    	}
        }
    }
