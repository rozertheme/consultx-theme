<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consultx
 */

?>
			</div><!-- #contennt -->
		</div><!-- .row -->
	
	<div class="last">
        <!-- form section ends -->
        <footer class="footer section-padding">
            <div class="container">
                <div class="contact-bar">                	
                    <div class="row">
                    	<?php  if (!empty(get_theme_mod('consultx_header_officehrs'))) { ?>
                        <div class="col-sm-4">
                            <div class="con bdr-right">
                                <i class="fa fa-clock-o"></i>
                                <h5><?php esc_html_e('Office Hrs','consultx'); ?></h5>
                                <p><?php echo esc_html(get_theme_mod('consultx_header_officehrs'));  ?></p>
                            </div>
                        </div>
                    	<?php } if (!empty(get_theme_mod('consultx_header_contactno'))) { ?>
                        <div class="col-sm-4">
                            <div class="con bdr-right">
                                <i class="fa fa-phone">
                                </i>
                                 <h5><?php esc_html_e('Call Us','consultx'); ?></h5>
                                 <p><?php echo esc_html(get_theme_mod('consultx_header_contactno'));  ?></p>
                            </div>
                        </div>
                        <?php } if (!empty(get_theme_mod('consultx_header_email'))) { ?>
                        <div class="col-sm-4">
                            <div class="con">
                                <i class="fa fa-envelope-o">
                                </i>                                   
                                <h5><?php esc_html_e('Email at','consultx'); ?></h5>
                                 <p><?php echo esc_html(get_theme_mod('consultx_header_email'));  ?></p>
                            </div>
                        </div>
                    	<?php }  ?>
                    </div>
                </div>
                <div class="row footer-main">
                	<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) { ?>
                    <div class="col-md-4 ">
                        <div class="padd bdr-right">
                            <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                            
                        </div>
                    </div>
                	<?php } if ( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
                    <div class="col-md-4">
                        <div class="padd bdr-right">
                            <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                        </div>
                    </div>
                	<?php } if ( is_active_sidebar( 'footer-sidebar-3' ) ) { ?>
                    <div class="col-md-4">
                        <div class="padd">
                            <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                        </div>
                    </div>
                	<?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer ends  -->
        <!-- copyright  -->
        <div class="copyright text-center">
            <div class="container">

                <p><?php bloginfo('name'); ?> <?php echo esc_html__('|','consultx'); ?>
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'consultx' ) ); ?>"><?php printf( esc_html( 'Proudly powered by %s', 'consultx' ), 'WordPress' ); ?></a>
					
                </p>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</div><!-- .container -->
</body>
</html>
