<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class tracker 
{
	public static function signup()
	{
		if(strcmp($_POST['password'],$_POST['password_reentered']) != 0){
			echo "PASSWORDS DO NOT MATCH";
		}else{
		$sql = "INSERT INTO `WebTracker_Users` 
		(`id`, `first_name`, `last_name`, `email`, `password`) 
		VALUES ('NULL', '".($_POST['first_name'])."', '". ($_POST['last_name'])."', '"
		 .($_POST['email'])."', '".($_POST['password'])."');";
		 echo $sql;
		 insertUser($sql);
		}
	}
}