<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$product = new brand();
$kw = Utilities::get('kw');

if ($action=='all')
{
    //hien thi
    $dataProduct = $product->getall();//load data from model
    include './Views/brand/index.php';
    

}



if ($action=='insert')
{
    include './Views/brand/insert.php';
}


if ($action=='delete')
{ 
    
    $m=isset($_GET['idBrand'])?$_GET['idBrand']:'';
    //hien thi
    $data=$product->delete($m);
    $dataProduct = $product->getall();//load data from model
    include './Views/brand/index.php';
   
    
}
if ($action=='update')
{
    include './Views/brand/update.php';
}
if($action=='store'){
  
$m = isset($_POST['id'])?$_POST['id']:'';
$t = isset($_POST['name'])?$_POST['name']:'';

$sql="insert into brand(idBrand,nameBrand) 
                    values(?, ?) ";
$a =[$m, $t];
$product = new brand();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/brand/index.php';

}
if($action=='edit'){
 
    $m = isset($_POST['id'])?$_POST['id']:'';
    $t = isset($_POST['name'])?$_POST['name']:'';
    





$sql="update brand set nameBrand=?  where idBrand=?  ";
$a =[ $t,$m];
$product = new brand();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/brand/index.php';

}
