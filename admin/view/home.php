<?php

    include_once "view/header.php";
?>  
 <form class="form-signin w3-padding-24" id="loginform">
      <div class="text-center mb-4">
        <img class="mb-4" src="assets/image/locked.svg" alt="" width="128" height="128">
        <h1 class="h3 mb-3 font-weight-normal">Admin Login</h1>
        
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>
      
      <div class="form-label-group">
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      <div class="form-group text-right">
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
Forget Password
        </button>
      </div>
      
      <button class="btn btn-lg btn-success btn-block" type="submit" id="loginBtn">Sign in</button>
      <span><img src="assets/image/loading.gif" class="logoSpinner hide"></span>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php 
    include_once "view/footer.php";
?>