// Register form using php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "anirudh@1234";
$dbname="first";
$conn = mysqli_connect($servername,$username,$password,$dbname);
//  $conn = mysqli_connect("localhost", "root", "", "test");
if($_POST){
      $email=$_POST['email'];
      $phone=$_POST['phone_number'];
      $pass=$_POST['password'];
      $sql= "INSERT INTO train (`email`,`phone`,`Password`) VALUES ('$email','$phone','$pass')";
      $run = mysqli_query($conn,$sql);
      }
   ?>
<body>
    <center>
<form action="register.php" method='post' autocomplete="off"> 
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>

    <label for="psw"><b>number</b></label>
    <input type="number" placeholder="Enter number" name="phone_number" required><br><br>

    <label for="psw-repeat"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required><bR><br>
    <button type="submit" name="submit">submit</button>
  </div>
</form>
</center>
</body>
</html>
