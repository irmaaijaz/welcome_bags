<?php
session_start();
?>
<!DOCTYPE php>
<php lang="en">
   <head>
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
      <!-- fevicon -->
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
   <!-- body -->
   <body class="main-layout">

   <?php
   $conn = mysqli_connect("localhost","root","","wb_data");
   ?>
     
   <?php
   include 'header.php';
   ?>
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Our Product</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3">
      <!-- product -->
      <?php 
 $sql ="SELECT * FROM up WHERE id = 1";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
            

      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt"href="add_cart.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
      <!-- product -->
      <?php 

          
$sql ="SELECT * FROM up WHERE id = 2";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart1.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
      <!-- product -->
      <?php 

          
$sql ="SELECT * FROM up WHERE id = 3";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart2.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
      <!-- product -->
      <?php 

          
$sql ="SELECT * FROM up WHERE id = 4";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart3.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
      <!-- product -->
      <?php 

          
$sql ="SELECT * FROM up WHERE id = 5";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart4.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
      <!-- product -->
      <?php 

          
$sql ="SELECT * FROM up WHERE id = 9";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart5.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Price :<?php echo $row['price'];?></p>
            <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
        <!-- product -->
        <?php 

          
$sql ="SELECT * FROM up WHERE id = 6";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart6.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Price :<?php echo $row['price'];?></p>
            <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
        <!-- product -->
        <?php 

          
$sql ="SELECT * FROM up WHERE id = 7";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart7.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
        <!-- product -->
        <?php 

          
$sql ="SELECT * FROM up WHERE id = 8";
$result = mysqli_query($conn,$sql);
foreach ($result as $row) { ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="product/<?php echo $row['image'];?>" width="544" height="200"  alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="add_cart8.php?id=<?php echo $row['id'];?>">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
          <p class="product_price">Price :<?php echo $row['price'];?></p>
          <p class="product_descr"><?php echo $row['title'];?></p>
          </div>
        </div>
      </div><?php } ?>
      <!-- end product -->
     
      
    </div>
  </div>
</div>

     <?php
     include 'footer.php';
     ?>
   </div>

</div>

   
   </body>
</php>