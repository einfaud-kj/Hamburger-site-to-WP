<form class="p-search-form" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
<label class="screen-reader-text" for="s"><?php echo __(' search', 'hamburger_site' ); ?></label>
                    <input class="p-search-form__keyword" type="search" name="s" id="s" placeholder="<?php if(!is_search()){ echo 'キーワード入力';} ?>" value="<?php if(is_search()){ echo get_search_query();} ?>"/>
                    <input class="p-search-form__submit"  id="searchsubmit" type="submit" name="submit" value="検索">
                </form>

                