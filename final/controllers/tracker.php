<?php
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch ($action . '_' . $method) {
		
	//DEFINING ALL LINKS
		//DEFINING INDEX LINK
	case 'index_GET':
		$view = "index/index.php";
		break;
		
		//DEFINING ALL NUTRITION LINKS
	case 'nutrition_GET':
		$view = "nutrition/nutrition.php";
		break;
	case 'atkins_GET':
		$view = "nutrition/atkins.php";
		break;
	case 'mediterranean_GET':
		$view = "nutrition/mediterranean.php";
		break;
	case 'paleo_GET':
		$view = "nutrition/paleo.php";
		break;
		
		//DEFINING ALL FITNESS LINKS
	case 'fitness_GET':
		$view = "fitness/fitness.php";
		break;
	case 'anaerobics_GET':
		$view = "fitness/anaerobics.php";
		break;
	case 'aerobics_GET':
		$view = "fitness/aerobics.php";
		break;
		
		
		//DEFINING ALL TRACKER LINKS
	case 'tracker_GET':
		$view = "tracker/tracker.php";
		break;
	case 'tracker-signup_GET':
		$view = "tracker/tracker-signup.php";
		break;
	case 'tracker-login_GET':
		$view = "tracker/tracker-login.php";
		break;	
	case 'tracker-success_GET':
		$view = "tracker/tracker-success.php";
		break;
		
		//DEFINING ABOUT US LINK
	case 'about-us_GET':
		$view = "about-us/about-us.php";
		break;
		
	//ALL LINKS DEFINED
		
		//DEFINING ALL TRACKER INPUT
	case 'signup_POST':
		//	Proccess input
		break;
	case 'signin_POST':
		//	Proccess input
		break;	
		
	default:
		//$model = Food::Get();
		$view = "index/index.php";
		break;
}

switch ($format) {
	case 'json':
		echo json_encode($model);
		break;
	case 'plain':
		include __DIR__ . "/../Views/$view";		
		break;		
	case 'web':
	default:
		include __DIR__ . "/../Views/shared/_Template.php";		
		break;
}
?>
