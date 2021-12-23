<?php
$product=new product();


$dataType=$product->getType();
$dataBrand=$product->getBrand();
$dataCategories=$product->getCategories();
$dataDiscount=$product->getDiscount();
$m = isset($_GET['idproduct'])?$_GET['idproduct']:'';
$data =$product->getById($m);
$data1=null;
foreach($data as $da)
{
    $data1=$da;
}
?>

<form action="index.php?controller=product&action=edit" method="post" enctype="multipart/form-data">
					<table class="table">
						
						<tbody>
							<tr>
								<td scope="row"> ID :</td>
								<td><input type="text" name="id" value="<?php echo $data1['idProduct'] ?>" readonly></td>
								
							</tr>
							<tr>
								<td scope="row">Tên sản phẩm :</td>
								<td><input type="text" name="name" value="<?php echo $data1['namProduct'] ?>"></td>
							
							</tr>
							<tr>
								<td>Giá cũ : </td>
								<td><input type="number" name="priceold" value="<?php echo $data1['priceOld'] ?>"></td>
							</tr>
                            <tr>
								<td>Giá mới : </td>
								<td><input type="number" name="pricenew" value="<?php echo $data1['priceNew'] ?>"></td>
							</tr>
							
							
							<tr>
								<td>Loại</td>
								<td>
								<select name="idType" id="">
										<?php 
										foreach($dataType as $r)
										{
                                            $selected='';
                                            if ($r['idType']== $data1['idType']) $selected=' selected ';
											?>
											<option value="<?php echo $r['idType'] ?>" <?php echo $selected ?>><?php echo $r['nameType'] ?></option>
											<?php
										}
										?>
								</select>
								</td>
							</tr>
							<tr>
								<td>Thể loại : </td>
								<td>
								<select name="idCategories" id="">
										<?php 
												foreach($dataCategories as $r)
												{
                                                    $selected='';
                                                    if ($r['idCategories']== $data1['idCategories']) $selected=' selected ';
													?>
													<option value="<?php echo $r['idCategories'] ?>"<?php echo $selected ?>><?php echo $r['nameCategories'] ?></option>
													<?php
												}
												?>
							</select>
								</td>
							</tr>
                            <tr>
								<td>Thương hiệu : </td>
								<td>
								<select name="idBrand" id="">
										<?php 
												foreach($dataBrand as $r)
												{
                                                    $selected='';
                                                    if ($r['idBrand']== $data1['idBrand']) $selected=' selected ';
													?>
													<option value="<?php echo $r['idBrand'] ?>" <?php echo $selected ?>><?php echo $r['nameBrand'] ?></option>
													<?php
												}
												?>
							</select>
								</td>
							</tr>
                            <tr>
								<td>Khuyến mãi : </td>
								<td>
								<select name="idDiscount" id="">
										<?php 
												foreach($dataDiscount as $r)
												{
                                                    $selected='';
                                                    if ($r['idDiscount']== $data1['idDiscount']) $selected=' selected ';
													?>
													<option value="<?php echo $r['idDiscount'] ?>" <?php echo $selected ?>><?php echo $r['nameDiscount'] ?></option>
													<?php
												}
												?>
							</select>
								</td>
							</tr>

						</tbody>
					</table>





					<input type="submit" value="Update">

				</form>