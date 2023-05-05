<?php
/**
 * The template part for displaying content
 *
 * @package VW Corporate Business 
 * @subpackage vw_corporate_business
 * @since VW Corporate Business 1.0
 */
?>
<?php 
  $vw_corporate_business_archive_year  = get_the_time('Y'); 
  $vw_corporate_business_archive_month = get_the_time('m'); 
  $vw_corporate_business_archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box wow slideInUp delay-1000" data-wow-duration="2s">
    <?php $vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_blog_layout_option','Default');
    if($vw_corporate_business_theme_lay == 'Default'){ ?>
      <div class="row">
        <?php if(has_post_thumbnail() && get_theme_mod( 'vw_corporate_business_featured_image_hide_show',true) == 1) {?>
          <div class="service-image col-lg-6 col-md-6">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <div class="service-text <?php if(has_post_thumbnail() && get_theme_mod( 'vw_corporate_business_featured_image_hide_show',true) == 1) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if( get_theme_mod( 'vw_corporate_business_toggle_postdate',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_author',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_comments',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_time',true) == 1) { ?>
            <div class="post-info">
              <?php if(get_theme_mod('vw_corporate_business_toggle_postdate',true)==1){ ?>
                <i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_postdate_icon','fa fa-calendar')); ?>" aria-hidden="true"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_corporate_business_archive_year, $vw_corporate_business_archive_month, $vw_corporate_business_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_corporate_business_toggle_author',true)==1){ ?>
                <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_author_icon','fa fa-user')); ?>" aria-hidden="true"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_corporate_business_toggle_comments',true)==1){ ?>
                <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','vw-corporate-business'), __('0 Comments','vw-corporate-business'), __('% Comments','vw-corporate-business') ); ?></span> 
              <?php } ?> 

              <?php if(get_theme_mod('vw_corporate_business_toggle_time',true)==1){ ?>
                <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_time_icon','fas fa-clock')); ?>"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
            </div>
          <?php } ?>
          <div class="new-text">
            <div class="entry-content">
              <p>
                <?php $vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_excerpt_settings','Excerpt');
                if($vw_corporate_business_theme_lay == 'Content'){ ?>
                  <?php the_content(); ?>
                <?php }
                if($vw_corporate_business_theme_lay == 'Excerpt'){ ?>
                  <?php if(get_the_excerpt()) { ?>
                    <?php $vw_corporate_business_excerpt = get_the_excerpt(); echo esc_html( vw_corporate_business_string_limit_words( $vw_corporate_business_excerpt, esc_attr(get_theme_mod('vw_corporate_business_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_corporate_business_excerpt_suffix',''));?>
                  <?php }?>
                <?php }?> 
              </p>
            </div>
          </div>
          <?php if( get_theme_mod('vw_corporate_business_button_text','Read More') != ''){ ?>
            <div class="content-bttn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_corporate_business_button_text',__('Read More','vw-corporate-business')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_business_button_text',__('Read More','vw-corporate-business')));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
     <?php }else if($vw_corporate_business_theme_lay == 'Center'){ ?>
      <div class="service-text">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_corporate_business_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_corporate_business_toggle_postdate',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_author',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_comments',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_time',true) == 1) { ?>
          <div class="post-info">
            <?php if(get_theme_mod('vw_corporate_business_toggle_postdate',true)==1){ ?>
              <i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_postdate_icon','fa fa-calendar')); ?>" aria-hidden="true"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_corporate_business_archive_year, $vw_corporate_business_archive_month, $vw_corporate_business_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_corporate_business_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_author_icon','fa fa-user')); ?>" aria-hidden="true"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_corporate_business_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','vw-corporate-business'), __('0 Comments','vw-corporate-business'), __('% Comments','vw-corporate-business') ); ?></span> 
            <?php } ?> 

            <?php if(get_theme_mod('vw_corporate_business_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_time_icon','fas fa-clock')); ?>"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="new-text">
          <div class="entry-content">
            <p>
              <?php $vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_excerpt_settings','Excerpt');
              if($vw_corporate_business_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_corporate_business_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <?php $vw_corporate_business_excerpt = get_the_excerpt(); echo esc_html( vw_corporate_business_string_limit_words( $vw_corporate_business_excerpt, esc_attr(get_theme_mod('vw_corporate_business_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_corporate_business_excerpt_suffix',''));?>
                <?php }?>
              <?php }?> 
            </p>
          </div>
        </div>
        <?php if( get_theme_mod('vw_corporate_business_button_text','Read More') != ''){ ?>
          <div class="content-bttn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_corporate_business_button_text',__('Read More','vw-corporate-business')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_business_button_text',__('Read More','vw-corporate-business')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($vw_corporate_business_theme_lay == 'Left'){ ?>
      <div class="service-text">
        <?php if( get_theme_mod( 'vw_corporate_business_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_corporate_business_toggle_postdate',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_author',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_comments',true) == 1 || get_theme_mod( 'vw_corporate_business_toggle_time',true) == 1) { ?>
          <div class="post-info">
            <?php if(get_theme_mod('vw_corporate_business_toggle_postdate',true)==1){ ?>
              <i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_postdate_icon','fa fa-calendar')); ?>" aria-hidden="true"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_corporate_business_archive_year, $vw_corporate_business_archive_month, $vw_corporate_business_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_corporate_business_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_author_icon','fa fa-user')); ?>" aria-hidden="true"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_corporate_business_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','vw-corporate-business'), __('0 Comments','vw-corporate-business'), __('% Comments','vw-corporate-business') ); ?></span> 
            <?php } ?> 

            <?php if(get_theme_mod('vw_corporate_business_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_corporate_business_meta_field_separator'));?></span><i class="<?php echo esc_attr(get_theme_mod('vw_corporate_business_toggle_time_icon','fas fa-clock')); ?>"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="new-text">
          <div class="entry-content">
            <p>
              <?php $vw_corporate_business_theme_lay = get_theme_mod( 'vw_corporate_business_excerpt_settings','Excerpt');
              if($vw_corporate_business_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_corporate_business_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <?php $vw_corporate_business_excerpt = get_the_excerpt(); echo esc_html( vw_corporate_business_string_limit_words( $vw_corporate_business_excerpt, esc_attr(get_theme_mod('vw_corporate_business_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_corporate_business_excerpt_suffix',''));?>
                <?php }?>
              <?php }?>
            </p>
          </div>
        </div>
        <?php if( get_theme_mod('vw_corporate_business_button_text','Read More') != ''){ ?>
          <div class="content-bttn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_corporate_business_button_text',__('Read More','vw-corporate-business')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_business_button_text',__('Read More','vw-corporate-business')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</article>