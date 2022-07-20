<?php
  
  include 'dbcon.php';

  if(isset($_POST['submit']))
  {

   
     
     $email = $_POST['email'];
     $link = $_POST['links']."?username=".$email;
 
       $insertquery = "insert into profilelinks(email, links)values('$email','$link')";
       $query = mysqli_query($con,$insertquery);
  

   
    
 
        if($query)
        {

            echo "inserted";
            

        }else
        {

           echo "not inserted";
        }
//}


  }else{


           echo "no button has been clicked";
  }



?>