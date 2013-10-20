<?php
//スクレイピング用ライブラリ(simple_html_dom.php)をインクルード
include_once('./simplehtmldom_1_5/simple_html_dom.php');


/*************const*************/
//HONZのURL
define('HONZ', 'http://honz.jp/review');
//AmazonのIT・コンピューターのリストランキングのURL
define('AMAZON_BIZ', 'http://www.amazon.co.jp/gp/most-wished-for/books/466282/');
///AmazonのIT・コンピューターのリストランキングのURL
define('AMAZON_IT', 'http://www.amazon.co.jp/gp/most-wished-for/books/492062');
//タイトルを…で表示するバイト数
define("MAX_LENGTH", 70);

/*************スクレイピングしたい先のURLを表記*************/
//Amazonのビジネス・経済分野のほしい物リストランキング
$amazon_biz = file_get_html(AMAZON_BIZ);
//AmazonのIT・コンピューター分野のほしい物リストランキング
$amazon_it = file_get_html(AMAZON_IT);
//HONZの新着
$honz = file_get_html(HONZ);

/*************Amazonからの情報取得*************/
//Amazonからの情報取得
function get_amazon_data($url) {
    
    //リンクのURLを取得
    foreach ($url->find('div.zg_itemImage_normal a') as $key => $element) {
        $data[$key]['link_url'] = $element->href;    
    }

    //リンクタイトルと画像のパスを取得
    foreach ($url->find('div.zg_itemImage_normal img') as $key => $element) {
        $data[$key]['img_src'] = $element->src;
        //UTF-8にエンコーディングを変更
        $data[$key]['link_title'] = mb_convert_encoding($element->title, "UTF-8", "SJIS");
        //文字数が指定数以上なら…で表記
        $data[$key]['link_title'] = mb_strimwidth($data[$key]['link_title'], 0, MAX_LENGTH, "...");
        
    }
    
    //オブジェクトに含まれる全ての要素を削除
    $url->clear();    
    //オブジェクトを削除
    unset($url);
    
    return $data;
  
}

/*************HONZからの情報取得*************/
function get_honz_data ($url) {
     //リンクのURLを取得
    foreach ($url->find('div.cover a') as $key => $element) {
        $data[$key]['link_url'] = $element->href;       
    }

    foreach ($url->find('div.cover img') as $key => $element) {
        $data[$key]['img_src'] = $element->src;       
        $data[$key]['link_title'] = $element->alt;
        //文字数が指定数以上なら…で表記
        $data[$key]['link_title'] = mb_strimwidth($data[$key]['link_title'], 0, MAX_LENGTH, "...");
    }

    //オブジェクトに含まれる全ての要素を削除
    $url->clear();
    //オブジェクトを削除
    unset($url);
    
    return $data;
    
}



//Amazonのデータ
$amazon_biz_data = get_amazon_data($amazon_biz);
$amazon_it_data  = get_amazon_data($amazon_it);
//HONZのデータ
$honz_data       = get_honz_data($honz);


/*************テンプレートの呼び出し*************/
include_once './tpl/index.php';