
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper">
        	<h1>Register</h1>
        	<form method="post" action="<?php echo cpath()?>register_action">

        		 <div class="form-group">
				    <label for="usernmae">User Name:</label>
				    <input type="text" class="form-control" name="log_username" id="usernmae">
				  </div>
				   <div class="form-group">
				    <label for="usermobile">User Mobile:</label>
				    <input type="text" class="form-control" name="log_usermobile" id="usermobile">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="text" class="form-control" name="log_email" id="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="log_password"id="pwd">
				  </div>
				   <div class="form-group">
				    <label for="cpwd">Confirm Password:</label>
				    <input type="password" class="form-control" name="log_cpassword" id="cpwd">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
			</form>

			
			<?php echo validation_errors();?>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>