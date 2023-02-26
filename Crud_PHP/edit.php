<?php
include('dbase.php');
$id=$_GET['id'];
$sql="SELECT * FROM `crudtable` where id=$id";
	$result=$db->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
            $name=$row['name'];
            $email=$row['email'];
            $contact=$row['contact'];
        }
    }

?>

<html>
<head>
    <title>EDIT</title>
</head>
<body>
<form method="POST">
Name <input type="text" name="name" value="<?php echo $name; ?>">
<br><br>Email <input type="email" name="email" value="<?php echo $email; ?>">
<br><br>Contact <input type="text" name="contact" value="<?php echo $contact; ?>">
<br><input type="submit" name="update" value="Update">
</form>
</body>
</html>


<?php
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];

    $qry="update crudtable set name='$name', email='$email', contact='$contact' where id=$id";

    if(mysqli_query($db,$qry))
    {
        header('location:view.php');

    }
    else
    {
        echo mysqli_error($db);

    }
}
?>