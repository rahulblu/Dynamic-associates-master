<?php
include_once'connection.php';
$obj=new connectionDb();
$query=$_GET['query'];
$sql="select * from product where product_title LIKE '%$query%'	 OR product_price LIKE '%$query%' OR product_keywords LIKE '%$query%' OR product_desc LIKE '%$query%' ";
$res=mysql_query($sql);
//echo $sql;
while($data=mysql_fetch_assoc($res)){
	echo"<tr><td>".$data['product_title']."</td><td>".$data['product_brand']."</td><td>".$data['product_price']."</td><td><img class='product-page-img' src='".$data['product_image']."'></td><td><div class='btn-group'>
	<a href='#' onclick=delete_prod_alert('".$data['product_id']."') class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></a>
<a href='#' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i></a>
	</div></td></tr>";
}
?>