
<img src="https://previews.123rf.com/images/ku4erashka/ku4erashka1606/ku4erashka160600004/58444134-thank-you-for-shopping-with-us-hand-lettering-vector-modern-calligraphy-pen-and-ink-.jpg" style="height: 100%; width: 100%;">
<?php
	
	include_once 'htmlheader.php';
$connect = mysqli_connect("localhost", "root", "", "soledad");

date_default_timezone_set('Asia/Manila');
$timeStamp=date("m/d/Y h:i:sa");
$query	="insert into checkout(date) values('$timeStamp') ";
$query1 = "update cart set checkout_id=(select id from checkout where date='$timeStamp') where checkout_id is null";
if ($connect->query($query) === TRUE and $connect->query($query1) === TRUE )  {
	    echo "New record created successfully";
	    echo '<script type="text/javascript">
		window.location.href = "checkoutpage.php"
		</script>';

	    die;
	} 
	else {
    	echo "Error: " . $query.$query1 . "<br>" . $connect->error;
	}


?>
<!-- <img src="https://previews.123rf.com/images/ku4erashka/ku4erashka1606/ku4erashka160600004/58444134-thank-you-for-shopping-with-us-hand-lettering-vector-modern-calligraphy-pen-and-ink-.jpg" style="height: 100%; width: 100%;"> -->



<!--search about deleting the items after checkout-->