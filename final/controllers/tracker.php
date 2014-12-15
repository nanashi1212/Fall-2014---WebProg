<?php
//rename as 'Controllers' if errors occur
include_once __DIR__ . '/../inc/_all.php';
include_once __DIR__ . '/../Models/tracker.php';

$view = isset($_REQUEST['view']) ? $_REQUEST['view'] : null;
$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : null;

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';

include_once __DIR__ . '/../inc/_nav-switches.php';

switch ($action . '_' . $method) {
	case('account-created_POST'):
		//handle signup here
		tracker::signup();
		my_print($_POST);
		$controller = "index.php";
		$view = "index/index.php";
		break;
		
	case('account-login_POST'):
		//handle signin here
		$userData = tracker::login();
		$userID = $userData->fetch_array(MYSQLI_NUM);
		if($userID)
			$_SESSION["ID"] = $userID;
		else 
			$_SESSION["ERROR"] = "error!";
		$controller = "index.php";
		$view = "index/index.php";
		break;
}

if($controller != "tracker.php" && $controller != null){
		header("Location: $controller?view=$view");
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
