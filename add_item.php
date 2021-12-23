<?php
include_once './config.php';
include './pdo.php';
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['user']))
{
	       echo '<script language="javascript">';
            echo 'alert("Bạn hãy đăng nhập account")';
            echo '</script>';
            header( "refresh:0.5;url=login.php" );
}else{
$email=$_SESSION['user'];

$masach = isset($_GET['dh51801707_idproduct'])?$_GET['dh51801707_idproduct']:'';
$soluong= isset($_GET['dh51801707_soluong'])?$_GET['dh51801707_soluong']:'';
$size=isset($_GET['dh51801707_zise'])?$_GET['dh51801707_zise']:'';

$sqll='select * from product where idProduct=?';
$a=[$masach];
$tamn=$objPDO->prepare($sqll);
$tamn->execute($a);
$sach=$tamn->fetch(PDO::FETCH_OBJ);


$sql='select * from giohang where email =?';
$a=[$email];
$tam=$objPDO->prepare($sql);
$tam->execute($a);
$data=$tam->fetchALL(PDO::FETCH_OBJ);
$sqls='select * from zise where idzise=?';
$bcc=[$size];
$tam=$objPDO->prepare($sqls);
$tam->execute($bcc);

$nameSize=$tam->fetch(PDO::FETCH_OBJ);
foreach($data as $v)
{
    if($v->idProduct==$masach){
        echo '<script language="javascript">';
            echo 'alert("Trong giỏ hàng đã có hàng này rồi !")';
            echo '</script>';
            header( "refresh:0.5;url=index.php" );
    }
       
}


$sql='insert into giohang(idProduct,soluong,gia,size,email) values(?,?,?,?,?)';
$c=[$masach,$soluong,$sach->priceNew,$nameSize->name,$email];

$tam=$objPDO->prepare($sql);
$tam->execute($c);



header('location:checkout.php');
}



