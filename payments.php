<?php 
     require_once("header.php");
        

?>

<?php if(!empty($_POST)){
                     $_SESSION['email'];
                     $_SESSION['password'];
                     $_SESSION['country'] = $_POST['country'];
                     $_SESSION['fullname'] = $_POST['fullname'];
                     $_SESSION['countrycode'] = $_POST['countrycode'];
                     $_SESSION['mobilenumber'] = $_POST['mobilenumber'];
                     $_SESSION['address1'] = $_POST['address1'];
                     $_SESSION['address2'] = $_POST['address2'];
                     $_SESSION['city'] = $_POST['city'];
                     $_SESSION['area'] = $_POST['area'];
                     $_SESSION['province'] = $_POST['province'];
                     $_SESSION['landmark'] = $_POST['landmark'];
                     $_SESSION['addresstype'] = $_POST['addresstype'];
    
                     
} ?>

<link rel="stylesheet" href="css/payments.css">
<!-- Modal -->


    <script type='text/javascript'>
               
             $(document).ready(function(){
             
             $("#exampleModal").modal('show');
             
             });
   </script>
<form action="verify-sms.php" method='post' id='payment-form'>                   
<div class="modal show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="mod modal-dialog-centered">
    <div class="modal-content">
          <div class="row mod-head">
               <div class="col pt-1">
               <h5 class="mod-head-title label-text">Add a credit or debit card</h5>
          
               </div>
               <div class="col" style='transform: translate(0, -5%)'>
               <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                    <span style='font-size: 20px;' aria-hidden="true">&times;</span>
               </button>
               </div>
          </div>
     <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-1 col-sm-2 mod-body mod-input" >
                         <div class="row">
                              <label class="col mr-3 label-text text-right mt-1" for="cardnumber">Card number</label>
                              <input class='col mb-1 mr-1 ml-1 pl-1 input-validation' type="text" maxlength='16' id='card-number' name='cardnumber' >
                              <p class="log"></p>
                         </div>
                         <script>
                              $(function() {
                                   $('#card-number').validateCreditCard(function(result) {
                                        $('.log').html($('#card-number').val() == '' ? '' : (
                                                   result.card_type == null  ? '<img class="mt-1" src="img/wrong.png" width="15px"/>' :
                                                   result.valid == false ? '<img class="mt-1" src="img/wrong.png" width="15px"/>' :
                                                   result.length_valid == false ? '<img class="mt-1" src="img/wrong.png" width="15px"/>' :
                                                   result.luhn_valid == false ? '<img class="mt-1" src="img/wrong.png" width="15px"/>':
                                                   '<img class="mt-1" src="img/tick.png" width="15px"/>'
                                                   ));
                                                 
                                   });
                              });
                              </script>
                         <div class="row">
                              
                              <label class='col mr-3 label-text text-right mt-2' for="cardholdername">Name on card</label>
                              <input class='col mb-1 mt-1 mr-1 ml-1 pl-1 input-validation' type="text" id='card-holder-name' name='cardholdername'
                              value='<?php $_SESSION['fullname'] = $_POST['fullname']; echo $_SESSION['fullname']; ?>' autocomplete="off" >
                         </div>
                         <div class="row">
                              
                              <label for="expiry" class='label-text  mr-3 mt-2 col text-right'>Expiration date</label>
                                   <select id="ed-month" name='ed-month' class="mb-1 mt-1 ">
                                             <?php
                                                  for ($i = date("m"); $i <= 12; $i ++) {
                                                       if(date('y')){
                                                            $monthValue = $i;
                                                       }
                                                       else if (strlen($i) <= 2) {
                                                       $monthValue = "0".$monthValue ;
                                                       } 
                                                       else{
                                                            $monthValue;
                                                       }
                                                       
                                                  ?>
                                                  <option value="<?php echo $monthValue; ?>"><?php echo $i; ?></option>
                                                  <?php
                                   }
                                   ?>
                                             
                                   </select>
                                   <select id="ed-year" name='ed-year' class="mb-1 mt-1 ml-1 mr-2">
                                   <?php
                                             for ($i = date("Y"); $i <= 2030; $i ++) {
                                                  $yearValue = substr($i, 2);
                                                  ?>
                                             <option value="<?php echo $yearValue; ?>"><?php echo $i; ?></option>
                                             <?php
                                   }
                                   ?>
                                   </select> 
                                       <label for="cvv" class='label-text mt-2 mr-1'>Cvv</label>
                                       <input id='cvv' type="text" maxlength='3' name='cvv' class=' mb-1 mr-1 ml-1 pl-1 mt-1 col-1 input-validation' autocomplete='off' >
                         </div>
                    </div> 
                    
                    <div class="col-lg-5  col-sm-0 mod-body vl" style='font-size: 13px'>
                         <p>Amazon accepts all major credit and debit <br>
                         cards:</p>
                         <img class='mr-1 mb-1' src="img/visa.png" width='41px' alt="">
                         <img class='mr-1 mb-1' src="img/mastercard2150.png" width='36px' alt="">
                         <img class='mr-1 mb-1' src="img/discover150.png" width='41px' alt="">
                         <img class='mr-1 mb-1' src="img/jcb150.png" width='41px' alt=""><br>
                         <img class='mr-1 mb-1' src="img/diners150.png" width='41px' alt="">
                         <img class='mr-1 mb-1' src="img/american-express150.png" width='41px' alt="">
                         <img class='mr-1 mb-1' src="img/unionpay150.png" width='41px' alt="">
                    </div>
               </div>
          </div>
     <div class="mod-foot">
               <button id='cc-submit' type="submit" class="input-continue payment-submit">Submit</button></div>
               
     </div>
     </div>
</div>
</form> 
 <script>
     // $("#cc-submit").submit(validate());
	// function validate() {
	// 	var valid = true;
	// 	// $(".input-validation").css('background-color', 'green');
	// 	var message = "";

	// 	var cardHolderNameRegex = /^[a-z ,.'-]+$/i;
	// 	var cvvRegex = /^[0-9]{3,3}$/;

	// 	var cardHolderName = $("#card-holder-name").val();
	// 	var cardNumber = $("#card-number").val();
	// 	var cvv = $("#cvv").val();

	// 	if (cardHolderName == "" || cardNumber == "" || cvv == "") {
	// 		message += "<div>All Fields are Required.</div>";
	// 		if (cardHolderName == "") {
     //                $("#card-holder-name").css('background-color', '#FFFFDF');
                    
	// 		}
	// 		if (cardNumber == "") {
	// 			$("#card-number").css('background-color', '#FFFFDF');
	// 		}
	// 		if (cvv == "") {
	// 			$("#cvv").css('background-color', '#FFFFDF');
	// 		}
	// 		valid = false;
	// 	}

	// 	if (cardHolderName != "" && !cardHolderNameRegex.test(cardHolderName)) {
	// 		message += "<div>Card Holder Name is Invalid</div>";
	// 		$("#card-holder-name").css('background-color', '#FFFFDF');
	// 		valid = false;
	// 	}

	// 	if (cardNumber != "" && cardNumber != INTEGER) {
	// 		$('#card-number').validateCreditCard(function(result) {
	// 			if (!(result.valid)) {
	// 				message += "<div>Card Number is Invalid</div>";
	// 				$("#card-number").css('background-color', '#FFFFDF');
	// 				valid = false;
     //                }
                    
	// 		});
	// 	}

	// 	else if (cvv != "" && !cvvRegex.test(cvv)) {
	// 		message += "<div>CVV is Invalid</div>";
	// 		$("#cvv").css('background-color', '#FFFFDF');
	// 		valid = false;
	// 	}

	// 	if (message != "") {
	// 		$("#error-message").show();
	// 		$("#error-message").html(message);
	// 	}
	// 	return valid;
	// }
</script>
<div class="container">
     <div class="row">
          <div class="col">
               <div class="payments-form">
                 <p class='your-p mt-3'>Your Account <i class="fa fa-chevron-right" style='font-size: 9px'></i> Your Payments <i class="fa fa-chevron-right" style='font-size: 9px'></i><span> Wallet</span></p>
                 <h4 class='payments-text mt-5'>Your payments</h4>

                 <ul class="nav nav-tabs mt-5 pb-2">
                    <li class="nav-item ml-2">
                    <a class="nav-custom-link mr-5" href="#">Overview</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-custom-link mr-5 act pb-2 pl-2 pr-2" href="#">Wallet</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-custom-link mr-5" href="#">Settings</a>
                    </li>
               </ul>
                    <script>
                     var underlineMenuItems = document.querySelectorAll("li a");
                         underlineMenuItems.classList.add("act");

                              underlineMenuItems.forEach(function (item) {
                                   item.addEventListener("click", function () {
                                   underlineMenuItems.forEach(function (item) {
                                        return item.classList.remove("act");
                                   });
                                   item.classList.add("act");
                                 });
                              });
                    </script>

                  <h5 class='mt-5 pl-3 wallet-text'>Wallet</h5>
                  <h6 class='mt-5 mb-2 pl-3 bal-text'>Your balances</h6>

                  <div class="row ml-3 mr-3 pt-2 pl-1 pr-1 agc">
                     <div class='col'>
                          <img class='float-left mr-2' src="img/Amazon-Gift-Card-PNG-Picture.png" width='35px' alt="">
                          <p class='pt-2 '>Amazon Gift Card</p>
                     </div>
                     <div class="col">
                          <p class='transform mt-2'>SAR0.00</p>
                     </div>
                  </div>
                  <h5 class='mt-2 mb-2 pl-3 new-payment-text'>Add a new payment method</h5>
                  <hr class="ml-3 mr-3" >
                    <div class="row">
                         <div class="col">
                                   <h6 class='mt-2 mb-1 pl-3 bal-text'>Credit or debit cards</h6>
                              <div class="row">
                                   <div class="col">
                                        <p class='ml-3 '>Amazon accepts mada cards, major credit and debit cards.</p>
                                   </div>
                                   <div class="col">
                                        
                                        <div class="col transform-png">
                                             <img src="img/mada-screen.png" width='45px' alt="">
                                             <img src="img/visa.png" width='45px'  alt="">
                                        </div>
                                        <div class="col transform-png">
                                             <img src="img/mastercard.png" width='45px' alt="">
                                        </div>
                                   
                                   </div>
                                   
                              </div>
                              <input type="button" id="credit-debit" class='ml-3 create-account float-left' data-toggle="modal" data-target="#exampleModal" value="Add a credit card or debit card"><br>

                         </div>
                    </div>
                    <hr class="mt-3 ml-3 mr-3" >
                    <h6 class='mt-2 mb-1 pl-3 bal-text'>Create new bank details</h6>
                    <p class='ml-3 '>Use your bank account.a <a href="#">Learn more</a></p>
                    <input type="button" id="checking-account" class='ml-5 butn create-account float-left' value="Add a personal checking account"><br>
               </div>
          </div>
     </div>
</div>

<?php require_once("footer.php") ?>























