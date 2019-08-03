<?php
if($_POST['name']=="" || $_POST['image'] == ""){
    header("location:./index.php");
}else{
    $img = $_POST['image'];
    $folderPath = "upload/";
    $name = $_POST['name'];
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = $name . '.png';

   // $fileName = $name . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
    echo " success";
}
       
?>