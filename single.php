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
                <?php $the_postid = 109;//表示したい投稿または固定ページのIDを指定します
                      $the_content = get_post($the_postid)->post_content;
                      $the_content = apply_filters('the_content', $the_content);
                      echo $the_content; //取得したコンテンツを出力します
                      ?>
                
               
                     
                
                    <button class="c-button__single">
                        <a href="#">ボタン</a>
                    </button>
                    <P class="c-text__single">boldboldboldboldboldboldbold</P>  -->

                </section>

            </div>
        </article>
    </main>

    <?php get_sidebar(); ?>


<?php get_footer(); ?>