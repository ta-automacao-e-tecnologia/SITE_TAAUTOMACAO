<?php

    require_once '../0-php-framework/Classes/database_connection.php';
    require_once '../0-php-framework/Classes/database_actions.php';

    class controller extends connection
    {
        protected $str_table_name;
        protected $obj_query;

        public function __construct()
		{
			//Executa construtor do connection
            parent::__construct();
            $this->obj_query = new actions($this->conn);
        }
        
        public function read_table($str_table_name)
        {
            $table_data = $this->obj_query->exec_query_read_table($str_table_name, 'ALL_DATA');
            $table_data = is_array($table_data) ? json_encode($table_data) : "error";
            
            return $table_data;
        }

        public function login($str_table_name, $user, $pass)
        {
            $array_parameters = array($user, $pass);
            $table_login = $this->obj_query->exec_query_login($str_table_name, 'LOGIN', $array_parameters);
            $table_login = is_array($table_login) ? json_encode($table_login) : "error";

            return $table_login;
        }
    }