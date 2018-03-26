<?php
	include_once 'view/header.php';
	include_once 'common/topnav.php'; 
    include_once 'model/addProduct.php';
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
			    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
			  </ol>
			</nav>
            
          </div>
            <div class="container">
              <div class="card bg-dark text-white w3-card-4">
                <div class="card-header">
                  <p class="well">Add new Product</p>
                </div>
                <div class="card-body">
                  <form method="POST" name="insertProdForm" enctype="multipart/form-data" action="#">
                    <div class="w3-row">
                      <div class="w3-col l6 w3-padding">
                          <div class="form-group">
                            <input type="text" name="productName" class="form-control"
                            placeholder="Product Name" required>
                          </div>
                      </div>
                      <div class="w3-col l6 w3-padding">
                      <div class="form-group">
                        <input type="text" name="productPrice" class="form-control"
                        placeholder="Product Price">
                      </div>
                      </div>
                    </div>
                     <div class="w3-row">
                      <div class="w3-col l6 w3-padding">
                          <div class="form-group">
                            <select class="form-control" name="productCat">
                              <option value="null">Select Product Category</option>
                              <?php
                              $sql="select * from categories";
                              $res=mysql_query($sql);
                              while ($data=mysql_fetch_assoc($res)) {
                                 ?>
                                 <option value="<?php echo $data['categories_id'] ; ?>" ><?php echo $data['categories_title'] ?></option>
                                 <?php
                               } 
                              ?>
                            </select>
                      </div>
                    </div>
                      <div class="w3-col l6 w3-padding">
                      <div class="form-group">
                        <select class="form-control" name="productBrand">
                              <option value="null">Select Product Company</option>
                              <?php
                              $sql="select * from BRANDS";
                              $res=mysql_query($sql);
                              while ($data=mysql_fetch_assoc($res)) {
                                 ?>
                                 <option value="<?php echo $data['brands_id'] ; ?>" ><?php echo $data['brands_title'] ?></option>
                                 <?php
                               } 
                              ?>
                            </select>
                      </div>
                      </div>
                    </div> 
                    <div class="w3-row">
                      <div class="w3-col l6 w3-padding">
                        <div class="custom-file">
                          <input type="file" name="productImage" class="custom-file-input" id="productFile" required>
                          <label class="custom-file-label" for="productFile">Choose image for Product</label>
                        </div>
                        </div>
                        <div class="w3-col l6 w3-padding">
                          <div class="form-group">
                            <select class="form-control" name="productType">
                              <option value="null">Select Product Type</option>
                              <?php
                              $sql="select * from product_type";
                              $res=mysql_query($sql);
                              while ($data=mysql_fetch_assoc($res)) {
                                 ?>
                                 <option value="<?php echo $data['product_type_id'] ; ?>" ><?php echo $data['product_type_title'] ?></option>
                                 <?php
                               } 
                              ?>
                            </select>
                          </div>
                        </div>
                    </div> 
                    <div class="w3-row">
                      <div class="w3-col l12 w3-padding">
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Product Description" name="productDesc"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="w3-row">
                      <div class="w3-col l12 w3-padding">
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Product Description" name="productkey"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="float-right w3-padding">
                      <button type="submit" name="insertAddProd" class="btn">Upload </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </main>
      </div>
    </div>
<?php
	include_once 'view/footer.php'; 
?>