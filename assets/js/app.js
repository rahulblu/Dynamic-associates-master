$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.modal').modal();
    
    $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true

  });
    $.ajax({
		type:'GET',
		url:'./model/getProduct.php',
		beforeSend:function(){
			//$('#disp_jeans_container').addClass('');
		},
		success:function(response){
			console.log(response);
			$('#disp_product').html(response);
		}
	});
  });