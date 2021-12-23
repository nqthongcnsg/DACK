<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$product = new categories();
$kw = Utilities::get('kw');

if ($action=='all')
{
    //hien thi
    $dataProduct = $product->getall();//load data from model
    include './Views/categories/index.php';
    

}



if ($action=='insert')
{
    include './Views/categories/insert.php';
}


if ($action=='delete')
{ 
    
    $m=isset($_GET['idCategories'])?$_GET['idCategories']:'';
    //hien thi
    $data=$product->delete($m);
    $dataProduct = $product->getall();//load data from model
    include './Views/categories/index.php';
   
    
}
if ($action=='update')
{
    include './Views/categories/update.php';
}
if($action=='store'){
  
$m = isset($_POST['id'])?$_POST['id']:'';
$t = isset($_POST['name'])?$_POST['name']:'';

$sql="insert into categories(idCategories,nameCategories) 
                    values(?, ?) ";
$a =[$m, $t];
$product = new categories();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/categories/index.php';

}
if($action=='edit'){
 
    $m = isset($_POST['id'])?$_POST['id']:'';
    $t = isset($_POST['name'])?$_POST['name']:'';
    





$sql="update categories set nameCategories=?  where idCategories=?  ";
$a =[ $t,$m];
$product = new categories();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/categories/index.php';

}
