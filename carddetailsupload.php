<?php
  
  include 'dbcon.php';

  if(isset($_POST['submit']))
  {

     $username = $_POST['username'];
     $Profession = $_POST['Profession'];
     $companyname = $_POST['companyname'];
     $email = $_POST['email'];
     $phonenumber = $_POST['phonenumber'];
     $whatsapp = $_POST['whatsapp'];
     $website = $_POST['website'];
     $address = $_POST['address'];
     $fburl = $_POST['fburl'];
     $instagram = $_POST['instagram'];
     $linkdin = $_POST['linkdin'];
     $youtube = $_POST['youtube'];
     $bdescription = $_POST['bdescription'];
     

    $file_name = $_FILES['profile']['name'];
	$file_size = $_FILES['profile']['size'];
	$file_tmp = $_FILES['profile']['tmp_name'];
	$file_type = $_FILES['profile']['type'];
	
	
	 $file_name1 = $_FILES['cover']['name'];
	$file_size1 = $_FILES['cover']['size'];
	$file_tmp1 = $_FILES['cover']['tmp_name'];
	$file_type1 = $_FILES['cover']['type'];
	
  
	 $file_name2 = $_FILES['logo']['name'];
	$file_size2 = $_FILES['logo']['size'];
	$file_tmp2 = $_FILES['logo']['tmp_name'];
	$file_type2 = $_FILES['logo']['type'];
	
	 $file_name3 = $_FILES['images']['name'];
	$file_size3 = $_FILES['images']['size'];
	$file_tmp3 = $_FILES['images']['tmp_name'];
	$file_type3 = $_FILES['images']['type'];
	
	$file_name4 = $_FILES['video']['name'];
	$file_size4 = $_FILES['video']['size'];
	$file_tmp4 = $_FILES['video']['tmp_name'];
	$file_type4 = $_FILES['video']['type'];
	
 /* foreach ($_FILES['images']['name'] as $key => $val) {
     $rand=rand('11111111' , '99999999');
     $file = $rand.'_'.$val;
     //move_uploaded_file($_FILES['images']['tmp_name'][$key],'upload/',$file);}*/

     move_uploaded_file($file_tmp, "profile/".$file_name);
     move_uploaded_file($file_tmp1, "cover/".$file_name1);
     move_uploaded_file($file_tmp2, "logo/".$file_name2);
     move_uploaded_file($file_tmp3, "logo/".$file_name3);
     move_uploaded_file($file_tmp4, "video/".$file_name4);
     
       $insertquery = " insert into carddetailsdb(username, profession, company_name, email, phone_number, whatsapp, website, address, fb_url, instagram, linkdin, youtube, b_description, profile, cover, logo, images,  video   
)values('$username', '$Profession', '$companyname', '$email', '$phonenumber', '$whatsapp', '$website', '$address', '$fburl'
  , '$instagram', '$linkdin','$youtube', '$bdescription', '$file_name', '$file_name1','$file_name2','$file_name3', '$file_name4')";
       $query = mysqli_query($con,$insertquery);
  

   
    
 
        if($query)
        {

            
            include 'payment-pay-aj.php';


        }else
        {

           echo "not inserted";
        }



  }

  else
  {


           echo "no button has been clicked";
  }



?>