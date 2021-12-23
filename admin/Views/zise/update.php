
<?php
$product=new zise();
$m = isset($_GET['idSize'])?$_GET['idSize']:'';
$data =$product->getById($m);
$data1=null;
foreach($data as $da)
{
    $data1=$da;
}
?>
<form action="index.php?controller=size&action=edit" method="post" enctype="multipart/form-data">
					<table class="table">
						
						<tbody>
							<tr>
								<td scope="row"> ID :</td>
								<td><input type="text" name="id" value="<?php echo $data1['idzise'] ?>" readonly></td>
								
							</tr>
							<tr>
								<td scope="row">Tên Size :</td>
								<td><input type="text" name="name" value="<?php echo $data1['name'] ?>"></td>
							
							</tr>
							
						</tbody>
					</table>





					<input type="submit" value="Update">

				</form>