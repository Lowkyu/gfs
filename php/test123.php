<html>
<head>
<title>test123.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第８章 正規表現</h1>
<h2>正しい文字かの判定</h2>
<hr />
<form method="post" action="test123.php">
<?php
if(isset($_POST["frmData"])){
	$valData = $_POST["frmData"];
	print('<input type="text" name="frmData" value="'.$valData.'" style="width:250px;"><br />');
}else{
	print('<input type="text" name="frmData" style="width:250px;"><br />');
}
?>
<input type="submit" value="SEND">
<input type="reset" value="CLEAR">
</form>
<?php
if(isset($_POST["frmData"])){
//データの受け取り
$resData = $_POST["frmData"];
//正規表現の判定
if(preg_match("/^\d{3}\-\d{4}$/",$resData)){
	print("OK<br>\n".$resData);
}else{
	print("No Matching");
}
}

?>
</body>
</html>