<?php
	require '../classes/databaseTable.php';
	$productAdd = new DatabaseTable('tbl_product');
	if(isset($_POST['save'])){
		unset($_POST['save']);
		$productAdd->insert($_POST);
		echo "Product Inserted Successfully";
	}
?>

<h3>Enter Product Details</h3>
<form method="POST" action="">
	Product Name : <input type="text" name="name"><br><br>
	Product Price : <input type="text" name="price"><br><br>
	Product Model : <input type="text" name="model"><br><br>

	<input type="submit" name="save" value="Save">
</form>