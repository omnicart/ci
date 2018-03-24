
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper" ng-controller="library">
        	<h1>Login</h1>
        	<form>

        		
				  <div class="form-group">
				    <label for="lib_name">Library Name:</label>
				    <input type="text" class="form-control" ng-model="lib_name" id="lib_name">
				  </div>
				 
				  
				  <button type="submit" ng-click="add_library()" class="btn btn-default">Submit</button>
			</form>

			
			<p>{{err}}</p>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>