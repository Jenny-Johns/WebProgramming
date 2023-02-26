<?php
include('dbase.php');
$id=$_GET['id'];
$qry="delete from crudtable where id=$id";
if(mysqli_query($db,$qry))
{
    header('location:view.php');

}
else
{
echo mysqli_error($db);
}