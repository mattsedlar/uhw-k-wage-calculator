<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Kaiser Optical Wage Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="SEIU-UHW" />
    <!-- Styles -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css"/>

  </head>

   <body>
    <?php include_once("analytics.php") ?>

    <main class="container" id="app-container">

    <header>
      <img src="http://go.seiu-uhw.org/l/45502/2014-12-02/2byct/45502/28054/SEIU_UHW_Logo_4C_noBG.png" alt="SEIU-UHW"/>
    </header>

    <h1>How Much Have YOU Lost With NUHW?</h1>

    <!-- CALCULATOR FORM -->

    <form id="calculator" role="form" class="form-inline">
      <div class="form-group">
        <label for="hourlywage">Current Hourly Wage:</label>
        <input name="hourlywage" type="number" id="inputHourlyWage" class="form-control" value="25.00">
      </div>
      <div class="form-group">
        <label for="hours">Average Hours per Week:</label>
        <input name="hours" type="number" id="inputHours" class="form-control" value="40">
      </div>
    </form>

    <div class="btn btn-lg btn-primary" id="calculate">Calculate</div>

    <!-- END CALCULATOR FORM -->

    <!-- BEGIN RESULTS -->

  <div class="panel panel-default">

    <div class="panel-heading">
      <h2>What You Have Lost</h2>
    </div>

    <div class="panel-body">

    <div class="bg-info">
      <h2>Total Loss to NUHW, 2012-2015: $<span id="loverall1"></span></h2>
    </div>

    <table class="table table-striped">
      <tbody>
        <thead>
          <tr>
            <td>Raises</td>
            <td>Hourly Wage</td>
            <td>Loss</td>
          </tr>
        <tr>
          <td>October 2012</td>
          <td id="2012"></td>
          <td id="l2012"></td>
        </tr>
        <tr>
          <td>October 2013</td>
          <td id="2013"></td>
          <td id="l2013"></td>
        </tr>
        <tr>
          <td>October 2014</td>
          <td id="2014"></td>
          <td id="l2014"></td>
        </tr>
    </table>
    </div>

    </div> <!-- END PANEL -->

    <h2>What You Will Lose</h2>

    <div class="bg-info">
      <h2>Total Loss to NUHW, 2012-2018: $<span id="loverall2"></span></h2>
    </div>

    <table class="table table-striped">
      <tbody>
        <thead>
          <tr>
            <td>Raises</td>
            <td>Hourly Wage</td>
            <td>Loss</td>
          </tr>
        <tr>
          <td>October 2015</td>
          <td id="2015"></td>
          <td id="l2015"></td>
        </tr>
        <tr>
          <td>October 2016</td>
          <td id="2016"></td>
          <td id="l2016"></td>
        </tr>
        <tr>
          <td>October 2017</td>
          <td id="2017"></td>
          <td id="l2017"></td>
        </tr>
    </table>



    </main> <!-- container -->

    <!-- LOADING JAVASCRIPT -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/calculate.js"></script>
  </body>

</html>
