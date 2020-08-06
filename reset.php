<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <style>
      @import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");
      * {
       margin: 0;
       padding: 0;
      }
      body {
   

background-color:#adece9 ;
        font-family: "Montserrat", sans-serif;

     height: 100%;
    padding-right: 2%;
    padding-left:2% ;
      }

select {
  background-color: rgba(247, 247, 247, 0.973);
  width: 20%;
  margin-right: 0;

  border-radius: 5px 5px 5px 5px;
  color: black;
}

      h1 {
        font-weight: bold;
        margin: 0;
      }
      h2 {
        text-align: center;
      }
      p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
      }
      span {
        font-size: 12px;
      }
      a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
      }
      button {
        border-radius: 20px;
       background-image: linear-gradient(to right, #126e8a, #5bc3dd, #4bb8d3);
        background-size: 200%;
        border: solid white 0.08rem;
        color: #ffffff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
      }
      button:active {
        transform: scale(0.95);
      }

      button:hover {
        background-position: right;
      }


      input {
       border-radius: 5px;
        border: none;
        padding: 12px 15px;
        margin-top:20px ;
        width: 90%;
        background-color: rgba(247, 247, 247, 0.973);
      }::placeholder{
          color: black;
      }

      input[type="tel"] {
  width: 60%;
  height: 50px;
  background-color: rgba(247, 247, 247, 0.973);



  outline: none;
  border: none;
  margin-left: 0rem;
  border-radius: 5px 5px 5px 5px;
  transition: 0.2s linear;
}




.select {
  background-color: rgba(247, 247, 247, 0.973);
  width: 30%;

  height: 50px;
  border-radius: 5px 5px 5px 5px;
  color: black;
}


      .logo{
          width: 20%;
      }

        .select{
     height: 45px;
    margin: 0;
    }

    

      @media(max-width:900px){

      .logo{
          width: 40%;
      margin:0;
    
      }
    nav{
      margin: 0;
    }
    li a{
      margin: 0;
    }

  

    .select{
     height: 45px;
    margin: 0;
    }

   

   
      }




 button{
      margin-left: 30%;
      margin-top: 1rem;
    }






.navgrid{
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr ;

  padding-right: 20%;
}

@media(max-width:900px) {
input{
  width: 87%;
  margin-left: 1rem;
}
button{
  margin-top: 1rem;
  margin-left: 30%;
}
}

@media(min-width: 900px)
{
 nav{
  margin-top: 1rem;

}

.navgrid{
  display: grid;
  grid-template-rows: 1fr;
  grid-template-columns: 1fr 1fr;
padding-right:27% ;


}
}


     

      @media (min-width: 800px) {

         form {
        background: #111;
        border: 1px solid #191919;
        border-radius: 0.4em;
        bottom: 0;
        box-shadow: 0 5px 10px 5px rgba(0, 0, 0, 0.2);
        height: 50%;
        left: 0;
        margin: auto;
        overflow: hidden;
        position: absolute;
        right: 0;
        top: 0;
        width: 80%;
        padding: 3rem;
        margin-top: 10rem;
      }
      
        form {
          background: #111;
          border: 1px solid #191919;
          border-radius: 0.4em;
          bottom: 0;
          box-shadow: 0 5px 10px 5px rgba(0, 0, 0, 0.2);
          height: 300px;
          left: 0;
          margin: auto;
          overflow: hidden;
          position: absolute;
          right: 0;
          top: 0;
          width: 400px;
          padding: 3rem;
          margin-top: 15rem;
        }
      }

      form:after {
        background: linear-gradient(
          to right,
          #111111,
          #444444,
          #b6b6b8,
          #444444,
          #2f2f2f,
          #272727
        );
        content: "";
        display: block;
      }

body{
    background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
        background-image: linear-gradient(to top, #adece9 0%, #9ba0da 100%);
}

    </style>
  </head>
  <body>


<div style="text-align: center;">
    <img src="logo.png" class="logo">

      <h1 style="color: rgb(31, 33, 34);">RESET PASSWORD</h1>
      </div>
<br>

    <div class="container" id="container">
    
      <div class="form-container sign-up-container">
         
         <br>
        <form action="resetpassword.php" method="POST">
           
     
            <input id="Email" name="username" type="text" placeholder="Username" />
            <input id="Password" name="password" type="password" placeholder="Enter Old Password" />
            <input id="newf" name="new" type="newf" placeholder="Enter New Password" />
            <input id=conf name="conf" type="conf" placeholder="Confirm New Password" />


<br>
           <button name="submit" >SUBMIT</button>

        </form>
      </div>













        </div>
      </div>
    </div>
  </body>

</html>
