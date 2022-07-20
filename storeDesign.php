<?php
    session_start();
    require("dbcon.php");
    $url = $_POST["url"];
    
    $email = $_SESSION["email"];
    $link = $url."?username=".$email;
    
    $insert = "INSERT INTO designprofile(email,link)VALUES('$email','$link')";
    $response = $con->query($insert);
    if($response)
    {
        echo "success";
    }
    else{
        echo "Databse error";
    }
    

?>