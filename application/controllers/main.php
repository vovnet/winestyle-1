<?php
class Main extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }


    function action_index()
    {
        $input = $this->model->getNamePageInput();
        $find = $this->model->getNamePageFind();
        $this->view->generate('main_view.php', 'template_view.php', $input, $find);
    }
}
?>