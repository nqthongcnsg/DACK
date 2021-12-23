<div class="col-md-3 product-bottom product-at">
			<!--categories-->
				<?php include './Subpage/categories.php' ?>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
                    <?php include './Subpage/discount.php' ?>			 				 
				 
					
					 <!---->
					<?php include './Subpage/type.php' ?>
				   	<?php include './Subpage/brand.php'?>	
		</div>
		<div class="clearfix"> </div>
	</div>
	