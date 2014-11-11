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
            <li><a href="babylstats.php">Stats</a></li>
            <li><a href="http://www.nationstates.net/nation=babylatia/detail=factbook/id=290732">Wiki</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <div class="jumbotron">
        <h1><?php echo 'Official '.$demAdj.' Website - Military'?></h1>
        <p><?php echo $fullname; ?> Military.</p>
        <p>Note: Some links may not works.</p>
        <p class="defcon">DEFCON - <?php echo $defcon; ?></p>
        <p>
          <a class="btn btn-lg btn-primary" href="http://www.nationstates.net/nation=babylatia/detail=factbook/id=284425" role="button">Factbook &raquo;</a>
        </p>
      </div>
    </div> <!-- /container -->
    <div class='stats'>
    <div class='row'>
    <div class='col-md-4'>
      <h2>Military</h2>
      <h2>Current Active Forces <?php echo '<code>'.$actForces.'</code>'; ?></h2>
      <h2>Current Reserve Forces <?php echo '<code>'.$resForces.'</code>'; ?></h2>
      <h2>Current Total Forces <?php echo '<code>'.$forces.'</code>'; ?></h2>
      <div class='sub'>
        <h3>Infantry <?php echo '<code>'.$infantry.'</code>'; ?></h3>
        <div class='sub'>
          <h4>Combat Medics <?php echo '<code>'.$medics.'</code>'; ?></h4>
          <h4>Combat Engineers <?php echo '<code>'.$engineers.'</code>'; ?></h4>
        </div>
        <h3>Officers <?php echo '<code>'.$officers.'</code>'; ?></h3>
        <h3>Marines <?php echo '<code>'.$marines.'</code>'; ?></h3>
        <h3>Special Forces <?php echo '<code>'.$sforces.'</code>'; ?></h3>
        <h3>Military Police <?php echo '<code>'.$MP.'</code>'; ?></h3>
        <h3>Military Intelligence Agency <?php echo '<code>'.$MIA.'</code>'; ?></h3>
        <h3>Anti- Terrorism <?php echo '<code>' .$AT. '</code>'; ?></h3>
        <h3>Calvary <?php echo '<code>' .$calvary. '</code>'; ?></h3>
      </div>
    </div>
    <div class='col-md-4'>
      <h2>Defense Net</h2>
      <h2>Missile Nodes <?php echo '<code>' .$missilebases. '</code>'; ?></h2>
      <h2>ICMBs <?php echo '<code>' .$ICBM. '</code>'; ?></h2>
      <div class='sub'>
        <h3>Ballistic Missiles <?php echo '<code>' .$ballistic. '</code>'; ?></h3>
        <h3>Thermobaric Missiles <?php echo '<code>' .$thermobaric. '</code>'; ?></h3>
        <h3>Conventional Missiles <?php echo '<code>' .$conventional. '</code>'; ?></h3>
        <h3>Anti- Air Missiles <?php echo '<code>' .$conventional. '</code>'; ?></h3>
        <h3>Incendiary Missiles <?php echo '<code>' .$incendiary. '</code>'; ?></h3>
        <h3>Nuclear Missiles <?php echo '<code>' .$nukes. '</code>'; ?></h3>
      </div>
    </div>
    <div class='col-md-4'>
      <h2>Navy</h2>
      <h2>Active Naval Forces <?php echo '<code>' .$navyActive. '</code>'; ?></h2>
      <h2>Reserve Naval Forces <?php echo '<code>' .$navyReserve. '</code>'; ?></h2>
      <h2>Total Naval Forces <?php echo '<code>' .$navy. '</code>'; ?></h2>
      <h3>Navy Special Forces <?php echo '<code>' .$NSF. '</code>'; ?></h3>
      <h3>Base Staff <?php echo '<code>' .$staff. '</code>'; ?></h3>
      <h3>Fleets <?php echo '<code>' .$fleetCount. '</code>' ?></h3>
      <div class='sub'>
        <h3>Vessels per Fleet <?php echo '<code>' .$classAll. '</code>' ?></h3>
        <h4>Class 1 Vessels <?php echo '<code>' .$class1. '</code>' ?></h4>
        <h4>Class 2 Vessels <?php echo '<code>' .$class2. '</code>' ?></h4>
        <h4>Class 3 Vessels <?php echo '<code>' .$class3. '</code>' ?></h4>
        <h4>Class 4 Vessels <?php echo '<code>' .$class4. '</code>' ?></h4>
        <h4>Class 5 Vessels <?php echo '<code>' .$class5. '</code>' ?></h4>
        <h4>Class 6 Vessels <?php echo '<code>' .$class6. '</code>' ?></h4>
        <h4>Class 7 Vessels <?php echo '<code>' .$class7. '</code>' ?></h4>
        <h4>Submersible Vessels <?php echo '<code>' .$sub. '</code>' ?></h4>
        <h4>Class 9 Vessels <?php echo '<code>' .$class9. '</code>' ?></h4>
        <h4>Class 10 Vessels <?php echo '<code>' .$class10. '</code>' ?></h4>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
  	<div class="col-md-6 col-md-offset-3">
    <div class='defconDesc'>
      <p><code>DEFCON 0</code> Babylatia at normal state, peaceful intentions, Defense Net offline.</p>
      <p><code>DEFCON 1</code> Babylatia intensifies its Diplomatic actions, peaceful intentions, Defense Net arming.</p>
      <p><code>DEFCON 2</code> Babylatia arms its MIA and Special Forces, defensive intentions, Defense Net online.</p>
      <p><code>DEFCON 3</code> Babylatia mobilizes the full military forces, offensive and defensive intentions, Defense Net online, Babyl arming.</p>
      <p><code>DEFCON 4</code> Babylatia at war, offensive and defensive actions, Defense Net online, Babyl online</p>
      <p><code>DEFCON 5</code> Babylatia mobilizes reserves, all necesary actions taken, Defense Net online, Babyl acting.</p>
    </div>
    </div>
    </div>
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
