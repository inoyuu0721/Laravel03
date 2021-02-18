<?php

echo 'hello php!';
echo "\n";

// 問題1
$name = 'inoue';

if ($name === 'inoue'){
 echo "あなたの名前は" . $name . "です";
 echo "\n";
} else {
 echo "あなたの名前ではありません";
 echo "\n";
}

// 問題2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
echo  $total += $i;
echo "\n";
}

// 問題3
$fruits = array('apple','banana','lemon','grape','melon');
 foreach ($fruits as $fruit) {
 echo $fruit;
 echo "\n";
  }
  
// 問題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}