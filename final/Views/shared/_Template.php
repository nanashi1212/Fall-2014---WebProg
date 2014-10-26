<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fitiness Tracker</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href="../content/css/bootstrap.min.css" rel="stylesheet">
		<link href="jumbotron.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>

	<body>
		<div id="top-nav">
			<? include __DIR__ . '/../../inc/_nav.html'; ?>
		</div>
			<? include __DIR__ . '/../' . $view; ?>
		<hr>
		<footer>
			<p>
				&copy; Christopher L. Inglese 2014
			</p>
		</footer>
	</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../content/js/bootstrap.min.js"></script>
		<script type="../content/text/javascript">$("[data-toggle=tooltip]").tooltip();</script>
		<script type="../content/text/javascript">$("[data-toggle=popover]").popover();</script>
	</body>
</html>
