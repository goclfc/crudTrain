<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php
require_once 'header.php';
?>
<div id="form"> 
<form action="register.php" method="post">
    <input type="text" name="username" placeholder="User name">
    <input type="password" name="password" >
    <input type="email" name="email" placeholder="Email">
    <button type="submit" name="submit"> Submit </button>

</form>
</div>
    <?php
    $link = mysqli_connect("localhost", "root", "", "demo");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
    $addUser="INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
 if(mysqli_query($link, $addUser)){
     echo "Records inserted successfully.";
 } else{
     echo "ERROR: Could not able to execute $addUser. " . mysqli_error($link);
 }
  
 // Close connection
 mysqli_close($link);
    ?>


