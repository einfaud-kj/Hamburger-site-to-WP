<?php get_header(); ?>

    <main class="l-grid-main">

    <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
          

        <div class="p-mainvisual__image--page">
            <h1 class="c-title__sitetitle--page"><?php the_title(); ?></h1>
            <img src="<?php echo get_template_directory_uri(); ?>/img/page.png" alt="メインビジュアル">

        </div>

        <article class="p-article">
        <?php the_content(); ?>
            <div class="c-inner__single">
                <section class="c-containar">
                    <h2 class="c-title__subheading">見出しh2</h2>
                    <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                    </p>
                    <h3 class="c-title__h3">見出しh3</h3>
                    <h4 class="c-title__h4">見出しh4</h4>
                    <h5 class="c-title__h5">見出しh5</h5>
                    <h6 class="c-title__h6">見出しh6</h6>
                    <div class="c-item__lead">
                        <p>Blockquote
                            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </p>
                        <p>出典元：<a>○○○○○○○○○○○○</a></p>
                    </div>
                </section>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt="" class="c-image__common">
                </div>
                <section class="c-recommend__menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt="">
                    <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                </section>
                <section class="c-recommend__menu-reverse">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt="">
                    <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
                        テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                </section>

                <div class="c-image__main"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                <section class="l-grid__image">
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                    <div class="c-image__sub"><img src="<?php echo get_template_directory_uri(); ?>/img/single-1.png" alt=""></div>
                </section>

                <section class="c-item__lists">
                    <ol>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ol>
                        <li>リスト2リスト2リスト2</li>
                        <li>リスト2リスト2リスト2</li>
                    </ol>

                    <ol>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ul>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <ul>
                        <li>リスト2リスト2リスト2</li>
                        <li>リスト2リスト2リスト2</li>
                    </ul>

                    <ul>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <div class="c-item__tagarea">
                        <ul>
                            <li>＜ｈｔｍｌ＞</li>
                            <ul>
                                <li>＜ｈｅａｄ＞</li>
                                <li>＜/ｈｅａｄ＞</li>
                                <li>＜ｂｏｄｙ＞</li>
                                <li>＜/ｂｏｄｙ＞</li>
                            </ul>
                            <li>＜/ｈｔｍｌ＞</li>
                        </ul>
                    </div>
                </section>
                <section class="c-item__table">
                    <table>
                        <tr>
                            <td>テーブル</td>
                            <td>テーブル</td>
                        </tr>
                        <tr>
                            <td>テーブル</td>
                            <td>テーブル</td>
                        </tr>
                        <tr>
                            <td>テーブル</td>
                            <td>テーブル</td>
                        </tr>
                        <tr>
                            <td>テーブル</td>
                            <td>テーブル</td>
                        </tr>
                    </table>
                    <button class="c-button__single">
                        <a href="#">ボタン</a>
                    </button>
                    <P class="c-text__single">boldboldboldboldboldboldbold</P>

                </section>

            </div>

            <?php 
          endwhile;
      endif;
      ?>
        </article>
    </main>

    <?php get_sidebar(); ?>


<?php get_footer(); ?>