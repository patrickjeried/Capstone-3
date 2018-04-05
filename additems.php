
}
else{
	$query1	="insert into orderdetails(prodId,quantity,prodPrice,custId,oDDate) values('$pId','$quant','$totPrice1','$aid','$date')";
  	if ($con->query($query1) === TRUE) {
    echo "New record created successfully";
    echo '<script type="text/javascript">
	window.location.href = "cart.php"
	</script>';
    die;
	} else {
    echo "Error: " . $query.$query1 . "<br>" . $con->error;
	}
	echo $quanty;
	// $_SESSION['quantity']=$quanty;
}

}
?>