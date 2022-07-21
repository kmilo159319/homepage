$(document).ready(function(){
    $(".veen .rgstr-btn button").click(function(){
        $('.veen .wrapper').addClass('move');
        $(".veen .login-btn button").removeClass('active');
        $(this).addClass('active');

    });
    $(".veen .login-btn button").click(function(){
        $('.veen .wrapper').removeClass('move');
        $(".veen .rgstr-btn button").removeClass('active');
        $(this).addClass('active');
    });



});

$.ajaxSetup({ headers: { 'Autorize': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTQ4ODVkYTYyNzc2YzhmNWM5YmE3ZGU0NjI3MDM0N2QwYWE3YTM2ODZlOWRkYTdlZmFiNGRhMzQyMTViMjcxN2EyYTNjZjRiYTJmMThiYmEiLCJpYXQiOjE2NDUxMjMzNTAuMzc4MTI1LCJuYmYiOjE2NDUxMjMzNTAuMzc4MTMzLCJleHAiOjE2NzY2NTkzNTAuMjM3NDkxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DWuNvHBa6onyNRJsnH2A3mQLXxAjuw7zH9M7Hxsxpvk8b_Q-eLHV6hx_pbUON80XDDVY_gbFr2_ozRzd4EAdPh0dcVvFriiH6G8WBgrZoBbYL18IHsP6oUJk0pA1V2qhtCH4adsJlnK2VNTeJqIa9TDMMZGKDkLzfQ728D10_9ZVprnuHBVxU1vnJ4WD-AI71QT5hF7RFP-wQsYolNH2V7Al6YEEqnkQ_BeHvePaJVvX57HjuxU8o7fIUnxZxKcn27Th_M6HslHdV1uW9fet7Ke9wbAmubdQe4Hy2XLh_AWahC5MwJ_ssF4q1oSlAbxTgvavcrd_LIoC9QYFI_yJRf7TCPHmDukMRT-AqZBTNzr26ZaslDR_Ugj2uedqbEQVt3b5UN4UyXW6QuNQflbn8kJuhnwAuYTdc3YgdcPWmblATUcyaATceCs1n5knlAkN9KHV-WgVRF0bXtqrJcujCEGeHflCRHNmu9YBc6lLNji9QiMV82v1USderzB_n-cWP0TFrargpJCLW4lLUPi6XQ4mFo_nmE8JItCbiQvCivLGLTGgiTLeUqMme4gDY_DjcEsKWVgw5g2ldglq64xX7bb7y_PlLFT-99eI7hvChQsag4ayy3sH1E7i2Bdt3nzrqiJ1heOV13hSl11XWy33oYAmlcgx-9KNkEFZiISj36c' }});


