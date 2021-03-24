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
   <body class="main-layout contact_page">
     
   <?php
   include 'header.php';
   ?>
<?php
$conn = mysqli_connect("localhost","root","","wb_data");

if( isset($_POST["subb"]))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phn= $_POST['phn'];
    $message= $_POST['message'];
   
    

    $query="insert into contact values('id','$name','$email','$phn','$message')";
    mysqli_query($conn,$query); 
   //  echo '<script>alert("Data Successfully Inserted")</script>
   //  ';

    if($conn)
    {
         echo '<div class="alert alert-success"> Message Recorded Successfully...</div>';
     }
     else
     {
         echo 'Invalid';
     }

    }
    
    ?>
      
<div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Contact Us</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>




      <!-- map -->
   <div class="contact">
         <div class="container-fluid padddd">
           
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <form class="main_form" action="contact.php" method="POST">
                   <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Name" type="text" name="name" required>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Email" type="text" name="email" required>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <input class="form-control" placeholder="Phone" type="number" name="phn" required>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <textarea class="textarea" placeholder="Message" type="text" name="message" required></textarea>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <button class="send" name="subb" value="send">Send</button>
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