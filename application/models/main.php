<?php
class Model_Main extends Model
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

    public function getEmployees()
    {
        $this->verificationData();
        if(count($this->errors)==0)
        {
            $sql = "SELECT wo.surname, wo.name, pr.name_prof, wo.photo, wo.photoformat, pa.salarytotal, pa.date
                    FROM workers as wo INNER JOIN professions as pr ON wo.id_prof = pr.id_prof 
                    INNER JOIN payment as pa ON wo.id = pa.id ";
           if(isset($_GET['monthpay']))
           {
               $sql.= "WHERE pa.date LIKE '{$_GET['monthpay']}-%'";
           }
          else {
              $sql.= "WHERE date_format(pa.date, '%Y%m') = date_format(now(), '%Y%m')";
          }

            $object_pdo = $this->db->query($sql);
            $data = $object_pdo->fetchAll();
            return $data;
        }
    }

   public function addEmployees()
   {
       return 0;
   }

}

?>