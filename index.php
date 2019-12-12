<?php
$text = "nguyendeptrai";
$count=0;
for($i = 0; $i < strlen($text);$i++){
    if ($text[$i]=='n'){
        $count+=1;
    }
}
echo $text."<br>";
echo "n da xuat hien: ".$count;
?>