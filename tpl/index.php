<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>何読む？</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="./css/bootswatch.min.css">
        <link rel="stylesheet" href="./css/bootstrap-responsive.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    
    <body>
        <!--FBボタン用JSここから-->
        <div id="fb-root"></div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=303072046461274";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!--FBボタンここまで-->
        <!--navここから-->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="./" class="navbar-brand">何読む？</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://www3441ui.sakura.ne.jp/wordpress/">Blog</a>
                        </li>
                        <li>
                            <a href="https://github.com/ikemonn/scraping/tree/master">GitHub</a>
                        </li>
                    </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="social-button"><a href="http://b.hatena.ne.jp/entry/http://www3441ui.sakura.ne.jp/scraping/" class="hatena-bookmark-button" data-hatena-bookmark-title="本読む" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
                      <li class="social-button"><a href="https://twitter.com/share" class="twitter-share-button" data-via="ikemonn" data-lang="ja" data-count="vertical">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                      <!--<li><div class="fb-like" data-href="http://www3441ui.sakura.ne.jp/scraping/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="false"></div></li>-->
                      <li><div class="fb-like" data-href="http://www3441ui.sakura.ne.jp/scraping/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="box_count" data-action="like" data-show-faces="true" data-send="false"></div></li>
                  </ul>
                </div>
            </div>
         </div>
        <!--navここまで-->
        <!--<div class="flexbox">-->
        <h2 class="ribbon"><a href=<?php echo HONZ; ?> target="_blank">HONZ 新着記事一覧</a></h2>
        <div class="row">
        <?php foreach($honz_data as $key => $value) { ?>
            <div class="panel panel-success box-wrapper span6">
                <div class="panel-body">
                    <a href="<?php echo $value['link_url']; ?>" target="_blank"><img src="<?php echo $value['img_src']; ?>"></img></a>
                </div>
                <div class="panel-heading">
                    <a href="<?php echo $value['link_url']; ?>" class="panel-title" target="_blank"><?php echo $value['link_title']; ?></h3>
                </div>
            </div>
        <?php } ?>            
        </div>
        <hr>
        <h2 class="ribbon"><a href=<?php echo AMAZON_BIZ; ?> target="_blank">Amazon 経済・ビジネス分野 欲しいものランキング</a></h2>
        <div class="row">
        <?php foreach($amazon_biz_data as $key => $value) { ?>
            <div class="panel panel-success box-wrapper span6">
                <div class="panel-body">
                    <a href="<?php echo $value['link_url']; ?>" target="_blank"><img src="<?php echo $value['img_src']; ?>"></img></a>
                </div>
                <div class="panel-heading">
                    <a href="<?php echo $value['link_url']; ?>" class="panel-title" target="_blank"><?php echo $value['link_title']; ?></h3>
                </div>
            </div>
        <?php } ?>            
        </div>
        <hr>
        <h2 class="ribbon"><a href=<?php echo AMAZON_IT; ?> target="_blank">Amazon IT・コンピューター分野 欲しいものランキング</a></h2>
        <div class="row">
        <?php foreach($amazon_it_data as $key => $value) { ?>
            <div class="panel panel-success box-wrapper span6">
                <div class="panel-body">
                    <a href="<?php echo $value['link_url']; ?>" target="_blank"><img src="<?php echo $value['img_src']; ?>"></img></a>
                </div>
                <div class="panel-heading">
                    <a href="<?php echo $value['link_url']; ?>" class="panel-title" target="_blank"><?php echo $value['link_title']; ?></h3>
                </div>
            </div>
        <?php } ?>            
        </div>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src=".js/bootswatch.js"></script>
    </body>
</html>
