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
    <link rel="stylesheet" href="css/login.css">
    <script src="scripts/validation.js"></script>
</head>
<body>
    
<div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">

            <div class="heading">
               <h2>IPL</h2>
               <p>Book Your Tickets Now</p>
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" action="logic/user_login.php" method="post">
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginpassword" id="loginPassword" required>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Login">
                     <a href="#" class="switch">I'm New</a>
                  </div>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">
               <form class="login-form" action="logic/user_reg.php" method="post">

                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="username" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="email" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone">Phone Number - <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="passwordcon" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                  <input type="hidden" name="limit" value="5">
                     <input type="submit"name="register" value="Signup Now" >
                     <a href="#" class="switch">I have an account</a>
                  </div>
               </form>

            
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>


   <footer>
   </footer>

    
</body>
</html>