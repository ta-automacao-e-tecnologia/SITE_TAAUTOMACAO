<?php

use PHPMailer\PHPMailer\Exception;

    require_once '../3-querys/database_querys.php';

    class actions extends querys
    {
        protected $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function execute_query($str_table_name, $str_query_selector, $array_parameters = '')
        {
            try
            {
                $str_query = $this::table_query($str_table_name, $str_query_selector);

                $result = $this::prepare_query($str_query, $array_parameters);
                $result->execute();
    
                if($result->rowCount() > 0)
                {
                    return $result->fetchAll(PDO::FETCH_OBJ);
                }
                else
                {
                    return 'error';
                }    
            }
            catch (Exception $e)
            {
                return 'error';
            }          
        }

        public function prepare_query($str_query, $parameters)
        {
            $parameters = is_array($parameters) ? $parameters : array($parameters);
            $str_query = $this->conn->prepare($str_query);

            for($i = 0; $i < count($parameters); $i++)
            {
                switch(gettype($parameters[$i]))
                {
                    case 'string':
                        $str_query->bindValue($i + 1, $parameters[$i], PDO::PARAM_STR);
                        break;

                    case 'integer': 
                        $str_query->bindValue($i + 1, $parameters[$i], PDO::PARAM_INT);
                        break;
                }
            }

            return $str_query; 
        }

        public function exec_query_read_table($str_table_name, $str_query_name)
        {
            return $this::execute_query($str_table_name, $str_query_name);
        }

        public function exec_query_login($str_table_name, $str_query_name, $array_parameters)
        {
            return $this::execute_query($str_table_name, $str_query_name, $array_parameters);
        }

    }