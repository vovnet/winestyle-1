<?php
class Find extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Find();
        $this->view = new View();
    }

    function action_index()
    {
       // $data = $this->model->getData();
        $errors = $this->model->errors;
        $data1 = '';
        $data2 = '';
        $this->view->generate('find_view.php','template_view.php',$data, $data1, $data2);
    }
}
