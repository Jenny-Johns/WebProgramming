<?php
include('dbase.php');
if(isset($_POST['submit']))
{
    $tit=$_POST['title'];
    $qry="SELECT * FROM `book` WHERE `title`=$tit";
    $result=$db->query($qry);
    if($is_query_run=mysqli_query($db, $qry))
    {
        while($row=$result->fetch_accoc($is_query_run))
        {
            $id=$row['id'];
            $accno=$row['accno'];
            $title=$row['title'];
            $author=$row['author'];
            $edition=$row['edition'];
            $publisher=$row['publisher'];

            ?>
            <table border="2">
                <tr>
                    <td>ID</td>
                    <td>Accessionno</td>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Edition</td>
                    <td>Publisher</td>
        </tr>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["accno"];?></td>
            <td><?php echo $row["title"];?></td>
            <td><?php echo $row["author"];?></td>
            <td><?php echo $row["edition"];?></td>
            <td><?php echo $row["publisher"];?></td></tr></table>
 
 <?php }
 }$db->close();
}
?>
<html>
 <head>
 <title>Book search</title>
 </head>
 <body>
 <form method="POST" action="#">
 <label>Enter the title</label>
 <input type="text" name="title">
 <input type="submit" name="submit" value="submit">
</form>
</body>
</html>