<?php
	require_once 'connection.php';
	$obj =new connectionDb();
	$sql="select * from product ";
	$res=mysql_query($sql);
	while ($data=mysql_fetch_assoc($res)) {
	 	# code...
	 	$productTitle=$data['product_title'];
	 	$productImage=$data['product_image'];
	 	$productPrice=$data['product_price'];
	 	?>
	 	<div class="col s4">
	 		<div class="card ">
	 		<div class="card-image">
	 			<img src="design/<?php  echo $productImage;?>">
	 			<span class="card-title"><?php  echo $productTitle; ?></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
	 		</div>
	 		<div class="card-content black-text">
	 			<?php echo $productPrice; ?>
	 		</div>
	 		<!--div class="card-action">
	 			<a href="">Link</a>
	 		</div-->
	 	</div>
	 	</div>
	 	<?php
	 } 
?>