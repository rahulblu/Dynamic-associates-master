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
            <h1 class="h2">Customer Management</h1>
            <div class="float-right">
            	<div class="btn-group">
            		<a class="btn btn-success" href=""><i class="fa fa-envelope"></i> Bradcast Email</a>
                <a href="" class="btn btn-danger"><i class="fa fa-phone"></i> Broadcast Message</a>
            		<input type="text" name="" class="form-control w3-margin-left" placeholder="search">
            	</div>
            </div>
          </div>
          <table class="table">
  <caption>List of Customer</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Address</th>
        <th scope="col">Customer Email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      	xyz
      </td>
      <td>
       <select>
         <option>Active</option>
         <option>InActive</option>
       </select>
      </td>
    </tr>
    
  </tbody>
</table>
        </main>
      </div>
    </div>
<?php
	include_once 'view/footer.php'; 
?>