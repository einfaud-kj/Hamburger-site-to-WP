<?php get_header(); ?>


    

    <main class="l-grid-main">

        <div class="p-mainvisual__image--archive">
            <h1 class="c-title__sitetitle--archive">Menu:</h1>
            <p class="c-title__sitetitle--archive-sub"><?php $category = get_the_category(); $cat_name = $category[2]->cat_name; echo $cat_name; ?></p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-menu.png" alt="メインビジュアル">

        </div>

        <article class="p-article">
            <div class="c-inner__archive">
                <section>
                    <h2 class="c-title__subheading">小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </section>

                

                <?php
if ( have_posts()) {
    while ( have_posts()) {
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

                            <button class="c-card__button"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>

                        </figcaption>
                    </figure>
                </section>
                <?php
    }
} else {
    echo '<p>コンテンツがありません。</p>';
}
    ?>

<?php if ( $wp_query -> max_num_pages > 1 ) : //ページ数が1を超える場合に処理 ?>
                <div class="c-pagination">
                    <div class="c-pagination__sp">
                        <a class="c-pagination__previous"><?php next_posts_link( '〈〈 前へ' ); ?></a>
                        <a class="c-pagination__next"><?php previous_posts_link( '次へ 〉〉' ); ?></a>
                    </div>
                    <div class="c-pagination__tablet">
                        <p class="c-pagination__title">page 1/10</p>
                        <ul class="c-pagination__list">
                            <li class="c-pagination__previous"><a><?php previous_posts_link( '〈〈' ); ?></a></li>
                            <li class="c-pagination__number"><a>1</a></li>
                            <li class="c-pagination__number"><a>2</a></li>
                            <li class="c-pagination__number"><a>3</a></li>
                            
                            <li class="c-pagination__next"><a><?php next_posts_link( '〉〉' ); ?></a></li>
                        </ul>

                    </div>

                </div> 
                <?php endif; ?>
            </div>
        </article>
    </main>


    <?php get_sidebar(); ?>


<?php get_footer(); ?>