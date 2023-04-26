<?php
/**
 * The Template for displaying all Landing page posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header-landing-page' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!--Site Content-->
	<section class="site-content two-column lp-site-content" role="main">
	    <div class="inner-wrap">
	        <article class="site-content-primary" <?php if( get_field('do_you_want_your_form_left_side')): ?> id="move-right-side" <?php endif; ?>>
	       		<?php the_content(); ?> 
	        </article>

	        <?php $lp_form_bg = get_field('add_arrow_image'); ?>
			
	        <article <?php if( get_field('do_you_want_your_form_left_side')): ?> id="move-left-side" <?php endif; ?> class="site-content-secondary <?php if( get_field('do_you_want_to_add_arrow')): ?>form-arrow<?php endif; ?>"

	        	 
	        	 >


	         <?php 
			       $gform_id =  get_field('add_form_id');
			       echo do_shortcode("$gform_id"); ?>
	        </article>
		</div> 
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/flexible-content' ) ); ?>    
	</section>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/slidebox' ) ); ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

<style>
				.form-arrow::after{
					background-image:url(<?php echo $lp_form_bg['url'];?>);
				}
			</style>