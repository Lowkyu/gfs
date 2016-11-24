<html>
<head>
<title>test105.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>変数とループ制御</h1>
<h2>while文によるフォントサイズの繰り返し</h2>
<hr />
<?php
$i = 1;
while ($i<=6){
	print("<font size=".$i.">神港高校</font><br>\n");
	$i++;
}
?>
</body>
</html>