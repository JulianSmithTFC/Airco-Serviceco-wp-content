<?php
/*
Template Name: About Us Page
*/

$headerOption = get_field('header_option');

if ($headerOption == 'regular'){
    get_header();
}

if ($headerOption == 'home'){
    get_header('home');
}

?>

    <!-- ------------ Block One ------------ -->
<?php if ( have_rows( 'block_one' ) ) : ?>
    <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
        <div class="container-fluid about-blockOne-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="about-blockOne-containerLeft">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) { ?>
                                <img src="<?php echo $image['url']; ?>" class="about-blockOne-image" alt="<?php echo $image['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="about-blockOne-containerRight">
                            <h2 class="about-blockOne-header"><?php the_sub_field( 'header' ); ?></h2>
                            <?php if ( have_rows( 'body_text' ) ) : ?>
                                <?php while ( have_rows( 'body_text' ) ) : the_row(); ?>
                                    <div class="about-blockOne-bodyText"><?php the_sub_field( 'paragraph' ); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">

                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div align="center">
                                                        <div class="about-blockOne-iconContainer"><i class="fas fa-cog fa-2x about-blockOne-icons"></i></div>
                                                    </div>
                                                </div>
                                                <?php if ( have_rows( 'why_choose_us_one' ) ) : ?>
                                                    <?php while ( have_rows( 'why_choose_us_one' ) ) : the_row(); ?>
                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            <div>
                                                                <h3 class="about-blockOne-wcuHeader"><?php the_sub_field( 'heading' ); ?></h3>
                                                                <p class="about-blockOne-wcuSubheader"><?php the_sub_field( 'subheading' ); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div align="center">
                                                        <div class="about-blockOne-iconContainer"><i class="fas fa-comment fa-2x about-blockOne-icons"></i></div>
                                                    </div>
                                                </div>
                                                <?php if ( have_rows( 'why_choose_us_two' ) ) : ?>
                                                    <?php while ( have_rows( 'why_choose_us_two' ) ) : the_row(); ?>
                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            <div>
                                                                <h3 class="about-blockOne-wcuHeader"><?php the_sub_field( 'heading' ); ?></h3>
                                                                <p class="about-blockOne-wcuSubheader"><?php the_sub_field( 'subheading' ); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div align="center">
                                                        <div class="about-blockOne-iconContainer"><i class="fas fa-gift fa-2x about-blockOne-icons"></i></div>
                                                    </div>
                                                </div>
                                                <?php if ( have_rows( 'why_choose_us_three' ) ) : ?>
                                                    <?php while ( have_rows( 'why_choose_us_three' ) ) : the_row(); ?>
                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            <div>
                                                                <h3 class="about-blockOne-wcuHeader"><?php the_sub_field( 'heading' ); ?></h3>
                                                                <p class="about-blockOne-wcuSubheader"><?php the_sub_field( 'subheading' ); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div align="center">
                                                        <div class="about-blockOne-iconContainer"><i class="fas fa-heart fa-2x about-blockOne-icons"></i></div>
                                                    </div>
                                                </div>
                                                <?php if ( have_rows( 'why_choose_us_four' ) ) : ?>
                                                    <?php while ( have_rows( 'why_choose_us_four' ) ) : the_row(); ?>
                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                            <div>
                                                                <h3 class="about-blockOne-wcuHeader"><?php the_sub_field( 'heading' ); ?></h3>
                                                                <p class="about-blockOne-wcuSubheader"><?php the_sub_field( 'subheading' ); ?></p>
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
                </div>

            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- ------------ Block Two ------------ -->
<?php if ( have_rows( 'block_two' ) ) : ?>
    <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
        <div class="container-fluid about-blockTwo-container">
            <div class="container">
                <h2 class="about-blockTwo-header"><?php the_sub_field( 'header' ); ?></h2>
                <div class="row justify-content-center about-blockTwo-rows">
                    <?php $btwo_count = 0; ?>
                    <?php if ( have_rows( 'reviews' ) ) : ?>
                    <?php while ( have_rows( 'reviews' ) ) : the_row(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="about-blockTwo-reviewContainer">
                            <h3 class="about-blockTwo-reviewService"><?php the_sub_field( 'service_used' ); ?> <i class="fas fa-quote-right"></i></h3>
                            <p class="about-blockTwo-reviews"><?php the_sub_field( 'review_text' ); ?></p>
                            <h4 class="about-blockTwo-reviewName"><?php the_sub_field( 'customer_name' ); ?></h4>
                        </div>
                    </div>
                    <?php $btwo_count++; ?>
                    <?php if (($btwo_count/3 == 1) || ($btwo_count/3 == 2) || ($btwo_count/3 == 3)){ ?>
                    </div>
                    <div class="row justify-content-center about-blockTwo-rows">
                    <?php } ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- ------------ Block Three ------------ -->
<?php if ( have_rows( 'block_three' ) ) : ?>
    <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
        <div class="container-fluid about-blockThree-container">
            <div class="container">
                <h2 class="about-blockThree-header"><?php the_sub_field( 'header' ); ?></h2>
                <div class="row justify-content-center about-blockThree-rows">
                    <?php $bthree_count = 0; ?>
                    <?php if ( have_rows( 'team_members' ) ) : ?>
                        <?php while ( have_rows( 'team_members' ) ) : the_row(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-12 about-blockThree-teamContainers">
                                <div>
                                    <div class="card about-blockThree-cards">
                                        <?php $profile_image = get_sub_field( 'profile_image' ); ?>
                                        <?php if ( $profile_image ) { ?>
                                            <img class="card-img-top about-blockThree-teamImage" src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
                                        <?php } ?>
                                        <div class="card-body">
                                            <h3 class="about-blockThree-teamNames"><?php the_sub_field( 'team_member_name' ); ?></h3>
                                            <h4 class="about-blockThree-teamTitles"><?php the_sub_field( 'title' ); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php $bthree_count++; ?>
                    <?php if (($bthree_count/3 == 1) || ($bthree_count/3 == 2) || ($bthree_count/3 == 3)){ ?>
                    </div>
                    <div class="row justify-content-center about-blockThree-rows">
                    <?php } ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- ------------ Block Four ------------ -->
<?php if ( have_rows( 'block_four' ) ) : ?>
    <?php while ( have_rows( 'block_four' ) ) : the_row(); ?>
        <div class="container-fluid about-blockFour-container" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div>
                            <h2 class="about-blockFour-header"><?php the_sub_field( 'heading' ); ?></h2>
                            <h3 class="about-blockFour-subheader"><?php the_sub_field( 'subheading' ); ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div>
                            <?php $button = get_sub_field( 'button' ); ?>
                            <?php if ( $button ) { ?>
                                <a href="<?php echo $button['url']; ?>" class="btn about-blockFour-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
if(get_field('footer_choice') == 'contact'){
    get_footer('contact');
}
if(get_field('footer_choice') == 'regular'){
    get_footer();
}
?>