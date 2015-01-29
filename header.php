<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Restless
* @since Restless 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
        <![endif]-->
        <script>(function(){document.documentElement.className='js'})();</script>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400' rel='stylesheet' type='text/css'>
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css"/> -->
        <?php wp_head(); ?>
    </head>
    <!-- Temp variables, relocate before production -->
    <?php $upload_dir = wp_upload_dir(); ?>
    <!-- Temp style -->

    <body <?php body_class(); ?>>
        <?php include(get_template_directory() . "/inc/fb.php");?>
        <div id="perspective" class="perspective effect-moveleft">
            <div class="container-fluid" style='background:url("<?php echo $upload_dir['baseurl']; ?>/2015/01/bg.png");background-size:100% auto;background-repeat:no-repeat;'>

                <div id="" class="hfeed wrapper site">
                    <div class='container'>
                        <div class="row">
                            <div class="col-xs-4"></div>
                            <div class="col-xs-4"><p class="text-center">
                                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title="Aldrig Vila"><img src='<?php echo $upload_dir['baseurl']; ?>/2015/01/logo.png' class='logo' ></a>
                            </p></div>

                            <div class="col-xs-4"><p class="text-right" style='color:#cdcdcd;'><i id="showMenu" class="fa fa-bars fa-3x"></i></p></div>
                          </div>
                            <?php# include(get_template_directory() . "/sidebar.php");?>