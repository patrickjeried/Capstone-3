<?php

	include_once 'htmlheader.php';

?>
<a href="createnewitem.php">
			<button class="btn btn-primary">Add New Item</button>
		</a>

		<form method="GET">
			<select name="category">
				<option>All</option>
				<?php

				foreach ($categories as $category) {
					if ($category === $_GET['category']) {
						echo '<option selected>'.$category.'</option>';
					} else {
						echo '<option>'.$category.'</option>';
					}
				}

				?>
			</select>
			<button type="submit" name="search">Search</button>
		</form>
			
		<div class="items-wrapper">



			