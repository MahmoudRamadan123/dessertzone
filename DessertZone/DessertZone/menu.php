<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Dessert Zone</title>

      <!-- custom css file link -->
      <link rel="stylesheet" href="main.css">

      <!-- Font awesome cdn link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />
      
    </head>

    <body>
<!-- header section start ........................................................-->
       <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
     <a href="index.php#book-table" class="btn">book a table</a>

        <a href="index.php" class="logo">DESSERTZONE</a>
        <nav class="navbar">
            <a href="index.php" >Home</a>
            <a href="about.html" >About</a>
            <a href="menu.php" >Menu</a>
            <a href="feedback.php" >Feedback</a>
        </nav>

        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div> 

      </header>

<!-- header section ends ........................................................-->

<!-- Menu section starts ......................................................-->
      
      <section class="menu" id="menu">

        <h1 class="heading" > Our Menu <span>What's your order?</span></h1>

        <div class="box-container">
          
          <div  class="box">
            <img src="https://tse3.mm.bing.net/th?id=OIP.FKNIMCvdxtOvxbNzPznN3AHaF2&pid=Api&P=0">
            <h3>Coffee</h3>
            <a href="menu/coffee.php"><button class="btn">view more</button></a>
          </div>

          <div  class="box">
            <img src="https://tse4.mm.bing.net/th?id=OIP.iZlwkhPupNOh7uYN2q5EHAHaM9&pid=Api&P=0">
            <h3>Ice Cream</h3>
            <a href="menu/iced-cream.php"><button class="btn">view more</button></a>
          </div>

          <div  class="box">
            <img src="https://tse3.mm.bing.net/th?id=OIP.-XI08zRmYxaYeXRplkXWhwHaIB&pid=Api&P=0">
            <h3>Dessert</h3>
            <a href="menu/desserts.php"><button class="btn">view more</button></a>
          </div>
            
          <div  class="box">
            <img src="imgs-1/imgs-shop/choc.jpg">
            <h3>Light Dessert</h3>
            <a href="menu/dark-choc.php"><button class="btn">view more</button></a>
          </div>

        </div>
      </section> <br><br>
      
	
<!-- Menu section end.................................-->

 <!-- Customize Section...............................-->
 <h2><b><center>Customize Your Items</center></b></h2><br><br>
 <div class="cust-container" style=" justify-content: center;
    margin: auto;
  width: 50%;
  padding: 10px;
   text-align: center;
  border: 3px solid #91130f;">
  <h1 style="color:#91130f">we are interested in your suggestions, please upload your item: </h1><br>
	<div class="cust">
	<form action="save_image.php" method="POST" enctype="multipart/form-data">
		<label for="name" style="font-size: 15px">Name:</label>
		<input type="text" name="name" id="name" style=" border: 1px solid #91130f;"><br><br>
		<label for="image" style="font-size: 15px" >Select Image File:</label>
		<input type="file" name="image" id="image"><br><br>
		<button type="submit" style=" border: 1px solid #91130f; width:150px;" >Save Image</button><br>
	</form>
</div>
</div>


<!--customize section ends ....................................-->

<!-- Footer section starts ....................................-->
                    
      <section class="footer">        
        
        
        
        <div class="box-container">

          <div class="box">
            <h3>Open Hours</h3>
            <a> <i class="fas fa-arrow-right"></i> Monday - Friday </a>
            <a> <i class="fas fa-arrow-right"></i> 8.00 AM - 8.00 PM </a>
            <a> <i class="fas fa-arrow-right"></i> Saturday - Sunday </a>
            <a> <i class="fas fa-arrow-right"></i> 2.00 PM - 8.00 PM </a>
          </div>

          <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="about.html"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="contact-form.php"> <i class="fas fa-arrow-right"></i> contact us</a>
            <a href="menu.php"> <i class="fas fa-arrow-right"></i> menu </a>
            <a href="feedback.php"> <i class="fas fa-arrow-right"></i> reviews </a>
          </div>

          <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-map-marked-alt"></i> 098 Street, Lebanon, Tripoli</a>
            <a href="#"> <i class="fas fa-phone"></i> +961 73682899</a>
            <a href="#"> <i class="fas fa-envelope"></i> DessertZone@gmail.com </a>
        </div>

          <div class="box">
            <h3>Follow us on</h3>
            <a href="https://www.facebook.com"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> instagram </a>
          </div>

        </div>    

      </section>

<!-- Footer section ends ..........................................-->

      <!-- custom js file script -->
      <script type="text/javascript" src="main.js"></script>

  </body>
</html>