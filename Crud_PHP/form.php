<?php
include('dbase.php');
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $contact=$_POST["contact"];

    $query="INSERT INTO `crudtable`(`name`, `email`, `contact`) VALUES ('$name','$email','$contact')";	
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
Name <input type="text" name="name">
<br><br>Email <input type="email" name="email">
<br><br>Contact <input type="text" name="contact">
<br><input type="submit" name="submit" value="submit">
</form>
