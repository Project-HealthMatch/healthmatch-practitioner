<?php
     $date = $_POST['date'];
     $timeZoneId = $_POST['timeZoneId'];
     $slot = $_POST['slot'];
     $email = $_POST['email'];


  $host = 'healthmatch-server.mysql.database.azure.com';
  $username = 'HEALTHMATCH@healthmatch-server';
  $password = 'Hackathon2020';
  $db_name = 'schedule';
  
  //Establishes the connection
  $conn = mysqli_init();
  mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
  if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
  }
     else

     {
       $INSERT = "insert into bookings(date, timeZoneId, slot, email) values(?, ?, ?, ?)";   
       $stmt = $conn->prepare($INSERT);
       $b=implode(",",$slot);
       $stmt->bind_param("ssss",$date,$timeZoneId, $b, $email);
       $stmt->execute();
       echo "slot booked";
       header("Location:submitted.php");
       $stmt->close();
       $conn->close();

     }

 ?>
