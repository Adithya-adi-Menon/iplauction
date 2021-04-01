<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
       <!-- Topic Cards -->
       <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
            <?php
                    require 'dbconfig.php';
                    $query = "SELECT * FROM matches";
                    $query_run = mysqli_query($conn,$query);
                     if(mysqli_num_rows($query_run)>0){
                     while($row=mysqli_fetch_assoc($query_run)){
                         
                         ?>
                  
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            
                    <a href=booking_stand.php?branches=<?php echo $row['id'];?>>
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img  src="uploads/<?php echo $row['image']; ?>" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6><?php echo $row['name'];?></h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
                <?php
                     }
                    }
                    ?>
                <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="images/kkr.jpeg" alt="" />
                                </div>
                                <div class="text-container">                                    
                                    <h6>Title 02</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="images/mi.jpeg" alt="" />
                                </div>

                                <div class="text-container">
                                    <h6>Title 03</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="images/rcb.jpeg" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Title 04</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="images/shr.jpeg" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Title 04</h6>
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>

    
</body>
</html>