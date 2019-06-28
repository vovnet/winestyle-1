<?php
class Main extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    private function CBR_XML_Daily_Ru() {
        $json_daily_file = __DIR__.'/daily.json';
        if (!is_file($json_daily_file) || filemtime($json_daily_file) < time() - 3600) {
            if ($json_daily = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js')) {
                file_put_contents($json_daily_file, $json_daily);
            }
        }
        return json_decode(file_get_contents($json_daily_file));
    }


    public function action_index()
    {
        $this->view->generate('main_view.php','template_view.php','', '', '');
    }

    public function action_getEmployees()
    {
        $data = $this->model->getEmployees();
        $data_CBR = $this->CBR_XML_Daily_Ru();
        $usd_value = $data_CBR->Valute->USD->Value;
        $this->view->generate('employees_view.php','template_view.php',$data, $usd_value, '');
    }
    public function action_addEmployees()
    {
        $data = $this->model->getProfessions();
        $this->view->generate('addemployee_view.php','template_view.php',$data, '', '');
    }
    public function action_givePremium()
    {
        $data = $this->model->getProfessions();
        $this->view->generate('givepremium_view.php','template_view.php',$data, '', '');
    }
    public function action_exchangerate()
    {
        $data = $this->CBR_XML_Daily_Ru();
        $usd_value = $data->Valute->USD->Value;
        $this->view->generate('exchangerate_view.php','template_view.php',$usd_value, '', '');
    }


}
