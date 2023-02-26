<?php
include('dbase.php');
?>
<table border='1'>
<h2>Table Content</h2>
  <tr>
       <th>Id</th>
	   <th>Name</th>
	   <th>Email</th>
	   <th>Contact</th>
	   <th>Action</th>
  </tr>
<?php
	$sql="SELECT * FROM `crudtable`";
	$result=$db->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$id=$row['id'];
		 ?>
			<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td>
			<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
			<a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
			</tr>
			<?php
		}
	}
?>	
</table>