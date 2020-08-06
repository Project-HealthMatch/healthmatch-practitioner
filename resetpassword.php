<?php
error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];
$new = $_POST['new'];
$conf = $_POST['conf'];


  $conn = new mysqli("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020","hac_db");
  if($conn->connect_error){

    die("Failed to connect :".$con->connect_error);
                          }
else{
    $stmt = $conn->prepare("select * from hac_user where username= ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
       if($stmt_result ->num_rows > 0)
          {$data = $stmt_result->fetch_assoc();
      if($data['password'] == $password)
          {if($new == $conf)
           $sql = "UPDATE hac_user SET password='$new' WHERE username='$username'";

if (mysqli_query($conn, $sql))
  {  echo "password updated successfully";
  }
else {
  echo "password not matching: " ;
     }

        mysqli_close($conn);
          }


    else{
       echo "<h2>original password incorrect</h2>";
         }
                                    }

    else{
    echo "<h2>invalid ID</h2>";
        }


 }

?>
