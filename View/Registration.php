<?php 
   include '../Control/Registrationcheck.php'; 
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Sign UP Page</title>
      <link rel="stylesheet" type="text/css" href="../Css/StyleReg.css">
   </head>
   <body>
      <script src="../Js/MyScript.js"></script>
      <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validation()">
         <div class=container>
            <div class=header>
               <?php include "../Layout/Header.php";?>
               <nav>
                  <a href="Home.php">Home</a> | 
                  <a href="Login.php">Login</a> | 
                  <a href="Registration.php">Register</a> | 
               </nav>
            </div>
            <div class=main-user-info>
               <div class=user-input-box>
                  <label><b>Username:</b></label>
                  <input type="text" id="uname" name="uname" value="">
                  <p id="unameError"></p>
                  <?php echo $nameErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>Date of Birth:</b></label>
                  <input type="date" id="udob" name="udob" value="">
                  <p id="udobError"></p>
                  <?php echo $dobErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>Email:</b></label>
                  <input type="email" id="uemail" name="uemail" value="">
                  <p id="uemailError"></p>
                  <?php echo $mailErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>Number:</b></label>
                  <input type="text" id="utell" name="utell" value="">
                  <p id="utellError"></p>
                  <?php echo $numErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>NID:</b></label>
                  <input type="file" id="unid" name="unid" value="">
                  <p id="unidError"></p>
                  <?php echo $nidErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>Address:</b></label>
                  <textarea id="reg-textarea" name="des"></textarea>
                  <p id="udesError"></p>
                  <?php echo $addErr;?>
               </div>
               <div class=gender-input-box>
                  <label><b>Gender:</b></label>
                  <div class=category>
                     <input type="radio" id="ugender1" name="ugender" value="male">Male
                     <input type="radio" id="ugender2" name="ugender" value="female">Female
                     <input type="radio" id="ugender3" name="ugender" value="other">Other
                  </div>
                  <p id="ugenderError"></p>
                  <?php echo $genErr;?>
               </div>
               <div class=gender-input-box>
                  <label><b>Vendor Type:</b></label>
                  <div class=category>
                     <input type="checkbox" id="uvote[]" name="vote[]" value="train"> TRAIN 
                     <input type="checkbox" id="uvote[]" name="vote[]" value="bus"> BUS 
                     <input type="checkbox" id="uvote[]" name="vote[]" value="air"> AIR 
                  </div>
                  <p id="uvoteError"></p>
                  <?php echo $venErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>Password:</b></label>
                  <input type="password" id="upass" name="upass" value="">
                  <p id="upassError"></p>
                  <?php echo $passErr;?>
               </div>
               <div class=user-input-box>
                  <label><b>Confirm Password:</b></label>
                  <input type="password" id="ucpass" name="ucpass" value="">
                  <p id="ucpassError"></p>
                  <?php echo $cpassErr;?>
               </div>
            </div>
            <div class=label-bottom>
               <input type="submit" class="button" name="submit" value="Sign In"><br>
               <span class=>already have an account?<a href="Login.php">LogIn</a></span>
            </div>
         </div>   
      </form>
   </body>
</html>