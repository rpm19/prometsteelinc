<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class="site-content" role="main">
    <div class="inner-wrap">
    	 	   	    	    		    		    	    	   	 <!--Breadcrumbs Start-->
          <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
          <div id="breadcrumbs" class="breadcrumb-menu">','</div>
          ');
      }
      ?> 
              	      <h1 class="pi-header"><span><?php if(is_home()):  ?>Latest Post
   <?php elseif(is_search()): ?>Search Results for '<?php echo get_search_query(); ?>'
   <?php elseif(is_404()): ?>404: Page not found <?php elseif(is_archive()): ?>Archives
   <?php elseif(get_field('pi_heading')): the_field('pi_heading'); else: the_title(); endif; ?></span></h1>

        <article class="site-content-primary"> 
			<?php if ( have_posts() ): ?>                	
				<?php while ( have_posts() ) : the_post(); ?>
					<article>
						<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; ?>
				<?php else: ?>
				<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
			<?php endif; ?>
			<?php wp_pagenavi(); ?>
		</article>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>