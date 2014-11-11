<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <?php include 'stats.php'; ?>
    <title>Babylatia</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootCover.css" rel="stylesheet">
    <link href="babylStyle.css" rel="stylesheet">
  </head>

  <body>
      <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><?php echo 'Official '.$demAdj.' Website'?></h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="../Babylatia/">Home</a></li>
                <li><a href="main.php">Main</a></li>
                <li><a href="babylstats.php">Stats</a></li>
                <li><a href="http://www.nationstates.net/nation=babylatia/detail=factbook/id=290732">Wiki</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading"><?php echo $fullname; ?></h1>
            <p class="lead">This is the Official Babylae Website, managed by the Ministry of Computer Science.</p>
            <p class="lead">
              <a href="http://www.nationstates.net/nation=babylatia" class="btn btn-lg btn-default">NationStates</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><?php echo $motto?></p>
            </div>
          </div>

        </div>

      </div>

    </div>
    	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
