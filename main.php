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

    <title><?php echo 'Official '.$demAdj.' Main'?></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
  </head>
<!-- NAVBAR ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><?php echo 'Official '.$demAdj.' Website'?></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="../Babylatia/">Home</a></li>
                <li class="active"><a href="main.php">Main</a></li>
                <li><a href="babylstats.php">Stats</a></li>
                <li><a href="http://www.nationstates.net/nation=babylatia/detail=factbook/id=290732">Wiki</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
            <img alt="Babylae Flag" src="images/BabylFlag_v1_website_2.png" style="width: 3200px; height: 2000px">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $fullname; ?></h1>
              <p>Note: This site is still being built, and some of the links do not function.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div> 
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Kaeto Ashwar</h2>
          <p>Kaeto Ashwar is the Bytaen of Babylatia. He is from the House Ashwar, with a direct connection to House Skarentel. He takes a role similar to a president, arguably a few dictator-esque powers.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Military</h2>
          <p>In Babylatia, defense is taken quite seriousily. Around the border, there are defense nodes, usually consisting of AA Turrets and Rapid Turrets. All of the nodes, even the ones further inland, and part of the defense net.</p>
          <p><a class="btn btn-default" href="miltstats.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Research</h2>
          <p>Babylatia prides itself on its high level of technology. The nation poured trillions into a super computer so powerful it became sentient. Babyl, the orbital with a WoMD and state-of-the-art observational modules, is another point of pride.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">The <?php echo $demAdj; ?> National Animal. <span class="text-muted">The Pachycephalosaurus Wyomingensis.</span></h2>
          <p class="lead">This is the National Animal of Babylatia. For a long period of time, it was the main feature of previous flags. <a href="/pachy.php">Pachy Details</a>.</p>
        </div>
        <div class="col-md-5">
          <img alt="http://www.dinosaurfact.net/Pictures/Pachycephalosaurus2.jpg" src="images/Pachycephalosaurus.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
       </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">International Relations  <span class="text-muted">Diplomacy</span></h2>
          <p class="lead">Babylatia is a center for International Relations. In the past few years, many internations peace talks, trials, and treaty signing have occured. Babylatia is a proud member of the World Assembly, and a member of the ITEA.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Scientific Research <span class="text-muted">Super Computer.</span></h2>
          <p class="lead">Babylatia vaporized its entire Scientific Research Funds in one project. That project? Building the most advanced super computer. A few months after it was switched on, it became sentient, and reaked havoc on the Babylatia intranet.</p>
        </div>
        <div class="col-md-5">
            <img alt="Code" src="images/code.JPG">
        </div>
      </div>

      <hr class="featurette-divider"/>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p> class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


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
