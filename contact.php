<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Impact'In - Contact</title>
</head>
<body>
<div class="nav1">
        <div class="logo1">
            <p><a href="home.php">Logo</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
            <a href="contact.php"> <button class="btn">Contact Us</button> </a>


        </div>
    </div>
    <main>
        <div  class="container5" > 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204478.6818346402!2d9.97846163007881!3d36.795044213861054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd337f5e7ef543%3A0xd671924e714a0275!2sTunis!5e0!3m2!1sfr!2stn!4v1704062127842!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <div class="container4" >

        </div>
 <div class="box form-box">


    <form action="form.php" method="POST" enctype="multipart/form-data">
    <div class="field input">

                <input type="text" placeholder="name" class="box" id="name" name="name">
                <input type="email" placeholder="email" class="box" id="email" name="email">
                <input type="number" placeholder="number" class="box" id="number" name="number">
                <textarea placeholder="message" id="" cols="30" rows="10" name="message"> </textarea>
                <input type="submit" class="btn" value="Send a message">
    </div>
            </form>  </div> </div>
    </main>  
       <footer>
        <p>&copy; 2023 Impact'In. All rights reserved.</p>
    </footer>
</body>
</html>