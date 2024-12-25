<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ofers</title>
</head>
<style type="text/css">
  body{
    background-color: black;
  }
	video {
    position:relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    box-shadow: 5px solid black;
       }
       .container-fluid{
       	display: flex;

       }
      .col img{
      	hight:400px;
      	width: 400px;
      	display: inline;
        
      	backdrop-filter: blur(5px) contrast(150%);
      }
     
      .container-fluid {
  display: flex;
  justify-content: center;
}

.col {
  background-color:black;
  padding: 20px;
  width: 30%;
  text-align: center;
  color: white;
  opacity: 0;
  animation: slideIn 1s forwards; /* Apply slide-in animation */
}

.col:nth-child(1) {
  animation-delay: 0.2s; /* Delay for the first column */
}

.col:nth-child(2) {
  animation-delay: 0.4s; /* Delay for the second column */
}


@keyframes slideIn {
  from {
    transform: translateY(50px); /* Start from below */
    opacity: 0;
  }
  to {
    transform: translateY(0); /* Slide to normal position */
    opacity: 1;
  }
}
</style>
<body>
	<?php
	include'navbars.html';
	?>
<div >
<video autoplay muted loop>
  <source src="image/video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>


<div>


<div class="container-fluid p-5 overflow-hidden">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light"><img src="image/serim2.png"></div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><img src="image/serim.png"></div>
    </div>
  </div>
</div>
<?php
include'footersalon.html';
?>

</body>
</html>