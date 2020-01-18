<?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'brm_db');
 $q="select * from book order by bookid";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
  <title> Veiw Book Records </title>
  <link rel="stylesheet" type="text/css" href="viewStyle.css" />
  <link rel="stylesheet" type="text/css" href="homeStyle.css" />
 </head>
 <body>
  <h1> Book Record Management </h1>
  <table  style="border-style:solid; border-color:maroon; width:100%" id="view_table" >
   <tr>
    <th> Book ID </th>
	<th> Title </th>
	<th> Price </th>
	<th> Author </th>
   </tr>
   <?php
    for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
   ?>
   <tr>
    <td><?php echo $row['bookid']; ?> </td>
	<td><?php echo $row['title']; ?>  </td>
	<td><?php echo $row['price']; ?>  </td>
	<td><?php echo $row['author']; ?>  </td>
   </tr>
   <?php
    }
   ?>
  </table>
  <br/>Go back to home page <a href="home.php"> Click here <a/>
 </body>
</html>



