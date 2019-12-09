<?php
/*
Template Name: Contact Us Page
*/

$headerOption = get_field('header_option');

if ($headerOption == 'regular'){
    get_header();
}

if ($headerOption == 'home'){
    get_header('home');
}

?>

<div class="container contact-blockOne-alert-container">

    <?php
    $submission = $_GET["submission"];
    if ($submission == 'success'){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php if ( have_rows( 'block_two' ) ) : ?>
                <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
                    <?php if ( have_rows( 'contact_form' ) ) : ?>
                        <?php while ( have_rows( 'contact_form' ) ) : the_row(); ?>
                            <?php the_sub_field( 'contact_success_alert_text' ); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
</div>

    <!-- ------------ Block One ------------ -->
<?php if ( have_rows( 'block_one' ) ) : ?>
    <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
        <div class="container-fluid">
            <div class="container contact-blockOne-container">
                <div class="row justify-content-center">
                    <?php if ( have_rows( 'contact_info_one' ) ) : ?>
                        <?php while ( have_rows( 'contact_info_one' ) ) : the_row(); ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="container-fluid contact-blockOne-containers">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="contact-blockOne-iconContainers" align="center">
                                                <i class="fas fa-map fa-2x contact-blockOne-icons"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div>
                                                <h2 class="contact-blockOne-headings"><?php the_sub_field( 'heading' ); ?></h2>
                                                <p class="contact-blockOne-subheadings"><?php the_sub_field( 'subheading' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'contact_info_two' ) ) : ?>
                        <?php while ( have_rows( 'contact_info_two' ) ) : the_row(); ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="container-fluid contact-blockOne-containers">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="contact-blockOne-iconContainers" align="center">
                                                <i class="fas fa-mobile-alt fa-2x contact-blockOne-icons"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div>
                                                <h2 class="contact-blockOne-headings"><?php the_sub_field( 'heading' ); ?></h2>
                                                <p class="contact-blockOne-subheadings"><?php the_sub_field( 'subheading' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'contact_info_three' ) ) : ?>
                        <?php while ( have_rows( 'contact_info_three' ) ) : the_row(); ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="container-fluid contact-blockOne-containers">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="contact-blockOne-iconContainers" align="center">
                                                <i class="far fa-envelope fa-2x contact-blockOne-icons"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div>
                                                <h2 class="contact-blockOne-headings"><?php the_sub_field( 'heading' ); ?></h2>
                                                <p class="contact-blockOne-subheadings"><?php the_sub_field( 'subheading' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
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
        <div class="container-fluid contact-blockTwo-container">
            <div class="container">
                <div class="row display-flex justify-content-center">
                    <?php if ( have_rows( 'contact_form' ) ) : ?>
                        <?php while ( have_rows( 'contact_form' ) ) : the_row(); ?>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="contact-blockTwo-containerLeft featured-fix">
                                    <h3 class="contact-blockTwo-formHeading text-uppercase"><?php the_sub_field( 'form_heading' ); ?></h3>

                                    <?php
                                    $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    ?>
                                    <form id="contact-form" name="contact-form" action="<?php echo get_stylesheet_directory_uri() ?>/parts/mail.php?url=<?php echo $current_url ?>" method="POST">

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="fname" name="fname" class="form-control contact-blockTwo-formInputs" placeholder="Your First Name" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="lname" name="lname" class="form-control contact-blockTwo-formInputs" placeholder="Your Last Name" required>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col">
                                                <input type="email" id="email" name="email" class="form-control mb-4 contact-blockTwo-formInputs" placeholder="Your E-mail" required>
                                            </div>
                                            <div class="col">
                                                <input type="tel" id="phone" name="phone" class="form-control mb-4 contact-blockTwo-formInputs" placeholder="Your Phone Number" required>
                                            </div>
                                        </div>

                                        <p class="contact-blockTwo-label">Service interested in: Residential, Geothermal, Commercial?</p>
                                        <div class="form-check">
                                            <input class="form-check-input contact-blockTwo-formInputs" type="checkbox" value="" id="serviceOne" name="serviceOne">
                                            <label class="form-check-label" for="serviceOne">Residential</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input contact-blockTwo-formInputs" type="checkbox" value="" id="serviceTwo" name="serviceTwo">
                                            <label class="form-check-label" for="serviceTwo">Geothermal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input contact-blockTwo-formInputs" type="checkbox" value="" id="serviceThree" name="serviceThree">
                                            <label class="form-check-label" for="serviceThree">Commercial</label>
                                        </div>

                                        <br/>

                                        <p class="contact-blockTwo-label">Type of service needed: Heating or Cooling?</p>
                                        <div class="form-check">
                                            <input class="form-check-input contact-blockTwo-formInputs" type="checkbox" value="" id="serviceNeededOne" name="serviceNeededOne">
                                            <label class="form-check-label" for="serviceNeededOne">Heating</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input contact-blockTwo-formInputs" type="checkbox" value="" id="serviceNeededTwo" name="serviceNeededTwo">
                                            <label class="form-check-label" for="serviceNeededTwo">Cooling</label>
                                        </div>

                                        <br/>

                                        <textarea class="form-control mb-4 contact-blockTwo-formInputs" id="message" name="message" placeholder="What is causing you trouble?" rows="5"></textarea>

                                        <?php
                                        $id = 0;
                                        $formEmailRecipients = array();
                                        if( have_rows('form_recipients') ): ?>
                                            <?php while( have_rows('form_recipients') ): the_row();
                                                $email = get_sub_field('email_address');
                                                $formEmailRecipients[$id] = $email;
                                                $id++;
                                            endwhile; ?>
                                        <?php endif; ?>

                                        <?php
                                        $strFormEmailRecipients = implode(' ', $formEmailRecipients);
                                        ?>

                                        <input name="strFormEmailRecipients" type="hidden" value="<?php echo htmlspecialchars($strFormEmailRecipients) ?>"/>

                                    </form>

                                    <a class="btn contact-blockTwo-formButton" onclick="document.getElementById('contact-form').submit();"><?php the_sub_field( 'form_submit_button_text' ); ?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'coupon_' ) ) : ?>
                        <?php while ( have_rows( 'coupon_' ) ) : the_row(); ?>
                            <?php if ( get_sub_field( 'turn_on_coupon' ) == 1 ) {
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="contact-blockTwo-containerRight featured-fix" align="center">
                                        <?php if ( have_rows( 'heading' ) ) : ?>
                                            <?php while ( have_rows( 'heading' ) ) : the_row(); ?>
                                                <h3 class="contact-blockTwo-cuponHeading text-uppercase"><?php the_sub_field( 'heading_column_one' ); ?> <span class="contact-blockTwo-cuponHeadingMiddel"><?php the_sub_field( 'heading_column_two' ); ?></span> <?php the_sub_field( 'heading_column_three' ); ?></h3>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <h4 class="contact-blockTwo-cuponSubheading"><?php the_sub_field( 'subheading' ); ?></h4>
                                        <div class="contact-blockTwo-cuponBodyText" align="left"><?php the_sub_field( 'terms_and_conditions' ); ?></div>
                                        <h5 class="contact-blockTwo-cuponCalltoAction"><?php the_sub_field( 'call_to_action_heading' ); ?></h5>
                                    </div>
                                </div>
                                <?php
                            }?>
                        <?php endwhile; ?>
                    <?php endif; ?>
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