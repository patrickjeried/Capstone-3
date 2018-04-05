

<?php
	include_once 'htmlheader.php';
?> 
	<body>
		<br />
		<main id="catalogWrapper" class="wrapper">
		<div class="container">
			 <h1>Products</h1> 


              <?php


              	if (isset($_SESSION['current_user'])) {
			echo '<h3>Welcome ' . $_SESSION['current_user'] . '!</h3>';
		}


              ?>

			<?php

				$query = "SELECT * FROM products ORDER BY productid ASC";
				$result = mysqli_query($con, $query);


				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="item col-sm-6 col-md-4">
				<form method="POST" action="cartAction.php" class="form-group">
					<div style="border:2px solid #fff; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">

						<input type="hidden" type="label" name="prodid"  value="<?php echo $row["productid"]; ?>" </br> 
						 <img name="prodimage" src="assets/images/<?php echo $row['productimage'] ?>" alt="<?php echo $row['productimage'] ?>" title="<?php echo $row['productimage'] ?>" height=150vh width=150vh/><br />
						 <input type="hidden" type="label" name="image" value="<?php echo $row["productimage"]; ?>" </br> 

						<input type="hidden" type="label" name="prodname"  value="<?php echo $row["productname"]; ?>" class="text-info"><?php echo $row["productname"]; ?> </br> 

						 <input type="hidden" type="label" name="proddesc" value="<?php echo $row["productdesc"]; ?>" class="list-group-item-text"><?php echo $row["productdesc"]; ?> </br>

						<input type="hidden" type="label" name="price" value="<?php echo $row["price"]; ?>" class="text-danger">PHP <?php echo $row["price"]; ?></br>

						<input type="number" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>


			<div style="clear:both"></div>
			<br />
			<h3>Shopping Cart</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php


					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>

					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>

				<td><a href="end.php" class="btn btn-success btn-block" style="background-color: orangered; width: 10em; margin-left: 56em;">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>

			</div>
		</div>
	</div>
	<br />

</main>
	</body>
</html>


<?php
	include_once 'footer.php';
?> 


<!-- 
background-color: #082d33;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1783' height='1783' viewBox='0 0 20 20'%3E%3Cg %3E%3Cpolygon fill='%23053f44' points='20%2C10 10%2C0 0%2C0 20%2C20'/%3E%3Cpolygon fill='%23053f44' points='0%2C10 0%2C20 10%2C20'/%3E%3C/g%3E%3C/svg%3E"); -->