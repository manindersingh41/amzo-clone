

       <?php 
                            
                            require('textlocal.class.php');
                            require('credential.php');
                            if ( isset($_SESSION['verifyotp'])){
                            $textlocal = new Textlocal(false, false, API_KEY);
        
                            $numbers = array($_POST['mobilenumber']);
                            $sender = 'TXTLCL';
                            $otp = mt_rand(100000, 999999);
        
                            $message = 'Hello'.$_POST['fullname']."This is your Otp: ".$otp;
        
                            try {
                                 $result = $textlocal->sendSms($numbers, $message, $sender);
                                 setcookie('otp', $otp);
                                 echo 'OTP successfully sent..';
                                 
                                 
                            } catch (Exception $e) {
                                 die('Error: ' . $e->getMessage());
                                 echo 'OTP sending Failed...';
                                 
                            }
                       }
                                             
                       //       if(isset($_POST['verifyotp'])){
                       //           $otp = $_POST['otp'];
                       //           if($_COOKIE['otp'] == $otp){
                       //           echo 'Congratulation, Your mobile number is verified.';
                                 
                       //           }
                       //           else{                             
                       //                echo 'please enter correct code';
                       //            }
                       // }
                  ?>