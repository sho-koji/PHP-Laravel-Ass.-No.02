<?php

$name = "Sho";
if ($name == "Sho") {
    echo "私はShoです";
}   else {
    echo "あなたの名前ではありません"; 
}

echo "\n";

$total = 0;
for ($term = 0; $term <= 10000; $term++) {
    $total += $term;
}
echo $total;

echo "\n";

$fruits = ["apple, ", "pear, ", "orange, ", "grape, ", "peach"];
foreach ($fruits as $fruits) {
echo $fruits;
}

echo "\n";

$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}