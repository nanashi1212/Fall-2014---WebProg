<?php
//rename as 'Controllers' if errors occur
include_once __DIR__ . '/../inc/_all.php';

$view = isset($_REQUEST['view']) ? $_REQUEST['view'] : null;
$controller=null;

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';

//importing nav-bar links
include_once __DIR__ . '/../inc/_nav-switches.php';

switch ($action . '_' . $method) {
	case('atkins_GET'):
		$controller = "nutrition.php";
		$view = "nutrition/atkins.php";
		break;
	case('paleo_GET'):
		$controller = "nutrition.php";
		$view = "nutrition/paleo.php";
		break;
	case('mediterranean_GET'):
		$controller = "nutrition.php";
		$view = "nutrition/mediterranean.php";
		break;
	case('anaerobics_GET'):
		$controller = "fitness.php";
		$view = "fitness/aerobics.php";
		break;
	case('aerobics_GET'):
		$controller = "fitness.php";
		$view = "fitness/aerobics.php";
		break;
	
	//tracker signup & signin included in '_nav-switches'
}

if($controller != "index.php" && $controller != null){
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
