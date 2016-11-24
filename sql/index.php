<!DOCTYPE html>
<html lang="ja">
<head>
<title>37xxxxvii</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
<link rel="javascript" type="text/javascript" href="textloop.js">
<style>@font-face {	font-family: 'HGRSMP';src: url('Fonts/HGRSMP.ttf') format('truetype');}
</style>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Montserrat::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
<!--<script type="text/javascript" src="https://npmcdn.com/headroom.js@0.9.3"></script>-->
<script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="../js/easing.1.3.js"></script>
<script type="text/javascript" src="../js/vgrid.js"></script>
<!--<script type="text/javascript" src="js/navFixed.js"></script>-->
<script type="text/javascript" src="../js/pageTop.js"></script>
<!--<script type="text/javascript" src="../js/accordion.js"></script>-->
<script type="text/javascript" src="../js/library1.js"></script>
<script type="text/javascript" src="../js/library2.js"></script>
<!--<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
<script>
$(function(){
	$(".grid-content").vgrid({
		easeing: "easeOutQuint",
		useLoadImageEvent: true,
		time: 400,
		delay: 20,
		fadeIn: { //フェードインの指定
			time: 500,
			delay: 50
		}
	});
});
</script>


<script type="text/javascript" src="js/scrollfix.js"></script>
</head>
<body>
<!--****************************************************************
                           ヘッダー
******************************************************************-->
<header id="header"class="head">
<h1>37xxxvii</h1>
<p>あいうえおかきくけこさしすせそ</p>
</header>
<!--****************************************************************
                           ナビゲーション
******************************************************************-->
<nav id="fixedBox" class="nav">
<h1 >37xxxvii</h1>
<ul>
	<li><a href="http://192.168.109.210/~d33837/201637/">HOME</a></li>
	<li><a href="../index/">INDEX</a></li>
	<li><a href="#">DataBase</a></li>
	<li><a href="#">CATEGORY</a></li>
	<li><a href="#">CSR</a></li>
	<li><a href="#">FAQ</a></li>
</ul>
</nav>
<div id="pageTop">
<a href="#top">TOP</a>
</div>
<!--****************************************************************
                           ラップ
******************************************************************-->

<article>
<h2>SQL入力欄</h2>
<form method="post" action="index.php">
<textarea spellcheck="false" style="width:100%;font-size:20px;color:#333;font-family:'メイリオ';line-height:1.3em" rows="10" name="frmSQL"></textarea>
<div id="formButton" style="float:right">
<input type="submit" value="SEND">
<input type="reset" value="CLEAR">
</div>
</form>

<?php
//DB接続
$conn = pg_connect("dbname=db_3837 user=d33837 host=192.168.109.210");
if($conn){
	print("DB OK!<br>\n");
}else{
	print("Not OK<br>\n");
}
//SQL発行
$SQL = $_POST["frmSQL"];
$result = pg_query($conn,$SQL."select * from tbl_name");
if($result){
	print("SQL OK!<br>\n");
}else{
	print("Not OK<br>\n");
}

//SQLで取得した行と列
$cntRows = pg_numRows($result);
$cntFields = pg_numFields($result);
print($cntRows."<br>");
print($cntFields."<br>");

//テーブル出力
print("<table width='100%'>\n");
print("<caption> tbl_name </caption>\n");
print("<tr>\n");
for($k = 0;$k<$cntFields;$k++){
	print("<th>\n");	
	print(pg_fieldname($result,$k));
	print("</th>\n");
}
for($i = 0;$i < $cntRows;$i++){
	print("<tr>");
	for($j =0;$j < $cntFields;$j++){
		print("<td>");
		print(pg_result($result,$i,$j));
		print("</td>");
	}
	print("</tr>");
}
print("</table>");

pg_free_result($result);//テーブル切断
pg_close($conn);//データベース切断
?>
</article>
<br>
<!--****************************************************************
                           フッター
******************************************************************-->
<footer>
<p>Copyright(C) 37xxxvii All Rights Reserved</p>
<address>Kobe, Japan</address>
</foorer>
</body>
</html>
