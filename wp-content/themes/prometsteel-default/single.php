<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<!--Site Content-->
	<section class="site-content two-column" role="main">
	    <div class="inner-wrap">
	    	        	      <h1 class="pi-header"><span><?php if(is_home()):  ?>Latest Post
   <?php elseif(is_search()): ?>Search Results for '<?php echo get_search_query(); ?>'
   <?php elseif(is_404()): ?>404: Page not found <?php elseif(is_archive()): ?>Archives
   <?php elseif(get_field('pi_heading')): the_field('pi_heading'); else: the_title(); endif; ?></span></h1>

	        <article class="site-content-primary">
				<div class="post-meta">Posted by <?php the_author_link(); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> </div>
				
				<?php the_content(); ?> 
				<!-- <hr>
				<p><?php the_tags(); ?></p>
				<hr> -->
				<?php comments_template( '', true ); ?>
	        </article>
	       	<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog','parts/shared/flexible-content'  ) ); ?>
	    </div>
	</section>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>