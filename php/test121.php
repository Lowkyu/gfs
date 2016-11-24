<html>
<head>
<title>test121.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第６章 ユーザ定義関数と外部ファイル</h1>
<h2>外部ファイルの利用</h2>
<hr />
<form method="post" action ="test121.php">
<br><br>
国語：<input type="text" name="frmKokugo"><br>
数学：<input type="text" name="frmSugaku"><br>
英語：<input type="text" name="frmEigo"><br>
<input type="submit" value="SEND">
<input type="reset" value="CLEAR">
</form>
<?php
//外部ファイルの呼び出し
require_once("test121common.php");

//変数
if(isset($_POST["frmKokugo"],$_POST["frmSugaku"],$_POST["frmEigo"])){
$intKokugo = $_POST["frmKokugo"];
$intSugaku = $_POST["frmSugaku"];
$intEigo = $_POST["frmEigo"];
//関数の実行
funAvg($intKokugo,$intSugaku,$intEigo);
}
?>
</body>
</html>