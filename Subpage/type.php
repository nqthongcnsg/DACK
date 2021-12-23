
<?php
$a='select * FROM  type ';
$objStatament=$objPDO->prepare($a);
$objStatament->execute();
$dta=$objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Loại</h4>
							 <ul class="cute">
							  <?php 
                              foreach($dta as $c)
                              {
                                  ?>
                                  <li class="subitem1"><a href="product.php?idType=<?php echo $c->idType ?>"><?php echo $c->nameType?> </a>
                                    
							      </li>

                                  <?php
                              }
                              ?>
							
						</ul>
					</div>