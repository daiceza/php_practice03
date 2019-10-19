<?php
//課題1
$name ="佐瀬大樹";
if ($name == "佐瀬大樹"){
    echo "私は".$name. "です";
}else{
    echo "あなたの名前ではありません";
}
echo"\n";
$name ="saseD";
if ($name == "佐瀬大樹"){
    echo "私は".$name. "です";
}else{
    echo "あなたの名前ではありません";
}
echo"\n";
//課題2
$total=0;
for($i =0;$i <=10000; $i++){
    $total += $i;
}
echo $total."\n";
//課題3
$frults =array("strawberry","cherry","watermelon","grape","peach");
foreach($frults as $frult){
    echo "好きなフルーツ:".$frult."\n";
}
//課題4
/* for文の始めの値を定義する (コメント修正)*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
//$i < $end;を修正
for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    //echo $i ;がない "\n"で改行
    echo $i."\n";
  }
}