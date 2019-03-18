
<?php if($this->session->userdata('logged_in')): ?>

<h3 style="text-transform: uppercase;">Logout</h3>

<!-- ============== Logout form ============= -->
<?= form_open('users/logout')?>

<p>
	<?php if($this->session->userdata('username')):?>
	<?php print "You are logged in as ".$this->session->userdata('username'); ?>
	<?php endif; ?>
</p>

<?= form_submit(['name'=> 'submit', 'value'=>'Logout', 'class'=> 'btn btn-success btn-sm'])?>

<?= form_close()?>

<?php else: ?>

<h4 style="text-transform: uppercase;">login form</h4><br>

<!-- ============ Login Flash Error Message ============ -->
<?php 
if($this->session->flashdata('errors'))
{
	$er = $this->session->flashdata('errors');
	print $er;
}

?>

<!-- ============= Login Form ================ -->

<?= form_open('users/login');?>
  <div class="form-group">
    <!-- <label for="username">User Name</label> -->
      <?= form_input(['name'=>'username','placeholder'=>'User Name...','value'=>set_value('username'),
      'class'=>'form-control']);?>
  </div>
  <div class="form-group">
    <!-- <label for="password">Password</label> -->
    
     <?= form_password(['name'=>'password','placeholder'=>'Password...',
      'class'=>'form-control']);?>   
  </div>
  <div class="form-group">
    <!-- <label for="Cpassword">Confirm Password</label> -->
    
     <?= form_password(['name'=>'cpassword','placeholder'=>'Re-type Password...',
      'class'=>'form-control']);?>   
  </div>
     <div class="form-group">
     	<?= form_submit(['name'=>'submit','value'=>'Login', 'class'=>'btn btn-success btn-sm']); ?>
   	</div>
	
<?= form_close();?>

<?php endif; ?>