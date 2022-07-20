<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>payment</title>
</head>
<style type="text/css">

.in{
position:absolute;
left:24rem;
top:3rem;
z-index:93;
width:25rem;
height:15rem;
background-color:#FFF;
border:solid 0rem;

padding:2rem;
box-shadow:0px 4px 8px 4px black;
opacity:0.98;
}
</style>
<body>
        <div class="in">
        <form action="pay.php" method="POST">
          <center> <h1>Please fill this details..</h1></center>
         
          <center><b>Rs.299</b> <input type="hidden" name="price" value="299"><br><br></center>
          Name : <input type="text" name="customername"><br><br>
          Email : <input type="email" name="email"><br><br>
          Contact No : <input type="number" name="contactno"><br><br>
          <input type="submit" name="submit" value="Proceed To Pay">

        

        </form></div>
</body>
</html>