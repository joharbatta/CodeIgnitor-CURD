<?php include('header.php'); ?>

<div class="container">

  <h1 class="mt-5">Login</h1>
  <?php echo form_open('Login'); ?>

  <div class="row">
    <div class="col-lg-6">
        <div class="form-group">
          <label for="Username">Username:</label>
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]);  ?>
        </div>
     </div>
        <div class="col-lg-6">
      <?php  echo form_error('uname');  ?>
      </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
        <div class="form-group">
          <label for="pwd">Password:</label>
        <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]); ?>
        </div>
      </div>
        <div class="col-lg-6">
             <?php  echo form_error('pass');  ?>
        </div>
  </div>
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
  
</div>

<?php include('footer.php'); ?>