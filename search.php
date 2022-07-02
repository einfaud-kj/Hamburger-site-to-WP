<?php get_header(); ?>

    <main class="l-grid-main">
    <?php if (have_posts()): ?>

        <div class="p-mainvisual__image--archive">
            <h1 class="c-title__sitetitle--archive-search">Search:</h1>
            <p class="c-title__sitetitle--archive-search-sub"><?php echo get_search_query(); ?></p>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive-menu.png" alt="メインビジュアル">

        </div>


        

        <article class="p-article">
            <div class="c-inner__archive">
                <section>

                <?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>
                

<?php while(have_posts()): the_post(); ?>
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
<?php endwhile; ?>

<?php else: ?>
検索されたキーワードにマッチする記事はありませんでした
<?php endif; ?>
                  
                </section>

<?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
</div>
        </article>
    </main>


    <?php get_sidebar(); ?>


<?php get_footer(); ?>