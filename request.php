<?
session_start();

if($_SESSION["user"]==true){

}
else{
    header("Location: index.php");
}
?>





<!DOCTYPE html>

   <html>
       <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>

.topnav {
  background-color: rgb(142, 196, 221);
  overflow: hidden;
  margin-bottom: 1rem;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #032b5a;
  color: white;
}


.head{
 height:20%;
 width:100%;
 background-color: #bc94dc;
 color: white;
 padding: 0.5rem;
 text-align: center;
 font-size: 1.5rem;
}

.grid{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
}
.card {
  width:650px;
  margin-bottom: 1rem;
  border-radius: 5px;
}

form{
  padding-left: 2rem;
  padding-right: 2rem;
  width:99%;
  font-weight:600;
}

label{
  font-size: 1.2rem;
}

input{
  color: grey;
  background-color: white;
  font-size: 1rem;
}

.back{
  width: 600px;
  padding: 5rem;
  height: 700px;
  text-align:center;

  background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

  border-radius: 5px;
}

body {
        background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
        background-image: linear-gradient(to top, #00423f 0%, #0a0f49 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;

        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;
        margin-bottom: 1rem;
        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }
      .title{
        color: white;
        font-size: 2rem;
        font-weight: 600;
      }
      .cardtitle{
        font-size: 1.3rem;

      }
      .viewbtn{
        display: block;
        width: 100px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #45a29e, #5bcadd, #3292be);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .viewbtn:hover {
        background-position: right;
      }

      .acceptbtn{
        display: block;
        width: 150px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
       background-image: linear-gradient(to right, #23bb6f, #5bddc1, #10994e);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .acceptbtn:hover {
        background-position: right;
      }


      i{
        margin-right:0.3rem;
      }

</style>
<div class="topnav">
        <div style="text-align:right;" >

  <a href="<?php echo "dashboard.php"; ?>"><i class="fa fa-home"></i>Home</a>

  <a href="<?php echo "logout.php"; ?>"><i class="fa fa-power-off"></i>Logout</a>


  <a href="<?php echo "request.php"; ?>"><i class="fa fa-user"></i>Appoinments</a>
             <a href="<?php echo "reset.php"; ?>"><i class="fa fa-tasks"></i>Change Password</a>
     </div>
     </div>
       </head>

       <div class="grid">
<div style=" width:100%;">
<div style="text-align:center;">
<h5 class="title">Available Appointments</h5>
</div>
       <div class="col-sm-4 mb-5">
<?php
$conn = mysqli_connect("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020", "appointment");
  $sql = "SELECT * FROM `booking`";
$result = $conn->query($sql);


{ while($row = $result->fetch_assoc()){

  echo '<div class = "card ">';
  echo '<div class = "head">';
  echo 'PATIENT ID :' .$row['id'];
  echo '</div>';
  echo '<div class ="card-body">';
  echo '<h5 class= "cardtitle"> DATE: '.$row['date'];
  echo '</h5>';
  echo '<h5 class = "cardtitle"> TIMEZONE:' .$row['timezoneid'];
  echo '</h5>';
  echo '<h5 class = "cardtitle">SLOT :' .$row['slot'];
  echo '</h5>';
  echo '<div class = "float-right">';
   echo '<form action="" method ="POST">';
   echo '<input type = "hidden" name = "id" value='.$row["id"].'>';
    echo '<input type = "submit" class ="viewbtn" value = "View" name ="view">';

   echo '</form>';
  echo '</div>';
  echo '</div>';
  echo '</div>';

}

}
?>
</div>
</div>
<div>
<?php
if(isset($_REQUEST['view']))
{ $sql = "SELECT * FROM booking WHERE id = {$_REQUEST['id']}";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

}


  ?>

 <div style="text-align:center;">

 <h5 class="title">Appointment Details</h5>

 </div>
<div class ="back">
  <div class = "form">

  <form action="connecti.php" method="POST" name="google-sheet">

    <label for = "id"> PATIENT ID </label>
    <input type="text" class="form-control" id="id"
    name = "id" value = "<?php if (isset($row['id'])) echo $row['id'];?>" readonly>

        <label for = "date"> APPOINTMENT DATE </label>
        <input type="text" class="form-control" id="date"
        name = "date" value = "<?php if (isset($row['date'])) echo $row['date'];?>" readonly>
        <label for = "timezoneid"> TIMEZONE </label>
        <input type="text" class="form-control" id="timezoneid"
        name = "timezoneid" value = "<?php if (isset($row['timezoneid'])) echo $row['timezoneid'];?>"readonly>
        <label for = "optional"> PATIENT'S NOTE </label>
        <input type="text" class="form-control" id="optional"
        name = "optional" value = "<?php if (isset($row['optional'])) echo $row['optional'];?>"readonly>
        <label for = "date"> PATIENT'S EMAIL </label>
        <input type="email" class="form-control" id="email"
        name = "email" value = "<?php if (isset($row['email'])) echo $row['email'];?>" readonly>
        <label for = "email"> DOCTOR'S EMAIL </label>
        <input type="email" class="form-control" id="email"
        name = "docemail" required>


    <div class = "float-right">
  <?php echo '<input type = "submit" class ="acceptbtn" value = "Accept" name ="accept">'; ?>
  </div>

</form>


  </div>
</div>
</div>


</body>

     <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbzf_IWvMFS9Nzv7z6CKFbfNTnAmOPNS1SSwYtcTX6O3zdWQkHXk/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('accept', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thank you for accepting!"))
                .catch(error => console.error('Error!', error.message))
            })
          </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
