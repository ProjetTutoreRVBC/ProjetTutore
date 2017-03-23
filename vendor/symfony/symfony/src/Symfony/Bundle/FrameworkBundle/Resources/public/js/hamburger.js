$(document).ready(function() {
  $(".cross").hide();
  $(".menu").hide();
  $(".hamburger").click(function() {
    $(".slidingdiv").slideToggle("slow", function() {
      
      $(".hamburger").hide();
      $(".cross").show();
    });
  });

  $(".cross").click(function() {
    $(".slidingdiv").slideToggle("slow", function() {
      $(".cross").hide();
      $(".hamburger").show();
    });
  });

});