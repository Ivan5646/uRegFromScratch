$(document).ready(function() {
  // php logout


  $(".loginLi").on("click", function(){
    $(".loginForm").css({"display": "block"})
  });

  $(".signUp").on("click", function(){
    $(".registerForm").css({"display": "block"})
  });


  // tabs
  var tabBtn1 = $("#tabBtn1");
  var tabBtn2 = $("#tabBtn2");
  $(".registerForm").css({"display": "block"});
  tabBtn1.addClass("activeTabBtn");

  tabBtn1.on("click", function(){
    $(".registerForm").css({"display": "block"});
    $(".loginForm").css({"display": "none"});
    tabBtn1.addClass("activeTabBtn");
    tabBtn2.removeClass("activeTabBtn");
  });
  tabBtn2.on("click", function(){
    $(".loginForm").css({"display": "block"});
    $(".registerForm").css({"display": "none"});
    tabBtn2.addClass("activeTabBtn");
    tabBtn1.removeClass("activeTabBtn");
  });


});