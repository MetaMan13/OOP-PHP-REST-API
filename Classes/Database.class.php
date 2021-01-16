<?php
    class Database{
        private $database_host = 'localhost';
        private $database_port = "3306";
        private $database_user = 'root';
        private $database_password = '';
        private $database_type = "mysql";
        private $database_name = "oop_php_rest_api";
        private $database_charset = "utf8mb4";
        protected $database_connection;

        // Methods
        public function __construct()
        {
            $options = [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $dns = "$this->database_type:host=$this->database_host;dbname=$this->database_name;charset=$this->database_charset;port=$this->database_port";

            try{
                $this->database_connection = new \PDO($dns, $this->database_user,$this->database_password, $options);
            }catch (\PDOException $e){
                throw new \PDOException($e-getMessage(), $e->getCode());
            }
        }
    }