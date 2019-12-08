<?php

use Iterator\DinerMenu;
use Iterator\MenuItem;
use Iterator\PancakeHouseMenu;
use Iterator\Waitress;

require "./vendor/autoload.php";

$breakfastItems[] = new MenuItem('K&Bのパンケーキ朝食', 'スクランブルエッグとトーストがついたパンケーキ', true, 2.99);
$breakfastItems[] = new MenuItem('通常のパンケーキ朝食', '卵焼きとソーセージがついたパンケーキ', false, 2.99);
$breakfastItems[] = new MenuItem('ブルーベリパンケーキ', '新鮮なブルーベリーで作ったパンケーキ', true, 3.49);
$breakfastItems[] = new MenuItem('ワッフル', 'ブルーベリーか苺の好きな方をのせたワッフル', true, 3.59);
$pancakeHouseMenu = new PancakeHouseMenu($breakfastItems);

$dinerMenuItems[] = new MenuItem('ベジタリアンBLT', 'レタス、トマト、(偽)ベーコンをはさんだ全粒小麦パンサンドイッチ', true, 2.99);
$dinerMenuItems[] = new MenuItem('BLT', 'レタス、トマト、ベーコンをはさんだ全粒小麦パンサンドイッチ', false, 2.99);
$dinerMenuItems[] = new MenuItem('本日のスープ', 'ポテトサラダを添えた本日のスープ', false, 3.29);
$dinerMenuItems[] = new MenuItem('ホットドッグ', 'サワークラウト、レリッシュ、玉ねぎ、チーズを挟んだホットドッグ', false, 3.05);
$dinerMenu = new DinerMenu($dinerMenuItems);

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);
$waitress->printMenu();