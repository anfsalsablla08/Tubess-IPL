<?php include "init.php"?>
<?php if(!isset($_SESSION['id'])): ?>
<?php header("location:login.php"); ?>
<?php endif; ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/nicepage.css" media="screen" />
        <link rel="stylesheet" href="assets/css/dashboard.css" media="screen" />
        <script class="u-script" type="text/javascript" src="assets/js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="assets/js/nicepage.js" defer=""></script>
        <meta name="generator" content="Nicepage 5.0.7, nicepage.com" />
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": ""
            }
        </script>

        <meta name="theme-color" content="#00cc99" />
        <meta property="og:title" content="Dashboard" />
        <meta property="og:type" content="website" />
    </head>
    <body class="u-body u-xl-mode" data-lang="en">
        <header class="u-align-left u-clearfix u-header u-palette-3-light-1 u-header" id="sec-df73" style="background-color:#00cc99;">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h3 class="u-custom-font u-font-georgia u-text u-text-default u-text-1">eDzikr Campus</h3>
                <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
                        <a
                            class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
                            href="#"
                            style="padding: 4px 0px; font-size: calc(1em + 8px);"
                        >
                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5c50"></use></svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1"
                                id="svg-5c50"
                                x="0px"
                                y="0px"
                                viewBox="0 0 302 302"
                                style="enable-background: new 0 0 302 302;"
                                xml:space="preserve"
                                class="u-svg-content"
                            >
                                <g>
                                    <rect y="36" width="302" height="30"></rect>
                                    <rect y="236" width="302" height="30"></rect>
                                    <rect y="136" width="302" height="30"></rect>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </a>
                    </div>
                    <div class="u-nav-container">
                        <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
                            <li class="u-nav-item">
                                <a
                                    class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                    href="Dashboard.php"
                                    style="padding: 10px 20px;"
                                >
                                    Dashboard
                                </a>
                            </li>
                            <li class="u-nav-item">
                                <a
                                    class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                    href="Al-Matsurat-Pagi.php"
                                    style="padding: 10px 20px;"
                                >
                                    Al-Matsurat Pagi
                                </a>
                            </li>
                            <li class="u-nav-item">
                                <a
                                    class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                    href="Al-Matsurat-Petang.php"
                                    style="padding: 10px 20px;"
                                >
                                    Al-Matsurat Petang
                                </a>
                            </li>
                            <li class="u-nav-item">
                                <a
                                    class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                    href="Al-Quran.php"
                                    style="padding: 10px 20px;"
                                >
                                    Al-Qur'an
                                </a>
                            </li>
                            <li class="u-nav-item">
                                <a
                                    class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                    href="Jadwal-Sholat.php"
                                    style="padding: 10px 20px;"
                                >
                                    Jadwal Sholat
                                </a>
                            </li>
                            <li class="u-nav-item">
                                <a
                                    class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                    href="logout.php"
                                    style="padding: 10px 20px;"
                                >
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-nav-container-collapse" >
                        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav" >
                            <div class="u-inner-container-layout u-sidenav-overflow" style="background-color:#00cc99;">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Dashboard.php">Dashboard</a></li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Al-Matsurat-Pagi.php">Al-Matsurat Pagi</a></li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Al-Matsurat-Petang.php">Al-Matsurat Petang</a></li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Al-Quran.php">Al-Qur'an</a></li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Jadwal-Sholat.php">Jadwal Sholat</a></li>
                                </ul>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php">Logout</a></li>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div>
        </header>
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <?php if(isset($_SESSION['login_success'])): ?>
                <div class="success">
                    <?php echo $_SESSION['login_success']; ?>
                </div>
                <?php endif; ?>
                <?php unset($_SESSION['login_success']); ?>
            </div>
        <h3 class="text-center">Welcome to Dashboard</h3>
        <div class="card border-info mb-5 mx-auto" style="max-width: 75%;">
            <div class="card-header text-center"><h3>Sistem Infomasi - eDzikr Campus</h3></div> 
            <div class="card-body text-info">
                <h4 class="card-text" style="color: black;">Sistem Informasi Dzikir Pagi dan Petang ini akan merinci pengembangan proyek sistem informasi dzikir pagi dan petang yang akan berintegrasi berbasis perangkat keras dan perangkat lunak yang bertujuan sebagai penyedia fasilitas dakwah kampus</h4>
            </div>
        </div>
    </div>
        </section>

        

        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4bb7" style="background-color: #00cc99;">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">KELOMPOK 1 - AIG 2020</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
