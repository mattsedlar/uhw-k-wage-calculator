<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Kaiser Optical Wage Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="SEIU-UHW" />
    <!-- Styles -->
    <link data-require="bootstrap-css" data-semver="3.3.1" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link data-require="bootstrap@*" data-semver="3.3.2" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/styles.css"/>

  </head>

   <body>
    <?php include_once("analytics.php") ?>

    <main class="container" id="app-container">

    <header>
      <img src="http://go.seiu-uhw.org/l/45502/2014-12-02/2byct/45502/28054/SEIU_UHW_Logo_4C_noBG.png" alt="SEIU-UHW"/>
    </header>

    <h1>How Much Have YOU Lost With NUHW?</h1>

    <p>NUHW members at Kaiser Optical haven't received a raise since 2011.  Use the calculator below to see how much you have lost by sticking with NUHW.  The calculations show the annual dollar amount of the 3% raises you would have received under the SEIU-UHW contract:</p>

    <!-- CALCULATOR FORM -->

    <form id="calculator" role="form" class="form-horizontal">
      <label for="hourlywage">Current Hourly Wage:</label>
        <input name="hourlywage" type="number" id="inputHourlyWage" class="form-control" value="25.00">
      <label for="hours">Average Hours per Week:</label>
        <input name="hours" type="number" id="inputHours" class="form-control" value="40">
    </form>

    <div class="btn btn-lg btn-default" id="calculate">Calculate</div>

    <!-- END CALCULATOR FORM -->

    <!-- BEGIN RESULTS -->

    <h2>October 2012 3% Raise</h2>

    <p>Your wage would be <span id="2012"></span>.</p>
    <p>You have lost <span id="l2012"></span>.</p>

    <h2>October 2013 3% Raise</h2>

    <p>Your wage would be <span id="2013"></span>.</p>
    <p>You have lost <span id="l2013"></span>.</p>

    <h2>October 2014 3% Raise</h2>

    <p>Your wage would be <span id="2014"></span>.</p>
    <p>You have lost <span id="l2014"></span>.</p>

    <div class="bg-info">
      <h2>Total Loss to NUHW, 2012-2015: $<span id="loverall1"></span></h2>
    </div>

    <p>SEIU-UHW members just won a new contract! By sticking with NUHW, you will continue to lose the raises enjoyed by SEIU members:</p>

    <h2>October 2015 3% Raise</h2>

    <p>Your wage would be <span id="2015"></span>.</p>
    <p>You will lose <span id="l2015"></span>.</p>

    <h2>October 2016 3% Raise</h2>

    <p>Your wage would be <span id="2016"></span>.</p>
    <p>You will lose <span id="l2016"></span>.</p>

    <h2>October 2017 4% Raise</h2>

    <p>Your wage would be <span id="2017"></span>.</p>
    <p>You will lose <span id="l2017"></span>.</p>

    <div class="bg-info">
      <h2>Total Loss to NUHW, 2012-2018: $<span id="loverall2"></span></h2>
    </div>

    </main> <!-- container -->

    <!-- LOADING JAVASCRIPT -->

    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script data-require="bootstrap" data-semver="3.3.2" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/calculate.js"></script>
  </body>

</html>
