<?php
$ss = "abcdefgh";
if(isset($_SERVER["argv"][1]))
if($_SERVER["argv"][1]){
	$ss = md5($_SERVER["argv"][1]);
}
include "./Snoopy.php";
$sn = new Snoopy();
$sn->cookies=array("PHPSESSID"=>"$ss");
$sn->fetch("http://q2.xiaoqianbao.com/sess/server.php");
$t=0+$sn->results;
if($t==0){
	//session失效了;
	$time = time();
	if(file_exists("data/testsess_".$ss)){
		$lasttime = file_get_contents("data/testsess_".$ss);
		$fp = fopen("data/result","a+");
		fwrite($fp,($time-$lasttime)."\n");
		fclose($fp);
	}
}else{
	//最后将上次的时间记录下来;	
	file_put_contents("data/testsess_".$ss,$t);
}
