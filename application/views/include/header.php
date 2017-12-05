<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo config_item('web_title'); ?></title>
        <link href='<?php echo config_item('img'); ?>favicon.png' type='image/x-icon' rel='shortcut icon'>
        <link href="<?php echo config_item('bootstrap'); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo config_item('bootstrap'); ?>css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo config_item('font_awesome'); ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo config_item('css'); ?>style-gue.css" rel="stylesheet">
         <link href="<?php echo config_item('css'); ?>slider-gue.css" rel="stylesheet">
        <script src="<?php echo config_item('js'); ?>jquery.min.js"></script>
        <script>
            var habiscuy;
            $(document).on({
                ajaxStart: function () {
                    habiscuy = setTimeout(function () {
                        $("#LoadingDulu").html("<div id='LoadingContent'><i class='fa fa-spinner fa-spin'></i> Mohon tunggu ....</div>");
                        $("#LoadingDulu").show();
                    }, 500);
                },
                ajaxStop: function () {
                    clearTimeout(habiscuy);
                    $("#LoadingDulu").hide();
                }
            });
        </script>
        
       
        
       



    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">LayananOke</a>

                </div>
                <ul class="nav navbar-nav">


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Kategori Layanan</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Daftar</a></li>
                </ul>
            </div>
        </nav> 

       <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
 
  <img src="<?php echo config_item('img'); ?>img_mountains_wide.png" style="width:100%"/>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
   <img src="<?php echo config_item('img'); ?>img_fjords_wide.png" style="width:100%" />
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo config_item('img'); ?>img_nature_wide.png" style="width:100%"/>
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
