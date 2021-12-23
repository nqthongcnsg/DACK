<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once './config.php';
include 'pdo.php';


$masach=isset($_GET['dh51801707_idproduct'])?$_GET['dh51801707_idproduct']:'';
$sql='select * from product where idProduct= ?';
$b=[$masach];
$tam=$objPDO->prepare($sql);
$tam->execute($b);
$sach=$tam->fetch(PDO::FETCH_OBJ);
$sql='select * from giohang where idProduct= ?';
$c=[$masach];
$tam=$objPDO->prepare($sql);
$tam->execute($c);
$hd=$tam->fetch(PDO::FETCH_OBJ);
$sql='select * from zise';

$tam=$objPDO->prepare($sql);
$tam->execute();
$zise=$tam->fetchAll(PDO::FETCH_OBJ);
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
<?php include './Subpage/header.php'?>
<!--end-header-->

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Chi tiết</h1>
		<em></em>
		<h2><a href="index.php">Trang chủ</a><label>/</label>Chi tiết</h2>
	</div>
</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/si.jpg">
			        <div class="thumb-image"> <img src="image/<?php echo $sach->img?>" data-imagezoom="true" class="img-responsive2"> </div>
			    </li>
			    
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
						<form action="update_item.php" method="get"> 
						<input type="text" name="dh51801707_idproduct" value=<?php echo $sach->idProduct ?> readonly>
				<h3><?php echo $sach->namProduct ?></h3>
				<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">$<?php echo $sach->priceNew?>.00</span>
				
				 <div class="clearfix"></div>
				</div>
				
			    <div class="wish-list">
					Size : 
				 	<select name="dh51801707_zise" >
						 
						 <?php
						 foreach($zise as $r)
						 {
							 $selected='';
							 if ($r->name== $hd->zise) $selected=' selected ';
							 ?>
							 <option value="<?php echo $r->idzise ?>" <?php echo $selected ?> >
								 <?php echo $r->name ?></option>
							 <?php
						 }
						 ?>
					 </select>
				 </div>
				         <div class="quantity"> 
				            <div class="quantity-select">                           
									Số lượng :
									<input type="number" name="dh51801707_soluong" value="<?php echo $hd->soluong ?>" >
								
							</div>
							</div>
							<input type="submit" value="Add to cart"  class="add-to  hvr-skew-backward">
						</form>
							<!--quantity-->
	<script>
    $('.value-plus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    	divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    	if(newVal>=1) divUpd.text(newVal);
    });
	</script>
	<!--quantity-->
				 
			   
			<div class="clearfix"> </div>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		
	</nav>


<!----->

<!--menuRight-->

<!--end-menuRight-->
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
	
		<!--//footer-->
<script src="js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>