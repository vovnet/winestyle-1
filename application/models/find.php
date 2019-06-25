<?php
class Model_Find extends Model
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

    public function getData()
    {
        $this->verificationData();
        if(count($this->errors)==0)
        {
            $sql = "SELECT * FROM table_name1";
            $result = DB::query($sql);
            $data = DB::fetch_array($result);
            return $data;
        }
    }

}

?>