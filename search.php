<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datepicker</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>






.show{

  width: 20%;
  height: 100%;
 border-radius: 25px;
  outline: none;
  border: none;
  background-image: linear-gradient(to right, #054969, #01b8d8, #003f58);
  background-size: 200%;
  font-size: 2rem;
  color: white;
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;

  cursor: pointer;
  transition: 0.5s;
}
.show:hover {
  background-position: right;
}



/*       Forgot Password button FAF3DD  */

/*     Sign Up button  */





@media(max-width:800px)
{.submits {

  width: 50%;
  height:30%;
  color:white;
}

.table {
  border-collapse: separate;

  text-align: center;
 font-size: 1.5rem;
}


}




@media(max-width:800px){
  .dategrid{
  display: grid;
  grid-template-rows:1fr 1fr;
  grid-template-columns: 1fr ;
}
}


@media(min-width:800px)
{
  .box{

  border-radius:5px ;
  background-color: white;
width:72% ;
height: 100%;



}
}



    </style>


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Datepicker</title>
      <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css"
      />
      <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"
        rel="stylesheet"
        id="bootstrap-css"
      />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      .head {
        height: 20%;
        width: 100%;

        color: black;
        padding: 0.5rem;
        text-align: center;
        font-size: 1.5rem;
      }

      .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
      }
      .card {
        width: 99%;
        margin-bottom: 1rem;
        border-radius: 5px;
        background-image: linear-gradient(to top, #e1d1f5 0%, #eeeeee 100%);
        margin-left: 1rem;
        color: black;
      }

      body {
        background-attachment: fixed;
        background-repeat: no-repeat;

        background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
        background-image: linear-gradient(to top, #adece9 0%, #9ba0da 100%);
        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;

        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }

      .card{
        margin-top:1rem;
      }

      @media (min-width: 900px) {
        .card {
          margin-left: 15%;
          width: 70%;
        }
      }

      @media (max-width: 900px) {
        .card {
          margin-left: 4%;
          width: 90%;
        }
      }


}

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


@media(max-width:900px)
{

.topnav{
  font-size:1rem;
}
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 1.2rem;
}
}
 .logo{
        width:30%;
        margin-top: 1rem;
        margin-left: 1rem;
      }



      @media(min-width:800px){
        .logo{
        width: 15%;
        margin-top: 3rem;
        margin-left: 3rem;
      }

      }
	    
	      input[type="text"] {
              font-family: "Abel", sans-serif;

              border-radius: 5px 5px 5px 5px;

            margin:0;
              outline: none;
              border: none;
            background-color:rgba(255, 255, 255, 0.788);
              height: 5rem;
             margin-bottom: 1rem;
              transition: 0.2s linear;
             color:black;
              width:90%;
      font-size: 2rem;
		      margin-left:1rem;
            }
 @media(max-width:900px){
	       input[type="text"] {
		       
		       width:99%;
	    }
	    }
	    @media(min-width:900px){
		    
	      input[type="text"] {
              font-family: "Abel", sans-serif;

              border-radius: 5px 5px 5px 5px;

            margin:0;
              outline: none;
              border: none;
            background-color:rgba(255, 255, 255, 0.788);
              height: 5rem;
             margin-bottom: 1rem;
              transition: 0.2s linear;
             color:black;
              width:45%;
      font-size: 2rem;
		      margin-left:30%;
            }
		    
	    }

    </style>



  </head>

      <div class="topnav">
        <div style="text-align:right;" >

  <a href="<?php echo "dashboard.php"; ?>">Slot</a>

 


  <a href="<?php echo "request.php"; ?>">Appoinments</a>

    <a href="<?php echo "reset.php"; ?>">Change Password</a>
		
		    <a href="<?php echo "form.php"; ?>">Available Doctors</a>
		
		 <a href="<?php echo "logout.php"; ?>"><i class="fa fa-power-off"></i>Logout</a>
     </div>


</div>


     <div style="text-align: left; ">
<img src="logo.png" class="logo">
</div>
  <br>
 <input type="text" class="date" 
      name = "date" value = "<?php echo $_POST['date'];?>" readonly>
	
	<input type="text" class="date" 
      name = "date" value = "<?php echo $_POST['timeZoneId'];?>" readonly>

  <?php


$conn = mysqli_connect("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020", "appointment");
$date= $_POST['date'];
$slot = $_POST['timeZoneId'];


       $sql = "SELECT * FROM bookings where date = '$date' ";
       if($result = mysqli_query($conn, $sql)){
           if(mysqli_num_rows($result) > 0){




               while($row = mysqli_fetch_array($result)){

                    $str =(explode(",",$row['slot']));
                    foreach($str as  $sr){
                      if($slot == $sr)
                      {


  echo '<div class = "card ">';
  echo '<div class = "head">';
  echo'<h3>Email:</h3>';
  echo $row['email'];
  echo'<br>';
  echo'<h3>Timezone:</h3>';
  echo $row['timeZoneId'];
  echo '</div>';
  echo '</div>';




                      }

                    }



               }


               // Close result set
               mysqli_free_result($result);
           } else{
             echo'<div style="text-align:center;" >';

               echo'<h1>No doctors available!</h1>';
                echo'</div>';
           }
       } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       }
