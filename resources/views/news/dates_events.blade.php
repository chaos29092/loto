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
            <h1>Dates & Events</h1>

            <div id="c110808" class="csc-default">Find below the dates of our events and trade fairs. The list can be
                filtered by type of event, country and/or date.
            </div>
            <div id="c112341" class="csc-default">
                <form action="http://www.carbolite-gero.com/news/dates-events/" method="post" class="form dates-filter">
                    <ul>
                        <li>
                            <label for="type">Type of event</label>
                            <select name="type" id="type" onchange="this.form.submit();">
                                <option value="" selected>All</option>
                                <option value="exhibition">Exhibitions</option>
                            </select>
                        </li>

                        <li>
                            <label for="country">Country</label>
                            <select name="country" id="country" onchange="this.form.submit();">
                                <option value="" selected>All</option>
                                <option value="6">China</option>
                                <option value="20">France</option>
                                <option value="1">Germany</option>
                                <option value="22">Italy</option>
                                <option value="47">United Kingdom</option>
                                <option value="49">United States</option>
                            </select>
                        </li>

                        <li>
                            <label for="month">Date</label>
                            <select name="month" id="month" onchange="this.form.submit();">
                                <option value="" selected>All</option>
                                <option value="1456786800">March 2016</option>
                                <option value="1459461600">April 2016</option>
                                <option value="1462053600">May 2016</option>
                                <option value="1464732000">June 2016</option>
                                <option value="1467324000">July 2016</option>
                                <option value="1470002400">August 2016</option>
                                <option value="1472680800">September 2016</option>
                                <option value="1475272800">October 2016</option>
                                <option value="1477954800">November 2016</option>
                            </select>
                        </li>
                    </ul>
                </form>
                <div class="foldBox">
                    <h4>Dates & Events</h4>

                    <div class="foldBoxContent">

                        <ul class="dates-list">
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.mecspe.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/MECSPE.jpg" width="161" height="76"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>MECSPE</strong><br>
                                    17.03.2016 - 19.03.2016 <br> Parma, Italy <br><strong>Hall Pad. 5, Booth
                                        D68</strong> <br><a href="http://www.mecspe.com/" target="_blank">www.mecspe.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>MRS Spring Meeting</strong><br>
                                    28.03.2016 - 01.04.2016 <br> Phoenix, AZ, United States <br><a
                                            href="http://www.mrs.org/spring2016/" target="_blank">www.mrs.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.forumlabo.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/Forum_LABO___BIOTECH_-_LYON_2016.jpg"
                                                width="102" height="113" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Forum Labo Biotech</strong><br>
                                    30.03.2016 - 31.03.2016 <br> Lyon, France <br><strong> Booth C47</strong> <br><a
                                            href="http://www.forumlabo.com/" target="_blank">www.forumlabo.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="https://www.powtech.de/en/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/powtech2016_72dpi.jpg" width="170"
                                                height="33" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>POWTECH</strong><br>
                                    19.04.2016 - 21.04.2016 <br> Nuremberg, Germany <br><strong>Hall 1, Booth
                                        552</strong> <br><a href="https://www.powtech.de/en/" target="_blank">www.powtech.de/en</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.ceramicsexpousa.com/" target="_blank"><img
                                                src="../../typo3temp/pics/e0baca0808.jpg" width="200" height="63"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Ceramics Expo</strong><br>
                                    26.04.2016 - 28.04.2016 <br> Cleveland, OH, United States <br><a
                                            href="http://www.ceramicsexpousa.com/"
                                            target="_blank">www.ceramicsexpousa.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analytica.de/index-2.html" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/analytica_log_let_2z_D_rgb.jpg"
                                                width="100" height="118" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>analytica</strong><br>
                                    10.05.2016 - 13.05.2016 <br> Munich, Germany <br><strong>Hall A1, Booth 103</strong>
                                    <br><a href="http://www.analytica.de/index-2.html"
                                           target="_blank">www.analytica.de</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>ECS Meeting</strong><br>
                                    29.05.2016 - 03.06.2016 <br> San Diego, CA, United States <br><a
                                            href="https://www.electrochem.org/meetings/biannual/curr_mtg.htm"
                                            target="_blank">www.electrochem.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.svtm.eu/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/SVTM_01.jpg" width="77" height="76"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Salon du vide et des traitements des materiaux</strong><br>
                                    08.06.2016 - 09.06.2016 <br> Nancy, France <br><strong> Booth 70</strong> <br><a
                                            href="http://www.svtm.eu/" target="_blank">www.svtm.eu</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Fuel Ethanol Workshop</strong><br>
                                    20.06.2016 - 23.06.2016 <br> Milwaukee, WI, United States <br><a
                                            href="http://www.fuelethanolworkshop.com/ema/DisplayPage.aspx?pageId=Home"
                                            target="_blank">www.fuelethanolworkshop.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>IAFP Meeting</strong><br>
                                    31.07.2016 - 03.08.2016 <br> St. Louis, MO, United States <br><a
                                            href="https://www.foodprotection.org/annualmeeting/" target="_blank">www.foodprotection.org</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.minexpo.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/mine_expo_2016.jpg" width="145"
                                                height="94" alt=""></a></div>
                                <div class="information">
                                    <strong>MINExpo</strong><br>
                                    26.09.2016 - 28.09.2016 <br> Las Vegas, NV, United States <br><a
                                            href="http://www.minexpo.com/" target="_blank">www.minexpo.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Furnaces North America</strong><br>
                                    04.10.2016 - 05.10.2016 <br> Nashville, TN, United States <br><a
                                            href="http://10times.com/furnaces-north-america" target="_blank">10times.com/furnaces-north-america</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.bimu.it/home/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/BI-MU.jpg" width="165" height="153"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>BI-MU</strong><br>
                                    04.10.2016 - 08.03.2016 <br> Milan, Italy <br><a href="http://www.bimu.it/home/"
                                                                                     target="_blank">www.bimu.it/home</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.worldpm2016.com/" target="_blank"><img
                                                src="../../typo3temp/pics/0a25d08494.jpg" width="200" height="33" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>WorldPM</strong><br>
                                    09.10.2016 - 13.10.2016 <br> Hamburg, Germany <br><strong> Booth 54/55</strong> <br><a
                                            href="http://www.worldpm2016.com/" target="_blank">www.worldpm2016.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analytica-china.de/" target="_blank"><img
                                                src="../../typo3temp/pics/6f20e6bdb0.jpg" width="200" height="36" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>analytica China</strong><br>
                                    10.10.2016 - 12.10.2016 <br> Shanghai, China <br><a
                                            href="http://www.analytica-china.de/" target="_blank">www.analytica-china.de</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>MS & T Conference</strong><br>
                                    24.10.2016 - 28.10.2016 <br> Salt Lake City, UT, United States <br><a
                                            href="http://matscitech.org/" target="_blank">matscitech.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Advanced Engineering (Aerospace)</strong><br>
                                    02.11.2016 - 03.11.2016 <br> NEC, Birmingham, United Kingdom <br><strong>Hall Hall
                                        C, Booth P22</strong> <br><a href="http://www.advancedengineeringuk.com/"
                                                                     target="_blank">Advanced Engineering (Aerospace)</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div id="c112358" class="csc-default">
                <div class="foldBox closed">
                    <h4>Dates & Events</h4>

                    <div class="foldBoxContent">

                        <ul class="dates-list">
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.industrysouth.co.uk/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/SOUTH2016title_01.jpg" width="160"
                                                height="60" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Southern Manufacturing & Electronics 2016</strong><br>
                                    09.02.2016 - 11.02.2016 <br> Farnborough, United Kingdom <br><strong> Booth
                                        S62</strong> <br><a href="http://www.industrysouth.co.uk/" target="_blank">Southern
                                        Manufacturing</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.samuexpo.com/samumetal/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/samumetal2016.jpg" width="160"
                                                height="88" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>SamuMetal</strong><br>
                                    03.02.2016 - 06.02.2016 <br> Pordenone, Italy <br><a
                                            href="http://www.samuexpo.com/samumetal/" target="_blank">SamuMetal</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.nanotechexpo.jp/" target="_blank"><img
                                                src="../../typo3temp/pics/82ccd7132c.jpg" width="200" height="33" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>nano tech</strong><br>
                                    27.01.2016 - 29.01.2016 <br> Tokyo, Japan <br><strong> Booth 5G-27</strong> <br><a
                                            href="http://www.nanotechexpo.jp/" target="_blank">www.nanotechexpo.jp</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://ceramics.org/meetings/40th-international-conference-and-expo-on-advanced-ceramics-and-composites"
                                       target="_blank"><img src="../../uploads/tx_retschdatadates/acs_usa.jpg"
                                                            width="173" height="76" alt=""></a></div>
                                <div class="information">
                                    <strong>ICACC</strong><br>
                                    24.01.2016 - 27.01.2016 <br> Daytona Beach, FL, United States <br><a
                                            href="http://ceramics.org/meetings/40th-international-conference-and-expo-on-advanced-ceramics-and-composites"
                                            target="_blank">http://ceramics.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Materials Research Society Fall Conference</strong><br>
                                    29.11.2015 - 04.12.2015 <br> Boston, MA, United States <br><a
                                            href="http://www.mrs.org/fall2015/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.productronica.com/" target="_blank"><img
                                                src="../../typo3temp/pics/05bbc317e7.jpg" width="200" height="36"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Productronica</strong><br>
                                    10.11.2015 - 13.11.2015 <br> Munich, Germany <br><strong>Hall A1, Booth 575</strong>
                                    <br><a href="http://www.productronica.com/" target="_blank">More information</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Advanced Engineering UK (Aerospace)</strong><br>
                                    04.11.2015 - 05.11.2015 <br> Birmingham, United Kingdom <br><a
                                            href="http://www.advancedengineeringuk.com/aero-engineering-show/"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.bceia.cn/En/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/BCEIA_01.jpg" width="117" height="76"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>BCEIA</strong><br>
                                    27.10.2015 - 30.10.2015 <br> Beijing, China <br><a href="http://www.bceia.cn/En/"
                                                                                       target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.chemistry-expo.ru/en/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/Khimia.jpg" width="77" height="76"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>KHIMIA</strong><br>
                                    27.10.2015 - 30.10.2015 <br> Moscow, Russia <br><a
                                            href="http://www.chemistry-expo.ru/en/" target="_blank">More information</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>ASM Heat Treat</strong><br>
                                    20.10.2015 - 22.10.2015 <br> Detroit, MI, United States <br><a
                                            href="http://www2.asminternational.org/content/Events/heattreat/"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Gulf Coast Conference</strong><br>
                                    20.10.2015 - 21.10.2015 <br> Galveston, TX, United States <br><a
                                            href="http://www.gulfcoastconference.com/index.cfm" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.ceramitec.de/link/en/16746121" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/logo_ceramitec_c.jpg" width="71"
                                                height="71" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>ceramitec</strong><br>
                                    20.10.2015 - 23.10.2015 <br> Munich, Germany <br><strong>Hall A2, Booth
                                        109/210</strong> <br><a href="http://www.ceramitec.de/link/en/16746121"
                                                                target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.powtex.com/osaka/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/powtex_osaka_01.jpg" width="162"
                                                height="38" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Powtex</strong><br>
                                    14.10.2015 - 16.10.2015 <br> Osaka, Japan <br><a href="http://www.powtex.com/osaka/"
                                                                                     target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analyticaindia.com/" target="_blank"><img
                                                src="../../typo3temp/pics/125416fa67.jpg" width="200" height="57" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>analytica Anacon</strong><br>
                                    08.10.2015 - 10.10.2015 <br> Hyderabad, India <br><a
                                            href="http://www.analyticaindia.com/" target="_blank">www.analyticaindia.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Materials Sience & Technology</strong><br>
                                    04.10.2015 - 08.10.2015 <br> Columbus, OH, United States <br><a
                                            href="http://matscitech.org/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Northern Manufacturing & Electronics Show</strong><br>
                                    30.09.2015 - 01.10.2015 <br> Manchester, United Kingdom <br><strong> Booth
                                        C8</strong> <br><a href="http://www.industrynorth.co.uk/" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.industrynorth.co.uk/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/northern_manufacturing.gif"
                                                width="200" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Northern Manufacturing & Electronics 2015</strong><br>
                                    30.09.2015 - 01.10.2015 <br> Manchester, United Kingdom <br>A dedicated engineering
                                    and manufacturing trade exhibition covering a wide range of industry sectors from UK
                                    wide. <br><strong>Hall Event City, Booth C8</strong> <br><a
                                            href="http://www.industrynorth.co.uk/" target="_blank">Northern Manufacturing &
                                        Electronics 2015</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.aoac.org/iMIS15_Prod/AOAC/AOAC_Member/MtgsCF/15AMCF/15AM_M.aspx"
                                       target="_blank"><img src="../../uploads/tx_retschdatadates/aoac_08.jpg"
                                                            width="84" height="71" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>AOAC International</strong><br>
                                    27.09.2015 - 30.09.2015 <br> Los Angeles, CA, United States <br><a
                                            href="http://www.aoac.org/iMIS15_Prod/AOAC/AOAC_Member/MtgsCF/15AMCF/15AM_M.aspx"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.laborexpo.cz/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/LABOREXPO-2015_350.jpg" width="200"
                                                height="51" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>LABOREXPO</strong><br>
                                    23.09.2015 - 24.09.2015 <br> Prague, Czech Republic <br><a
                                            href="http://www.laborexpo.cz/" target="_blank">http://www.laborexpo.cz/</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analiticanet.com.br/en/index.php?pgid=home&amp;mi=001000000000"
                                       target="_blank"><img src="../../typo3temp/pics/ea38b75e80.jpg" width="200"
                                                            height="46" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Analítica Latin America</strong><br>
                                    22.09.2015 - 24.09.2015 <br> São Paulo, Brazil <br><strong>Hall German Pavillion,
                                        Booth # GP9</strong> <br><a
                                            href="http://www.analiticanet.com.br/en/index.php?pgid=home&amp;mi=001000000000"
                                            target="_blank">www.analiticanet.com.br</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.htexporus.com/heat-treatment.html" target="_blank"><img
                                                src="../../typo3temp/pics/cd02f4d3ed.jpg" width="200" height="33" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Heat Treatment</strong><br>
                                    15.09.2015 - 17.09.2015 <br> Moscow, Russia <br><a
                                            href="http://www.htexporus.com/heat-treatment.html" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.powx-russia.com/index.php" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/POWX2015.jpg" width="151" height="43"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>POWX</strong><br>
                                    15.09.2015 - 17.09.2015 <br> Moscow, Russia <br><a
                                            href="http://www.powx-russia.com/index.php" target="_blank">More information</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.thailandlab.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/ThailandLab_2015.jpg" width="170"
                                                height="69" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Thailand LAB</strong><br>
                                    09.09.2015 - 11.09.2015 <br> Bangkok, Thailand <br><a
                                            href="http://www.thailandlab.com/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.jasis.jp/en/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/JASIS_2014_01.jpg" width="126"
                                                height="87" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>JASIS</strong><br>
                                    02.09.2015 - 04.09.2015 <br> Chiba, Japan <br><a href="http://www.jasis.jp/en/"
                                                                                     target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>35th Cement & Concrete Conference</strong><br>
                                    26.08.2015 - 28.08.2015 <br> Aberdeen, United Kingdom <br><strong>Hall Aberdeen
                                        University</strong> <br><a href="http://www.abdn.ac.uk/events/cement-concrete-2015/"
                                                                   target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://sites.cardiff.ac.uk/gold2015/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/gold_01.png" width="160" height="111"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>International GOLD Conference</strong><br>
                                    26.07.2015 - 29.07.2015 <br> Cardiff , United Kingdom <br><strong>Hall Cardiff City
                                        Hall, Booth 10</strong> <br><a href="http://sites.cardiff.ac.uk/gold2015/"
                                                                       target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.propakasia.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/propakasia_2015.jpg" width="170"
                                                height="54" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Propak</strong><br>
                                    17.06.2015 - 20.06.2015 <br> Bangkok, Thailand <br><a
                                            href="http://www.propakasia.com/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.thermprocess-online.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/thermprocess.jpg" width="71"
                                                height="71" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>ThermProcess</strong><br>
                                    16.06.2015 - 20.06.2015 <br> Duesseldorf, Germany <br><strong>Hall 09, Booth
                                        E41</strong> <br><a href="http://www.thermprocess-online.com/" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.achema.de/en.html" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/achema_logo_2015.jpg" width="197"
                                                height="50" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>ACHEMA</strong><br>
                                    15.06.2015 - 19.06.2015 <br> Frankfurt, Germany <br><strong>Hall 4.1, Booth
                                        J7</strong> <br><a href="http://www.achema.de/en.html" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.svtm.eu/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/SVTM.jpg" width="77" height="76"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Salon du vide et des traitements des matériaux</strong><br>
                                    02.06.2015 - 04.06.2015 <br> St. Etienne, France <br><a href="http://www.svtm.eu/"
                                                                                            target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>The Electrochemical Society Conference</strong><br>
                                    24.05.2015 - 28.05.2015 <br> Chicago, IL, United States <br><a
                                            href="http://www.electrochem.org/meetings/biannual/227/" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.asminternational.org/web/aeromat-2015" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/AeroMat.jpg" width="189" height="33"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>AeroMat</strong><br>
                                    11.05.2015 - 14.05.2015 <br> Long Beach, CA, United States <br><a
                                            href="http://www.asminternational.org/web/aeromat-2015" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Ceramics Expo</strong><br>
                                    28.04.2015 - 30.04.2015 <br> Cleveland, OH, United States <br><a
                                            href="http://ceramics.org/meetings/2015-ceramics-expo" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.cn-pmexpo.com/en/index.asp" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/PM_China.jpg" width="170" height="35"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Powder Metallurgy Expo</strong><br>
                                    27.04.2015 - 29.04.2015 <br> Shanghai, China <br><a
                                            href="http://www.cn-pmexpo.com/en/index.asp" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Biomass Conference</strong><br>
                                    20.04.2015 - 22.04.2015 <br> Minneapolis, MN, United States <br><a
                                            href="http://www.biomassconference.com/ema/DisplayPage.aspx?pageId=Home"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Commercial Graphene Show</strong><br>
                                    16.04.2015 - 17.04.2015 <br> Manchester, United Kingdom <br><a
                                            href="http://www.terrapinn.com/conference/graphene-applications-world-europe/index.stm"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analitikaexpo.com/en-GB/home/exhibitors/about.aspx"
                                       target="_blank"><img src="../../uploads/tx_retschdatadates/analitika_expo_01.jpg"
                                                            width="125" height="94" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Analitika Expo</strong><br>
                                    14.04.2015 - 17.04.2015 <br> Moscow, Russia <br><strong> Booth A427</strong> <br><a
                                            href="http://www.analitikaexpo.com/en-GB/home/exhibitors/about.aspx"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Materials Research Society Spring Conference</strong><br>
                                    06.04.2015 - 10.04.2015 <br> San Francisco, CA, United States <br><a
                                            href="http://www.mrs.org/spring2015/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.forumlabo.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/Forum_LABO___BIOTECH.jpg" width="76"
                                                height="76" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Forum Labo</strong><br>
                                    31.03.2015 - 02.04.2015 <br> Paris, France <br><strong> Booth G28 - H29</strong>
                                    <br><a href="http://www.forumlabo.com/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.arablab.german-pavilion.com/content/en/home/home.php"
                                       target="_blank"><img src="../../uploads/tx_retschdatadates/arablab_06.jpg"
                                                            width="189" height="58" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Arablab</strong><br>
                                    23.03.2015 - 26.03.2015 <br> Dubai, United Arab Emirates <br><strong> Booth
                                        330</strong> <br><a
                                            href="http://www.arablab.german-pavilion.com/content/en/home/home.php"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.worldofasphalt.com/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/World_of_Asphalt_2015.jpg" width="141"
                                                height="76" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>World of Asphalt</strong><br>
                                    17.03.2015 - 19.03.2015 <br> Baltimore, MD, United States <br><a
                                            href="http://www.worldofasphalt.com/" target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://pittcon.org/exposition/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/Pittcon.jpg" width="189" height="53"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>PITTCON</strong><br>
                                    08.03.2015 - 12.03.2015 <br> New Orleans, LA, United States <br><strong> Booth 3818,
                                        3819</strong> <br><a href="http://pittcon.org/exposition/" target="_blank">More
                                        information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Southern Manufacturing & Electronics Exhibition</strong><br>
                                    10.02.2015 - 12.02.2015 <br> Farnborough, United Kingdom <br><a
                                            href="http://www.industrysouth.co.uk/" target="_blank">More information</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>39th Int. Conference and Expo on Advanced Ceramics and
                                        Composites</strong><br>
                                    27.01.2015 - 28.01.2015 <br> Daytona, FL, United States <br><a
                                            href="http://ceramics.org/meetings/39th-international-conference-and-expo-on-advanced-ceramics-and-composites"
                                            target="_blank">More information</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Materials Research Society Fall Meeting & Exhibit</strong><br>
                                    30.11.2014 - 05.12.2014 <br> Boston, MA, United States <br><a
                                            href="http://www.mrs.org/fall2014/" target="_blank">www.mrs.org/fall2014</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.powtex.com/tokyo/en/" target="_blank"><img
                                                src="../../typo3temp/pics/3dd6abe601.jpg" width="200" height="46" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>POWTEX</strong><br>
                                    26.11.2014 - 28.11.2014 <br> Tokyo, Japan <br><a
                                            href="http://www.powtex.com/tokyo/en/" target="_blank">www.powtex.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.materiaux2014.net/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/Materiaux_2014.jpg" width="103"
                                                height="113" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Matériaux</strong><br>
                                    24.11.2014 - 28.11.2014 <br> Montpellier, France <br><a
                                            href="http://www.materiaux2014.net/" target="_blank">www.materiaux2014.net</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://aeroconf.com/" target="_blank"><img
                                                src="../../typo3temp/pics/c86e8cdb4d.jpg" width="200" height="55" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Aero Engineering Show</strong><br>
                                    11.11.2014 - 12.11.2014 <br> Birmingham, United Kingdom <br><strong>Hall Hall 5,
                                        Booth C65</strong> <br><a href="http://aeroconf.com/" target="_blank">www.aeroconf.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Lab Innovations</strong><br>
                                    05.11.2014 - 06.11.2014 <br> Birmingham, United Kingdom <br><strong> Booth
                                        D12</strong> <br><a
                                            href="http://www.easyfairs.com/events_216/lab-innovations-2014_53307/lab-innovations-2014_53308/"
                                            target="_blank">www.easyfairs.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.messe.no/lab" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/lab_norge_01.jpg" width="73"
                                                height="49" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>LAB</strong><br>
                                    28.10.2014 - 30.10.2014 <br> Oslo, Norway <br><a href="http://www.messe.no/lab"
                                                                                     target="_blank">www.messe.no/lab</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Gulf Coast Conference</strong><br>
                                    14.10.2014 - 15.10.2014 <br> Galveston, TX, United States <br><a
                                            href="http://www.gulfcoastconference.com/" target="_blank">www.gulfcoastconference.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.cihtexpo.com/en/index.asp" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/China_Heat_Treatment_Expo.jpg"
                                                width="99" height="94" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>11th China Internat. Heat Treatment Expo</strong><br>
                                    14.10.2014 - 16.10.2014 <br> Shanghai, China <br><a
                                            href="http://www.cihtexpo.com/en/index.asp" target="_blank">www.cihtexpo.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Materials Science & Technology</strong><br>
                                    12.10.2014 - 16.10.2014 <br> Pittsburgh, PA, United States <br><a
                                            href="http://www.matscitech.org/" target="_blank">www.matscitech.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.powtech.de/en/" target="_blank"><img
                                                src="../../typo3temp/pics/b8a6274e1c.jpg" width="200" height="31" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>POWTECH</strong><br>
                                    30.09.2014 - 02.10.2014 <br> Nuremberg, Germany <br><strong>Hall 1, Booth
                                        455</strong> <br><a href="http://www.powtech.de/en/"
                                                            target="_blank">www.powtech.de</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://wots.nl/" target="_blank"><img
                                                src="../../typo3temp/pics/45a9a2adc1.jpg" width="200" height="75" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>World of Technology & Science</strong><br>
                                    30.09.2014 - 03.10.2014 <br> Utrecht, Netherlands <br><a href="http://wots.nl/"
                                                                                             target="_blank">http://wots.nl</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analyticachina.com/" target="_blank"><img
                                                src="../../typo3temp/pics/8a20297dbd.jpg" width="200" height="34" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>analytica China</strong><br>
                                    24.09.2014 - 26.09.2014 <br> Shanghai, China <br><a
                                            href="http://www.analyticachina.com/" target="_blank">www.analyticachina.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.jasis.jp/2014/en/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/JASIS_2014.jpg" width="126"
                                                height="87" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>JASIS</strong><br>
                                    03.09.2014 - 05.09.2014 <br> Tokyo, Japan <br><a href="http://www.jasis.jp/2014/en/"
                                                                                     target="_blank">www.jasis.jp</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Heat Treatment & Furnaces Exhibition</strong><br>
                                    16.06.2014 - 18.06.2014 <br> Guangzhou, China
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.svtm.eu/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/SVTM_2014.jpg" width="61" height="76"
                                                border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Salon du Vide et des Traitements des Matériaux</strong><br>
                                    11.06.2014 - 12.06.2014 <br> Reims, France <br><a href="http://www.svtm.eu/"
                                                                                      target="_blank">www.svtm.eu</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://bulcontrola.com/en/bulcontrola" target="_blank"><img
                                                src="../../typo3temp/pics/c4ba9e1f15.jpg" width="200" height="36" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Bulcontrola</strong><br>
                                    28.05.2014 - 30.05.2014 <br> Sofia, Bulgaria <br><strong>Hall 4, Booth D6</strong>
                                    <br><a href="http://bulcontrola.com/en/bulcontrola" target="_blank">http://bulcontrola.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.mm-china.com/index.php?scriptlet=CMS/Start&amp;id=721&amp;language=en"
                                       target="_blank"><img src="../../typo3temp/pics/54e9bdb90e.jpg" width="200"
                                                            height="75" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Metal + Metallurgy China</strong><br>
                                    19.05.2014 - 22.05.2014 <br> Beijing, China <br><a
                                            href="http://www.mm-china.com/index.php?scriptlet=CMS/Start&amp;id=721&amp;language=en"
                                            target="_blank">www.mm-china.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analitikaexpo.com/en-GB/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/analitika_expo.jpg" width="125"
                                                height="94" border="0" alt=""></a></div>
                                <div class="information">
                                    <strong>Analitika</strong><br>
                                    15.04.2014 - 18.04.2014 <br> Moscow, Russia <br><a
                                            href="http://www.analitikaexpo.com/en-GB/"
                                            target="_blank">www.analitikaexpo.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>MACH 2014</strong><br>
                                    07.04.2014 - 11.04.2014 <br> NEC, Birmingham, United Kingdom <br><strong>Hall Zone
                                        6, Booth Stand No. 4585</strong> <br><a href="http://www.machexhibition.com/"
                                                                                target="_blank">http://www.machexhibition.com/</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.analytica.de/de/Home" target="_blank"><img
                                                src="../../typo3temp/pics/a178f72a97.jpg" width="200" height="54" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>analytica</strong><br>
                                    01.04.2014 - 04.04.2014 <br> Munich, Germany <br>
                                    <br><strong>Hall A1, Booth 103</strong> <br><a
                                            href="http://www.analytica.de/de/Home" target="_blank">www.analytica.de</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.laborama.be/en/laborama" target="_blank"><img
                                                src="../../typo3temp/pics/a4f032b495.jpg" width="200" height="32" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Laborama</strong><br>
                                    20.03.2014 - 21.03.2014 <br> Brussels, Belgium <br><a
                                            href="http://www.laborama.be/en/laborama" target="_blank">www.laborama.be</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.targieurolab.pl/index.php?lang=en" target="_blank"><img
                                                src="../../typo3temp/pics/dcac44ed78.jpg" width="200" height="81" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>EuroLab</strong><br>
                                    12.03.2014 - 14.03.2014 <br> Warsaw, Poland <br><a
                                            href="http://www.targieurolab.pl/index.php?lang=en" target="_blank">www.targieurolab.pl</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://pittcon.org/" target="_blank"><img
                                                src="../../typo3temp/pics/9c2bba0bf3.jpg" width="200" height="54" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>PITTCON</strong><br>
                                    02.03.2014 - 06.03.2014 <br> Chicago, United States <br><strong> Booth 2116,
                                        2216</strong> <br><a href="http://pittcon.org/"
                                                             target="_blank">http://pittcon.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://pittcon.org/" target="_blank"><img
                                                src="../../typo3temp/pics/78b0e3ccfe.jpg" width="200" height="54" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>PITTCON</strong><br>
                                    02.03.2014 - 06.03.2014 <br> Chicago, United States <br><strong> Booth 2116,
                                        2216</strong> <br><a href="http://pittcon.org/"
                                                             target="_blank">http://pittcon.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://pittcon.org/" target="_blank"><img
                                                src="../../typo3temp/pics/33b23697d6.jpg" width="200" height="54" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>PITTCON</strong><br>
                                    02.03.2014 - 06.03.2014 <br> Chicago, United States <br><strong> Booth 2116,
                                        2216</strong> <br><a href="http://pittcon.org/"
                                                             target="_blank">http://pittcon.org</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.industrysouth.co.uk/" target="_blank"><img
                                                src="../../uploads/tx_retschdatadates/SOUTH2014title_01.gif" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Southern Manufacturing and Electronics Exhibition</strong><br>
                                    12.02.2014 - 13.02.2014 <br> Farnborough, United Kingdom <br><strong>Hall FIVE,
                                        Booth K49</strong> <br><a href="http://www.industrysouth.co.uk/" target="_blank">Link</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://productronica.com/" target="_blank"><img
                                                src="../../typo3temp/pics/00369318be.jpg" width="200" height="44" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Productronica</strong><br>
                                    12.11.2013 - 15.11.2013 <br> Munich, Germany <br><strong>Hall A1, Booth
                                        345/1</strong> <br><a href="http://productronica.com/" target="_blank">www.productronica.com</a>
                                </div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                </div>
                                <div class="information">
                                    <strong>Lab Innovations</strong><br>
                                    06.11.2013 - 07.11.2013 <br> Birmingham, United Kingdom <br><strong> Booth
                                        B13</strong> <br><a
                                            href="http://www.easyfairs.com/events_216/lab-innovations2013_45561/lab-innovations-2013_45562/"
                                            target="_blank">www.easyfairs.com</a></div>
                            </li>
                            <li class="exhibition">
                                <div class="image">
                                    <a href="http://www.matscitech.org/" target="_blank"><img
                                                src="../../typo3temp/pics/c55d156e92.jpg" width="200" height="55" border="0"
                                                alt=""></a></div>
                                <div class="information">
                                    <strong>Material Science & Technology 2013</strong><br>
                                    27.10.2013 - 31.10.2013 <br> Montreal, Canada <br><strong> Booth 1304</strong>
                                    <br><a href="http://www.matscitech.org/" target="_blank">www.matscitech.org</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop