<?php
class AddEmployee extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    public function action_index()
    {
        $data = $this->model->getEmployees();
        $this->view->generate('addemployee_view.php','template_view.php',$data, '', '');
    }
    public function action_addEmployees()
    {
        $data = $this->model->addEmployees();
        $errors = '';// $this->model->errors;
        $data1 = '';
        $data2 = '';
        $this->view->generate('addemployee_view.php','template_view.php',$data, $data1, $data2);
    }

}
