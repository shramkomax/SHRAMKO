<?php
// Возвращает html с пользователями 
$sql = "SELECT * FROM polzovateli WHERE id!=" . $polzovatel_id;
$result = mysqli_query($connect, $sql);

$col_polzovateley = mysqli_num_rows($result);

	$i = 0;					
	while ($i < $col_polzovateley) {
		$polzovatel = mysqli_fetch_assoc($result);
		?>
		<li>
			<div class="avatar">
					<img src="images/user.png">
			</div>
			<h2><?php echo $polzovatel ["name"]; ?></h2>
			
					<div data-ssylka="http://doctor.local/admin/delete.php?id=<?php echo $polzovatel["id"]; ?>" onclick="add(this)">Удалить -</div>
		
		</li>
		<?php
		$i = $i + 1;
	}
?>