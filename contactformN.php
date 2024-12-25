<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
body{
background-color:black;
  }
	.col1{
		filter: drop-shadow(1px 0px);
	}
.card-body{
  background: transparent;

}
 .card-text{
  border: solid hotpink;
 }
 .container-fluid{

  color: black;
 }
.image {
            background: url('image/hair9.png') no-repeat center center/cover;
            height: 300px;
            color: white;
            text-align: center;
            padding-top: 700px;
        
        }
 input[type="submit"]:hover {
  background-color: #ff69b4;
  transform: scale(1.1); /* Slightly enlarges the button */
  transition: all 0.3s ease-in-out;

}

@keyframes slideIn {
  from {
    transform: translateX(100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

.contact-form {
  animation: slideIn 0.8s ease-out;
  opacity: 0;
  margin-right: 100px;
  }
   .contact-form .form-control:focus {
  border-color:blueviolet; /* Blue color on focus */
  outline: none;
  box-shadow: 0 0 10px rgba(78, 115, 223, 0.5);
}


.col img{
  margin-left: 200px;
  filter: drop-shadow(2px 2px);
}

      </style>
 <?php
include 'navbars.html';

  ?>
</head>
<body>
  <div class="image">
  
  </div>

 
	<div class="container-fluid p-5">
  <div class="row">
    <div class="col">
      <img src="image/con3.png">
    </div>
    <div class="col p-5">
      <div class="contact-form">
  <div class="card-body">
    <h3 class="card-title">Book your Appoinment</h3>
    <p class="card-text">
  <form id="contactForm" action="conectionsalon.php" method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Username" placeholder="Username" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="Email" placeholder="name@example.com" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="Message" rows="3" required></textarea>
    </div>
    <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
    <div id="formResponse"></div>
</form>
  </div>
</div>

  </div>
</div>
</p>
</div>
<?php

include 'footersalon.html';
?>
<script>
  window.addEventListener('scroll', function() {
  const form = document.querySelector('.contact-form');
  const rect = form.getBoundingClientRect();
  
  if (rect.top <= window.innerHeight && rect.bottom >= 0) {
    form.style.animation = 'slideIn 0.8s ease-out';
    form.style.opacity = '1';
  }
});

</script>
</body>
</html>