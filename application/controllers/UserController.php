<?php 

class UserController extends amit{
    public function index()
    {
        $this->view('userView');
        $myModel = $this->model('userModel');
        $myModel->myData();
        echo "hello";
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