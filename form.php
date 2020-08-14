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
	    <script
    type="text/javascript"
    src="https://cdn.weglot.com/weglot.min.js"
  ></script>
  <script>
    Weglot.initialize({
      api_key: "wg_6595b397394b082513ae5269c8992a3d7",
    });
  </script>
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
      .back{
        width: 600px;
        padding: 5rem;
        height: 700px;
        text-align:center;

        background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

        border-radius: 5px;
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

              margin-bottom: 1rem;
              border-radius: 5px;
            }


            label{
              font-size: 1.2rem;
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
            }

            @media(min-width:800px){
       #username{
         margin-left: 3rem;
          color:black;

      }
            }




      .submits {

        width: 10%;
        height: 70%;
       border-radius: 5px 5px 5px 5px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #291888, #9d86db, #501ebb);
        background-size: 200%;
        font-size: 2rem;
        color: white;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
        border-radius: 25px;
      }
      .submits:hover {
        background-position: right;
      }


      .optionalbtn{

        width: 10%;
        height: 70%;
       border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #ffffff, #e8f4f7, #d4d4d4);
        background-size: 200%;
        font-size: 2rem;
        color: black;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .optionalbtn:hover {
        background-position: right;
      }

      @media(max-width: 900px)
      {
        .optionalbtn{

        width: 30%;
      }

      }


      /*       Forgot Password button FAF3DD  */

      /*     Sign Up button  */

        input[type="email"] {
              background-color:rgba(255, 255, 255, 0.788);

              font-family: "Abel", sans-serif;

              outline: none;
              border: none;
              height: 5rem;
              width: 90%;
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
               color:black;
      font-size: 2rem;
            }

        .headerdoctor {
              font-size: 2rem;
              font-weight: 550;
              text-align: center;
              font-family: "Century Gothic", sans-serif;
              color:black;
            }

            .headerquestion
            {
              font-size: 1.5em;
              font-weight: 600;
              text-align: center;
              font-family: "Century Gothic", sans-serif;
              color:black;
            }

            .titleform
            {
              font-size: 2em;
              font-weight: 500;
              text-align: center;
              font-family: "Century Gothic", sans-serif;
              color:black;
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




      .table {

        padding:2rem;
        border-collapse: separate;

        text-align: center;
       font-size: 2rem;
       height: 80%;
        color:black;
      }





      td {
       padding-left:3rem ;
        text-align: left;
      padding-right: 3rem;
      }


      .grid{
        display: grid;
        grid-template-columns:1fr 1fr 1fr 1fr ;
      padding-left: 10%;
      padding-right: 10%;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;

      }
      .time{

        border-radius: 5px;
      font-size: 2rem;
        margin:0.5rem;
        color: rgb(34, 34, 34);
      text-align: center;
      height: 4rem;
      width: 90%;
      text-align: center;
      background-color:white;
      padding-top: 1rem;
       box-shadow: 2px 2px 3px #bc94dc;
        border: solid #bc94dc;
        border-width: 0.05rem;
        border-radius: 5px;

      }

      .time:hover{

        background-color: rgb(197, 191, 191);
      }


      @media(min-width:900px){
        .time{

        border-radius: 5px;
      font-size: 2rem;
        margin:0.5rem;
        color: rgb(34, 34, 34);

      height: 7rem;
      width: 80%;
      text-align: center;
      background-color:white;
      padding-top: 7%;
       box-shadow: 2px 2px 3px #bc94dc;
        border: solid #bc94dc;
        border-width: 0.05rem;
        border-radius: 5px;
      }
      }
      select{ background-color:rgba(255, 255, 255, 0.788);
      height:5rem;
      font-size: 1.5rem;
      border-radius:5px;
      width:80%;
      color:black;

      }

      @media(max-width:800px)
      {.submits {

        width: 30%;
        height:40%;
        border-radius:25px ;
      }
        .grid{
        display: grid;
        padding-left: 10%;
        padding-right: 10%;
        grid-template-columns:1fr  ;
        grid-template-rows:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr  1fr 1fr 1fr 1fr 1fr 1fr  1fr 1fr 1fr 1fr 1fr 1fr  ;
      }
      .table {
        border-collapse: separate;

        text-align: center;
       font-size: 1.5rem;
      }
        input[type="email"] {
              background-color:rgba(255, 255, 255, 0.788);

              font-family: "Abel", sans-serif;


              outline: none;


                      height: 5rem;
              width: 100%;
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
              font-size: 2rem;

               color:black;
            }


      }



       table {

        border-radius: 5px;
         background-image: linear-gradient(-225deg, #a28ccc 0%, 	#bc94dc 80%);
       color: rgb(34, 34, 34);


      }

      td{

        font-size: 2rem;
      }

      th{
        font-size: 3rem;
        color:rgb(15, 7, 53);
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

      .username{
        width: 80%;
      }

      .write,
      input[type="tel"] {
       font-family: "Abel", sans-serif;
              color:black;
              outline: none;
              border: none;
              background-color: rgba(255, 255, 255, 0.788);
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
      font-size: 2rem;
              height:5rem;
              width: 40%;



      }::placeholder{
        font-size: 2rem;
      }

      .selectwidth{
        width:30%
      }

      @media(min-width:900px){
        .selectwidth{
        width:10%
      }

      }

      .datetext{

        width: 99%;

        border-style: solid;
        border-width: 0.05rem;
        border-radius: 5px;
         color:black;

      }
      .timezonetext{

        width: 100%;
      }


      @media(min-width:800px){

        .container{
        padding-left: 23%;
      }

        .datetext{

        width: 70%;
        border-style: solid;
        border-width: 0.1rem;
        border-radius: 5px;
         color:black;
         margin-left:0;
      }
      .timezonetext{

        width: 68%;
        padding-left: 33%;

      }
      }
      #initiallyHiddenBlock {
          display: none;
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
@media(min-width:900px){
     .date{
        width: 60%;
        margin-left:0;
      }
      select{
        width:30%;
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

	
          </style>




  </head>
  <body>
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
<h3 class="headerdoctor">
             DATE:
            </h3>


           <div class="container" >



	        	<form action="search.php" method="post" name ="send">
		            <div class="form-group">
		                <div class='input-group date' id='datepicker' style="border:solid black 0.05rem border-radius 5px;">
		     <input type='text' name='date'class="form-control" />
		                    <span class="input-group-addon" style="height: 5rem;">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>



    </div>
    <div>
    <h3 class="headerdoctor">
             SLOT:
            </h3>
<div style="text-align: center ; ">
<select name="timeZoneId">

	<option value="00:00-01:00">00:00-01:00</option>
	<option value="01:00-02:00"> 01:00-02:00</option>
	<option value="02:00-03:00"> 02:00-03:00 </option>
	<option value="03:00-04:00"> 03:00-04:00</option>
	<option value="04:00-05:00"> 04:00-05:00</option>
	<option value="05:00-06:00">05:00-06:00</option>
	<option value="06:00-07:00"> 06:00-07:00</option>
	<option value="07:00-08:00"> 07:00-08:00</option>
	<option value="08:00-09:00">08:00-09:00</option>
	<option value="09:00-10:00">09:00-10:00</option>
	<option value=" 10:00-11:00"> 10:00-11:00</option>
	<option value="11:00-12:00">11:00-12:00</option>
	<option value="12:00-13:00"> 12:00-13:00</option>
	<option value="13:00-14:00">13:00-14:00</option>
	<option value="14:00-15:00">14:00-15:00 </option>
	<option value="15:00-16:00">15:00-16:00</option>
  <option value="16:00-17:00"> 16:00-17:00</option>
  <option value="17:00-18:00"> 17:00-18:00</option>
	<option value="18:00-19:00">18:00-19:00</option>
	<option value="19:00-20:00">19:00-20:00</option>
	<option value="20:00-21:00">20:00-21:00</option>
	<option value="21:00-22:00"> 21:00-22:00</option>
	<option value="22:00-23:00">22:00-23:00</option>
	<option value="23:00-00:00">23:00-00:00</option>



</select>
</div>


  </div>



<br>
<div style="text-align: center;">


    <button type="submit" class=" submits " value="Submit"> PROCEED</button>
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
