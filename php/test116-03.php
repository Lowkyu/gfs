<html>
<head>
<title>test116-03.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第５章 テーブル</h1>
<h2>Checkbox foreach</h2>
<hr />
<form method="post" action="test116-03.php">

好きな食べ物をチェックしてください<br><br>
<input type="checkbox" name="frmTabemono[]" id="oykdn" value ="親子どんぶり">
<label for="oykdn" style="cursor: pointer">親子どんぶり</label><br>
<input type="checkbox" name="frmTabemono[]" id="crry" value ="カラーライス">
<label for="crry" style="cursor: pointer">カレーライス</label><br>
<input type="checkbox" name="frmTabemono[]" id="tmpr" value ="天ぷらうどん">
<label for="tmpr" style="cursor: pointer">天ぷらうどん</label><br>
<input type="checkbox" name="frmTabemono[]" id="omr" value ="オムライス">
<label for="omr" style="cursor: pointer">オムライス</label><br>
<input type="checkbox" name="frmTabemono[]" id="rmn" value ="ラーメン">
<label for="rmn" style="cursor: pointer">ラーメン</label><br>
<input type="submit" value="SEND">
</form>
<?php

$chkTabemono = $_POST["frmTabemono"];
foreach($chkTabemono as $tblTabemono){
	print($tblTabemono."<br>\n");
}
?>
</body>
</html>