<html>
<head>
<title>test112-01.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body bgColor="aqua">
<h1>第３章 フォームの操作</h1>
<h2>チェックボックスとプルダウン式メニューボックス</h2>
<hr />
<form method="post" action="test112-02.php" accept-charset="utf8">
名前を入力してください<br><br>
<input type="text" name="frmName"><br>
性別を選択してください<br><br>
<input type="radio" name="frmSeibetu" value="男">:男性の方<br>
<input type="radio" name="frmSeibetu" value="女">:女性の方<br>
好きな食べ物をチェックしてください<br><br>
<input type="checkbox" name="frmTabemono" id="oykdn" value ="親子どんぶり">
<label for="oykdn" style="cursor: pointer" onclick="check(0)">親子どんぶり</label><br>
<input type="checkbox" name="frmTabemono" id="crry" value ="カラーライス">
<label for="crry" style="cursor: pointer" onclick="check(1)">カレーライス</label><br>
<input type="checkbox" name="frmTabemono" id="tmpr" value ="天ぷらうどん">
<label for="tmpr" style="cursor: pointer" onclick="check(2)">天ぷらうどん</label><br>
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
?>
</body>
</html>