function library1() {
var cahpTitle = new Array();
chapTitle =[
"変数とループ制御",
"条件によって処理を振り分ける",
"フォームの操作",
"数値の扱い",
"テーブル(配列・表)",
"ユーザー定義関数と外部ファイル",
"認証",
"正規表現",
"クラスとオブジェクト指向",
"PHP演習"
];
var chapNum = new Array();
chapNum = [6,2,4,1,3,5,1,1,1];
var listTitle = new Array();
listTitle = [
"",
"HTMLによる繰り返し",//1
"while文による繰り返し",//2
"for文による繰り返し",//3
"HTMLによるフォントサイズ変更",//4
"while文によるフォントサイズ変更",//5
"while文と変数",//6
"if文,else文,elseif文",//7
"switch文",//8
"テキストボックス",//9
"ラジオボタン",//10
"ﾁｪｯｸﾎﾞｯｸｽとﾌﾟﾙﾀﾞｳﾝ式ﾒﾆｭｰﾎﾞｯｸｽ",//11
"他ﾍﾟｰｼﾞからのﾃﾞｰﾀ送受信",//12
"「＋」記号の意味",//13
"１次元テーブル",//14
"連想配列",//15
"二次元テーブル",//16
"function（関数）",//17
"関数からの戻り値 return",//18
"引数のデフォルト値",//19
"「値渡し」と「参照渡し」",//20
"外部ファイルの利用",//21
"ユーザ認証機能の設定",//22
"正しい文字かの判定",//23
"クラスの定義"//24
];
var listNum = 1;
var chapID = 0;
for(var cnt = 0;cnt<chapTitle.length;cnt++){
	chapID = 1+chapID;
	document.write("<div id='library-1"+chapID+"' class='library1'>");
	document.write("<span>"+chapTitle[cnt]+"</span>\n<ul>");
	for(var i = 0;i<chapNum[cnt];i++){
		if(listNum == 12){
			for(var subNum = 1;subNum <=2;subNum++){
				document.write('<li><a href="http://192.168.109.210/~d33837/201637/php/test1'+listNum+'-0'+subNum+'.php" class="childCate" target="preview">'+listTitle[listNum]+'-'+subNum+'</a></li>\n');
			}
		}else if(listNum == 16){
			for(var subNum = 1;subNum <=3;subNum++){
				document.write('<li><a href="http://192.168.109.210/~d33837/201637/php/test1'+listNum+'-0'+subNum+'.php" class="childCate" target="preview">'+listTitle[listNum]+'-'+subNum+'</a></li>\n');
			}
		}else if(listNum < 10){
			document.write('<li><a href="http://192.168.109.210/~d33837/201637/php/test10'+listNum+'.php" class="childCate" target="preview">'+listTitle[listNum]+'</a></li>\n');
		}else{
			document.write('<li><a href="http://192.168.109.210/~d33837/201637/php/test1'+listNum+'.php" class="childCate" target="preview">'+listTitle[listNum]+'</a></li>\n');
		}
		listNum=listNum + 1;
	}
	document.write("</ul>");
	document.write("</div>");
}
}