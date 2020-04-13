<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vaid_Rubal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/bootstrap.min.css">
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/font-awesome.min.css">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/style.css" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead">
        <div class="widescreen">
            <?php 
                $title=get_the_title();
                if(is_page('16')){
                  echo do_shortcode('[rev_slider alias="homeslider"]');   
                }else{
                    if (has_post_thumbnail( $post->ID ) && !is_single()){
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        echo "<div class='header-featured-image'>
                            <img src=".$image[0].">
                                <div class='header-featured-image-title'>
                                    <p>".$title."</p>
                                </div>
                            </div>";
                        
                    }else{
                        $img=site_url().'/wp-content/uploads/2020/04/1slide.jpg';
                       echo "<div class='header-featured-image'>
                              <img src=".$img.">
                                <div class='header-featured-image-title'>
                                    <p>".$title."</p>
                                </div>
                              </div>";
                    }
                }
            ?>
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="logo">
                                <a href="<?php echo site_url();?>">
                                    
                                    <img src="<?php header_image(); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                wp_nav_menu( array(
                                    'container_class' => 'nav',
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smallscreennav">
            <div class="col-xs-6">
                <a class="logo-image" href="<?php echo site_url();?>">
                   
                    <img src="<?php header_image(); ?>">
                </a>
            </div>
            <div class="col-xs-6">
                <div>
                    <a href="javascript:void(0)" onClick="openLeftMenu()"><span class="smallscreen"><img src="<?php echo get_bloginfo( 'template_directory' );?>/image/menuAditiya.png"></span></a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="left-nav">
            <div class="menu-navbar-close"><a href="javascript:void(0)" onClick="closediv(this)"><img src="<?php echo get_bloginfo( 'template_directory' );?>/image/close.png"></div>
            <?php	
                wp_nav_menu( array(
                    'container_class' => 'menu-navbar',
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    
                ) );
            ?>
        </div>
        <div class="smallscreen">
            <?php 
                if(is_page('11')){
                      echo do_shortcode('[rev_slider alias="homeslider"]');   
                    }else{
                        if (has_post_thumbnail( $post->ID ) && !is_single()){
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                            echo "<div class='header-featured-image'>
                                <img src=".$image[0].">
                                    <div class='header-featured-image-title'>
                                        <p>".$title."</p>
                                    </div>
                                </div>";
                            
                        }else{
                            $img=site_url().'/wp-content/uploads/2020/04/1slide.jpg';
                           echo "<div class='header-featured-image'>
                                  <img src=".$img.">
                                    <div class='header-featured-image-title'>
                                        <p>".$title."</p>
                                    </div>
                                  </div>";
                        }
                    }
                ?>
        </div>
        <div class="clearfix"></div>
    </header>
    <div class="clearfix"></div>
	<div id="content" class="site-content">
