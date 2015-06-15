<?php

    //ライブラリの読み込み
    require_once "php/Feed.php";

    //取得するフィードのURLを指定
    $url = "";

    //RSSを読み込む
    $rss = Feed::loadRss($url);

    echo '<ul class="RSS">' . "\n";

    foreach($rss->item as $item){

        //各エントリーの処理
        $title = $item->title;  //タイトル
        $link = $item->link;    //リンク
        $description = $item->description;  //詳細

        //日付の取得(UNIX TIMESTAMP)
        if (isset($item->pubDate) && !empty($item->pubDate)){
            $timestamp = strtotime($item->pubDate);
        }
        elseif (isset($item->date_timestamp) && !empty($item->date_timestamp)){
            $timestamp = $item->date_timestamp;
        }
        elseif (isset($item->{'dc:date'}) && !empty($item->{'dc:date'})){
            $timestamp = strtotime($item->{'dc:date'});
        }
        elseif (isset($item->published) && !empty($item->published)){
            $timestamp = strtotime($item->published);
        }
        elseif (isset($item->issued) && !empty($item->issued)){
            $timestamp = strtotime($item->issued);
        }
        else{
            $timestamp = time();
        }
        //表示
        echo '<li class="RSS__li"><a class="RSS__li__link" href="' . htmlspecialchars($link) . '">' . htmlspecialchars($title) . '</a> (' . htmlspecialchars(date("Y/m/d H:i",$timestamp)) . ')</li><br>' . "\n";

    }
    echo '</ul>' . "\n";

?>