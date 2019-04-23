<?php

    /*** Defina as querys do seu projeto aqui ***/

    class querys
    {
        // protected $ALL_DATA = "SELECT * FROM table";
        // protected $LOGIN = "SELECT * FROM table WHERE user = ? AND pass = ?";

        public function table_query($str_table_name, $query_selector)
        {
            switch($query_selector)
            {
                case 'ALL_DATA':
                    $query = "SELECT * FROM table";
                    $query = str_replace('table', $str_table_name, $query);
                    break;

                case 'LOGIN':
                    $query = "SELECT * FROM table WHERE user = ? AND pass = ?";
                    $query = str_replace('table', $str_table_name, $query);
                    break;
            }

            return $query;
        }
    }