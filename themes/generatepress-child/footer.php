<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>


<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_element_classes( 'footer' ); ?>>
    <?php
    /**
     * generate_before_footer_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_before_footer_content' );
    ?>
    <div class="container-fluid footer-middel-container">
        <div class="container">
            <div class="row">
                <?php
                if (is_active_sidebar( 'footer-1' )) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php } ?>
                <?php
                if (is_active_sidebar( 'footer-2' )) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                <?php } ?>
                <?php
                if (is_active_sidebar( 'footer-3' )) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-bottom-container">
        <div class="container" align="center">
            <p class="footer-bottom-heading">Copyright <?php echo date("Y") . ' ' . get_bloginfo( 'name' ); ?>. All Rights Reserved</p>
        </div>
    </div>
    <?php
    /**
     * generate_after_footer_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_after_footer_content' );
    ?>
</div><!-- .site-footer -->

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer();


include get_stylesheet_directory() . '/parts/coupon.php';
?>

<script>
    $(window).on('resize load', function() {
        //Extra Small
        if($(window).width() < 576) {
            $('#header-top-left').attr("align","center");
            $('#header-top-right').attr("align","center");
            $('#header-top-middle').removeClass("justify-content-end");
            $('#header-top-middle').addClass("justify-content-center");

            $('.modal-dialog').removeClass("modal-fluid popup-coupon-container");
            $('.modal-dialog').addClass("modal-lg");
            $('#couponPopupContainerLeft').removeClass("featured-fix popup-coupon-leftcontainer");
            $('#couponPopupContainerRight').removeClass("featured-fix popup-coupon-rightcontainer");
        }
        //Small
        if(($(window).width() >= 576) && ($(window).width() < 768)) {
            $('#header-top-left').attr("align","center");
            $('#header-top-right').attr("align","center");
            $('#header-top-middle').removeClass("justify-content-end");
            $('#header-top-middle').addClass("justify-content-center");

            $('.modal-dialog').removeClass("modal-fluid popup-coupon-container");
            $('.modal-dialog').addClass("modal-lg");
            $('#couponPopupContainerLeft').removeClass("featured-fix popup-coupon-leftcontainer");
            $('#couponPopupContainerRight').removeClass("featured-fix popup-coupon-rightcontainer");
        }
        //Medium
        if(($(window).width() >= 768) && ($(window).width() < 992)) {
            $('#header-top-left').removeAttr("align");
            $('#header-top-right').removeAttr("align");
            $('#header-top-middle').removeClass("justify-content-end");
            $('#header-top-middle').addClass("justify-content-center");

            $('.modal-dialog').removeClass("modal-fluid popup-coupon-container");
            $('.modal-dialog').addClass("modal-lg");
            $('#couponPopupContainerLeft').removeClass("featured-fix popup-coupon-leftcontainer");
            $('#couponPopupContainerRight').removeClass("featured-fix popup-coupon-rightcontainer");
        }
        //Large
        if(($(window).width() >= 992) && ($(window).width() < 1200)) {
            $('#header-top-left').removeAttr("align");
            $('#header-top-right').removeAttr("align");
            $('#header-top-middle').removeClass("justify-content-center");
            $('#header-top-middle').addClass("justify-content-end");

            $('.modal-dialog').removeClass("modal-lg");
            $('.modal-dialog').addClass("modal-fluid popup-coupon-container");
            $('#couponPopupContainerLeft').addClass("featured-fix popup-coupon-leftcontainer");
            $('#couponPopupContainerRight').addClass("featured-fix popup-coupon-rightcontainer");
        }
        //Extra Large
        if($(window).width() >= 1200){
            $('#header-top-left').removeAttr("align");
            $('#header-top-right').removeAttr("align");
            $('#header-top-middle').removeClass("justify-content-center");
            $('#header-top-middle').addClass("justify-content-end");

            $('.modal-dialog').removeClass("modal-lg");
            $('.modal-dialog').addClass("modal-fluid popup-coupon-container");
            $('#couponPopupContainerLeft').addClass("featured-fix popup-coupon-leftcontainer");
            $('#couponPopupContainerRight').addClass("featured-fix popup-coupon-rightcontainer");
        }
    });
</script>

</body>
</html>
