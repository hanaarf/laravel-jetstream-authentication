<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="landingpage/csslp/consultant.css">
    <link rel="stylesheet" href="landingpage/csslp/swiper-bundle.min.css">
    

    <!-- link poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <!-- linkiconsearch -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="nav">
        <span class=""><img src="landingpage/gambar/logodm.png" alt="" width="80px"></span>
        <p class="jdl">DeepMind</p>
        @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}"">Dashboard</a>
        @else
            <a href="{{ route('login') }}"">Sign in</a>
        @endauth
        @endif
        <div class="container">
            <div class="search-box">
                <div class="search-icon">
                    <i class="fas fa-search"></i>
                </div>
                <div class="search-input">
                    <input type="text " class="input" placeholder="Search Menu">
                </div>
            </div>
        </div>
    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <br><br><a href="/">Home</a><br>
            <a href="/konsultan">Consultants</a><br>
        </div>
    </div>
    <span class="navbar-toggler-icon"></span>
    <span onclick="openNav()">
        <span class="material-symbols-outlined"
            style="margin-left: 1300px;position: absolute;margin-top: -60px;color: #1a1a1ada;font-size: 30px;">
            menu
        </span>
    </span>


    <section id="atas">
        <div class="kiri">
            <h1>Deepmind Consultant</h1>
            <p>Together with DeepMind, consultants are ready to take responsibility for their mental health.</p>
        </div>
        <div class="kanan">
            <img class="gbr1" src="landingpage/gambar/buletknsl.png" alt="" width="580px">
            <img class="gbr2" src="landingpage/gambar/fotbar.png" alt="" width="530px">
        </div>
    </section>

    <section id="konsultan">
        <h1>Our Consultants</h1>
        <p>Despite the burdens of mental illness, many are deterred from seeking treatment. We can offer immediate
            confidential care with only a few clicks.</p>
            <div class="container1 swiper">
                <div class="slide-container">
                  <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                      <div class="image-box">
                        <img src="landingpage/gambar/bucaca.png" alt="" />
                      </div>
                    </div>
                    <div class="card swiper-slide">
                      <div class="image-box">
                        <img src="landingpage/gambar/busheyla.png" alt="" />
                      </div>
                    </div>
                    <div class="card swiper-slide">
                      <div class="image-box">
                        <img src="landingpage/gambar/pagunawan.png" alt="" />
                      </div>
                    </div>
                    <div class="card swiper-slide">
                      <div class="image-box">
                        <img src="landingpage/gambar/buheni.png" alt="" />
                      </div>
                    </div>
                    <div class="card swiper-slide">
                      <div class="image-box">
                        <img src="landingpage/gambar/bufika.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next swiper-navBtn" style="color: #1a1a1a;"></div>
                <div class="swiper-button-prev swiper-navBtn" style="color: #1a1a1a;"></div>
                <div class="swiper-pagination"></div>
              </div> 
    </section>

    <section id="kordinator">
        <img src="landingpage/gambar/kordinator.png" alt="" width="500px" />
        <div class="kotak">
            <h1>Bk</h1><br>
            <h2>Coordinator</h2>
        </div>
    </section>

    <section id="footer">
        <div class="atas">
            <div class="logo">
                <div class="kotak">
                    <img src="landingpage/gambar/logodm.png" alt="" width="80px">
                    <h3>DeepMind</h3>
                </div>
                <p>Best of Your Mind Health</p>
                <div class="sosial">
                    <ul>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </ul>
                </div>
            </div>
            <div class="download">
                <h3>DeepMind App</h3><br>
                <img class="gbr1" src="landingpage/gambar/ios.png" alt="" width="170px"><br>
                <img class="gbr2" src="landingpage/gambar/playstore.png" alt="" width="170px">
            </div>
            <div class="organization">
                <h3>For Organization</h3><br>
                <p>For Bussines</p>
                <p>For School</p>
                <p>For Student</p>
            </div>
            <div class="colaboration">
                <h3>Collaboration With</h3><br>
                <p>dicoding</p>
                <p>Samsung Tech Institute</p>
                <p>SMK bisa-hebat</p>
            </div>
        </div>
        <div class="bawah">
            <p>© 2023 Deepmind SMK TB Depok</p>
           <div class="logo">
            <img class="gbr1" src="landingpage/gambar/smkhebat.png" alt="" width="120px">
            <img class="gbr2" src="landingpage/gambar/sti.png" alt="" width="140px" height="30px">
            <img class="gbr3" src="landingpage/gambar/dicoding.png" alt="" width="120px" height="30px">
           </div>
        </div>
    </section>
   



    


    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function () {

                $(this).addClass('transition');
            }, function () {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
     <script src="landingpage/jslp/swiper-bundle.min.js"></script>
     <script src="landingpage/jslp/script.js"></script>

</body>

</html>