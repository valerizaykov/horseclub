 <!DOCTYPE html>
<html>
    <head>
	<meta https-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" media="screen" href="/horseclub/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/horseclub/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/horseclub/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/horseclub/css/slider.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/horseclub/css/demo.css">
    <title>Home</title>
    <meta charset="utf-8">
    <script src="/horseclub/js/jquery-1.7.min.js"></script>
    <script src="/horseclub/js/jquery.easing.1.3.js"></script>
	<script src="/horseclub/js/uCarousel.js"></script>
    <script src="/horseclub/js/tms-0.4.1.js"></script>
    <script src="/horseclub/js/cufon-yui.js"></script>
    <script src="/horseclub/js/cufon-replace.js"></script>
    <script src="/horseclub/js/Kozuka_L_300.font.js"></script>
    <script src="/horseclub/js/Kozuka_B_700.font.js"></script>
	<script src="/horseclub/js/html5.js"></script>
	<!--
 {foreach from=$categories item=cat}
        <li class="nav-item">
                 <a href="{$config.site_url_lng}{$cat.url}/" class="nav-link {if $active == 'menu'} active {/if}">{$cat.name|upper}</a>
         </li>
  {/foreach}
 -->    
</head> 
<body>
    <header>
    	<div class="main">
        	<h1><a href="index.html"><img src="/horseclub/img/logo.png" alt=""></a></h1>
			<!--
            <div class="social-icons">
                <span>Follow Us:</span>
                <div>
                    <a href="#" class="icon-3"></a>
                    <a href="#" class="icon-2"></a>
                    <a href="#" class="icon-1"></a>
                </div>
            </div>
			-->
            <div class="clear"></div>
        </div>
    </header>  
    <nav>  
        <ul class="menu">
            <li class="current"><a href="<?php echo site_url('horseclub/index'); ?>">Home</a></li>
            <li><?php echo anchor('AboutUs/index', 'AboutUs');?></li>
            <li><?php echo anchor('Blog/index', 'Blog');?></li>
            <li><a href="gallery/galleryView">Gallery</a></li>
            <li><?php echo anchor('Contact/index', 'Contacts');?></li>
			<?php 
			if($this->session->userdata('isUserLoggedIn')){ 
			   echo "<li>".anchor('Login/logout', 'Logout')."</li>"; 
			} 
			else{ 
			   echo "<li>".anchor('login/index', 'Login/Register')."</li>";
			}
            ?>
			 
        </ul>
        <div class="clear"></div>
     </nav>
	