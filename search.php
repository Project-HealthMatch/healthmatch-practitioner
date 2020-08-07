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

      @media (min-width: 900px) {
        .card {
          margin-left: 15%;
          width: 70%;
        }
      }

      @media (max-width: 900px) {
        .card {
          margin-left: 15%;
          width: 100%;
        }
      }
    </style>



  </head>

   <div style="text-align: left; ">
<img src="logo.png" class="logo">
</div>
  <br>
 <input type="text" class="date" style="width:50%;"
      name = "date" value = "<?php echo $_POST['date'];?>" readonly>
  
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
  echo $row['email'];
  echo '</div>';
  echo '</div>';
                      
                      


                      }

                    }



               }


               // Close result set
               mysqli_free_result($result);
           } else{
               echo "No doctors available";
           }
       } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       }
