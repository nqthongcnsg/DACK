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
if(isset($_SESSION['user'])){
	
	
		$sql='select * from giohang join product on giohang.idProduct=product.idProduct where email =?';
		$a=[$_SESSION['user']];
		$tam=$objPDO->prepare($sql);
		$tam->execute($a);
		$data1=$tam->fetchALL(PDO::FETCH_OBJ);

		
}else
{
   $data1='';
  
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
</head>
<body>
<!--header-->
  <?php include './Subpage/header.php' ?>
<!--end-header-->

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Giỏ hàng</h1>
		<em></em>
		<h2><a href="index.php">Trang chủ</a><label>/</label>Giỏ hàng</h2>
	</div>
</div>
<!--login-->
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
<div class="check-out">
<div class="container">
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th class="table-grid">Sản phẩm</th>
					
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Kích cỡ</th>
			
			<th>Tổng tiền</th>

		  </tr>
		  <?php
		    if($data1!='')
			{
			   foreach($data1 as $v)
			   {
				   ?>	
					
				<tr class="cart-header">
	  
				  <td class="ring-in"><a href="#" class="at-in"><img src="image/<?php echo $v->img?>" class="img-responsive2" alt=""></a>
				  <div class="sed">
					  <h5><a href="single.php"><?php echo $v->namProduct ?></a></h5>
					  
				  
				  </div>
				  <div class="clearfix"> </div>
				  
				  <td><?php echo $v->gia?>,000đ</td>
				  <td> <?php echo $v->soluong?></td>
				  <td> <?php echo $v->size?></td>

				  
				  <td class="item_price"><?php echo ($v->gia*$v->soluong)?>,000đ</td>
				  <td class="add-check"><a class="hvr-skew-backward" href="delete_item.php?dh51801707_idproduct=<?php echo $v->idProduct ?>&email=<?php echo $_SESSION['user'] ?>">XÓA</a></td>
				  <td class="add-check"><a class="hvr-skew-backward" href="edi_item.php?dh51801707_idproduct=<?php echo $v->idProduct ?>">SỬA</a></td>
   
				</tr>
	  
				   <?php
			   }
			}
		  ?>

		
		  
	</table>
	</div>
	</div>
	<div class="produced">
	<a href="formthanhtoan.php " class="hvr-skew-backward">Thanh toán</a>
	 </div>
</div>
</div>

<!--//login-->
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
	<!--//content-->
	<!--//footer-->
	<?php include './Subpage/footer.php' ?> 
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>