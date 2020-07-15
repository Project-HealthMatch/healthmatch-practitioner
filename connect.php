<?php
     $date = $_POST['date'];
     $timeZoneId = $_POST['timeZoneId'];
     $slot = $_POST['slot'];
     $email = $_POST['email'];

     $conn = mysqli_init();
     mysqli_real_connect($conn, "healthmatch-server.mysql.database.azure.com", "HEALTHMATCH@healthmatch-server", "Hackathon2020", "schedule", 3306);
     if (mysqli_connect_errno($conn)) {
     die('Failed to connect to MySQL: '.mysqli_connect_error());
     }
     else

     {
       $stmt = $conn->prepare("insert into bookings(date, timeZoneId, slot, email) values(?, ?, ?, ?)");
       $b=implode(",",$slot);
       $stmt->bind_param("ssss",$date,$timeZoneId, $b, $email);
       $stmt->execute();
       echo "slot booked";
       header("Location:submitted.php");
       $stmt->close();
       $conn->close();

     }

 ?>

