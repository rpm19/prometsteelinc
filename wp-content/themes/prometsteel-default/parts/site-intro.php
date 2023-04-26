
  

      <!--Site Intro Starts-->
      <section class="site-intro">
        <div class="si-video">
                    <video autoplay muted loop id="si-bg-Video" playsinline>
  <source src="https://prometsteelinc.wpengine.com/wp-content/uploads/site-video.mp4" type="video/mp4">
</video>
</div>
           <div class="si-video-wrapper">


        <div class="inner-wrap"><?php if( get_field('si_heading')): ?>
          <p class="si-desc"><?php the_field('si_heading'); ?></p><?php endif; ?>
          <?php if( get_field('si_sub_heading')): ?>
          <h1 class="si-heading"><?php the_field('si_sub_heading'); ?></h1><?php endif; ?>
          <?php $si_first_cta = get_field('si_first_cta');
          if( $si_first_cta ): 
            $link_url = $si_first_cta['url'];
            $link_title = $si_first_cta['title'];
            $link_target = $si_first_cta['target'] ? $si_first_cta['target'] : '_self';
            ?> 
          <a href="<?php echo esc_url($link_url); ?>" class="btn si-btn" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html($link_title); ?></span></a><?php endif; ?>

                <?php $si_left_cta = get_field('si_left_cta');
          if( $si_left_cta ): 
            $link_url = $si_left_cta['url'];
            $link_title = $si_left_cta['title'];
            $link_target = $si_left_cta['target'] ? $si_left_cta['target'] : '_self';
            ?> 
          <a href="<?php echo esc_url($link_url); ?>" class="btn si-btn-alt popup-youtube"><span><?php echo esc_html($link_title); ?></span></a><?php endif; ?>

                          <?php $si_right_cta = get_field('si_right_cta');
          if( $si_right_cta ): 
            $link_url = $si_right_cta['url'];
            $link_title = $si_right_cta['title'];
            $link_target = $si_right_cta['target'] ? $si_right_cta['target'] : '_self';
            ?> 
          <a href="<?php echo esc_url($link_url); ?>" class="btn si-btn"><?php echo esc_html($link_title); ?></a><?php endif; ?>
        </div> 
 </div> 
      </section>
      <!--Site Intro Ends-->
