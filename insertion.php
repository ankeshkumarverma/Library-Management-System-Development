<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$Isbn_code=$_POST['Isbn_code'];
$Publication=$_POST['Publication'];
$No_of_books_left=$_POST['No_of_books_left'];
$Total_no_of_books=$_POST['Total_no_of_books'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'library');

$q="INSERT INTO book (title,price,author,Isbn_code,Publication,No_of_books_left,Total_no_of_books) values('$title',$price,'$author',$Isbn_code,'$Publication',$No_of_books_left,$Total_no_of_books)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion</title>
</head>
<style>
body {
        background: url(https://assets.poetryfoundation.org/uploads/contentImages/_twitter/library-header.jpg);
} 
 
</style>
<body>
<h1 align="center" style="color:white;">Book Record Management</h1>
<p><?php 
if($status==1) 
	echo "Record inserted";
else 
	echo "Insertion Failed";
?>
</p>
Do you want to insert more record?<a href="insertionform.php">Click Here</a></br>
go back to home page<a href="home.php">Click Here</a>
<?body>
</html>
