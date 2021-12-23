<?php
include_once './config.php';
include 'pdo.php';
if(!isset($_SESSION)) session_start();
 $u=isset($_POST['user'])?$_POST['user']:'';
 $p=isset($_POST['pass'])?$_POST['pass']:'';
$sql="select * from user";
$objStatament=$objPDO->prepare($sql);
$objStatament->execute();
$data=$objStatament->fetchALL(PDO::FETCH_OBJ);
foreach($data as $v){
    if($u==$v->email && $p==$v->matkhau){
        $_SESSION['user']=$u;
        header('location:index.php');
        exit;
    }
}
echo '<script language="javascript">';
            echo 'alert("Không có account !")';
            echo '</script>';
            header( "refresh:0.5;url=login.php" );
//header( "refresh:0.5;url=index.php" );
 ?>