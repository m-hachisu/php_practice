<?php
//課題1
$name = "m-hachisu";

if($name == "m-hachisu") {
    echo "私は" . $name . "です";
}else{
    echo $name . "ではありません";
}

//課題2
$total = 0;

for($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題3
$fruits = array("apple", " orange", " lemon", " banana", " peach");

foreach($fruits as $fruit) {
    echo $fruit;
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
  }
}
?>