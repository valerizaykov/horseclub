<!--==============================header=================================-->
<?php $this->load->view('header'); ?>  
<!--==============================content=================================-->
   <div class="container_12 top-4">
        <div class="grid_4">
        	<div class="left-1">
                <h2 class="p4">Recent Posts</h2>
                
				<?php 
				$counter=0;
				foreach ($blog as $blog_item):  $counter++;?>
				  
				  <div class="wrap">
                    <div class="number"><?=$counter?></div>
                    <p class="extra-wrap border-bot-1"><span class="clr-1"><?=$blog_item['post_title']?></span><br>
                       <?=$blog_item['post_text']?></br>writen by:<a href=""  ><?=$blog_item['user_name']?></a>
					   <a href="<?php echo site_url('blog/delete/'.$blog_item['post_id']); ?>" class="button" >delete</a>
					   <a href="<?php echo site_url('blog/edit_post/'.$blog_item['post_id']); ?>" class="button" >update</a>
					</p>
                  </div>
				  
				<?php endforeach; ?>
            </div>
        </div>
		
        <div class="grid_8">
        	<div class="left-1">
            	<h2>Write a Post</h2>
				<form id='form' method="post" action="<?php echo site_url('blog/post'); ?>" >
                  <fieldset>  
                    <label>
					<?php echo validation_errors(); ?>
					  <strong>Title:</strong>
					    <div class="form-group has-feedback">
					    <input name="post_title" type="text" required="">
					    <?php echo form_error('Title','<span class="help-block">','</span>'); ?>
					  </div>	
					</label>
                    <label><strong>Message:</strong><textarea name="post_text" required=""></textarea></label>
                    <div class="btns"><a href="#" class="button">Clear</a>
					  <a href="#" class="button" onClick="document.getElementById('form').submit()">Post</a>
					</div>
					
                  </fieldset>  
				  
                </form>
                 <?php echo $this->pagination->create_links();?>				
            </div>
        </div>
       
	  </div> 	
	  
<!--==============================footer=================================-->
<?php $this->load->view('footer'); ?>      
