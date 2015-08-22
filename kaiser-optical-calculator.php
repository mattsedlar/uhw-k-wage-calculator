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
      <h1>SEIU-UHW</h2>
    </header>

    <div id="subhed">
      <h1>How Much Have YOU Lost With <span style="color:red">NUHW</span>?</h1>
    </div>

    <!-- CALCULATOR FORM -->

    <form id="calculator" role="form" class="form-inline group">

          <div class="form-group col-xs-6">
            <label for="hourlywage">Hourly<br/>Wage</label>
            <input name="hourlywage" type="number" id="inputHourlyWage" class="form-control" value="25.00">
          </div>
              <div class="form-group col-xs-6">
                <label for="hours">Hours<br/>per Week</label>
                <input name="hours" type="number" id="inputHours" class="form-control" value="40">
              </div>
    </form>

    <div class="btn btn-lg btn-primary" id="calculate">Calculate</div>

    <!-- END CALCULATOR FORM -->

    <!-- BEGIN RESULTS -->

  <div class="panel panel-default">

    <div class="panel-heading">
      <h2>What You Have Lost <span class="pull-right">
                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                             </span></h2>
    </div>

    <div class="panel-body" id="lost">

    <div class="bg-info">
      <h2>Total Loss, 2012-2015:</h2>
      <p>$<span id="loverall1"></span></p>
    </div>

    <table class="table table-striped">
      <tbody>
        <thead>
          <tr>
            <td><b>Annual Raise</b></td>
            <td><b>Hourly Wage</b></td>
            <td><b>Loss</b></td>
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

  <div class="panel panel-default">

    <div class="panel-heading">

      <h2>What You Will Lose <span class="pull-right">
                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                             </span></h2>

    </div>

    <div class="panel-body">

    <div class="bg-info">
      <h2>Total Loss, 2012-2018:</h2>
      <p>$<span id="loverall2"></span></p>
    </div>

    <table class="table table-striped">
      <tbody>
        <thead>
          <tr>
            <td><b>Annual Raise</b></td>
            <td><b>Hourly Wage</b></td>
            <td><b>Loss</b></td>
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

    </div>

    </div> <!-- END PANEL -->

    <p>NOTE: Numbers provided above are estimates, and do not reflect hourly differentials, overtime, step increases, PSP bonuses or other premium pay.  These estimates do take into account a 2% dues rate (as opposed to NUHW's 1.5% rate) with an annual increase in the maximum monthly dues rate.  A day is based off of an 8 hour shift.</p>


    </main> <!-- container -->

    <!-- LOADING JAVASCRIPT -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/calculate.js"></script>
  </body>

</html>
