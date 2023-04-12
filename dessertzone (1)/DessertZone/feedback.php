<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "DessertZone";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname );

// Set parent ID to 0 by default
$parent_id = 0;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $parent_id = mysqli_real_escape_string($conn, $_GET['parent_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    // Check if the comment already exists in the database
    $sql_check = "SELECT COUNT(*) FROM comments WHERE parent_id = ? AND name = ?  AND comment = ?";
    $stmt_check = mysqli_prepare($conn, $sql_check);
    mysqli_stmt_bind_param($stmt_check, 'iss', $parent_id, $name, $comment);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_bind_result($stmt_check, $count);
    mysqli_stmt_fetch($stmt_check);
    mysqli_stmt_close($stmt_check);

    // If the comment does not already exist, insert it into the database
    if ($count == 0) {
        $sql = "INSERT INTO comments (parent_id, name, comment, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'iss', $parent_id, $name, $comment);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    // Redirect to the page to show the new comment
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit();
}

// Fetch comments from the database
$sql = "SELECT * FROM comments WHERE parent_id = ? ORDER BY created_at DESC";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'i', $parent_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_stmt_close($stmt);
?>

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Coffee Beans</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />

       
        <link rel="stylesheet" href="main.css">
        <link href="style2.css" rel="stylesheet" />
    

    </head>
    
    <body>

    <!-- header section starts -->
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
    <!-- Show the comment form -->
    <form method="post" action="?parent_id=<?php echo $parent_id; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="comment">Comment:</label>
        <textarea name="comment" rows="4" required></textarea><br>
        <input type="submit" value="Post">
    </form>

   

    <!-- Add a reply form for each comment -->
    <?php foreach ($comments as $comment): ?>
        <ul>
            <li>
                <!-- Display the comment details -->
                <strong><?php echo htmlspecialchars($comment['name']); ?></strong>
                <em><?php echo htmlspecialchars($comment['created_at']); ?></em>
                <p><?php echo nl2br(htmlspecialchars($comment['comment'])); ?></p>
                <a href="#" onclick="showReplyForm(<?php echo $comment['ID']; ?>)"> <br/>  <i class="fa fa-thumbs-up" aria-hidden="true" id="like-button" style='color:#91130f; font-size:14px'> Like </i> &nbsp
                <i class='fa fa-reply' style='color:#91130f; font-size:14px'> Reply </i> </a>


                <!-- Display the reply content -->
                <?php
                $reply_id = $comment['ID'];
                $sql_reply = "SELECT * FROM comments WHERE parent_id = ? ORDER BY created_at ASC";
                $stmt_reply = mysqli_prepare($conn, $sql_reply);
                mysqli_stmt_bind_param($stmt_reply, 'i', $reply_id);
                mysqli_stmt_execute($stmt_reply);
                $result_reply = mysqli_stmt_get_result($stmt_reply);
                $replies = mysqli_fetch_all($result_reply, MYSQLI_ASSOC);
                mysqli_stmt_close($stmt_reply); 
                ?>
                <?php if ($replies): ?>
                <ul>
                    <?php foreach ($replies as $reply): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($reply['name']); ?></strong>
                        <em><?php echo htmlspecialchars($reply['created_at']); ?></em>
                        <p><?php echo nl2br(htmlspecialchars($reply['comment'])); ?></p> <br/>  <i class="fa fa-thumbs-up" aria-hidden="true" style='color:#91130f; font-size:14px'> Like </i> &nbsp
                
                    </li>
                    <?php endforeach; ?>
            </ul>

            <?php endif; ?>

          
                

            <!-- Add a reply form for this comment -->
            <div id="reply-form-<?php echo $comment['ID']; ?>" style="display: none;">
                <form method="post" id="replyform" action="?parent_id=<?php echo $comment['ID']; ?>">
                    <label for="name">Name:</label>
                    <input type="text" name="name" required><br>
                    <label for="comment">Comment:</label>
                    <textarea name="comment" rows="4" required></textarea><br>
                    <input type="submit" value="Post"> 
                </form>
            </div>
        </li>

        </ul>
        
        

    <?php endforeach; ?>

   


                  
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

     
        <script type="text/javascript" src="main.js"></script>

    </body>
</html>
 
 
 