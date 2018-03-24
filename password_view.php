
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper" ng-controller="mylogincontrol">
        	<h1>Login</h1>
        	<form method="post">

        		
				  
				  <div class="form-group">
				    <label for="pwd">Current Password:</label>
				    <input type="password" class="form-control" ng-model="log_cpassword" id="pwd">
				  </div>

				  <div class="form-group">
				    <label for="pwd">New Password:</label>
				    <input type="password" class="form-control" ng-model="log_npassword" id="pwd">
				  </div>

				  <div class="form-group">
				    <label for="pwd">Confirm new Password:</label>
				    <input type="password" class="form-control" ng-model="log_cnpassword" id="pwd">
				  </div>

				  <button type="button" ng-click="check_password()" class="btn btn-default">Submit</button>
				 
			</form>

			
			 {{err}}
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>