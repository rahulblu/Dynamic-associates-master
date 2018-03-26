<?php
	include_once 'view/header.php';
	include_once 'common/topnav.php'; 
?>
 <div class="container-fluid">
   <!-- Modal -->
<div class="modal fade right" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <?php
          include_once 'common/sidebar.php'; 
          ?>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Product Management</h1>
            <div class="float-right">
            	<div class="btn-group">
            		<a class="btn btn-info" href="?view=addproduct"><i class="fa fa-plus"></i> Add New Product</a>
            		<button class="btn btn-danger" ><i class="fa fa-file-excel-o"></i></button>
            		<input type="text" name="productSearch" id="productSearch" class="form-control w3-margin-left" placeholder="search">
            	</div>
            </div>
          </div>
            <div class="chip">
  <span id="chip_query"></span>
  <span class="closebtn" onclick="refreshProd();">&times;</span>
</div>
          <table class="table">
  <caption>List of Product</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="table-content-product">
    
    
  </tbody>
</table>
<div class="pull-right w3-padding-24">
  <nav aria-label="Page navigation example">
      <ul class="pagination pagination-sm">
        <?php
        //count total number of product and devide by 10
        $sql_count="select count(product_id) as max_count from product;";
        $res_count=mysql_query($sql_count);
        //echo $sql_count;
        $data=mysql_fetch_assoc($res_count);
        $count=$data['max_count'];
        //echo $count; 
        $count=(int)($count/30);
        $count=$count+1;
        for($i=1;$i<=$count;$i++){
          echo "
        <li class='page-item'><a class='page-link' onclick=pagination('".$i."')>".$i."</a></li>
        ";
        }
        ?>
      </ul>
    </nav>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProduct">
  Launch demo modal
</button>
        </main>
        
      </div>

    </div>
   
<!--modal-->
<?php
	include_once 'view/footer.php'; 
?>