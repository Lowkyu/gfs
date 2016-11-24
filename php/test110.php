<html>
<head>
<title>test110.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第３章 フォームの操作</h1>
<h2>ラジオボタン</h2>
<hr />
<form method="post" action="test110.php">
名前を入力してください<br><br>
<input type="text" name="frmName"><br>
性別を選択してください<br><br>
<input type="radio" id="male" name="frmSeibetu" value="男">
<label for="male">男性</label><br>
<input type="radio" id="female" name="frmSeibetu" value="女">
<label for="female">女性</label><br>
<input type="submit" value="SEND">
</form>
<?php
//特殊文字の指定
$strMoji1="<";
$strMoji2="&lt;";
$strMoji3=">";
$strMoji4="&gt;";
if(isset($_POST["frmName"])){
//テキストボックスからのデータ送信
	$txtName = $_POST["frmName"];
	if($txtName != null){
//特殊文字の置換
		$txtName = str_replace($strMoji1,$strMoji2,$txtName);
		$txtName = str_replace($strMoji3,$strMoji4,$txtName);
//HTML出力
		print("私は、".$txtName."です！<br>\n");
	}else{
		print("<span style='color:red'>名前が入力されていません!<span>");
	}
	if(isset($_POST["frmSeibetu"])){
//ラジオボタンからのデータ受信
		$radSeibetu = $_POST["frmSeibetu"];
//HTML出力
		print("私の性別は".$radSeibetu."です\n");
	}else{
		print("性別が選択されていません\n");
	}
}
	
?>
</body>
</html>