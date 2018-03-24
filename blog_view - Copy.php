blog view is here gfdgfd
<?php

//echo base_url();
echo br(3);
?>
<a href="<?php echo base_url();?>index.php/blog/register">Register</a>

<a href="<?php echo base_url();?>index.php/blog/login/abc/abc123">Login</a>

<form method="post" action="<?php echo base_url();?>/index.php/blog/receive_data">
	<?php
		echo form_input('username','');echo br(2);
		echo form_password('password','');echo br(2);
			//crating with multiple attirbutes of input tag
		$arr = array(
			'name'=>"address",
			"placeholder"=>"your address",
			"class"=>"mydetail_cls"


		);
		echo form_input($arr);echo br(2);

	?>
	<input type="submit" name="submtbuttn">
</form>

<?php
pre($arr);

echo do_hash("admin");
echo css('style');
echo js('script');
//pre($this);

$this->session->set_userdata('personaname','ajinkya');
$this->session->set_userdata('person_age','20');

echo $this->session->userdata('personanam');
echo $this->session->userdata('person_age');

echo br(3);
echo $this->session->unset_userdata('personanam');
echo br(3);
echo $this->session->userdata('personanam');
echo $this->session->userdata('person_age');


set('country','US');echo br(3);
echo get('country');
?>