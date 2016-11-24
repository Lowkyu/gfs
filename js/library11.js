function library2() {
var cahpTitle = new Array();
chapTitle =[
"DBとテーブルへの接続確認",
"SQLによるレコード",
"射影",
"選択",
"レコードの挿入",
"レコード削除",
"レコード修正",
"DBを利用した認証システム",
"セッション管理",
"ファイル処理"
];
var chapNum = new Array();
chapNum = [6,2,4,1,3,3];
var listTitle = new Array();
listTitle = [
"",
"HTMLによる繰り返し",//1
];
var listNum = 1;
for(var cnt = 0;cnt<chapTitle.length;cnt++){
	document.write("<span>"+chapTitle[cnt]+"</span>\n<ul>");
	for(var i = 0;i<chapNum[cnt];i++){
		if(listNum < 10){
			document.write('<li><a href="http://192.168.109.210/~d33837/201637/php/test10'+listNum+'.php" class="childCate" target="preview">'+listTitle[listNum]+'</a></li>\n');
		}else{
			document.write('<li><a href="http://192.168.109.210/~d33837/201637/php/test1'+listNum+'.php" class="childCate" target="preview">'+listTitle[listNum]+'</a></li>\n');
		}
		listNum=listNum + 1;
	}
	document.write("</ul>");
}
}
