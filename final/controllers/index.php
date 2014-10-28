<?php
//rename as 'Controllers' if errors occur
include_once __DIR__ . '/../inc/_all.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

include_once __DIR__ . '/../inc/_nav-switches.php';

switch ($action . '_' . $method) {
	case('atkins_GET'):
		//change model
		//change view
		break;
	case('paleo_GET'):
		//change model
		//change view
		break;
	case('mediterranean_GET'):
		//change model
		//change view
		break;
	case('anaerobics_GET'):
		//change model
		//change view
		break;
	case('aerobics_GET'):
		//change model
		//change view
		break;
	
	//tracker signup & signin included in '_nav-switches'
	
	//default page link
	default:
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
