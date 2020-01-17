<?php
	$sys['domain'] = "http://127.0.0.1";
	$sys['name'] = "php 프로그램";
	$sys['var'] = "1.0.2";

	//세션
	session_start();
	if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"]; 
	else $userid = "";
	if (isset($_SESSION["username"])) $username = $_SESSION["username"];
	else $username = "";
	?>