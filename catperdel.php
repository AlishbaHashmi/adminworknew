<?php
include('includes/config.php');

$id = $_GET['id'];

$per_del = "DELETE from `category` where cid = '$id' ";

$result = mysqli_query($connection, $per_del);
if(!$result){
    echo "query failed";
}else{
    header('location:http://localhost/adminworknew/cattrash.php');
}

?>