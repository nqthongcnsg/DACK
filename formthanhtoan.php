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
		$sql="select * from user where email =?";
		$tam=$objPDO->prepare($sql);
		$tam->execute($a);
		$user=$tam->fetch(PDO::FETCH_OBJ);
		$n=0;
		$phigaohang=0;
		$tong=0;
		foreach($data1 as $v){
			$tong =$tong + $v->gia;
			$n++;


		}
		if($n<5){
			$phigaohang=$n*10;
		}else{
			$phigaohang=50;
		}


		
}else
{
    echo '<script language="javascript">';
            echo 'alert("Bạn hãy đăng nhập account")';
            echo '</script>';
            header( "refresh:0.5;url=login.php" );
  
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
<link rel="stylesheet" href="c.css">
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
		<h1>Thủ tục thanh toán</h1>
		<em></em>
		<h2><a href="index.php">Trang chủ </a><label>/</label>Thanh toán</h2>
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
<form action="thanhtoan.php" method="get">  
<div class="check-out">
<div class="container">
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    <div class="wrapper">
    <div class="container">
		<div class="login">
		
			
			<div class="col-md-6 login-do">
				<h3>Thông tin giao hàng</h3>
				</br>
				<h5>Tên</h5>
				<div class="login-mail">
				
					
					<input type="text" placeholder="Họ tên" name="ten" value="<?php echo $user->ten ?>">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<h5>Email</h5>
				<div class="login-mail">
				
					
					<input type="text" placeholder="Email" name="email" value="<?php echo $user->email?>">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<h5>Địa chỉ</h5>
				<div class="login-mail">
				
					
					<input type="text" placeholder="Địa chỉ" name="diachi" value="<?php echo $user->diachi ?>">
					<i  class="glyphicon glyphicon-lock"></i>
				</div>
				<h5>Số điện thoại</h5>
				<div class="login-mail">
				
					
					<input type="text" placeholder="Số điện thoại" name="sdt" value="<?php echo $user->dienthoai ?>">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				   
				
			</div>
			<div class="col-md-6 login-right">
				 <h3>Thông tin đơn hàng</h3>
				</br>
				</br>
				<div class="t">
					<label><pre> Tạm tính ( <?php echo $n ?> Sãn phẩm)          <?php echo $tong ?>,000đ</pre></label>
				</div>
				<div class="t">
					<label><pre> Phí Giao hàng                   <?php echo $phigaohang ?>,000đ</pre></label>
				</div>
				<div class="t">
					<label><pre> Tổng cộng                       <?php echo $phigaohang + $tong ?>,000đ</pre></label>
				</div>

			</div>
			
			<div class="clearfix"> </div>
			
		</div>

</div>
</div>

	</div>
	</div>
	<div class="produced">
	<input type="submit" value="Thanh toán" class="hvr-skew-backward">
	 </div>
</div>
</div>
</form>

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