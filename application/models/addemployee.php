<?php
class Model_AddEmployee extends Model
{

    public $errors = [];
    public $input_data = [];
    public function __construct()
    {
        parent::__construct();
    }

    public function verificationData() //варификация данных и определение названия таблицы
    {


    }

    public function addEmployees()
    {
        return 0;
    }

}

?>