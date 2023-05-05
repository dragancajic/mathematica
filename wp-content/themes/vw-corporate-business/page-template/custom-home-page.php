<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_corporate_business_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_corporate_business_slider_hide_show', false) == 1 || get_theme_mod( 'vw_corporate_business_resp_slider_hide_show', false) == 1) { ?>
    <section id="slider">
      <?php if(get_theme_mod('vw_corporate_business_slider_type', 'Default slider') == 'Default slider' ){ ?>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'vw_corporate_business_slider_speed',4000)) ?>">
        <?php $vw_corporate_business_slider_page = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_corporate_business_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_corporate_business_slider_page[] = $mod;
            }
          }
          if( !empty($vw_corporate_business_slider_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_corporate_business_slider_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/slider.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1 class="wow zoomInDown delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p class="wow zoomInUp delay-1000" data-wow-duration="2s"><?php $vw_corporate_business_excerpt = get_the_excerpt(); echo esc_html( vw_corporate_business_string_limit_words( $vw_corporate_business_excerpt, esc_attr(get_theme_mod('vw_corporate_business_slider_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_corporate_business_slider_button_text','READ MORE') != ''){ ?>
                    <div class="more-btn wow zoomInUp delay-1000" data-wow-duration="2s">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_business_slider_button_text',__('READ MORE','vw-corporate-business')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_business_slider_button_text',__('READ MORE','vw-corporate-business')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-corporate-business' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-corporate-business' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
      <?php } else if(get_theme_mod('vw_corporate_business_slider_type', 'Advance slider') == 'Advance slider'){?>
          <?php echo do_shortcode(get_theme_mod('vw_corporate_business_advance_slider_shortcode')); ?>
        <?php } ?>
    </section> 
  <?php }?>

  <?php do_action( 'vw_corporate_business_after_slider' ); ?>

  <?php if( get_theme_mod('vw_corporate_business_about_post') != ''){ ?>
    <section class="about wow slideInRight delay-1000" data-wow-duration="3s">
      <div class="container">
        <div class="row">
          <?php
           $vw_corporate_business_postData1=  get_theme_mod('vw_corporate_business_about_post');
            if($vw_corporate_business_postData1){
            $args = array( 'name' => esc_html($vw_corporate_business_postData1 ,'vw-corporate-business'));
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-7 col-md-7">
                  <h2><?php the_title(); ?></h2>
                  <p><?php $vw_corporate_business_excerpt = get_the_excerpt(); echo esc_html( vw_corporate_business_string_limit_words( $vw_corporate_business_excerpt, esc_attr(get_theme_mod('vw_corporate_business_about_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_corporate_business_about_button_text','READ MORE') != ''){ ?>
                    <div class ="about-btn">
                      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_business_about_button_text',__('READ MORE','vw-corporate-business'))); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_business_about_button_text',__('READ MORE','vw-corporate-business'))); ?></span></a>
                    </div>
                  <?php } ?>
                </div>
                <div class="col-lg-5 col-md-5">
                  <div class="abt-image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
              <?php endwhile; 
              wp_reset_postdata();?>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php
          endif; }?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'vw_corporate_business_after_about' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>