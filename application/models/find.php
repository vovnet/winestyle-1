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
            $sql = "SELECT * FROM workers";
            $object_pdo = $this->db->query($sql);
            $data = $object_pdo->fetchAll();
            return $data;
        }
    }

}

?>