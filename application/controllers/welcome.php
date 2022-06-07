<?php 

class welcome extends amit{
    public function index()
    {
        $title = "amit";
        $this->view('welcome',$title);
    }
}

?>