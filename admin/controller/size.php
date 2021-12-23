<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$product = new zise();
$kw = Utilities::get('kw');

if ($action=='all')
{
    //hien thi
    $dataProduct = $product->getall();//load data from model
    include './Views/zise/index.php';
    

}



if ($action=='insert')
{
    include './Views/zise/insert.php';
}


if ($action=='delete')
{ 
    
    $m=isset($_GET['idSize'])?$_GET['idSize']:'';
    //hien thi
    $data=$product->delete($m);
    $dataProduct = $product->getall();//load data from model
    include './Views/zise/index.php';
   
    
}
if ($action=='update')
{
    include './Views/zise/update.php';
}
if($action=='store'){
  
$m = isset($_POST['id'])?$_POST['id']:'';
$t = isset($_POST['name'])?$_POST['name']:'';

$sql="insert into zise(idzise,name) 
                    values(?, ?) ";
$a =[$m, $t];
$product = new zise();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/zise/index.php';

}
if($action=='edit'){
 
    $m = isset($_POST['id'])?$_POST['id']:'';
    $t = isset($_POST['name'])?$_POST['name']:'';
    





$sql="update zise set name=?  where idzise=?  ";
$a =[ $t,$m];
$product = new zise();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/zise/index.php';

}
