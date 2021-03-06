<?php
if(!function_exists('ecommerce_star_submenu_page_callback')){
function ecommerce_star_submenu_page_callback() {
 ?>
<div class="wrap" >

	<div class="welcome-panel">
	
	<h2><?php esc_html_e("We have created a guide to get you started:", 'shop-here'); ?> </h2>
	
	<div class="welcome-panel-column">
	
	<h2 id="getting-started"><?php esc_html_e('Getting Started', 'shop-here'); ?> </h2>
	
	<br />
	<a class="button button-primary" href="<?php echo shop_here_THEME_DOC; ?>" target="_blank"><?php esc_html_e('See Tutorials & FREE DEMO', 'shop-here'); ?></a>

	
	<h3><?php echo esc_html__('Set Home Page :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Settings -> Reading -> Select a static page, select home page and save settings.', 'shop-here'); ?> </p>

	
	<h3><?php echo esc_html__('Create Menus :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Appearance > Menu and Click View all locations. Theme has 2 menu areas called Top and Footer. Create and assign menus. Click save.', 'shop-here'); ?> </p>			
	
	<h3><?php echo esc_html__('Add Wishlist, Compare support :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Install YITH WishList, YITH quick view and YITH Compare plugins.', 'shop-here'); ?> </p>
	
	</div>
	
	
	
	<div class="welcome-panel-column">
	
	<h2><?php esc_html_e('Next Steps', 'shop-here'); ?> </h2>
	
	<h3><?php echo esc_html__('Add Header Contact and Social links :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Header, Add phone, email, Work Hours Edit My Account Link', 'shop-here'); ?> </p>

	<h3><?php echo esc_html__('Add sub header with Image :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Sub Header.', 'shop-here'); ?> </p>
	
	<h3><?php echo esc_html__('Enable / Disable WooCommerce popup cart | my account :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Popup cart.', 'shop-here'); ?> </p>		
	
	<h3><?php echo esc_html__('Change site layout / Sidebar positions :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Layout', 'shop-here'); ?> </p>
	
	<h3><?php echo esc_html__('Format UI elements :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Buttons and UI elements', 'shop-here'); ?> </p>		

	
	<h3><?php echo esc_html__('Change Fonts :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Fonts. Change fonts', 'shop-here'); ?> </p>

	
	<h3><?php echo esc_html__('Change Footer Credits / Colours :-', 'shop-here'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Footer. Edit text.', 'shop-here'); ?> </p>
	
	</div>
	
	
	<div class="welcome-panel-column">
		<h2><?php esc_html_e('More Actions', 'shop-here'); ?> </h2>
		
		<h3><?php echo esc_html__('Change Header style to Storefront / Sticky etc: :-', 'shop-here'); ?></h3>
		<p><?php echo esc_html__('Edit page. Righ hand side, you will find page options Select desired header style from page options.', 'shop-here'); ?> </p>
		
		<h3><?php echo esc_html__('Creating Product pages :-', 'shop-here'); ?></h3>
		<p><?php echo esc_html__('Add shortcode widget and use product shortcodes', 'shop-here'); echo esc_html__(' https://docs.woocommerce.com/document/woocommerce-shortcodes/', 'shop-here'); ?> </p>			
		
		<a class="button button-primary button-hero" href="<?php echo ECOMMERCE_STAR_THEME_URI; ?>" target="_blank"><?php esc_html_e('See Premium Features', 'shop-here'); ?></a>		
	</div>	
	

	</div>

</div> 
 <?php
 }
}
