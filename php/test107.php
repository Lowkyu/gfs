<html>
<head>
<title>test107.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第２章 条件によって処理を分ける</h1>
<h2>if文 else文 elseif文</h2>
<hr />
<?php
//変数の代入
$intAaa = 10;
$intBbb = 3;
$intCcc = 4;
//if文
if($intAaa > 5){
	print("変数\$intAaaは、5よりも大きい<br>\n");
}
//if~else文
if($intBbb > 5){
	print("変数\$intBbbは、5よりも大きい<br>\n");
}else{
	print("変数\$intBbbは、5以下<br>\n");
}
//elseif文
if($intCcc > 5){
	print("変数\$intCccは、5よりも大きい<br>\n");
}elseif($intCcc > 3){
	print("変数\$intCccは、3よりも大きい<br>\n");
}else{
	print("変数\$intCccは、3以下<br>\n");
}
?>
</body>
</html>