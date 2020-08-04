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

@media(min-width:900px){
  form{
    padding-left: 2rem;
    padding-right: 2rem;
    width:50%;
    font-weight:600;
  }
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
  width: 99%;
  padding: 5rem;
  height: 700px;
  text-align:center;

  background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

  border-radius: 5px;
}

body {
  background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
      background-image: linear-gradient(to top, #adece9 0%, #9ba0da 100%);
      background-attachment: fixed;
      background-repeat: no-repeat;

      font-family: "Vibur", cursive;
      /*   the main font */
      font-family: "Abel", sans-serif;

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
       background-image: linear-gradient(to right, #745ed8, #bcb2df);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin-top: 1rem;
        margin-left: 32%;
        cursor: pointer;
        transition: 0.5s;
      }
      .acceptbtn:hover {
        background-position: right;
        color:black;
      }


      i{
        margin-right:0.3rem;
      }

      form{
 margin-top:2rem;
      }

      @media(min-width:900px)
      {
     form{

       margin-left:25%;
       margin-top:5%;
     }

     .acceptbtn{
       display: block;
       width: 150px;
       height: 35px;
       border-radius: 25px;
       outline: none;
       border: none;
      background-image: linear-gradient(to right, #745ed8, #bcb2df);
       background-size: 200%;
       font-size: 1.2rem;
       color: #fff;
       font-family: "Poppins", sans-serif;
       text-transform: uppercase;
       margin-top: 1rem;
       margin-left: 39%;
       cursor: pointer;
       transition: 0.5s;
     }

      }

</style>
<?php

session_start();

     $date = $_POST['date'];

     $slot = $_POST['slot'];

     $id = $_POST['id'];

     $email = $_POST['email'];

     $docemail = $_POST['docemail'];




     $conn = new mysqli("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020","appointment");
     if($conn->connect_error)
     {
       die('connection failed :' .$conn->connect_error);

     }
     else

     {
       $stmt = $conn->prepare("insert into acceptappointment(date, slot, id, email,docemail )
       values(?, ?, ? ,?, ?)");
      //$b=implode(",",$slot);
       $stmt->bind_param("sssss",$date,$slot,$id,$email, $docemail);
       $stmt->execute();
       if($stmt == TRUE){
       $sql = "SELECT * FROM booking WHERE  id = {$_REQUEST['id']}";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();}
       $sql = "DELETE  FROM booking WHERE id = {$_REQUEST['id']}";
       if($conn->query($sql) == TRUE){

       }
       else{
         echo "unable to delete";
       }

              echo '<div style="text-align: center;">';
                       echo '<form method="POST" name="google-sheet">';



                            echo ' <label for = "date"> APPOINTMENT DATE </label>';
                             echo '<input type="text" class="form-control" id="date"
                             name = "date" value = '.$_POST['date'];' readonly>';
                            echo ' <label for = "slot"> SLOT </label>';
                             echo '<input type="text" class="form-control" id="slot"
                             name = "slot" value = '. $_POST['slot'];' readonly>';



                             echo'  <label for = "email"> PATIENT EMAIL </label>';
                             echo'  <input type="email" class="form-control" id="email"
                               name = "email" value = '.$_POST['email'];' readonly>';


                               echo'  <label> DOCTOR EMAIL </label>';
                               echo'  <input type="email" class="form-control" id="email"
                                 name = "docemail" value = '.$_POST['docemail'];' readonly>';



                     echo'    <div>';
                      echo '<input type = "submit" class ="acceptbtn" value = "Confirm" name ="submit">';
                   echo'    </div>';

                   echo'  </form>';



       $stmt->close();



       $conn->close();}
       ?>

     <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbzf_IWvMFS9Nzv7z6CKFbfNTnAmOPNS1SSwYtcTX6O3zdWQkHXk/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => 
             
 alert("Thank you for accepting!")
  

                )
                .catch(error => console.error('Error!', error.message))
            })
          </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
