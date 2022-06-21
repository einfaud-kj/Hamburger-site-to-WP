<?php get_header(); ?>

    <main class="l-grid-main">

        <div class="p-mainvisual__image--archive">
            <h1 class="c-title__sitetitle--archive">Menu:</h1>
            <p class="c-title__sitetitle--archive-sub">チーズバーガー</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-menu.png" alt="メインビジュアル">

        </div>

        <article class="p-article">
            <div class="c-inner__archive">
                <section>
                    <h2 class="c-title__subheading">小見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </section>
                <section class="c-card">
                    <figure class="c-card__flex">
                        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/burger1.png" alt="バーガー">
                        <figcaption class="c-card__article">
                            <h2 class="c-card__title">チーズバーガー</h2>
                            <h3 class="c-card__title-sub">小見出しが入ります</h3>
                            <p class="c-card__text">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

                            <button class="c-card__button">詳しく見る</button>

                        </figcaption>
                    </figure>
                </section>
                <section class="c-card">
                    <figure class="c-card__flex">
                        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/burger1.png" alt="バーガー">
                        <figcaption class="c-card__article">
                            <h2 class="c-card__title">ダブルチーズバーガー</h2>
                            <h3 class="c-card__title-sub">小見出しが入ります</h3>
                            <p class="c-card__text">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-card__button">詳しく見る</button>
                        </figcaption>
                    </figure>
                </section>
                <section class="c-card">
                    <figure class="c-card__flex">
                        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/burger1.png" alt="バーガー">
                        <figcaption class="c-card__article">
                            <h2 class="c-card__title">スペシャルチーズバーガー</h2>
                            <h3 class="c-card__title-sub">小見出しが入ります</h3>
                            <p class="c-card__text">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <button class="c-card__button">詳しく見る</button>
                        </figcaption>

                    </figure>

                </section>
                <div class="c-pagination">
                    <div class="c-pagination__sp">
                        <a class="c-pagination__previous">〈〈 前へ</a>
                        <a class="c-pagination__next">次へ 〉〉</a>
                    </div>
                    <div class="c-pagination__tablet">
                        <p class="c-pagination__title">page 1/10</p>
                        <ul class="c-pagination__list">
                            <li class="c-pagination__previous"><a>〈〈</a></li>
                            <li class="c-pagination__number"><a>1</a></li>
                            <li class="c-pagination__number"><a>2</a></li>
                            <li class="c-pagination__number"><a>3</a></li>
                            <li class="c-pagination__number"><a>4</a></li>
                            <li class="c-pagination__number"><a>5</a></li>
                            <li class="c-pagination__number"><a>6</a></li>
                            <li class="c-pagination__number"><a>7</a></li>
                            <li class="c-pagination__number"><a>8</a></li>
                            <li class="c-pagination__number"><a>9</a></li>
                            <li class="c-pagination__next"><a>〉〉</a></li>
                        </ul>

                    </div>

                </div>

            </div>
        </article>
    </main>

    <?php get_sidebar(); ?>


<?php get_footer(); ?>