<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'library');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Update Book Records</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
</head>
<style>
body {
        background: url(https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);
} 
 
</style>

 
</style>
<body>
<h1 align="center" style="color:white;">Book Record Management</h1>
<form action="updation.php" method="post">
<table id="view_table" align="center">
<tr>
<th>Book Id</th>
<th>Title</th>
<th>Price</th>
<th>Author</Th>
<th>Isbn_code</Th>
<th>Publication</Th>
<th>No_of_books_left</Th>
<th>Total_no_of_books</Th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	 $row=mysqli_fetch_array($result);
	?>
	<tr>
	<td><?php echo $row['bookid']; ?>
	<input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid']; ?>" /> </td>
	<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['title']; ?>" /></td>
	<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price']; ?>" /></td>
	<td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['author']; ?>" /></td>
	<td><input type="text" name="Isbn_code<?php echo $i;?>" value="<?php echo $row['Isbn_code']; ?>" /></td>		
	<td><input type="text" name="Publication<?php echo $i;?>" value="<?php echo $row['Publication']; ?>" /></td>
	<td><input type="text" name="No_of_books_left<?php echo $i;?>" value="<?php echo $row['No_of_books_left']; ?>" /></td>
	<td><input type="text" name="Total_no_of_books<?php echo $i;?>" value="<?php echo $row['Total_no_of_books']; ?>" /></td>
</tr>
<?php 	
}
?>
<tr>
<td colspan="7"><input type="submit" value="Update" align="center" /></td>
</tr>
</table>
</form>
</body>
</html>

 