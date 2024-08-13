<?php
   session_start();

   include ("db.php");

   if ($_SERVER['REQUEST_METHOD'] == "POST")
   {
       $firstname = $_POST['fname'];
       $lastname = $_POST['lname'];
       $gender = $_POST['gender'];
       $gmail = $_POST[ 'mail'];
       $password = $_POST['pass'];

       if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) 
       {
        
          $query = "insert into form(fname,lname,gender,email,pass) values('$firstname','$lastname','$gender','$gmail','$password')";
        
          mysqli_query($con, $query);
        
          echo "<script type='text/javascript'> alert('Successfully Register')</script>";
         }
        else
        {
        
          echo "<script type='text/javascript'> alert('Please enter some valid information.')</script>";
    
        }


    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link rel="stylesheet" href="login3.css">
</head>

<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <p>It's free and only takes a minute!!</p>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Already have an account? <a href="login3.php">Login</a></p>
    </div>
</body>

</html>