<?php 
/**
 * Blog Function
 * @package     Jot Shop
 * @author      ThemeHunk
 * @copyright   Copyright (c) 2018, ThemeHunk
 * @since       ThemeHunk 1.0.0
 */

        /**
		 * Excerpt count.
		 *
		 * @param int $length default count of words.
		 * @return int count of words
		 */
		function jot_shop_excerpt_length( $length ){
			if(is_admin()){
             	return $length;
             }
			 $excerpt_length = (string) get_theme_mod( 'jot_shop_blog_expt_length' );

			if ( '' != $excerpt_length ) {
			   $length = $excerpt_length;
			}
			return $length;
		}
		add_filter( 'excerpt_length','jot_shop_excerpt_length', 999 );
/**
 * Display Blog Post Excerpt
 */
if ( ! function_exists( 'jot_shop_the_excerpt' ) ){
	/**
	 * Display Blog Post Excerpt
	 *
	 * @since 1.0.0
	 */
	function jot_shop_the_excerpt(){?>
		<div class="entry-content">
		<?php  $excerpt_type = get_theme_mod( 'jot_shop_blog_post_content','excerpt');
		if ( 'full' == $excerpt_type ){
			the_content();
		} elseif('excerpt' == $excerpt_type ){
			the_excerpt();
		} else {
          return false;
		}?>
		</div>	
	<?php }
}

/**
		 * Read more text.
		 *
		 * @param string $text default read more text.
		 * @return string read more text
		 */
		function jot_shop_read_more_text( $text ) {

			$read_more = esc_html(get_theme_mod( 'jot_shop_blog_read_more_txt' ));

			if ( '' != $read_more ) {
				$text = $read_more;
			}

			return $text;
		}
      add_filter( 'open_post_read_more', 'jot_shop_read_more_text');
/**
 * Function to get Read More Link of Post
 *
 * @since 1.0.0
 * @return html
 */
if ( ! function_exists( 'jot_shop_post_link' ) ){
	/**
	 * Function to get Read More Link of Post
	 *
	 * @param  string $output_filter Filter string.
	 * @return html                Markup.
	 */
	function jot_shop_post_link( $output_filter = '' ){

		$enabled = apply_filters( 'open_post_link_enabled', '__return_true' );
		if ( ( is_admin() && ! wp_doing_ajax() ) || ! $enabled ){
			return $output_filter;
		}
		$jot_shop_read_more_text = apply_filters( 'open_post_read_more', __( 'Read More', 'jot-shop' ) );
		$read_more_classes        = apply_filters( 'open_post_read_more_class', array() );
		$post_link = sprintf(
			esc_html( '%s' ),
			'<a class="' . implode( ' ', $read_more_classes ) . ' thunk-readmore button " href="' . esc_url( get_permalink() ) . '"> ' . the_title( '<span class="screen-reader-text">', '</span>', false ) . $jot_shop_read_more_text . '</a>'
		);
		$output = ' &hellip;<p class="read-more"> ' . $post_link . '</p>';
		return apply_filters( 'jot_shop_post_link', $output, $output_filter );
	}
}
add_filter( 'excerpt_more', 'jot_shop_post_link', 1 );
/*******************/
// loader function
/*******************/
if ( ! function_exists( 'jot_shop_post_loader' ) ):
function jot_shop_post_loader(){
$jot_shop_blog_post_pagination = get_theme_mod( 'jot_shop_blog_post_pagination','num');
if($jot_shop_blog_post_pagination=='num'){
the_posts_pagination(array(
    'mid_size'  => 2,
    'prev_text' => __( '&nbsp;', 'jot-shop' ),
    'next_text' => __( '&nbsp;', 'jot-shop' ),
));
}
elseif($jot_shop_blog_post_pagination=='click'){	
//jot_shop_load_more_button();
}
elseif($jot_shop_blog_post_pagination=='scroll'){
//jot_shop_scrolling_ajax();
}
}
endif;