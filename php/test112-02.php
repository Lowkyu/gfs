<html>
<head>
<title>test112-02.php</title>
<!--<link rel="stylesheet" type="text/css" href="../css/test_style.css">-->
</head>
<body bgColor="yellow">
<h1>第３章 フォームの操作</h1>
<h2>チェックボックスとプルダウン式メニューボックス</h2>
<hr />
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
		print("<p style='color:red'>名前が入力されていません!</p>");
	}
	if(isset($_POST["frmSeibetu"])){
//ラジオボタンからのデータ受信
		$radSeibetu = $_POST["frmSeibetu"];
//HTML出力
		print("私の性別は".$radSeibetu."です<br>\n");
	}else{
		print("<p style='color:red'>性別が選択されていません</p>\n");
	}
	if(isset($_POST["frmTabemono"])) {
// HTML出力
		for($i = 0; $i < 3; $i++) {
			if(isset($_POST["frmTabemono"][$i])) {
				print("私の好きな食べ物は".$_POST["frmTabemono"][$i] . "です<br />");
			}
		}
	}else{
		print("<p style='color:red'>好きな食べ物が選択されていません</p>\n");
	}
//プルダウン式メニューボックスからのデータ受信
	$selJusho = $_POST["frmJusho"];
	if($selJusho != null){
//HTML出力
		print("私の住所は、".$selJusho."です！<br>\n");
	}else{
		print("<p style='color:red'>住所が選択されていません。</p>\n");
	}
}
	
?>
</body>
</html>