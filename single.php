<?php get_header(); ?>

    <main class="l-grid-main">

        <div class="p-mainvisual__image--single">
            <h1 class="c-title__sitetitle--single"><?php the_title(); ?></h1>
            <?php if( has_post_thumbnail() ) {
                the_post_thumbnail();
            } elseif ( is_singular() ) {
                echo '<img src="' . esc_attr( get_template_directory_uri() ) . '/img/single.png" alt="メインビジュアル">'; 
            }
            ?>
            </div>
         
        <article class="p-article">
            <div class="c-inner__single">
                <section class="c-containar">
                    <?php the_content();?>
                   
                                                 

                </section>

            </div>
        </article>
    </main>

    <?php get_sidebar(); ?>


<?php get_footer(); ?>