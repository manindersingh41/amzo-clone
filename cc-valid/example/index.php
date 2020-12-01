<?php require_once('head.php') ?>
    <label>CC number <input id='cardNumber' maxlength='16' /></label>
    <button type='submit' onsubmit='cardnumber()'>submit</button>

    
    <script>
                              var inputCn = document.getElementById('#cardNumber').value;
                              function cardnumber(){
                                var visa = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
                                if(inputCn.match(visa)){
                                  alert('valid');
                                }
                              }
                              function cardnumber(inputCn){
                                 
                                 var american = /^(?:3[47][0-9]{13})$/;
                                 var visa = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
                                 var master = /^(?:5[1-5][0-9]{14})$/;
                                 var discover = /^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/;
                                 var diners = /^(?:3(?:0[0-5]|[68][0-9])[0-9]{11})$/;
                                 var jcb = /^(?:(?:2131|1800|35\d{3})\d{11})$/;
                                 if ( inputCn.match(american) || inputCn.match(visa) || inputCn.match(master) || inputCn.match(discover) || inputCn.match(diners) || inputCn.match(jcb) ){
                                   //    document.getElementById('#cardNumber').style.background-color = green;
                                   //    document.getElementById('#cardNumber').style.css('box-shadow', '0 0px 8px #32c904');
                                      
                                      return true;
                                      alert('valid');
                                 } else {
                                   // document.getElementById('#cardNumber').style.css('box-shadow', '0 0px 8px red');
                                   alert('not a valid card');
                                   return false
                                 }
                              }
                         </script>
<?php require_once('foot.php') ?>