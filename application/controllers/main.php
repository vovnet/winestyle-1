<?php
class Main extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    public function action_index()
    {
        $this->view->generate('main_view.php','template_view.php','', '', '');
    }
    public function action_getEmployees()
    {
        $data = $this->model->getEmployees();
        $errors = '';// $this->model->errors;
        $data1 = '';
        $data2 = '';
        $this->view->generate('employees_view.php','template_view.php',$data, $data1, $data2);
    }

}
