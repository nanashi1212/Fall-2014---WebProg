<?php
	include_once __DIR__ . '/../inc/_all.php';

class nutrition 
{
	public static function processFood()
	{
		$sql = "INSERT INTO `WebTracker_Foods` 
		(`id`, `user_id`, `food_name`) VALUES ('NULL', '".($_GET['id'])."', '". ($_POST['food'])."');";
		 insertFood($sql);
	}
}