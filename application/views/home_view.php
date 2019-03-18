<p class="text-success">
	<?php 

	if($this->session->flashdata('login_success'))
	{
		print $this->session->flashdata('login_success');
	}

	if($this->session->flashdata('reg_success'))
	{
		print $this->session->flashdata('reg_success');
	}


	 ?>
</p>

<p class="text-danger">
	
	<?php 
	if($this->session->flashdata('login_fail'))
	{
		print $this->session->flashdata('login_fail');
	}

		if($this->session->flashdata('no_access'))
	{
		print $this->session->flashdata('no_access');
	}



	 ?>

</p>

<div class="home-page">
<h1>Welcome to Basic codeIgnitre app</h1>
<p>This is a codeIgniter app. This app work with Login and registration functionalities. This app also restrict the view without login...<br> This app also allow the basic CRUD functionalities.</p>
</div>