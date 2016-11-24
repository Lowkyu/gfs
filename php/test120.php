<html>
<head>
<title>test120.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第６章 ユーザ定義関数と外部ファイル</h1>
<h2>「値渡し」と「参照」</h2>
<hr />
<form method="post" action ="test120.php">
<br><br>
数字：<input type="text" name="frmNum">
<input type="submit" value="SEND">
<input type="reset" value="CLEAR">
</form>
<?php
//値渡し
function fncNum ($a){
	$a = $a * 5;
	return($a);
}
//参照渡し
function fncReference(&$b){
	$b = $b * 5;
	return($b);
}
$intNum1 = $_POST["frmNum"];
$intNum2 = $_POST["frmNum"];
$retNum = fncNum($intNum1);
$retReference = fncReference($intNum2);
print("入力した数字".$intNum1."<br>");
print("値渡しの数字".$retNum."<br>");
print("入力した点数".$intNum2."<br>");
print("参照渡しの数字".$retReference."<br>");
?>
</body>
</html>