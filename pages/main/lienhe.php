<div class="col-xs-6 col-sm-6 col-md-10 bg-light">
	
<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>

	<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	 	?>
 			<p><?php echo $dong['thongtinlienhe'] ?></p>
	  	
	<?php 
		}
	 ?>


		 		<div class="clear-men"></div>
		 	</div>	<!-- end main -->