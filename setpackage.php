<?php
session_start();
$id=$_REQUEST['pid'];
$_SESSION['pid']=$id;
//echo $id;
?>