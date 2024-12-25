<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Hair Salon</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
         background-color: #f0f0f0; 
        }
        

        .services {
            background: url('image/ser.png') no-repeat center center/cover;
            height: 300px;
            color: white;
            text-align: center;
            padding-top: 700px;
        }
        .services h1 {
            font-size: 48px;
        }
        .services-header {
            margin: 50px 0;
            text-align: center;
        }
        .service-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        .service-card img {
            width: 100%;
            height:200px;
            object-fit: cover;
        }
        .service-card-body {
            padding: 20px;
            background-color: #253342;
        }
        .service-card-title {
            font-size: 22px;
            color:whitesmoke;
            margin-bottom: 15px;
        }
        .service-card-text {
            font-size: 16px;
            color: white;
        }
        
    </style>
</head>
 

<body>
    <?php
include 'navbars.html';
 ?>

    <div class="services ">
        <h1>Our Services</h1>
        <p>Your beauty, our priority.</p>
    </div>

    <!-- Services Section -->
    <div class="container p-5">
        <div class="services-header">
            <h2>Our Hair Services</h2>
            <p>Explore our wide range of services to make you look and feel amazing!</p>
        </div>
        
        <div class="row">
            <!-- Haircuts Service -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="image/h.png" alt="Haircuts">
                    <div class="service-card-body">
                        <h4 class="service-card-title">Haircuts</h4>
                        <p class="service-card-text">Whether you want a simple trim or a complete style overhaul, our skilled stylists will give you a look that suits your personality.</p>
                    </div>
                </div>
            </div>

            <!-- Hair Coloring Service -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="image/h2.png" alt="Hair Coloring">
                    <div class="service-card-body">
                        <h4 class="service-card-title">Hair Coloring</h4>
                        <p class="service-card-text">From balayage to vibrant colors, our coloring services will give you the perfect shade and texture you've been dreaming of.</p>
                    </div>
                </div>
            </div>

            <!-- Hair Styling Service -->
             <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="image/hhh3.png" alt="Hair Styling">
                    <div class="service-card-body">
                        <h4 class="service-card-title">Hair Styling</h4>
                        <p class="service-card-text">Hair styling services are designed to transform and enhance the appearance of your hair. offering a range of looks from everyday.  </p>
                    </div>
                </div>
            </div>

          


           
        <!-- More Services Section -->
        <div class="row">
            <!-- Hair Treatments Service -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="image/h5.png" alt="Hair Treatment">
                    <div class="service-card-body">
                        <h4 class="service-card-title">Hair Treatment</h4>
                        <p class="service-card-text">Hair treatment services are designed to improve the health, appearance, and texture of your hair,  damage,  or just seeking a boost in shine and volume.</p>
                    </div>
                </div>
            </div>

            <!-- Bridal Hair Service -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="image/h6.png" alt="Bridal Hair">
                    <div class="service-card-body">
                        <h4 class="service-card-title">Bridal Hair</h4>
                        <p class="service-card-text">Look your best on your special day with our bridal hair services. We offer stunning updos, curls, and more to complement your wedding look.</p>
                    </div>
                </div>
            </div>

            <!-- Kids Haircuts Service -->
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <img src="image/h4.png" alt="Kids Haircuts">
                    <div class="service-card-body">
                        <h4 class="service-card-title">Kids Haircuts</h4>
                        <p class="service-card-text">We offer gentle and fun haircuts for kids. Our stylists ensure that your little ones have a pleasant experience while getting their hair styled.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
    <?php


include 'footersalon.html';


?>
</html>
