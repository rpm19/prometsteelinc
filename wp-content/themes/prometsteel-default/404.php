<?php
/**
 * The template for displaying 404 pages (Not Found)
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
				Sorry but we weren't able to find the page you were looking for. Try looking through our <a href="<?php bloginfo('url'); ?>/sitemap">Sitemap</a>.
	        </article>
	    </div>
	    <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar','parts/shared/flexible-content'  ) ); ?>
	</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>