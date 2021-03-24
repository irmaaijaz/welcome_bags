<?php
session_start();
if(!$_SESSION["user"])
{
header("location:register.php");
}
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
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

     <!--fontawesome css-->
     <link rel="stylesheet" href="cssch/font-awesome.min.css">
      <!--bootstrap css-->
      <!-- <link rel="stylesheet" href="cssch/bootstrap.min.css"> -->
      <!--animate css-->
      <link rel="stylesheet" href="cssch/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="cssch/style.css">
      <link rel="stylesheet" href="cssch/bootstrap-select.min.css">
      <link rel="stylesheet" href="cssch/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="cssch/responsive.css">

    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <style>
          .border{
              border:2px 2px groove black;
              box-shadow:4px 4px 4px 4px black;
          }

          .size{
              height:400px;
              width:400px;
          }
          </style>
</head>
<!-- body -->

<body>

   
<?php
include 'header.php';
?>

<?php
$conn= mysqli_connect("localhost","root","","wb_data");

$home= "select * from up ";
    //run query
    $data=mysqli_query($conn,$home);
     

    ?>

   

            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                                <div class="text-bg">
                                    <h1>The latest <br> <strong class="black_bold">BAGS DESIGNS</strong><br>
                                </h1>
                                    <a href="product.php">Shop Now <i class='fa fa-angle-right'></i></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img">
                                    <figure><img src="images/bagbg.png"  /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br><br><br>
            <!-- discount -->
            <div class="container">
                <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg border">
                                                <figure><img src="images/non_woven.jpg"/></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg border">
                                                <figure><img src="images/bag2.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg border">
                                                <figure><img src="images/ribbon.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end discount -->
            
        <br><br><br><br><br>
            <!-- trending-->
            <div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Featured <strong class="black">Products</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                
<?php

$count= mysqli_num_rows($data);

     $i=0;
     $x=[];
   if($count>0)
   {  
      while($rows=mysqli_fetch_assoc($data)) 
   
     {      
       if($i<$count)
        {  $y= $rows['image'];
           $x[$i]=$y;


           $i=$i+1;
        }    

  }  
}                                

?>
<figure><img src="product/<?php echo $x[5]; ?>"/></figure>
  <?php

?>
<h3>Multipurposes</h3>
  </div>
</div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="trending-box">
                                <figure><img src="product/<?php echo $x[6]; ?>"/></figure>
                                <h3>High Quality Non-woven bags</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="product/<?php echo $x[2]; ?>"/></figure>
                                <h3>Stylish look</h3>

                            </div>
                        </div>

                    </div>
                </div>
            </div> 
            <!-- end trending -->

            <!-- our brand -->
            <!-- <div class="brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Featured <strong class="black">Brands</strong></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="brand-bg">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="brand-box">
                                <i><img src="icon/p1.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="brand-box">
                                <i><img src="icon/p2.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="brand-box">
                                <i><img src="icon/p3.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="brand-box">
                                <i><img src="icon/p4.png"/></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end our brand -->
            <br><br><br><br><br>
           <!-- product -->
           <div class="products">
         <div class="main-products">
         <div class="title">
        <h2>Trending <strong class="black">Categories</strong></h2>
    </div>

            <div class="product-slidr">
               <div class="slider">

               <?php 
 $sql ="SELECT * FROM up WHERE id = 8";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                               
                              </div>
                            
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


                  <?php 
 $sql ="SELECT * FROM up WHERE id = 14";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                                 
                              </div>
                             
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


                  <?php 
 $sql ="SELECT * FROM up WHERE id = 10";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                                 
                              </div>
                            
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


                  <?php 
 $sql ="SELECT * FROM up WHERE id = 4";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                                
                              </div>
                             
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


                  <?php 
 $sql ="SELECT * FROM up WHERE id = 2";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                             
                              </div>
                            
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


                 <?php 
 $sql ="SELECT * FROM up WHERE id = 12";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                             
                              </div>
                           
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


                  <?php 
 $sql ="SELECT * FROM up WHERE id = 13";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                  <div>
                 <div class="prod-box">
                        <div class="prod-i">
                           <img src="product/<?php echo $row['image'];?>"alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                              <p class="product_descr"><?php echo $row['title'];?></p>
                               
                              </div>
                             
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <?php } ?>


               </div>
            </div>
         </div>

         <!-- end product -->
            <!-- map -->
            <div class="contact">
                <div class="container-fluid padddd">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Contact <strong class="black">Us</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                             <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                            <form class="main_form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end map -->
            
            <?php
            include 'footer.php';
            ?>
        </div>

    </div>
    <script src="jsh/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="jsch/bootstrap.min.js"></script> 
      <script src="jsch/bootstrap-select.min.js"></script>
      <script src="jsch/slick.min.js"></script> 
      <script src="jsch/wow.min.js"></script>
      <!--custom js--> 
      <script src="jsch/custom.js"></script>

    
    <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js --> 
    
</body>

</php>