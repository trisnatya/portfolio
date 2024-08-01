<!DOCTYPE html>
<html lang="id">

<?php 
session_start();
$js = false;
if(!isset($_SESSION['js'])||$_SESSION['js']==""){
    echo "<noscript><meta http-equiv='refresh' content='0;url=status.php?js=0'> </noscript>";
    $js = true;
}elseif(isset($_SESSION['js'])&& $_SESSION['js']=="0"){
    $js = false;
    $_SESSION['js']="";
}elseif(isset($_SESSION['js'])&& $_SESSION['js']=="1"){
    $js = true;
    $_SESSION['js']="";
}
?>

<?php if ($js) { ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trisnatya Mahardhika, S.Kom.</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="shortcut icon" href="img/titikoma.png">
    </head>
    <body>
        <div id="main">
            <!-- sidebar -->
            <input type="checkbox" id="check">
            <div class="sidebar">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#achievement">Achievement</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <!-- header -->
            <header>
                <div class="container">
                    <div class="fixed">
                        <p><a href="">TRISNATYA MAHARDHIKA, S.Kom.</a></p>
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#achievement">Achievement</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <!-- menu mobile -->
                        <label for="check" class="mobile-menu"><i class="fas fa-bars fa"></i></label>
                    </div>
                </div>
            </header>

            <!-- banner -->
            <section class="banner">
                <div class="container">
                    <div class="banner-left">
                        <img src="img/bhond.png">
                        <h2>Hai...<br>
                            Saya adalah seorang<br/><span class="efek-ngetik"></span></h2>
                        <p>Selamat datang di website portofolio saya</p>
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="container">
                    <h2>About</h2>
                    <h3></h3>
                    <p>Saya adalah seorang karyawan di salah satu perushaan Konsultan IT yang berada di Kota Bandung. Dengan pengalaman kerja dibidang Web Developer, pembuatan aplikasi website sudah menjadi hobi bagi saya.</p>
                </div>
            </section>
            <section id="skills">
                <div class="container">
                    <h2>Skills</h2>
                    <h3></h3>
                    <h4>HTML</h4>
                    <div class="bar">
                        <span class="nilai html">95%</span>
                    </div>
                    <h4>CSS</h4>
                    <div class="bar">
                        <span class="nilai css">85%</span>
                    </div>
                    <h4>Javascript</h4>
                    <div class="bar">
                        <span class="nilai js">90%</span>
                    </div>
                    <h4>PHP</h4>
                    <div class="bar">
                        <span class="nilai php">95%</span>
                    </div>
                </div>
            </section>
            <section id="achievement">
                <div class="container">
                    <h2>Achievement</h2>
                    <h3></h3>
                    <div class="col-4">
                        <a href="https://aspen.eccouncil.org/verify" target="_blank">
                            <img src="img/Certificate CSCU.jpg">
                            <span>Certificate CSCU</span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://aspen.eccouncil.org/VerifyEval" target="_blank">
                            <img src="img/Certificate Of Attendance.jpg">
                            <span>Certificate Of Attendance</span>
                        </a>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="container">
                    <h2>Contact</h2>
                    <h3></h3>
                    <div class="col-3">
                        <h4>Lokasi</h4>
                        <p>Bandung, Jawa Barat</p>
                    </div>
                    <div class="col-3">
                    </div>
                    <div class="col-3">
                        <h4>Email</h4>
                        <p><a href="#" target="_blank">trisna [at] server-uing.my.id</a></p>
                    </div>
                    <!-- <div class="col-3">
                        <h4>Telp/WA</h4>
                        <p><a href="#"_blank">0</a></div></p>
                    </div> -->    
                </div>
            </section>
            <footer>
                <div class="container">
                    <small>Copyright &copy; <script>document.write(new Date().getFullYear())</script> - Trisnatya Mahardhika.</small>
                    <?php 
                        include ("counter.php");
                        echo "<p font-weight:enchant_broker_list_dicts(broker)'> $kunjungan[0] </p>";
                    ?>
                </div>
            </footer>
            <script src="js/script.js"></script>
        </div>
    </body>

<?php } else { ?>

    <noscript>
        <link rel="stylesheet" type="text/css" href="css/noscript.css">
    </noscript>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trisnatya Mahardhika, S.Kom.</title>
        <link rel="shortcut icon" href="img/titikoma.png">
    </head>
    <body>
        <noscript>
            <div id='mainlNoscript'>
                <div class='isiNoscript'>
                    <span class='judul'>Aktifkan Javascript</span>
                    <br>
                    <svg viewBox='0 0 24 24'>
                        <path d='M3,3H21V21H3V3M7.73,18.04C8.13,18.89 8.92,19.59 10.27,19.59C11.77,19.59 12.8,18.79 12.8,17.04V11.26H11.1V17C11.1,17.86 10.75,18.08 10.2,18.08C9.62,18.08 9.38,17.68 9.11,17.21L7.73,18.04M13.71,17.86C14.21,18.84 15.22,19.59 16.8,19.59C18.4,19.59 19.6,18.76 19.6,17.23C19.6,15.82 18.79,15.19 17.35,14.57L16.93,14.39C16.2,14.08 15.89,13.87 15.89,13.37C15.89,12.96 16.2,12.64 16.7,12.64C17.18,12.64 17.5,12.85 17.79,13.37L19.1,12.5C18.55,11.54 17.77,11.17 16.7,11.17C15.19,11.17 14.22,12.13 14.22,13.4C14.22,14.78 15.03,15.43 16.25,15.95L16.67,16.13C17.45,16.47 17.91,16.68 17.91,17.26C17.91,17.74 17.46,18.09 16.76,18.09C15.93,18.09 15.45,17.66 15.09,17.06L13.71,17.86Z'/>
                    </svg>
                    <br>
                    Untuk mengakses laman ini, hidupkan Javascript<br>di dalam pengaturan browser.
                </div>
            </div>
        </noscript>
    </body>

<?php } ?>
</html>