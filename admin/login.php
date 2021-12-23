<?php
if(!isset($_SESSION)) session_start();
$u=isset($_POST['user'])?$_POST['user']:'';
$p=isset($_POST['pass'])?$_POST['pass']:'';

include_once './config.php';
include './pdo.php';
$sql='SELECT * FROM quantri';
$objStatament= $objPDO->prepare($sql);
$objStatament->execute();
$datadmin=$objStatament->fetchALL(PDO::FETCH_OBJ);

foreach($datadmin as $v)
{
    if($u==$v->username && $p==$v->pass)
    {
        $_SESSION['quantri']=$u;
        header('location:index.php');
        
    }
}

echo '<script language="javascript">';
echo 'alert("Không có account !")';
echo '</script>';
header( "refresh:0.5;url=login.html" );

?>