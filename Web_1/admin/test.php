<?php
$connection =mysqli_connect('localhost','root','','newtest');

if(mysqli_connect_errno())
{
    die ('Database connection fail');
}else
{
     echo "Connection success";
}
?>