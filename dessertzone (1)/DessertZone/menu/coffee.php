<?PHP 
require ('connection.php');
$query="SELECT *, items.name as name from items Left Join categories ON categories.id = items.category_id where categories.name = 'coffee'";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Dessert Zone</title>

      <!-- custom css file link -->
      <link rel="stylesheet" href="../main.css">

      <!-- Font awesome cdn link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>
    <body>


<!-- header section starts ....................................-->
      <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="index/#book-table" class="btn">book a table</a>
      
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
<!-- header section ends .............................................-->

<!-- coffe section ends .............................................-->
        <section class="menu" id="menu">

          <h1 class="heading" > Our Menu <span>What's your order?</span></h1>
          <div class="input-field">
            <input type="text" name="search" id="coffee-search-input" placeholder="Search items" class="search-input" style="
    /* border: black; */
    /* background-color: rgb(187 44 46); */
    background-color: #7e110e;
    border-radius: 20px;
    color: white;
    padding: 10px 30px;
    margin-bottom: 20px;
    align-self: flex-end;
">
          </div> 

          <div class="box-container" id="all-data" >
              <?php
            while ($row1 = mysqli_fetch_array($result)) {
            ?>
            <div  class="box">
              <img src="../images/<?php echo $row1['picture'];?>">
              <h3><?php echo $row1['name'];?></h3><span> <?php echo $row1['price'];?>$</span>
             
            </div>
            <?php } ?>
          </div>
            <div class="box-container hidden" id="search-results"></div>
            <script>function searchData(path, query, category){
    
    $.ajax({
      url:"search.php",
      method:"POST",
      data:{query:query, category:category},
      success:function(data)
      {
        resultsContainer.innerHTML = data;
      }
      });
  }
let resultsContainer = document.getElementById('search-results');
let boxContainer = document.getElementById('all-data');
let coffeeSearch = document.getElementById("coffee-search-input");
coffeeSearch.addEventListener('keyup', function(){
  if(coffeeSearch.value!=''){
    resultsContainer.classList.remove('hidden');
    boxContainer.classList.add('hidden');
    searchData("dark-choc.php", coffeeSearch.value, "coffee");
  }
  else{
    boxContainer.classList.remove('hidden');
    resultsContainer.classList.add('hidden');
  }
}
) </script>
        </section>
<!-- coffe section ends .............................................--> 

<!-- Footer section starts ...........................................-->
                    
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
            <a href="home.php"> <i class="fas fa-arrow-right"></i> home </a>
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

<!-- Footer section ends ............................-->

          <!-- custom js file script -->
          <script type="text/javascript" src="main.js"></script>
          <script type="text/javascript" src="coffee.js"></script>


    </body>
</html>