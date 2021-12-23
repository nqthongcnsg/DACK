<?php
include_once './config.php';
include 'pdo.php';
$masach=isset($_GET['dh51801707_idproduct'])?$_GET['dh51801707_idproduct']:'';
$email=isset($_GET['email'])?$_GET['email']:'';

$sql="delete from giohang where idProduct=? and email=?";
    $a=[$masach,$email];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
header('location:checkout.php');
