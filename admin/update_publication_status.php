<?php

include './php/classes/Admin.php';
$update_status=new Admin();

if($_GET['status']==0){
    $status=1;
}
 else {
echo $status=0;    
}


$data=$update_status->update_publication_status($_GET['id'], $status);
header("Location:manage_post.php");
