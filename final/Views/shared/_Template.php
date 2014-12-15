<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Fitiness Tracker</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../content/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>

		<!-- importing angularJS/JQuery @top-of-header for compilation reasons -->
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
 		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<div id="top-nav">
			<? include __DIR__ . '/../../inc/_nav.html'; ?>
		</div>
		
			<? include __DIR__ . '/../' . $view; ?>
			
			
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '835356389849710',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   

	function statusChangeCallback(userData){
		if (response.status === 'connected') {
    // Logged into your app and Facebook.
  } else if (response.status === 'not_authorized') {
    // The person is logged into Facebook, but not your app.
  } else {
    // The person is not logged into Facebook, so we're not sure if
    // they are logged into this app or not.
  }
	}
	
	
	var $socialScope = null
	function checkLoginState() {
 		FB.getLoginStatus(function(response) {
    		 $socialScope.status = response;
				    if (response.status === 'connected') {
				      FB.api('/me', function(response) {
					      $socialScope.me = response;
					      $socialScope.$apply();
					      console.log(response);
					    });
				    }
  		});
	}
</script>
			
			
		<!--login inside '_modals' -->	
			
		<hr>
		<footer>
			<p>
				&copy; Christopher L. Inglese 2014 
				<div
 				 	class="fb-like"
  					data-send="true"
  					data-width="450"
  					data-show-faces="true">
				</div>
			</p>
		</footer>
	</div>
	
	<? include __DIR__ . '/../../inc/_modals.html'; ?>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../content/js/bootstrap.min.js"></script>
		<script type="../content/text/javascript">$("[data-toggle=tooltip]").tooltip();</script>
		<script type="../content/text/javascript">$("[data-toggle=popover]").popover();</script>

<style>
	.form-horizontal{
		margin-left:  15px;
		margin-right: 15px;
	}
</style>

<script>
	$("#logIn").css("z-index", "1500");
	$("#signUp").css("z-index", "1500");
	$("#trackerInfo").css("z-index", "1500");
</script>

	</body>
</html>
