<?php
//rename as 'Controllers' if errors occur
include_once __DIR__ . '/../inc/_all.php';
include_once __DIR__ . '/../Models/nutrition.php';

$view = isset($_REQUEST['view']) ? $_REQUEST['view'] : null;
$controller = null;

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$process = isset($_REQUEST['process']) ? $_REQUEST['process'] : null;
$id = isset($_REQUEST['food-id']) ? $_REQUEST['food-id'] : null;
$food = isset($_REQUEST['food']) ? $_REQUEST['food'] : null;

include_once __DIR__ . '/../inc/_nav-switches.php';

switch ($process . '_' . $id) {
	case("store-food_1"):
		nutrition::processFood();
		break;
}

if($controller != "nutrition.php" && $controller != null){
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
