<?php
include './config.php';
include './pdo.php';
$masach = isset($_GET['dh51801707_idproduct'])?$_GET['dh51801707_idproduct']:'';
$soluong= isset($_GET['dh51801707_soluong'])?$_GET['dh51801707_soluong']:'';
$idsize= isset($_GET['dh51801707_zise'])?$_GET['dh51801707_zise']:'';
$sqls='select * from zise where idzise=?';
$bcc=[$idsize];
$tam=$objPDO->prepare($sqls);
$tam->execute($bcc);

$nameSize=$tam->fetch(PDO::FETCH_OBJ);
$sql="update giohang set soluong=?,size=?  where idProduct=?  ";
$a =[ $soluong,$nameSize->name, $masach];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van

// echo "<pre>Da them $n dong";
// echo $sql ;

header('location:checkout.php');