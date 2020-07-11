<?php
include("register_user.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Today</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

     <script>
        $(document).ready(function () {
            $(" #click").click(function () { 
                $(".login-contain").fadeIn("slower"); });
        }); </script>
</head>

<body>
    <div id="main">

        <!-- The container of the page -->
        <div class="container">
            <div class="content">
                <div class="left">

                    <!-- The section of the color designs -->
                    <div class="color1"></div>
                    <div class="color2"></div>
                    <div class="color3"></div>
                    <div class="color4"></div>
                    <div class="color5"></div>
                    <div class="color6"></div>


                    <div class="logo">
                        <i class="fa fa-comments animated pulse infinite fast"></i>
                        <p>LetsChat</p>
                    </div>

                    <div class="welcome">
                        <p class="animated slideInDown slower">Welcome to<br>&nbsp;&nbsp;&nbsp;<span>LetsChat...</span></p>

                        <small class="connected connected animated fadeInLeft slower">To keep connected with us<br>
                            Please Register with your personal Info.
                        </small>
                        
                        <div class="login">
                            <h4 class="animated bounce slower"><a href="signin.php">LOGIN</a></h4>
                        </div>

                    </div>

                    <div class="portfolio">
                        <small>
                            Designed & Developed By :
                        </small>
                                            <span style="color:yellow">L</span>
                                            <span style="color:green">A</span>
                                            <span style="color:#00ff00">Y</span>
                                            <span style="color:blue">O</span>
                                            <span style="color:orange">B</span>
                                            <span style="color:violet">R</span>
                                            <span style="color:purple">I</span>
                                            <span style="color:pink">G</span>
                                            <span style="color:maroon">H</span>
                                            <span style="color:white">T</span>
                        
                    </div>

                </div>

                <div class="right">
                    <div class="right-contain">
                        <div class="right-top">

                            <div class="click">
                                <p class="animated fadeIn infinite slower">Click the icon to Register</p>
                            </div>

                            <i id="click" class="fa fa-arrow-circle-down animated bounce infinite slow"></i>

                        </div>


                        <!-- the section of the right bottom -->
                        <div class="right-bottom">
                            <p class="explore animated rollIn slower">Explore Your Search</p>
                            <p class="meet animated fadeInRight slow">Meet New People</p>

                            <p class="join animated fadeInDown slow">Join Our Community</p>
                        </div>
                    </div>
                </div>


                <div class="login-contain">

                    <form autocomplete="off" action="" method="POST">
                        <div class="log">
                            <h3 class="animated fadeInRight slower">Register to Continue</h3>
                        </div>

                        <div class="form-details">
                            <i class="fa fa-user"></i>
                            <input autocomplete="off" type="text" name="user_name" id="username" placeholder="Username">
                        </div>

                        <div class="form-details">
                            <i class="fa fa-lock"></i>
                            <input autocomplete="off" type="password" name="user_pass" id="password" placeholder="Password">
                        </div>

                        <div class="form-details">
                            <i class="fa fa-key"></i>
                            <input autocomplete="off" type="password" name="user_pass2" id="password2"
                                placeholder="Confirm Password">
                        </div>

                        <div class="form-details">
                            <i class="fa fa-envelope"></i>
                            <input autocomplete="off" type="text" name="user_email" id="user_email" placeholder="Email">
                        </div>
                        
                        <div class="form-details">
                            <i class="fa fa-user-circle"></i>
                            <input autocomplete="off" type="text" name="user_pet" id="user_pet" placeholder="What is your pet's name?">
                        </div>

                        <div class="form-details">
                            <i class="fa fa-university"></i>
                            <select name="user_country">
                                <option disabled="">Select a Country </option>
                                <option value="">Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                            </select>
                        </div>

                        <div class="form-details">
                            <i class="fa fa-mars"></i>
                            <select name="user_gender">
                                <option disabled="">Select your Gender </option>
                                <option>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <input type="submit" value="REGISTER" name="submit">

                    </form>
                    
                            <?php
                                if(isset($_GET['error'])){

                                    if($_GET['error'] == 'emptyfields'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp; Cannot leave the fields empty!</p>
                                            </div>
                                        ";
                                    }
                                    else if($_GET['error'] == 'invalidemail'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Provide a valid email!</p>
                                            </div>
                                        ";
                                    }
                                    else if($_GET['error'] == 'emailexists'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Email has already been used!</p>
                                            </div>
                                        ";
                                    }
                                    
                                    else if($_GET['error'] == 'invalidusername'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Invalid username!</p>
                                            </div>
                                        ";
                                    }
                                    
                                    else if($_GET['error'] == 'passworderror'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Password should be more than 8 characters!</p>
                                            </div>
                                        ";
                                    }
                                    
                                    else if($_GET['error'] == 'passwordmatch'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;The Password Provided does not match!</p>
                                            </div>
                                        ";
                                    }
                                    
                                     else if($_GET['error'] == 'peterror'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;Don't use your username for your pet name!</p>
                                            </div>
                                        ";
                                    }
                                    
                                    else if($_GET['error'] == 'accounterror'){
                                        echo "
                                            <div class='error animated fadeInUp slow'>
                                                <p><i class='fa fa-exclamation-circle'></i>&nbsp;The Password Provided does not match!</p>
                                            </div>
                                        ";
                                    }


                                }
                            ?>

                </div>

            </div>
        </div>
    </div>
</body>

</html>