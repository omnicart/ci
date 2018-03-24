
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper">
        	<h1>Contact Add Form </h1>
        	<form ng-controller="contact">

        		 <div class="form-group">
				    <label for="pwd">Select group</label>
				   <select class="form-control" ng-model="formdata.co_gid">
				   <option value="{{ans.grp_id}}" ng-repeat="ans in record">
				   		{{ans.grp_name}}
				   </option>
				   </select>
				  </div>

				  <div class="form-group">
				    <label for="email">User name:</label>
				    <input type="text" class="form-control" ng-model="formdata.co_name" id="username">
				  </div>
				  <div class="form-group">
				    <label for="pwd">User Mobile:</label>
				    <input type="password" class="form-control" ng-model="formdata.co_mobile" id="usermobile">
				  </div>
				   <div class="form-group">
				    <label for="pwd">User email:</label>
				    <input type="text" class="form-control" ng-model="formdata.co_email" id="useremail">
				  </div>
				   
				 
				  <button type="button" ng-click="add_contact()" class="btn btn-default">Submit</button>
				  <div>{{err}}</div>
			</form>

			
			<?php echo validation_errors();?>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>