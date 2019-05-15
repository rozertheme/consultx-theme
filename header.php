<?php
/**
 * The header. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consultx
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
 <!-- to top btn  -->

    <!-- to top btn  ends -->
    <div class="wrapper">
        <!-- preloader  -->
        <div class="preloader">
            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
                <span><?php esc_html_e('Loading ...','consultx'); ?></span>
            </div>
        </div>
        <!-- preloader ends -->
        <header>
            <?php if(get_theme_mod('consultx_show_header_contact_info', false) !=''){ ?>
            <!-- header strip -->
            <div class="header-strip">
                <div class="container">
                    <div class="row">
                    <?php if (!empty(get_theme_mod('consultx_header_contactno'))) { ?>
                        <div class="col-xs-6 col-md-3 col-lg-3">
                            <div class="con">
                                <i class="fa fa-phone"></i>
                                <h5>
                                    <?php esc_html_e('Call Us','consultx'); ?>
                                    <span><?php echo esc_html(get_theme_mod('consultx_header_contactno'));  ?></span>
                                </h5>
                            </div>
                        </div>
                        <?php } if (!empty(get_theme_mod('consultx_header_email'))) { ?>
                        <div class="col-xs-6 col-md-3 col-lg-3">
                            <div class="con">
                                <i class="fa fa-envelope-o"></i>
                                <h5>
                                    <?php esc_html_e('Email at','consultx'); ?>
                                    <span><?php echo esc_html(get_theme_mod('consultx_header_email'));  ?></span>
                                </h5>
                            </div>
                        </div>
                    <?php } if (!empty(get_theme_mod('consultx_header_officehrs'))) { ?>
                        <div class="col-xs-6 col-md-4 col-lg-3">
                            <div class="con border-none">
                                <i class="fa fa-clock-o"></i>
                                <h5>
                                    <?php esc_html_e('Office Hrs','consultx'); ?>
                                    <span><?php echo esc_html(get_theme_mod('consultx_header_officehrs'));  ?></span>
                                </h5>
                            </div>
                        </div>
                    <?php } if (!empty(get_theme_mod('consultx_quote_button'))) { ?>
                        <div class="col-xs-6 col-md-2 col-lg-3">
                            <div class="btn-holder">
                                <a href="<?php echo esc_url($consultx_quote_button_url); ?>" class="btn-quote"><?php echo esc_html(get_theme_mod('consultx_quote_button'));  ?></a>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <!-- header strip ends-->
            <?php } ?>
            <!-- menubar  -->
            <div class="menu-outer menu-outer-three">
                <div class="menubar">
                    <div class="container">
                        <nav class="navbar">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#consultx-navbar" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <?php
                                if ( consultx_get_the_logo_url() ) {
                                    ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand-two" title="Logo Link">
                                        <?php the_custom_logo(); ?>
                                    </a>
                                    <?php
                                    } else {
                                    if ( is_front_page() && is_home() ) {
                                ?>
                                    
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand-two" title="Logo Link">
                                    <span><?php bloginfo( 'name' ); ?></span>
                                </a></h1>
                                    
                                <?php 
                                } else {
                                ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                                }

                                $description = get_bloginfo( 'description', 'display' );
                                if ( $description || is_customize_preview() ) {
                                    ?>
                                    <p class="site-description"><?php echo esc_attr( $description ); ?></p>
                                    <?php
                                }   
                            }
                                 ?>


                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav navbar-nav navbar-right" id="menu">
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                <?php
                                if ( has_nav_menu('primary')) {
                                wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'menu_id'        => 'primary-menu',
                                    ) );
                            }
                                else
                                    { ?>
                                        <ul class="navigation">
                                            <li class="menu-item">
                                                <a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?> "> <?php esc_html_e('Add a menu','consultx'); ?></a>
                                            </li>
                                        </ul>
                            <?php } ?>
                            </nav>
                            </div>


                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
    /*----------------------------------------------
    ----------- Slick Nav  --------------------
    -------------------------------------------------*/
    if (jQuery('#menu').length) {
        jQuery('#menu').slicknav({
            brand: '<?php if(consultx_get_the_logo_url()){ ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php the_custom_logo(); ?></a> <h1> <?php } else{ bloginfo( 'name' ); } ?></h1>',
            appendTo: 'header',
        });
    }
      </script>
            <!-- menubar ends -->
        </header>

<!-------------------------------------------------------
------------------------Slider Section Start-------------
-------------------------------------------------------->

<?php 
if ( is_front_page() && !is_home() ) {
if(get_theme_mod('consultx_showslide_area') != '') {
    for($i=1; $i<=3; $i++) {
      if( get_theme_mod('consultx_slidepgebx'.$i,false)) {
       $slider_Arr[] = absint( get_theme_mod('consultx_slidepgebx'.$i,true));
      }
    }
?> 
<div class="slider-area multi-slider-area">
    <?php if(!empty($slider_Arr)){ ?>
        <div class="slider-main owl-carousel">
  <?php 


    
    $i=1;
    
    $slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr ) );

    while( $slidequery->have_posts() ) :  $slidequery->the_post(); 
    $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<!-- slider item  -->
    <div class="item">                    
        <?php if(!empty($image)){ ?>
            <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr($alt); ?>" />
        <?php } ?>
        <div class="overlay">
            <div class="slide-text text-center">
                <h2><?php the_title(); ?></h2>
                <p><?php echo esc_html(wp_trim_words( get_the_content(), 25, '.' )); ?></p>
                <div class="slider-btns">
                    <?php
                        if( !empty(get_theme_mod('consultx_slidereadmore_btn')) ){ ?>
                            <a class="btn btn-custom" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('consultx_slidereadmore_btn')); ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- slider item ends  -->
    <?php 
    $i++; 
    endwhile;
    wp_reset_postdata(); ?>  
    </div>
    <div class="slider-nav">
        <div class="sld-prev">
            <span><?php echo esc_html__('Prev','consultx'); ?></span>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/assets/images/slider-nav.png" alt="">
        </div>
        <div class="sld-next">
            <span><?php echo esc_html__('Next','consultx'); ?></span>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/assets/images/slider-nav.png" alt="">
        </div>
    </div>
</div>
<!-- slider section ends --> 
<?php } ?>


<?php } 

else
{
?>

<?php
consultx_breadcrumbs();?>


<?php
} }?>

<!-------------------------------------------------------
------------------------Slider Section End---------------
-------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------
-------------------------------------------------Second Section Start--------------------------------
----------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------
------------------------Service Section Start------------
-------------------------------------------------------->
<?php if ( is_front_page() && ! is_home() ) {
 if( get_theme_mod('consultx_show_service_section') != ''){ ?>
<!-- about section  -->
        <section class="section-padding" id="aboutus">
            <div class="container">
                <?php
                     if( !empty(get_theme_mod('consultx_service_tittletext')) ){ ?>
                        <h2 class="primary-title"><?php echo esc_html(get_theme_mod('consultx_service_tittletext')); ?></h2>
                <?php } ?>                
                <div class="row">
                    <?php 
                        for($n=1; $n<=4; $n++) {    
                        if( get_theme_mod('consultx_servicepage'.$n,false)) {      
                            $queryvar = new WP_Query('page_id='.absint(get_theme_mod('consultx_servicepage'.$n,true)) );     
                            while( $queryvar->have_posts() ) : $queryvar->the_post(); 
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="info-box text-center">
                            <?php if(has_post_thumbnail() ) { ?>
                               <?php the_post_thumbnail();?>       
                            <?php } ?> 
                            <h4>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <p><?php $excerpt = get_the_excerpt(); echo esc_html( consultx_string_limit_words( $excerpt,20 ) ); ?></p>
                        </div>
                    </div>
                     <?php endwhile;
                            wp_reset_postdata();                                  
                        } } 
                    ?>    
                </div>
            </div>
        </section>
        <!-- service section  ends -->
   <?php } ?>
<!-------------------------------------------------------
------------------------Service Section End--------------
-------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------
-------------------------------------------------Third Section Start--------------------------------
----------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------
------------------------About Section Start------------
-------------------------------------------------------->
    <?php if( get_theme_mod('consultx_show_aboutus_pagebox') != ''){ 
            if( get_theme_mod('consultx_aboutus_pagebox',false)) {     
                $queryvar = new WP_Query('page_id='.absint(get_theme_mod('consultx_aboutus_pagebox',true)) );
                    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
                        <section class="section-padding" id="aboutus">
                            <div class="container">
                                <div class="row about-main secondry-padding">
                                    <div class="col-md-6">
                                        <h4 class="sec-title"><?php the_title(); ?></h4>   
                                        <?php the_content();  ?>         
                                    </div> 
                                    <div class="col-md-6">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                </div>
                            </div>
                        </section>
                <?php endwhile;
                     wp_reset_postdata(); ?>
    <?php } } ?>

<!-------------------------------------------------------
------------------------About Section End--------------
-------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------
-------------------------------------------------Fourth Section Start--------------------------------
----------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------
------------------------Project Section Start------------
-------------------------------------------------------->
    <?php if( get_theme_mod('consultx_show_current_project_section') != ''){ ?>
    <!-- projects section -->
        <section class="project-section section-padding" id="works">
            <div class="container">
                <?php
                    if( !empty(get_theme_mod('consultx_project_tittletext')) ){ ?>
                       <h2 class="primary-title"><?php echo esc_html(get_theme_mod('consultx_project_tittletext')); ?></h2>
                <?php } ?>                        
                <div class="row">
                    <div class="col-md-12">
                        <div class="row project-items text-center">
                            <!-- service  -->
                            <?php 
                                for($n=1; $n<=6; $n++) {    
                                if( get_theme_mod('consultx_current_project_pagebx'.$n,false)) {      
                                    $queryvar = new WP_Query('page_id='.absint(get_theme_mod('consultx_current_project_pagebx'.$n,true)) );     
                                    while( $queryvar->have_posts() ) : $queryvar->the_post(); 
                            ?>  
                            <div class="col-xs-6 col-sm-6 col-md-4 grid-item marketing">
                                <div class="project">
                                    <?php if(has_post_thumbnail()){ 
                                        the_post_thumbnail('full', array('class' => 'img-responsive')); 
                                    } ?>
                                    <div class="dimmer">
                                        <div class="overlay">
                                            <a href="<?php the_permalink(); ?>" class="link" title="project link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <h4><?php the_title(); ?></h4>
                                            <a href="<?php echo esc_url(the_post_thumbnail_url()); ?>" class="popup-box" title="project title"  data-lightbox="image">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- service ends -->
                           <?php endwhile;
                                    wp_reset_postdata();                                  
                                } } 
                            ?>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- projects section ends -->
    <?php } ?>
<!-------------------------------------------------------
------------------------Project Section End--------------
-------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------
-------------------------------------------------Fifth Section Start--------------------------------
----------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------
------------------------Blog & Client Section Start------------
-------------------------------------------------------->
    <?php if( get_theme_mod('consultx_show_blog_section') != ''){ ?>
    <!-- news and partner section -->
        <div class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <section class="news-section section-padding" id="blog">
                             <?php
                                if( !empty(get_theme_mod('consultx_blog_tittletext')) ){ ?>
                                   <h2 class="primary-title"><?php echo esc_html(get_theme_mod('consultx_blog_tittletext')); ?></h2>
                            <?php } ?>        
                            <div class="news-slider">
                                <?php 
                                    $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
                                    if ( $latest_blog_posts->have_posts() ) : 
                                        while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
                                ?>
                                <!-- item -->
                                <div class="item">
                                    <div class="news">
                                        <div class="row">
                                            <?php if(has_post_thumbnail()){ ?>
                                                <div class="col-xs-5">
                                                    <div class="featured-pic">
                                                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if(!has_post_thumbnail()): ?>
                                            <div class="col-xs-7 blog-img">
                                            <?php else: ?>
                                            <div class="col-xs-7">
                                            <?php endif; ?>
                                                <div class="news-detail">
                                                    <h4>
                                                        <a title="news title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                            
                                                    </h4>
                                                    <p><?php echo esc_html(wp_trim_words( get_the_content(), 20, '.' )); ?></p>
                                                    <ul class="clearfix">
                                                        <li>
                                                            <i class="fa fa-calendar"></i>
                                                            <span><?php echo get_the_date();?></span>
                                                        </li>
                                                        <li>
                                                            <a href="<?php the_permalink(); ?>" title="news read more">
                                                                <?php echo esc_html__( 'Read More', 'consultx' ); ?>
                                                                <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item ends  -->
                                <?php 
                                    endwhile; 
                                    endif; 
                                ?>      
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section class="partner-section section-padding">
                            <?php
                                if( !empty(get_theme_mod('consultx_client_tittletext')) ){ ?>
                                   <h2 class="primary-title"><?php echo esc_html(get_theme_mod('consultx_client_tittletext')); ?></h2>
                            <?php } ?>    
                            <ul class="clearfix">
                                <?php
                                for($n=1; $n<=6; $n++) {    
                                    if( get_theme_mod('consultx_client_pagebx'.$n,false)) {      
                                        $queryvar = new WP_Query('page_id='.absint(get_theme_mod('consultx_client_pagebx'.$n,true)) );  
                                   while( $queryvar->have_posts() ) : $queryvar->the_post();
                                ?>
                                <?php if(has_post_thumbnail()){ ?>
                                <li>
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                </li>
                                 <?php } endwhile;
                                        wp_reset_postdata(); } }
                                ?>     
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- news and partner section ends -->


<?php } } ?>
<!-------------------------------------------------------
------------------------Blog & Client Section End--------------
-------------------------------------------------------->