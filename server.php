<?php
session_start();
$sname = "_cr";
if($_GET["act"]=="session.name"){
    echo ini_get("session.name");
}else{
	if($_SESSION["$sname"])
	echo $_SESSION["$sname"];
	else{
	$_SESSION["$sname"]=time();
	}
}
