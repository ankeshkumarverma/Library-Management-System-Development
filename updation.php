<?php
$size= sizeof($_POST);
$records=$size/8;

for($i=1;$i<=$records;$i++)
{
$index1="bookid".$i;
$bookid[$i]=$_POST[$index1];
$index2="title".$i;
$title[$i]=$_POST[$index2];
$index3="price".$i;
$price[$i]=$_POST[$index3];
$index4="author".$i;
$author[$i]=$_POST[$index4];
$index5="Isbn_code".$i;
$Isbn_code[$i]=$_POST[$index5];
$index6="Publication".$i;
$Publication[$i]=$_POST[$index6];
$index7="No_of_books_left".$i;
$No_of_books_left[$i]=$_POST[$index7];
$index8="Total_no_of_books".$i;
$Total_no_of_books[$i]=$_POST[$index8];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'library');
for($i=1;$i<=$records;$i++)
{
	$q="update book SET title='$title[$i]', price=$price[$i], author='$author[$i]', Isbn_code=$Isbn_code[$i], Publication='$Publication[$i]',No_of_books_left=$No_of_books_left[$i],Total_no_of_books=$Total_no_of_books[$i] where bookid=$bookid[$i]";
     mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Updation</title>
</head>
<style>
body {
        background: url(https://assets.poetryfoundation.org/uploads/contentImages/_twitter/library-header.jpg);
} 
 
</style>
<body>
<h1 align="center" style="color:white;">Book Record Management</h1>
<p><?php 
echo "Records updated";
?>
</p>
Do you want to insert more record?<a href="insertionform.php">Click Here</a></br>
 go back to home page<a href="home.php">Click Here</a>
<?body>
</html>
