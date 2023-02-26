<?php
include('dbase.php');
if(isset($_POST["submit"]))
{
    $accno=$_POST["accno"];
    $title=$_POST["title"];
    $author=$_POST["author"];
    $edition=$_POST["edition"];
    $publisher=$_POST["publisher"];

    $query= "INSERT INTO `booktable` (`accno`, `title`, `author`, `edition`, `publisher`) VALUES ('$accno','$title','$author','$edition','$publisher')";	
    if(mysqli_query($db, $query))
     {
	      header('location:view.php');
     }
    else
	 {
		 echo mysqli_error($db);
	 }
}
?>
<form method="POST">
    <h3> ADD BOOK</h3>
AccessionNo <input type="text" name="accno">
<br><br>Title <input type="text" name="title">
<br><br>Author <input type="text" name="author">
<br><br>Edition <input type="text" name="edition">
<br><br>Publisher <input type="text" name="publisher">
<br><input type="submit" name="submit" value="submit">
<a href="search.php">Search book?</a>
</form>
