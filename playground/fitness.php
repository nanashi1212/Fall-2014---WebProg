<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fitiness Tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
  	
    <ul class="nav nav-pills nav-stacked">
  <li><a href="index.php">Home</a></li>
  <li><a href="nutrition.php">Nut</a></li>
  <li class="active"><a href="fitness.php">Fit</a></li>
  <li><a href="tracker.php">Trak</a></li>
  <li><a href="about-us.php">About</a></li>
</ul>

    <div class="jumbotron">
      <div class="container">
        <h1>Fitness</h1>
        <p>(description of fitness)</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-10">
        <img src="anaerobic1.jpg" alt="weights" style="float:left">
          <h2>Anaerobics</h2>
          <p>(detailed description of anaerobics)</p>
          <p><a class="btn btn-default" href="anaerobics.php" role="button">View exercises &raquo;</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
        <img src="aerobic1.jpg" alt="running" style="float:left">
          <h2>Aerobics</h2>
          <p>(detailed description of aerobics)</p>
          <p><a class="btn btn-default" href="aerobics.php" role="button">View exercises &raquo;</a></p>
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
