<?php require_once('header.php');
    $_SESSION['password'] = $_POST['password'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="payments.php" method='post'>
                <div class="info">
                       <p class='your-p mt-3'>Your Account <i class="fa fa-chevron-right" style='font-size: 9px'></i> Your Address <i class="fa fa-chevron-right" style='font-size: 9px'></i><span> New Address</span></p>

                        <h4 class='ana-text'>Welcome: <?php echo $_SESSION['email']; ?></h4>
                        <p class='label-text'>Or pick up your packages at your convenience from our self-service locations.
                        To add an Amazon Pickup location, click <a href="#">here</a>.</p>
                        <label class='label-text m-top-plus' for="country">Country/region</label><br>
                            <select id="country" name='country' class="country input-info-text">
                                                        <option class='country-list ' selected>Saudi Arabia</option>
                                                        <option class='country-list'>Afghanistan</option>
                                                        <option class='country-list'>Aland Islands</option>
                                                        <option class='country-list'>Albania</option>
                                                        <option class='country-list'>Algeria</option></option>
                                                        <option class='country-list'>American Samoa</option>
                                                        <option class='country-list'>Andorra</option>
                                                        <option class='country-list'>Angola</option>
                                                        <option class='country-list'>Anguilla</option>
                                                        <option class='country-list'>Antarctica</option>
                                                        <option class='country-list'>Antigua and Barbuda</option>
                                                        <option class='country-list'>Argentina</option>
                                                        <option class='country-list'>Armenia</option>
                                                        <option class='country-list'>Aruba</option>
                                                        <option class='country-list'>Australia</option>
                                                        <option class='country-list'>Austria</option>
                                                        <option class='country-list'>Azerbaijan</option>
                                                        <option class='country-list'>Bahamas, The</option>
                                                        <option class='country-list'>Bahrain</option>
                                                        <option class='country-list'>Bangladesh</option>
                                                        <option class='country-list'>Barbados</option>
                                                        <option class='country-list'>Belarus</option>
                                                        <option class='country-list'>Belgium</option>
                                                        <option class='country-list'>Belize</option>
                                                        <option class='country-list'>Benin</option>
                                                        <option class='country-list'>Bermuda</option>
                                                        <option class='country-list'>Bhutan</option>
                                                        <option class='country-list'>Bolivia</option>
                                                        <option class='country-list'>Bonaire, Saint Eustatius and Saba</option>
                                                        <option class='country-list'>Bosnia and Herzegovina</option>
                                                        <option class='country-list'>Botswana</option>
                                                        <option class='country-list'>Bouvet Island</option>
                                                        <option class='country-list'>Brazil</option>
                                                        <option class='country-list'>British Indian Ocean Territory</option>
                                                        <option class='country-list'>Brunei Darussalam</option>
                                                        <option class='country-list'>Bulgaria</option>
                                                        <option class='country-list'>Burkina Faso</option>
                                                        <option class='country-list'>Burundi</option>
                                                        <option class='country-list'>Cambodia</option>
                                                        <option class='country-list'>Cameroon</option>
                                                        <option class='country-list'>Canada</option>
                                                        <option class='country-list'>Cape Verde</option>
                                                        <option class='country-list'>Cayman Islands</option>
                                                        <option class='country-list'>Central African Republic</option>
                                                        <option class='country-list'>Chad</option>
                                                        <option class='country-list'>Chile</option>
                                                        <option class='country-list'>China</option>
                                                        <option class='country-list'>Christmas Island</option>
                                                        <option class='country-list'>Cocos (Keeling) Islands</option>
                                                        <option class='country-list'>Colombia</option>
                                                        <option class='country-list'>Comoros</option>
                                                        <option class='country-list'>Congo</option>
                                                        <option class='country-list'>Congo, The Democratic Republic of the</option>
                                                        <option class='country-list'>Cook Islands</option>
                                                        <option class='country-list'>Costa Rica</option>
                                                        <option class='country-list'>Cote D'ivoire</option>
                                                        <option class='country-list'>Croatia</option>
                                                        <option class='country-list'>Cura√ßao</option>
                                                        <option class='country-list'>Cyprus</option>
                                                        <option class='country-list'>Czech Republic</option>
                                                        <option class='country-list'>Denmark</option>
                                                        <option class='country-list'>Djibouti</option>
                                                        <option class='country-list'>Dominica</option>
                                                        <option class='country-list'>Dominican Republic</option>
                                                        <option class='country-list'>Ecuador</option>
                                                        <option class='country-list'>Egypt</option>
                                                        <option class='country-list'>El Salvador</option>
                                                        <option class='country-list'>Equatorial Guinea</option>
                                                        <option class='country-list'>Eritrea</option>
                                                        <option class='country-list'>Estonia</option>
                                                        <option class='country-list'>Ethiopia</option>
                                                        <option class='country-list'>Falkland Islands (Malvinas)</option>
                                                        <option class='country-list'>Faroe Islands</option>
                                                        <option class='country-list'>Fiji</option>
                                                        <option class='country-list'>Finland</option>
                                                        <option class='country-list'>France</option>
                                                        <option class='country-list'>French Guiana</option>
                                                        <option class='country-list'>French Polynesia</option>
                                                        <option class='country-list'>French Southern Territories</option>
                                                        <option class='country-list'>Gabon</option>
                                                        <option class='country-list'>Gambia, The</option>
                                                        <option class='country-list'>Georgia</option>
                                                        <option class='country-list'>Germany</option>
                                                        <option class='country-list'>Ghana</option>
                                                        <option class='country-list'>Gibraltar</option>
                                                        <option class='country-list'>Greece</option>
                                                        <option class='country-list'>Greenland</option>
                                                        <option class='country-list'>Grenada</option>
                                                        <option class='country-list'>Guadeloupe</option>
                                                        <option class='country-list'>Guam</option>
                                                        <option class='country-list'>Guatemala</option>
                                                        <option class='country-list'>Guernsey</option>
                                                        <option class='country-list'>Guinea</option>
                                                        <option class='country-list'>Guinea-Bissau</option>
                                                        <option class='country-list'>Guyana</option>
                                                        <option class='country-list'>Haiti</option>
                                                        <option class='country-list'>Heard Island and the McDonald Islands</option>
                                                        <option class='country-list'>Holy See</option>
                                                        <option class='country-list'>Honduras</option>
                                                        <option class='country-list'>Hong Kong</option>
                                                        <option class='country-list'>Hungary</option>
                                                        <option class='country-list'>Iceland</option>
                                                        <option class='country-list'>India</option>
                                                        <option class='country-list'>Indonesia</option>
                                                        <option class='country-list'>Iraq</option>
                                                        <option class='country-list'>Ireland</option>
                                                        <option class='country-list'>Isle of Man</option>
                                                        <option class='country-list'>Israel</option>
                                                        <option class='country-list'>Italy</option>
                                                        <option class='country-list'>Jamaica</option>
                                                        <option class='country-list'>Japan</option>
                                                        <option class='country-list'>Jersey</option>
                                                        <option class='country-list'>Jordan</option>
                                                        <option class='country-list'>Kazakhstan</option>
                                                        <option class='country-list'>Kenya</option>
                                                        <option class='country-list'>Kiribati</option>
                                                        <option class='country-list'>Korea, Republic of</option>
                                                        <option class='country-list'>Kosovo</option>
                                                        <option class='country-list'>Kuwait</option>
                                                        <option class='country-list'>Kyrgyzstan</option>
                                                        <option class='country-list'>Lao People's Democratic Republic</option>
                                                        <option class='country-list'>Latvia</option>
                                                        <option class='country-list'>Lebanon</option>
                                                        <option class='country-list'>Lesotho</option>
                                                        <option class='country-list'>Liberia</option>
                                                        <option class='country-list'>Libya</option>
                                                        <option class='country-list'>Liechtenstein</option>
                                                        <option class='country-list'>Lithuania</option>
                                                        <option class='country-list'>Luxembourg</option>
                                                        <option class='country-list'>Macao</option>
                                                        <option class='country-list'>Macedonia, The Former Yugoslav Republic of</option>
                                                        <option class='country-list'>Madagascar</option>
                                                        <option class='country-list'>Malawi</option>
                                                        <option class='country-list'>Malaysia</option>
                                                        <option class='country-list'>Maldives</option>
                                                        <option class='country-list'>Mali</option>
                                                        <option class='country-list'>Malta</option>
                                                        <option class='country-list'>Marshall Islands</option>
                                                        <option class='country-list'>Martinique</option>
                                                        <option class='country-list'>Mauritania</option>
                                                        <option class='country-list'>Mauritius</option>
                                                        <option class='country-list'>Mayotte</option>
                                                        <option class='country-list'>Mexico</option>
                                                        <option class='country-list'>Micronesia, Federated States of</option>
                                                        <option class='country-list'>Moldova, Republic of</option>
                                                        <option class='country-list'>Monaco</option>
                                                        <option class='country-list'>Mongolia</option>
                                                        <option class='country-list'>Montenegro</option>
                                                        <option class='country-list'>Montserrat</option>
                                                        <option class='country-list'>Morocco</option>
                                                        <option class='country-list'>Mozambique</option>
                                                        <option class='country-list'>Myanmar</option>
                                                        <option class='country-list'>Namibia</option>
                                                        <option class='country-list'>Nauru</option>
                                                        <option class='country-list'>Nepal</option>
                                                        <option class='country-list'>Netherlands</option>
                                                        <option class='country-list'>Netherlands Antilles</option>
                                                        <option class='country-list'>New Caledonia</option>
                                                        <option class='country-list'>New Zealand</option>
                                                        <option class='country-list'>Nicaragua</option>
                                                        <option class='country-list'>Niger</option>
                                                        <option class='country-list'>Nigeria</option>
                                                        <option class='country-list'>Niue</option>
                                                        <option class='country-list'>Norfolk Island</option>
                                                        <option class='country-list'>Northern Mariana Islands</option>
                                                        <option class='country-list'>Norway</option>
                                                        <option class='country-list'>Oman</option>
                                                        <option class='country-list'>Pakistan</option>
                                                        <option class='country-list'>Palau</option>
                                                        <option class='country-list'>Palestinian Territories</option>
                                                        <option class='country-list'>Panama</option>
                                                        <option class='country-list'>Papua New Guinea</option>
                                                        <option class='country-list'>Paraguay</option>
                                                        <option class='country-list'>Peru</option>
                                                        <option class='country-list'>Philippines</option>
                                                        <option class='country-list'>Pitcairn</option>
                                                        <option class='country-list'>Poland</option>
                                                        <option class='country-list'>Portugal</option>
                                                        <option class='country-list'>Puerto Rico</option>
                                                        <option class='country-list'>Qatar</option>
                                                        <option class='country-list'>Reunion</option>
                                                        <option class='country-list'>Romania</option>
                                                        <option class='country-list'>Russian Federation</option>
                                                        <option class='country-list'>Rwanda</option>
                                                        <option class='country-list'>Saint Barthelemy</option>
                                                        <option class='country-list'>Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option class='country-list'>Saint Kitts and Nevis</option>
                                                        <option class='country-list'>Saint Lucia</option>
                                                        <option class='country-list'>Saint Martin</option>
                                                        <option class='country-list'>Saint Pierre and Miquelon</option>
                                                        <option class='country-list'>Saint Vincent and the Grenadines</option>
                                                        <option class='country-list'>Samoa</option>
                                                        <option class='country-list'>San Marino</option>
                                                        <option class='country-list'>Sao Tome and Principe</option>
                                                        <option class='country-list'>Saudi Arabia</option>
                                                        <option class='country-list'>Senegal</option>
                                                        <option class='country-list'>Serbia</option>
                                                        <option class='country-list'>Seychelles</option>
                                                        <option class='country-list'>Sierra Leone</option>
                                                        <option class='country-list'>Singapore</option>
                                                        <option class='country-list'>Sint Maarten</option>
                                                        <option class='country-list'>Slovakia</option>
                                                        <option class='country-list'>Slovenia</option>
                                                        <option class='country-list'>Solomon Islands</option>
                                                        <option class='country-list'>Somalia</option>
                                                        <option class='country-list'>South Africa</option>
                                                        <option class='country-list'>South Georgia and the South Sandwich Islands</option>
                                                        <option class='country-list'>Spain</option>
                                                        <option class='country-list'>Sri Lanka</option>
                                                        <option class='country-list'>Suriname</option>
                                                        <option class='country-list'>Svalbard and Jan Mayen</option>
                                                        <option class='country-list'>Swaziland</option>
                                                        <option class='country-list'>Sweden</option>
                                                        <option class='country-list'>Switzerland</option>
                                                        <option class='country-list'>Taiwan</option>
                                                        <option class='country-list'>Tajikistan</option>
                                                        <option class='country-list'>Tanzania, United Republic of</option>
                                                        <option class='country-list'>Thailand</option>
                                                        <option class='country-list'>Timor-leste</option>
                                                        <option class='country-list'>Togo</option>
                                                        <option class='country-list'>Tokelau</option>
                                                        <option class='country-list'>Tonga</option>
                                                        <option class='country-list'>Trinidad and Tobago</option>
                                                        <option class='country-list'>Tunisia</option>
                                                        <option class='country-list'>Turkey</option>
                                                        <option class='country-list'>Turkmenistan</option>
                                                        <option class='country-list'>Turks and Caicos Islands</option>
                                                        <option class='country-list'>Tuvalu</option>
                                                        <option class='country-list'>Uganda</option>
                                                        <option class='country-list'>Ukraine</option>
                                                        <option class='country-list'>United Arab Emirates</option>
                                                        <option class='country-list'>United Kingdom</option>
                                                        <option class='country-list'>United States</option>
                                                        <option class='country-list'>United States Minor Outlying Islands</option>
                                                        <option class='country-list'>Uruguay</option>
                                                        <option class='country-list'>Uzbekistan</option>
                                                        <option class='country-list'>Vanuatu</option>
                                                        <option class='country-list'>Venezuela</option>
                                                        <option class='country-list'>Vietnam</option>
                                                        <option class='country-list'>Virgin Islands, British</option>
                                                        <option class='country-list'>Virgin Islands, U.S.</option>
                                                        <option class='country-list'>Wallis and Futuna</option>
                                                        <option class='country-list'>Western Sahara</option>
                                                        <option class='country-list'>Yemen</option>
                                                        <option class='country-list'>Zambia</option>
                                                        <option class='country-list'>Zimbabwe</option>

                            </select>
                        <br>

                        <label class='label-text' for="fullname">Full name</label><br>
                        <input id='fullname' class='input-info' type="text" name="fullname" autocomplete="off"  required><br>

                        <label class='label-text' for="mobilenumber">Mobile number</label><br>
                        <div class="flex-container">
                            <div class="div-mob" style='flex-grow:1'>
                                <select id="" name='countrycode' class="countrycode">                             
                                <option class='countrycode-list'>+93‎</option>
                                          ‎<option class='countrycode-list'>+358</option>‎
                                             ‎<option class='countrycode-list'>+355</option>‎
                                       ‎<option class='countrycode-list'>+213</option>‎
                                       ‎<option class='countrycode-list'>+1‎	</option>
                                             ‎<option class='countrycode-list'>+376</option>‎
                                       ‎<option class='countrycode-list'>+244</option>‎
                                      ‎<option class='countrycode-list'>+1‎	</option>
                                       ‎<option class='countrycode-list'>+1‎	</option>
                                                  ‎<option class='countrycode-list'>+54‎</option>
                                         ‎<option class='countrycode-list'>+374</option>‎
                                       ‎<option class='countrycode-list'>+297</option>‎
                                     ‎<option class='countrycode-list'>+61‎</option>
                                         ‎<option class='countrycode-list'>+43‎</option>
                                       ‎<option class='countrycode-list'>+994</option>‎
                                          ‎<option class='countrycode-list'>+1‎	</option>
                                           ‎<option class='countrycode-list'>+973</option>‎
                                       ‎<option class='countrycode-list'>+880</option>‎
                                          ‎<option class='countrycode-list'>+1‎	</option>
                                       ‎<option class='countrycode-list'>+375</option>‎
                                       ‎<option class='countrycode-list'>+32‎</option>
                                       ‎<option class='countrycode-list'>+501</option>‎
                                      ‎<option class='countrycode-list'>+229</option>‎
                                     ‎<option class='countrycode-list'>+1‎	</option>
                                      ‎<option class='countrycode-list'>+975</option>‎
                                      ‎<option class='countrycode-list'>+591</option>‎
                                       ‎<option class='countrycode-list'>+387</option>‎
                                                      ‎<option class='countrycode-list'>+267</option>‎
                                        ‎<option class='countrycode-list'>+55‎</option>
                                      ‎<option class='countrycode-list'>+246</option>‎
                                                              ‎<option class='countrycode-list'>+673</option>‎
                                                 ‎<option class='countrycode-list'>+359</option>‎
                                        ‎<option class='countrycode-list'>+226</option>‎
                                            ‎<option class='countrycode-list'>+257</option>‎
                                       ‎<option class='countrycode-list'>+855</option>‎
                                        ‎<option class='countrycode-list'>+237</option>‎
                                        ‎<option class='countrycode-list'>+1‎	</option>
                                     ‎<option class='countrycode-list'>+238</option>‎
                                          ‎<option class='countrycode-list'>+1‎	</option>
                                             ‎<option class='countrycode-list'>+236</option>‎
                                                        ‎<option class='countrycode-list'>+235</option>‎
                                    ‎<option class='countrycode-list'>+56‎</option>
                                     ‎<option class='countrycode-list'>+86‎</option>
                                     ‎<option class='countrycode-list'>+61‎</option>
                                                ‎<option class='countrycode-list'>+61‎</option>
                                                       ‎<option class='countrycode-list'>+57‎</option>
                                        ‎<option class='countrycode-list'>+269</option>‎
                                       ‎<option class='countrycode-list'>+242</option>‎
                                     ‎<option class='countrycode-list'>+243</option>‎

                                ‎<option class='countrycode-list'>+682</option>‎
                                            ‎<option class='countrycode-list'>+506</option>‎
                                          ‎<option class='countrycode-list'>+225</option>‎
                                             ‎<option class='countrycode-list'>+385</option>‎
                                       ‎<option class='countrycode-list'>+53‎</option>
                                    ‎<option class='countrycode-list'>+357</option>‎
                                      ‎<option class='countrycode-list'>+420</option>‎
                                              ‎<option class='countrycode-list'>+45‎</option>
                                       ‎<option class='countrycode-list'>+253</option>‎
                                        ‎<option class='countrycode-list'>+1‎	</option>
                                       ‎<option class='countrycode-list'>+1‎	</option>
                                                 ‎<option class='countrycode-list'>+593</option>‎
                                       ‎<option class='countrycode-list'>+20‎</option>
                                     ‎<option class='countrycode-list'>+503</option>‎
                                           ‎<option class='countrycode-list'>+240</option>‎
                                                 ‎<option class='countrycode-list'>+291</option>‎
                                       ‎<option class='countrycode-list'>+372</option>‎
                                       ‎<option class='countrycode-list'>+251</option>‎
                                        ‎<option class='countrycode-list'>+500</option>‎
                                                           ‎<option class='countrycode-list'>+298</option>‎
                                             ‎<option class='countrycode-list'>+679</option>‎
                                    ‎<option class='countrycode-list'>+358</option>‎
                                       ‎<option class='countrycode-list'>+33‎</option>
                                      ‎<option class='countrycode-list'>+594</option>‎
                                             ‎<option class='countrycode-list'>+689</option>‎
                                                ‎<option class='countrycode-list'>+241</option>‎
                                     ‎<option class='countrycode-list'>+220</option>‎
                                           ‎<option class='countrycode-list'>+995</option>‎
                                       ‎<option class='countrycode-list'>+49‎</option>
                                       ‎<option class='countrycode-list'>+233</option>‎
                                     ‎<option class='countrycode-list'>+350</option>‎
                                         ‎<option class='countrycode-list'>+30‎</option>
                                      ‎<option class='countrycode-list'>+299</option>‎
                                         ‎<option class='countrycode-list'>+1‎	</option>
                                      ‎<option class='countrycode-list'>+590</option>‎
                                          ‎<option class='countrycode-list'>+1‎	</option>
                                    <option class='countrycode-list'>+502</option>‎
                                         ‎<option class='countrycode-list'>+44‎</option>
                                        ‎<option class='countrycode-list'>+224</option>‎
                                      ‎<option class='countrycode-list'>+245</option>‎
                                             ‎<option class='countrycode-list'>+592</option>‎
                                      ‎<option class='countrycode-list'>+509</option>‎
                                     ‎<option class='countrycode-list'>+39‎</option>
                                        ‎<option class='countrycode-list'>+504</option>‎
                                        ‎<option class='countrycode-list'>+852</option>‎
                                         ‎<option class='countrycode-list'>+36‎</option>
                                       ‎<option class='countrycode-list'>+354</option>‎
                                       ‎<option class='countrycode-list'>+91‎</option>
                                     ‎<option class='countrycode-list'>+62‎</option>
                                         ‎<option class='countrycode-list'>+98‎</option>
                                                         ‎<option class='countrycode-list'>+964</option>‎
                                    ‎<option class='countrycode-list'>+353</option>‎
                                       ‎<option class='countrycode-list'>+44‎</option>
                                           ‎<option class='countrycode-list'>+972</option>‎
                                      ‎<option class='countrycode-list'>+39‎</option>
                                     ‎<option class='countrycode-list'>+1‎	</option>
                                      ‎<option class='countrycode-list'>+81‎</option>
                                     ‎<option class='countrycode-list'>+44‎</option>
                                      ‎<option class='countrycode-list'>+962</option>‎
                                      ‎<option class='countrycode-list'>+7‎	</option>
                                         ‎<option class='countrycode-list'>+254</option>‎
                                     ‎<option class='countrycode-list'>+686</option>‎
                                        ‎<option class='countrycode-list'>+82‎</option>
                                                  ‎<option class='countrycode-list'>+965</option>‎
                                      ‎<option class='countrycode-list'>+996</option>‎
                                          ‎<option class='countrycode-list'>+856</option>‎
                                                                ‎<option class='countrycode-list'>+371</option>‎
                                      ‎<option class='countrycode-list'>+961</option>‎
                                       ‎<option class='countrycode-list'>+266</option>‎
                                       ‎<option class='countrycode-list'>+231</option>‎
                                       ‎<option class='countrycode-list'>+218</option>‎
                                     ‎<option class='countrycode-list'>+423</option>‎
                                             ‎<option class='countrycode-list'>+370</option>‎
                                         ‎<option class='countrycode-list'>+352</option>‎
                                          ‎<option class='countrycode-list'>+853</option>‎
                                     ‎<option class='countrycode-list'>+389</option>‎
                             
                                ‎<option class='countrycode-list'>+261</option>‎
                                          ‎<option class='countrycode-list'>+265</option>‎
                                      ‎<option class='countrycode-list'>+60‎</option>
                                        ‎<option class='countrycode-list'>+960</option>‎
                                        ‎<option class='countrycode-list'>+223</option>‎
                                    ‎<option class='countrycode-list'>+356</option>‎
                                     ‎<option class='countrycode-list'>+692</option>‎
                                                ‎<option class='countrycode-list'>+596</option>‎
                                          ‎<option class='countrycode-list'>+222</option>‎
                                          ‎<option class='countrycode-list'>+230</option>‎
                                         ‎<option class='countrycode-list'>+262</option>‎
                                       ‎<option class='countrycode-list'>+52‎</option>
                                      ‎<option class='countrycode-list'>+691</option>‎
                                                               ‎<option class='countrycode-list'>+373</option>‎
                                                    ‎<option class='countrycode-list'>+377</option>‎
                                      ‎<option class='countrycode-list'>+976</option>‎
                                        ‎<option class='countrycode-list'>+382</option>‎
                                          ‎<option class='countrycode-list'>+1‎	</option>
                                         ‎<option class='countrycode-list'>+212</option>‎
                                       ‎<option class='countrycode-list'>+258</option>‎
                                          ‎<option class='countrycode-list'>+95‎</option>
                                       ‎<option class='countrycode-list'>+264</option>‎
                                       ‎<option class='countrycode-list'>+674</option>‎
                                     ‎<option class='countrycode-list'>+977</option>‎
                                     ‎<option class='countrycode-list'>+31‎</option>
                                           ‎<option class='countrycode-list'>+0‎	</option>
                                                   ‎<option class='countrycode-list'>+687</option>‎
                                             ‎<option class='countrycode-list'>+64‎</option>
                                           ‎<option class='countrycode-list'>+505</option>‎
                                         ‎<option class='countrycode-list'>+227</option>‎
                                     ‎<option class='countrycode-list'>+234</option>‎
                                       ‎<option class='countrycode-list'>+683</option>‎
                                    ‎<option class='countrycode-list'>+672</option>‎
                                              ‎<option class='countrycode-list'>+850</option>‎
                                    
                                ‎<option class='countrycode-list'>+1‎	</option>
                                                       ‎<option class='countrycode-list'>+47‎</option>
                                      ‎<option class='countrycode-list'>+968</option>‎
                                    ‎<option class='countrycode-list'>+92‎</option>
                                        ‎<option class='countrycode-list'>+680</option>‎
                                     ‎<option class='countrycode-list'>+970</option>‎
                                                       ‎<option class='countrycode-list'>+507</option>‎
                                      ‎<option class='countrycode-list'>+675</option>‎
                                                ‎<option class='countrycode-list'>+595</option>‎
                                        ‎<option class='countrycode-list'>+51‎</option>
                                    ‎<option class='countrycode-list'>+63‎</option>
                                           ‎<option class='countrycode-list'>+48‎</option>
                                      ‎<option class='countrycode-list'>+351</option>‎
                                        ‎<option class='countrycode-list'>+1‎	</option>
                                          ‎<option class='countrycode-list'>+974</option>‎
                                     ‎<option class='countrycode-list'>+262</option>‎
                                       ‎<option class='countrycode-list'>+40‎</option>
                                       ‎<option class='countrycode-list'>+7‎	</option>
                                                 ‎<option class='countrycode-list'>+250</option>‎
                                      ‎<option class='countrycode-list'>+290</option>‎
                            </option>    ‎<option class='countrycode-list'>+1‎	</option>
                                                    ‎<option class='countrycode-list'>+1‎	</option>
                                          ‎<option class='countrycode-list'>+508</option>‎
                                                         ‎<option class='countrycode-list'>+1‎	</option>
                                                               ‎<option class='countrycode-list'>+685</option>‎
                                     ‎<option class='countrycode-list'>+378</option>‎
                                          ‎<option class='countrycode-list'>+239</option>‎
                                                     ‎<option class='countrycode-list' selected>+966</option>
                                                 ‎<option class='countrycode-list'>+221</option>‎
                                       ‎<option class='countrycode-list'>+381</option>‎
                                      ‎<option class='countrycode-list'>+248</option>‎
                                          ‎<option class='countrycode-list'>+232</option>‎
                                            ‎<option class='countrycode-list'>+65‎</option>
                                         ‎<option class='countrycode-list'>+421</option>‎
                                        ‎<option class='countrycode-list'>+386</option>‎
                                        ‎<option class='countrycode-list'>+677</option>‎
                                               ‎<option class='countrycode-list'>+252</option>‎
                                       ‎<option class='countrycode-list'>+27‎</option>
                                            ‎<option class='countrycode-list'>+34‎</option>
                                     ‎<option class='countrycode-list'>+94‎</option>
                                         ‎<option class='countrycode-list'>+249</option>‎
                                     ‎<option class='countrycode-list'>+597</option>‎
                                        ‎<option class='countrycode-list'>+47‎</option>
                                                      ‎<option class='countrycode-list'>+268</option>‎
                                         ‎<option class='countrycode-list'>+46‎</option>
                                      ‎<option class='countrycode-list'>+41‎</option>
                                           ‎<option class='countrycode-list'>+963</option>‎
                                     ‎<option class='countrycode-list'>+886</option>‎
                                      ‎<option class='countrycode-list'>+992</option>‎
                                          ‎<option class='countrycode-list'>+255</option>‎
                                                            ‎<option class='countrycode-list'>+66‎</option>
                                        ‎<option class='countrycode-list'>+670</option>‎
                                           ‎<option class='countrycode-list'>+228</option>‎
                                    ‎<option class='countrycode-list'>+690</option>‎
                                       ‎<option class='countrycode-list'>+676</option>‎
                                     ‎<option class='countrycode-list'>+1‎	</option>
                                                  ‎<option class='countrycode-list'>+216</option>‎
                                       ‎<option class='countrycode-list'>+90‎</option>
                                      ‎<option class='countrycode-list'>+993</option>‎
                                            ‎<option class='countrycode-list'>+1‎	</option>
                                                       ‎<option class='countrycode-list'>+688</option>‎
                                      ‎<option class='countrycode-list'>+256</option>‎
                                      ‎<option class='countrycode-list'>+380</option>‎
                                       ‎<option class='countrycode-list'>+971</option>‎
                                                    ‎<option class='countrycode-list'>+44‎</option>
                                              ‎<option class='countrycode-list'>+1‎	</option>
                                            ‎<option class='countrycode-list'>+598</option>‎
                                       ‎<option class='countrycode-list'>+998</option>‎
                                          ‎<option class='countrycode-list'>+678</option>‎
                                       ‎<option class='countrycode-list'>+58‎</option>
                                         ‎<option class='countrycode-list'>+84‎</option>
                                       ‎<option class='countrycode-list'>+1‎	</option>
                                                      ‎<option class='countrycode-list'>+1‎	</option>
                                                   ‎<option class='countrycode-list'>+681</option>‎
                                                 ‎<option class='countrycode-list'>+212</option>‎
                                              ‎<option class='countrycode-list'>+967</option>‎
                                     ‎<option class='countrycode-list'>+260</option>‎
                                      <option class='countrycode-list'>+263</option>‎
                                         </select>
                            </div><br>
                            <div class="div-mob" style='flex-grow:14'>
                            <input id="input-mobile" class='input-info' type="text" name="mobilenumber" autocomplete="off" placeholder='e.g. 05XXXXXXXX'required>
                            </div>
                        </div>
                        <span class=''>May be used to assist delivery</span><br>
                        
                        <label class='label-text' for="address">Street address</label><br>
                        <input class='input-info' type="text" name="address1" placeholder="e.g. Al Oruba Street" autocomplete="off"  required>

                        <label class='label-text' for="address">Building name/no., floor, apartment or villa no.</label><br>
                        <input class='input-info' type="text" name="address2" placeholder="e.g. Princess Tower, 5th floor, Apt 5023" autocomplete="off"  required>
            
                        <label class='label-text' for="city">City</label><br>
                        <input id='input-city' class='input-info' type="text" name="city" placeholder="E.g. Riyadh, Jeddah, Makkah, Al Ahsa" autocomplete="off"  required>
                        <span class="">Can't find your city? Try a different spelling</span><br>

                        <label class='label-text' for="area">Area</label><br>
                        <input class='input-info ap-fields' type="text" name="area" autocomplete="off"  required>

                        <label class='label-text' for="province">Province</label><br>
                        <input class='input-info ap-fields' type="text" name="province" autocomplete="off"  required>
                        
                        <label class='label-text' for="landmark">Nearest landmark</label><br>
                        <input class='input-info' type="text" name="landmark" placeholder='e.g. Galleria Mall' autocomplete="off"  required>

                        <h4 class='adi-text'>Add delivery instructions</h4>
                        <label class='label-text m-top2' for="">Address type</label><br>
                        <div class="row">
                            <div class="col">
                        <input class='m-left' type="radio" id="home" name="addresstype" value="home">
                        <label for="home">Home (7am-9pm, all days)</label><br>
                        </div>
                        <div class="col">
                        <input class='m-left' type="radio" id="office" name="addresstype" value="office">
                        <label for="office">Office (9am-6pm, Weekdays)</label><br>
                            </div>
                        </div>
                        


                        <input id="info-submit" name='' class='input-continue' type="submit" data-toggle="modal" data-target="#exampleModal"  value='Submit'>
                </div>
            </form>


        </div>
    </div>
</div>

<?php require_once('footer.php')?>