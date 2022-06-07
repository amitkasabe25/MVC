<?php

class amit {
    public function view($viewName , $data = [])
    {
        if(file_exists("../application/views/".$viewName.".php")){
            include "../application/views/$viewName.php";
        }
        else 
        {
            echo "view not found";
        }
    }
    public function model($modelName){
        if(file_exists("../application/models/".$modelName.".php"))
        {
            require_once "../application/models/$modelName.php";
            return new $modelName;
        }
    }
}

?>