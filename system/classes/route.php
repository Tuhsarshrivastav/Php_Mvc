<?php
  class route {
      public function __construct()
      {
        $url =  $this->url();
        print_r($url);
      }

     public function url()
      {
        if(isset($_GET['url'])){
          $url = $_GET['url'];
          $url  = rtrim($url);
          $url  =filter_var($url,FILTER_SANITIZE_URL);
          $url  = explode("/",$url);
          return $url;
        }
      }
  }
