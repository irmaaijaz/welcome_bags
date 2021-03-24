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
	$conn=mysqli_connect("localhost","root","","wb_data");
    if(isset($_POST['submit']))
    {
        $title=$_POST['title'];
        $price=$_POST['price'];
       
        $pictures=$_FILES['image']['name'];
        $query="INSERT INTO up values(id,'$title','$price','$pictures')";
        mysqli_query($conn,$query);
        move_uploaded_file($_FILES["image"]["tmp_name"],"product/".$pictures);


         if($con)
    {
        echo '<div class="alert alert-success"> Data has been successfully inserted...</div>';
    }
    else
    {
        echo 'Invalid';
    }
    }


?>
    <?php
    include 'header.php';
    ?>
    
   
    <section id="contact">
	  <div class="container">
	   
       <div class="col-sm-6  aniview" data-av-animation="slideInLeft">
        <div class="form-area">  
        <form role="form" action="upload.php" method="post" enctype="multipart/form-data">
        <br style="clear:both">
					<h3 style="margin-bottom: 25px; text-align: center;"> Upload Data</h3>
					<div class="form-group">
						<input type="text" class="form-control" name="title" placeholder="title" required>
					</div>
    				
					<div class="form-group">
						<input type="text" class="form-control" name="price" placeholder="Price" required>
					</div>

					<div class="form-group">
						<input type="file" class="form-control" name="image">
					</div>

					<input type="reset" id="submit" name="reset" class="btn btn-default pull-right" value="reset"/>      
            <input type="submit" id="submit" name="submit" class="btn btn-default pull-right" value="Submit"/>
        
        </form>
    </div>
      </div>
	   </div>
     </div>
	</section>
<br><br><br>
    <?php
    include 'footer.php';
    ?>
</body>
</html>