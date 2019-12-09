<?php
/*
Template Name: Home Page
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
        <div class="container-fluid home-blockOne-container">
            <div class="container">
                <div class="row display-flex">
                    <?php if ( have_rows( 'featured_services' ) ) : ?>
                        <?php while ( have_rows( 'featured_services' ) ) : the_row(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-12" align="center">
                                <div class="home-blockOne-containers z-depth-1-half featured-fix">
                                    <?php $image = get_sub_field( 'image' ); ?>
                                    <?php if ( $image ) { ?>
                                        <img src="<?php echo $image['url']; ?>" class="home-blockOne-images" alt="<?php echo $image['alt']; ?>" />
                                    <?php } ?>
                                    <h3 class="home-blockOne-headings text-uppercase"><?php the_sub_field( 'heading' ); ?></h3>
                                    <p class="home-blockOne-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                                    <?php $button = get_sub_field( 'button' ); ?>
                                    <?php if ( $button ) { ?>
                                        <a href="<?php echo $button['url']; ?>" class="btn home-blockOne-buttons" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- ------------ Block Two ------------ -->
<?php if ( have_rows( 'block_two' ) ) : ?>
    <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
        <div class="container-fluid home-blockTwo-container">
            <div class="container" align="center">
                <h2 class="text-uppercase">
                    <span class="home-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></span>
                    <br/>
                    <span class="home-blockTwo-subheading"><?php the_sub_field( 'subheading' ); ?></span>
                </h2>

                <hr class="home-blockTwo-hrline" align="center" />

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php if ( have_rows( 'featured_one' ) ) : ?>
                            <?php while ( have_rows( 'featured_one' ) ) : the_row(); ?>
                                <div id="home-blockTwo-container-one" class="home-blockTwo-containers" align="right">
                                    <div class="home-blockTwo-iconContainers" align="center"><i class="fas fa-thumbs-up fa-lg home-blockTwo-icons"></i></div>
                                    <h3 class="home-blockTwo-headings"><?php the_sub_field( 'featured_name' ); ?></h3>
                                    <p class="home-blockTwo-bodyTexts"><?php the_sub_field( 'body_text' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'featured_two' ) ) : ?>
                            <?php while ( have_rows( 'featured_two' ) ) : the_row(); ?>
                                <div id="home-blockTwo-container-two" class="home-blockTwo-containers" align="right">
                                    <div class="home-blockTwo-iconContainers" align="center"><i class="fas fa-bolt fa-lg home-blockTwo-icons"></i></div>
                                    <h3 class="home-blockTwo-headings"><?php the_sub_field( 'featured_name' ); ?></h3>
                                    <p class="home-blockTwo-bodyTexts"><?php the_sub_field( 'body_text' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div>
                            <?php $featured_image = get_sub_field( 'featured_image' ); ?>
                            <?php if ( $featured_image ) { ?>
                                <img src="<?php echo $featured_image['url']; ?>" class="home-blockTwo-image d-none d-md-block" alt="<?php echo $featured_image['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <?php if ( have_rows( 'featured_three' ) ) : ?>
                            <?php while ( have_rows( 'featured_three' ) ) : the_row(); ?>
                                <div id="home-blockTwo-container-three" class="home-blockTwo-containers" align="left">
                                    <div class="home-blockTwo-iconContainers" align="center"><i class="fas fa-comment fa-lg home-blockTwo-icons"></i></div>
                                    <h3 class="home-blockTwo-headings"><?php the_sub_field( 'featured_name' ); ?></h3>
                                    <p class="home-blockTwo-bodyTexts"><?php the_sub_field( 'body_text' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'featured_four' ) ) : ?>
                            <?php while ( have_rows( 'featured_four' ) ) : the_row(); ?>
                                <div id="home-blockTwo-container-four" class="home-blockTwo-containers" align="left">
                                    <div class="home-blockTwo-iconContainers" align="center"><i class="fas fa-trophy fa-lg home-blockTwo-icons"></i></div>
                                    <h3 class="home-blockTwo-headings"><?php the_sub_field( 'featured_name' ); ?></h3>
                                    <p class="home-blockTwo-bodyTexts"><?php the_sub_field( 'body_text' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- ------------ Block Three ------------ -->
<?php if ( have_rows( 'block_three' ) ) : ?>
    <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
        <div class="container-fluid home-blockThree-container" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h2 class="home-blockThree-heading text-uppercase"><?php the_sub_field( 'heading' ); ?></h2>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 home-blockThree-containerRight">
                        <h3 class="home-blockThree-subheading text-uppercase"><?php the_sub_field( 'subheading' ); ?></h3>
                        <p class="home-blockThree-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php if ( $button ) { ?>
                            <a href="<?php echo $button['url']; ?>" class="btn home-blockThree-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- ------------ Block Four ------------ -->
<?php if ( have_rows( 'block_four' ) ) : ?>
    <?php while ( have_rows( 'block_four' ) ) : the_row(); ?>
        <div class="container-fluid home-blockFour-container">
            <div class="container" align="center">
                <h3 class="home-blockFour-heading"><?php the_sub_field( 'heading' ); ?></h3>
                <p class="home-blockFour-bodyText"><?php the_sub_field( 'body_text' ); ?></p>

                <div class="row">
                    <?php

                    $currentID = get_the_ID();

                    $args = array(
                        'post_type'   => 'project',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'orderby' => 'DESC'
                    );
                    $projects = new WP_Query( $args );
                    if( $projects->have_posts() ){
                        while( $projects->have_posts() ) : $projects->the_post();

                            $projectTitle = get_the_title();
                            $projectFixed = str_replace(" ", "-", $projectTitle);
                            $featured_img_url = get_the_post_thumbnail_url($projects->ID, 'full');
                            $categories = get_the_category();
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-12" align="center">
                                <div class="home-blockFour-containers" style="background-image: url('<?php echo $featured_img_url; ?>');">
                                    <div class="container-fluid home-blockFour-innercontainers">
                                        <div>
                                            <h4 class="home-blockFour-headings"><?php echo $projectTitle; ?></h4>
                                            <?php
                                            $post_categories = wp_get_post_categories( get_the_ID() );
                                            $cats = array();
                                            ?>
                                            <p class="home-blockFour-subheadings"><?php foreach($post_categories as $c){ echo get_category( $c )->name . ', '; } ?></p>
                                            <a class="btn home-blockFour-buttons" href="<?php echo get_permalink(); ?>">Learn More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>
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

<script>
    $(window).on('resize load', function() {
        //Extra Small
        if($(window).width() < 576) {
            $('#home-blockTwo-container-one').removeAttr("align");
            $('#home-blockTwo-container-two').removeAttr("align");
            $('#home-blockTwo-container-three').removeAttr("align");
            $('#home-blockTwo-container-four').removeAttr("align");

            $('#home-blockTwo-container-one').attr("align","center");
            $('#home-blockTwo-container-two').attr("align","center");
            $('#home-blockTwo-container-three').attr("align","center");
            $('#home-blockTwo-container-four').attr("align","center");
        }
        //Small
        if(($(window).width() >= 576) && ($(window).width() < 768)) {
            $('#home-blockTwo-container-one').removeAttr("align");
            $('#home-blockTwo-container-two').removeAttr("align");
            $('#home-blockTwo-container-three').removeAttr("align");
            $('#home-blockTwo-container-four').removeAttr("align");

            $('#home-blockTwo-container-one').attr("align","center");
            $('#home-blockTwo-container-two').attr("align","center");
            $('#home-blockTwo-container-three').attr("align","center");
            $('#home-blockTwo-container-four').attr("align","center");
        }
        //Medium
        if(($(window).width() >= 768) && ($(window).width() < 992)) {
            $('#home-blockTwo-container-one').removeAttr("align");
            $('#home-blockTwo-container-two').removeAttr("align");
            $('#home-blockTwo-container-three').removeAttr("align");
            $('#home-blockTwo-container-four').removeAttr("align");

            $('#home-blockTwo-container-one').attr("align","right");
            $('#home-blockTwo-container-two').attr("align","right");
            $('#home-blockTwo-container-three').attr("align","left");
            $('#home-blockTwo-container-four').attr("align","left");
        }
        //Large
        if(($(window).width() >= 992) && ($(window).width() < 1200)) {
            $('#home-blockTwo-container-one').removeAttr("align");
            $('#home-blockTwo-container-two').removeAttr("align");
            $('#home-blockTwo-container-three').removeAttr("align");
            $('#home-blockTwo-container-four').removeAttr("align");

            $('#home-blockTwo-container-one').attr("align","right");
            $('#home-blockTwo-container-two').attr("align","right");
            $('#home-blockTwo-container-three').attr("align","left");
            $('#home-blockTwo-container-four').attr("align","left");
        }
        //Extra Large
        if($(window).width() >= 1200){
            $('#home-blockTwo-container-one').removeAttr("align");
            $('#home-blockTwo-container-two').removeAttr("align");
            $('#home-blockTwo-container-three').removeAttr("align");
            $('#home-blockTwo-container-four').removeAttr("align");

            $('#home-blockTwo-container-one').attr("align","right");
            $('#home-blockTwo-container-two').attr("align","right");
            $('#home-blockTwo-container-three').attr("align","left");
            $('#home-blockTwo-container-four').attr("align","left");
        }
    });

</script>
