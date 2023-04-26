    <!--Site Footer Starts-->
    <footer class="site-footer" role="contentinfo">
      <div class="sf-main-footer">
        <div class="inner-wrap">
          <div class="sf-logo-wrap">
                <a href="<?php bloginfo('url'); ?>" class="sf-logo">
        <?php $logo = get_field('footer_logo','option');
        if( !empty($logo) ): ?>
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>">
        <?php endif;?>
      </a>   
         
            <div class="sf-logo-icon">
<?php if(get_field('footer_iso_image','option')) : ?><?php $footer_iso_image = get_field('footer_iso_image','option'); ?><img width="61px" src="<?php echo $footer_iso_image['url']; ?>" alt="<?php echo $footer_iso_image['title']; ?>" title="<?php echo $footer_iso_image['title']; ?>"><?php endif; ?>

<?php if(get_field('footer_astm_image','option')) : ?><?php $footer_astm_image = get_field('footer_astm_image','option'); ?><img width="64px" src="<?php echo $footer_astm_image['url']; ?>" alt="<?php echo $footer_astm_image['title']; ?>" title="<?php echo $footer_astm_image['title']; ?>"><?php endif; ?>
<?php if(get_field('footer_asd_image','option')) : ?><?php $footer_asd_image = get_field('footer_asd_image','option'); ?><img width="64px" src="<?php echo $footer_asd_image['url']; ?>" alt="<?php echo $footer_asd_image['title']; ?>" title="<?php echo $footer_asd_image['title']; ?>"><?php endif; ?>

            </div>
          </div>
          <div class="sf-contact-det">
            <h3 class="sf-heading">Contact</h3>
            <p class="sf-add"><span><?php the_field('global_address', 'option'); ?></span>
            <span>Tel: <a href="tel:<?php the_field('global_phone_number_no-format', 'option'); ?>">
              <?php the_field('global_phone_number', 'option'); ?></a></span>
            <span>Fax: <a href="javascript:void(0);" tabindex="-1"  class="sf-fax"><?php the_field('global_fax', 'option'); ?></a></span>
            <span><a href="mailto:<?php the_field('global_email', 'option'); ?>"><?php the_field('global_email', 'option'); ?></a></span></p>
          </div>
          <div class="sf-link-list">
            <h3 class="sf-heading">Links</h3>
                            <?php wp_nav_menu(array(
        'menu'            => 'Footer Nav',
        'menu_class'      => 'sf-links',
        )); ?>
       
          </div>
          <div class="sf-verified">
<!-- Thomas Supplier Badge -->
<a href="https://www.thomasnet.com/profile/01316945?src=tnbadge" target="_blank" class="tn-badge__link">
<img 
src="https://img.thomascdn.com/badges/shield-tier-v-md.png?cid=01316945"
srcset="https://img.thomascdn.com/badges/shield-tier-v-md-2x.png?cid=01316945 2x" 
alt="Thomas Supplier" 
class="tn-badge__img" />
</a>
<!-- End Thomas Supplier Badge -->
          </div>
        </div>
      </div>
      <div class="sf-small-footer">
        <div class="inner-wrap">
          <p>&copy; <?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved <span>|</span>  Site created by <a href="https://business.thomasnet.com/" target="_blank" rel="noopener noreferrer">Thomas Marketing Services</a> </p>
        </div>
      </div>
    </footer>
    <!--Site Footer Ends-->