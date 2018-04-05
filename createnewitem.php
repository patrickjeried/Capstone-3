<?php

session_start();

function getTitle() {
	echo 'Create New Item';
}

include 'htmlheader.php';

?>

</head>
<body>


	<!-- wrapper -->
	<main class="wrapper">

		<h1>Create New Item Page</h1>
		
		<form id="registerForm" method="POST" action="assets/createnewitem.php" class="form-group">


			<input hidden type="number" name="id" value="<?php echo $new_id; ?>">

			<label for="productName">Product Name</label>
			<input type="text" name="product_name" id="productName" placeholder="Enter product name" class="form-control">

			<label for="image">Image</label>
			<input type="file" class="form-control" name="image">

			<label for="price">Price</label>
			<input type="text" name="price" id="price" placeholder="PHP 0.00" class="form-control">

			<label for="description">Description</label>
			<textarea name="description" id="description" placeholder="Type product description here..." class="form-control"></textarea>

			<select name="category" class="form-control">
				<option>Category 1</option>
				<option>Category 2</option>
				<option>Category 3</option>
			</select>

			<input type="submit" name="submit" id="submit" value="Create Item" class="btn btn-primary">
		</form>

	</main>

	<div class="col-md-6" style="margin-top: 20px;">
			<td><a href="welcome.php" class="btn btn-success btn-block" style="background-color: orangered; width: 10em;"><i class="glyphicon glyphicon-menu-left"></i>Back to home</a></td>
		</div>

	<!-- main footer -->
	<?php include 'footer.php'; ?>


</body>
</html>