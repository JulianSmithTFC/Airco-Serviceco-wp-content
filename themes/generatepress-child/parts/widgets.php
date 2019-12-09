<?php

// ---------------------------------------------------------Custom Contact Us Widget Start--------------------------
function custom_contactus_load_widget() {
    register_widget( 'custom_contactus_widget' );
}
add_action( 'widgets_init', 'custom_contactus_load_widget' );


class custom_contactus_widget extends WP_Widget {

    //Sets up the widgets name etc
    public function __construct() {
        $widget_ops = array(
            'classname' => 'custom_contactus_widget',
            'description' => 'Custom Contact Us Widget',
        );
        parent::__construct( 'custom_contactus_widget', 'Custom: Contact Us Widget', $widget_ops );
    }

    //Outputs the content of the widget
    public function widget( $args, $instance ) {
        // Define widget ID
        // Replace NULL with ID of widget to be queried eg 'pages-2' or $args['widget_id']
        $widget_id = $args['widget_id'];

        // Define prefixed widget ID
        $widget_acf_prefix = 'widget_';
        $widget_id_prefixed = $widget_acf_prefix . $widget_id;
        ?>

        <div class="container-fluid widget-contactUs-container">
            <p class="widget-contactUs-heading text-uppercase"><?php the_field( 'heading', $widget_id_prefixed ); ?></p>

            <?php if ( have_rows( 'contact_info', $widget_id_prefixed ) ) : ?>
                <ul class="fa-ul">
                    <?php while ( have_rows( 'contact_info', $widget_id_prefixed ) ) : the_row(); ?>
                        <?php $contactType = get_sub_field( 'contact_type' ); ?>
                        <?php
                        if ($contactType == 'address'){
                            ?>
                            <li class="widget-contactUs-listitems"><span class="fa-li"><i class="fas fa-map-marker-alt widget-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        if ($contactType == 'phone'){
                            ?>
                            <li class="widget-contactUs-listitems"><span class="fa-li"><i class="fas fa-mobile-alt widget-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        if ($contactType == 'email'){
                            ?>
                            <li class="widget-contactUs-listitems"><span class="fa-li"><i class="fas fa-at widget-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        if ($contactType == 'hours'){
                            ?>
                            <li class="widget-contactUs-listitems"><span class="fa-li"><i class="fas fa-clock widget-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
        <?php
    }

    //Outputs the options form on admin
    public function form( $instance ) {
        // outputs the options form on admin
    }


    //Processing widget options on save
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
// ---------------------------------------------------------Custom Contact Us Widget End--------------------------

// ---------------------------------------------------------Custom Service Menu Widget Start--------------------------
function custom_servicemenu_load_widget() {
    register_widget( 'custom_servicemenu_widget' );
}
add_action( 'widgets_init', 'custom_servicemenu_load_widget' );


class custom_servicemenu_widget extends WP_Widget {

    //Sets up the widgets name etc
    public function __construct() {
        $widget_ops = array(
            'classname' => 'custom_servicemenu_widget',
            'description' => 'Custom Service Menu Widget',
        );
        parent::__construct( 'custom_servicemenu_widget', 'Custom: Service Menu Widget', $widget_ops );
    }

    //Outputs the content of the widget
    public function widget( $args, $instance ) {
        // Define widget ID
        // Replace NULL with ID of widget to be queried eg 'pages-2' or $args['widget_id']
        $widget_id = $args['widget_id'];

        // Define prefixed widget ID
        $widget_acf_prefix = 'widget_';
        $widget_id_prefixed = $widget_acf_prefix . $widget_id;
        ?>

        <div class="container-fluid widget-servicesMenu-container">
            <?php

            $currentID = get_the_ID();

            $args = array(
                'post_type'   => 'service',
                'post_status' => 'publish',
                'orderby' => 'DESC'
            );

            global $wp;
            $currentPageURL =  home_url( $wp->request ) . '/';

            $projects = new WP_Query( $args );
            if( $projects->have_posts() ){ ?>
            <nav class="nav flex-column" align="center">
                <?php $services_page_link = get_field( 'services_page_link', $widget_id_prefixed ); ?>
                <?php if ( $services_page_link ) {
                    if($currentPageURL == $services_page_link['url']){ ?>
                        <a class="nav-link widget-servicesMenu-linkActive" href="<?php echo $services_page_link['url']; ?>" target="<?php echo $services_page_link['target']; ?>"><?php echo $services_page_link['title']; ?></a>
                    <?php }else{ ?>
                        <a class="nav-link widget-servicesMenu-link" href="<?php echo $services_page_link['url']; ?>" target="<?php echo $services_page_link['target']; ?>"><?php echo $services_page_link['title']; ?></a>
                    <?php } ?>

                <?php } ?>
                <?php while( $projects->have_posts() ) : $projects->the_post();
                    $projectTitle = get_the_title();
                    $servicePageLink = get_permalink();

                    if($currentPageURL == $servicePageLink){ ?>
                        <a class="nav-link widget-servicesMenu-linkActive" href="<?php echo $servicePageLink ?>"><?php echo $projectTitle ?></a>
                    <?php
                    }else{ ?>
                        <a class="nav-link widget-servicesMenu-link" href="<?php echo $servicePageLink ?>"><?php echo $projectTitle ?></a>
                    <?php } ?>
                <?php endwhile; ?>
            </nav>
                <?php }
            wp_reset_query();
            wp_reset_postdata();
            ?>
        </div>
        <?php
    }

    //Outputs the options form on admin
    public function form( $instance ) {
        // outputs the options form on admin
    }


    //Processing widget options on save
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
// ---------------------------------------------------------Custom Service Menu Widget End--------------------------

// ---------------------------------------------------------Custom Coupon Widget Start--------------------------
function custom_coupon_load_widget() {
    register_widget( 'custom_coupon_widget' );
}
add_action( 'widgets_init', 'custom_coupon_load_widget' );


class custom_coupon_widget extends WP_Widget {

    //Sets up the widgets name etc
    public function __construct() {
        $widget_ops = array(
            'classname' => 'custom_coupon_widget',
            'description' => 'Custom Coupon Widget',
        );
        parent::__construct( 'custom_coupon_widget', 'Custom: Coupon Widget', $widget_ops );
    }

    //Outputs the content of the widget
    public function widget( $args, $instance ) {
        // Define widget ID
        // Replace NULL with ID of widget to be queried eg 'pages-2' or $args['widget_id']
        $widget_id = $args['widget_id'];

        // Define prefixed widget ID
        $widget_acf_prefix = 'widget_';
        $widget_id_prefixed = $widget_acf_prefix . $widget_id;
        if (get_field('turn_coupon_on', $widget_id_prefixed) == 1) { ?>
            <div class="container-fluid widget-custom-coupon-container" align="center">
                <div class="">
                    <h3 class="text-uppercase widget-custom-coupon-heading"><?php the_field( 'heading_one', $widget_id_prefixed ); ?> <span class="widget-custom-coupon-headingMiddel"><?php the_field( 'heading_two', $widget_id_prefixed ); ?></span> <?php the_field( 'heading_three', $widget_id_prefixed ); ?></h3>
                    <p class="widget-custom-coupon-subheading"><?php the_field( 'subheading', $widget_id_prefixed ); ?></p>
                    <?php $button = get_field( 'button', $widget_id_prefixed ); ?>
                    <?php if ( $button ) { ?>
                        <a class="btn widget-custom-coupon-button" data-toggle="modal" data-target="#couponModal"><?php echo $button['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
            <?php
        }
    }

    //Outputs the options form on admin
    public function form( $instance ) {
        // outputs the options form on admin
    }


    //Processing widget options on save
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
// ---------------------------------------------------------Footer Coupon Widget End--------------------------

// ---------------------------------------------------------Footer Contact Us Widget Start--------------------------
function footer_contactus_load_widget() {
    register_widget( 'footer_contactus_widget' );
}
add_action( 'widgets_init', 'footer_contactus_load_widget' );


class footer_contactus_widget extends WP_Widget {

    //Sets up the widgets name etc
    public function __construct() {
        $widget_ops = array(
            'classname' => 'footer_contactus_widget',
            'description' => 'Footer Contact Us Widget',
        );
        parent::__construct( 'footer_contactus_widget', 'Footer: Contact Us Widget', $widget_ops );
    }

    //Outputs the content of the widget
    public function widget( $args, $instance ) {
        // Define widget ID
        // Replace NULL with ID of widget to be queried eg 'pages-2' or $args['widget_id']
        $widget_id = $args['widget_id'];

        // Define prefixed widget ID
        $widget_acf_prefix = 'widget_';
        $widget_id_prefixed = $widget_acf_prefix . $widget_id;
        ?>

        <div class="container-fluid widget-footer-contactUs-container">
            <p class="widget-footer-contactUs-heading text-uppercase"><?php the_field( 'heading', $widget_id_prefixed ); ?></p>

            <?php if ( have_rows( 'contact_info', $widget_id_prefixed ) ) : ?>
                <ul class="fa-ul">
                    <?php while ( have_rows( 'contact_info', $widget_id_prefixed ) ) : the_row(); ?>
                        <?php $contactType = get_sub_field( 'contact_type' ); ?>
                        <?php
                        if ($contactType == 'address'){
                            ?>
                            <li class="widget-footer-contactUs-listitems"><span class="fa-li"><i class="fas fa-map-marker-alt widget-footer-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        if ($contactType == 'phone'){
                            ?>
                            <li class="widget-footer-contactUs-listitems"><span class="fa-li"><i class="fas fa-mobile-alt widget-footer-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        if ($contactType == 'email'){
                            ?>
                            <li class="widget-footer-contactUs-listitems"><span class="fa-li"><i class="fas fa-at widget-footer-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        if ($contactType == 'hours'){
                            ?>
                            <li class="widget-footer-contactUs-listitems"><span class="fa-li"><i class="fas fa-clock widget-footer-contactUs-icons"></i></span><?php the_sub_field( 'contact_info' ); ?></li>
                            <?php
                        }
                        ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
        <?php
    }

    //Outputs the options form on admin
    public function form( $instance ) {
        // outputs the options form on admin
    }


    //Processing widget options on save
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
// ---------------------------------------------------------Footer Contact Us Widget End--------------------------

// ---------------------------------------------------------Footer Quick Links Widget Start--------------------------
function footer_quicklinks_load_widget() {
    register_widget( 'footer_quicklinks_widget' );
}
add_action( 'widgets_init', 'footer_quicklinks_load_widget' );


class footer_quicklinks_widget extends WP_Widget {

    //Sets up the widgets name etc
    public function __construct() {
        $widget_ops = array(
            'classname' => 'footer_quicklinks_widget',
            'description' => 'Footer Quick Links Widget',
        );
        parent::__construct( 'footer_quicklinks_widget', 'Footer: Quick Links Widget', $widget_ops );
    }

    //Outputs the content of the widget
    public function widget( $args, $instance ) {
        // Define widget ID
        // Replace NULL with ID of widget to be queried eg 'pages-2' or $args['widget_id']
        $widget_id = $args['widget_id'];

        // Define prefixed widget ID
        $widget_acf_prefix = 'widget_';
        $widget_id_prefixed = $widget_acf_prefix . $widget_id;
        $count = 0;
        ?>
        <div class="container-fluid widget-footer-quickLinks-container">
            <p class="widget-footer-quickLinks-heading text-uppercase"><?php the_field( 'heading', $widget_id_prefixed ); ?></p>
            <?php if ( have_rows( 'quick_links', $widget_id_prefixed ) ) : ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="fa-ul">
                        <?php while ( have_rows( 'quick_links', $widget_id_prefixed ) ) : the_row();
                        if (($count/5 == 1) || ($count/5 == 2) || ($count/5 == 3)){
                            ?>
                            </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <ul class="fa-ul">
                        <?php } ?>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) { ?>
                            <li class="widget-footer-quickLinks-listitems"><span class="fa-li"><i class="fas fa-angle-right widget-footer-quickLinks-icons"></i></span><a href="<?php echo $link['url']; ?>" class="widget-footer-quickLinks-links" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
                        <?php } ?>
                        <?php
                        $count++;
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php
    }

    //Outputs the options form on admin
    public function form( $instance ) {
        // outputs the options form on admin
    }


    //Processing widget options on save
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
// ---------------------------------------------------------Footer Contact Us Widget End--------------------------

// ---------------------------------------------------------Footer Coupon Widget Start--------------------------
function footer_coupon_load_widget() {
    register_widget( 'footer_coupon_widget' );
}
add_action( 'widgets_init', 'footer_coupon_load_widget' );


class footer_coupon_widget extends WP_Widget {

    //Sets up the widgets name etc
    public function __construct() {
        $widget_ops = array(
            'classname' => 'footer_coupon_widget',
            'description' => 'Footer Coupon Widget',
        );
        parent::__construct( 'footer_coupon_widget', 'Footer: Coupon Widget', $widget_ops );
    }

    //Outputs the content of the widget
    public function widget( $args, $instance ) {
        // Define widget ID
        // Replace NULL with ID of widget to be queried eg 'pages-2' or $args['widget_id']
        $widget_id = $args['widget_id'];

        // Define prefixed widget ID
        $widget_acf_prefix = 'widget_';
        $widget_id_prefixed = $widget_acf_prefix . $widget_id;
        if (get_field('turn_coupon_on', $widget_id_prefixed) == 1) { ?>
            <div class="container-fluid widget-footer-coupon-container" align="center">
                <div class="">
                    <h3 class="text-uppercase widget-footer-coupon-heading"><?php the_field( 'heading_one', $widget_id_prefixed ); ?> <span class="widget-footer-coupon-headingMiddel"><?php the_field( 'heading_two', $widget_id_prefixed ); ?></span> <?php the_field( 'heading_three', $widget_id_prefixed ); ?></h3>
                    <h4 class="widget-footer-coupon-subheading"><?php the_field( 'subheading', $widget_id_prefixed ); ?></h4>
                    <?php $button = get_field( 'button', $widget_id_prefixed ); ?>
                    <?php if ( $button ) { ?>
                        <a class="btn widget-footer-coupon-button" data-toggle="modal" data-target="#couponModal"><?php echo $button['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        <?php
        }
    }

    //Outputs the options form on admin
    public function form( $instance ) {
        // outputs the options form on admin
    }


    //Processing widget options on save
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
// ---------------------------------------------------------Footer Contact Us Widget End--------------------------