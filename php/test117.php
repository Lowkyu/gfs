<html>
<head>
<title>test110.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第６章 ユーザ定義関数と外部ファイル</h1>
<h2>ユーザ定義関数の作成</h2>
<hr />
<form method="post" action ="test117.php">
テストの点数を入力してください<br><br>
国　語:<input type="text" name="frmKokugo"><br>
数　学:<input type="text" name="frmSugaku"><br>
英　語:<input type="text" name="frmEigo"><br>
<input type="submit" name="frmSend" value="SEND">
<input type="reset" value="CLEAR">
</form>
<?php
//ユーザ定義関数の作成
function heikin_function($funKokugo,$funSugaku,$funEigo){
	$funHeikin = round(($funKokugo+$funSugaku+$funEigo)/3,2);
	print("<br>国語は、".$funKokugo."点です。<br>\n");
	print("数学は、".$funSugaku."点です。<br>\n");
	print("英語は、".$funEigo."点です。<br>\n");
	print("平均は、".$funHeikin."点です。<br>\n");
}
if($_POST["frmKokugo"] == null ||  $_POST["frmSugaku"] == null || $_POST["frmEigo"] == null ){
	print("");
}else{
	$intKokugo = $_POST["frmKokugo"];
	$intSugaku = $_POST["frmSugaku"];
	$intEigo = $_POST["frmEigo"];
	heikin_function($intKokugo,$intSugaku,$intEigo);
}
?>
</body>
</html>