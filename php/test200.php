<html>
<head>
<title>test200.php</title>
<link rel="stylesheet" type="text/css" href="../css/test_style.css">
</head>
<body>
<h1>第１章 Web-DB連携の動作確認</h1>
<h2>ブラウザからデータベース（DB）への接続確認</h2>
<hr />
<div style="width:700px;margin:auto">
<form method="post" action="test201.php" style="margin:auto">
<table id="tblQ">
<tr>
	<th colspan="2"><h3>基本情報</h3></th>
</tr>
<!--出席番号-->
<tr>
<td>
<span class="question">出席番号</span>
</td>
<td>
<select name="frmAtdnum" size="1">
<script>
for(var i = 1;i<=39;i++){
	document.write('<option value="'+i+'">'+i+'</option>\n');
}
</script>
</select>
</td>
</tr>
 <!--名前-->
<tr>
<td>
<span class="question">名前</span>
</td>
<td>
<input type="text" placeholder="漢字で名前を入力してください" name="frmName" >
</td>
</tr>
 <!--性別-->
<tr>
<td>
<span class="question">性別</span>
</td>
<td>
<input type="radio" id="male" name="frmGender" value="男">
<label for="male">男性</label>
<input type="radio" id="female" name="frmGender" value="女">
<label for="female">女性</label><br>
<input type="radio" name="frmGender"value="" checked="checked" style="display:none;" />
</td>
</tr>
<!--誕生月-->
<tr>
<td>
<span class="question">誕生日</span>
</td>
<td>
<select name="frmBirthMonth">
<option value=""> </option>;
<script>
for(var i = 1;i<=12;i++){
	document.write("<option value='"+i+"'>"+i+"</option>");
}
</script>
</select>月
<!--誕生日-->
<select name="frmBirthDate">
<option value=""> </option>;
<script>
for(var i = 1;i<=31;i++){
	document.write("<option value='"+i+"'>"+i+"</option>");
}
</script>
</select>日</td>
<!--血液型-->
<tr>
<td>
<span class="question">血液型</span>
</td>
<td>
<select name="frmBlood">
<option value=""> </option>;
<option value="A">A</option>
<option value="B">B</option>
<option value="O">O</option>
<option value="AB">AB</option>
</select>型
</td>
</tr>
<!--身長-->
<tr>
<td>
<span class="question">身長</span>
</td>
<td>
<select name="frmTall">
<option value=""></option>;
<script>
var tallMax = 130;
var i= 0;
var val=new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S");
document.write('<option value="'+val[i]+'">～'+tallMax+'</option>');
while(tallMax <=210){
	tallMax= tallMax+5;
	i= i+1;
	var tallMin=tallMax-4;
	document.write('<option value="'+val[i]+'">'+tallMin+'～'+tallMax+'</option>');
}
document.write('<option value="'+val[i+1]+'">'+tallMax+'～</option>');
</script>
</select>
cm
</td>
</tr>
<tr>
<th colspan="2"><h3>質問</h3></th>
</tr>
<!--犬派 or 猫派-->
<tr>
<td>
<span class="question">犬派？猫派？</span>
</td>
<td>
<input type="radio" id="dog" name="frmPet" value="犬">
<label for="dog">犬</label>
<input type="radio" id="cat" name="frmPet" value="猫">
<label for="cat">猫</label>
</td>
</tr>
<!--利き手-->
<tr>
<td>
<span class="question">利き手</span>
</td>
<td>
<input type="radio" id="rightHand" name="frmHand" value="左利き">
<label for="rightHand">左利き</label>
<input type="radio" id="leftHand" name="frmHand" value="右利き">
<label for="leftHand">右利き</label><br>
<input type="radio" name="frmHand"value="" checked="checked" style="display:none;" />
</td>
</tr>
<!--平均睡眠時間-->
<tr>
<td>
<span class="question">１日の平均睡眠時間</span>
</td>
<td>
<input type="text" plaseholder="半角数字で入力してください" size="2" name="frmSleep">時間
</td>
</tr> 
</table>
<div style="float:right">
<input type="submit" value="SEND"><input type="reset" value="CLEAR">
</div>
</form>

</div>


<?php
//DB接続
$conn = pg_connect("dbname=db_3837 user=d33837 host=192.168.109.210");

//SQL発行
$result = pg_query("select * from tbl_data");

//SQLで取得した行と列
$cntRows = pg_numRows($result);
$cntFields = pg_numFields($result);

pg_free_result($result);//テーブル切断
pg_close($conn);//データベース切断
?>
</body>
</html>