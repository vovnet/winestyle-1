<?php
class autoload
{
    public function autoloader_core($file_name)
    {
        require_once 'application/core/' .$file_name.'.php';
    }
}
?>