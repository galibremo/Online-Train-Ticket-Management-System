$(document).ready(function(){
  $("#js-div1").click(function(){
    $("#bodyarea-div").load("Trainlist.php");
  });
});

$(document).ready(function(){
  $("#js-div2").click(function(){
    $("#bodyarea-div").load("Routelist.php");
  });
});

$(document).ready(function(){
  $("#js-div3").click(function(){
    $("#bodyarea-div").load("AvailableTrainList.php");
  });
});

$(document).ready(function(){
  $("#js-div4").click(function(){
    $("#bodyarea-div").load("Vendorinfo.php");
  });
});

$(document).ready(function(){
  $("#js-div5").click(function(){
    $("#bodyarea-div").load("search.php");
  });
});
$(document).ready(function(){
  $("h3").click(function(){
    $("p").slideToggle("slow");
  });
});

function getDate()
{
  var date = new Date();
  var current_date = date.toDateString();
  document.getElementById("side-nav").innerHTML = current_date;
  return current_date;
}
