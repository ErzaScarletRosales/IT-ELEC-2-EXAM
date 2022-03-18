<?php
session_start();
$connection = mysqli_connect("localhost","root","","apple");

if(isset($_POST['registerbtn']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    if($password === $cpassword)
    {
        $query ="INSERT INTO register (firstname,lastname,email,password) VALUES ('$firstname','$lastname,' $email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
         $_SESSION['success'] ="Admin Profile Added";
         header('Location:index.php');

        }

        else
        {
         $_SESSION['status'] ="Admin Profile Not Added";
         header('Location:index.php');

        }

    }

    else
    {
        $_SESSION['status'] ="Password and Confirm Password Does Not Macth  ";
        header('Location: index.php');
    }

}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

	$query = "DELETE FROM register WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

    
	if($query_run)
	{
		
		$_SESSION['success'] ="The Data is Deleted ";
		header('Location:tables.php');
	
	}

	else
    {
		$_SESSION['status'] ="The Data is Not Deleted";
		header('Location:tables.php');
	
    }
}

if(isset($_POST['registerbtn']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password === $cpassword)
    {
        $query ="INSERT INTO register (firstname,lastname,email,password) VALUES ('$firstname',$lastname', $email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
         $_SESSION['success'] ="Admin Profile Added";
         header('Location: tables.php');

        }

        else
        {
         $_SESSION['status'] ="Admin Profile Not Added";
         header('Location:index.php');

        }

    }

    else
    {
        $_SESSION['status'] ="Password and Confirm Password Does Not Macth  ";
        header('Location: index.php');
    }

}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $firstname = $_POST['edit_firstname'];
    $lastname = $_POST['edit_lastname'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    
    $query ="UPDATE register SET firstname='$firstname',lastname='$lastname, email='$email',password='$password' where id='$id' ";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
     $_SESSION['success'] ="The Data is Updeted";
     header('Location: tables.php');

    }

    else
    {
     $_SESSION['status'] ="The Date is not Updeted";
     header('Location:index.php');

    }
}

?>