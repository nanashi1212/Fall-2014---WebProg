<?php
ini_set('display_errors', 1);
date_default_timezone_set("America/New_York");

function GetConnection(){
	include __DIR__ . '/_password.php';
	return new mysqli('localhost','inglesec1',$sql_password,'inglesec1_db');
}

function my_print($x){
	?><pre><?
	print_r($x);
	?></pre><?
}

function insertUser($sql){
	$conn = GetConnection();
	$error = $conn->error;
	if($error){
		echo $error;
	}else{
		$conn->query($sql);
	}
}


function FetchAll($sql){
		$ret = array();
		$conn = GetConnection();
		$results = $conn->query($sql);
		
		$error = $conn->error;
		if($error){
			echo $error;
		}else{
			while ($rs = $results->fetch_assoc()) {
				$ret[] = $rs;
			}			
		}
		
		return $ret;	
}
