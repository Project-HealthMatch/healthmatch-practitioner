<?
session_start();

if($_SESSION["user"]==true){

}
else{
    header("Location: index.html");
}
?>




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
      input[type="text"] {
        font-family: "Abel", sans-serif;

        border-radius: 5px 5px 5px 5px;

      margin:0;
        outline: none;
        border: none;
        background-color: rgba(255, 245, 245, 0.836);
        height: 5rem;
       margin-bottom: 1rem;
        transition: 0.2s linear;
        font-size: 3rem;
        width:90%;
      }

  .calendar{

    margin-left: 37%;
  }


.submits {

  width: 20%;
  height: 70%;
 border-radius: 5px 5px 5px 5px;
  outline: none;
  border: none;
  background-image: linear-gradient(to right, #58ccc0, #86cedb, #d89ed5);
  background-size: 200%;
  font-size: 2rem;
  color: black;
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  margin: 1rem 0;
  cursor: pointer;
  transition: 0.5s;
}
.submits:hover {
  background-position: right;
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



/*       Forgot Password button FAF3DD  */

/*     Sign Up button  */

  input[type="email"] {
        background-color:rgba(255, 245, 245, 0.836);

        font-family: "Abel", sans-serif;
border: solid 0.05rem black;

        outline: none;
        border: none;
        height: 5rem;
        width: 50%;
        border-radius: 5px 5px 5px 5px;
        transition: 0.2s linear;
        font-size: 2rem;
      }

  .headerdoctor {
        font-size: 2.1em;
        font-weight: 500;
        text-align: center;
        font-family: "Century Gothic", sans-serif;
        color:black;
      }
    body {
        background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
        background-image: linear-gradient(to top, #adece9 0%, #9ba0da 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;

        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;

        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }


.table {

  padding:2rem;
  border-collapse: separate;

  text-align: center;
 font-size: 2rem;
 height: 80%;
}




td {
 padding-left:3rem ;
  text-align: center;
padding-right: 1rem;
}


.grid{
  display: grid;
  grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr ;
  row-gap: 1rem;
  grid-template-rows: 1fr 1fr 1fr 1fr;
}
.time{

  border-radius: 5px;

  margin:1rem;
  color: rgb(34, 34, 34);
  border-color:rgb(44, 250, 181);

 border-style: solid 0.08rem;
background-color:rgba(255, 245, 245, 0.836);

  background-image: linear-gradient(rgb(133, 233, 200), rgba(255, 245, 245, 0.836), rgba(255, 245, 245, 0.836), rgba(255, 245, 245, 0.836),  rgba(255, 245, 245, 0.836),rgb(133, 233, 200));

height: 3.5rem;
padding-top: 0.5rem;


 border: solid 0.05rem rgb(5, 199, 134);

}

select{
background-color:rgba(255, 245, 245, 0.836);
height:5rem;
font-size: 1.5rem;
border-radius:5px;
width:80%;
border: solid 0.05rem black;
}

@media(max-width:800px)
{.submits {

  width: 50%;
  height:30%
}
  .grid{
  display: grid;
  grid-template-columns:1fr 1fr  ;
  grid-template-rows:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
}
.table {
  border-collapse: separate;

  text-align: center;
 font-size: 1.5rem;
}
  input[type="email"] {
        background-color:rgba(255, 245, 245, 0.836);

        font-family: "Abel", sans-serif;


        outline: none;
        border: none;
        height: 5rem;
        width: 90%;
        border-radius: 5px 5px 5px 5px;
        transition: 0.2s linear;
        font-size: 2rem;
        border: solid 0.05rem black;
      }
      .calendar{

    margin-left: 15%;
  }

}

 table {

  border-radius: 5px;
   background-image: linear-gradient(-225deg, #ececec 0%, rgb(78, 221, 173) 80%);
 color: rgb(34, 34, 34);



}

td{

  font-size: 2rem;
}

th{
  font-size: 3rem;
  color:rgb(15, 7, 53);
}

i{
        margin-right:0.3rem;
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


			    @media(min-width:900px){
     .date{
        width: 50%;
        margin-left: 25%;
        border: solid 0.05rem black;
	     border-radius: 5px;
      }
      select{
        width:30%;
      }

     input[type="email"]
     {
       width: 35%;
       border: solid 0.05rem black;
     }

.languagegrid{
      	display: grid;

      padding-left: 45rem;
      padding-right: 45rem;
   
      grid-template-columns: 1fr 1fr 1fr 1fr ;
      grid-template-rows: 1fr;
      }


}

	    .date{

        border: solid 0.05rem black;
		     border-radius: 5px;
      }

      
      td{
        font-size: 2.5rem;
      }


    </style>
    <div class="topnav">
        <div style="text-align:right;" >

  <a href="<?php echo "dashboard.php"; ?>"><i class="fa fa-home"></i>Slot</a>

  <a href="<?php echo "logout.php"; ?>"><i class="fa fa-power-off"></i>Logout</a>

    <a href="<?php echo "reset.php"; ?>"><i class="fa fa-tasks"></i>Change Password</a>
     </div>


</div>
  </head>
  <body>

  <div style="text-align:center;" >
        <h3 style="color:white;">


<?echo "WELCOME"." ".$_SESSION['user'];?>


    </h3>
 </div>

<h3 class="headerdoctor">
              Please select date to pick slots:
            </h3>


           <div class="container">



	        	<form action="connect.php" method="post">
		            <div class="form-group">
		                <div class='input-group date' id='datepicker'>
		                    <input type='text' name='date' class="form-control" />
		                    <span class="input-group-addon" style="height: 5rem;">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>



    </div>
    <div>
    <h3 class="headerdoctor">
              Please select your timezone:
            </h3>
<div style="text-align: center;">
<select name="timeZoneId">
	<option gmtAdjustment="GMT-12:00" useDaylightTime="0" value="International Date Line West (GMT-12:00)">International Date Line West (GMT-12:00) </option>
	<option  gmtAdjustment="GMT-11:00" useDaylightTime="0" value="Midway Island, Samoa (GMT-11:00)"> Midway Island, Samoa (GMT-11:00)</option>
	<option  gmtAdjustment="GMT-09:00" useDaylightTime="1" value="Alaska (GMT-09:00)"> </option>
	<option gmtAdjustment="GMT-08:00" useDaylightTime="1" value="Pacific Time (US & Canada)(GMT-08:00)"> Pacific Time (US & Canada)(GMT-08:00)</option>
	<option  gmtAdjustment="GMT-08:00" useDaylightTime="1" value="Tijuana, Baja California(GMT-08:00)"> Tijuana, Baja California(GMT-08:00)</option>
	<option  gmtAdjustment="GMT-07:00" useDaylightTime="0" value="Arizona(GMT-07:00"> Arizona(GMT-07:00)</option>
	<option  gmtAdjustment="GMT-07:00" useDaylightTime="1" value="Chihuahua, La Paz, Mazatlan(GMT-07:00)"> Chihuahua, La Paz, Mazatlan(GMT-07:00)</option>
	<option  gmtAdjustment="GMT-07:00" useDaylightTime="1" value="Mountain Time (US & Canada)(GMT-07:00)"> Mountain Time (US & Canada)(GMT-07:00)</option>
	<option gmtAdjustment="GMT-06:00" useDaylightTime="0" value="Central America(GMT-06:00)"> Central America(GMT-06:00)</option>
	<option  gmtAdjustment="GMT-06:00" useDaylightTime="1" value="Central Time (US & Canada)(GMT-06:00"> Central Time (US & Canada)(GMT-06:00)</option>
	<option  gmtAdjustment="GMT-06:00" useDaylightTime="1" value=" Guadalajara, Mexico City, Monterrey(GMT-06:00"> Guadalajara, Mexico City, Monterrey(GMT-06:00)</option>
	<option  gmtAdjustment="GMT-06:00" useDaylightTime="0" value="Saskatchewan(GMT-06:00) ">Saskatchewan(GMT-06:00) </option>
	<option  gmtAdjustment="GMT-05:00" useDaylightTime="0" value="Bogota, Lima, Quito, Rio Branco(GMT-05:00"> Bogota, Lima, Quito, Rio Branco(GMT-05:00)</option>
	<option  gmtAdjustment="GMT-05:00" useDaylightTime="1" value="Eastern Time (US & Canada)(GMT-05:00)"> Eastern Time (US & Canada)(GMT-05:00)</option>
	<option  gmtAdjustment="GMT-05:00" useDaylightTime="1" value="Indiana (East)(GMT-05:00)">Indiana (East)(GMT-05:00) </option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Atlantic Time (Canada)(GMT-04:00)"> Atlantic Time (Canada)(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="0" value="Caracas, La Paz(GMT-04:00)"> Caracas, La Paz(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="0" value="Manaus(GMT-04:00)"> Manaus(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Santiago(GMT-04:00)"> Santiago(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-03:30" useDaylightTime="1" value="Newfoundland(GMT-03:30)"> Newfoundland(GMT-03:30)</option>
	<option  gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Brasilia(GMT-03:00)"> Brasilia(GMT-03:00)</option>
	<option  gmtAdjustment="GMT-03:00" useDaylightTime="0" value="Buenos Aires, Georgetown(GMT-03:00)">Buenos Aires, Georgetown(GMT-03:00) </option>
	<option  gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Greenland(GMT-03:00)"> Greenland(GMT-03:00)</option>
	<option gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Montevideo(GMT-03:00)"> Montevideo(GMT-03:00)</option>
	<option  gmtAdjustment="GMT-02:00" useDaylightTime="1" value="Mid-Atlantic(GMT-02:00)"> Mid-Atlantic(GMT-02:00)</option>
	<option gmtAdjustment="GMT-01:00" useDaylightTime="0" value="Cape Verde Is.,Azores(GMT-01:00)"> Cape Verde Is.,Azores(GMT-01:00)</option>
	<option gmtAdjustment="GMT+00:00" useDaylightTime="0" value="Casablanca, Monrovia, Reykjavik">Casablanca, Monrovia, Reykjavik</option>
	<option  gmtAdjustment="GMT+00:00" useDaylightTime="1" value="Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London(GMT+00:00)">Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London(GMT+00:00) </option>
	<option gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna(GMT+01:00)"> Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna(GMT+01:00)</option>
	<option gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Belgrade, Bratislava, Budapest, Ljubljana, Prague(GMT+01:00)">Belgrade, Bratislava, Budapest, Ljubljana, Prague(GMT+01:00)</option>
	<option  gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Brussels, Copenhagen, Madrid, Paris(GMT+01:00)">Brussels, Copenhagen, Madrid, Paris(GMT+01:00) </option>
 <option  gmtAdjustment="GMT+05:30" useDaylightTime="0" value="Chennai, Kolkata, Mumbai, New Delhi(GMT+05:30)">Chennai, Kolkata, Mumbai, New Delhi(GMT+05:30) </option>
	<option  gmtAdjustment="GMT+05:45" useDaylightTime="0" value="Kathmandu(GMT+05:45)"> Kathmandu(GMT+05:45)</option>
	<option  gmtAdjustment="GMT+06:00" useDaylightTime="1" value="Almaty, Novosibirsk(GMT+06:00)"> Almaty, Novosibirsk(GMT+06:00)</option>
	<option  gmtAdjustment="GMT+06:00" useDaylightTime="0" value="Astana, Dhaka(GMT+06:00) ">Astana, Dhaka(GMT+06:00) </option>
	<option  gmtAdjustment="GMT+06:30" useDaylightTime="0" value="Yangon (Rangoon)(GMT+06:30) ">Yangon (Rangoon)(GMT+06:30) </option>
	<option  gmtAdjustment="GMT+07:00" useDaylightTime="0" value="Bangkok, Hanoi, Jakarta(GMT+07:00)"> Bangkok, Hanoi, Jakarta(GMT+07:00)</option>
	<option  gmtAdjustment="GMT+07:00" useDaylightTime="1" value="Krasnoyarsk(GMT+07:00)"> Krasnoyarsk(GMT+07:00)</option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Beijing, Chongqing, Hong Kong, Urumqi(GMT+08:00)">Beijing, Chongqing, Hong Kong, Urumqi(GMT+08:00) </option>
	<option gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Kuala Lumpur, Singapore(GMT+08:00)">Kuala Lumpur, Singapore(GMT+08:00) </option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Irkutsk, Ulaan Bataar(GMT+08:00)"> Irkutsk, Ulaan Bataar(GMT+08:00)</option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Perth(GMT+08:00)"> Perth(GMT+08:00)</option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Taipei(GMT+08:00)">Taipei(GMT+08:00) </option>
	<option gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Osaka, Sapporo, Tokyo(GMT+09:00)"> Osaka, Sapporo, Tokyo(GMT+09:00)</option>
	<option  gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Seoul(GMT+09:00)">Seoul(GMT+09:00) </option>
	<option gmtAdjustment="GMT+09:00" useDaylightTime="1" value="Yakutsk (GMT+09:00)"> Yakutsk (GMT+09:00)</option>
	<option gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Adelaide(GMT+09:30)">Adelaide(GMT+09:30) </option>
	<option  gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Darwin(GMT+09:30)">Darwin(GMT+09:30) </option>
	<option  gmtAdjustment="GMT+10:00" useDaylightTime="0" value="Brisbane(GMT+10:00)"> Brisbane(GMT+10:00)</option>
	<option gmtAdjustment="GMT+10:00" useDaylightTime="1" value="Canberra, Melbourne, Sydney(GMT+10:00)"> Canberra, Melbourne, Sydney(GMT+10:00)</option>
  <option  gmtAdjustment="GMT+11:00" useDaylightTime="1" value="Magadan, Solomon Is., New Caledonia(GMT+11:00)"> </option>
	<option  gmtAdjustment="GMT+12:00" useDaylightTime="1" value="Fiji, Kamchatka, Marshall Is.(GMT+12:00)"> Auckland, Wellington(GMT+12:00)</option>
	<option  gmtAdjustment="GMT+12:00" useDaylightTime="0" value="Fiji, Kamchatka, Marshall Is.(GMT+12:00)"> </option>

</select>
</div>

<h3 class="headerdoctor">
              Please select your available slots for date:
            </h3>

 <div class="table" >
<div>


  <div class="grid">

   <div class="time">
      <td>00:00-01:00</td>
      <th><input type="checkbox" name="slot[]" value="00:00-01:00"></th>
</div>


<div class="time">
      <td>01:00-02:00</td>
      <th><input type="checkbox" name="slot[]" value="01:00-02:00"></th>
  </div>



 <div class="time"><td>02:00-03:00</td>
    <th><input type="checkbox" name="slot[]" value="02:00-03:00"></th>

</div>

<div class="time">	  <td>03:00-04:00</td>
      <th><input type="checkbox" name="slot[]" value="03:00-04:00"></th>
  </div>

  <div class="time">
      <td>04:00-05:00</td>
      <th><input type="checkbox" name="slot[]" value="04:00-05:00"></th>
  </div>

     <div class="time"> <td>05:00-06:00</td>
      <th><input type="checkbox" name="slot[]" value="05:00-06:00"></th>
</div>


<div class="time"><td>06:00-07:00</td>
      <th><input type="checkbox" name="slot[]" value="06:00-07:00"></th>
  </div>

  <div class="time">
      <td>07:00-08:00</td>
      <th><input type="checkbox" name="slot[]" value="07:00-08:00"></th>
  </div>

  <div class="time">

      <td>08:00-09:00</td>

    <th><input type="checkbox" name="slot[]" value="08:00-09:00"></th>
     </div>


     <div class="time">
	  <td>09:00-10:00</td>
      <th><input type="checkbox" name="slot[]" value="09:00-10:00"></th>
  </div>

  <div class="time">
      <td>10:00-11:00</td>
      <th><input type="checkbox" name="slot[]" value="10:00-11:00"></th>
  </div>

  <div class="time">

      <td>11:00-12:00</td>
      <th><input type="checkbox" name="slot[]" value="11:00-12:00"></th>
 </div>

 <div class="time">
      <td>12:00-13:00</td>
      <th><input type="checkbox" name="slot[]" value="12:00-13:00"></th>
  </div>

  <div class="time">
      <td>13:00-14:00</td>
      <th><input type="checkbox" name="slot[]" value="13:00-14:00"></th>
  </div>

  <div class="time">

      <td>14:00-15:00</td>
    <th><input type="checkbox" name="slot[]" value="14:00-15:00"></th>
    </div>

    <div class="time">
	  <td>15:00-16:00</td>
      <th><input type="checkbox" name="slot[]" value="15:00-16:00"></th>
  </div>

  <div class="time">
      <td>16:00-17:00</td>
      <th><input type="checkbox" name="slot[]" value="16:00-17:00"></th>
  </div>


  <div class="time" >
      <td>17:00-18:00</td>
      <th><input type="checkbox" name="slot[]" value="17:00-18:00"></th>
 </div>


 <div class="time">
	  <td>18:00-19:00</td>
    <th><input type="checkbox" name="slot[]" value="18:00-19:00"></th>

    </div>


    <div class="time">

      <td>19:00-20:00</td>
      <th><input type="checkbox" name="slot[]" value="19:00-20:00"></th>
  </div>


  <div class="time">
      <td>20:00-21:00</td>
      <th><input type="checkbox" name="slot[]" value="20:00-21:00"></th>
    </div>

    <div class="time">

      <td>21:00-22:00</td>
    <th><input type="checkbox" name="slot[]" value="21:00-22:00"></th>
    </div>

    <div class="time">
	  <td>22:00-23:00</td>
      <th><input type="checkbox" name="slot[]" value="22:00-23:00"></th>
  </div>

  <div class="time">
      <td>23:00-00:00</td>
      <th><input type="checkbox" name="slot[]" value="23:00-00:00"></th>
      </div>



  </div>

  </div>
</div>
<div>
  <div class="languagegrid" style="text-align: center;">
  <div>
        <td>English</td>
        <th><input type="checkbox" name="Languages[]" value="E"></th>
  </div>
  <div>
        <td>Hindi</td>
        <th><input type="checkbox" name="Languages[]" value="H"></th>

  </div><div>	      <td>Mandarin</td>
        <th><input type="checkbox" name="Languages[]" value="M"></th>
  </div>
  <div style="text-align: center;">
        <td>Spanish</td>
        <th><input type="checkbox" name="Languages[]" value="S"></th>
   </div>

  </div>

<div style="text-align: center;">
<h3 class="headerdoctor">E-mail:</h3>
            <input type="email" name="email" value = "<?php  echo $_SESSION['user'];?>" readonly>



<br>
<br>
<div style="text-align: center;">


    <button type="submit" class=" submits " value="Submit" name="btn-save"> Submit Slots</button>
</div>
            </form>


    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"
    ></script>
    <script>
      $(function () {
        $("#datepicker").datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          orientation: "button",
        });
      });
    </script>
  </body>
</html>
