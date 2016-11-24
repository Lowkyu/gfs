<html>
<head>
<title>test108.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第２章 条件によって処理を分ける</h1>
<h2>switch文</h2>
<hr />
<?php
//変数の代入
$strKa = "D";

//switch文
switch($strKa){
	case "L":
		print("神港高校普通科です！<br>\n");
		break;
	case "C":
		print("神港高校商業科です！<br>\n");
		break;
	case "D":
		print("神港高校情報処理科です！<br>\n");
		break;
	default:
		print("間違っています<br>\n");
}
?>
</body>
</html>