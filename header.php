<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <?php wp_head(); ?>
</head>

<body class="l-grid"<?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="l-grid-header l-header">
        <div class="c-inner">
            <button class="c-button"><span class="c-button__menu js-button">Menu</span></button>
            <div class="l-header__content">

                <h1 class="l-header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name');?></a></h1>
                <div class="p-search-form__div">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/searchicon.png" class="p-search-form__icon">
               <?php get_search_form();?>
</div>

            </div>
        </div>
    </header>