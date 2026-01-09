<?php
    $src = $_FILES['lostitempicture']['tmp_name'];
    $ext = explode('.', $_FILES['lostitempicture']['name']);
    $count = count($ext);
    $fileExt = $ext[$count-1];
    $originalName = $ext[0];
    $des = "../Upload/".$originalName."_".time().".".$fileExt;

   if(move_uploaded_file($src, $des)){
    echo "success";
   }else{
    echo "error";
   }
?>