<?php

include './php/classes/Admin.php';
$removePost=new Admin();
$id=$_GET['id'];
$data=$removePost->delete_post($id);
unlink("upload_image/".$_GET['image']);
if(!$data){
    echo 'Error to Delete ';
}
header("Location:manage_post.php");

