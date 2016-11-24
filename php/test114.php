<html>
<head>
<title>test110.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第５章 テーブル</h1>
<h2>１次元テーブル</h2>
<hr />
<form method="post" action="test114.php">
月を入力してください<br><br>
<input type="text" name="frmTuki">
<input type="submit" value="送信">
<input type="reset" value="クリア">
</form>
<?php
if(isset($_POST["frmTuki"])){
	//データの受信
	$txtTuki=$_POST["frmTuki"];
	if($txtTuki != null){
	//テーブル宣言
		$tblTukimei = array("Janbuary","February","March","April","May","Junne","July","August","Septemper","October","November","December");
	//HTHML出力
		print($txtTuki."月は英語で「".$tblTukimei[$txtTuki-1]."」です！”\n");
	}else{
		print("月が入力されていません\n");
	}
}
?>
</body>
</html>