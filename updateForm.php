<?php
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'brm_db');
 $q="select * from book";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
  <title> Update Book Records </title>
  <link rel="stylesheet" type="text/css" href="homeStyle.css" />
  <link rel="stylesheet" type="text/css" href="viewStyle.css" />
 </head>
 <body>
  <h1> Book Record Management </h1>
  <form action="updation.php" method="post" >
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
    <td><?php echo $row['bookid']; ?>
	    <input type="hidden" name="bookid<?php echo $i; ?>" value="<?php echo $row['bookid']; ?>" /></td>
	<td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['title']; ?>"  /> </td>
	<td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price']; ?>" />  </td>
	<td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author']; ?>" />  </td>
   </tr>
   <?php
    }
   ?>
  </table>
  <input type="submit" value="Update" />
  </form>
 </body>
</html>



