<html>
<head>
<title>test109-4.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第3章　フォームの操作</h1>
<h2>「＋」記号の意味</h2>
<hr />

<form method="post" action="test113.php">
データ1 : <input type="text" name="frmData1">
＋
データ2 : <input type="text" name="frmData2">
<input type="submit" value="SEND">
</form>
<?php

$strMoji1 = "<";
$strMoji2 = "&lt;";
$strMoji3 = ">";
$strMoji4 = "&gt;";
if(isset($_POST["frmData1"],$_POST["frmData2"])){

	$txtData1 = $_POST["frmData1"];
	$txtData2 = $_POST["frmData2"];	

	if($txtData1 == null && $txtData2 == null){
		print("データ１とデータ２が入力されていません。");

	}elseif($txtData1!=null && $txtData2 == null){

		print("データ２が入力されていません。");

	}elseif($txtData1==null && $txtData2 != null){

		print("データ１が入力されていません。");

	}elseif(preg_match("/^[0-9]+$/", $txtData1)&&preg_match("/^[0-9]+$/", $txtData2)){
		$txtKotae = $txtData1 + $txtData2;
		print("データ１は、".$txtData1."です。<br />\n");
		print("データ２は、".$txtData2."です。<br />\n");
		print("答えは、".$txtKotae."です。<br />\n");

	}elseif(preg_match("/^[\s]+[a-zA-Z0-9]+[\s]+$/", $txtData1) && preg_match("/^[\s]+[a-zA-Z0-9]+[\s]+$/", $txtData2)){

		print($txtData1.$txtData2);

	}else{
		print("半角英数字で入力してください。");
	}
}

?>
</body>
</html>
