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

            <!-- header section starts -->

            <header class="header">

                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="#book-table" class="btn">book a table</a>
              
                <a href="#" class="logo">DESSERTZONE</a>
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

            <!-- header section ends -->

            <!-- Home section starts -->
<div id="id"></div>
            <section id="home" class="home">

                <div class="row">

                    <div class="content">
                        <h3>Welcome to our  </h3>
                        <p class="p1"> DESSERTZONE</p> <br>
                        <span> The Heavenly Source of Happiness! </span><br><br>

                    </div>

                </div>

            </section>

            <!-- Home section ends -->

            <!-- About section starts -->

            <section id="about" class="about">

                <h1 class="heading"> ABOUT US <span>Serving Since 2000</span></h1>
    
                <div class="row">
                    <div class="image">
                        <img src="https://wallpapercave.com/wp/wp1842818.jpg">
                    </div>
                    
                    <div class="content">
                        <h3 class="title">Our story</h3>
                        <p>Dessert-only restaurants have become very popular in the past decade, both as a new business venture and for consumers
                            seeking to satisfy their sweet tooth. The business concept is very straightforward.
                             Simply open a small sit-down restaurant that offers customers varied menu options including cakes,
                              cookies, tarts, pies, ice cream and just about any other dessert or treat you can think of.</p>

                        <a href="about.html" class="btn">read more</a>


</div>
                </div>

            </section>

            <!-- About section ends -->


            <!-- book table section starts -->
            <form action="book-table.php" method="post" onsubmit="return validateForm()">
            <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
            <div class="">
                    <h2 class="section-title mb-5" id="title-feedback">BOOK A TABLE</h2>
                    <div class="row mb-5">
                        <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                            <input type="text" name="email" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                            <input type="number" name="number" id="booktable-number" class="form-control form-control-lg custom-form-control" placeholder="NUMBER OF GUESTS" max="20" min="0">
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                            <input type="time" name="time" id="booktable-time" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                            <input type="date" name="date" id="booktable-date" class="form-control form-control-lg custom-form-control" placeholder="12/12/12">
                        </div>
                        <div> 
        
                        </div>
                
                    </div>
                </div>
                <div>                
        <button type="submit" class="btn" style="background-color: white" >book a table</button>   
</div>

            </div>
                                
</form>

<script>
    function validateForm() {
        var email = document.forms["feedback-form"]["email"].value;
        var number = document.forms["feedback-form"]["number"].value;
        var time = document.forms["feedback-form"]["time"].value;
        var date = document.forms["feedback-form"]["date"].value;
        if (name == "" || email == "" || number == "" || date == "" || time == "") {
            alert("Please Fill The Form");
            return false;
        } else {
            alert("Feedback Sent Successfully!");
            return true;
        }
    }
</script>

            <!-- book table section ends -->


            <!-- Footer section starts -->
            <a class="scrollbtn" onClick="document.getElementById('id').scrollIntoView();"><b>^</b></a>     
            <section class="footer">
               
                <div class="box-container">
        
                    <div class="box">
                        <h3>Open Hours</h3>
                        <a> <i class="fas fa-arrow-right"></i> Monday - Friday</a>
                        <a> <i class="fas fa-arrow-right"></i>2.00 PM - 8.00 PM </a>
                        <a> <i class="fas fa-arrow-right"></i> Monday - Friday</a>
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

            <!-- Footer section ends -->

        <!-- custom js file script -->
        <script type="text/javascript" src="main.js"></script>
        
    </body>
</html>
