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
<title>Delete Book Records</title>
<link rel="stylesheet" href="./css/viewstyle.css" />
</head>
<style>
body {
        background: url(http://news.mit.edu/sites/mit.edu.newsoffice/files/styles/news_article_image_top_slideshow/public/images/2016/MIT-Future-Libraries_0.jpg?itok=LW52Ykch);
} 
 
</style>
<body>
<h1 align="center" style="color:white;">Book Record Management</h1>
<form action="deletion.php" method="post">
<table id="view_table" align="center">
<tr>
<th>Book Id</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
<th>Isbn_code</Th>
<th>Publication</Th>
<th>No_of_books_left</Th>
<th>Total_no_of_books</Th>
<th>select to delete</th>
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
	<td><input type="checkbox" value="<?php echo $row['bookid']; ?>" name="b<?php echo $i; ?>"/></td>
	</tr>
	<?php
}
?>
<tr>
<td colspan="7"> <input type="submit" value="Delete"/></td>
</tr>
</table>
</form>
</body>
</head>
