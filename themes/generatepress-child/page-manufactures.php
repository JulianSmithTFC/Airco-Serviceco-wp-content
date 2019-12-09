<?php
/*
Template Name: Manufactures Page
*/

$headerOption = get_field('header_option');

if ($headerOption == 'regular'){
    get_header();
}

if ($headerOption == 'home'){
    get_header('home');
}

?>

<div class="container-fluid manufactures-blockOne-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div>
                    <?php if ( is_active_sidebar( 'manufactures-page-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'manufactures-page-sidebar' ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="container-fluid">
                    <div class="">
                        <?php $logo_image = get_field( 'logo_image' ); ?>
                        <?php if ( $logo_image ) { ?>
                            <img src="<?php echo $logo_image['url']; ?>" class="manufactures-blockOne-logo" alt="<?php echo $logo_image['alt']; ?>" />
                        <?php } ?>
                        <h2 class="manufactures-blockOne-heading"><?php the_field( 'heading' ); ?></h2>
                        <div class="manufactures-blockOne-bodyText">
                            <?php if ( have_rows( 'body_text' ) ) : ?>
                                <?php while ( have_rows( 'body_text' ) ) : the_row(); ?>
                                    <?php the_sub_field( 'paragraph_text' ); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                            <?php if ( have_rows( 'cards' ) ) : ?>
                                <?php while ( have_rows( 'cards' ) ) : the_row(); ?>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="manufactures-blockOne-cards">
                                            <div class="manufactures-blockOne-cardImage" style="background-image: url('<?php the_sub_field( 'images' ); ?>');">

                                            </div>
                                            <h3 class="manufactures-blockOne-cardHeading"><?php the_sub_field( 'heading' ); ?></h3>
                                            <p class="manufactures-blockOne-cardSubheading"><?php the_sub_field( 'body_text' ); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
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
