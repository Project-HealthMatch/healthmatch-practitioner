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
            
      font-size: 2rem;
            }

            @media(min-width:800px){
       #username{
         margin-left: 3rem;
          color:black;

      }
            }




      .submits {

        width: 20%;
        height: 70%;
       border-radius: 5px 5px 5px 5px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #007e71, #86cedb, #1a0549);
        background-size: 200%;
        font-size: 2rem;
        color: white;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
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
              font-size: 2.1em;
              font-weight: 500;
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
      background-color: rgb(232, 227, 245);
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

        width: 50%;
        height:30%
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
           
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
              font-size: 2rem;

               color:black;
            }


      }


        input[type="email"],input[type="text"]{
      width:90%;
       color:black;
       font-size: 2rem;
        }::placeholder{
          color:rgb(51, 51, 51);
          font-size: 2rem;
        }

        @media(min-width:800px){

        input[type="email"],input[type="text"],input[type="tel"]{
      width:40%;
      color:black;
      font-size: 2rem;
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
      }
      select{
        width:30%;
      }

}

@media(max-width:900px){
    input[type="email"]{

width: 99%;
margin: 0;

    }  
} 

          </style>




  </head>
  <body>
 


    

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





            </style>
            <style>
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

          width: 20%;
          height: 70%;
         border-radius: 5px 5px 5px 5px;
          outline: none;
          border: none;
          background-image: linear-gradient(to right, #007e71, #86cedb, #1a0549);
          background-size: 200%;
          font-size: 2rem;
          color: white;
          font-family: "Poppins", sans-serif;
          text-transform: uppercase;
          margin: 1rem 0;
          cursor: pointer;
          transition: 0.5s;
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
                font-size: 2.1em;
                font-weight: 500;
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
        background-color: rgb(232, 227, 245);
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

          width: 50%;
          height:30%
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


          input[type="email"],input[type="text"]{
        width:90%;
         color:black;
         font-size: 2rem;
          }::placeholder{
            color:rgb(51, 51, 51);
            font-size: 2rem;
          }

          @media(min-width:800px){

          input[type="email"],input[type="text"],input[type="tel"]{
        width:40%;
        color:black;
        font-size: 2rem;
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

          width: 65%;
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

        .date{
          width: 55%;
        }

                .show{
margin-left: 43%;
width:21rem;}

.card{
  border-radius: 5px;
font-size: 2rem;
margin:0.5rem;
color: rgb(34, 34, 34);
text-align: center;
height: 15rem;
width: 90%;
text-align: center;
background-color:white;
padding-top: 1rem;
box-shadow: 2px 2px 3px #bc94dc;
border: solid #bc94dc;
border-width: 0.05rem;
border-radius: 5px;
margin-left: 5%;
}
.card:hover{



  background-color: rgb(197, 191, 191);


}

@media(min-width:900px){

  .timegrid{
    display:grid;
  grid-template-columns:1fr 1fr  ;
    grid-template-rows:1fr 1fr  ;
  }
}



.readonly{

  margin-left: 37%;
  }

  .headerread {
        font-size: 2.1em;
        font-weight: 500;
margin-left: 12rem;
        font-family: "Century Gothic", sans-serif;
        color:black;
      }

      .headerdate {
            font-size: 2.1em;
            font-weight: 500;
    margin-left: 15rem;
            font-family: "Century Gothic", sans-serif;
            color:black;
          }

          .slotbox{

            border:solid 0.05rem #bc94dc;
            margin:1rem;
            font-size: 1.5rem;
            background-color: white;
            width: 30rem;
            height:5rem;
            border-radius: 5px;
            padding-top: 1.5rem;
            margin-left: 39%;
             box-shadow: 2px 2px 3px #bc94dc;
            }

            .slotbox:hover{
              background-color:#a1a1a17e;
            }

          


            
.readonly{

  margin-left: 1rem;
  }

  
     input[type="email"],input[type="text"],input[type="tel"]{
        width:99%;
         color:black;
         font-size: 2rem;
          }::placeholder{
            color:rgb(51, 51, 51);
            font-size: 2rem;
         
          }

           .headerread {
       
margin-left: 12rem;
        
      }

      .headerdate {
        
    margin-left: 15rem;
         
          }
            }
              
      



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

      .date{
width:50%;
margin-top:1rem;
      }
    </style>



  </head>
 <div style="text-align: left; ">
<img src="logo.png" class="logo">
</div>
  <br>
 <input type="text" class="date" style="width:50%;"
      name = "date" value = "<?php echo $_POST['date'];?>" readonly>

               
         

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
              echo'<div style="text-align:center;>';
               echo'<h1>No doctors available!</h1>';
                echo'</div>';
           }
       } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       }

    