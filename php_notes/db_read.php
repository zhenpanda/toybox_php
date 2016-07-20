<?php include "db_func.php" ?>

<!-- display db data to screen -->
<div>
	<!-- start php to call showAllUsers func return results -->
	<?php 
	$result = showAllUsers();
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
	?>
	<!-- close php to start styling -->
		<pre>
		<!-- start php to loop create from data -->
		<?php print_r(($row)); ?>
		<!-- delete form -->
		<form action="" method="post">
			<span>Delete User: <?php echo "$id" ?></span>
			<?php 
			echo "<input type='hidden' name='id' value='$id'></input>" 
			?>
			<input type="submit" name="delete">	
		</form>
		<!-- close php after each data piece -->
		<?php
	};
	?>
	<!-- close php after loop -->
</div>
<br>
<br>

<!-- update form -->
<div>
	<span>Update User</span>
	<br>

	<form action="" method="post">
		<input type="text" name="username" placeholder="Enter Username">		
		<input type="password" name="password" placeholder="Enter password">	
		<!-- php populate id selection -->
		<select name="id">
			<!-- each php tag is it's own scope -->
			<?php 
				$result = showAllUsers();
				while ($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<option value='$id'>$id</option>";
				}
			?>
		</select>	
		<br>
		<input type="submit" name="update">	
	</form>

</div>
<br>
<br>

<!-- create form -->

<div>
	
	<form action="form.php" method="">
	  <button type="submit">Create a new User</button>
	</form>

</div>