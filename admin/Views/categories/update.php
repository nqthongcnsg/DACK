
<?php
$product=new categories();
$m = isset($_GET['idCategories'])?$_GET['idCategories']:'';
$data =$product->getById($m);
$data1=null;
foreach($data as $da)
{
    $data1=$da;
}

?>

<form action="index.php?controller=categories&action=edit" method="post" enctype="multipart/form-data">
					<table class="table">
						
						<tbody>
							<tr>
								<td scope="row"> ID :</td>
								<td><input type="text" name="id" value="<?php echo $data1['idCategories'] ?>" readonly></td>
								
							</tr>
							<tr>
								<td scope="row">Tên Loại :</td>
								<td><input type="text" name="name" value="<?php echo $data1['nameCategories'] ?>"></td>
							
							</tr>
							
						</tbody>
					</table>





					<input type="submit" value="Update">

				</form>