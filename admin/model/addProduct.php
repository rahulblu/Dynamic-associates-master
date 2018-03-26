<?php
function checkInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['insertAddProd'])){
	$err="";
	$success="";
	$productName=$_POST['productName'];
	$productPrice=$_POST['productPrice'];
	$productCat=$_POST['productCat'];
	$productBrand=$_POST['productBrand'];
	$productImage=$_FILES['productImage']['name'];
	$productType=$_POST['productType'];
	$productDesc=$_POST['productDesc'];
	$productKey=$_POST['productkey'];
	if(ctype_digit($productPrice)==false){
		$err="Product Price only Numeric value";
	}
	/*
	//image upload
	$productImage=$_FILES['productFile']['name'];
	
*/
	$productImage_temp=$_FILES['productImage']['tmp_name'];
	$target_dir="./productImage/";
	$target_file=$target_dir.basename($productImage);
	//check file extension
	$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
	$target_file_to_upload=$target_dir.str_replace(' ', '_', $productName).".".$imageFileType;
//	echo $imageFileType;
	if(empty($err)){
		if($imageFileType=='jpg'||$imageFileType=='JPG'||$imageFileType=='PNG'||$imageFileType=='png'||$imageFileType=='jpeg'||$imageFileType=='JPEG'){
		$upload=move_uploaded_file($productImage_temp, $target_file_to_upload);
		var_dump($upload);
		if($upload){
		$sql_insert_product="insert into product(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords,product_type)values('$productCat','$productBrand','$productName','$productPrice','$productDesc','$target_file_to_upload','$productKey','$productType');";
		//echo $sql_insert_product;
		$res_insert=mysql_query($sql_insert_product);
		if($res_insert){
			$success="Product has been Added";
			$err="";
		}
		else{
			$err.="Fialed to Add";
		}
		}
		else{
			$err.="Failed to upload Image";
		}
	}
	else{
		$err.="Image Type not permitted";
	}
	}
	if(!empty($err))
	{
		echo "<script>
			toastr.error('".$err."');
			</script>";
	}
	else if(!empty($success))
	{
		echo "<script>
			toastr.success('".$success."');
			</script>";
	}
} 
?>