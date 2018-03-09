<!DOCTYPE html>
<?php $this->load->view('header'); ?>

<div class="container_12 top-4">
 <div class="grid_4">   
   <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
   ?>
   <h2><?php echo $title ?></h2>
   <form  action="" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="button" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Don't have an account? <?php echo anchor('login/registration', 'Register here'); ?> </p>
 </div>
</div>	
<div class="clear"></div>
<?php $this->load->view('footer'); ?>