<?php
include('security.php');

$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
   if($password === $cpassword)
   {
        $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
        $query_run = mysqli_query($connection, $query);
            
        if($query_run)
        {
          // echo "Saved";
           $_SESSION['status'] = "Admin Profile Added";
           $_SESSION['status_code'] = "success";
           header('Location: register.php');
        }
        else 
        {
           $_SESSION['status'] = "Admin Profile Not Added";
           $_SESSION['status_code'] = "error";
           header('Location: register.php');  
        }
    }
    else 
    {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        $_SESSION['status_code'] = "warning";
        header('Location: register.php');  
    }
}

if(isset($_POST['updatebtn']))
{
    $id =$_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE register SET username='$username',email='$email', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
      $_SESSION['success'] = "Your data is updated";
      header('location: register.php');
    }
    else
    {
    $_SESSION['status'] = "Your data is not updated";
    header('location: register.php');
    }
}


if(isset($_POST['delete_btn']))
{
 $id = $_POST['delete_id'];
 $query = "DELETE FROM register WHERE id='$id'" ;
 $query_run = mysqli_query($connection, $query); 
 if($query_run)
 {
   $_SESSION['success'] = "Your data is deleted";
   header("location: register.php");

 }
 else
 {
 $_SESSION['status'] = "Your data is not deleted";
   header("location: register.php");
 }
}
?>




<?php
include('security.php');


if(isset($_POST['login_btn']))
{
  $email_login = $_POST['emaill'];
  $password_login = $_POST['passwordd'];

  $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
  $query_run = mysqli_query($connection,$query);

  if(mysqli_fetch_array($query_run))
  {
    $_SESSION['username'] = $email_login;
    header('Location:index.php');
  }
  else
  {
   $_SESSION['status'] = "Invalid email or password";
   header('Location:login.php');
  }
}




?>