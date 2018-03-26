function delete_prod_alert(product_id){
	swal({
  title: "Are you sure?",
  text: "You will not be able to recover this brand",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel ",
  showLoaderOnConfirm: true,
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
  	delete_product(product_id);
  	
  	//delete_brand(brand_id);
  } else {
    swal("Cancelled", "Your have not deleted this Product", "error");
  }
});
}
function delete_product(product_id){
	$.ajax({
		type:'GET',
		url:'./model/deleteProduct.php?id='+product_id,
		beforeSend:function(){

		},
		success:function(response){
			if(response=='1'){
				pagination(1);
			swal("Deleted!", "Product Has been Deleted.", "success");

		}
		else{
			swal("Error !!", "Error occured in deleting Product!", "error");
		}	
		}
	});
}
function pagination(page){
	//alert('clicked');
$.ajax({
		type:'GET',
		url:'./model/pagination.php?query='+page,
		beforeSend:function(){
		$('#table-content-product').html('<tr id="loader"><td colspan="5"><i class="fa fa-spinner"></i> loading...</td></tr>');				
			//$('#loader').fadeOut(1000);
		},
		success:function(resultSet){
			console.log(resultSet);
	$('#table-content-product').html(resultSet);		
		}

	});
}
function refreshProd(){
	getProduct();
	$('.chip').hide();
}

function getProduct(){

	$.ajax({
		type:'GET',
		url:'./model/pagination.php?query=1',
		beforeSend:function(){
		$('#table-content-product').html('<tr id="loader"><td colspan="5"><i class="fa fa-spinner"></i> loading...</td></tr>');				
			//$('#loader').fadeOut(1000);
		},
		success:function(resultSet){
			console.log(resultSet);
	$('#table-content-product').html(resultSet);		
		}

	});
	
}
function getSearchProduct(query){
	//alert(query);
	if(query=="" || query ==null)
	{
		$('.chip').hide();
		getProduct();

	}
	else
	{	$('.chip').show();
		$('.chip #chip_query').html(''+query);
		$.ajax({
		type:'GET',
		url:'./model/searchProduct.php?query='+query,
		beforeSend:function(){
		$('#table-content-product').html('<tr id="loader"><td colspan="5"><i class="fa fa-spinner"></i> loading...</td></tr>');				

		},
		success:function(resultSet){
			if(resultSet == "" || resultSet ==null)
			{
				getProduct();
				}
				else{
				$('#table-content-product').html(resultSet);
					
				}
		}
	})
	}
}
$(document).ready(function(){
	getProduct();
	$('.chip').hide();
	$('#productSearch').on('keyup',function(){
		var query=$('#productSearch').val();
		getSearchProduct(query);
	});
});
