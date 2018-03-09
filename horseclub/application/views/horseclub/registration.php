<?php $this->load->view('header'); ?>
<div class="container_12 top-4">
 <div class="grid_4">
    <h2><?php echo $title?></h2>
    <form action="" method="post" >
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
         
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
          <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div>
		<div class="form-group">
            <input type="submit" name="regisSubmit" class="button" value="Submit"/>
        </div> 
    </form>
    <p class="footInfo">Already have an account? <?php echo anchor('login/index', 'Login here'); ?> </p>
</div>	
</div>		
<div class="clear"></div>
<?php $this->load->view('footer'); ?>