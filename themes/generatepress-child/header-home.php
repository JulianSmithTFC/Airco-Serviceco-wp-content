<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?> style="background: #ffffff">


<div class="container-fluid headerRegular-top-container">
    <div class="container">
        <div class="row">
            <div id="header-top-left" class="col-lg-3 col-md-3 col-sm-12">
                <?php $logo = get_field( 'logo', 'option' ); ?>
                <?php if ( $logo ) { ?>
                    <img src="<?php echo $logo['url']; ?>" class="headerRegular-top-logo" alt="<?php echo $logo['alt']; ?>" />
                <?php } ?>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <ul id="header-top-middle" class="nav justify-content-end headerRegular-top-menu">
                    <?php
                    $menuLocations = get_nav_menu_locations();
                    $menuID = $menuLocations['primary'];
                    $menuNav = wp_get_nav_menu_items($menuID);
                    $menuCount = 0;
                    $submenu = false;
                    foreach ( $menuNav as $navItem ) {
                        $link = $navItem->url;
                        $title = $navItem->title;
                        if ( !$navItem->menu_item_parent ){
                            $parent_id = $navItem->ID;
                            if (!empty($menuNav[$menuCount + 1]) && $menuNav[$menuCount + 1]->menu_item_parent == $parent_id ){
                                ?>
                                <li class="nav-item dropdown headerRegular-top-menuItems">
                                <a class="nav-link dropdown-toggle headerRegular-top-menuItemsLink text-uppercase" data-toggle="dropdown" href="<?php echo $link ?>" title="<?php echo $title ?>" role="button" aria-haspopup="true" aria-expanded="false"><span onclick="location.href='<?php echo $link ?>'"><?php echo $title ?></span></a>
                                <?php
                            }else{
                                ?>
                                <li class="nav-item headerRegular-top-menuItems">
                                <a class="nav-link headerRegular-top-menuItemsLink text-uppercase" href="<?php echo $link ?>" title="<?php echo $title ?>"><?php echo $title ?></a>
                                <?php
                            }
                            ?>
                            <?php
                        }
                        if ( $parent_id == $navItem->menu_item_parent ) {
                            if ( !$submenu ) {
                                $submenu = true;
                                ?>
                                <div class="dropdown-menu">
                                <?php
                            }
                            ?>
                            <a class="dropdown-item" href="<?php echo $link ?>"><?php echo $title ?></a>
                            <?php
                            if(empty($menuNav[$menuCount + 1]) || $menuNav[ $menuCount + 1 ]->menu_item_parent != $parent_id && $submenu){
                                ?>
                                </div>
                                <?php
                                $submenu = false;
                            }
                        }
                        if (empty($menuNav[$menuCount + 1]) || $menuNav[ $menuCount + 1 ]->menu_item_parent != $parent_id ) {
                            ?>
                            </li>
                            <?php
                            $submenu = false;
                        }
                        $menuCount++;
                    }
                    ?>
                </ul>
            </div>
            <div id="header-top-right" class="col-lg-2 col-md-3 col-sm-12">
                <p class="text-uppercase headerRegular-top-callToAction"><?php the_field( 'call_to_action_header', 'option' ); ?></p>
                <p class="headerRegular-top-phone"><i class="fas fa-mobile-alt headerRegular-top-icon fa-lg"></i> <?php the_field( 'phone_number', 'option' ); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid headerHome-container" style="background-image: url('<?php the_field( 'background_image' ); ?>')">
    <div class="container" align="center">
        <h1>
            <span class="headerHome-heading text-uppercase"><?php the_field( 'heading_text' ); ?></span>
            <br/>
            <span class="headerHome-subheading text-uppercase"><?php the_field( 'subheading_text' ); ?></span>
        </h1>
        <div class="headerHome-bodytext">
            <?php the_field( 'body_text' ); ?>
        </div>
        <?php $left_button = get_field( 'left_button' ); ?>
        <?php if ( $left_button ) { ?>
            <a href="<?php echo $left_button['url']; ?>" class="btn headerHome-btnLeft" target="<?php echo $left_button['target']; ?>"><?php echo $left_button['title']; ?></a>
        <?php } ?>
        <?php $right_button = get_field( 'right_button' ); ?>
        <?php if ( $right_button ) { ?>
            <a href="<?php echo $right_button['url']; ?>" class="btn headerHome-btnRight" target="<?php echo $right_button['target']; ?>"><?php echo $right_button['title']; ?></a>
        <?php } ?>
    </div>
</div>