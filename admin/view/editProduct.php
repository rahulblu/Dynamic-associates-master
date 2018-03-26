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
           <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="./">Home</a></li>
			    <li class="breadcrumb-item"><a href="?view=product">Product Management</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
			  </ol>
			</nav>
            
          </div>
            <div class="container">
              </div>
        </main>
      </div>
    </div>
<?php
	include_once 'view/footer.php'; 
?>