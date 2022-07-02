<?php get_header(); ?>


    

    <main class="l-grid-main">

        <div class="p-mainvisual__image--archive">
            <h1 class="c-title__sitetitle--archive">Menu:</h1>
            <p class="c-title__sitetitle--archive-sub"><?php single_cat_title(); ?></p>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive-menu.png" alt="メインビジュアル">

        </div>

        <article class="p-article">
            <div class="c-inner__archive">
                <section>
                    <h2 class="c-title__subheading">小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </section>

                

                <?php
if ( have_posts()) : while ( have_posts()) :
        the_post();
        ?>
                <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>  class="c-card">
                    <figure class="c-card__flex">
                        <div class="c-card__img" ><?php the_post_thumbnail(); ?></div>
                        <figcaption class="c-card__article">
                            <h2 class="c-card__title"><?php the_title(); ?></h2>
                            <h3 class="c-card__title-sub">小見出しが入ります</h3>
                            <p class="c-card__text">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                            <a class="c-card__button" href="<?php the_permalink(); ?>">詳しく見る</a>

                        </figcaption>
                    </figure>
                </section>
                <?php wp_link_pages(); ?>
                <?php
                endwhile;
                
else : 
    echo '<p>コンテンツがありません。</p>';
endif;
    ?>

<?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
</div>
        </article>
    </main>


    <?php get_sidebar(); ?>


<?php get_footer(); ?>