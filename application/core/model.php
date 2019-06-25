<?php

class Model
{
public $db;

    public function __construct()
       {
           $this->db = DB::getInstance();
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