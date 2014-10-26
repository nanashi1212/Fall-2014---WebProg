<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fitiness Tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
  	
  	
   <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="nutrition.php">Nutrition</a></li>
        <li><a href="fitness.php">Fitness</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 1 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tracker.php">tracker</a></li>
            <li><a href="about-us.php">about</a></li>
            <li class="divider"></li>
            <li><a href="#">test-link 1</a></li>
            <li class="divider"></li>
            <li><a href="#">test-link 2</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit (does nothing)</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div class="jumbotron">
      <div class="container">
        <h1>About Us</h1>
        <p>(about us description)</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Contact Us</h2>
          <p>(contact us description)</p>
          <p><a class="btn btn-default" href="#" role="button" data-toggle="collapse" data-target="#toggle-it">Email us &raquo;</a></p>
       		<div id="toggle-it" class="collapse">This button does nothing yet!</div>
       
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Christopher L. Inglese 2014</p>
      </footer>
    </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
