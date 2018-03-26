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
			    <li class="breadcrumb-item"><a href="?view=orderlist">Order List</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Order Details: 11409652</li>
			  </ol>
			</nav>
            
          </div>
          <div class="card">
            <div class="card-header">
           Order Details :11409652
            </div>
            <div class="card-body">
                 <div class="w3-row">
                   <div class="w3-col l6">
                     <ul id="ord">
                        <li> <i class="fa  fa-angle-right"></i><strong> Order No </strong>476</li>
                        <li><i class="fa  fa-angle-right"></i> <strong>Order Date </strong>2018-03-04</li>
                        <li> <i class="fa  fa-angle-right"></i> <strong>Order Time </strong>02:11 AM</li>
            <li><i class="fa  fa-angle-right"></i> <strong>Order Cost </strong>₹ 120.00</li>
            <li><i class="fa  fa-angle-right"></i> <strong>Paid Amount </strong>₹ 0.00</li>
                        <li><i class="fa  fa-angle-right"></i> <strong>Booked Date </strong>2018-03-03 20:41:32</li>
                        <li><i class="fa  fa-angle-right"></i> <strong>Status </strong>New</li>
            </ul>
                   </div>
                   <div class="w3-col l6">
                     <ul id="ord">
                        
                        <li> <i class="fa  fa-angle-right"></i> <strong>Customer Name </strong>Mahesh Komaravelli</li>
                        <li><i class="fa  fa-angle-right"></i> <strong>Address </strong>
            Room B. S                      </li>
                        <li><i class="fa  fa-angle-right"></i><strong> City </strong>Jalandhar</li>
            
                        <li><i class="fa  fa-angle-right"></i> <strong>Land Mark</strong> Lawgate</li>
                                    <li><i class="fa  fa-angle-right"></i><strong> Phone </strong>7306051514</li>
                                                <li><i class="fa  fa-angle-right"></i><strong> Payment Type </strong>Cash</li>
                                               </ul>
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