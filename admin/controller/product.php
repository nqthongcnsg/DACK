<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
$action= Utilities::get('action', 'all');
$product = new product();
$kw = Utilities::get('kw');
if ($action=='index')
{
    //hien thi
    $dataProduct = $product->random(10);//load data from model
    include './Views/product/index.php';

}
if ($action=='all')
{
    //hien thi
    $dataProduct = $product->getall();//load data from model
    include './Views/product/index.php';
    

}

if ($action=='search')
{
    
    //hien thi
    $dataProduct = $product->search($kw);//load data from model
    include './Views/product/index.php';

}

if ($action=='insert')
{
    include './Views/product/insert.php';
}


if ($action=='delete')
{ 
    
    $m=isset($_GET['idproduct'])?$_GET['idproduct']:'';
    //hien thi
    $data=$product->delete($m);
    $dataProduct = $product->getall();//load data from model
    include './Views/product/index.php';
   
    
}
if ($action=='update')
{
    include './Views/product/update.php';
}
if($action=='store'){
  
$m = isset($_POST['id'])?$_POST['id']:'';
$t = isset($_POST['name'])?$_POST['name']:'';
$gn = isset($_POST['pricenew'])?$_POST['pricenew']:0;

$go = isset($_POST['priceold'])?$_POST['priceold']:0;

$idtype=  isset($_POST['idType'])?$_POST['idType']:'t1';
$idbrand=  isset($_POST['idBrand'])?$_POST['idBrand']:'b1';
$idcate=  isset($_POST['idCategories'])?$_POST['idCategories']:'c1';
$iddis=  isset($_POST['idDiscount'])?$_POST['idDiscount']:'d1';

$h ='';


if (isset($_FILES['img']))
{
    if ($_FILES['img']['error']==0) //ok
    {
        $h = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "../image/$h");
    }
}
$sql="insert into product(idProduct,namProduct,priceOld,priceNew,idType,idDiscount,idBrand,img,idCategories) 
                    values(?, ?, ?, ?, ?, ?, ?,?,?) ";
$a =[$m, $t, $go, $gn, $idtype, $iddis, $idbrand,$h,$idcate];
$product = new product();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/product/index.php';

}
if($action=='edit'){
 
    $m = isset($_POST['id'])?$_POST['id']:'';
    $t = isset($_POST['name'])?$_POST['name']:'';
    $gn = isset($_POST['pricenew'])?$_POST['pricenew']:0;
    
    $go = isset($_POST['priceold'])?$_POST['priceold']:0;
    
    $idtype=  isset($_POST['idType'])?$_POST['idType']:'t1';
    $idbrand=  isset($_POST['idBrand'])?$_POST['idBrand']:'b1';
    $idcate=  isset($_POST['idCategories'])?$_POST['idCategories']:'c1';
    $iddis=  isset($_POST['idDiscount'])?$_POST['idDiscount']:'d1';





$sql="update product set namProduct=?, priceOld=?, priceNew=?, idType=?, idDiscount=?, idBrand=?, idCategories=?  where idProduct=?  ";
$a =[ $t,$go,$gn,$idtype,$iddis,$idbrand,$idcate,$m];
$product = new product();
$n=$product->updateSach($sql,$a);  
//ket 

$dataProduct = $product->getall();//load data from model
    include './Views/product/index.php';

}
