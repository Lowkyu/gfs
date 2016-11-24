<html>
<head>
<title>test106.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>変数とループ制御</h1>
<h2>while文と変数</h2>
<hr />
<?php
//初期値の代入
$i = 1;
$strMsg = "神港高校";

//繰り返しによるHTML出力
while($i < 7){
	print("<font size=".$i.">".$strMsg."</font><br>\n");
	$i++;
}
?>
</body>
</html>