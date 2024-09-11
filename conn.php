<?php
 $db_name='mysql:host=localhost;dbname=paradb'; 
 $name='root';
 $password='';
     $conn= new PDO($db_name,$name, $password);
     if(!$conn){
        echo'not connected';
     }
     if (!function_exists('unique_id')) {
      function unique_id(){
          $chars='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charslength=strlen($chars);
          $randomString= '';
          for($i=0;$i<20;$i++){
              $randomString.=$chars[mt_rand(0, $charslength - 1)];
          }
          return $randomString;
      }
  }
  
?>