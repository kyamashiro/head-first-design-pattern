<?php

use Composite\Menu;
use Composite\MenuItem;
use Composite\Waitress;

require "./vendor/autoload.php";

$pancakeHouseMenu = new Menu('パンケーキハウスメニュー', '朝食');
$dinerMenu = new Menu('食堂メニュー', '昼食');
$allMenus = new Menu('すべてのメニュー', 'すべてを統合したメニュー');

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$pancakeHouseMenu->add(new MenuItem('K&Bのパンケーキ朝食', 'スクランブルエッグとトーストがついたパンケーキ', true, 2.99));
$pancakeHouseMenu->add(new MenuItem('通常のパンケーキ朝食', '卵焼きとソーセージがついたパンケーキ', false, 2.99));
$pancakeHouseMenu->add(new MenuItem('ブルーベリパンケーキ', '新鮮なブルーベリーで作ったパンケーキ', true, 3.49));
$pancakeHouseMenu->add(new MenuItem('ワッフル', 'ブルーベリーか苺の好きな方をのせたワッフル', true, 3.59));


$dinerMenu->add(new MenuItem('ベジタリアンBLT', 'レタス、トマト、(偽)ベーコンをはさんだ全粒小麦パンサンドイッチ', true, 2.99));
$dinerMenu->add(new MenuItem('BLT', 'レタス、トマト、ベーコンをはさんだ全粒小麦パンサンドイッチ', false, 2.99));
$dinerMenu->add(new MenuItem('本日のスープ', 'ポテトサラダを添えた本日のスープ', false, 3.29));
$dinerMenu->add(new MenuItem('ホットドッグ', 'サワークラウト、レリッシュ、玉ねぎ、チーズを挟んだホットドッグ', false, 3.05));

$waitress = new Waitress($allMenus);
$waitress->printMenu();