<?
	include_once __DIR__ . '/../inc/_all.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch ($action . '_' . $method) {
	case 'signup_GET':
		$view = "tracker/tracker-signup.php";
		break;
	case 'signup_POST':
		//	Proccess input
		break;
	case 'signin_GET':
		$model = Food::Get($_REQUEST['id']);
		$view = "tracker/tracker-signin.php";		
		break;
	case 'signin_POST':
		//	Proccess input
		break;
	case 'delete_GET':
		$view = "food/delete.php";		
		break;
	case 'delete_POST':
		//	Proccess input
		break;
	case 'index_GET':
	default:
		$model = Food::Get();
		$view = 'tracker/tracker.php';		
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