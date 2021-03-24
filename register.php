<?php
session_start();
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Welcome Bags</title>
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
if(isset($_POST['sub1'])){

    $conn = mysqli_connect("localhost","root","","wb_data");
    $username = $_POST['uname'];
    $password = $_POST['pword'];

    $query="select * from register where username='$username'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($res);
 
     if(mysqli_num_rows($res)>0)
    {
         $_SESSION["user"] = $row["username"];
        $_SESSION["fname"] = $row["fname"];
        $_SESSION["lname"] = $row["lname"];
        header("location:index.php");
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

<?php
if(isset($_POST['sub']))
{
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $contact = $_POST["contact"];
        $dob = $_POST["dob"];
        $email=$_POST["emaill"];
        $username=$_POST["username"];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        // $password=$_POST["password"];
   
        $conn= mysqli_connect("localhost","root","","wb_data");
    
        $query=" insert into register values(id,'$fname','$lname','$contact','$dob','$email','$username','$password'); ";
    
        mysqli_query($conn,$query);
        // header("location:index.php");
    
        echo '<div class="alert alert-success"> Data has been successfully inserted...</div>';


    // if($conn)
    // {
    //     echo '<div class="alert alert-success"> Data has been successfully inserted...</div>';
    // }
    // else
    // {
    //     echo 'Invalid';
    // }

}

?>


<?php
	// $con=mysqli_connect("localhost","root","","wb_data");
	

    // if(isset($_POST['sub1']))
    // {
    // $user=$_POST["username"];
    // $pass=$_POST["password"];
    // if($user=="admin")
    // {
    //     $query="select * from admin where username='$user'";
    //     $res=mysqli_query($con,$query);
    //     $row=mysqli_fetch_array($res);
    //     if($row['password']=$pass)
    //     {
    //        $_SESSION["user"]=$user;
    //        header("location:index.php");
    //     }   
    //     else{
    //         echo "not valid";
    //     }
    // }
    // else
    // {
    //     $querya="select * from register where username='$user'";
    //     $resa=mysqli_query($con,$querya);
    //     $rowa=mysqli_fetch_array($resa);
    //     if(password_verify($pass,$rowa['password']))
    //     {
    //        $_SESSION["user"]=$user;
    //        header("location:index.php");
    //     }   
    //     else{
    //         echo "not valid";
    //     }
    // }
    // }
 
		





?>


        <!-- Login Start -->
        <form action="register.php" method="post">
        <div class="login">
        <br><br>
           <span style="font-size:25px; color:teal; padding-left:30px; font-family:segeo-script"> SIGN UP</span>
           <br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                            <div class="row">
                                <div class="col-md-6">
                           
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="First Name" name="fname" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name"</label>
                                    <input class="form-control" type="text" placeholder="Last Name" name="lname" required>
                                </div>

                                <div class="col-md-6">
                                    <label>Contact</label>
                                    <input class="form-control" type="number" placeholder="Contact" name="contact" required>
                                </div>

                                <div class="col-md-6">
                                    <label>DATE OF BIRTH</label>
                                    <input class="form-control" type="date" placeholder="DATE OF BIRTH" name="dob" required>
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" pattern="[a-zA-z0-9]*[@][a-zA-Z]*[.][a-z]*" placeholder="E-mail" name="emaill" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Username</label>
                                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn submit"  name="sub" style="color:black; background-color:teal;">signup</button>
                                   </div>
                        
                            </div>
                        </div>
                    </div>
                    </form>

                    <br><br>


                    <form action="register.php" method="post">
                    <div class="col-lg-10">
                        <div class="login-form">
                        <span style="font-size:25px; color:teal; padding-left:30px; font-family:segeo-script"> LOG IN </span>
                            <div class="row">
                           
                                <div class="col-md-6">
                              
                                    <label>Username</label>
                                    <input class="form-control" type="text" placeholder="Username" name="uname" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="pword" required>
                                </div>
                               
                                <div class="col-md-12">
                                    <button class="btn submit" name="sub1" style="color:black; background-color:teal;">Login</button>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
               
            </div>
        </div>
        
        <!-- Login End -->
        <br>

        <?php
        include 'footer.php'
        ?>
       
</body>
</html>