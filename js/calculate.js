data = {
  y2012: {
  raise: 1.03,
  NUHWdues: 0.015
  },
  y2013: {
  raise: 1.03,
  NUHWdues: 0.015
  },
  y2014:  {
  raise: 1.03,
  NUHWdues: 0.015
  },
  y2015: {
  raise: 1.03,
  NUHWdues: 0.015
  },
  y2016: {
  raise: 1.03,
  NUHWdues: 0.015
  },
  y2017: {
  raise: 1.04,
  NUHWdues: 0.015
  }

};

var basewage = { wage: $("#inputHourlyWage").val() },
    avghours = { hours: $("#inputHours").val() };

$(document).ready(function() {


  var plotraises = function(w) {

    // Calculating theoretical raises

    w.w2012 = (w.wage * data.y2012.raise).toFixed(2);
    w.w2013 = (w.w2012 * data.y2013.raise).toFixed(2);
    w.w2014 = (w.w2013 * data.y2014.raise).toFixed(2);

    // plotting on document

    $("#2012").html(
      "$" + w.w2012
    );

    $("#2013").html(
      "$" + w.w2013
    );

    $("#2014").html(
      "$" + w.w2014
    );

  }

  var NUHWdues = function(h) {

    dues = [(h.s2012 * data.y2012.NUHWdues)/12,
            (h.s2013 * data.y2013.NUHWdues)/12,
            (h.s2014 * data.y2014.NUHWdues)/12];

    var l = dues.length;

    // loop through the dues to check for caps

    for(var i = 0; i < l; i++) {

    if (dues[i] > 98) { dues[i] = 98 * 12; }
    if (dues[i] < 25) { dues[i] = 25 * 12; }

      else { dues[i] = dues[i] * 12 }

    }

    h.NUHW2012 = dues[0].toFixed(2);
    h.NUHW2013 = dues[1].toFixed(2);
    h.NUHW2014 = dues[2].toFixed(2);

  }

  var plotsalary = function(h) {

    // Plotting salaries

    h.basesalary = (basewage.wage * h.hours * 52).toFixed(2);
    h.s2012 = (basewage.w2012 * h.hours * 52).toFixed(2);
    h.s2013 = (basewage.w2013 * h.hours * 52).toFixed(2);
    h.s2014 = (basewage.w2014 * h.hours * 52).toFixed(2);

    NUHWdues(h);

    // plotting on document

    $("#l2012").html(
      "$" + (h.s2012 - h.basesalary)
    );

    $("#l2013").html(
      "$" + (h.s2013 - h.basesalary)
    );

    $("#l2014").html(
      "$" + (h.s2014 - h.basesalary)
    );

  }



  plotraises(basewage);
  plotsalary(avghours);


});
