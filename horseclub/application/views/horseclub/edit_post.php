<!--==============================header=================================-->
<?php $this->load->view('header'); ?>  
<!--==============================content=================================-->
   <div class="container_12 top-4">
        
		
        <div class="grid_8">
        	<div class="left-1">
            	<h2>Write a Post</h2>
				<form id='form' method="post" action="<?php echo site_url('blog/post/'.$post_id); ?>" >
                  <fieldset>  
                    <label>
					<?php echo validation_errors(); ?>
					  <strong>Title:</strong>
					    <div class="form-group has-feedback">
					    <input name="form_post_title" type="text" required="" value="<?php echo $post_title;?>">
					    <?php echo form_error('Title','<span class="help-block">','</span>'); ?>
					  </div>
        					  
					</label>
                    <label><strong>Message:</strong><textarea name="form_post_text" required=""><?php echo $post_text;?></textarea></label>
                    <div class="btns"><a href="#" class="button">Clear</a>
					  <a href="#" class="button" onClick="document.getElementById('form').submit()">Post</a>
					</div>
					
                  </fieldset>  
				  
                </form>
                 				
            </div>
        </div>
       
	  </div> 	
	  
<!--==============================footer=================================-->
<?php $this->load->view('footer'); ?>      
