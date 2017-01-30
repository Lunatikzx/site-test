<?php
/**
 * Le template de header pour le theme
 * 
 * @package Lambert Jp
 * @subpackage Lambert JP
 * @since Version 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css"/>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css"/>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700" rel="stylesheet" type="text/css">

    <title>Jean-Philippe Lambert - Développeur Web</title>
    <!--[if lt IE 9]>
        <script>
            document.createElement('header');
            document.createElement('nav');
            document.createElement('section');
            document.createElement('article');
            document.createElement('aside');
            document.createElement('footer');
        </script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".main_nav">
    <nav class="nav-collapsed main_nav ">
        <ul class="nav nav-justified">
            <li><a href="#qui">Qui suis-je?</a></li>
            <li><a href="#">Ma formation</a></li>
            <li><a href="#">Mes expériences</a></li>
            <li><a href="#">Mon portfolio</a></li>
        </ul>
    </nav> 
    <header id="top">
        <div class="title container-fluid">
            <div class="row">
                 <a href="#">
                    <div class="animated bounceInDown centered" >
                        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo LambertJP">
                    </div>
                    <div class="centered" >
                        <h1 class="fadeInUp animated">JEAN-PHILIPPE LAMBERT</h1> 
                        <p class="fadeInUp animated">D&eacute;veloppeur Web / Intégrateur web / Javascript</p>
                    </div>
                </a>
            </div>
        </div>
    </header>