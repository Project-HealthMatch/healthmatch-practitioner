<?php
session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];



  $con = new mysqli('healthmatch-server.mysql.database.azure.com,'HEALTHMATCH@healthmatch-server','Hackathon2020','hac_db');
  if($con->connect_error){

    die("Failed to connect :".$con->connect_error);
  }
  else{
    $stmt = $con->prepare("select * from hac_user where username= ?");
    $stmt->bind_param("i", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result ->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] == $password)
    {   $_SESSION["user"]=$username;
        echo "<h2>LOGIN SUCCESSS</h2>";
        header("Location:dashboard.php");}
     else{
       echo "<h2> INVALID EMAIL OR PASSWORD</h2>";
    }}
    else{
    echo "<h2>invalid Email or password</h2>";
    }

  }

?>
