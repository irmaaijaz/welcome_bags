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
<body>
<?php
include 'header.php';
?>
    
<?php

$conn=mysqli_connect('localhost','root','','wb_data');

$query="select * from register";

$result=mysqli_query($conn, $query);

echo '<div class="table">';
// echo			'<h1>Tables</h1>';
echo '<table class="table">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Contact</th>';
echo '<th>DOB</th>';
echo '<th>Email</th>';
echo '<th>User Name</th>';
echo '<th>Password</th>';
echo '<tr>';
echo '</div>';


while($row=mysqli_fetch_array($result))
{
    echo '<tr>';
    echo '<td>'.$row["fname"].'</td>';
    echo '<td>'.$row["lname"].'</td>';
    echo '<td>'.$row["contact"].'</td>';
    echo '<td>'.$row["dob"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '<td>'.$row["username"].'</td>';
    echo '<td>'.$row["password"].'</td>';
   
   
    // echo "<td><a href=update.php?id=".$row["id"]."> UPDATE </a> </td>";
    echo "<td><a href=ddl.php?id=".$row["id"]."> DELETE </a> </td>";
    

}
echo '</table>';


?>

<?php
include 'footer.php';
?>
</body>
</html>