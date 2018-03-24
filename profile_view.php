
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper">
        	<h1>Login</h1>
        	<!---form method="post" action="<?php echo cpath()?>login_register"-->
        	<?php echo form_open_multipart("blog/profile_action")?>
        		
				  <div class="form-group">
				    <label for="upload">Upload Image:</label>
				    <input type="file" class="form-control" name="imagedata" id="upload">
				  </div>
				  
				  <input type="hidden" name="tblename" value="sms_login">
				  <button type="submit" class="btn btn-default">Upload</button>
			</form>

			
			<?php echo validation_errors();?>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>