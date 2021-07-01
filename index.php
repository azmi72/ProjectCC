<?php
 session_start();
?>



<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sekilas Bola</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="pilihanLiga.php">League</a></li>
                            <?php
                            if(empty($_SESSION['Nama_Pengguna'])){                           
                            echo '<li ><a href="login.php">Live Match</a></li>';
                            } else {
                            echo '<li ><a href="livematch.php">Live Match</a></li>';
                            } 
                            ?>
                            <li><a href="#news">News</a></li>
                            <li><a href="#aboutus">About Us</a></li>
                            <?php
                            if(empty($_SESSION['Nama_Pengguna'])){                           
                            echo '<li ><a href="login.php">Log in</a></li>';
                            } else {
                            echo '<li ><a href="logout.php">Log out</a></li>';
                            } 
                            ?>
                            
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>

        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2"> 
                            <?php
                            if(empty($_SESSION['Nama_Pengguna'])){                           
                            echo 'Welcome To Sekilas Bola</h2>';
                            } else {
                            $nama = $_SESSION['Nama_Pengguna'];    
                            echo 'Welcome to Sekilas Bola. How are you <br>'.$nama.'</br> </h2>';
                            }?>
                        <p>Untuk informasi pertandingan kepada pencinta sepak bola, baik pertandingan lama, sedang berlangsung, maupun pertandingan yang akan datang.</p>
                        <a href="#aboutus" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/Slider01.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Best League</h2>
                        <p>Ada banyak pilihan liga terbaik di dunia untuk anda. Lihat pertandingannya dan analisis statistiknya!</p>
                        <a href="pilihanLiga.php" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/Slider02.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->

                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->

        <!-- Service section start -->
        <div class="section primary-section" id="league">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Best League</h1>
                    <!-- Section's title goes here -->
                    <p>Ada banyak pilihan liga terbaik di dunia untuk anda. Lihat pertandingannya dan analisis statistiknya!</p>
                    <!--Simple description for section goes here. -->
                </div>
            </div>
        </div>
        <!-- Service section end -->

         <!-- Portfolio section start -->
         <div class="section secondary-section " id="match">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1><b>Latest Match</b></h1>
                </div>
                
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio01.png" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Portugal vs France</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>19.00 (GMT), 23 June 2021</div>
                                    <div>
                                        <span>Referee</span>Antonio Mateu</div>
                                    <div>
                                        <span>Stadium</span>Puskas Arena</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971942/portugal-vs-france/review</div>
                                    <p><span><br>Portugal: </span><br> Ronaldo (31') <br> Ronaldo (60')</p>
                                    <p><span>France: </span><br> Benzema (45') <br> Benzema (47')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio02.png" alt="project 2">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Sweden vs Poland</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>16.00 (GMT), 23 June 2021</div>
                                    <div>
                                        <span>Referee</span>Michael Oliver</div>
                                    <div>
                                        <span>Stadium</span>Saint Petersburg Stadium</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971936/sweden-vs-poland/review</div>
                                    <p><span><br>Sweden: </span><br> Forsberg (2') <br> Forsberg (59') <br> Claesson (90')</p>
                                    <p><span>Poland: </span><br> Lewandowski (61') <br> Lewandowski (84') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio03.png" alt="project 3">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Slovakia vs Spain</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>16.00 (GMT), 23 June 2021</div>
                                    <div>
                                        <span>Referee</span>Bjorn Kuipers</div>
                                    <div>
                                        <span>Stadium</span>Estadio de La Cartuja</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971935/slovakia-vs-spain/review</div>
                                    <p><span><br>Slovakia: </span></p>
                                    <p><span>Spain: </span><br> Dubravka [OG] (30') <br> Laporte (45') <br> Sarabia (56') <br> Torres (67') <br> Kucka [OG] (71') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio04.png" alt="project 4">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Italy vs Wales</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>16.00 (GMT), 20 June 2021</div>
                                    <div>
                                        <span>Referee</span>Ovidiu Hategan</div>
                                    <div>
                                        <span>Stadium</span>Stadio Olimpico, Rome</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971915/italy-vs-wales/review</div>
                                    <p><span><br>Italy: </span><br> Pessina (39')</p>
                                    <p><span>Wales: </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 -->
                    <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio05.png" alt="project 5">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Finland vs Belgium</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>19.00 (GMT), 21 June 2021</div>
                                    <div>
                                        <span>Referee</span>Felix Brych</div>
                                    <div>
                                        <span>Stadium</span>Saint Petersburg Stadium</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971921/finland-vs-belgium/review</div>
                                    <p><span><br>Finland: </span></p>
                                    <p><span>Belgium: </span><br> Hradecky (74') <br> Lukaku (81') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio06.png" alt="project 6">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Croatia vs Scotland</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>19.00 (GMT), 22 June 2021</div>
                                    <div>
                                        <span>Referee</span>Fernando Rapallini</div>
                                    <div>
                                        <span>Stadium</span>Hampden Park</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971930/croatia-vs-scotland/review</div>
                                    <p><span><br>Croatia: </span><br> Vlasic (17') <br> Modric (62') <br> Perisic (77')</p>
                                    <p><span>Scotland: </span><br> McGregor (42') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 6 -->
                    <!-- Start details for portfolio project 7 -->
                    <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio07.png" alt="project 7">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Czech Republik vs England</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>19.00 (GMT), 22 June 2021</div>
                                    <div>
                                        <span>Referee</span>Artur Dias</div>
                                    <div>
                                        <span>Stadium</span>Wembley</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971929/czech-republic-vs-england/review</div>
                                    <p><span><br>Czech Republik: </span></p>
                                    <p><span>England: </span><br> Sterling (12')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 -->
                    <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio08.png" alt="project 8">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>North Macedonia vs Netherlands</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>16.00 (GMT), 21 June 2021</div>
                                    <div>
                                        <span>Referee</span>Istvan Kovacs</div>
                                    <div>
                                        <span>Stadium</span>Johan Cruijff Arena</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971946/north-macedonia-vs-netherlands/review</div>
                                    <p><span> <br> North Macedonia: </span></p>
                                    <p><span>Netherlands: </span><br> Depay (24') <br> Wijnaldum (51') <br> Wijnaldum (58') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 -->
                    <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio09.png" alt="project 9">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Germany vs Hungary</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Kick Off</span>19.00 (GMT), 23 June 2021</div>
                                    <div>
                                        <span>Referee</span>Sergei Karasev</div>
                                    <div>
                                        <span>Stadium</span>Fussball Arena Munchen</div>
                                    <div>
                                        <span>Link</span>https://footyroom.co/matches/79971941/germany-vs-hungary/review</div>
                                    <p><span><br> Germany: </span><br> Havertz (66') <br> Goretzka (84') <br> Claesson (90')</p>
                                    <p><span>Hungary: </span><br> Szalai (11') <br> Schafer (68') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/Portfolio01.png" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Portugal vs France</h3>
                                <p>Euro 2021 - Grup F</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Portfolio02.png" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sweden vs Poland</h3>
                                <p>Euro 2020 - Grup E</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/Portfolio03.png" alt="project 3">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Slovakia vs Spain</h3>
                                <p>Euro 2020 - Grup E</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/Portfolio04.png" alt="project 4">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Italy vs Wales</h3>
                                <p>Euro 2020 - Grup A</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Portfolio05.png" alt="project 5">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Finland vs Belgium</h3>
                                <p>Euro 2020 - Grup B</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/Portfolio06.png" alt="project 6">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Croatia vs Scotland</h3>
                                <p>Euro 2020 - Grup D</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/Portfolio07.png" alt="project 7" />
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Czech Republik vs England</h3>
                                <p>Euro 2020 - Grup D</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Portfolio08.png" alt="project 8">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>North Macedonia vs Netherlands</h3>
                                <p>Euro 2020 - Grup C</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/Portfolio09.png" alt="project 9">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Germany vs Hungary</h3>
                                <p>Euro 2020 - Grup F</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->

        <!-- About us section start -->
        <div class="section primary-section" id="news">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Football News</h1>
                    <p>Baca juga berita terbaru seputar dunia sepakbola dari sumber-sumber terpercaya dan terbaru!</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="images/Team1.png" alt="team 1">
                            <h3>Berita Ronaldo</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.bola.net/italia/cristiano-ronaldo-hengkang-inilah-deretan-kandidat-penggantinya-di-juventus-cb0f19.html">
                                        <span class="icon-globe"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h4>Cristiano Ronaldo Hengkang, Inilah Deretan Kandidat Penggantinya di Juventus</h4>
                                <p> Juventus mulai bersiap-siap kehilangan sang bintang, Cristiano Ronaldo. Bianconeri kabarnya sudah menyiapkan sejumlah nama untuk menggantikan CR7 musim depan. Ronaldo kabarnya berniat hengkang dari Juventus pada musim panas ini menyusul kegagalan timnya mempertahankan gelar Scudetto serta kembali gagal berjaya di pentas Liga Champions</p>
                                <br>
                                <p>Baca Selengkapnya di Bola.net</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                            <img src="images/Team2.png" alt="team 1">
                            <h3>Berita Pep Guardiola</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.bola.net/spanyol/ogah-balik-pep-guardiola-sarankan-barcelona-tunjuk-kembali-luis-enrique-sebagai-pelatih-b4e78f.html">
                                        <span class="icon-globe"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h4>Ogah Balik, Pep Guardiola Sarankan Barcelona Tunjuk Kembali Luis Enrique Sebagai Pelatih</h4>
                                <p>Manajer Manchester City, Josep Guardiola dikabarkan menolak ajakan Joan Laporta untuk kembali ke mantan klubnya, Barcelona pada musim panas tahun depan. Saat ini posisi pelatih Barcelona masih diduduki oleh Ronald Koeman. Terlepas dari desas-desus pemecatannya, Laporta akhirnya memastikan bahwa Koeman masih akan bertugas untuk musim 2021/22 mendatang.</p>
                                <br>
                                <p>Baca Selengkapnya di Bola.net</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="images/Team3.png" alt="team 1">
                            <h3>Berita Mbappe</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.bola.net/liga_eropa_lain/kylian-mbappe-putuskan-tak-perpanjang-kontrak-di-psg-jadi-mau-ke-mana-nih-95be6a.html">
                                        <span class="icon-globe"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h4>Kylian Mbappe Putuskan Tak Perpanjang Kontrak di PSG, Jadi Mau ke Mana Nih?</h4>
                                <p>Bintang muda PSG, Kylian Mbappe dikabarkan sudah mengatakan pada klubnya bahwa ia tak memiliki niat untuk memperpanjang kontraknya yang berakhir tahun depan. Masa depan Mbappe sudah sejak lama menjadi perbincangan hangat karena banyak klub top Eropa yang menginginkan tanda tangannya. Real Madrid diklaim menjadi peminat Mbappe yang paling serius.</p>
                                <br>
                                <p>Baca Selengkapnya di Bola.net</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text centered" id="aboutus">
                    <h3>About Us</h3>
                    <p>Website untuk mengetahui statistik dari pertandingan sepak bola baik yang sudah berlalu, sedang berlangsung maupun yang akan datang dengan menggunakan API dari masing-masing Liga terbaik di dunia. Pengunjung dapat membuat akun dan mengunggah data diri. Di Sekilas Bola pun dapat melihat berita seputar sepak bola dari referensi web terpercaya.</p>
                </div>
                <div class="row-fluid">
                    <div class="span6 center">
                        <div class="highlighted-box center">
                            <h1>Anggota Kelompok</h1> <br>
                            <p>Made Krisnanda Utama		NRP. 05311840000033 </p>
                            <p>M. Reza Aisyi			NRP. 05311840000036</p>
                            <p>Azmi			        	NRP. 05311840000047</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us section end -->

        <!-- Sebelum Footer start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">Football is About Love, Team, and Piece.</p>
            </div>
        </div>
        <!-- Sebelum Footer end -->
        
        <!-- Footer section start -->
        <div class="footer">
            <p>Kelompok: Aisyi, Krisna, Azmi</p>
        </div>
        <!-- Footer section end -->

        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->

        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>

