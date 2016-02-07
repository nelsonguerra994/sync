<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];           
      if($file_size > 20971520) {
         $errors[]='File size must be excately 20 MB';
      }      
      if(empty($errors)==true) {
         $id = mt_rand(1,9999);
         $newname=$id."-".$file_name;
         move_uploaded_file($file_tmp,"uploaded/".$newname);        
         $myfile = fopen("base.txt", "a");
         $txt = $id.",".$newname."\n";
         fwrite($myfile,$txt);
         fclose($myfile);
         header("Location: index.html");
         exit;        
      }else{
         print_r($errors);
      }
   }
?>
 