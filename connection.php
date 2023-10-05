<?php
   $conn=new mysqli('localhost','root','','crudoperation');


   if($conn){
    "Connection Sucessful";
   } 
   
   else{
        die( mysqli_error($conn));
   }
?>