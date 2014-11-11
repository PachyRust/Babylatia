<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include 'stats.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo 'Official '.$demAdj.' Stats'?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="babylStats.css" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo 'Official '.$demAdj.' Website'?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./">Home</a></li>
            <li><a href="main.php">Main</a></li>
            <li class="active"><a href="babylstats.php">Stats</a></li>
            <li><a href="http://www.nationstates.net/nation=babylatia/detail=factbook/id=290732">Wiki</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1><?php echo 'Official '.$demAdj.' Website - Stats'?></h1>
        <p><?php echo $fullname; ?>'s statistics are displayed here.</p>
        <p>Note: Some links may not works.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="http://www.nationstates.net/page=blank?lookup_newspaper=2092" role="button">Babylatia News &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->
      



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
