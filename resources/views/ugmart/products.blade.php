<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--BOOTSTRAP ICON FILES START-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--BOOTSTRAP ICON FILES END-->
    <title>Products</title>
    <style>
        section {
            padding: 40px;
        }

        /*CAROUSEL STARTS*/
        .imgcar1 {
            width: 100%;
        }

        .imgcar11 {
            width: 100%;
        }

        /*CAROUSEL ENDS*/


        /*NAVBAR STARTS*/
        .navbar1 {
            padding: 20px;
            background-color: white;
        }

        .navlink1 {
            padding: 30px;
            color: black;
            font-weight: 700;
        }

        .wardcont1 {
            justify-content: space-evenly;
        }

        .navbarimg {
            height: 40px;
            padding-right: 20px;
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
            padding: 10px 5px 10px 5px;
            color: saddlebrown;
        }
    </style>
</head>

<body>
    <!--IMAGE INSTEAD OF CAROUSEL-->
    <div class="imgcar1">
        <img src="../images/products/banner/banner2.jpg" class="imgcar11" alt="">
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <ul class="nav nav-pills mb-3 justify-content-center navbar1 sticky-top" id="pills-tab" role="tablist">
        <li>
            <img src="../images/logos/bl1.png" class="navbarimg" alt="">
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Products</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-wardrobe-tab" data-bs-toggle="pill" data-bs-target="#pills-wardrobe"
                type="button" role="tab" aria-controls="pills-wardrobe" aria-selected="false">Wardrobe
                Products</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-high-tech-tab" data-bs-toggle="pill" data-bs-target="#pills-high-tech"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">High-Tech
                Gadgets</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending"
                type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending
                Products</button>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
            <!--FEATURED WARDROBE PRODUCTS-->
            <section class="wardrobe" id="allproducts">
                <div class="container wardcont1">
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <!--ROW 1   T-SHIRT-->
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="wardbox col-md3">
                                <div class="wardimgcont">
                                    <img src="
                                    {{ url($product->img) }}"
                                        alt="">
                                </div>
                                <div class="wardnameofproduct">{{ $product->name }}</div>
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
                                    {{ $product->points }}
                                </div>
                                <a href="{{ route('products.redeem', ['product' => $product->id]) }}"
                                    class="btn btn-secondary">Redeem</a>
                            </div>
                        @endforeach
                    </div>
                    <!--ROW 1 ENDS-->
                    <!--ROW 2   SHIRTS-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Bluish Green Cotton Shirt Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Black Shirt of Cotton - Denim pack of 1</div>
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
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Blue Chex Shirt Cotton Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Daily use Shirt for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span>3.0</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 2 ENDS-->
                    <!--ROW 3 MEN SHOE-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Blue Shoes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                330
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Stylish jeans Shoes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>4.1</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                360
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Sport Look Shoes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.2</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe7.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Spikes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                480
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 3 MEN SHOE ENDS-->
                    <!--ROW 4 WOMENSHOE-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">High Red Heels for Women Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.3</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                230
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Daily use Shoes for women pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Stylish Pink Heels for women Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                200
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Party Wear Heels for Women Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span>4.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 4 WOMENSHOE ENDS-->
                    <!--ROW 1   HEADPHONE-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Gaming Headphones Boat Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Gaming heapdhones Wide Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.3</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Miwi Headphones For Kids Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.6</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Professional headphones Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                470
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 1   HEADPHONE ENDS-->
                    <!--ROW 2   HEADPHONE AND SPEAKERS-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp5.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Professional headphones Wired</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>4.1</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Beats Wireless Speakers Pack of 1</div>
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
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Wireless Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                420
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Bose Wireless Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                360
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 2   HEADPHONES AND SPEAKERS END-->
                    <!--ROW 3 SPEAKER-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Speakers Pair Pack of 1</div>
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
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp5.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Fancy speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                420
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp6.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Wireless speakers pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span>3.2</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp7.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Party Speakers Pack of 1</div>
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
                                480
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 3 SPEAKERS END-->
                    <!--ROW 4 SPEAKERS-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp8.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Stylish Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp9.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Cylinder Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.3</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp10.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Xdream Speakers Pack of 1</div>
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
                                390
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp11.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Home Theatre Pack of 1</div>
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
                                600
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 4 SPEAKER ENDS-->
                    <!--ROW 1   TRENDING 1-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Trending Pendle of Love</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.7</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                260
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Golden Bracelet for Men pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                200
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Ancient textured Binocular Pack of 1</div>
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
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Greenish frame Goggle for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 1   TRENDING 1 ENDS-->

                    <!--ROW 2   TRENDING 2-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr5.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Urbanite Female Fragerent Perfume Pack of 1</div>
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
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr6.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Old fashioned style Goggle for men Pack of 1</div>
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
                                280
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr7.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Silver Coloured Titan Analogue Watch for men Pack of 1
                            </div>
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
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr8.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Leather Belt brown coloured for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>4.1</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                230
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 2   TRENDING 2 ENDS-->

                    <!--ROW 3 TREDNING 3-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr9.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Voronin Male Fragtrent Perfume Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                320
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr10.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Morpankh - That is the most known ornament of Lord Krishna
                            </div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                50
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr11.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Party Wear White coloured Mask for Men Pack of 1</div>
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
                                80
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr12.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Blue trouser For men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                290
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 3 TREDNING 3 ENDS-->
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-wardrobe" role="tabpanel" aria-labelledby="pills-wardrobe-tab">
            <section class="wardrobe" id="wardrobe">
                <div class="container wardcont1">
                    <!--ROW 1   T-SHIRT-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/tshirts/tshirt1.png" alt="">
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
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/tshirts/tshirt2.png" alt="">
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
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/tshirts/tshirt3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Boy Bye Full Sleeve T-shirt Light textured Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/tshirts/tshirt4.png" alt="">
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
                                <span>350</span>
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 1 ENDS-->
                    <!--ROW 2   SHIRTS-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Bluish Green Cotton Shirt Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Black Shirt of Cotton - Denim pack of 1</div>
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
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Blue Chex Shirt Cotton Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/shirts/shirt4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Daily use Shirt for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span>3.0</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 2 ENDS-->
                    <!--ROW 3 MEN SHOE-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Blue Shoes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                330
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Stylish jeans Shoes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>4.1</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                360
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Sport Look Shoes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.2</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/menshoe/menshoe7.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Spikes for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                480
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 3 MEN SHOE ENDS-->
                    <!--ROW 4 WOMENSHOE-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">High Red Heels for Women Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.3</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                230
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Daily use Shoes for women pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Stylish Pink Heels for women Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                200
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/womenshoe/womenshoe4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Party Wear Heels for Women Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span>4.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 4 WOMENSHOE ENDS-->
                </div>
        </div>
        <div class="tab-pane fade" id="pills-high-tech" role="tabpanel" aria-labelledby="pills-high-tech-tab">
            <section class="wardrobe" id="high-tech">
                <div class="container wardcont1">
                    <!--ROW 1   HEADPHONE-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Gaming Headphones Boat Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Gaming heapdhones Wide Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.3</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Miwi Headphones For Kids Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.6</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Professional headphones Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                470
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 2   HEADPHONE AND SPEAKERS-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/headp/headp5.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Professional headphones Wired</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>4.1</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Beats Wireless Speakers Pack of 1</div>
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
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Wireless Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                420
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Bose Wireless Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                360
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 3 SPEAKER-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Speakers Pair Pack of 1</div>
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
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp5.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Fancy speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.4</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                420
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp6.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Wireless speakers pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span>3.2</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp7.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Party Speakers Pack of 1</div>
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
                                480
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 4 SPEAKERS-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp8.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Stylish Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>4.9</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                400
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp9.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Cylinder Speakers Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.3</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                380
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp10.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Xdream Speakers Pack of 1</div>
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
                                390
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/speaker/sp11.png" alt="">
                            </div>
                            <div class="wardnameofproduct">JBL Home Theatre Pack of 1</div>
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
                                600
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
            <section class="wardrobe" id="trending">
                <div class="container wardcont1">
                    <!--ROW 1   TRENDING 1-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr1.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Trending Pendle of Love</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.7</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                260
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr2.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Golden Bracelet for Men pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>3.8</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                200
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr3.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Ancient textured Binocular Pack of 1</div>
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
                                300
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr4.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Greenish frame Goggle for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                                <span>3.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 1   TRENDING 1 ENDS-->

                    <!--ROW 2   TRENDING 2-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr5.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Urbanite Female Fragerent Perfume Pack of 1</div>
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
                                250
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr6.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Old fashioned style Goggle for men Pack of 1</div>
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
                                280
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr7.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Silver Coloured Titan Analogue Watch for men Pack of 1
                            </div>
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
                                350
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr8.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Leather Belt brown coloured for men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span>4.1</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                230
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 2   TRENDING 2 ENDS-->

                    <!--ROW 3 TREDNING 3-->
                    <div class="row">
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr9.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Voronin Male Fragtrent Perfume Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                320
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr10.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Morpankh - That is the most known ornament of Lord Krishna
                            </div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                50
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr11.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Party Wear White coloured Mask for Men Pack of 1</div>
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
                                80
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                        <div class="wardbox col-md3">
                            <div class="wardimgcont">
                                <img src="../images/products/trending/tr12.png" alt="">
                            </div>
                            <div class="wardnameofproduct">Formal Blue trouser For men Pack of 1</div>
                            <div class="wardrating btn" data-bs-toggle="tooltip" title="Ratings">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span>4.5</span>
                            </div>
                            <div class="wardprice">
                                <i class="bi bi-gem"></i>
                                290
                            </div>
                            <div class="btn btn-secondary">Add To Cart</div>
                        </div>
                    </div>
                    <!--ROW 3 TREDNING 3 ENDS-->

                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
