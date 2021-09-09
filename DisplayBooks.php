<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$search = $_REQUEST["search"];
 
$query = "select tITLE,price,author,ISBN_code,Publication,No_of_books_left from book where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query(library,$query);
 
if(mysqli_num_rows($result)>0)
 
{
?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th>Book Id</th>
<th>Title</th>
<th>Price</th>
<th>Author</Th>
<th>Isbn_code</Th>
<th>Publication</Th>
<th>No_of_books_left</Th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
	<td><?php echo $row['bookid']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['price']; ?></td>
	<td><?php echo $row['author']; ?></td>
	<td><?php echo $row['Isbn_code']; ?></td>
	<td><?php echo $row['Publication']; ?></td>
	<td><?php echo $row['No_of_books_left']; ?></td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>
<br>