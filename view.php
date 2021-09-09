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
<title>View Book Records</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
</head>
<style>
body {
        background: url(https://images.unsplash.com/photo-1514894780887-121968d00567?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80);
} 
 
</style>
<body>
<h1 align="center" style="color:white;">Book Record Management</h1>
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
	<td><?php echo $row['bookid']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['price']; ?></td>
	<td><?php echo $row['author']; ?></td>
	<td><?php echo $row['Isbn_code']; ?></td>
	<td><?php echo $row['Publication']; ?></td>
	<td><?php echo $row['No_of_books_left']; ?></td>
	<td><?php echo $row['Total_no_of_books']; ?></td>
</tr>
<?php 	
}
?>
</table>
 <p style="color:blue;" go back to home page><a style="color:white;" href="home.php">Click Here</a></p>
</body>
</html>
