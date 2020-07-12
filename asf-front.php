<?php
/**
 * Template Name: ACF Front
 * Template Post Type: post
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
acf_form_head();
get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

            <h5><?php the_field( 'car_brand' ); ?></h5>
        
			<?
      // Разрешаем редактирование или автору поста или админу.
			$authorID = get_the_author_meta( 'ID' );
			$userID      = get_current_user_id();
			if ($authorID == $userID) {
				acf_form();
			} elseif ( current_user_can('administrator') ) {
				acf_form();
			}
			?>
   
		<?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer();
