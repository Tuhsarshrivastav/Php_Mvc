<?php
  class Framework {
      public  function view($viewName,$data =[]){
           if(file_exists("../application/views/" . $viewName . ".php")){
               require_once "../application/views/$viewName.php";
           }else{
            echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry  ".$viewName.".php file not found</div>";
           }
      }

      public function model($modelName){
    if(file_exists("../application/models/" .$modelName . ".php")){
     require_once "../application/models/$modelName.php";
     return new $modelName;
    }else{
      echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry  ".$modelName.".php file not found</div>";
     }
      }
  }
