<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    
    
    <?php wp_head(); ?>
</head>

<body class="l-grid"<?php body_class(); ?>>

    <header class="l-grid-header l-header">
        <div class="c-inner">
            <button class="c-button"><span class="c-button__menu js-button">Menu</span></button>
            <div class="l-header__content">

                <h1 class="l-header__logo"><?php bloginfo('name');?>Hamburger</h1>

              
               <?php get_search_form();?>

            </div>
        </div>
    </header>