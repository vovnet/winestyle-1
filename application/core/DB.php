<?php
    class DB
    {
        protected static $_instance;
        protected $connect;

        public static function getInstance()
        {
            if (self::$_instance === null)
            {
                self::$_instance = new self;
            }
            return self::$_instance;
        }

        private function __construct()
        {
            $this->connect = pg_connect(connection_string) or die("Невозможно установить соединение" . pg_last_error());

        }

        private function __clone()
        {

        }

        private function __wakeup()
        {

        }


        public static function query($sql)
        {

            $obj = self::$_instance;

            if (isset($obj->connect)) {
              //  $obj->count_sql++;
                $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
                return $result;
            }
            return false;
        }

        public static function fetch_array($result)
        {
            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                $data[] = $line;
            }
            return isset($data)? $data: null;
        }

        public function __destruct()
        {
            pg_close($this->connect);
        }
    }