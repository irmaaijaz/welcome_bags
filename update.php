<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Bags</title>

     <!-- basic -->
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon --
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body class="main-layout">

<?php

$conn=mysqli_connect('localhost','root','','wb_data');
$query="select * from register where id=".$_GET["id"];
$result=mysqli_query($conn, $query);

$id="";
$fname="";
$lname="";
$contact="";
$dob="";
$email="";
$username="";
$password ="";

while($row=mysqli_fetch_array($result))
{
    
    $id=$row["id"];
    $fname=$row["fname"];
    $lname=$row["lname"];
    $contact=$row["contact"];
    $dob=$row["dob"];
    $email=$row["email"];
    $username=$row["username"];
    $password=$row["password"];
    
}

if(isset($_POST["update"]))
{       
    
    $id=$row["id"];
    $fname=$row["fname"];
    $lname=$row["lname"];
    $contact=$row["contact"];
    $dob=$row["dob"];
    $email=$row["email"];
    $username=$row["username"];
    $password=$row["password"];
   
//$conn= mysqli_connect("localhost","root","","form_database");
        $q= "update register set fname='$fname',lname='$lname',contact='$contact',dob='$dob',email='$email',username='$username',password='$password' where id='$id'";

    mysqli_query($conn,$q);
    header("location:user_data.php");
}



?>

<?php
include 'header.php';
?>


<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>"/>
    <table class="table">
        <tr>
            <td><Label>first Name</Label></td>
        <td><input type="text" name="fname" value="<?php echo $fname ?>"/></td>
        </tr>
        <tr>
            <td><Label>Last Name</Label></td>
        <td><input type="text" name="lname" value="<?php echo $lname ?>"/></td>
        </tr>
        <tr>
            <td><Label>contact</Label></td>
        <td><input type="number" name="contact" value="<?php echo $contact ?>"/></td>
        </tr>
        <tr>
            <td><Label>DOB</Label></td>
        <td><input type="date" min="2010-1-1" max="2022-1-1" name="dob" value="<?php echo $dob ?>"/></td>
        </tr>
        <tr>
            <td><Label>Email</Label></td>
        <td><input pattern="[a-zA-Z0-9]*[@][a-z]*[.][a-zA-Z]*"  name="email" value="<?php echo $email ?>"/></td>
        </tr>
        <tr>
            <td><Label>User Name</Label></td>
        <td><input type="text" name="username" value="<?php echo $username ?>"/></td>
        </tr>
       
        <tr>
            <td><Label>Password</Label></td>
        <td><input type="password" name="password" value="<?php echo $password ?>"/></td>
        </tr>
       
        <tr>
            <td><input type="submit" class="btn btn-primary" name="update" value="Update"/></td>
        </tr>
        </table>
</form>
 
    <?php
    include 'footer.php';
    ?>
</body>
</html>