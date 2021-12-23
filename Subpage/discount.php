
<?php
$a='select * FROM  discount ';
$objStatament=$objPDO->prepare($a);
$objStatament->execute();
$dta=$objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Khuyến mãi</h4>
							 <ul class="cute">
							  <?php 
                              foreach($dta as $c)
                              {
                                  ?>
                                  <li class="subitem1"><a href="product.php?idDiscounts=<?php echo $c->idDiscount ?>"><?php echo $c->nameDiscount?> </a>
                                    
							      </li>

                                  <?php
                              }
                              ?>
							
						</ul>
					</div>