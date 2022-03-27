// $(".register").click(function(){
//   $(".register-form").show();
//   $(".login-form").hide();
// });

// $(".submit").click(function(){
//   $(".register-form").hide();
//   $(".login-form").show();
// });

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });