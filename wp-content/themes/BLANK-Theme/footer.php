<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<div class="quicklinks clear">
        
          <div class="large-4 columns"><a href="<?php bloginfo('url');?>/category/merch" class="merch"></a></div>
            
            <div class="large-4 columns"><a href="<?php bloginfo('url');?>/book-us" class="bookUs"></a></div>
            
            <div class="large-4 columns"><a href="<?php bloginfo('url');?>/category/photos" class="photos"></a></div>
        
        </div>

</div>
<!-- End Page -->

</div>

<div class="footer">
    
    	<div class="row">
        
        	<div class="large-4 columns">
            
            	<h3 class="footerTitle">Sitemap</h3>

                	<?php wp_nav_menu( array(
                  'menu' => 'footerNav',
                  'menu_class' => 'footerNav'
                  )); ?>
                
            
            </div>
            
            <div class="large-4 columns">
            
            	<h3 class="footerTitle">Subscribe</h3>

		<a title="RSS Feed" href="<?php bloginfo('url') ?>/feed"><img src="http://icons.iconarchive.com/icons/graphics-vibe/classic-3d-social/256/rss-feed-icon.png" width="40"></a>
            
            </div>
            
            <div class="large-4 columns">
            
            	<a href="https://www.facebook.com/pages/Joe-Nott-Band/267992606659405" target="_blank" class="socialBigLink facebook"></a>
              <a href="https://twitter.com/JoeNottBand" target="_blank" class="socialBigLink twitter"></a>
            
            </div>
        
        </div>
    
    </div>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/jquery.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <script scr="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/zepto.js"></script>
  
  <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/foundation.min.js"></script>
  
  <script>
    $(document).foundation();
  </script>
<!-- End Footer -->



</body>
</html>

<?php wp_footer(); ?>