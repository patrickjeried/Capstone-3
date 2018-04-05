<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "soledad");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			$id= $_GET['id'];
			$name=$_POST['hidden_name'];
			$quantity=$_POST['quantity'];
			$price=$_POST['hidden_price'];
			$query1	="insert into cart(product_id,users,quantity,price) values('$id','$name','$quantity','$price')";
		  	if ($connect->query($query1) === TRUE) {
		    echo "New record created successfully";
		    
			} else {
		    echo "Error: " . $query1 . "<br>" . $con->error;
			}
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				$id= $_GET['id'];

				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
				  
			}
		}
		$query1 = "delete from cart where product_id='$id' and checkout_id is null";
				if ($con->query($query1) === TRUE ) {
					echo "Deleted Profile";
				} 
				else {
					    echo "Error: " . $query1 . "<br>" . $con->error;
				}
	}
}

?>

<?php
	include_once 'htmlheader.php';
?>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Runnin', runnin', runnin', runnin'</a></h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #fff; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img style="height: 30vh;" class="imgstyle" src="images/<?php echo $row['image'] ?>" class="img-responsive" /><br />
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<p>The Hoka One One Mach is a new model from Hoka One One. It is essentially the replacement for the Hoka One One Clayton 2. While it shares similar specs to the Clayton line it is also different in a couple of key attributes we’ll highlight below. Overall, the Mach is a great option for all types of road-running and trail runs on less aggressive terrain.</p>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

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
			<h3>My Cart</h3>
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
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><span class="glyphicon glyphicon-trash" style="margin-left: 18px;"></span></span></a></td>
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

				<td><a href="welcome.php" class="btn btn-success btn-block" style="background-color: orangered; width: 10em;"><i class="glyphicon glyphicon-menu-left"></i>Back to home</a></td>


				<td><a href="end.php" class="btn btn-success btn-block" style="background-color: orangered; width: 10em; margin-left: 56em;">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>

			</div>
		</div>
	</div>
	<br />
	</body>
</html>



<?php
	include_once 'footer.php';
?>


background-color: #082d33;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1783' height='1783' viewBox='0 0 20 20'%3E%3Cg %3E%3Cpolygon fill='%23053f44' points='20%2C10 10%2C0 0%2C0 20%2C20'/%3E%3Cpolygon fill='%23053f44' points='0%2C10 0%2C20 10%2C20'/%3E%3C/g%3E%3C/svg%3E");