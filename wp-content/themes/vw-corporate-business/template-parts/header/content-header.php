<?php if( get_theme_mod( 'vw_corporate_business_topbar_hide_show', false) == 1 || get_theme_mod( 'vw_corporate_business_resp_topbar_hide_show', false) == 1) { ?>
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <?php if ( get_theme_mod('vw_corporate_business_location','') != "" ) {?>
           <span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_location_icon','fas fa-map-marker-alt')); ?>"></i><?php echo esc_html( get_theme_mod('vw_corporate_business_location','') ); ?></span>
          <?php }?>
          <?php if ( get_theme_mod('vw_corporate_business_call','') != "" ) {?>
            <span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_phone_icon','fas fa-phone')); ?>"></i><a href="tel:<?php echo esc_attr( get_theme_mod('vw_corporate_business_call','') ); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_business_call',''));?></a></span>
          <?php }?>
          <?php if ( get_theme_mod('vw_corporate_business_email','') != "" ) {?>
            <span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_email_icon','fas fa-envelope')); ?>"></i><a href="mailto:<?php echo esc_attr(get_theme_mod('vw_corporate_business_email',''));?>"><?php echo esc_html(get_theme_mod('vw_corporate_business_email',''));?></a></span>
          <?php }?>
        </div>
        <div class="col-lg-4 col-md-4">
          <?php dynamic_sidebar('social-icon'); ?>
        </div>
      </div>
    </div>
  </div>
<?php }?>