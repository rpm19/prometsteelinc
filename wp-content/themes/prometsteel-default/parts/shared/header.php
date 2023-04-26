<!--Site Header-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/search-module' ) ); ?>
<!-- Site header wrap start-->
    <div class="site-header-wrap">
      <header class="site-header" role="banner">

        <div class="sh-top-nav">
          <div class="inner-wrap">

      <a href="<?php bloginfo('url'); ?>" class="site-logo site-log-mob">
        <?php $logo = get_field('global_company_logo','option');
        if( !empty($logo) ): ?>
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
        <?php endif;?>
      </a>
            
            <div class="sh-social-wrap">
              <a href="<?php the_field('header_linkedin_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="sh-social">
                <img src="<?php bloginfo('template_url'); ?>/img/ico-linkedin.svg" class="on" alt="Linkedin" title="Linkedin">
                <img src="<?php bloginfo('template_url'); ?>/img/ico-linkedin-hover.svg" class="off" alt="Linkedin" title="Linkedin">
              </a>

<!-- Thomas Supplier Badge -->
<a href="https://www.thomasnet.com/profile/01316945?src=tnbadge" target="_blank" class="tn-badge__link sh-verified">
<img 
src="https://img.thomascdn.com/badges/shield-tier-v-md.png?cid=01316945"
srcset="https://img.thomascdn.com/badges/shield-tier-v-md-2x.png?cid=01316945 2x" 
alt="Thomas Supplier" 
class="tn-badge__img" />
</a>
<!-- End Thomas Supplier Badge -->

  
         
            </div>
            <!-- Utility Nav Starts -->
            <div class="sh-utility-nav">
              <a href="#menu" class="sh-ico-menu menu-link" aria-label="Menu Icon"><span>Menu</span></a>
              <a href="tel:<?php the_field('global_phone_number_no-format', 'option'); ?>" class="sh-ph" aria-label="Phone Number"><span><?php the_field('global_phone_number', 'option'); ?></span></a>
              <a href="mailto:<?php the_field('global_email', 'option'); ?>" class="sh-email" aria-label="Email Address"><span>Email Us</span></a>
              <a class="sh-ico-search search-link" target="_blank" href="#" aria-label="Search Icon"><span>Search</span></a>
              <a href="<?php the_field('header_contact_link', 'option'); ?>" class="btn sh-btn sh-btn-mob">Request a Quote</a>
            </div>
            <!-- Utility Nav Ends -->
          </div>
        </div>

        <!-- Sticky Nav Starts -->
        <div class="sh-sticky-wrap">
          <div class="inner-wrap">
                  <a href="<?php bloginfo('url'); ?>" class="site-logo site-logo-desk">
        <?php $logo = get_field('global_company_logo','option');
        if( !empty($logo) ): ?>
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
        <?php endif;?>
      </a>
            <div class="sh-right-sec">
              <!--Site Nav Starts-->
              <div class="site-nav-container">
                <div class="snc-header">
                  <div class="snc-social-wrap">
            <a href="<?php the_field('header_linkedin_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="sh-social">
                <img src="<?php bloginfo('template_url'); ?>/img/ico-linkedin-hover.svg" class="off" alt="Linkedin" title="Linkedin">
              </a>

<!-- Thomas Supplier Badge -->
<a href="https://www.thomasnet.com/profile/01316945?src=tnbadge" target="_blank" class="tn-badge__link sh-verified">
<img 
src="https://img.thomascdn.com/badges/shield-tier-v-md.png?cid=01316945"
srcset="https://img.thomascdn.com/badges/shield-tier-v-md-2x.png?cid=01316945 2x" 
alt="Thomas Supplier" 
class="tn-badge__img" />
</a>
<!-- End Thomas Supplier Badge -->
                  </div>
                  <a href="#" class="close-menu menu-link" aria-label="Close Menu"><span>Close</span></a>
                </div>
        <?php wp_nav_menu(array(
        'menu'            => 'Primary Nav',
        'container'       => 'nav',
        'container_class' => 'site-nav',
        'menu_class'      => 'sn-level-1',
        'walker'        => new themeslug_walker_nav_menu
        )); ?>
              </div>
              <!--Site Nav Ends-->
              <a href="<?php the_field('header_contact_link', 'option'); ?>" class="btn sh-btn sh-btn-desk"><span>Request a Quote</span><span>RFQ</span></a>
            </div>         
          </div>
          <a href="" class="site-nav-container-screen menu-link">&nbsp;</a>
        </div>
        <!-- Sticky Nav Ends -->

      </header>
    <?php if ( is_front_page() ) : ?>
      <!--Site intro container start-->
        <?php Starkers_Utilities::get_template_parts( array( 'parts/site-intro' ) ); ?>   
      <!--Site intro container end-->
    <?php else : ?>
      <!--page intro start-->    
        <?php Starkers_Utilities::get_template_parts( array( 'parts/page-intro' ) ); ?>    
      <!--page intro end-->
    <?php endif; ?>
</div>
<!-- Site header wrap end-->