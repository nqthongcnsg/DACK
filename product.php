<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once './config.php';
include 'pdo.php';
if(!isset($_SESSION)) session_start();
$idCategories=isset($_GET['idCategories'])?$_GET['idCategories']:'';
$idDiscount=isset($_GET['idDiscounts'])?$_GET['idDiscounts']:'';
$idBrand=isset($_GET['idBrand'])?$_GET['idBrand']:'';
$idType=isset($_GET['idType'])?$_GET['idType']:'';
$dataproduct=null;
if($idCategories!='')
{
	$sql='select * FROM product JOIN categories ON product.idCategories = categories.idCategories where product.idCategories = ?';
	$objStatament=$objPDO->prepare($sql);
    $deta=[$idCategories];
	$objStatament->execute($deta);
	$dataproduct=$objStatament->fetchALL(PDO::FETCH_OBJ);
}
else if($idDiscount!=''){
	$sql='select * FROM product JOIN categories ON product.idCategories = categories.idCategories JOIN discount ON product.idDiscount = discount.idDiscount where product.idDiscount = ?';
	$objStatament=$objPDO->prepare($sql);
    $deta=[$idDiscount];
	$objStatament->execute($deta);
	$dataproduct=$objStatament->fetchALL(PDO::FETCH_OBJ);
}
else if($idBrand!=''){
	$sql='select * FROM product JOIN categories ON product.idCategories = categories.idCategories JOIN brand ON product.idBrand = brand.idBrand where product.idBrand = ?';
	$objStatament=$objPDO->prepare($sql);
    $deta=[$idBrand];
	$objStatament->execute($deta);
	$dataproduct=$objStatament->fetchALL(PDO::FETCH_OBJ);

}
else if($idType!=''){
	$sql='select * FROM product JOIN categories ON product.idCategories = categories.idCategories JOIN type ON product.idType = type.idType where product.idType = ?';
	$objStatament=$objPDO->prepare($sql);
    $deta=[$idType];
	$objStatament->execute($deta);
	$dataproduct=$objStatament->fetchALL(PDO::FETCH_OBJ);
	

}
else
{
	$sql='select * FROM product JOIN categories ON product.idCategories = categories.idCategories';
	$objStatament=$objPDO->prepare($sql);
	$objStatament->execute();
	$dataproduct=$objStatament->fetchALL(PDO::FETCH_OBJ);
	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Shop đồ thể thao</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="aa.css">
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--header-->
<?php  include './Subpage/header.php' ?>
<!--end-header-->

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Sản phẩm</h1>
		<em></em>
		<h2><a href="index.php">Trang chủ</a><label>/</label>Sản phẩm</h2>
	</div>
</div>
	<!--content-->
		
				<!--products-->
			<?php  include './Subpage/productSub.php' ?>
			<!--//products-->
		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive2" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive2" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive2" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive2" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			
			
		</div>
	<!--//content-->
		<!--//footer-->
	<?php include './Subpage/footer.php' ?>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 <!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
</body>
</html>