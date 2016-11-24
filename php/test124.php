<html>
<head>
<title>test124.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第９章 クラスとオブジェクト指向</h1>
<h2>クラスの定義</h2>
<hr />
<form method="post" action="test124.php">
半径：<input type="text" name="frmRadius"><br>
高さ ：<input type="text" name="frmHeight"><br>
<input type="submit">
<input type="reset">
</form>
<?php
class circle{
	public $radius;
	public $pai = 3.14;
	public $answer;
	function menseki(){
		$this -> answer = $this -> radius * $this -> radius * $this -> pai;
		return $this -> answer;
	}
}
class enchu extends circle{
	public $height;
	public $answer2;
	function taiseki(){
		$this -> answer2 = parent::menseki() * $this ->height;
		return $this -> answer2;$this -> height;
	}
}
class ensui extends enchu{
	public $answer3;
	function ensui(){
		$this -> answer3 = parent::taiseki() * (1/3);
		return $this -> answer3;
	}
}
if(isset($_POST["frmRadius"],$_POST["frmHeight"])){
	$obj = new ensui();
	$obj -> radius = $_POST["frmRadius"];
	$obj -> height = $_POST["frmHeight"];
	$obj -> menseki();
	$obj -> taiseki();
	$obj -> ensui();
	print("半径は".$obj -> radius."<br>");
	print("高さは".$obj -> height."<br>");
	print("底面の面積は".$obj -> answer."<br>");
	print("円柱の体積は".$obj -> answer2."<br>");
	print("円錐の体積は".$obj -> answer3."<br>");
}
?>
</body>
</html>