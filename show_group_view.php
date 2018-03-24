
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper" ng-controller="group">
        	<h1>Group Page</h1>
        	
			
			 <table class="table">
			 	<tr>
			 		<td>ID</td>
			 		<td>Name</td>
			 		<td>Delete</td>
			 	</tr>
			 	<tr ng-repeat="ans in record">
			 		<td>{{ans.grp_id}}</td>
			 		<td>{{ans.grp_name}}</td>
			 		<td><a ng-click="delete_group(ans.grp_id,$event)">Delete</a></td>
			 	</tr>
			 </table>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>