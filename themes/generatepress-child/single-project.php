<?php

//Slick Slider
wp_register_style( 'Slick_CSS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
wp_enqueue_style('Slick_CSS');

wp_register_style( 'Slick_Theme_CSS', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css' );
wp_enqueue_style('Slick_Theme_CSS');

wp_register_script( 'Slick_js1', 'https://code.jquery.com/jquery-1.11.0.min.js', null,
    null, true );
wp_enqueue_script('Slick_js1');

wp_register_script( 'Slick_js2', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', null,
    null, true );
wp_enqueue_script('Slick_js2');

wp_register_script( 'Slick_js3', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null,
    null, true );
wp_enqueue_script('Slick_js3');


get_header();
?>

<div class="container-fluid projects-blockOne-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="projects-blockOne-containerLeft">
                    <div class="slider" align="center">
                        <?php $project_images_images = get_field( 'project_images' ); ?>
                        <?php if ( $project_images_images ) :  ?>
                            <?php foreach ( $project_images_images as $project_images_image ): ?>
                            <div>
                                <img src="<?php echo $project_images_image['url']; ?>" class="projects-blockOne-images" alt="<?php echo $project_images_image['alt']; ?>" />
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div>
                                                    <div class="projects-blockOne-iconContainers" align="center">
                                                        <i class="fas fa-user fa-sm projects-blockOne-icons"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                <div>
                                                    <h2 class="projects-blockOne-headers">Client Details:</h2>
                                                    <p class="projects-blockOne-subheaders"><?php the_field( 'client_name' ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div>
                                                    <div class="projects-blockOne-iconContainers" align="center">
                                                        <i class="fas fa-tags fa-sm projects-blockOne-icons"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                <div>
                                                    <h2 class="projects-blockOne-headers">Categories:</h2>
                                                    <p class="projects-blockOne-subheaders">
                                                        <?php
                                                        $post_categories = wp_get_post_categories( get_the_ID() );
                                                        $cats = array();
                                                        foreach($post_categories as $c){
                                                            $cat = get_category( $c );

                                                            echo $cat->name . ', ';

                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div>
                                                    <div class="projects-blockOne-iconContainers" align="center">
                                                        <i class="fas fa-file-alt fa-sm projects-blockOne-icons"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                <div>
                                                    <h2 class="projects-blockOne-headers">Project Title:</h2>
                                                    <p class="projects-blockOne-subheaders"><?php the_field( 'project_title' ); ?></p>
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
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="projects-blockOne-containerRight">
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
                        <div class="container-fluid projects-queryPost-containers">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <div>
                                        <a class="" href="<?php echo get_permalink(); ?>">
                                            <img src="<?php echo $featured_img_url ?>" class="projects-queryPost-images" alt="<?php echo $projectTitle ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <div>
                                        <p class="projects-queryPost-headers">
                                            <a class="projects-queryPost-headers" href="<?php echo get_permalink(); ?>">
                                                <?php echo $projectTitle ?>
                                            </a>
                                        </p>

                                        <p class="projects-queryPost-subheaders">
                                            <?php
                                            $post_categories = wp_get_post_categories( get_the_ID() );
                                            $cats = array();
                                            foreach($post_categories as $c){
                                                $cat = get_category( $c );

                                                echo $cat->name . ', ';

                                            }
                                            ?>
                                        </p>
<!--                                        <a class="btn projects-queryPost-buttons" href="--><?php //echo get_permalink(); ?><!--">Learn More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                            <hr class="projects-queryPost-hrline" />-->

                        <?php
                        endwhile;
                    }
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>
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

<script>
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        pauseOnHover: false,
        infinite: true,
        cssEase: 'linear'
    });
</script>