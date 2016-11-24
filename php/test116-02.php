<html>
<head>
<title>test110.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第５章 テーブル</h1>
<h2>二次元テーブル</h2>
<hr />

<?php
//テーブルの宣言

$tblKazu =array();
//値の代入
for($i=0;$i<=9;$i++){
	for($j=0;$j<=9;$j++){
		if($i==$j || $i+$j==10){
			$tblKazu[$i][$j]="★";
		}else{
			$tblKazu[$i][$j]="";
		}
	}
}

//値の出力
print("<table>");
print("<th style='width:50px;height:50px;'>/</th>");
for($k=1;$k <=9;$k++){
	print("<th style='width:50px;height:50px;'>".$k."</th>");
}
for($i = 1;$i<=9;$i++){
	print("<tr>");
	print("<th style='width:50px;height:50px;'>".$i."</th>");
	for($j = 1;$j<=9;$j++){
		print("<td class='v".$i." h".$k."' align='center' style='width:50px;height:50px;'>");
		print($tblKazu[$i][$j]);
		print("</td>");
	}
	print("</tr>");
}
?>
</body>
</html>