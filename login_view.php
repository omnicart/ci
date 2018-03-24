
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper">
        	<h1>Login</h1>
        	<form method="post" action="<?php echo cpath()?>login_register">

        		
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="text" class="form-control" name="log_email" id="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="log_password"id="pwd">
				  </div>
				  <input type="hidden" name="tblename" value="sms_login">
				  <button type="submit" class="btn btn-default">Submit</button>
			</form>

			
			<?php echo validation_errors();?>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>