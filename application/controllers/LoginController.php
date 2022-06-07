<?php 

class LoginController extends amit{

    public function index()
    {
        $title = "amit";
        $this->view('userView',$title);
    }



}


?>