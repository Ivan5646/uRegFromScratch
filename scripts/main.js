$(document).ready(function() {
  // php logout


  $(".loginLi").on("click", function(){
    $(".forms").css({"display": "block"});
  });

  $(".signUp").on("click", function(){
    $(".forms").css({"display": "block"});
    
  });


  // tabs
  var tabBtn1 = $("#tabBtn1");
  var tabBtn2 = $("#tabBtn2");
  $(".registerForm").css({"display": "block"});
  tabBtn1.addClass("activeTabBtn");

  tabBtn1.on("click", function(){
    $(".registerForm").fadeIn(600);
    $(".loginForm").css({"display": "none"});
    tabBtn1.addClass("activeTabBtn");
    tabBtn2.removeClass("activeTabBtn");
  });
  tabBtn2.on("click", function(){
    $(".loginForm").fadeIn(600);
    $(".registerForm").css({"display": "none"});
    tabBtn2.addClass("activeTabBtn");
    tabBtn1.removeClass("activeTabBtn");
  });

  // close fomrs if clicked outside
  window.onclick = function close(event){
    if( event.target.matches(".signUp a") || event.target.matches(".loginLi a") || event.target.matches(".forms") ){
      $(".forms").css({"display": "block"}); 
    }else if(event.target.matches("body")){
      $(".forms").css({"display": "none"});
    }
  }

});