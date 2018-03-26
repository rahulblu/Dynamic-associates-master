<?php
include_once'connection.php';
$obj=new connectionDb();
$page=$_GET['query'];
//echo $query; 
$count="select * from product;";
$res=mysql_query($count);
$count_number=mysql_num_rows($res);
//echo($count_number);
$perPage=30;
if($page=='1'){
	$sql="select * from product limit $perPage;";
//	echo $sql;
}
else if($page=='2'){
	$sql="select * from product limit $perPage offset 30";
}
else if($page=='3'){
	$sql="select * from product limit $perPage offset 60";
}
else if($page=='4'){
	$sql="select * from product limit $perPage offset 90";
}
$res=mysql_query($sql);
while($data=mysql_fetch_assoc($res)){
	echo"<tr><td>".$data['product_title']."</td><td>".$data['product_brand']."</td><td>".$data['product_price']."</td><td><img class='product-page-img' src='".$data['product_image']."'></td><td><div class='btn-group'>
	<a href='#' onclick=delete_prod_alert('".$data['product_id']."') class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></a>
<a class='btn btn-info btn-xs' href='?view=editProduct&product=".$data['product_id']."'><i class='fa fa-pencil'></i></a>
	</div></td></tr>";
	
}
/*
create modal for each product 
to edit product details i.e modal.right
*/

?>
