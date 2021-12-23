
<?php
$a='select * FROM  brand ';
$objStatament=$objPDO->prepare($a);
$objStatament->execute();
$dta=$objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Nhãn hiệu</h4>
							 <ul class="cute">
							  <?php 
                              foreach($dta as $c)
                              {
                                  ?>
                                  <li class="subitem1"><a href="product.php?idBrand=<?php echo $c->idBrand ?>"><?php echo $c->nameBrand ?> </a>
                                    
							      </li>

                                  <?php
                              }
                              ?>
							
						</ul>
					</div>