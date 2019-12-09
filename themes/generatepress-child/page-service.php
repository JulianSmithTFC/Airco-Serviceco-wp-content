<?php
/*
Template Name: Our Services Page
*/

get_header('services');
?>

<div class="container-fluid ourServices-blockOne-container">
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
                    <h2 class="ourServices-blockOne-heading text-uppercase"><?php the_field( 'heading' ); ?></h2>
                    <div class="ourServices-blockOne-bodyText">
                        <?php the_field( 'body_text' ); ?>
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