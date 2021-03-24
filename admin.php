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
</head>
<body>

<?php

if(isset($_POST['sub4'])){

    $conn = mysqli_connect("localhost","root","","wb_data");
    $username = 'admin';
    $password = 'irma123';

    $query="select * from register where username='admin'";
    $resaa=mysqli_query($conn,$query);
    $rowsa=mysqli_fetch_array($resaa);
 
     if(mysqli_num_rows($res)>0)
    {
         $_SESSION["user"] = $rowsa["username"];
        $_SESSION["fname"] = $rowsa["fname"];
        $_SESSION["lname"] = $rowsa["lname"];
        header("location:index1.php");
        // echo'hello';
    }
    else
    {
        echo "Invalid credentials";
    }
    
    }
?>

<?php
include 'header.php';
?>



<form action="register.php" method="post">
                    <div class="col-lg-10">
                        <div class="login-form">
                        <span style="font-size:25px; color:teal; padding-left:30px; font-family:segeo-script"> LOG IN </span>
                            <div class="row">
                           
                                <div class="col-md-6">
                              
                                   
                                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                   
                                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                                </div>
                               
                                <div class="col-md-12">
                                    <button class="btn submit" name="sub4" style="color:black; background-color:teal;">Login</button>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    </form>
                    <br>
                    <br>
<?php
include 'footer.php';
?>
    
</body>
</html>