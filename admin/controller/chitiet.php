<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$list=new chitiet();
$kw = Utilities::get('kw');
$mhd= Utilities::get('mahd','');

if ($action=='all')
{
    //hien thi
    $sql='SELECT * FROM  chitiethd JOIN product on chitiethd.idProduct=product.idProduct where mahd=?';
    $a=[$mhd];
    $dataProduct = $list->select($sql, $a);//load data from model
    include './Views/chitiet/index.php';
    

}

if ($action=='search')
{
    
    //hien thi
    $dataProduct = $product->search($kw);//load data from model
    include './Views/product/index.php';

}





