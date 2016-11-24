<html>
<head>
<title>test110.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第３章 フォームの操作</h1>
<h2>チェックボックスとプルダウン式メニューボックス</h2>
<hr />
<form method="get" action="test111.php">
名前を入力してください<br><br>
<input type="text" name="frmName"><br>
性別を選択してください<br><br>
<input type="radio" name="frmSeibetu" value="男">:男性の方<br>
<input type="radio" name="frmSeibetu" value="女">:女性の方<br>
好きな食べ物をチェックしてください<br><br>
<input type="checkbox" name="frmTabemono" id="oykdn" value ="親子どんぶり">
<label for="oykdn" style="cursor: pointer">親子どんぶり</label><br>
<input type="checkbox" name="frmTabemono" id="crry" value ="カラーライス">
<label for="crry" style="cursor: pointer">カレーライス</label><br>
<input type="checkbox" name="frmTabemono" id="tmpr" value ="天ぷらうどん">
<label for="tmpr" style="cursor: pointer">天ぷらうどん</label><br>
<br>
住所を選択してください<br><br>
<select name="frmJusho">
<option value="">
<option value="神戸市">神戸市
<option value="尼崎市">尼崎市
<option value="西宮市">西宮市
<option value="芦屋市">芦屋市
<option value="宝塚市">宝塚市
<option value="明石市">明石市
<option value="加古川市">加古川市
<option value="姫路市">姫路市
</select>
<br><br>
<input type="submit" value="SEND">
</form>
<?php
//特殊文字の指定
$strMoji1="<";
$strMoji2="&lt;";
$strMoji3=">";
$strMoji4="&gt;";
if(isset($_GET["frmName"])){
//テキストボックスからのデータ送信
	$txtName = $_POST["frmName"];
	if($txtName != null){
//特殊文字の置換
		$txtName = str_replace($strMoji1,$strMoji2,$txtName);
		$txtName = str_replace($strMoji3,$strMoji4,$txtName);
//HTML出力
		print("私は、".$txtName."です！<br>\n");
	}else{
		print("<span style='color:red'>名前が入力されていません!</span><br>");
	}
	if(isset($_POST["frmSeibetu"])){
//ラジオボタンからのデータ受信
		$radSeibetu = $_POST["frmSeibetu"];
//HTML出力
		print("私の性別は".$radSeibetu."です<br>\n");
	}else{
		print("性別が選択されていません<br>\n");
	}
	if(isset($_POST["frmTabemono"])){
		$chkTabemono =$_POST["frmTabemono"];
//チェックボックス
		for($i = 0; $i < 3; $i++) {
			if(isset($_POST["frmTabemono"][$i])) {
				print("私の好きな食べ物は".$_POST["frmTabemono"][$i] . "です<br />");
			}
		}
	}else{
		print("好きな食べ物が選択されていません<br>\n");
	}
//プルダウン式メニューボックスからのデータ受信
	$selJusho = $_POST["frmJusho"];
	if($selJusho != null){
//HTML出力
		print("私の住所は、".$selJusho."です！<br>\n");
	}else{
		print("住所が選択されていません。<br>\n");
	}
}
	
?>
</body>
</html>