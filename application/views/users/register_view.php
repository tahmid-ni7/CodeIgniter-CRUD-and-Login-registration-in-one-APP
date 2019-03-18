<h4 style="text-transform: uppercase;">Create a new account</h4><br>

<?= form_open('users/register');?>


  <div class="form-row">
    <div class="form-group col-sm-6">
    <label for="fname">First Name</label>
      <?= form_input(['name'=>'fname','placeholder'=>'First Name...','value'=>set_value('fname'),
      'class'=>'form-control']);?>
      <?= form_error('fname', '<div class="text-danger">','</div>'); ?>
  </div>
  <div class="form-group col-sm-6">
    <label for="lname">Last Name</label>
      <?= form_input(['name'=>'lname','placeholder'=>'Last Name...','value'=>set_value('lname'),
      'class'=>'form-control']);?>
      <?= form_error('lname', '<div class="text-danger">','</div>'); ?>
  </div>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
      <?= form_input(['name'=>'email','placeholder'=>'Email...','value'=>set_value('email'),
      'class'=>'form-control']);?>
      <?= form_error('email', '<div class="text-danger">','</div>'); ?>
  </div>

  <div class="form-group">
    <label for="username">User Name</label>
      <?= form_input(['name'=>'username','placeholder'=>'User Name...','value'=>set_value('username'),
      'class'=>'form-control']);?>
      <?= form_error('username', '<div class="text-danger">','</div>'); ?>
  </div>

  <div class="form-row">
    <div class="form-group col-sm-6">
    <label for="password">Password</label>
    
     <?= form_password(['name'=>'password','placeholder'=>'Password...',
      'class'=>'form-control']);?> 
      <?= form_error('password', '<div class="text-danger">','</div>'); ?>  
  </div>
  <div class="form-group col-sm-6">
    <label for="cpassword">Confirm Password</label>
    
     <?= form_password(['name'=>'cpassword','placeholder'=>'Re-type Password...',
      'class'=>'form-control']);?>   
      <?= form_error('cpassword', '<div class="text-danger">','</div>'); ?>
  </div>
  </div>

     <div class="form-group">
     	<?= form_submit(['name'=>'submit','value'=>'Register', 'class'=>'btn btn-success btn-sm']); ?>
   	</div>
	
<?= form_close();?>