
<?php if( have_rows('flexible_content') ): echo '<section class="additional-content">';
    while ( have_rows('flexible_content') ) : the_row(); ?>

	<?php if( get_row_layout() == 'tab_content' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="accordian-tabs-module">
			 	<div class="inner-wrap">		 	
			 		<?php if( get_sub_field('section_header')): ?>
						<h2><?php the_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('section_subtext')): ?>
						<p class="column-subtext"><?php the_sub_field('section_subtext'); ?></p>
					<?php endif; ?>

					<ul class="accordion-tabs">
						<?php if( have_rows('tab_content_row') ): while ( have_rows('tab_content_row') ) : the_row(); ?>
							<li class="tab-header-and-content">
								<a href="javascript:void(0)" class="tab-link"><?php the_sub_field('tab_header'); ?></a>
								<div class="tab-content"><?php the_sub_field('tab_body'); ?></div>							
							</li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php if( get_sub_field('divider')): ?>
						<hr>
					<?php endif; ?>			
				</div>
			</section>
		<?php endif; ?>

	<?php elseif( get_row_layout() == 'full_width_cta' ): ?>
		<section class="full-width-cta-test">
			<div class="inner-wrap"><h2 class="fwc-sec-heading"><?php the_sub_field('section_header'); ?></h2></div>
      <!-- CTA Module Start -->
          <section class="full-width-cta" <?php if(get_sub_field('fwcta_background_image')) : ?>style="background-image:url(<?php the_sub_field('fwcta_background_image') ?>);"<?php endif; ?>>
            <div class="inner-wrap">
              <div class="fwc-wrap"><?php if( get_sub_field('fwcta_heading')): ?>
                <h2 class="fwc-heading"><?php the_sub_field('fwcta_heading'); ?></h2> <?php endif; ?>    
                                <?php $fwcta_link = get_sub_field('fwcta_link');
          if( $fwcta_link ): 
            $link_url = $fwcta_link['url'];
            $link_title = $fwcta_link['title'];
            $link_target = $fwcta_link['target'] ? $fwcta_link['target'] : '_self';
            ?>           
                <a href="<?php echo esc_url($link_url); ?>" class="btn-alt fwc-btn-alt"><?php echo esc_html($link_title); ?></a><?php endif; ?>
              </div>
            </div>
          </section>
          <!-- CTA Module End -->	
			<?php if( get_sub_field('divider')): ?>
				<div class="inner-wrap"><hr></div>
			<?php endif; ?>
		</section>		
        

 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
 		<section class="multiple-cols-module">
		 	<div class="inner-wrap">	
		 		<?php if( get_sub_field('section_header')): ?>
					<h2><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>
				<section class="<?php if (get_sub_field('number_columns') == '2') {
						echo 'rows-of-2';
					} else if (get_sub_field('number_columns') == '3') {
					        echo 'rows-of-3';
					} else if (get_sub_field('number_columns') == '4') {
					        echo 'rows-of-4';
					}
					?>">

		         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
						<div><?php the_sub_field('content_column'); ?></div>
					<?php endwhile; ?>
					<?php endif; ?>				
				</section>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
 		</section>	

	<?php elseif( get_row_layout() == 'img_gallery_section' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="image-gallery-module">
				<div class="inner-wrap">	
					<?php if( get_sub_field('section_header')): ?>
						<h2><?php the_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<section class="<?php if (get_sub_field('number_columns') == '2') {
								echo 'rows-of-2';
							} else if (get_sub_field('number_columns') == '3') {
							        echo 'rows-of-3';
							} else if (get_sub_field('number_columns') == '4') {
							        echo 'rows-of-4';
							}
							?>">
						<?php $images = get_sub_field('img_gallery');
							if( $images ): ?>
								<?php foreach( $images as $image ): ?>
			                    	<a href="<?php echo $image['sizes']['large']; ?>" class="lightbox loop-item">
				                    	<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/>
			                    		<h4 class="li-title"><?php echo $image['caption']; ?></h4>
			                    	</a>
								<?php endforeach; ?>
							<?php endif; ?>
					</section>
					<?php if( get_sub_field('divider')): ?>
							<hr>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>
		
		
	<?php elseif( get_row_layout() == 'img_gallery_with_thumbnails' ): ?>
		<section class="image-gallery-with-thumbs">
			<div class="inner-wrap">
					<?php if( get_sub_field('imt_section_header')): ?>
					<h2><?php the_sub_field('imt_section_header'); ?></h2>
				<?php endif; ?>
											<?php if( get_sub_field('im_slider')): ?>

		<?php 

		$img = get_sub_field('im_slider');

		if( $img ): ?>	
 <div class="igt-wrap">
              <!-- Left Slider -->
              <div class="igwt-innerpage-carousel">
              <div class="slider igwt-slider-main">

              	        	<?php foreach( $img as $image ): ?>
                <div class="item">
            <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox">
<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php $image['alt']; ?>" title="<?php $image['alt']; ?>"/>
                  </a>
                </div>  
<?php endforeach; ?> 

              </div>
         <div class="slider igwt-slider-nav">
              	<?php foreach( $img as $image ): ?>
                <div class="item">
                  <a href="javascript:void(0)" class="slider-nav-item">
  <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/>
                  </a>
                </div>
<?php endforeach; ?>              
              </div>           
            </div>
             <div class="igwt-left-sec"></div>
                </div>
                 <hr>
                     <?php endif; ?>
<?php endif; ?>
  <div class="igt-wrap">
   	<?php if( get_sub_field('divider')): ?>
				<hr>
			<?php endif; ?>
        
       		<?php if( get_sub_field('wim_slider')): ?>

		<?php 

		$img = get_sub_field('wim_slider');

		if( $img ): ?>	
   <div class="icwt-slider">
           
              	 	<?php foreach( $img as $image ): ?>
                <div class="item">
                <a href="<?php echo $image['sizes']['large']; ?>" class="lightbox">
<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php $image['alt']; ?>" title="<?php $image['alt']; ?>"/>
                  </a>
                </div> 
<?php endforeach; ?>
              </div>
            </div>

			<?php if( get_sub_field('divider')): ?>
				<hr>
			<?php endif; ?>
		  </div>
		</section>

             <?php endif; ?>
<?php endif; ?>




	<?php elseif( get_row_layout() == 'click_expand' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="click-expand-module">
				<div class="inner-wrap">
					 <h2><?php the_sub_field('section_title'); ?></h2>
					<div class="click-expand <?php if( get_sub_field('spacing')): ?>spacing-bottom<?php endif; ?>">
			          <h3 class="ce-header" tabindex="0"><?php the_sub_field('section_header'); ?></h3>
			          <div class="ce-body"><?php the_sub_field('section_body'); ?></div>
			      	</div>
			    </div>
			</section>	        
		<?php endif; ?>

 			
	<?php elseif( get_row_layout() == 'table' ): ?>
		<section class="tabular-data">
		   <div class="inner-wrap">
		        <?php if( get_sub_field('section_header')): ?>
		            <div class="headexpand-wrap">  
		            	<h2 class="headexpand"><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
							<?php if( get_sub_field('section_header')): ?>
								<h3 class="column-subtext"><?php the_sub_field('section_subtext'); ?></h3>
							<?php endif; ?>
					        <?php if( get_sub_field('table_content')): ?>
					            <div class="table-wrap">
					                <table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
					                	<?php the_sub_field('table_content'); ?>
					                </table>
					            </div>
					        <?php endif; ?>
					        <?php if( get_sub_field('section_header')): ?>
		           </div> 
		           <!--headexpand-wrap END -->
		        <?php endif; ?>

		        <?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>	


	<?php elseif( get_row_layout() == 'product_grid' ): ?>
		<section class="product-grid-module">
			<div class="inner-wrap">
				<?php if( get_sub_field('section_header')): ?>
					<h2 class="carousel-header"><?php the_sub_field('section_header'); ?></h2>
				<?php endif; ?>
	        <div class="text-aligncenter"><?php if( get_sub_field('pg_heading')): ?>
              <h2 class="pm-title"><strong><?php the_sub_field('pg_heading'); ?></strong></h2><?php endif; ?>
              <?php if( get_sub_field('pg_intro_text')): ?>
              <p><?php the_sub_field('pg_intro_text'); ?></p><?php endif; ?>
            </div>
            <div class="product-carousel">
              <ul class="slides">
                <li class="rows-of-4">

<?php if( have_rows('pg_product_content') ):  while ( have_rows('pg_product_content') ) : the_row(); ?>
         	   <?php $pg_link = get_sub_field('pg_link');
          if( $pg_link ): 
            $link_url = $pg_link['url'];
            $link_title = $pg_link['title'];
            $link_target = $pg_link['target'] ? $pg_link['target'] : '_self';
            ?>
                  <a class="product-item" href="<?php echo esc_url($link_url); ?>"> 
                    <span class="product-img">
<?php if(get_sub_field('pg_image')) : ?><?php $pg_image = get_sub_field('pg_image'); ?><img src="<?php echo $pg_image['url']; ?>" alt="<?php echo esc_html($link_title); ?>" title="<?php echo esc_html($link_title); ?>"><?php endif; ?>


                    </span>
                    <span class="product-title"><?php echo esc_html($link_title); ?></span>
                  </a><?php endif; ?>


<?php  endwhile;endif; ?>

     
                </li>
              </ul>
            </div>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>


	<?php elseif( get_row_layout() == 'text_media' ): ?>
		<section class="text-media-module">
			<div class="inner-wrap">
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php the_sub_field('section_subtext'); ?></p>
				<?php endif; ?>			
		     	<article class="clearfix">	    		
		    		<div class="col-3of9">
		    			<?php the_sub_field('media'); ?>
		    		</div>
		    		<div class="col-6of9 col-last">
			    		<?php if( get_sub_field('section_header')): ?>
						<h2><?php the_sub_field('section_header'); ?></h2>
						<?php endif; ?>
		    			<?php the_sub_field('text'); ?>
		    		</div>	    		
				</article>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>


	<?php elseif( get_row_layout() == 'product_module' ): ?>
   <!-- Product Module Starts -->
      <section class="product-module">
        <!-- Desktop version -->
        <div class="pm-wrap-desk">
		<?php if( have_rows('product_module_content') ):  while ( have_rows('product_module_content') ) : the_row(); ?>
    	   <?php $pmc_link = get_sub_field('pmc_link');
          	if( $pmc_link ): 
            $link_url = $pmc_link['url'];
            $link_title = $pmc_link['title'];
            $link_target = $pmc_link['target'] ? $pmc_link['target'] : '_self';
            ?>
	        <a href="<?php echo esc_url($link_url); ?>" class="pm-wd-item" aria-label="<?php the_sub_field('pm_heading'); ?>">
	        	<div class="pw-wd-img-wrap"<?php if(get_sub_field('pm_background_image')) : ?>style="background-image:url(<?php the_sub_field('pm_background_image') ?>);"<?php endif; ?>></div>
	            <div class="pm-wd-item-wrap"><?php if( get_sub_field('pm_heading')): ?>
	              <h2 class="pm-wd-heading"><span><?php the_sub_field('pm_heading'); ?></span></h2><?php endif; ?>
	              <?php if( get_sub_field('pm_sub_heading')): ?>
	              <div class="pm-wd-tag"><?php the_sub_field('pm_sub_heading'); ?></div><?php endif; ?>
	              <?php if( get_sub_field('pm_intro_text')): ?>
	              <div class="pm-wd-desc"><?php the_sub_field('pm_intro_text'); ?></div><?php endif; ?>
	              <span class="pm-wd-link" aria-label="<?php the_sub_field('pm_heading'); ?>"><?php echo esc_html($link_title); ?> </span>
	            </div>
	          </a><?php endif; ?>
		<?php  endwhile;endif; ?>


        </div>
        <!-- Desktop version -->

        <!-- Mobile Version -->
        <div class="pm-wrap-mobile">
<?php if( have_rows('product_module_content') ):  while ( have_rows('product_module_content') ) : the_row(); ?>
	  
          <div class="pm-wm-item" <?php if(get_sub_field('pm_background_image')) : ?>style="background-image:url(<?php the_sub_field('pm_background_image') ?>);"<?php endif; ?>>
            <div class="pm-wm-item-wrap"><?php if( get_sub_field('pm_heading')): ?>
              <h2 class="pm-wm-heading"><?php the_sub_field('pm_heading'); ?></h2><?php endif; ?>
              <?php if( get_sub_field('pm_sub_heading')): ?>
              <div class="pm-wm-tag"><?php the_sub_field('pm_sub_heading'); ?></div><?php endif; ?>
                <?php if( get_sub_field('pm_intro_text')): ?>
              <div class="pm-wm-desc"><?php the_sub_field('pm_intro_text'); ?></div><?php endif; ?>
               <?php $pmc_link = get_sub_field('pmc_link');
          if( $pmc_link ): 
            $link_url = $pmc_link['url'];
            $link_title = $pmc_link['title'];
            $link_target = $pmc_link['target'] ? $pmc_link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" class="pm-wm-link"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
            </div>
          </div>
<?php  endwhile;endif; ?>


        </div>
        <!-- Mobile Version -->
      </section>
      <!-- Product Module Ends -->

<?php elseif( get_row_layout() == 'service_module' ): ?>
      <!-- Services Module Starts -->
      <section class="service-module"  <?php if(get_sub_field('sm_background_image')) : ?>style="background-image:url(<?php the_sub_field('sm_background_image') ?>);"<?php endif; ?>>
        <div class="inner-wrap">
          <div class="sm-wrap">
            <div class="sm-content">
              <div class="sm-txt"><?php if( get_sub_field('sm_heading')): ?>
                <h2 class="sm-title"><?php the_sub_field('sm_heading'); ?></h2><?php endif; ?>
                <?php if( get_sub_field('sm_sub_heading')): ?>
                <p class="sm-desc"><?php the_sub_field('sm_sub_heading'); ?></p><?php endif; ?>
                	   <?php $sm_link = get_sub_field('sm_link');
          if( $sm_link ): 
            $link_url = $sm_link['url'];
            $link_title = $sm_link['title'];
            $link_target = $sm_link['target'] ? $sm_link['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($link_url); ?>" class="btn-alt btn-sm"><?php echo esc_html($link_title); ?></a><?php endif; ?>
              </div>
              <ul class="sm-list">
<?php if( have_rows('sm_list_content') ):  while ( have_rows('sm_list_content') ) : the_row(); ?>

                  <li id="<?php the_sub_field('sm_list_id'); ?>"><a href="<?php the_sub_field('sm_list_title_link'); ?>" class="sm-item"><span><?php the_sub_field('sm_list_title'); ?></span></a></li>

      <?php  endwhile;endif; ?>

                </ul>
            </div>
            <div class="sm-img"> 
                <ul class="sm-img-list">
<?php if( have_rows('background_image_content') ):  while ( have_rows('background_image_content') ) : the_row(); ?>

                  <li class="<?php the_sub_field('smc_class_name'); ?>" <?php if(get_sub_field('smc_background_image')) : ?>style="background-image:url(<?php the_sub_field('smc_background_image') ?>);"<?php endif; ?>></li>


         <?php  endwhile;endif; ?>
                </ul>
              </div>
          </div>
        </div>
      </section>
      <!-- Services Module Ends -->

<?php elseif( get_row_layout() == 'industries_served_module' ): ?>
      <!-- Industries Served Module Starts -->
      <section class="industries-served-module">
<?php if( have_rows('industries_served_module_content') ):  while ( have_rows('industries_served_module_content') ) : the_row(); ?>
	   <?php $ism_link = get_sub_field('ism_link');
          if( $ism_link ): 
            $link_url = $ism_link['url'];
            $link_title = $ism_link['title'];
            $link_target = $ism_link['target'] ? $ism_link['target'] : '_self';
            ?>
        <a href="<?php echo esc_url($link_url); ?>" class="ism-item">
          <span class="ism-item-bg" <?php if(get_sub_field('ism_background_image')) : ?>style="background-image:url(<?php the_sub_field('ism_background_image') ?>);"<?php endif; ?>></span>
          <span class="ism-item-top">
            <span class="ism-item-icon">
<?php if(get_sub_field('ism_image')) : ?><?php $ism_image = get_sub_field('ism_image'); ?><img src="<?php echo $ism_image['url']; ?>" alt="<?php echo $ism_image['title']; ?>" title="<?php echo $ism_image['title']; ?>"><?php endif; ?>
            </span><?php if( get_sub_field('ism_image_title')): ?>
            <span class="ism-item-title"><?php the_sub_field('ism_image_title'); ?></span><?php endif; ?>
          </span>
          <span class="ism-item-back">
            <span class="ism-item-inner"><?php if( get_sub_field('ism_image_title')): ?>
              <span class="ism-item-title"><?php the_sub_field('ism_image_title'); ?></span><?php endif; ?>
              <?php if( get_sub_field('ism_intro_text')): ?>
              <span class="ism-item-text"><?php the_sub_field('ism_intro_text'); ?></span><?php endif; ?>
              <span class="ism-item-cta"><?php echo esc_html($link_title); ?> ></span>
            </span>
          </span>
        </a><?php endif; ?>

<?php  endwhile;endif; ?>

      
      </section>
      <!-- Industries Served Module Ends -->
      

<?php elseif( get_row_layout() == 'why_work_module' ): ?>
      <!-- Why Work Module Starts -->
      <section class="why-work-module">
      	<div class="wwm-bg-image"></div>
        <div class="inner-wrap-wide">
          <div class="wwm-left">
<?php if( have_rows('why_work_module_content') ):  while ( have_rows('why_work_module_content') ) : the_row(); ?>
   
            <div tabindex="0">
              <span class="wwm-top">
                <span class="wwm-icon">

   <?php if(get_sub_field('wwm_image')) : ?><?php $wwm_image = get_sub_field('wwm_image'); ?><img src="<?php echo $wwm_image['url']; ?>" alt="<?php echo $wwm_image['title']; ?>" title="<?php echo $wwm_image['title']; ?>"><?php endif; ?>
                </span> <?php if( get_sub_field('wwm_image_title')): ?>
                <span class="wwm-title"><?php the_sub_field('wwm_image_title'); ?></span><?php endif; ?>
              </span>
              <span class="wwm-back">
                <span class="wwm-img">
      <?php if(get_sub_field('wwm_hover_image')) : ?><?php $wwm_hover_image = get_sub_field('wwm_hover_image'); ?><img src="<?php echo $wwm_hover_image['url']; ?>" alt="<?php echo $wwm_hover_image['title']; ?>" title="<?php echo $wwm_hover_image['title']; ?>"><?php endif; ?>
                </span>
                <span class="wwm-text-wrap"> <?php if( get_sub_field('wwm_image_title')): ?>
                <span class="wwm-itm-tite"><?php the_sub_field('wwm_image_title'); ?></span><?php endif; ?>
                <?php if( get_sub_field('wwm_intro_text')): ?>
                <span class="wwm-desc"><?php the_sub_field('wwm_intro_text'); ?></span><?php endif; ?>
                </span>
              </span>
            </div>

<?php  endwhile;endif; ?>
          </div>
          <div class="wwm-right"><?php if( get_sub_field('wwm_right_heading')): ?>
            <h2 class="wwm-heading"><?php the_sub_field('wwm_right_heading'); ?></h2><?php endif; ?>
            <?php if( get_sub_field('wwm_right_intro_text')): ?>
            <p class="wwm-main-desc"><?php the_sub_field('wwm_right_intro_text'); ?></p><?php endif; ?>
              <?php $wwm_about_link = get_sub_field('wwm_about_link');
          if( $wwm_about_link ): 
            $link_url = $wwm_about_link['url'];
            $link_title = $wwm_about_link['title'];
            $link_target = $wwm_about_link['target'] ? $wwm_about_link['target'] : '_self';
            ?>
            <a href="<?php echo esc_url($link_url); ?>" class="btn wwm-btn"><?php echo esc_html($link_title); ?></a><?php endif; ?>
          </div>
        </div>
      </section>
      <!-- Why Work Module Starts -->


<?php elseif( get_row_layout() == 'homepage_fullwidth_module' ): ?>
      <!-- Homepage fullwidth CTA Starts -->
      <section class="homepage-fullwidth-module" <?php if(get_sub_field('hfm_background_image')) : ?>style="background-image:url(<?php the_sub_field('hfm_background_image') ?>);"<?php endif; ?>>
        <div class="inner-wrap"><?php if( get_sub_field('hfm_heading')): ?>
          <h2 class="hfwm-heading"><?php the_sub_field('hfm_heading'); ?></h2><?php endif; ?>
            <?php $hfm_link = get_sub_field('hfm_link');
          if( $hfm_link ): 
            $link_url = $hfm_link['url'];
            $link_title = $hfm_link['title'];
            $link_target = $hfm_link['target'] ? $hfm_link['target'] : '_self';
            ?>
          <a href="<?php echo esc_url($link_url); ?>" class="btn-alt hfwm-btn-alt"><?php echo esc_html($link_title); ?></a><?php endif; ?>
        </div>
      </section>
      <!-- Homepage fullwidth CTA Ends -->

    


      <?php elseif( get_row_layout() == 'heading_wrap' ): ?>
      <!-- Headign with BG -->
      <div class="heading-wrap">
        <div class="inner-wrap">
          <div class="rows-of-2">
            <div class="on-light-bg">
              <div class="hw-txt">
                <h1 class="lb-title"><?php the_sub_field('lh_heading'); ?></h1>
                <h5><?php the_sub_field('lh_sub_heading'); ?></h5>
                <p><?php the_sub_field('lh_intro_text'); ?></p>
              </div>
            </div>
            <div class="on-color-bg">
              <div class="hw-txt">                
                <h1><?php the_sub_field('right_heading'); ?></h1>
                <h5><?php the_sub_field('right_sub_heading'); ?></h5>
                <p><?php the_sub_field('right_intro_text'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Headign with BG -->




 <?php elseif( get_row_layout() == 'dest_resource_module' ): ?>
<section class="dest-resource-module" style="background-color:#efefef">
	<div class="inner-wrap py-5">
		<div class="row align-items-md-center ">
			<?php if( get_sub_field('dsm_heading')): ?>						
					<h2 class="drm-title"><?php the_sub_field('dsm_heading'); ?></h2>
				<?php endif; ?>					
			<div class="left-content ">
				<div> 
				<?php if( get_sub_field('dsm_intro_text')): ?>
		<p><?php the_sub_field('dsm_intro_text'); ?></p><?php endif; ?>

									<div class="drm-cta-wrap  pb-4">
             <?php $dsm_learn_more_cta = get_sub_field('dsm_learn_more_cta');
          if( $dsm_learn_more_cta ): 
            $link_url = $dsm_learn_more_cta['url'];
            $link_title = $dsm_learn_more_cta['title'];
            $link_target = $dsm_learn_more_cta['target'] ? $dsm_learn_more_cta['target'] : '_self';
            ?>

					<a class="btn btn-primary drm-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html($link_title); ?></a><?php endif; ?>
					<?php $dsm_learn_more_cta2 = get_sub_field('dsm_learn_more_cta2');
          if( $dsm_learn_more_cta2 ): 
            $link_url = $dsm_learn_more_cta2['url'];
            $link_title = $dsm_learn_more_cta2['title'];
            $link_target = $dsm_learn_more_cta2['target'] ? $dsm_learn_more_cta2['target'] : '_self';
            ?>

					<a class="btn btn-alt drm-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html($link_title); ?></a><?php endif; ?>
				</div>
								</div>
			</div>
			<div class="right-content">
	
<?php if(get_sub_field('dsm_right_image')) : ?><?php $dsm_right_image = get_sub_field('dsm_right_image'); ?><a class="lightbox" href="<?php echo $dsm_right_image['url']; ?>"><img src="<?php echo $dsm_right_image['url']; ?>" alt="<?php echo $dsm_right_image['title']; ?>" title="<?php echo $dsm_right_image['title']; ?>"></a><?php endif; ?>
</div>
		</div>
	</div>
</section>

 <?php elseif( get_row_layout() == 'gray_module' ): ?>
<div class="right-image-module " style="background-color:#efefef">
<div class="inner-wrap clearfix">
<?php if( get_sub_field('gm_heading')): ?>	
	<h2><?php the_sub_field('gm_heading'); ?></h2><?php endif; ?>	
	<?php if( get_sub_field('gm_intro_text')): ?>	
	<p><?php the_sub_field('gm_intro_text'); ?></p><?php endif; ?>	
</div>
</div>



 <?php elseif( get_row_layout() == 'right_image_module' ): ?>
 <div class="right-image-module">
<div class="inner-wrap">
<div class ="right-image"> 

<?php if(get_sub_field('right_image')) : ?><?php $right_image = get_sub_field('right_image'); ?><img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['title']; ?>" title="<?php echo $right_image['title']; ?>"><?php endif; ?>

</div>
<div class ="rim-left-content"> 
<?php if( get_sub_field('rim_left_content')): ?>		
<p><?php the_sub_field('rim_left_content'); ?> </p><?php endif; ?>	
</div>
</div>
</div>








<?php endif; ?>
<?php endwhile; echo '</section>'; ?>
<?php endif; ?>




