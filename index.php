<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/8def8f3969.js" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/3477ae541c.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <style>
            body {<?php if ($lang == 'ar') echo 'direction: rtl;'; ?>}
            <?php if ($lang == 'ar') echo '@media (max-width:790px) { #aboutustitle, #ourvisiontitle, #ourvisiontitle1 {margin-left: 0; margin-right: 20px} }'; ?>
        </style>
        <!-- dont forget to add the lines for mobile devices -->
        <title>BaRa Metall</title>
    </head>
    <body>

        <!-- header -->
        <div class="container">
            <header class="header">
                <!-- <a href="#home" id="logo" class="logo"><img src="images/logo.jpg"></a> -->
                <div class="logo">
                    <a href="#home" class="logo">
                        <img src="images/Real bara image.jpeg" id="logo">
                    </a>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="#home"><i id="house" class="fa-solid fa-house" style="color: #11466e;"></i> Home</a></li>
                        <li><a href="#ourvision1">Our Vision</a></li>
                        <li><a href="#interests">Interests</a></li>
                        <li><a href="#aboutus">About Us</a></li>
                        <!-- <a href="#aboutus">About Us</a>
                        <a href="#team">Team</a> -->
                        <li><a href="#contact1">Get in touch</a></li>
                    </ul>
                </nav>

                <div id="navbar" class="lang-menu">
                    <div id="navbar" class="selected-lang">
                        <i class="fa-solid fa-language fa-xl" style="color: #11466e;"></i>
                    </div>
                    <ul>
                        <li><a href="index.php?lang=sv">Svenska</a></li>
                        <li><a href="index.php?lang=en">English</a></li>
                        <li><a href="index.php?lang=ar">العربية</a></li>
                        <li><a href="index.php?lang=de">Deutsch</a></li>
                        <li><a href="index.php?lang=nl">Nederlands</a></li>
                        <li><a href="index.php?lang=it">Italiano</a></li>
                        <li><a href="index.php?lang=fr">Français</a></li>
                    </ul>
                </div>

                <i class="fa-solid fa-bars"></i>

            </header>
        </div>
        <!-- /header -->

        <!-- home -->
        <section class="home" id="home">
            <div class="swiper home-slid">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="image">
                            <!-- <img src="https://images.interestingengineering.com/images/import/2017/08/atlas_cern.jpg" id="image1" alt="iamge"> -->
                        </div>
                        <div class="content">
                            <h1 id="helloworld">INDUSTRIAL MACHINES EXPERTS!</h1>
                            <p>YOU WILL NEVER REGRET WORKING WITH US</p>
                        </div>
                    </div>

                    <!-- <div class="barap">

                    <h1 id="h1p">Ba&Ra Metall</h1>
                    <h2 id="h2p">Purchase of Industrial Electric Equipment</h2>

                    </div> -->
                </div>
            </div>
        </section>

        <div id="ourvision1">
            <div class="container">
                <h2 id="ourvisiontitle">How do we work?</h2>
                <p id="ourvisiontitle1">It's as simple as A B C yet very accommodating.</p>
                <ul id="ourvision">
                    <li>A: We purchase your industrial machines and electric equipment.</li>
                    <li>B: We refurbish them.</li>
                    <li>C: We distribute the products to individuals and businesses that are in need.</li>
                </ul>
            </div>
        </div>

        <div class="pros" id="interests">
            <div class="container">
                <div style="text-align: center;"><h1 id="productsh1">Our interest of goods</h1></div>
                <div id="imagestext" class="imagestext">
                    <div class="image">
                        <div class="overlay">
                            <h2>Electric motors <br>Gearboxes<br>Pumps<br>Hydraulic parts</h2>
                        </div>
                        <img src="images/electricmotors1.jpg">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2>Valves</h2>
                        </div>
                        <img src="images/valves2.jpg" id="image3" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2>Bearings</h2>
                        </div>
                        <img src="images/bearings1.jpg" id="image4" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2>Automation and Pneumatics</h2>
                        </div>
                        <img src="images/automation and pneumatics1.jpg" id="image5" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2>Transmissions</h2>
                        </div>
                        <img src="images/transmissions1.jpg" id="image6" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2>Machinery</h2>
                        </div>
                        <img src="images/machinery1.jpg" id="image7" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2>Spare parts</h2>
                        </div>
                        <img src="images/spare parts1.jpg" id="image8">
                    </div>
                </div>

                <div id="mobileimages" class="mobileimages">
                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/electricmotors1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Electric motors <br>Gearboxes<br>Pumps<br>Hydraulic parts</h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/valves2.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Valves</h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/bearings1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Bearings</h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/automation and pneumatics1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Automation and Pneumatics</h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/transmissions1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Transmissions</h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/machinery1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Machinery</h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/spare parts1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2">Spare parts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about us  -->
        <section id="aboutus" class="aboutus">
            <div class="container">
                <h2 id="aboutustitle">About Us</h2>
                <p id="aboutusmain">As a startup company, we are committed to environmental sustainability and are passionate about promoting the principles of recycling and reusing industrial goods. Our goal is to encourage factories to reduce their production and minimize pollution by adopting eco-friendly practices that prioritize the efficient use of resources. We believe that by spreading awareness about the importance of recycling and reuse, we can make a positive impact on the environment and build a more sustainable future.</p>
            </div>
        </section>

        <!-- contact section  -->
        <section class="contact1" id="contact1">
            <div id="contactus" class="contactus">
                <div class="container">
                    <div class="title">
                        <h2 id="git">Get In Touch With Us</h2>
                    </div>
                    <div class="box">
                        <!-- form -->
                        <div class="contact form">
                            <!-- dont forget to ADD DADS email instead of yours  -->
                            <form action="https://formsubmit.co/cbcda25d9f15b3900d210ae83c7d6a0a" method="POST">
                                <input type="hidden" name="_captcha" value="false">
                                <div class="formBox">
                                    <div class="row50">
                                        <div class="inputBox">
                                            <input type="text" name="name" placeholder="Name*" required>
                                        </div>
                                    </div>

                                    <div class="row50">
                                        <div class="inputBox" name="Email">
                                            <input type="text" name="email" placeholder="Email*" required>
                                        </div>
                                        <div class="inputBox" name="Number">
                                            <input type="text" name="_subject" placeholder="Phone Number">
                                        </div>
                                    </div>

                                    <div class="row100">
                                        <div class="inputBox" name="Message" >
                                            <textarea name="Message" placeholder="Write your message or question here..." required></textarea>
                                        </div>
                                    </div>

                                    <div class="row100">
                                        <div class="inputBox">
                                            <input id="SendBtn" type="Submit" value="Send">
                                        </div> 
                                    </div>
                                </div>

                                <div class="qrcodes1">
                                    <div class="ebayqr">
                                        <img src="images/EBAYQR.jpg">
                                    </div>
                                    <div class="fbqr">
                                        <img src="images/FBQR.jpg">
                                    </div>
                                    <div class="waqr">
                                        <img src="images/QRcodeWA.jpg">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- infobox -->
                        <!-- <div class="contact info"> -->
                            <!-- contact info  -->
                            <!-- <div class="infoBox"> -->
                                <!-- dont forget to add where we are located  -->
                                <!-- Dont forget to add dads email when mahmoud is done  -->
                                    <!-- <ul class="sci"> -->
                                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d260532.7271070731!2d17.65241461925135!3d59.32607622752477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f763119640bcb%3A0xa80d27d3679d7766!2sStockholm!5e0!3m2!1ssv!2sse!4v1681937518119!5m2!1ssv!2sse" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                        <!-- dont forget to add social media  -->
                                        <!-- <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i>WhatsApp</a></li> -->
                                        <!-- <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i>Linkedin</a></li> -->
                                    <!-- </ul> -->
                            <!-- </div>  -->
                        <!-- </div>  -->
                        <!-- map -->
                        <!-- dont forget to add location and to make the map -->
                        <div class="qrcodes">
                            <div class="qrcodestext">
                                <a id="qrbtn" href="https://www.qrcodechimp.com/page/barametall?v=chk1685797463"><i id="infocard" class="fa-solid fa-address-card fa-xl" style="color: #fff;"></i> Press here to get for all information you need</a>
                            </div>
                            <div class="barametallqr">
                                <a href="https://www.qrcodechimp.com/page/barametall?v=chk1685797463"><img id="qrinfo" src="images/barametallqr.jpg"></a>
                            </div>
                        </div>
                        <!-- kod för att stänga av spionering
                        ##20##
                        ##20## -->
                    </div>
                </div>
            </div>
        </section>

        <footer id="copyrightfooter">
            <div class="container">
                <h1 id="copyright">Copyright © 2023 Ba&Ra Metall</h1>
            </div>
        </footer>
        <!-- /home -->

        <div class="elfsight-app-df51eee5-bfe3-4850-9c65-5cad1b453acc"></div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="app.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    </body>
</html>