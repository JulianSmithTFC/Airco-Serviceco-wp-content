<?php
get_header('services');
?>

<div class="container-fluid services-blockOne-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div>
                    <?php if ( is_active_sidebar( 'service-page-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'service-page-sidebar' ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div>
                    <h2 class="services-blockOne-heading text-uppercase"><?php the_field( 'heading' ); ?></h2>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div>
                                    <?php $image = get_field( 'image' ); ?>
                                    <?php if ( $image ) { ?>
                                        <img src="<?php echo $image['url']; ?>" class="services-blockOne-image" alt="<?php echo $image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div>
                                    <div class="services-blockOne-bodyText">
                                        <?php the_field( 'body_text' ); ?>
                                    </div>
                                    <?php if ( have_rows( 'list' ) ) : ?>
                                        <ul class="fa-ul">
                                            <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                                                <li class="services-blockOne-list"><span class="fa-li"><i class="fas fa-circle fa-xs services-blockOne-listIcons"></i></span><?php the_sub_field( 'list_info' ); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(get_field('footer_choice') == 'contact'){
    get_footer('contact');
}
if(get_field('footer_choice') == 'regular'){
    get_footer();
}
?>