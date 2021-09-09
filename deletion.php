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
	mysqli_select_db($con,'library');
	
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
<title>Deletion</title>
</head>
<style>
body {
        background: url(http://news.mit.edu/sites/mit.edu.newsoffice/files/styles/news_article_image_top_slideshow/public/images/2016/MIT-Future-Libraries_0.jpg?itok=LW52Ykch);
} 
 
</style>
<body style="color:white;">
<h1 align="center" style="color:white;">Book Record Management</h1>
<p style="color:white;"><?php 
echo $size. "Records deleted";
?>
</p>
 go back to home page<a style="color:white;" href="home.php">Click Here</a>
<?body>
</html>



	
	