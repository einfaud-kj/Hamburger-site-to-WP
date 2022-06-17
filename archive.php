<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>ハンバーガーサイト</title>
</head>

<body class="l-grid">

    <header class="l-grid-header l-header">
        <div class="c-inner">
            <button class="c-button"><span class="c-button__menu js-button">Menu</span></button>
            <div class="l-header__content">

                <h1 class="l-header__logo">Hamburger</h1>


                <form class="p-search-form" action="#" method="get">
                    <input class="p-search-form__keyword" type="search" name="search" placeholder="&#xf002">
                    <input class="p-search-form__submit" type="submit" name="submit" value="検索">
                </form>

            </div>
        </div>
    </header>

    <main class="l-grid-main">

        <div class="p-mainvisual__image--archive">
            <h1 class="c-title__sitetitle--archive">Menu:</h1>
            <p class="c-title__sitetitle--archive-sub">チーズバーガー</p>
            <img src="./img/archive-menu.png" alt="メインビジュアル">

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
                        <img class="c-card__img" src="./img/burger1.png" alt="バーガー">
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
                        <img class="c-card__img" src="./img/burger1.png" alt="バーガー">
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
                        <img class="c-card__img" src="./img/burger1.png" alt="バーガー">
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

    <article class="l-grid-sidebar l-side">
        <h2 class="c-title__sidebar">Menu</h2>
        <div class="p-sidebar">
            <span class="c-button__sidebar js-button__sidebar"></span>
            <ul>
                <li>
                    <h3 class="c-menu__main
                ">バーガー</h3>
                    <ul class="c-menu__sub">
                        <li><a>ハンバーガー</a></li>
                        <li><a>チーズバーガー</a></li>
                        <li><a>テリヤキバーガー</a></li>
                        <li><a>アボガドバーガー</a></li>
                        <li><a>フィッシュバーガー</a></li>
                        <li><a>ベーコンバーガー</a></li>
                        <li><a>チキンバーガー</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="c-menu__main
                ">サイド</h3>
                    <ul class="c-menu__sub">
                        <li><a>ポテト</a></li>
                        <li><a>サラダ</a></li>
                        <li><a>ナゲット</a></li>
                        <li><a>コーン</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="c-menu__main
                ">ドリンク</h3>
                    <ul class="c-menu__sub">
                        <li><a>コーラ</a></li>
                        <li><a>ファンタ</a></li>
                        <li><a>オレンジ</a></li>
                        <li><a>アップル</a></li>
                        <li><a>紅茶（Ice/Hot)</a></li>
                        <li><a>コーヒー（Ice/Hot)</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="l-sidebar__overlay"></div>
    </article>


    <footer class="l-grid-footer l-footer">
        <ul class="c-item__info">
            <li><a class="c-text__shopinfo" href="#">ショップ情報</a></li>
            <li><a class="c-text__history" href="#">ヒストリー</a></li>
        </ul>
        <p class="c-text__copy"><small>Copyright:　RaiseTech</small></p>
    </footer>
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>