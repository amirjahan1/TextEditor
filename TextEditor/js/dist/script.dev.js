"use strict";

$("button#buttonForm").click(function (event) {
  event.preventDefault();
  $(".showText").html('<img class="loading" src="../35771931234507.564a1d2403b3a.gif"/>');
  $.ajax({
    type: $("form").attr("method"),
    url: $("form").attr("action"),
    data: $("form").serialize(),
    success: function success(response) {
      $(".showText").html(response);
      console.log(response);
    },
    error: function error() {
      alert("ERROR IN AJAX");
    }
  });
});