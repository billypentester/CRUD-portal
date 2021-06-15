<?php

include 'connect.php';

$reg=$_POST['regno'];

$sql="delete from personal_data where RegNo='$reg'";
$query=mysqli_query($connect,$sql);
if($query){
    header("location:msg.html");
}
else{
    echo "try again! record not deleted";
}