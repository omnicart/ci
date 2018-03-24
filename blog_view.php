
<?php 
$this->load->view('header');
$uerfile = get('project_path');
?>

        <div id="page-wrapper">
        	<h1>Dashboard</h1>
        	<div><img src="<?php echo base_url().'assets/upload_profile/'.$uerfile?>" width="150" height="150"></div>
        </div>
        <!-- /#page-wrapper -->

    <?php
    $this->load->view('footer');
    ?>