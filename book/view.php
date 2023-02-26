<?php
include('dbase.php');
?>
<table border='1'>
<h2>Table Content</h2>
  <tr>
       <th>Id</th>
	   <th>AccessionNo</th>
	   <th>Title</th>
	   <th>Author</th>
	   <th>Edition</th>
	   <th>Publisher</th>
  </tr>
<?php
	$sql="SELECT * FROM `booktable`";
	$result=$db->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$id=$row['id'];
		 ?>
			<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['accno'];?></td>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['author'];?></td>
			<td><?php echo $row['edition'];?></td>
			<td><?php echo $row['publisher'];?></td>
			</tr>
			<?php
		}
	}
?>	
</table>