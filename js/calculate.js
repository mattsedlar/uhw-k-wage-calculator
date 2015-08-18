data = {
  y2012: {
   raise: 1.03
  },
  y2013: {
   raise: 1.03
  },
  y2014:  {
   raise: 1.03
  },
  y2015: {
   raise: 1.03
  },
  y2016: {
   raise: 1.03
  },
  y2017: {
   raise: 1.04
  }

};

$(document).ready(function() {

  // Calculating theoretical raises

  $("#2012").html(
    "$" + $("#inputHourlyWage").val() * data.y2012.raise
  );

  $("#2013").html(
    "$" + ($("#2012").text().replace("$","") * data.y2013.raise).toFixed(2)
  );

  $("#2014").html(
    "$" + ($("#2013").text().replace("$","") * data.y2014.raise).toFixed(2)
  );


});
