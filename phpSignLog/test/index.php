<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Scrolling Nav - Start Bootstrap Template</title>
 
    <link rel="shortcut icon" href="/favicon.ico" type="images/x-icon" /> 
 
    <link href="css/styleBanner.css" rel="stylesheet">
 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>
<body style="background-color:  #F8F8F8  ">
 
<?php include("menu.php"); ?>
    <div style="top:85px;" id="my_carousel" class="carousel slide" data-ride="carousel">
<!-- Slides -->
<div class="carousel-inner">
<!-- Page 1 -->
<div class="item active"> 
<div class="carousel-page">
<img src="/images/bootstrap.png" class="img-responsive" style="margin:0px;" />
</div>
<div class="carousel-caption">Page 1 de présentation</div>
</div>  
<!-- Page 2 -->
<div class="item">
<div class="carousel-page"><img src="/images/twitter-bootstrap.jpg" class="img-responsive img-rounded"
style="margin:0px"  /></div>
<div class="carousel-caption">Page 2 de présentation</div>
</div> 
<!-- Page 3 -->
<div class="item"> 
<div class="carousel-page">
<img src="/images/tablette.png" class="img-responsive img-rounded"
style="margin:0px auto;max-height:100%;"  />
</div> 
<div class="carousel-caption">Page 2 de présentation</div>
</div>    
</div>
<!-- Contrôles -->
<a class="left carousel-control" href="#my_carousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#my_carousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
 
<footer style="background-color: #181818; margin-top: 86px ;height: 75px; margin-left: -40px; border-top: 1px dotted gray; box-shadow: 0px 6px 10px #888888;">
</footer>
     
<div style="height: 600px; margin-top: 70px; margin-bottom: 70px; background-color: #F0F0F0; box-shadow: 0px 0px 10px #888888; ;border-radius: 1%" class="container">
 <h1 style="margin-top: 30px; text-align: center; font-family: Shablagoo">Viens vivre une expérience <span style="color: #71da71">unique</span> ... !</h1>
  <div style="height: 300px; background-color: #F0F0F0; border-radius: 1%; margin-top:80px; box-shadow: 0px 0px 2px #888888; margin-right: 5px; margin-left:5px ">
 
    <img style="float: left; height: 200px; width: 200px; margin: 50px 60px 50px 50px; border-radius: 2%; border: 2px solid black; box-shadow: 0px 0px 5px #888888;" src="image/background.jpg"></img>
    <img style="float: left; ; height: 200px; margin: 50px 60px 50px 150px; width: 200px; border-radius: 2%; border: 2px solid black; box-shadow: 0px 0px 5px #888888;" src="image/background.jpg"></img>
    <img style="float: left; ; height: 200px; margin: 50px 60px 50px 150px; width: 200px; border-radius: 2%; border: 2px solid black; box-shadow: 0px 0px 5px #888888;" src="image/background.jpg"></img>
 
  </div> 
</div>
 
<?php include("bottom.php"); ?>
 
 
</body>
 
</html>