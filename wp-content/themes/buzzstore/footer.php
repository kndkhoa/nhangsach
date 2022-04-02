<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buzz_Store
 */
?>
	<?php

		do_action( 'buzzstore_footer_before');

			/**
			 * @see  buzzstore_footer_widget_area() - 10
			*/
			do_action( 'buzzstore_footer_widget');

	    	/**
	    	 * Button Footer Area
	    	 * Two different filters
	    	   * @see  buzzstore_credit() - 5
	    	*/
	    	do_action( 'buzzstore_button_footer'); 
	    
	    do_action( 'buzzstore_footer_after');
	?>
</div>
</div>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1768039813419845";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
