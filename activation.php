<?php

session_start();

include 'dbcon.php';

if (isset($_GET['token'])) 
{

	$token = $_GET['token'];
  
    $updatequery = "update registration set status= 'active' where token= '$token' ";

    $query = mysqli_query($con,$updatequery);

    if($query)
    {

        if(isset($_SESSION['msg']))
        {

           $_SESSION['msg'] = "Account updated successfuly";

           header('location:login.php');

        }

         else
        {

            $_SESSION['msg'] = "you are log out";

             header('location:login.php');

         }

     }else
     {

         
           $_SESSION['msg'] = "Account not updated";

           header('location:signup.php');



     }
   
}

?>