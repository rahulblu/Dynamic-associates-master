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
            <h1 class="h2">Coupan Management</h1>
            
          </div>
            <div class="w3-row">
              <div class="w3-col l6 w3-padding">
                <div class="w3-card-2 card custom-card bg-secondary text-white ">
                 
                  <div class="card-body">
                    <div class="card-title">List Of Coupan</div>
                  </div>
                </div>
              </div>
              <div class="w3-col l6 w3-padding">
                <div class="w3-card-2 card bg-danger custom-card  text-white ">
                
                  <div class="card-body">
                    <div class="card-title">List Of Coupan</div>
                  </div>
                </div>
              </div>

            </div>
        </main>
      </div>
    </div>
<?php
	include_once 'view/footer.php'; 
?>