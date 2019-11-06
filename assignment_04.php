<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($value) {
    $result = 0;
    $result = $value *2;
    return $result;
}

echo double(100);
echo "\n";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function a_plus_b($a, $b) {
    $result = 0;
    $result = $a + $b;
    return $result;
}

echo a_plus_b(1,2);
echo "\n";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

$arr = array(1, 3, 5 ,7, 9);
foreach($arr as $arreach)
echo $arreach * $arreach;

echo "\n";


/* 4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。*/

$arr = [0, 8, 2, 3];

function max_array($arr){
    rsort($arr);
    $max_number = $arr[0];
        foreach ($arr as $a){
            if ($max_number < $a){
                $max_number = $a;
            }
        }
return $max_number;
}

echo max_array ($arr);
echo "\n";

/*---------------------------------------
foreachを使用せずに試作した関数（個人の勉強用資料として保存させて下さい）

$arr = [0, 5, 2, 3];

function max_array($arr){

rsort($arr);
$imax = count($arr);
$max_number = $arr[0];
    for ($i = 1; $i>$imax; ++$i){
         if ($max_number < $arr[$i]){
             $arr[$i] = $max_number;
        };
    }
return $max_number;
}

echo max_array ($arr);
---------------------------------------*/

// 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// strip_tags

$html = "<head>
  <title>Tech boost</title>
 </head>";

echo strip_tags($html);
echo "\n";

// array_push

$color = array('white', 'black');
array_push($color, 'gold', 'silver');

print_r($color);
echo "\n";

// array_merge

$shape = array('square', 'circle');
$color_shape = array_merge($color, $shape);

print_r($color_shape);
echo "\n";

// time, mktime

echo '現在のUnixタイムスタンプ（通算秒）: '.time();
echo "\n";

echo '2019年11月6日12時00分00秒のUnixタイムスタンプ: '.mktime(12,0,0,11,6,2019);
echo "\n";

// date

$current = date('Y年m月d日H時i分s秒');
echo '現在のUnixタイムスタンプ（日本語）:'.$current;
echo "\n";

?>