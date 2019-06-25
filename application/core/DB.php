<?php
    class DB
    {
        private static $_instance = null;
        // для безопасности настройки лучше хранить в файле с конфигом

        private function __construct () {

            $this->_instance = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
                DB_USER,
                DB_PASS,
                [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
            );
        }

        private function __clone () {}
        private function __wakeup () {}

        public static function getInstance()
        {
            if (self::$_instance != null) {
                return self::$_instance;
            }
            return new self;
        }
        public function query($sql)
        {
            return $this->_instance->query($sql);
        }

    }