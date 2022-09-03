<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ultimate Gamification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--BOOTSTRAP FILES START-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--BOOTSTRAP FILES END-->
    <!--BOOTSTRAP ICON FILES START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--BOOTSTRAP ICON FILES END-->
    <!--EXTERNAL CSS FOR VARIOUS FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Updock&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Updock&display=swap"
        rel="stylesheet">
    <!--EXTERNAL CSS FOR VARIOUS FONTS ENDS-->
    <!--ANIMATE ON SCROLL STARTS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--ANIMATE ON SCROLL ENDS-->
    <!--EXTERNAL CSS -->
    <link rel="stylesheet" href="{{ url('css/gamification.css') }}">
</head>

<body>
    <script>
        AOS.init();
    </script>
    <!--NAVBAR STARTS-->
    <section>
        <nav class="navbar navbar-expand-sm navbar-expand-md navbar11 fixed-top navbar-dark">
            <div class="container-fluid">
                <img src="{{ url('images/logos/ugtransparent.png') }}" class="navbar-brand imageinnavbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="#homesection">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="#aboutsection">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="#servicessection">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="#htui">HOW TO USE IT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" target="blank" href="{{ url('/ugmart') }}">UG MART</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link linksinnavbar">Home</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link linksinnavbar">LOG IN</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link linksinnavbar">REGISTER</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="#t5">CONTACT US</a>
                        </li>
                        <li>
                            <a class="nav-link linksinnavbar" href="mailto:yashmahajan01082003@gmail.com ">
                                <i class="bi bi-whatsapp whatsappiconinnavbar"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link linksinnavbar" href="mailto:yashmahajan01082003@gmail.com ">
                                <i class="bi bi-envelope-fill emailiconinnavbar"></i>
                            </a>
                        </li>
                        <li class="nav-link linksinnavbar" class="telnoinnavbar">
                            <i class="bi bi-telephone-fill teliconinnavbar"></i>
                            9730889531
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--NAVBAR ENDS-->
    <!--CAROUSEL STARTS-->
    <!--CAROUSEL LOOKS     ********************START-->
    <section class="carousel1">
        <div class="box11" id="homesection">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/carousel/car1.jpg" class="d-block w-100 imageincarousel1" alt="...">
                        <div class="carousel-caption cardes11" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="300" data-aos-offset="0">
                            <p class="wwf">Work With Fun</p>
                            <p class="lte">Learn To Earn</p>
                            <p class="desaboutugincar">The Ultimate Gamification is the web application that allows the
                                employee of the company to earn the points and use them to buy products from the UG
                                supported web applications.</p>
                            <div class="getstarted">
                                <a class="gsa" href="#aboutsection">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousel/car2.jpg" class="d-block w-100 imageincarousel1" alt="...">
                        <div class="carousel-caption cardes11" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="3000" data-aos-offset="0">
                            <p class="wwf">Work With Fun</p>
                            <p class="lte">Learn To Earn</p>
                            <p class="desaboutugincar">The Ultimate Gamification is the web application that allows the
                                employee of the company to earn the points and use them to buy products from the UG
                                supported web applications.</p>
                            <div class="getstarted">
                                <a class="gsa" href="#aboutsection">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/carousel/car3.jpg" class="d-block w-100 imageincarousel1" alt="...">
                        <div class="carousel-caption cardes11" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="3000" data-aos-offset="0">
                            <p class="wwf">Work With Fun</p>
                            <p class="lte">Learn To Earn</p>
                            <p class="desaboutugincar">The Ultimate Gamification is the web application that allows the
                                employee of the company to earn the points and use them to buy products from the UG
                                supported web applications.</p>
                            <div class="getstarted">
                                <a class="gsa" href="#aboutsection">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section>
    <!--CAROUSEL LOOKS        ------------------------ENDS-->
    <!--CAROUSEL ENDS-->
    <!--ABOUT SECTION STARTS-->
    <section class="aboutsection" id="aboutsection">
        <div class="container">
            <div class="aboutcont">
                <div class="aboutpara">
                    <p class="aboutparahead">
                        The Ultimate Gamification :
                        <br>
                        History
                    </p>
                    <p class="aboutparap1">
                        The Ultimate Gamification is the web application that allows employee of a company to get
                        motivation for improving their own performance and perform better and get appreciation
                        accordingly.
                    </p>
                    <p class="aboutparap1">History :</p>
                    <ul class="aboutparalist">
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Make gamification as a day to day concept for the employees
                        </li>
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Create an enthusiastic athmosphere for all the employees
                        </li>
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Make every employee aware that their contribution matters as well as it is appreciated.
                        </li>
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Make more than thousands of companies as part of UG mission.
                        </li>
                    </ul>
                </div>
                <div class="aboutimage">
                    <img src="images/about/aboutimg1.jpg" class="aboutimage1" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="aboutcont">
                <div class="aboutpara">
                    <p class="aboutparahead">
                        The Ultimate Gamification :
                        <br>
                        Vision and Mission
                    </p>
                    <p class="aboutparap1">
                        The Ultimate Gamification is the web application that allows employee of a company to get
                        motivation for improving their own performance and perform better and get appreciation
                        accordingly.
                    </p>
                    <p class="aboutparap1">Vision And Mission :</p>
                    <ul class="aboutparalist">
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Make gamification as a day to day concept for the employees
                        </li>
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Create an enthusiastic athmosphere for all the employees
                        </li>
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Make every employee aware that their contribution matters as well as it is appreciated.
                        </li>
                        <li>
                            <i class="bi bi-controller icont"></i>
                            Make more than thousands of companies as part of UG mission.
                        </li>
                    </ul>
                </div>
                <div class="aboutimage">
                    <img src="images/about/aboutimg2.jpg" class="aboutimage1" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT SECTION ENDS-->
    <!--STATUS OF THE WEB APPLICATION STARTS-->
    <section class="statussection">
        <div class="container">
            <div class="statuspara">
                <div class="statusparahead">
                    <p class="smallstatusparahead">CURRENT STATUS</p>
                    <p class="largestatusparahead">Our Current Status</p>
                </div>
            </div>
            <div class="statusboxes">
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-people-fill"></i>
                        <div class="headforstatus">4</div>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Hard Workers</strong>
                        that provide active service to clients.
                    </div>
                </div>
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-emoji-smile-fill"></i>
                        <div class="headforstatus">22</div>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Happy Clients</strong>
                        that have experienced our service and appreciated it.
                    </div>
                </div>
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-card-checklist"></i>
                        <div class="headforstatus">5</div>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Projects</strong>
                        that were being undertaken before making Ultimate Gamification.
                    </div>
                </div>
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-headset"></i>
                        <div class="headforstatus">180</div>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Active Hours</strong>
                        of service provided till now by Ultimate Gamification.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--STATUS OF THE WEB APPLICATION ENDS-->
    <!--SERVICES SECTION STARTS-->
    <!--SERVICES SECTION STARTS-->
    <section class="servicessection" id="servicessection">
        </div>
        <div class="serviceholder container">
            <div class="statusparahead">
                <p class="smallstatusparahead">SERVICES</p>
                <p class="largestatusparahead">Our Services</p>
            </div>
            <div class="servicesbox">
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-laptop-fill"></i>
                        <p>Online Shopping</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART allows you to carry out online shopping just through your computer.</p>
                    </div>
                </div>
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-door-closed-fill"></i>
                        <p>On Door Delivery</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART has such service so that a product you buy is sent to you with on door delivery.</p>
                    </div>
                </div>
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-alarm-fill"></i>
                        <p>Set Time For Arrival</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART allows you to setup timer for product being ordered so that you can prioritize
                            schedule over delivery.</p>
                    </div>
                </div>
            </div>
            <div class="servicesbox">
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-gift-fill"></i>
                        <p>Gift Wrap the Product</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART provides facilty to deliver wrapped product to the location mentioned.</p>
                    </div>
                </div>
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-cash-coin"></i>
                        <p>Coins Back on Sales</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART also provides surprising coins back on sales of products.</p>
                    </div>
                </div>
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-award-fill"></i>
                        <p>Merit Based Discount</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART provides some percent of special discount on products to the top coin holders.</p>
                    </div>
                </div>
            </div>
            <div class="servicesbox">
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-calendar-fill"></i>
                        <p>Allows Prebooking</p>
                    </div>
                    <div class="servicesd">
                        <p>If , in case a premium product is unavailable on UGMART, user can prebook it instantly.</p>
                    </div>
                </div>
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-dice-5-fill"></i>
                        <p>Lucky Draw for Buyers</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART also carries out monthly and annually the lucky draws for the users.</p>
                    </div>
                </div>
                <div class="servicesbox1">
                    <div class="servicesh">
                        <i class="bi bi-trophy-fill"></i>
                        <p>Special gift to Best Buyer</p>
                    </div>
                    <div class="servicesd">
                        <p>UGMART also conducts annual analysis and provides special gift to the one who spent highest
                            coins.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICES SECTION ENDS-->
    <!--SERVICES SECTION ENDS-->
    <!--CALL TO ACTION PART  STARTS-->
    <section class="calltoaction">
        <div class="containerforcta">
            <div class="ctah">Call To Action</div>
            <div class="ctad">For further details you may call our service section directly so that you can get to
                know about it in more detailed way.</div>
            <div class="ctad">Click the button provided below to call us now.</div>
            <a href="#" class="btn ctab">Call To Action</a>
        </div>
    </section>
    <!--CALL TO ACTION PART ENDS-->

    <!--HOW TO USE IT SECTION-->
    <section class="howtouseitsection" id="htui">
        </div>
        <div class="serviceholder container" id="accordian">
            <div class="statusparahead">
                <p class="smallstatusparahead">HOW TO USE</p>
                <p class="largestatusparahead">How to use The Ultimate Gamification</p>
            </div>
        </div>
        <div class="container">
            <div class="htuicont">
                <div class="htuibox card">
                    <div class="card-header">
                        <div class="imgcard">
                            <img src="images/htui/htui1.jpg" alt="">
                        </div>
                        <div class="imghead">
                            What Is It About ?
                        </div>
                        <div class="htuides">Get a quick idea about THE ULTIMATE GAMIFICATION and also What is It
                            About?</div>
                    </div>
                    <div class="htuibtn">
                        <a href="#htuiinfo1" class="htuibtn1 collapsed btn btn-secondary"
                            data-bs-toggle="collapse">Know About It</a>
                    </div>
                    <div id="htuiinfo1" class="collapse htuiinfo" data-bs-parent="#accordion">
                        <div class="card-body">
                            <marquee class="scrollingtextinabout" width="100%" direction="up" scrollamount="3"
                                height="200px">
                                <ul class="aboutwhatisitlist">
                                    <li class="aboutwhatisitlist1">The ultimate gamification is the web application
                                        that is created for the employees of the xyz company so that they can be
                                        encouraged to work more consistently and with more efforts.</li>
                                    <li class="aboutwhatisitlist1">It is the application that allows the employees to
                                        get the coins through the consistent attendance and also allows the employees
                                        and salesperson to get money through the ratings and reviews they specifically
                                        receive.</li>
                                    <li class="aboutwhatisitlist1">It is the web application that works upon
                                        implementing the new idea of appreciation of work through the rewards.</li>
                                    <li class="aboutwhatisitlist1">The employee receives the points through the
                                        attendance and the reviews. These coins can be used to buy products.</li>
                                    <li class="aboutwhatisitlist1">SO this web appplication is the one that is made
                                        with the purpose of creating enthusiasm among the employees about the work as
                                        the ultimately know that they are gopig o be appreciated materiallistically
                                        through the appreciation in the forms of coins they receive.</li>
                                    <li class="aboutwhatisitlist1">No employees will be unnoticed regarding their
                                        consistency. It is the web application that never fails to recognize your
                                        hard-work.</li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div class="htuibox card">
                    <div class="card-header">
                        <div class="imgcard">
                            <img src="images/htui/htui2.jpg" alt="">
                        </div>
                        <div class="imghead">
                            Who can participate ?
                        </div>
                        <div class="htuides">Get a quick idea about the eligibility for participation in Ultimate
                            Gamification?</div>
                    </div>
                    <div class="htuibtn">
                        <a href="#htuiinfo2" class="htuibtn1 collapsed btn btn-secondary"
                            data-bs-toggle="collapse">Know About It</a>
                    </div>
                    <div id="htuiinfo2" class="collapse htuiinfo" data-bs-parent="#accordion">
                        <div class="card-body">
                            <marquee class="scrollingtextinabout" width="100%" direction="up" scrollamount="3"
                                height="200px">
                                <ul class="aboutwhatisitlist">
                                    <li class="aboutwhatisitlist1">The ultimate gamification allows a person to get
                                        alot of things but not everyone can earn the coins and appreciation through THE
                                        ULTIMATE GAMIFICATION. It has constrants for the Participation</li>
                                    <li class="aboutwhatisitlist1">Interns cannot PARTICIPATE in THE ULTIMATE
                                        GAMIFICATION. They donot have the working time period such that they can get
                                        something significant through the web app , so at this point of time atleast
                                        this is not happening .</li>
                                    <li class="aboutwhatisitlist1">Employees of the company can participate in the
                                        ULTIMATE GAMIFICATION and buy whatever they want throuhgh the appreciation they
                                        receive. So it is important for a person or the usr to be employee of the xyz
                                        company</li>
                                    <li class="aboutwhatisitlist1">So what is the role of yours in the company also
                                        determines alot of things. A salesman earns alot of appreciation through the
                                        sales they make. So it is easy to say , selling more results in more
                                        appreciation.</li>
                                    <li class="aboutwhatisitlist1">Bringing together employees of xyz company and
                                        making them able to , compete with each other so that it will result in healthy
                                        competition and also the appreciation they get through the actions.</li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div class="htuibox card">
                    <div class="card-header">
                        <div class="imgcard">
                            <img src="images/htui/htui3.jpg" alt="">
                        </div>
                        <div class="imghead">
                            Can anyone be Best at it ?
                        </div>
                        <div class="htuides">An algorithm ,steps or even advices followed for Ultimate Gamification can
                            help to be the best.</div>
                    </div>
                    <div class="htuibtn">
                        <a href="#htuiinfo3" class="htuibtn1 collapsed btn btn-secondary"
                            data-bs-toggle="collapse">Know About It</a>
                    </div>
                    <div id="htuiinfo3" class="collapse htuiinfo" data-bs-parent="#accordion">
                        <div class="card-body">
                            <marquee class="scrollingtextinabout" width="100%" direction="up" scrollamount="3"
                                height="200px">
                                <ul class="aboutwhatisitlist">
                                    <li class="aboutwhatisitlist1">
                                        Using the ultimate gamification website is not that big deal, it is one opf the
                                        most important features of the ULTIMATE GAMIFICATION. The user interface web
                                        application provides is as beautiful as anything else. The hardwork put in
                                        making the usr interface is just to make it easy for the employees and users of
                                        the organisation.
                                    </li>
                                    <li class="aboutwhatisitlist1">If you are new on this application then all you have
                                        to do is CREATE ACCOUNT . CREATE ACCOUNT takes the input from the user/ employee
                                        and then after the verification it is easy for the user to use the application.
                                    </li>
                                    <li class="aboutwhatisitlist1">Then after the account is created , then you have to
                                        log in and the log in page will take you to entirely different world, it will
                                        allow you to do anything and everything yopu want.</li>
                                    <li class="aboutwhatisitlist1">In login page , after that we are able to know as an
                                        employee how much appreciation have we received , the more we receive
                                        apreciationn , coins will represent that. The right to alter the attendence is
                                        upto admin only. Noone else has the right to do so.</li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
            <div class="htuicont">
                <div class="htuibox card">
                    <div class="card-header">
                        <div class="imgcard">
                            <img src="images/htui/htui4.jpg" alt="">
                        </div>
                        <div class="imghead">
                            How to use it ?
                        </div>
                        <div class="htuides">Get a quick idea about using it and how to use this web application.</div>
                    </div>
                    <div class="htuibtn">
                        <a href="#htuiinfo4" class="htuibtn1 collapsed btn btn-secondary"
                            data-bs-toggle="collapse">Know About It</a>
                    </div>
                    <div id="htuiinfo4" class="collapse htuiinfo" data-bs-parent="#accordion">
                        <div class="card-body">
                            <marquee class="scrollingtextinabout" width="100%" direction="up" scrollamount="3"
                                height="200px">
                                <ul class="aboutwhatisitlist">
                                    <li class="aboutwhatisitlist1">There is only one champion , and noone can replace
                                        him/her, but hardwork is the factor that can make impossible possible and it
                                        also allows us from being the user in THE ULTIMATE GAMIFICATION to the King of
                                        the ULTIMATE GAMIFICATION</li>
                                    <li class="aboutwhatisitlist1">Be Consistent->First and foremost thing is that it
                                        is important for person to be consistent atfirst in case of attendence. As , if
                                        the attendence of the person is not great, it is impossible for a user to be the
                                        best one and be the king.</li>
                                    <li class="aboutwhatisitlist1">Be patient -> One has to be patient to be the king ,
                                        if you have received the appreciation , then rather than quickly withdrawing it
                                        , you can wait for the long term better outcome. Be patient, collect
                                        appreciation at high rates by being consistent.</li>
                                    <li class="aboutwhatisitlist1">Be more productive-> If you utilse the complete
                                        productivity of yours then it will be best way for you to be in the competition
                                        of being the king. Be the one who is consistentat his/her work.</li>
                                    <li class="aboutwhatisitlist1">Donot Quit Job -> King is never a quitter , but one
                                        who never gives up. A quitter cannot be the one who can conquer the ULTIMATE
                                        GAMIFICATION. So continue to be in the xyz company as it has the web application
                                        as THE ULTIMATE GAMIFICATION</li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div class="htuibox card">
                    <div class="card-header">
                        <div class="imgcard">
                            <img src="images/htui/htui5.jpg" alt="">
                        </div>
                        <div class="imghead">
                            What can you get ?
                        </div>
                        <div class="htuides">Get a quick idea about the things you can buy using UG.</div>
                    </div>
                    <div class="htuibtn">
                        <a href="#htuiinfo5" class="htuibtn1 collapsed btn btn-secondary"
                            data-bs-toggle="collapse">Know About It</a>
                    </div>
                    <div id="htuiinfo5" class="collapse htuiinfo" data-bs-parent="#accordion">
                        <div class="card-body">
                            <marquee class="scrollingtextinabout" width="100%" direction="up" scrollamount="3"
                                height="200px">
                                <ul class="aboutwhatisitlist">
                                    <li class="aboutwhatisitlist1">The ULTIMATE GAMIFICATION is not just the simle web
                                        application but the application funded by the xyz company for the purpose of
                                        creating enthusiasm among the employees of the xyz company.</li>
                                    <li class="aboutwhatisitlist1">The rewards that are available in it are among
                                        different categories as : Wardrobe products , Hight tech gadgets , Stylish
                                        products etc in varying prices.</li>
                                    <li class="aboutwhatisitlist1">Wardrobe Products-> They vary in prices and products
                                        as Shirts , Tshirts , Sarees , Pants , Jeans , Jackets etc are available to be
                                        bought. The shits and tshirts are available in varying choices, jeans are
                                        available in varying varieties too , sarees have limited choices still great ,
                                        jackets are not so varing in the stock but still to be loved.</li>
                                    <li class="aboutwhatisitlist1">Hight Tech Gadgets-> The high tech gadgets are the
                                        most fascinating products to be bought , as an IT company , it becomes necessary
                                        for the reward to be in the form of utilitiy for the user that can be used in
                                        the comany too for work. Wireless Earphones , Wired earphones , Digital watches
                                        , Bluetoth speakers etc are available products in the stock for reward.</li>
                                    <li class="aboutwhatisitlist1">Stylish products-> The trend matters among the mass,
                                        so it becomes important to keep hype for work up by using theproducts trending
                                        in the styling. The products being referred as stylish products are Styish
                                        Key-Chains , Lockets , Bracelets , Goggles , Rings etc. These are the products
                                        that are based on the trend in the various fields.</li>
                                    <li class="aboutwhatisitlist1">The reward are varying in prices , they can be big,
                                        small depending on your choices. Categorically speaking , there are varying
                                        choices available for the users. these products are not considered as the
                                        products but the appreciation to the employee for their consistency and
                                        hardwork.</li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--TEAM STARTS-->
    <section class="team" id="team">
        <div class="statusparahead">
            <p class="smallstatusparahead">TEAM</p>
            <p class="largestatusparahead">Have A Look at our Team</p>
        </div>
        <div class=" m-5 container111">
            <div class="container1">
                <img src="images/team/team-1.jpg" class="imgt1" alt="team">
                <div class="overlay">
                    <div class="text">Yash Mahajan <br>(CEO)</div>
                </div>
            </div>
            <div class="container1">
                <img src="images/team/team-2.jpg" class="imgt1" alt="team">
                <div class="overlay">
                    <div class="text">Dhanshri<br>(CTO)</div>
                </div>
            </div>
            <div class="container1">
                <img src="images/team/team-3.jpg" class="imgt1" alt="team">
                <div class="overlay">
                    <div class="text">Rahul Wagh <br>(CIO)</div>
                </div>
            </div>
            <div class="container1">
                <img src="images/team/team-4.jpg" class="imgt1" alt="team">
                <div class="overlay">
                    <div class="text">Prasad Yewale <br>(COO)</div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM ENDS-->


    <!--TESTIMONIALS START-->



    <!--FAQS START-->
    <section class="faq" id="faq">
        <div class="container">
            <div class="statusparahead">
                <p class="smallstatusparahead">FAQs</p>
                <p class="largestatusparahead">Frequently Asked Questions</p>
            </div>
        </div>
        <div class="container">
            <div class="faq1">
                <div class="faq11">
                    <div class="faqh">
                        <i class="bi bi-question-circle qi"></i> Can anyone Buy the products from the UGMART
                        irresepctive of company's purchase in Gamification?
                    </div>
                    <div class="faqd">
                        No , company shall buy an annual plan for the gamification so than their employees can be part
                        of UG mission.
                    </div>
                </div>
                <div class="faq11">
                    <div class="faqh">
                        <i class="bi bi-question-circle qi"></i> Can I get any product I want by paying cash for it?
                    </div>
                    <div class="faqd">
                        No , it only accepts transactions in the form of coins earned.
                    </div>
                </div>
                <div class="faq11">
                    <div class="faqh">
                        <i class="bi qi bi-question-circle"></i> Is UG safe?
                    </div>
                    <div class="faqd">
                        Yes , it is completely safe web application for employees. No personal data is required which
                        can be misued in any way.
                    </div>
                </div>
                <div class="faq11">
                    <div class="faqh">
                        <i class="bi qi bi-question-circle"></i> Is any other transaction possible in case of UG?
                    </div>
                    <div class="faqd">
                        No , not even google pay , phone pay , bharat pay , Ru pay , paytm , no application is allowed
                        currently
                        to carry out transactions.
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--FAQS ENDS-->

    <!--CONTACT US STARTS-->
    <section class="contactus" id="contactus">
        <div class="cu">
            <div class="cu11">
                <h2>Ultimate Gamification</h2>
                <p>Thank You For Visiting The Ultimate Gamification website.</p>
                <p>We hope you enjoyed the website and understood our vision and mission.</p>
                <p>You can contact us in the following way.</p>
                <p><i class="bi bi-whatsapp ii"></i> <i class="bi ii bi-instagram"></i> <i
                        class="bi ii bi-facebook"></i> <i class="bi ii bi-twitter"> </i><i
                        class="bi bi-telegram ii"></i></p>
            </div>
            <div class="cu12">
                <p>USEFUL LINKS</p>
                <p><i class="bi iii bi-chevron-right"></i><a href="#homesection">Home</a></p>
                <p><i class="bi iii bi-chevron-right"></i><a href="#aboutsection"> About</a> </p>
                <p><i class="bi iii bi-chevron-right"></i><a href="#servicessection">Services</a></p>
                <p><i class="bi iii bi-chevron-right"></i><a href="#htui">How To Use?</a></p>
            </div>
            <div class="cu13">
                <p>SERVICES</p>
                <p><i class="bi iii bi-chevron-right"></i> Online Shopping</p>
                <p><i class="bi iii bi-chevron-right"></i> Employee Engagement Program</p>
                <p><i class="bi iii bi-chevron-right"></i> Gamification</p>
                <p><i class="bi iii bi-chevron-right"></i> Graphic Design</p>
            </div>
            <div class="cu13">
                <p>OTHER APPLICATIONS TO VISIT</p>
                <p><i class="bi iii bi-chevron-right"></i> UGMART</p>
                <p><i class="bi iii bi-chevron-right"></i> FoodieZone</p>
                <p><i class="bi iii bi-chevron-right"></i> P Dental Care</p>
                <p><i class="bi iii bi-chevron-right"></i> Rpay</p>
            </div>

        </div>
    </section>
    <!--CONTACT US ENDS-->
</body>

</html>
