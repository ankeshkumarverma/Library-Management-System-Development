<!DOCTYPE html>
<html>
<head>
<title>Insertion Form</title>
</head>
<style>
body {
        background: url(https://assets.poetryfoundation.org/uploads/contentImages/_twitter/library-header.jpg);
} 
 
</style>
<body>
<h1 align="center" style="color:white;">Book Record Management</h1>

<form action="insertion.php" method="post">
<table id="view_table" align="center">
<tr>
<th>Title</th>
<td><input type="text" name="title" required /></td>
</tr>
<tr>
<th>Price</th>
<td><input type="text" name="price" required /></td>
</tr>
<tr>
<th>Author</th>
<td><input type="text" name="author" /></td>
</tr>
<tr>
<th>Isbn_code</th>
<td><input type="text" name="Isbn_code" /></td>
</tr>
<tr>
<th>Publication</th>
<td><input type="text" name="Publication" /></td>
</tr>
<tr>
<th>No_of_books_left</th>
<td><input type="text" name="No_of_books_left" /></td>
</tr>
<tr>
<th>Total_no_of_books</th>
<td><input type="text" name="Total_no_of_books" /></td>
</tr>

<tr>
<th></th>
<td><input type="submit" value="Insert" required /></td>
</tr>

</body>

</html>
