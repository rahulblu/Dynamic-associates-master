<?php
	include_once 'view/header.php';
	include_once 'common/topnav.php'; 
?>
 <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <?php
          include_once 'common/sidebar.php'; 
          ?>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Latest Order</h1>
            <div class="float-right">
            	<div class="btn-group">
            		<a class="btn btn-success" href=""><i class="fa fa-envelope"></i> Broadcast Email</a>
                <a href="" class="btn btn-danger"><i class="fa fa-phone"></i> Broadcast Message</a>
            		<input type="text" name="" class="form-control w3-margin-left" placeholder="search">
            	</div>
            </div>
          </div>
          <table class="table">
  <caption>List of Orders</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order Time</th>
      <th scope="col">Oder Cost</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Phone</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>04/03/2018</td>
      <td>13:20</td>
      <td>
      	250
      </td>
      <td>
       Md Khalid raza Khan
      </td>
      <td>+919835555982</td>
      <td>Decent Homes Room Number 16 Law gate LPU Jalandhar Punjab 144411</td>
      <td><a href="?view=singleorder" class="btn btn btn-outline-primary"><i class="fa fa-search"></i></a></td>
    </tr>
    
  </tbody>
</table>
        </main>
      </div>
    </div>
<?php
	include_once 'view/footer.php'; 
?>