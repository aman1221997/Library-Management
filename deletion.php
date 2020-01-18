<?php
 $size=sizeof($_POST);
 $j=1;
 for($i=1;$i<=$size;$i++,$j++)
 {
	 $index="b".$j;
	 if(isset($_POST[$index]))
	   $b_id[$i]=$_POST[$index];
	 else
	   $i--;
 }
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'brm_db');
 for($k=1;$k<=$size;$k++)
 {
  $q="delete from book where bookid=".$b_id[$k];
  mysqli_query($con,$q);
 }
 mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="homeStyle.css" />
  <title> Deletion </title>
 </head>
 <body>
  <h1> Book Record Management </h1>
  <p><?php 
			echo $size." Records deleted"; 
	  ?>
   </p>
   Go back to home page<a href="home.php">Click here</a>
 </body>
</html>