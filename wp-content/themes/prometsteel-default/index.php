<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="site-content two-column" role="main">
    <div class="inner-wrap">
    	        	      <h1 class="pi-header"><span><?php if(is_home()):  ?>Latest Post
   <?php elseif(is_search()): ?>Search Results for '<?php echo get_search_query(); ?>'
   <?php elseif(is_404()): ?>404: Page not found <?php elseif(is_archive()): ?>Archives
   <?php elseif(get_field('pi_heading')): the_field('pi_heading'); else: the_title(); endif; ?></span></h1>

        <article class="site-content-primary"> 
			<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="row">
					<figure class="col-3"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail('medium'); ?></a></figure>
					<div class="col-9">
					<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
					<?php the_excerpt(); ?>
					<p><?php the_tags(); ?></p>
					</div>
				</article>
			<?php endwhile; ?>

			<?php else: ?>
				<h2>No posts to display</h2>
				<p>No idea what happened.</p>
			<?php endif; ?>
			<?php wp_pagenavi(); ?>
		</article>
		
		<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-blog' ) ); ?>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>