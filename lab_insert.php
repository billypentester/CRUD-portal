<?php

include 'connect.php';

$p=$_POST['p'];
$c=$_POST['c'];
$reg=$_POST['regno'];

$sql="insert into lab (RegNo,Lab_Physics,Lab_Computer) values ('$reg','$p','$c')";
$query=mysqli_query($connect,$sql);

if($query){
    header("location:msg.html");
}
else{
    echo "try again! record not entered";
}
