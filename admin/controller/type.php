<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$product = new type();
$kw = Utilities::get('kw');

if ($action=='all')
{
    //hien thi
    $dataProduct = $product->getall();//load data from model
    include './Views/type/index.php';
    

}



if ($action=='insert')
{
    include './Views/type/insert.php';
}


if ($action=='delete')
{ 
    
    $m=isset($_GET['idType'])?$_GET['idType']:'';
    //hien thi
    $data=$product->delete($m);
    $dataProduct = $product->getall();//load data from model
    include './Views/type/index.php';
   
    
}
if ($action=='update')
{
    include './Views/type/update.php';
}
if($action=='store'){
  
$m = isset($_POST['id'])?$_POST['id']:'';
$t = isset($_POST['name'])?$_POST['name']:'';

$sql="insert into type(idType,nameType) 
                    values(?, ?) ";
$a =[$m, $t];
$product = new type();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/type/index.php';

}
if($action=='edit'){
 
    $m = isset($_POST['id'])?$_POST['id']:'';
    $t = isset($_POST['name'])?$_POST['name']:'';
    





$sql="update type set nameType=?  where idType=?  ";
$a =[ $t,$m];
$product = new type();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/type/index.php';

}
