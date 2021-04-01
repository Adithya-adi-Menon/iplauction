<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg">
    <style>
        .bg{
           background-color: #2A265F;
        }
    </style>
  <a class="navbar-brand" href="#">Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

        <a class="nav-link" href="#">User: <?php echo $_SESSION['email']; ?><span class="sr-only">(current)</span></a>
      </li>
>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
    <?php 
require 'dbconfig.php';
 $query1 = "SELECT tickets FROM login WHERE email='{$_SESSION['email']}'";
 $query_run1 = mysqli_query($conn,$query1);
 if(mysqli_num_rows($query_run1)>0){
     while($row1=mysqli_fetch_assoc($query_run1)){

?>
    <a class="form-control mr-sm-2">Your Tickets:<?php echo $row1['tickets'] ?></a>
    <?php
     }
    }
?>
      <input type="submit"  name="logout" class="btn btn-outline-success my-2 my-sm-0" value="Logout">
    </form>
  </div>
</nav>




       <!-- Topic Cards -->
       <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
            <?php
                   
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
            </div>
        </div>
    </div>
<?php
unset($_SESSION['ticketsused']);
unset($_SESSION['stand']);

?>
    
</body>
</html>