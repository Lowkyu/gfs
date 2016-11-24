<html>
<head>
<title>test122.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第７章 認証</h1>
<h2>ユーザ認証機能の設定</h2>
<hr />
<?php
//認証
if(($_SERVER["PHP_AUTH_USER"]!="shinko") || ($_SERVER["PHP_AUTH_PW"]!="shinko")){
	header('www-Authenticate: Basic realm="STUDYPHP"');
	header('HTTP/1.0 401 Unauthorized');
	print("入室できません");
}else{
	print("ようこそゲスト様");
}
?>
</body>
</html>