<html>
<head>
<title>test110.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第５章 テーブル</h1>
<h2>連想配列</h2>
<hr />
<form method="post" action="test115.php">
好きな動物の名前（英語表記）選択してください<br><br>
<select name="frmAnimal">
<option value="">
<option value="dog">dog
<option value="cat">cat
<option value="bird">bird
<option value="cow">cow
<option value="rat">rat
</select>
<input type="submit" value="送信">
<input type="reset" value="クリア">
</form>
<?php
if(isset($_POST["frmAnimal"])){
	//データの受信
	$selAnimal = $_POST["frmAnimal"];
	if($selAnimal != null){
	//テーブル宣言
		$tblAnimal = array("dog"=>"犬","cat"=>"猫","bird"=>"鳥","cow"=>"牛","rat"=>"ねずみ");
	//HTHML出力
		print($selAnimal."は日本語で「".$tblAnimal[$selAnimal]."」です！”\n");
	}else{
		print("動物を選択していません\n");
	}
}
?>
</body>
</html>