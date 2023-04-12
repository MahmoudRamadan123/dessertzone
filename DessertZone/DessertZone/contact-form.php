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

        <!-- header section ends -->


        <!-- reservation section starts -->
        <section id="feedback" class="feedback">
    <h1 class="heading" id="c1">Contact us</h1>
    <form action="feedback.php" method="post" onsubmit="return validateForm()">
        <input type="text" value="Name" class="box" name="name" required>
        <input type="email" value="Email" class="box" name="email" required>
        <input type="number" value="Number" class="box" name="number" required>
        <div class="box">
            <div class="date" id="date" data-target-input="nearest">
                <input class="box" placeholder="Date" type="date" id="birthday" name="date" required/>
            </div>
        </div>
        <div class="box">
            <div class="time" id="time" data-target-input="nearest">
                <input class="box" placeholder="Time" type="time" id="appt" name="time" required/>
            </div>
        </div>
   
        <input type="submit" value="Submit" class="btn" required>
    </form>
</section>

<script>
    function validateForm() {
        var name = document.forms["feedback-form"]["name"].value;
        var email = document.forms["feedback-form"]["email"].value;
        var number = document.forms["feedback-form"]["number"].value;
        var date = document.forms["feedback-form"]["date"].value;
        var time = document.forms["feedback-form"]["time"].value;
        
        if (name == "" || email == "" || number == "" || date == "" || time == "") {
            alert("Please Fill The Form");
            return false;
        } else {
            alert("Feedback Sent Successfully!");
            return true;
        }
    }
</script>

        <!-- reservation section ends -->
                
        <!-- Footer section starts -->
                            
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

        <!-- Footer section ends -->

        <!-- custom js file script -->
        <script type="text/javascript" src="main.js"></script>

    </body>
    </html>