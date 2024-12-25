<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Hair Salon</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body{
            background-color: black;
        }
        .container-fluid{
            display: flex;
        }
        
        
        .about-description {
            font-size: 20px;
            color:black;
            font-weight: bolder;
            margin-bottom: 40px;
        }
        .services-list {
            display: flex;
            justify-content: space-around;
            margin-bottom: 50px;
        }
        .service-item {
            background-color:burlywood;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 22%;
            animation: bounce 1s ease-in-out infinite;

        }
        .service-item h4 {
            color:lightcyan;
            font-size: 22px;
            margin-bottom: 10px;
        }
    
        .service-item:hover {
  transform: scale(1.05); /* Slightly enlarge the card */
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Enhance shadow */
  background-color:grey; /* Light background change */
  color: white;
}
.col h2{
    color:blue;
}

        .service-item p {
            color:black;
        }
        .service-item p:hover {
            color:white;
        }
        .last-section {
            background-color:#253342 ;
            padding: 50px 0;
            text-align: center;
        }
        .last-section h3 {
            font-size: 28px;
            color:lightyellow;
            margin-bottom: 20px;
        }
        .last-section p {
            font-size: 20px;
            color:white;
        }
        body{
            background-color:#253342;
            color: white;
        }
        .col img{
            height: 600px;
            width:650px;
        
        }
    </style>
</head>
<body>
 <?php
include 'navbars.html';
 ?>
    <!-- About Section -->
    
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col">
            <h2>Welcome to AV Unisex Salon</h2>
            <p class="about-description">We are a passionate team of expert stylists offering a wide range of high-quality services tailored to meet your unique needs. Whether you're here for a simple cut or a complete makeover, we're committed to making you look and feel your best.We are a passionate team of expert stylists offering a wide range of high-quality services tailored to meet your unique needs. Whether you're here for a simple cut or a complete makeover, we're committed to making you look and feel your best We are a passionate team of expert stylists offering a wide range of high-quality services tailored to meet your unique needs. Whether you're here for a simple cut or a complete makeover, we're committed to making you look and feel your best We are a passionate team of expert stylists offering a wide range of high-quality services tailored to meet your unique needs. Whether you're here for a simple cut or a complete makeover, we're committed to making you look and feel your best We are a passionate team of expert stylists offering a wide range of high-quality services tailored to meet your unique needs. Whether you're here for a simple cut or a complete makeover, we're committed to making you look and feel your best</p>
            <p>
        </div>
        <div class="col"><img src="image/main.png">
        </div>
    </div>
</div>
            
            <!-- Services Section -->
            <div class="services-list">
                <div class="service-item">
                    <h4>Haircuts</h4>
                    <p>Precision cuts that suit your face shape and style preferences.</p>
                </div>
                <div class="service-item">
                    <h4>Coloring</h4>
                    <p>From vibrant shades to natural hues, we create stunning color transformations.</p>
                </div>
                <div class="service-item">
                    <h4>Styling</h4>
                    <p>Get your hair styled for any occasion with our expert styling services.</p>
                </div>
                <div class="service-item">
                    <h4>Treatments</h4>
                    <p>Revitalize your hair with nourishing treatments for smooth, shiny results.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="last-section">
        <div class="container">
            <h3>Our Mission</h3>
            <p>"To provide exceptional, personalized beauty services that enhance our clients' natural beauty and confidence" </p>
            <p>"To become the most sought-after salon in [City], known for innovation and unparalleled customer experience"</p> 
            <p>"To enhance the inner beauty and confidence in our clients by using state-of-art practices and superior quality products" 
</p>
        </div>
    </div>

<?php
include 'footersalon.html';
?>
</body>
</html>
