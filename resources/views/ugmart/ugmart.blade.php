<!DOCTYPE html>
<html lang="en">

<head>
    <title>UG Mart</title>
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
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: white;
        }


        /*NAVBAR START*/

        /*NAVBAR COLOR START*/
        .navbar11 {
            margin: 2px 15px;
            font-size: 1.1em;
            background: rgba(0, 0, 0, 0.8);
        }

        /*NAVBAR COLOR END*/


        /*NAVBAR LOGO START*/
        .imageinnavbar {
            height: 50px;
            margin-right: 60px;
        }

        /*NAVBAR LOGO END*/


        /*NAVBAR LINKS START*/
        .linksinnavbar {
            margin: 2px 15px;
        }

        /*NAVBAR LINKS END*/

        /*NAVBARS DROPDOWN STARTS*/
        .ddinnavbar1 {
            color: white;
            background-color: black;
        }

        /*NAVBARS DROPDOWN ENDS*/


        /*NAVBAR ICONS START*/

        /*ICONS     ***********************START*/
        .whatsappiconinnavbar {
            color: green;
            padding: 10px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
        }

        .telnoinnavbar {
            font-family: 'Times New Roman', Times, serif;
            color: aliceblue;
        }

        .teliconinnavbar {
            margin-right: 8px;
        }

        .emailiconinnavbar {
            color: mediumturquoise;
        }

        /*ICONS     -----------------------END*/

        /*NAVBAR ICONS END*/


        /*NAVBAR END*/


        /*CAROUSEL START*/


        /*CAROUSEL SECTION TAG START*/
        .carousel1 {
            background-color: black;
        }

        /*CAROUSEL SECTION TAG END*/


        /*HEADING FOR CAROUSEL    ********************START*/
        .headingincarousel1 {
            color: white;
            text-shadow: 1px 1px rgb(2, 2, 3);
            transition: all;
            transition-duration: 2s;
        }

        /*HEADING FOR CAROUSEL    --------------------END*/
        /*HEADING HOVER OF CAROUSEL START*/
        .headingincarousel1:hover {
            transform: scale(1.3);
        }

        /*HEADING HOVER OF CAROUSEL END*/


        /*IMAGES OF CAROUSEL      *********************START*/
        .imageincarousel1 {
            height: calc(100vh);
            opacity: 0.4;
        }

        /*IMAGES OF CAROUSEL      ---------------------END*/


        /*IMAGE BOX FOR CAROUSEL       ************START*/
        .imgboxcar1 {
            border: 3px solid grey;
            height: 250px;
            width: 250px;
            box-shadow: 0 0 40px black;
            transition: all;
            transition-duration: 3s;
            border-radius: 50%;

        }

        .imgboxcar1:hover {
            transform: rotate(359deg);
            box-shadow: 0 0 10px black;
        }

        .imgcardes11 {
            height: 70px;
            margin-top: 80px;
        }

        /*IMAGE BOX FOR CAROUSEL        -----------END*/


        /*DESCRIPTION FOR CAROUSEL       ************START*/
        .descriptionincarousel1 {
            font-size: 1.6em;
            transition: all;
            transition-duration: 2s;
            text-shadow: 1px 1px black;
        }

        /*DESCRIPTION FOR CAROUSEL        -----------END*/
        /*DESCRIPTION FOR CAROUSEL HOVER      ************START*/
        .descriptionincarousel1:hover {
            transform: scale(1.3);
        }

        /*DESCRIPTION FOR CAROUSEL  HOVER     -----------END*/


        /*LONGER DESCRIPTION IN CAROUSEL 1      START*/
        .longerdescriptionincarousel1 {
            font-size: 1.18em;
            text-shadow: 1px 1px black;
        }

        /*LONGER DESCRIPTION IN CAROUSEL 1      END*/

        /*CAROUSEL END*/


        /*ABOUT SECTION STARTS*/
        /*ABOUT SECTION CLASS STARTS*/
        .aboutsection {
            background: linear-gradient(rgba(19, 18, 18, 0.2), rgba(6, 6, 6, 0.2)), url(images/lav.jpg);
            background-position: cover;
            background-attachment: fixed;
            padding-top: 50px;
        }

        /*ABOUT SECTION CLASS ENDS*/
        .containerwithwhitebgforabout {
            background-color: white;
            padding: 20px;
        }

        /*About Us Heading STARTS*/
        .containerforabout1 {
            font-size: 2.5em;
            font-weight: 700;
            color: white;
            text-shadow: 1px 1px black;
            margin-bottom: 50px;
            background: transparent;
        }

        /*About Us Heading ENDS*/

        /*ABOUT US PARA OF HEADING STARTS*/
        .containerforaboutp2 {
            color: white;
            text-overflow: 1px 1px black;
            font-size: 0.6em;
            font-weight: 100;
        }

        /*ABOUT US PARA OF HEADING ENDS*/

        /*About us Upper Part after STARTS*/
        .hrrule {
            width: 16%;
            border-top: 5px solid rgb(19, 3, 239);
            margin-bottom: 5px;
        }

        /*About us Upper Part ENDS*/

        /*HISTORY OF COMPANY STARTS*/
        .containerforabout2 {
            display: flex;
            flex-direction: row;
            box-shadow: 0 0 5px #5f5950;
            padding: 20px;
            background-color: #fffaf3;
            margin: 100px 0px;
        }

        /*IMAGECONTAINER FOR HISTORY OF COMAPNY STARTS*/
        .container2foraboutsectionimage {
            width: 150%;
        }

        /*IMAGECONTAINER FOR HISTORY OF COMAPNY ENDS*/
        /*IMAGE1 IN ABOUT STARTS*/
        .image1inabout {
            width: 100%;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        /*IMAGE1 IN ABOUT ENDS*/


        /*DESCRIPTION OF HISTORY BOX STARTS*/
        .container2foraboutsectiondescription {
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 1.3em;
        }

        /*DESCRIPTION OF HISTORY BOX ENDS*/
        /*HISTORY HEADING STARTS*/
        #headinghistory {
            color: #5f5950;
            text-shadow: 1px 1px black;
            font-weight: 700;
            text-align: center;
        }

        #headinghistory:hover {
            color: orange;
        }

        /*HISTORY HEADING ENDS*/

        /*PARAGRAPH IN HISTORY STARTS*/
        .container2foraboutsectiondescription1 {
            padding: 20px;
            text-align: justify;
            color: rgba(0, 0, 0, 0.9);
        }

        /*PARAGRAPH IN HISTORY ENDS*/
        /*LIST OF PRODUCTS STARTS*/
        .aboutlist1 {
            list-style-type: none;
        }

        .aboutlist1 li {
            font-weight: 700;
            font-style: italic;
            color: black;
        }

        .aboutlist1 li:hover {
            color: orange;
        }

        /*LIST OF PRODUCTS ENDS*/

        /*CART ICON IN ABOUT LIST*/
        .carticon1 {
            margin-right: 20px;
            color: brown;
            text-shadow: none;
        }

        /*HISTORY OF COMPANY ENDS*/

        /*VISION AND MISSION STARTS*/

        /*VISION AND MISSON ACCORDIAN CARD-HEADER STARTS*/
        .accordianheadforvisionandmission {
            background-color: rgba(31, 31, 30, 0.5);
        }

        /*VISION AND MISSION ACCORDIAN CARD-HEADER ENDS*/

        /*VISION AND MISSION HEADERS OF ACCORDIAN STARTS*/
        .accordianvisionandmission {
            color: black;
            font-style: italic;
            font-weight: 700;
        }

        /*VISION AND MISSION HEADERS OF ACCORDIAN ENDS*/

        /*VISION AND MISSION BINOCULAR ICON STARTS*/
        .binoicon1 {
            color: brown;
            margin-right: 10px;
        }

        /*VISION AND MISSION BINOCULAR ICON ENDS*/

        /*VISION AND MISSION LIST STARTS*/
        .visionandmissionlist {
            color: #5f5950;
            list-style-type: none;
        }

        .visionandmissionlist:hover {
            color: orange;
        }

        /*VISION AND MISSION LIST ENDS*/

        /*VISION AND MISSION ENDS*/


        /*BOXES STATUS IN ABOUT SECTION START*/

        /*STATUS SECTION STARTS*/
        .statussection {
            background: linear-gradient(rgba(7, 7, 7, 0.548), rgba(10, 9, 9, 0.54)), url('images/earthinhand.jpg');
            background-position: center;
            background-attachment: fixed;
        }

        /*STATUS SECTION ENDS*/


        /*STATUS CONTAINER STARTS*/
        .statussectionholder {
            background-color: #ffffff;

        }

        .statussectioncont {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
            padding: 0px 40px 100px 40px;
        }

        .statusescont {
            padding: 40px;
            box-shadow: 0 0 5px #5f5950;
            width: 20%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            flex-wrap: wrap;
            text-align: center;
            background-color: #fffaf3;
            transition: all;
            transition-duration: 2s;
        }

        .statusescont:hover {
            transform: translate(0px, -10px);
            background-color: #5f5950;
        }

        .iconsforstatus {
            justify-content: center;
            color: lightsalmon;
            font-size: 3.1em;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .iconsforstatus:hover {
            color: #fffaf3;
        }

        .headforstatus {
            color: lightsalmon;
            font-size: 1em;
            font-weight: 700;
            margin-left: 15px;
        }

        .headforstatus:hover {
            color: #fffaf3;
        }

        .descriptionstatus {
            color: black;
            font-size: 1.3em;
        }

        .descriptionstatus:hover {
            color: #fffaf3;
        }

        .excitingofferbox {
            background-color: transparent;
        }

        .headexcitingoffers {
            display: flex;
            flex-direction: row;
            justify-content: center;
            text-align: center;
            padding: 100px 50px 100px 50px;
        }

        .getexcitingoffersheading {
            font-size: 1.5em;
            color: white;
        }

        /*STATUS CONTAINER ENDS*/

        /*IMAGE LOGOS START*/
        .imglogoexc {
            width: 70%;
            transition: all;
            transition-duration: 2s;
        }

        .imglogoexc:hover {
            transform: scale(1.7);
        }

        /*IMAGE LOGOS ENDS*/

        /*WHY TO CHOOSE SECTION STARTS*/
        .whytochoosehead {
            margin-top: 60px;
            justify-content: center;
            text-align: center;
            font-size: 1.8em;
            color: #5f5950;
            text-shadow: 1px 1px black;
            font-weight: 700;
            transition: all;
            transition-duration: 0.5s;
            margin-bottom: 70px;
        }

        .whytochoosehead:hover {
            color: darksalmon;
        }

        .whytochooseus {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .cardforwhytochooseus {
            display: flex;
            flex-direction: column;
            width: 30%;
            flex-wrap: wrap;
            justify-content: center;
            box-shadow: 0 0 5PX #5f5950;
            padding: 20px;
            background-color: #fffaf3;
            border-radius: 10px;
            transition: all;
            transition-duration: 2s;
        }

        .cardforwhytochooseus:hover {
            background-color: #5f5950;
            transform: translate(0px, -10px);
        }

        .titleforwhytochooseus {
            font-size: 1.6em;
            text-align: center;
            margin-bottom: 20px;
            color: lightsalmon;
            text-shadow: 1px 1px rgb(237, 164, 7);
            font-weight: 700;

        }

        .dataforwhytochooseus {
            text-align: justify;
            color: black;
            font-size: 1.3em;
        }

        .dataforwhytochoosep {
            margin: 10px 10px 40px 10px;
        }

        .wtcd:hover {
            color: #fffaf3;
        }

        /*COLLAPSE IN WHY TO CHOOSE STARTS*/
        #whyreadmore1 {
            font-size: 1.3em;
            box-shadow: 0 0 2px #5f5950;
            text-shadow: 0px 1px black;
            border-radius: 10px;
        }

        #whyreadmore2 {
            font-size: 1.3em;
            box-shadow: 0 0 2px #5f5950;
            text-shadow: 0px 1px black;
            border-radius: 10px;
        }

        #whyreadmore3 {
            font-size: 1.3em;
            box-shadow: 0 0 2px #5f5950;
            text-shadow: 0px 1px black;
            border-radius: 10px;
        }

        #whyreadmore11 {
            color: #fffaf3;
        }

        #whyreadmore22 {
            color: #fffaf3;
        }

        #whyreadmore3 {
            font-size: 1.3em;
            box-shadow: 0 0 2px #5f5950;
            text-shadow: 0px 1px black;
            border-radius: 10px;
        }

        #whyreadmore33 {
            color: #fffaf3;
        }

        /*WHY TO CHOOSE SECTION ENDS*/

        /*BOXES STATUS IN ABOUT SECTION END*/


        /*ABOUT SECTION ENDS*/

        /*SERVICES SECTION STARTS*/
        /*SERVICES SECTION START*/
        .servicessection {
            margin-top: 140px;
            background: linear-gradient(rgba(0, 0, 0, 0.648), rgba(0, 0, 0, 0.648)), url('images/person.jpg');
            background-position: center;
            background-attachment: fixed;
            padding-top: 40px;
        }

        #hrrule2 {
            border-color: white;
        }

        /*SERVICES SECTION ENDS*/
        /*SERVICE SECTION HOLDER STARTS*/
        .serviceholder {
            background-color: white;
            font-size: 1.2em;
            color: rgb(244, 239, 239);
            text-align: center;
            padding-top: 50px;
        }

        /*SERVICE SECTION HOLDER ENDS*/
        /*SERVICES BOX 1 STARTS*/
        .servicesbox {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .servicesbox1 {
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 25%;
            margin: 10px;
            transition-duration: 1s;
            padding: 20px;
            transform: scale(0.8);
            box-shadow: 0 0 40px rgb(209, 205, 205);
        }

        /*SERVICES BOX 1 ENDS*/
        /*SERVICES BOX HOVER STARTS*/
        .servicesbox1:hover {
            transform: scale(0.9);
            background-color: rgba(251, 249, 249, 0.8);
            box-shadow: none;
        }

        /*SERVICES BOX HOVER ENDS*/

        /*SERVICES EMOJI AND HEADING STARTS*/
        .servicesh i {
            font-size: 4em;
            color: black;
            padding: 10px;
            background-color: lightsalmon;
        }

        .servicesh p {
            font-size: 1.5em;
            color: black;
            font-weight: 700;
        }

        .servicesd {
            color: #5f5950;
            font-size: 1.1em;
        }

        /*SERVICES EMOJI AND HEADING ENDS*/

        /*SERVICES HEAD STARTS*/

        /*SERVICES HEAD ENDS*/
        /*SERVICES SECTION ENDS*/

        /*CALL TO ACTION STARTS*/
        .calltoaction {
            background: linear-gradient(rgba(0, 0, 0, 0.571), rgba(0, 0, 0, 0.56)), url('images/coolpc.jpg');
            background-attachment: fixed;
        }

        /*CONTAINER FOR CTA STARTS*/
        .containerforcta {
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 90px 100px;
            margin: 100px 100px 0px 100px;
        }

        /*CONTAINER FOR CTA ENDS*/
        /*CTAH STARTS*/
        .ctah {
            color: white;
            font-size: 2em;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 700;
            text-shadow: 2px 2px black;
            margin-bottom: 20px;
        }

        /*CTAH ENDS*/
        /*CTAD STARTS*/
        .ctad {
            color: white;
            font-size: 1.3em;
        }

        /*CTAD ENDS*/
        /*CTAB STARTS*/
        .ctab {
            color: white;
            padding: 10px 30px;
            margin-top: 30px;
            border: 2px solid white;
            width: 260px;
            align-self: center;
            font-size: 1.3em;
        }

        .ctab:hover {
            background-color: rgb(5, 151, 151);
            color: white;
        }

        /*CTAB ENDS*/
        /*CALL TO ACTION ENDS*/


        /*MEDIA QUERY*/
        @media only screen and (max-width:800px) {

            .statussectioncont {
                display: block;

            }

            .statusescont {
                padding: 10px;
                width: 100%;
                margin: 20px;
                box-shadow: 0 0 5px #5f5950;
                display: block;
            }

            .whytochooseus {
                flex-direction: column;
                margin: 10px;
                margin-top: 40px;
            }

            .cardforwhytochooseus {
                padding: 10px;
                width: 100%;
                margin: 10px;
            }

            .servicesbox {
                display: flex;
                flex-direction: column;
            }

            .servicesbox1 {
                width: 95%;
            }

            .marginafterservice {
                margin: 40px;
                height: 100px;
                background-color: white;
            }

            /*CONTAINER FOR CTA STARTS*/
            .containerforcta {
                padding: 10px 30px;
                margin: 10px;
            }

            /*CONTAINER FOR CTA ENDS*/

            /*WARDROBE SECTION*/
            .wardrobe {
                padding: 40px;
            }
        }

        /*WARDRObE CONTAINER*/
        .wardcont {
            padding: 80px 80px 20px 80px;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        /*SMALL HEADING FOR WARDROBE*/
        .wardh1 {
            font-size: 1.1em;
            font-weight: 700;
            color: #5f5950;
        }

        .wardh1::before {
            content: "";
            display: inline-block;
            width: 10%;
            position: relative;
            border-top: 4px solid lightcoral;
            top: -2px;
            left: -5px;
        }

        .wardh1::after {
            content: "";
            display: inline-block;
            width: 10%;
            position: relative;
            border-top: 4px solid lightcoral;
            top: -2px;
            left: 5px;
        }

        /*SMALLER HEADING FOR WARDROBE ENDS*/

        /*LARGER HEADING FOR WARDROBE*/
        .wardh2 {
            font-size: 1.7em;
            font-weight: 500;
        }

        /*WARDROBE CONTAINER 1 */
        .wardcont1 {
            justify-content: space-evenly;
        }

        /*WARDROBE BOX*/
        .wardbox {
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            margin: 10px;
            width: 23.44%;
            box-shadow: 0 0 50px rgb(243, 241, 241);
            padding: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        /*IMAGE CONATINER IN WARDBOX*/
        .wardimgcont {
            padding: 10px;
            width: 100%;
            height: 300px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /*IMAGE TAG IN CONTAINER OF WARDBOX*/
        .wardimgcont img {
            width: 100%;
            height: 100%;
            transition: all;
            transition-duration: 2s;
        }

        .wardimgcont img:hover {
            transform: scale(1.5);
        }

        /*NAME OF THE PRODUCT STARTS*/
        .wardnameofproduct {
            padding: 10px;
            text-align: left;
            font-weight: 500;
        }

        /*RATINGS IN WARDROBE*/
        .wardrating {
            text-align: left;
            padding-left: 10px;
            color: #ffa41c;
            text-shadow: 1px 1px orange;
        }

        .wardrating span {
            padding-left: 10px;
            color: rgb(39, 4, 120);
            text-shadow: none;
            font-weight: 700;
        }

        .wardprice {
            padding: 20px 5px 5px 5px;
            color: saddlebrown;
        }
    </style>
</head>

<body>
    <!--NAVBAR STARTS-->
    <section>
        <nav class="navbar navbar-expand-sm navbar-expand-md navbar11 fixed-top navbar-dark">
            <div class="container-fluid">
                <img src="images/wh1.png" class="navbar-brand imageinnavbar">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle linksinnavbar" href="#" role="button"
                                data-bs-toggle="dropdown">PRODUCTS</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item ddinnavbar1" href="#wardrobe">WARDROBE</a>
                                </li>
                                <li>
                                    <a class="dropdown-item ddinnavbar1" href="#high-tech">TECH GADGETS</a>
                                </li>
                                <li>
                                    <a class="dropdown-item ddinnavbar1" href="#trending">TRENDING PRODUCTS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="#">LOG IN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linksinnavbar" href="{{ url('/ugmart/ugmartproducts') }}">VISIT UG
                                MART</a>
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
                        <img src="images/os1.jpeg" class="d-block w-100 imageincarousel1" alt="...">
                        <div class="carousel-caption cardes11">
                            <center>
                                <div class="headingforcar11">
                                    <center>
                                        <h2 class="headingincarousel1" id="homesection">WELCOME TO</h2>
                                    </center>
                                    <div class="imgboxcar1">
                                        <img src="images/wh.png" class="imgcardes11" alt="">
                                    </div>
                                </div>
                                <p class="descriptionincarousel1">Don't Be Shy , Let's Buy</p>
                                <p class="descriptionincarousel1">Grab Oppotunities</p>
                                <p class="longerdescriptionincarousel1">UGMART allows you to utilise your Earned points
                                    in UG Application. That is Ultimate Gamification Application. It allows you to buy
                                    exciting products and even win a surprising coin back on products</p>
                            </center>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/os2.jpeg" class="d-block w-100 imageincarousel1" alt="...">
                        <div class="carousel-caption cardes11">
                            <center>
                                <div class="headingforcar11">
                                    <center>
                                        <h2 class="headingincarousel1">WELCOME TO</h2>
                                    </center>
                                    <div class="imgboxcar1">
                                        <img src="images/wh.png" class="imgcardes11" alt="">
                                    </div>
                                </div>
                                <p class="descriptionincarousel1">Take a Glance , Never miss a chance</p>
                                <p class="descriptionincarousel1">The UG Shopping Web App</p>
                                <p class="longerdescriptionincarousel1">UGMART allows you to utilise your Earned points
                                    in UG Application. That is Ultimate Gamification Application. It allows you to buy
                                    exciting products and even win a surprising coin back on products</p>
                            </center>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/os3.jpg" class="d-block w-100 imageincarousel1" alt="...">
                        <div class="carousel-caption cardes11">
                            <center>
                                <div class="headingforcar11">
                                    <center>
                                        <h2 class="headingincarousel1">WELCOME TO</h2>
                                    </center>
                                    <div class="imgboxcar1">
                                        <img src="images/wh.png" class="imgcardes11" alt="">
                                    </div>
                                </div>
                                <p class="descriptionincarousel1">Grab Best Offers , Shirt , Pant and Loafers</p>
                                <p class="descriptionincarousel1">Utilise Gamified Wealth</p>
                                <p class="longerdescriptionincarousel1">UGMART allows you to utilise your Earned points
                                    in UG Application. That is Ultimate Gamification Application. It allows you to buy
                                    exciting products and even win a surprising coin back on products</p>
                            </center>
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
    <section class=" aboutsection" id="aboutsection">
        <div class="container">
            <!--ABOUT US HEADING START-->
            <div class="containerforabout1">
                <hr class="hrrule">
                <p class="containerforabout1p">ABOUT US</p>
                <p class="containerforaboutp2">This section will let you know about the history of the UGMART , Vision
                    and mission that UGMART possesses and also the current status regarding employees and working hours
                    etc.</p>
            </div>
        </div>
        <!--ABOUT US HEADING END-->
        <div class="containerwithwhitebgforabout">
            <!--HISTORY START-->
            <div class="container-fluid">
                <div class="containerforabout2">
                    <div class="container2foraboutsectionimage">
                        <img src="images/about/about1.jpg" class="image1inabout " alt="">
                    </div>
                    <div class="container2foraboutsectiondescription">
                        <h3 id="headinghistory">HISTORY</h3>
                        <div class="container2foraboutsectiondescription1">
                            <p>The UGMART was a project that was started in 2022 , for the purpose of enabling shopping
                                through the E-coins that are earned through the gamification in MNC's and organisations.
                                It was made by a single web developer initially but has beem modified by multiple people
                                as per bugs that were detected in it.</p>
                            <p>The variety of products that are availabe in the UGMART currently are:</p>
                            <ul class="aboutlist1">
                                <li>
                                    <i class="bi bi-cart2 carticon1"></i>
                                    Wardrobe Related Products
                                </li>
                                <li>
                                    <i class="bi bi-cart2 carticon1"></i>
                                    Trending Fashion Products
                                </li>
                                <li>
                                    <i class="bi bi-cart2 carticon1"></i>
                                    High-Tech Gadgets
                                </li>
                            </ul>
                            <p>It currently has the Coins acceptance enabling through the Web Application of UG that is
                                Ultimate Gamification only.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--HISTORY END-->
            <!--VISION AND MISSION START-->
            <div class="container-fluid">
                <div class="containerforabout2">
                    <div class="container2foraboutsectionimage">
                        <img src="images/visionmission.jpg" class="image1inabout " alt="">
                    </div>
                    <div class="container2foraboutsectiondescription">
                        <h3 id="headinghistory">VISION AND MISSION</h3>
                        <div class="container2foraboutsectiondescription1">
                            <p>UGMART's team has visionary leaders that have core Visions and Missions. Missions are
                                backbone of the company. The vision that company has motivates the team to complete the
                                missions that they have. So the vision that the company holds and missions that company
                                has are as follows :</p>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header accordianheadforvisionandmission">
                                        <a class="btn accordianvisionandmission" data-bs-toggle="collapse"
                                            href="#collapseOne">
                                            <i class="bi bi-binoculars-fill binoicon1"></i>
                                            VISION
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Make gamification a day to day concept for all the employees.
                                                </li>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Create a motivating factor for all the employees all over the world
                                                    in corporate sector so that they work with more motivation rather
                                                    than stress.
                                                </li>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Make appreciation a must deserving thing in the form of products
                                                    through appreciation that is received in the form of coins.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header accordianheadforvisionandmission">
                                        <a class="collapsed btn accordianvisionandmission" data-bs-toggle="collapse"
                                            href="#collapseTwo">
                                            <i class="bi bi-binoculars-fill binoicon1"></i>
                                            SHORT TERM MISSION
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Undertake atleast 20 MNC's other than small scale organizations.
                                                </li>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Brign More than 10 varieties of products under UG MART
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header accordianheadforvisionandmission">
                                        <a class="collapsed btn accordianvisionandmission" data-bs-toggle="collapse"
                                            href="#collapseThree">
                                            <i class="bi bi-binoculars-fill binoicon1"></i>
                                            LONG TERM MISSION
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Undertake atleast thousands of MNC's and small scale organizations.
                                                </li>
                                                <li class="visionandmissionlist">
                                                    <i class="bi bi-binoculars binoicon1"></i>
                                                    Brign More than 100 varieties of products under UG MART
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--VISION AND MISSION END-->
    </section>
    <!--ABOUT SECTION ENDS-->
    <!--CURRENT STATUS STARTS-->
    <section class="statussection">
        <div class="statussectionholder">
            <div class="container-fluid statussectioncont">
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-people-fill"></i>
                        <p class="headforstatus">4</p>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Hard Workers</strong>
                        that provide active service to clients.
                    </div>
                </div>
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-emoji-smile-fill"></i>
                        <p class="headforstatus">22</p>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Happy Clients</strong>
                        that have experienced our service and appreciated it.
                    </div>
                </div>
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-card-checklist"></i>
                        <p class="headforstatus">5</p>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Projects</strong>
                        that were being undertaken before making UGMART.
                    </div>
                </div>
                <div class="statusescont col-sm-6">
                    <div class="iconsforstatus">
                        <i class="bi bi-headset"></i>
                        <p class="headforstatus">180</p>
                    </div>
                    <div class="descriptionstatus">
                        <strong>Active Hours</strong>
                        of service provided till now by UG MART.
                    </div>
                </div>
            </div>
        </div>
        <div class="excitingofferbox">
            <div class="headexcitingoffers">
                <div>
                    <img src="images/netflix.png" alt="" class="imglogoexc">
                </div>
                <div>
                    <img src="images/google.png" alt="" class="imglogoexc">
                </div>
                <div>
                    <img src="images/ytb.png" alt="" class="imglogoexc">
                </div>
                <div>
                    <img src="images/starbuks.png" alt="" class="imglogoexc">
                </div>
            </div>
        </div>
    </section>
    <!--CURRENT STATUS ENDS-->
    <!--WHY TO CHOOSE SECTION STARTS-->
    <section class="whytochoosesection">
        <div class="whytochoosehead">WHY TO CHOOSE US?</div>
        <div class="whytochooseus">
            <div class="cardforwhytochooseus ">
                <div class="titleforwhytochooseus wtcd">
                    1. QUALITY PRODUCTS
                </div>
                <div class="dataforwhytochooseus">
                    <p class="dataforwhytochoosep wtcd"> The durability of the products as well as products themselves
                        are great for use. They are testified and then only added in stock. So , issue with quality will
                        not be concern for any client of it. So it will provide you with the best products that one may
                        want to have. So , you will receive he best of the best of whatever you may want.</p>
                    <center>
                        <button data-bs-toggle="collapse" data-bs-target="#whyreadmore11" id="whyreadmore1">Know
                            More</button>
                    </center>
                    <div id="whyreadmore11" class="collapse">The durability of the products as well as products
                        themselves are great for use. They are testified and then only added in stock. So , issue with
                        quality will not be concern for any client of it.</div>
                </div>
            </div>
            <div class="cardforwhytochooseus ">
                <div class="titleforwhytochooseus wtcd">
                    2. REASONABLE PRICE
                </div>
                <div class="dataforwhytochooseus ">
                    <p class="dataforwhytochoosep wtcd"> The durability of the products as well as products themselves
                        are great for use. They are testified and then only added in stock. So , issue with quality will
                        not be concern for any client of it. So it will provide you with the best products that one may
                        want to have. So , you will receive he best of the best of whatever you may want.</p>
                    <center>
                        <button data-bs-toggle="collapse" data-bs-target="#whyreadmore22" id="whyreadmore2">Know
                            More</button>
                    </center>
                    <div id="whyreadmore22" class="collapse">The durability of the products as well as products
                        themselves are great for use. They are testified and then only added in stock. So , issue with
                        quality will not be concern for any client of it.</div>
                </div>
            </div>
            <div class="cardforwhytochooseus ">
                <div class="titleforwhytochooseus wtcd">
                    3. PRIORITIZED CUSTOMER SATISFACTION
                </div>
                <div class="dataforwhytochooseus">
                    <p class="dataforwhytochoosep wtcd"> The durability of the products as well as products themselves
                        are great for use. They are testified and then only added in stock. So , issue with quality will
                        not be concern for any client of it. So it will provide you with the best products that one may
                        want to have.</p>
                    <center>
                        <button data-bs-toggle="collapse" data-bs-target="#whyreadmore33" class=""
                            id="whyreadmore3">Know More</button>
                    </center>
                    <div id="whyreadmore33" class="collapse">The durability of the products as well as products
                        themselves are great for use. They are testified and then only added in stock. So , issue with
                        quality will not be concern for any client of it.</div>
                </div>
            </div>
        </div>
    </section>
    <!--WHY TO CHOOSE SECTION ENDS-->
    <!--SERVICES SECTION STARTS-->
    <section class="servicessection" id="servicessection">
        <div class="containerforabout1 container">
            <hr class="hrrule" id="hrrule2">
            <p class="containerforabout1p">SERVICES</p>
            <p class="containerforaboutp2">This section will let you know about the services that UGMART provides to
                the users that separates it from other online shopping applications.</p>
        </div>
        <div class="serviceholder">
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
    <!--FEATURED WARDROBE PRODUCTS-->
    <section class="wardrobe" id="wardrobe">
        <div class="wardcont container">
            <p class="wardh1">WARDROBE PRODUCTS</p>
            <p class="wardh2">Featured Wardrobe Products</p>
        </div>
        <div class="container wardcont1">
            <div class="row">
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/tshirts/tshirt1.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Trick or Treat cotton T-shirt black color Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <span>4.0</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/tshirts/tshirt2.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Ultimate Aptitude Full Sleeve T-shirt Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.6</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/tshirts/tshirt3.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Boy Bye Full Sleeve T-shirt Light textured Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <span>4.2</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/tshirts/tshirt4.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Hoodie for Men Cotton Dark Grey Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <span>4.8</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURED TECH PRODUCTS-->
    <section class="wardrobe" id="high-tech">
        <div class="wardcont container">
            <p class="wardh1">HIGH TECH PRODUCTS</p>
            <p class="wardh2">Featured High Tech Products</p>
        </div>
        <div class="container wardcont1">
            <div class="row">
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/headp/headp1.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Trick or Treat cotton T-shirt black color Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.0</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/headp/headp2.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Ultimate Aptitude Full Sleeve T-shirt Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.6</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/headp/headp3.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Boy Bye Full Sleeve T-shirt Light textured Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <span>4.2</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/smartwatch/sw1.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Hoodie for Men Cotton Dark Grey Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <span>4.8</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURED TRENDING PRODUCTS-->
    <section class="wardrobe" id="trending">
        <div class="wardcont container">
            <p class="wardh1">TRENDING PRODUCTS</p>
            <p class="wardh2">Featured Trending Products</p>
        </div>
        <div class="container wardcont1">
            <div class="row">
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/menshoe/menshoe3.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Trick or Treat cotton T-shirt black color Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.0</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/tshirts/tshirt5.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Ultimate Aptitude Full Sleeve T-shirt Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.6</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/headp/headp3.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Boy Bye Full Sleeve T-shirt Light textured Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <span>4.2</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
                <div class="wardbox col-md3">
                    <div class="wardimgcont">
                        <img src="images/products/womenshoe/womenshoe1.png" alt="">
                    </div>
                    <div class="wardnameofproduct">Hoodie for Men Cotton Dark Grey Pack of 1</div>
                    <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <span>4.8</span>
                    </div>
                    <div class="wardprice">
                        <i class="bi bi-gem"></i>
                        12
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
