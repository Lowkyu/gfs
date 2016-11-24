<?php
function fncAvg ($funKokugo, $funSugaku ,$funEigo){
	$funHeikin = round(($funKokugo + $funSugaku + $funEigo)/3,2);
	print("国語は".$funKokugo."点<br>\n");
	print("数学は".$funSugaku."点<br>\n");
	print("英語は".$funEigo."点<br>\n");
}
?>