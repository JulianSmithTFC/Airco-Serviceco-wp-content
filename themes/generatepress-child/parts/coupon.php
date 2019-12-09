<div class="modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="couponModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-fluid popup-coupon-container" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title popup-coupon-heading" id="couponModalLabel"><?php the_field( 'popup_heading', 'option' ); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row display-flex">
                        <?php if ( have_rows( 'container_left', 'option' ) ) : ?>
                            <?php while ( have_rows( 'container_left', 'option' ) ) : the_row(); ?>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="couponPopupContainerLeft" class="featured-fix popup-coupon-leftcontainer" align="center" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>')">

                                        <div class="popup-coupon-leftcontainerInner">
                                            <?php $logo_image = get_sub_field( 'logo_image' ); ?>
                                            <?php if ( $logo_image ) { ?>
                                                <img src="<?php echo $logo_image['url']; ?>" class="popup-coupon-left-logo" alt="<?php echo $logo_image['alt']; ?>" />
                                            <?php } ?>
                                            <p class="popup-coupon-left-heading text-uppercase"><?php the_sub_field( 'heading' ); ?></p>
                                            <?php if ( have_rows( 'list' ) ) : ?>
                                                <ul class="popup-coupon-left-list">
                                                    <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                                                        <li class="popup-coupon-left-listText"><?php the_sub_field( 'list_text' ); ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <p class="popup-coupon-left-bottomHeading text-uppercase"><?php the_sub_field( 'bottom_heading' ); ?></p>
                                            <p class="popup-coupon-left-bottomSubheading text-uppercase"><?php the_sub_field( 'bottom_subheading' ); ?></p>
                                        </div>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'container_right', 'option' ) ) : ?>
                            <?php while ( have_rows( 'container_right', 'option' ) ) : the_row(); ?>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="couponPopupContainerRight" class="featured-fix popup-coupon-rightcontainer" align="center">

                                        <p class="popup-coupon-right-heading"><?php the_sub_field( 'heading' ); ?></p>
                                        <div class="popup-coupon-right-bodyText"><?php the_sub_field( 'body_text' ); ?></div>
                                        <p class="popup-coupon-right-subheading"><?php the_sub_field( 'sub_heading' ); ?></p>

                                        <a class="btn popup-coupon-right-buttonOne" href="tel:<?php the_sub_field( 'phone_number' ); ?>"><?php the_sub_field( 'button_one_title' ); ?></a>
                                        <br/>
                                        <?php $button = get_sub_field( 'button' ); ?>
                                        <?php if ( $button ) { ?>
                                            <a href="<?php echo $button['url']; ?>" class="btn popup-coupon-right-buttonTwo" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn popup-coupon-closeButton" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>