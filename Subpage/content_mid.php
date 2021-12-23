<?php
$sql='SELECT * FROM product JOIN categories ON product.idCategories = categories.idCategories where product.namProduct like ? order by rand() limit 0, 8';
$a =["%$kw%"];
$objStatament=$objPDO->prepare($sql);
$objStatament->execute($a);
$data=$objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<div class="content-mid">
				<h3>Sản phẩm thịnh hành</h3>
				<label class="line"></label>
				<div class="mid-popular">
					<?php
					$flag=0;
					foreach($data as $v)
					{
						if($flag==8)
						{
							break;
						}
						else{
							?>
								<div class="col-md-3 item-grid simpleCart_shelfItem">
									<div class=" mid-pop">
										<div class="pro-img">
											<img src="image/<?php echo $v->img?>" class="img-responsive" alt="">
											<div class="zoom-icon ">
											<a class="picture" href="image/<?php echo $v->img?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
											<a href="single.php"><i class="glyphicon glyphicon-menu-right icon"></i></a>
											</div>
											</div>
											<div class="mid-1">
											<div class="women">
											<div class="women-top">
												<span><?php echo $v->nameCategories?></span>
												<h6><a href="single.php"><?php echo $v->namProduct?></a></h6>
												</div>
												<div class="img ">
													<a href="./single.php?dh51801707_idproduct=<?php echo $v->idProduct ?>"><img src="images/ca.png" alt=""></a>
												</div>
												<div class="clearfix"></div>
												</div>
												<div class="mid-2">
													<p ><label><?php echo $v->priceOld?>,000đ</label><em class="item_price"><?php echo $v->priceNew?>.000đ</em></p>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													
													<div class="clearfix"></div>
												</div>
												
										</div>
									</div>
							</div>
						<?php
						$flag++;
						}
						
					}
					?>
					
				</div>
</div>