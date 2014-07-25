<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/foundation.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/master.css">

  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/custom.modernizr.js"></script>
	
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "60dbb138-a6c0-4444-beb7-5bef9b268251", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>  

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="followHeader">
    
        <div class="row">
        
            <div class="large-6 columns sharethis">
                <span class='st_facebook_hcount' displayText='Facebook'></span>
                <span class='st_twitter_hcount' displayText='Tweet'></span>
            </div>
            
            <div class="large-6 columns socialLinks text-right">
            	<p class="yellowText left codePro followUsOn hide-for-small">FOLLOW US ON</p>
                <a href="https://www.facebook.com/pages/Joe-Nott-Band/267992606659405" target="_blank" class="facebook"></a><a href="https://twitter.com/JoeNottBand" target="_blank" class="twitter"></a><a href="https://soundcloud.com/josephenott" target="_blank" class="soundcloud"></a><a href="http://www.youtube.com/channel/UC_HCSUSeBohvVMl5fAhknIA" target="_blank" class="youtube"></a><a href="http://www.reverbnation.com/joenottband" target="_blank" class="reverbnation"></a>
            
            </div>
            
        </div><!--/row-->
        
        <div class="row siteTitleLogo"><a href="<?php bloginfo('url'); ?>" class="logoLink"></a></div>
    
    </div>
    
<div class="menu">
    
    	<div class="row">
        
        	<ul class="mainMenu">
            
            	<li><a href="<?php bloginfo('url'); ?>/category/news">NEWS</a></li><li><a href="<?php bloginfo('url'); ?>/category/tour">TOUR</a></li><li><a href="<?php bloginfo('url'); ?>/category/media">MEDIA</a></li><li><a href="<?php bloginfo('url'); ?>/bio">BIO</a></li><li class="menuMargin"><a href="<?php bloginfo('url'); ?>/category/videos">VIDEOS</a></li><li><a href="<?php bloginfo('url'); ?>/category/photos">PHOTOS</a></li><li><a href="<?php bloginfo('url'); ?>/contact">CONTACT</a></li>
            
            </ul>
        
        </div>
    
    </div><!--/menu-->
    
    <div class="row slider hide-for-small">
    
    	<ul data-orbit>
          <li>
            <img src="http://lorempixel.com/1000/354/" />
          </li>
          <li>
            <img src="http://lorempixel.com/1000/354/" />
          </li>
          <li>
            <img src="http://lorempixel.com/1000/354/" />
          </li>
        </ul>
    
    </div><!--/slider-->
	
    <div class="row contentRow">

<!-- Begin Page -->
<div class="row">

  <div class="large-9 columns">
