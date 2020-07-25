<?
session_start();

if($_SESSION["user"]==true){

}
else{
    header("Location: index.php");
}
?>







<?php

session_start();

     $id = $_POST['id'];

     $email = $_POST['email'];

     $docemail = $_POST['docemail'];




     $conn = new mysqli('localhost','root','root','appointment');
     if($conn->connect_error)
     {
       die('connection failed :' .$conn->connect_error);

     }
     else

     {
       $stmt = $conn->prepare("insert into acceptappoiintment(id, email,docemail )
       values(?, ?, ?)");
      //$b=implode(",",$slot);
       $stmt->bind_param("sss",$id,$email, $docemail);
       $stmt->execute();
       if($stmt == TRUE){
       $sql = "SELECT * FROM booking WHERE  id = {$_REQUEST['id']}";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();}
       $sql = "DELETE  FROM booking WHERE id = {$_REQUEST['id']}";
       if($conn->query($sql) == TRUE){
         echo "sucessful";
       }
       else{
         echo "unable to delete";
       }


       echo "Done";
      header("Location:submitted.php");
       $stmt->close();
       $conn->close();}
