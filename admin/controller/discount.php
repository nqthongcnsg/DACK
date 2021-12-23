<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$product = new discount();
$kw = Utilities::get('kw');

if ($action=='all')
{
    //hien thi
    $dataProduct = $product->getall();//load data from model
    include './Views/discount/index.php';
    

}



if ($action=='insert')
{
    include './Views/discount/insert.php';
}


if ($action=='delete')
{ 
    
    $m=isset($_GET['idDiscount'])?$_GET['idDiscount']:'';
    //hien thi
    $data=$product->delete($m);
    $dataProduct = $product->getall();//load data from model
    include './Views/discount/index.php';
   
    
}
if ($action=='update')
{
    include './Views/discount/update.php';
}
if($action=='store'){
  
$m = isset($_POST['id'])?$_POST['id']:'';
$t = isset($_POST['name'])?$_POST['name']:'';

$sql="insert into discount(idDiscount,nameDiscount) 
                    values(?, ?) ";
$a =[$m, $t];
$product = new discount();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/discount/index.php';

}
if($action=='edit'){
 
    $m = isset($_POST['id'])?$_POST['id']:'';
    $t = isset($_POST['name'])?$_POST['name']:'';
    





$sql="update discount set nameDiscount=?  where idDiscount=?  ";
$a =[ $t,$m];
$product = new discount();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/discount/index.php';

}
