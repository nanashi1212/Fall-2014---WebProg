<?php
switch ($action . '_' . $method) {
	case 'index_GET':
		$controller = "index.php";
		$view = "index/index.php";
		break;
	case 'nutrition_GET':
		$controller = "index.php";
		$view = "index/nutrition.php";
		break;
	case 'fitness_GET':
		$controller = "index.php";
		$view = "index/fitness.php";
		break;
	case 'tracker_GET':
		$controller = "index.php";
		$view = "index/tracker.php";
		break;
	case 'about-us_GET':
		$controller = "index.php";
		$view = "index/about-us.php";
		break;
		
	case 'tracker-login_GET':
		$controller = "tracker.php";
		$view = "tracker/tracker-login.php";
		break;
	case 'tracker-signup_GET':
		$controller = "tracker.php";
		$view = "tracker/tracker-signup.php";
		break;
}
