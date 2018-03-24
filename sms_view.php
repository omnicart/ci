
<?php 
$this->load->view('header');
?>

        <div id="page-wrapper">
        	<h1>Send SMS</h1>
        	<div class="col-md-4" ng-controller="library">
        		<h2>Library</h2>
        		<ul>
        			<li ng-repeat="ans in record" ng-click="get_message(ans.lib_id)">
        				{{ans.lib_name}}
        			</li>
        			<h2>Message</h2>
        			<li ng-repeat="ans in record_msg" ng-click="message_transfer(ans.msg_text)">
        				{{ans.msg_text}}
        			</li>
        		</ul>
        	</div>
        	<div class="col-md-4" ng-controller="sms">
        		<h2>send sms form</h2>
                <ul>
                    <li>Name</li>
                    <li><input type="text" ng-model="name"></li>

                       <li>Mobile</li>
                    <li><input type="text" ng-model="mobile"></li>
                       <li>Email</li>
                    <li><input type="text" ng-model="email"></li>
                       <li>message</li>
                    <li><input type="text" ng-model="msg"></li>
                      
                    <li><input type="button" ng-model="Send" value="SEND" ng-click="send_sms()"></li>

                </ul>
                <div>{{err}}</div>
        	</div>

			<div class="col-md-4" ng-controller="group">
				<h2>Group</h2>
        		<ul>
        			<li ng-repeat="ans in record" ng-click="get_contacts(ans.grp_id)">
        				{{ans.grp_name}}
        			</li>
        			<h2>Contacts</h2>
        			<li ng-repeat="ans in record_contacts" ng-click="contact_transfer(ans.co_name,ans.co_mobile,ans.co_email)">
        				{{ans.co_name + " " + ans.co_mobile}}
        			</li>
        		</ul>
			</div>
			<div style="clear:both;"></div>


			
		
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>