<?php
switch ($action . '_' . $method) {
	case 'index_GET':
		$view = "index/index.php";
		break;
	case 'nutrition_GET':
		$view = "index/nutrition.php";
		break;
	case 'fitness_GET':
		$view = "index/fitness.php";
		break;
	case 'tracker_GET':
		$view = "index/tracker.php";
		break;
	case 'about-us_GET':
		$view = "index/about-us.php";
		break;
		
	case 'tracker-login_GET':
		//change controller
		$view = "index/tracker-login.php";
		break;
	case 'tracker-signup_GET':
		//change controller
		$view = "index/tracker-signup.php";
		break;
		
	default:
		//set controller to index
		$view = "index/index.php";
		break;
}
