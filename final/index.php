<?php
	$tempVar = parse_url() . 'Controllers/tracker.php?action=index';
    header("Location: $tempVar");
?>