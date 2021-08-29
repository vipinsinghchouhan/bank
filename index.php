<?php
$insert = false;
if(isset($_POST["name"])){
    //set connection variables
$server ="localhost";
$username ="root";
$password ="";
//Create a database connection
$con =mysqli_connect($server, $username, $password);
//Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "success connecting to the db";

//Collect post variables
$name=$_POST['name'];
$age =$_POST['age'];
$gander =$_POST['gender'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$desc =$_POST['desc'];

$sql ="INSERT INTO iit.iit(Name, age, gander, email, phone, othar,DT) VALUES ('$name', '$age', '$gander', '$email', '$phone',  '$desc', now());";
//echo  $sql;

//Execute the query
if($con->query($sql)==true){
//echo "successfully inserted";

//Flag for successful insertion
$insert =true;
}
else{
    echo "ERROR: $sql <br>$con->error";
    }

    // close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,-scale=1.0">
    <title> Welcome to Travel Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="pg.jpg" alt="IIT indore">
    <div class=" container">
        <h1>welcome to IIT indore Trip form </h1>
        <p> Enter your details and sumit this form to confirm your particpateon in the trip</p>
        <?php
      if($insert == true){
      echo "<p class='submitmsg'>Thank for submitting your form. we are happy to see you joining for IIT trip </p>";
      }
  ?>
        <form action="index.php" method="post" onsubmit="return check()">
            <input type="text" name="name" id="name" placeholder="Enter your name" />
            <input type="text" name="age" id="agr" placeholder="Enter your age" />
            <input type="text" name="email" id="email" placeholder="Enter your email" />
            <input type="text" name="phone" id="phone" placeholder="Enter your phone" />
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" />
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <input type="submit" value="Submit" class="btn" />

        </form>
    </div>

    <script src="index.js"></script>

    <body>

</html>