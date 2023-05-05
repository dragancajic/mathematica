<?php
/**
 * The template part for displaying single post layout
 *
 * @package VW Corporate Business
 * @subpackage vw-corporate-business
 * @since VW Corporate Business 1.0
 */
?>
<?php 
  $vw_corporate_business_archive_year  = get_the_time('Y'); 
  $vw_corporate_business_archive_month = get_the_time('m'); 
  $vw_corporate_business_archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="single-post">
    <h1><?php the_title(); ?></h1>
    <?php if( get_theme_mod( 'vw_corporate_business_single_postdate',true) == 1 || get_theme_mod( 'vw_corporate_business_single_author',true) == 1 || get_theme_mod( 'vw_corporate_business_single_comments',true) == 1 || get_theme_mod( 'vw_corporate_business_single_time',true) == 1) { ?>
      <div class="post-info">
        <?php if(get_theme_mod('vw_corporate_business_single_postdate',true)==1){ ?>
          <i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_corporate_business_archive_year, $vw_corporate_business_archive_month, $vw_corporate_business_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_corporate_business_single_author',true)==1){ ?>
          <span><?php echo esc_html(get_theme_mod('vw_corporate_business_single_post_meta_field_separator'));?></span><i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_corporate_business_single_comments',true)==1){ ?>
          <span><?php echo esc_html(get_theme_mod('vw_corporate_business_single_post_meta_field_separator'));?></span><i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','vw-corporate-business'), __('0 Comments','vw-corporate-business'), __('% Comments','vw-corporate-business') ); ?></span> 
        <?php } ?>

        <?php if(get_theme_mod('vw_corporate_business_single_time',true)==1){ ?>
          <span><?php echo esc_html(get_theme_mod('vw_corporate_business_single_post_meta_field_separator'));?></span><i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
        <?php } ?>
      </div>
    <?php } ?>
      <?php if(has_post_thumbnail()) { ?>  
        <div class="features-box">   
          <?php the_post_thumbnail(); ?>
        </div>           
      <?php } ?> 
      <?php if( get_theme_mod( 'vw_corporate_business_single_post_category',true) == 1) { ?>
        <div class="single-post-category mt-3">
            <span class="category"><?php esc_html_e('Categories:','vw-corporate-business'); ?></span>
            <?php the_category(); ?>
        </div>
      <?php }?>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php if(get_theme_mod('vw_corporate_business_toggle_tags',true)==1){ ?>
          <div class="tags"><?php the_tags(); ?></div>   
        <?php } ?> 
      </div> 
      <?php

      // If comments are open or we have at least one comment, load up the comment template
      if ( comments_open() || '0' != get_comments_number() )
      comments_template();

      if ( is_singular( 'attachment' ) ) {
          // Parent post navigation.
          the_post_navigation( array(
              'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-corporate-business' ),
          ) );
      } elseif ( is_singular( 'post' ) ) {
        // Previous/next post navigation.
        the_post_navigation( array(
          'next_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html(get_theme_mod('vw_corporate_business_single_blog_next_navigation_text','NEXT')) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-corporate-business' ) . '</span> ' .
            '<span class="post-title">%title</span>',
          'prev_text' => '<span class="meta-nav" aria-hidden="true">' .esc_html(get_theme_mod('vw_corporate_business_single_blog_prev_navigation_text','PREVIOUS')) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-corporate-business' ) . '</span> ' .
            '<span class="post-title">%title</span>',
        ) );
      }
    ?>
  </div>
   <?php get_template_part('template-parts/related-posts'); ?>
</article>