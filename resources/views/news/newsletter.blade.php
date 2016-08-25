@extends('master')


    @section('content')
            <!-- Full-Width Area -->
    <div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


    </div>

    <!-- Content Area -->
    <div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
        <nav class="nav">
            <ul>
                <li><a href="/news/newsletter">Newsletter</a></li>
                <li><a href="/news/events">Dates & Events</a></li>
            </ul>
        </nav>
        <div class="tagcloud-container content"></div>
    </div>
    <div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
        <div class="grid-100 content">
            <h1>Newsletter</h1>

            <div id="c94896" class="csc-default">
                <form action="http://www.carbolite-gero.com/news/newsletter/mail-subscribe/" id="mailform1209"
                      name="mailform1209" enctype="multipart/form-data" method="post"
                      onsubmit="return validateForm('mailform1209','Country,Country\x2A\x3A,Title,Title\x2A\x3A,Last_Name,Last\x20name\x2A\x3A,EMail,E\x2Dmail\x2A','','','')">
                    <div style="display:none;"><input type="hidden" name="html_enabled" id="mailformhtml_enabled"
                                                      value="1"><input type="hidden" name="subject" id="mailformsubject"
                                                                       value="Subscribe"><input name="requiredFields"
                                                                                                type="hidden"
                                                                                                value="Country,Title,Last_Name,EMail"><input
                                type="hidden" name="locationData" value="2447108:tt_content:94896"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">Subscribe to Carbolite newsletter:</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformCountry">Country*:</label>
                        </div>
                        <select name="Country" id="mailformCountry" size="1">
                            <option value="">Please choose ...</option>
                            <hr>
                            <hr>
                            <option value="afghanistan">Afghanistan</option>
                            <option value="albania">Albania</option>
                            <option value="algeria">Algeria</option>
                            <option value="american_samoa">American Samoa</option>
                            <option value="andorra">Andorra</option>
                            <option value="angola">Angola</option>
                            <option value="antigua_and_barbuda">Antigua and Barbuda</option>
                            <option value="argentina">Argentina</option>
                            <option value="armenia">Armenia</option>
                            <option value="aruba">Aruba</option>
                            <option value="australia">Australia</option>
                            <option value="austria">Austria</option>
                            <option value="azerbaijan">Azerbaijan</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="bahrain">Bahrain</option>
                            <option value="bangladesh">Bangladesh</option>
                            <option value="barbados">Barbados</option>
                            <option value="belarus">Belarus</option>
                            <option value="belgium">Belgium</option>
                            <option value="benin">Benin</option>
                            <option value="bermuda">Bermuda</option>
                            <option value="bolivia">Bolivia</option>
                            <option value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
                            <option value="botswana">Botswana</option>
                            <option value="brasil">Brazil</option>
                            <option value="british_indian_ocean_territory">British Indian Ocean Territory</option>
                            <option value="british_virgin_islands">British Virgin Islands</option>
                            <option value="bulgaria">Bulgaria</option>
                            <option value="burundi">Burundi</option>
                            <option value="cambodia">Cambodia</option>
                            <option value="cameroon">Cameroon</option>
                            <option value="canada">Canada</option>
                            <option value="central_african_republic">Central African Republic</option>
                            <option value="chad">Chad</option>
                            <option value="chile">Chile</option>
                            <option value="china">China</option>
                            <option value="colombia">Colombia</option>
                            <option value="congo">Congo</option>
                            <option value="costa_rica">Costa Rica</option>
                            <option value="croatia">Croatia</option>
                            <option value="cuba">Cuba</option>
                            <option value="cyprus">Cyprus</option>
                            <option value="czech_republic">Czech Republic</option>
                            <option value="denmark">Denmark</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican_republic">Dominican Republic</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="egypt">Egypt</option>
                            <option value="el_salvador">El Salvador</option>
                            <option value="equatorial_guinea">Equatorial Guinea</option>
                            <option value="eritrea">Eritrea</option>
                            <option value="estonia">Estonia</option>
                            <option value="ethiopia">Ethiopia</option>
                            <option value="finland">Finland</option>
                            <option value="france">France</option>
                            <option value="french_guiana">French Guiana</option>
                            <option value="french_southern_territories">French Southern Territories</option>
                            <option value="gabon">Gabon</option>
                            <option value="georgia">Georgia</option>
                            <option value="germany">Germany</option>
                            <option value="ghana">Ghana</option>
                            <option value="greece">Greece</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="haiti">Haiti</option>
                            <option value="honduras">Honduras</option>
                            <option value="hongkong">Hongkong</option>
                            <option value="hungary">Hungary</option>
                            <option value="iceland">Iceland</option>
                            <option value="india">India</option>
                            <option value="indonesia">Indonesia</option>
                            <option value="iran">Iran</option>
                            <option value="iraq">Iraq</option>
                            <option value="ireland">Ireland</option>
                            <option value="israel">Israel</option>
                            <option value="italy">Italy</option>
                            <option value="jamaica">Jamaica</option>
                            <option value="japan">Japan</option>
                            <option value="jordan">Jordan</option>
                            <option value="kazakhstan">Kazakhstan</option>
                            <option value="kenya">Kenya</option>
                            <option value="kuwait">Kuwait</option>
                            <option value="kyrgyzstan">Kyrgyzstan</option>
                            <option value="laos">Laos</option>
                            <option value="latvia">Latvia</option>
                            <option value="lebanon">Lebanon</option>
                            <option value="lesotho">Lesotho</option>
                            <option value="liberia">Liberia</option>
                            <option value="libya">Libya</option>
                            <option value="liechtenstein">Liechtenstein</option>
                            <option value="lithuania">Lithuania</option>
                            <option value="luxembourg">Luxembourg</option>
                            <option value="madagascar">Madagascar</option>
                            <option value="malawi">Malawi</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="mali">Mali</option>
                            <option value="malta">Malta</option>
                            <option value="mauritius">Mauritius</option>
                            <option value="mazedonia">Mazedonia</option>
                            <option value="mexico">Mexico</option>
                            <option value="moldova">Moldova</option>
                            <option value="monaco">Monaco</option>
                            <option value="mongolia">Mongolia</option>
                            <option value="montenegro">Montenegro</option>
                            <option value="morocco">Morocco</option>
                            <option value="mozambique">Mozambique</option>
                            <option value="mayanmar">Myanmar</option>
                            <option value="namibia">Namibia</option>
                            <option value="nepal">Nepal</option>
                            <option value="netherlands">Netherlands</option>
                            <option value="new_zealand">New Zealand</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="niger">Niger</option>
                            <option value="nigeria">Nigeria</option>
                            <option value="north_korea">North Korea</option>
                            <option value="norway">Norway</option>
                            <option value="oman">Oman</option>
                            <option value="pakistan">Pakistan</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="peru">Peru</option>
                            <option value="philippines">Philippines</option>
                            <option value="poland">Poland</option>
                            <option value="portugal">Portugal</option>
                            <option value="puerto_rico">Puerto Rico</option>
                            <option value="qatar">Qatar</option>
                            <option value="republique_de_cote_divoire">Republic of Côte d'Ivoire</option>
                            <option value="romania">Romania</option>
                            <option value="russia">Russia</option>
                            <option value="rwanda">Rwanda</option>
                            <option value="saudi-arabia">Saudi-Arabia</option>
                            <option value="senegal">Senegal</option>
                            <option value="serbia">Serbia</option>
                            <option value="seychelles">Seychelles</option>
                            <option value="sierra_leone">Sierra Leone</option>
                            <option value="singapore">Singapore</option>
                            <option value="slovakia">Slovakia</option>
                            <option value="slowenia">Slovenia</option>
                            <option value="somalia">Somalia</option>
                            <option value="south_africa">South Africa</option>
                            <option value="republic_of_korea">South Korea</option>
                            <option value="spain">Spain</option>
                            <option value="sri_lanka">Sri Lanka</option>
                            <option value="sudan">Sudan</option>
                            <option value="swaziland">Swaziland</option>
                            <option value="sweden">Sweden</option>
                            <option value="switzerland">Switzerland</option>
                            <option value="syria">Syria</option>
                            <option value="taiwan">Taiwan</option>
                            <option value="tajikistan">Tajikistan</option>
                            <option value="tanzania">Tanzania</option>
                            <option value="thailand">Thailand</option>
                            <option value="gambia">The Gambia</option>
                            <option value="togo">Togo</option>
                            <option value="trinidad_and_tobago">Trinidad and Tobago</option>
                            <option value="tunesia">Tunisia</option>
                            <option value="turkey">Turkey</option>
                            <option value="turkmenistan">Turkmenistan</option>
                            <option value="uganda">Uganda</option>
                            <option value="ukraine">Ukraine</option>
                            <option value="united_arab_emirates">United Arab Emirates</option>
                            <option value="united_kingdom">United Kingdom</option>
                            <option value="united_states">United States</option>
                            <option value="uruguay">Uruguay</option>
                            <option value="us_virgin_islands">US Virgin Islands</option>
                            <option value="uzbekistan">Uzbekistan</option>
                            <option value="vanuatu">Vanuatu</option>
                            <option value="venezuela">Venezuela</option>
                            <option value="vietnam">Vietnam</option>
                            <option value="western_sahara">Western Sahara</option>
                            <option value="yemen">Yemen</option>
                            <option value="zambia">Zambia</option>
                            <option value="zimbabwe">Zimbabwe</option>
                            <hr>
                            <option value="other_country">Other country</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformTitle">Title*:</label></div>
                        <select name="Title" id="mailformTitle" size="1">
                            <option value="" selected="selected">Please choose ...</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Mr">Mr</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                        </select></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformLast_Name">Last name*:</label>
                        </div>
                        <input type="text" name="Last_Name" id="mailformLast_Name" size="20" value=""
                               class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"><label for="mailformFirst_Name">First name*:</label></div>
                        <input type="text" name="First_Name" id="mailformFirst_Name" size="20" value=""
                               class="rform-input"></div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformEMail">E-mail*</label></div>
                        <input type="text" name="EMail" id="mailformEMail" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <input type="submit" name="formtype_mail" id="mailformformtype_mail" value="Submit"
                               class="rform-submitbutton"></div>
                </form>
            </div>
            <div id="c94897" class="csc-default">
                <form action="http://www.carbolite-gero.com/news/newsletter/mail-unsubscribe/" id="mailform1511"
                      name="mailform1511" enctype="multipart/form-data" method="post"
                      onsubmit="return validateForm('mailform1511','EMail,E\x2Dmail\x2A','','','')">
                    <div style="display:none;"><input type="hidden" name="html_enabled" id="mailformhtml_enabled"
                                                      value="1"><input type="hidden" name="subject" id="mailformsubject"
                                                                       value="Newsletter Unsubscribe"><input
                                name="requiredFields" type="hidden" value="EMail"><input type="hidden"
                                                                                         name="locationData"
                                                                                         value="2447108:tt_content:94897">
                    </div>
                    <div class="rform rform-inputrow">
                        <div class="rform-label">Unsubscribe from the Carbolite newsletter:</div>
                        <div class=="clear"><!-- ! --></div>
                    </div>
                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label for="mailformEMail">E-mail*</label></div>
                        <input type="text" name="EMail" id="mailformEMail" size="20" value="" class="rform-input"></div>
                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <input type="submit" name="formtype_mail" id="mailformformtype_mail" value="Submit"
                               class="rform-submitbutton"></div>
                </form>
            </div>
            <div id="c166881" class="csc-default" style="margin-top:20px;margin-bottom:20px;">
                <div>
                    <div class="rform rform-comment">
                        <div class="rform rform-inputrow">*mandatory fields</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop