<?php
//rename as 'Controllers' if errors occur
include_once __DIR__ . '/../inc/_all.php';
include_once __DIR__ . '/../Models/fitness.php';

$view = isset($_REQUEST['view']) ? $_REQUEST['view'] : null;
$controller=null;

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';

include_once __DIR__ . '/../inc/_nav-switches.php';

switch ($action . '_' . $method) {
		//process input
}

if($controller != "fitness.php" && $controller != null){
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
