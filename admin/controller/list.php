<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$list=new oderlist();
$kw = Utilities::get('kw');


if ($action=='all')
{
    //hien thi
    $dataProduct = $list->getall();//load data from model
    include './Views/list/index.php';
    

}

if ($action=='search')
{
    
    //hien thi
    $dataProduct = $product->search($kw);//load data from model
    include './Views/product/index.php';

}





