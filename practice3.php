<?php
//課題1
function double($a) {
    echo $a = $a*2;
}
echo double(4);
echo "\n";

//課題2
function add($a, $b) {
    echo $a + $b;
}
echo add(2,3);
echo "\n";

//課題3
function arr($arr) {
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo arr(array(1,3,5,7,9));
echo "\n";

//課題4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
    //配列内の数を一つずつ見ていく
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    //$max_numberと$aの数字と比較し、配列の数字($a)が大きければ$max_numberに再代入
    if($max_number < $a){
        $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(3,1,9,5,4,8));
echo "\n";

//課題5
//strip_tags

$str = "<h1>strip_tags関数</h>"."<p>タグを取り除く</p>";
echo $str;
echo "\n";

echo strip_tags($str);
echo "\n";

//array_push

$fruits = array("apple","orange","lemon");
print_r($fruits);

array_push($fruits,"banana","melon");
print_r($fruits);

//array_merge

$array1 = array(1,2,3);
$array2 = array(10,20,30);
$array3 = array(100,200,300);

$array = array_merge($array1,$array2,$array3);

print_r($array);

//time,mktime

echo time();
echo "\n";

$time = mktime(8);
echo date('Y年m月d日h時i分s秒', $time);
echo "\n";

$time = mktime(10,11,12);
echo date('Y年m月d日h時i分s秒', $time) . "\n";
$time = mktime(0,0,0,1,17,2023);
echo date('Y年m月d日h時i分s秒', $time) . "\n";

//date
echo date('Y年m月d日') . "\n";
echo date('Y/m/d') . "\n";
echo date('y/m/d') ."\n";
echo date('Y/m/d/ H:i:s') . "\n";

?>