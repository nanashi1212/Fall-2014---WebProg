<?php
//rename as 'Controllers' if errors occur
include_once __DIR__ . '/../inc/_all.php';
include_once __DIR__ . '/../Models/fitness.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

include_once __DIR__ . '/../inc/_nav-switches.php';

switch ($action . '_' . $method) {
	//no actions yet -- will add functionality later (adding exersizes, ect.)
	//POST $method handled here here
	
	
	//do not define default! (already defined in _nav-switches)
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
