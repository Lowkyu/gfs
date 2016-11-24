<html>
<head>
<title>test118.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第６章 ユーザ定義関数と外部ファイル</h1>
<h2>関数からの戻り値 return</h2>
<hr />
<form method="post" action ="test118.php">
テストの点数を入力してください<br><br>
国　語:<input type="text" name="frmKokugo"><br>
数　学:<input type="text" name="frmSugaku"><br>
英　語:<input type="text" name="frmEigo"><br>
<input type="submit" name="frmSend" value="SEND">
<input type="reset" value="CLEAR">
</form>
<?php
function fncHeikin($kokugo,$sugaku,$eigo){
	$heikin =($kokugo+$sugaku+$eigo)/3;
	return $heikin;
}
if(isset($_POST["frmKokugo"],$_POST["frmSugaku"],$_POST["frmEigo"])){
$intKokugo = $_POST["frmKokugo"];
$intSugaku = $_POST["frmSugaku"];
$intEigo = $_POST["frmEigo"];
print("国語".$intKokugo."点<br>");
print("数学".$intSugaku."点<br>");
print("英語".$intEigo."点<br>");
$retHeikin = fncHeikin($intKokugo,$intSugaku,$intEigo);
print("平均".$retHeikin."点");
}
?>
</body>
</html>