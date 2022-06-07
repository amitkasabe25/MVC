<?php 

class NewController extends amit{
    public function index()
    { 
        
        $myModel = $this->model('userModel');
        $myModel->myData();
    }
    public function user()
    {
        $myModel = $this->model('userModel');
        if($myModel->myData()){
            echo "success";
        }
        else 
        {
            echo "failed";
        }
        
        
    }
}

?>