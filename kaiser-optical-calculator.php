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

    <p>Right now, our legislators need to know that their constituents &mdash; <b>and that means our families and our communities</b> &mdash; are talking about Medi-Cal and the millions of real women, children, seniors and people with disabilities who can't get access to the care they need. Share one of the stories below with your community and keep the conversation going.</p>

    <!-- CALCULATOR FORM -->

    <form id="calculator" role="form" class="form-horizontal">
      <label class="sr-only" for="hourlywage">Hourly Wage:</label>
        <input name="hourlywage" type="number" id="inputHourlyWage" class="form-control" value="25.00">
      <label class="sr-only" for="hours">Hours:</label>
        <input name="hours" type="number" id="inputHours" class="form-control" value="40">
    </form>

    <div class="btn btn-lg btn-default">Calculate</div>

    <!-- END CALCULATOR FORM -->

    <!-- BEGIN RESULTS -->

    <h2>October 2012 3% Raise</h2>

    <p>Your wage would be <span id="2012"></span>.</p>

    <h2>October 2013 3% Raise</h2>

    <p>Your wage would be <span id="2013"></span>.</p>

    <h2>October 2014 3% Raise</h2>

    <p>Your wage would be <span id="2014"></span>.</p>

    <p>Total Loss to NUHW, 2012-2015: <span id="overall"></span></p>

    </main> <!-- container -->

    <!-- LOADING JAVASCRIPT -->

    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script data-require="bootstrap" data-semver="3.3.2" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/calculate.js"></script>
  </body>

</html>
