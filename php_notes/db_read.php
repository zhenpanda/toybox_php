<?php include "db_func.php" ?>

<div>
	<!-- display db data to screen -->
	<?php 
	// call showAllUsers func return results
	$result = showAllUsers();
	while ($row = mysqli_fetch_assoc($result)) {
	?>

		<pre>

		<?php
		print_r(($row));
		?>
		
		<?php
	};
	?>

</div>
