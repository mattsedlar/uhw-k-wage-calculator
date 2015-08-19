data = {
  y2012: {
  raise: 1.03,
  NUHWdues: 0.015,
    UHWdues: 0.02
  },
  y2013: {
  raise: 1.03,
  NUHWdues: 0.015,
    UHWdues: 0.02
  },
  y2014:  {
  raise: 1.03,
  NUHWdues: 0.015,
    UHWdues: 0.02
  },
  y2015: {
  raise: 1.03,
  NUHWdues: 0.015,
    UHWdues: 0.02
  },
  y2016: {
  raise: 1.03,
  NUHWdues: 0.015,
    UHWdues: 0.02
  },
  y2017: {
  raise: 1.04,
  NUHWdues: 0.015,
    UHWdues: 0.02
  }

};

var basewage = { wage: $("#inputHourlyWage").val() },
    income = { hours: $("#inputHours").val() };

$(document).ready(function() {


  var plotraises = function(w) {

    // Calculating theoretical raises

    w.w2012 = (w.wage * data.y2012.raise);
    w.w2013 = (w.w2012 * data.y2013.raise);
    w.w2014 = (w.w2013 * data.y2014.raise);
    w.w2015 = (w.w2014 * data.y2015.raise);
    w.w2016 = (w.w2015 * data.y2016.raise);
    w.w2017 = (w.w2016 * data.y2017.raise);

    // plotting on document

    $("#2012").html(
      "$" + w.w2012.toFixed(2)
    );

    $("#2013").html(
      "$" + w.w2013.toFixed(2)
    );

    $("#2014").html(
      "$" + w.w2014.toFixed(2)
    );

    $("#2015").html(
      "$" + w.w2015.toFixed(2)
    );

    $("#2016").html(
      "$" + w.w2016.toFixed(2)
    );

     $("#2017").html(
      "$" + w.w2017.toFixed(2)
    );

  }

  var NUHWdues = function(h) {

    dues = [(h.s2012 * data.y2012.NUHWdues)/12,
            (h.s2013 * data.y2013.NUHWdues)/12,
            (h.s2014 * data.y2014.NUHWdues)/12,
            (h.s2015 * data.y2015.NUHWdues)/12,
            (h.s2016 * data.y2016.NUHWdues)/12,
            (h.s2017 * data.y2017.NUHWdues)/12];

    var l = dues.length;

    // loop through the dues to check for dues caps

    for(var i = 0; i < l; i++) {

      if (dues[i] >= 98) { dues[i] = 98 * 12; }

      else if (dues[i] <= 25) { dues[i] = 25 * 12; }

      else { dues[i] = dues[i] * 12 }

    }

    h.NUHW2012 = dues[0];
    h.NUHW2013 = dues[1];
    h.NUHW2014 = dues[2];
    h.NUHW2015 = dues[3];
    h.NUHW2016 = dues[4];
    h.NUHW2017 = dues[5];
  }

  var UHWdues = function(h) {

    dues = [(h.s2012 * data.y2012.UHWdues)/12,
            (h.s2013 * data.y2013.UHWdues)/12,
            (h.s2014 * data.y2014.UHWdues)/12,
            (h.s2015 * data.y2015.UHWdues)/12,
            (h.s2016 * data.y2016.UHWdues)/12,
            (h.s2017 * data.y2017.UHWdues)/12];


    var l = dues.length;

    // loop through the dues to check for dues caps

    for(var i = 0; i < l; i++) {

      if (dues[i] >= 110) { dues[i] = 110 * 12; }

      else if (dues[i] <= 32) { dues[i] = 32 * 12; }

      else { dues[i] = dues[i] * 12 }

    }

    h.UHW2012 = dues[0];
    h.UHW2013 = dues[1];
    h.UHW2014 = dues[2];
    h.UHW2015 = dues[3];
    h.UHW2016 = dues[4];
    h.UHW2017 = dues[5];

  }

  var plotsalary = function(h) {

    // Plotting salaries

    h.basesalary = (basewage.wage * h.hours * 52);
    h.s2012 = (basewage.w2012 * h.hours * 52);
    h.s2013 = (basewage.w2013 * h.hours * 52);
    h.s2014 = (basewage.w2014 * h.hours * 52);
    h.s2015 = (basewage.w2015 * h.hours * 52);
    h.s2016 = (basewage.w2016 * h.hours * 52);
    h.s2017 = (basewage.w2017 * h.hours * 52);

    NUHWdues(h);
    UHWdues(h);

    // plotting on document

    var l2012 = ((h.s2012 - h.basesalary) - (h.UHW2012 - h.NUHW2012)).toFixed(2),
        l2013 = ((h.s2013 - h.basesalary) - (h.UHW2013 - h.NUHW2013)).toFixed(2),
        l2014 = ((h.s2014 - h.basesalary) - (h.UHW2014 - h.NUHW2014)).toFixed(2),
        l2015 = ((h.s2015 - h.basesalary) - (h.UHW2015 - h.NUHW2015)).toFixed(2),
        l2016 = ((h.s2016 - h.basesalary) - (h.UHW2016 - h.NUHW2016)).toFixed(2),
        l2017 = ((h.s2017 - h.basesalary) - (h.UHW2017 - h.NUHW2017)).toFixed(2);

    $("#l2012").html(
      "$" + l2012
    );

    $("#l2013").html(
      "$" + l2013
    );

    $("#l2014").html(
      "$" + l2014
    );

    $("#l2015").html(
      "$" + l2015
    );

    $("#l2016").html(
      "$" + l2016
    );

    $("#l2017").html(
      "$" + l2017
    );

    $("#loverall1").html(
      (l2012*1) + (l2013*1) + (l2014*1)
      );

    $("#loverall2").html(
      (l2012*1) + (l2013*1) + (l2014*1) + (l2015*1) + (l2016*1) + (l2017*1)
      );

  }


  plotraises(basewage);
  plotsalary(income);


  // CALCULATE FUNCTION

  $("#calculate").click( function() {

    basewage = { wage: $("#inputHourlyWage").val() };
    income = { hours: $("#inputHours").val() };

    plotraises(basewage);
    plotsalary(income);

  });


});
