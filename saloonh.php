<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style type="text/css">
  
    

       h1{
        font-weight: bolder;
        font-size: 70px;
        color: lightyellow;
       }
       carousel-item img{
        height: 30px;
       }
      
      .container-fluid2 {
            background-color:#253342 ;
            padding: 50px 0;
            text-align: center;
        }
      .container-fluid2 h2 {
            font-size: 28px;
            color:lightyellow;
            margin-bottom: 20px;
        }
        .container-fluid2  p {
            font-size: 22px;
            color:white;
        
      
        align-content: center;
      
       }
        .container-fluid1{
            border-radius: 5px;
           }
           .col{
          animation: bounce 5s ease-in-out infinite;

           }

      
    </style>
</head>

  <?php
include 'navbars.html';

  ?>
  <body>
	<div id="carouselExampleCaptions" class="carousel slide Previous P-5" data-bs-ride="carousel ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active P-5">
      <img src="image/same1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>welcome to our website</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/same.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>"Where Style Meets Scissors".</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/same3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>"Style that speaks volumes"</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="container-fluid1">
  <div class="row p-5 text-center text-light">
   <h1> Our Services</h1>
    <div class="col p-5">
      <img src="image/hair88.png"class="d-block w-100" >
    </div>

  </div>
</div>
</div>
<div class="container-fluid2">
 <h2><center> Explore the Realm of Beauty with AV unisex Salon</h2></center>
<p>With over 162 branches nationally and internationally, Looks salon is a premium beauty salon for men and women who desire to look the best every day. Getting a makeover not only changes the appearance of a person but also brings back the lost confidence and Looks Salon would take pride in being a part of it. From beauty to grooming services, we provide a tremendous range of facilities that touches every dimension of beauty and hair treatments. Our repertoire of professional experts makes sure that all your beauty and hair questions are answered, and you leave the salon with a big smile on your face.</p>

<p>With over 6000 employees engaged in transforming your look, we make sure that all the services provided at our salons meet the international standards. Through our advice and solutions from the expertise in this array, we aim at giving the best services through our state-of-art facilities. Our professional stylists and beauty experts are constantly updated with the latest trends and fashion advices that help them to work efficiently and deliver outstanding results!</p>

<p>Give us an opportunity to serve you once, we are sure you'll love to come back to us again and be our esteemed customer forever. Fill the form or call us to book an appointment now!</p>


</div>
<?php


include 'footersalon.html';


?>


</body>
</html>
