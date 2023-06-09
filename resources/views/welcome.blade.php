<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="landingpage/csslp/style.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="landingpage/csslp/swiper-bundle.min.css" />

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
    <div class="wav">
        <img src="landingpage/gambar/bgputih.png" alt="" class="waveputih" width="1360px" height="755px">
        <img src="landingpage/gambar/bgbiru.png" alt="" class="wavebiru" height="625px" width="850px">
    </div>

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


        {{-- <a href="/login">Sign In</a> --}}
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

    <div class="hero">
        <div class="kiri">
            <h2>Best Of Your</h2>
            <h1>Mind Health</h1>

            <h3>Deepmind is your go-to.
                Prevention Detect problems early and increase resilience.</h3>

            <div class="bwh" style="display: flex;margin-top: 10px;">
                <p>Contact Us</p>
                <span class="material-symbols-outlined">
                    arrow_forward
                </span>
            </div>
        </div>
        <div class="kanan">
            <img src="landingpage/gambar/herotb.png" alt="" width="503px">
        </div>
    </div>
    <a href="#mental" class="tombolscroll">
        <span class="material-symbols-outlined">
            expand_more
        </span>
    </a>

    <section id="mental">
        <div class="kotak">
            <h1>Your Mental Health Savior</h1>
            <p>Whether you want to boost your mental health, record your mood in real-time for a therapist, or reinforce
                strategies you’ve learned—DeepMind is your go-to.
                Prevention Detect problems early and increase resilience.</p>
            <div class="iyh">
                <img src="landingpage/gambar/kiri.png" alt="" width="300px">
                <img src="landingpage/gambar/tengah.png" alt="" width="300px">
                <img src="landingpage/gambar/kanan.png" alt="" width="300px">
            </div>
        </div>
    </section>

    <section id="visimisi">
        <img class="gbr1" src="landingpage/gambar/bulet1.png" alt="" width="700px">
        <div class="dalem">
            <h1>Our vission & mission</h1>
            <p>Vission -To become a center for guidance and counseling services that is at the forefront of developing
                individual potential and well-being, encouraging personal growth, and promoting mental health and
                academic success.</p>

        </div>
        <img class="gbr2" src="landingpage/gambar/mobile1.png" alt="" width="290px">

        <img class="gbr3" src="landingpage/gambar/bulet2.png" alt="" width="290px">
        <p class="teks3">1. Providing holistic and individual-centered guidance and counseling services, accommodating
            emotional, social, academic, and career needs.</p>

        <img class="gbr4" src="landingpage/gambar/bulet2.png" alt="" width="290px">
        <p class="teks4">2. Assist students in developing a better self-understanding, managing emotions, and coping
            with any problems they may face.</p>

        <img class="gbr5" src="landingpage/gambar/bulet2.png" alt="" width="290px">
        <p class="teks5">3. Provide support and guidance to students in preparing career plans that match their
            interests, talents and personal values.</p>

        <img class="gbr6" src="landingpage/gambar/bulet2.png" alt="" width="290px">
        <p class="teks6">4. Collaborate with teachers, parents and school staff to create an environment that supports
            the overall development of students.</p>

        <img class="gbr7" src="landingpage/gambar/bulet2.png" alt="" width="290px">
        <p class="teks7">5. Organize support activities and programs aimed at improving mental health, building social
            skills, and encouraging students' self-confidence.</p>
    </section>

    <section id="review">
        <img class="gbr1" src="landingpage/gambar/bulet1.png" alt="" width="680px">
        <h1>More than 0 Million Have Used DeepMind</h1>
        <div class="container1 swiper">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <p>“Thank you for being by my side for all those times I feel alone and sick of everything.”
                            </p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <p>“I was struggling in silence without being aware of it and this app helped me take care
                                of myself.”</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <p>“I've been using this app for years and I'm not stopping anytime soon.”</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <p>“Thank you for being by my side for all those times I feel alone and sick of everything.”
                            </p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <p>“I was struggling in silence without being aware of it and this app helped me take care
                                of myself.”</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="download">
        <div class="kotak">
            <div class="kiri">
                <h1>Start Today</h1>
                <p class="ats">Download the DeepMind App to help you on your way to a better emotional wellbeing.</p>
                <div class="bintang">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="bwh">From over 45,000 ratings</p>
                <div class="iyah">
                    <img class="gbr1" src="landingpage/gambar/ios.png" alt="" width="200px">
                    <img class="gbr2" src="landingpage/gambar/playstore.png" alt="" width="200px">
                </div>
            </div>
            <div class="kanan">
                <img class="gbr1" src="landingpage/gambar/mobile1.png" alt="">
                <img class="gbr2" src="landingpage/gambar/mobile2.png" alt="">
            </div>
        </div>
    </section>

    <section id="tb">
        <img class="gbr1" src="landingpage/gambar/bulet1.png" alt="" width="700px">

        <img class="gbr2" src="landingpage/gambar/smktb.png" alt="" width="1000px">
        <div class="luaran"></div>

        <div class="teks">
            <h1>Make Mental Health Care Easy</h1>
            <p>We support organization in improving the mental health and well-being of their members.</p>
            <a href="">Get In Touch</a>
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