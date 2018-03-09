<?php $this->load->view('header'); ?>

  <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:10000,
				preset:'zoomer',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:'fade',
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>  
  <!--==============================content================================-->
      
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. May 21, 2012! </div>
        <div id="slide">		
          <div class="slider">
            <ul class="items">
                <li><img src="/horseclub/img/slider-1.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>The most reputable horse breeder</strong><span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy</span></p><a href="#">Read More</a></div></li>
                <li><img src="/horseclub/img/slider-2.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Want a stable friendship? Get a horse!</strong><span>Dolor sit amet, consetetur sadipscing elitr sed diam nonumy</span></p><a href="#">Read More</a></div></li>
                <li><img src="/horseclub/img/slider-3.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>We can care about your horses!</strong><span>Consetetur sadipscing elitr sed diam nonumy</span></p><a href="#">Read More</a></div></li>
			
            </ul>
          </div>	
          <a href="#" class="prev"></a><a href="#" class="next"></a>
        </div> 
        <div class="grid_4">
        	<h2 class="p2">Welcome! <?php echo $this->session->userdata('userName');?></h2>
            <img src="/horseclub/img/page1-img4.jpg" alt="">
            <p class="text-1 top-2 p3">Lorem ipsum dolor sit amet</p>
            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.</p>
            <a href="#" class="button top-3">Read More</a>
        </div>
        
        
    </section> 
<!--==============================footer=================================-->
<?php $this->load->view('footer'); ?>      
