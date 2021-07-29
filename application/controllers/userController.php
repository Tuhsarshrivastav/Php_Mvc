<?php
class userController extends Framework
{
    public function index()
    {
        echo "userController";
    }
    public function userMethod()
    {
        $myModel = $this->model('userModel');
       if($myModel->myData()){
         $result = $myModel->myData();
       }else{
           echo "Sorry issue";
       }
       $this->view("userView",$result);
    }
}
