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
<body class="main-layout">
  

<?php
	$conn=mysqli_connect("localhost","root","","wb_data");
    if(isset($_POST['submitt']))
    {
        $comment=$_POST['comment'];
    $query="INSERT INTO comments values(id,'$comment')";
        mysqli_query($con,$query);
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
	$conn=mysqli_connect("localhost","root","","wb_data");
    if(isset($_POST['add']))
    {
     
        $price=20;
        $qty=$_POST['qty'];
        $total=$price*$qty;
        
    $queryy="INSERT INTO add_cart values(id,'$price','$qty','$total')";
        mysqli_query($conn,$queryy);
       if($conn)
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

            <div class="layout_padding-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="img_box">
                                <figure><img src="product/b3.jpg" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                            <div class="abotext_box">
                                <div class="product-heading">
                                <?php 
         $sql ="SELECT * FROM up WHERE id = 2";
          $result = mysqli_query($conn,$sql);
          foreach ($result as $row) { 
            ?>
                                    <h2><?php echo $row['title'];?></h2>
                                </div>
                                <div class="product-detail-side">
                                    <span><?php echo $row['price'];?></span>
                                    <span class="rating">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     </span>
                     <?php } ?>
                                    <span class="review">(5 customer review)</span>
                                </div>
                                <div class="detail-contant">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                        <br><span class="stock">2 in stock</span>
                                    </p>
                                    <form class="cart" method="post" action="add_cart1.php">
                                        <div class="quantity">
                                            <input step="1" min="1" name="qty" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                                        </div>
                                        <button type="submit" class="bt_main" name="add"> Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="tab_bar_section">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane active">
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.
                                                    <br>
                                                    <br>Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, pharetra a finibus vitae, lobortis et mi.</p>
                                            </div>
                                        </div>
                                        <div id="reviews" class="tab-pane fade">
                                            <div class="product_review">
                                                <h3>Reviews (2)</h3>
                                                <div class="commant-text row">
                                                    <div class="col-lg-2 col-md-2 col-sm-4">
                                                        <div class="profile">
                                                            <img class="img-responsive" src="images/sicon.png" alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                                        <h5>Soofia</h5>
                                                        <p><span class="c_date">January 23, 2021</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                                        <span class="rating">
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </span>
                                                        <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet..
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="commant-text row">
                                                    <div class="col-lg-2 col-md-2 col-sm-4">
                                                        <div class="profile">
                                                            <img class="img-responsive" src="images/skicon.jpg" alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                                        <h5>Sana Kamran</h5>
                                                        <p><span class="c_date">January 23, 2021</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                                        <span class="rating">
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </span>
                                                        <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="full review_bt_section">
                                                            <div class="float-right">

                                                                <a class="bt_main" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a>

                                                            </div>
                                                        </div>

                                                        <div class="full">

                                                            <div id="collapseExample" class="full collapse commant_box">
                                                                <form accept-charset="UTF-8" action="add_cart.php" method="post">
                                                                    <input id="ratings-hidden" name="rating" type="hidden">
                                                                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                                                    <div class="full_bt center">
                                                                        <button class="bt_main" type="submit" name="submitt">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <?php
            include 'footer.php';
            ?>
        </div>

    </div>

    
</body>
</html>