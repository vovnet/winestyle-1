<?php
class Model
{

    public function autoload_class($class_name)
    {
            require_once $class_name.'.php';
    }

    public function __construct()
       {
           $this->autoload_class('DB');
           DB::getInstance();
       }
    /*
        Модель обычно включает методы выборки данных, это могут быть:
            > методы нативных библиотек pgsql или mysql;
            > методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
            > методы ORM;
            > методы для работы с NoSQL;
            > и др.
    */

	// метод выборки данных
	public function get_data()
	{
		// todo
	}



}