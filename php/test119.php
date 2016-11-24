<html>
<head>
<title>test119.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第６章 ユーザ定義関数と外部ファイル</h1>
<h2>引数のデフォルト値</h2>
<hr />
<form method="post" action ="test119.php">
半径を入力してください<br><br>
半径：<input type="text" name="frmHankei">
<input type="submit" value="SEND">
<input type="reset" value="CLEAR">
</form>
<?php
function circle($fncHankei , $fncPai=3.14){
	$fncCircle = round(pow($fncHankei,2)*$fncPai,2);
	return($fncCircle);
}
if(isset($_POST["frmHankei"])){
	$intHankei = $_POST["frmHankei"];
	if($intHankei != null){
		$retCircle = circle($intHankei);
		print("面積は".$retCircle."平方センチメートルです。\n");
	}else{
		print("半径が入力されていません");
	}
}
?>
</body>
</html>