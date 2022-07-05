<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books & More. Best Offers!</title>

    <!-- link section -->

    <link rel="icon" href="images/favicon.png"type="image/icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyle.css" media="all" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    

</head>
<style>@import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");

:root {
    --font1: 'Heebo', sans-serif;
    --font2: 'Fira Sans Extra Condensed', sans-serif;
    --font3: 'Roboto', sans-serif;

    --btnbg: #ffcc00;
    --btnfontcolor: rgb(61, 61, 61);
    --btnfontcolorhover: rgb(255, 255, 255);
    --btnbghover: #ffc116;
    --btnactivefs: rgb(241, 195, 46);


    --label-index: #960796;
    --danger-index: #5bc257;
/* PAGINATE */
    --link-color: #000;
    --link-color-hover: #fff;
    --bg-content-color: #ffcc00;

}

.container-fluid {
    max-width: 1400px;

}

.card {
    background: #fff;
    
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    border: 0;
    border-radius: 1rem;
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(1rem - 1px);
    border-top-right-radius: calc(1rem - 1px);
}


.card h5 {
    overflow: hidden;
    height: 55px;
    font-weight: 300;
    font-size: 1rem;
}

.card h5 a {
  color: black;
  text-decoration: none;
} 

.card-img-top {
    width: 100%;
    min-height: 250px;
    max-height: 250px;
    object-fit: contain;
    padding: 30px;
}

.card h2 {
    font-size: 1rem;
}


.card:hover {
    transform: scale(0.90);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}

/* Centered text */
.label-top {
    position: absolute;
    background-color:#F74300;
    color: #fff;
    top: 8px;
    right: 8px;
    padding: 5px 10px 5px 10px;
    font-size: .7rem;
    font-weight: 600;
    border-radius: 3px;
    text-transform: uppercase;
}

.top-right {
    position: absolute;
    top: 24px;
    left: 24px;

    width: 90px;
    height: 90px;
    border-radius: 50%;
    font-size: 1rem;
    font-weight: 900;
    background: #8bc34a;
    line-height: 90px;
    text-align: center;
    color: white;
}

.top-right span {
    display: inline-block;
    vertical-align: middle;
    /* line-height: normal; */
    /* padding: 0 25px; */
}

.aff-link {
    /* text-decoration: overline; */
    font-weight: 500;
}

.over-bg {
    background: rgba(53, 53, 53, 0.85);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0.0px);
    -webkit-backdrop-filter: blur(0.0px);
    border-radius: 10px;
}
.bold-btn {

    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    padding: 5px 50px 5px 50px;
}
.box .btn {
    font-size: 1.5rem;
}

@media (max-width: 1025px) {
    .btn {
        padding: 5px 40px 5px 40px;
    }
}
@media (max-width: 250px) {
    .btn {
        padding: 5px 30px 5px 30px;
    }
}

/* START BUTTON */
.btn-warning {
    background: var(--btnbg);
    color: var(--btnfontcolor);
    fill: #ffffff;
    border: none;
    text-decoration: none;
    outline: 0;
    /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
    border-radius: 100px;
}
.btn-warning:hover {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}
.btn-check:focus + .btn-warning, .btn-warning:focus {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}
.btn-warning:active:focus {
    box-shadow: 0 0 0 0.25rem var(--btnactivefs);
}
.btn-warning:active {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}

/* END BUTTON */

.bg-success {
    font-size: 1rem;
    background-color: var(--btnbg)!important;
    color: var(--btnfontcolor)!important;
}
.bg-danger {
    font-size: 1rem;
}


.price-hp {
    font-size: 1rem;
    font-weight: 600;
    color: darkgray;
}

.amz-hp {
    font-size: .7rem;
    font-weight: 600;
    color: darkgray;
}

.fa-question-circle:before {
    /* content: "\f059"; */
    color: darkgray;
}

.fa-heart:before {
    color:crimson;
}
.fa-chevron-circle-right:before {
    color: darkgray;
}
.loader_bg{
    position: fixed;
    z-index: 999999;
    background: #fff;
    width: 100%;
    height: 100%;
}
.loader{
    border: 0 soild transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(50vw - 75px);
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #0d6efd;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
    animation-delay: .5s;
}
@keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
    }
}


</style>

<body>
<div class="loader_bg">
    <div class="loader"></div>
</div>


  <!-- Header section start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2 sticky-top " >
      <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/flipkart-plus.png" height="15px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input type="text" class="form-control ms-5" placeholder="Search for products, brands and more" style="height:27px; width:400px;">
   <a href="index.php"> <i class="fas fa-search text-primary" style="margin-left:-25px; font-size:17px;"></i></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu px-1 shadow mt-3 " aria-labelledby="navbarDropdown" style="border:none;">
          <li><a class="dropdown-item " href="#"><i class="fas fa-bell me-3 text-primary"></i>Notification Prefrences</a></li>
          <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fab fa-sellcast me-3 text-primary"></i>Sell on flipkart</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-concierge-bell me-3 text-primary"></i>24x7 customers care</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-3 text-primary"></i>Advertise</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-download me-3 text-primary"></i>Download app</a></li>
          </ul>
        </li>
        <li class="nav-item ms-4">
         <a href="requester/cart.php" class="text-light nav-link"> <i class="fas fa-shopping-cart text-light me-2 "></i>Cart</a>
        </li>
        <li class="nav-item ms-4">
         <a href="requester/customerregistration.php" class="text-light nav-link"> <i class="fas fa-user-plus me-2"></i>Sign up</a>
        </li>
       <a href="requester/customerlogin.php"> <button class="btn btn-light text-primary ms-4 mt-1 px-4 py-1" type="submit"style="height:25px;" >Login</button></a>
     </ul>
     <div class="dropdown text-end  ms-5">
          <a href="#" class="d-block link text-decoration-none dropdown-toggle text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle">     &nbsp; 
          </a>
          <ul class="dropdown-menu shadow border-none text-small px-1 mt-3" aria-labelledby="dropdownUser1" style="border:none;">
            <li><a class="dropdown-item" href="requester/customerprofile.php"><i class='bx bxs-user me-3 text-primary'></i>profile</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-3 text-primary"></i>Settings</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-3 text-primary"></i>Wishlist</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fab fa-first-order-alt me-3 text-primary"></i>Orders</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-gift me-3 text-primary"></i>Rewards</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="requester/logout.php"><i class="fas fa-sign-out-alt me-3 text-primary"></i>Logout</a></li>
            
     
          </ul>
   
        </div>
    </div>
  </div>
</nav>
<?php include("megamenu.php");?>
<!-- Header section closing -->


<!-- Middle secion starting -->

<div class="container text-center"data-aos="fade-in">
  <div class="row  p-3 px-5 ">
    <div class="col-sm-1 ms-5"><a href="products/electronics.php"><img src="images/img5.png" title="Electornics" height="50px"></a></div>
    <div class="col-sm-1 ms-4"> <a href="products/mobile.php"><img src="images/img5.jpg" title="Mobiles" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href="products/fashion.php"><img src="images/fashion.png" title="Fashion" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href=""><img src="images/home.png" title="Home" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href=""><img src="images/fur.png" title="Furniture" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href=""><img src="images/plane.png" title="Travel" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href=""><img src="images/app.png" title="Applince" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href=""><img src="images/toys.png" title="Beauty & toys" height="50px"></a></div>
    <div class="col-sm-1 ms-4"><a href=""><img src="images/gro.png" title="Grosrey" height="50px"></a></div>
  </div>
</div>

<div id="carouselExampleControls" class="carousel slide carousel-fade mt-3  " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slider/slider3.jpg" class="d-block w-100" title="Fashion" alt="" height="495px">
    </div>
    <div class="carousel-item">
      <img src="images/slider/slider1.jpg" class="d-block w-100" title="Fashion" alt="..."  height="495px">
    </div>
    <div class="carousel-item">
      <img src="images/slider/slider2.jpg" class="d-block w-100" title="Fashion" alt="..."  height="495px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container-fluid   p-5 mt-2  " data-aos="slide-up">
  <h2 class="text-center">TOP DEALS</h2>
  <br>
    <div class="row mt-5">
<div class="card ms-4  " style="width: 17rem; border:none;">
 <a href=""> <img src="images/images.jfif" class="card-img-top" alt="..."></a>
  <div class="card-body">
    <p class="card-text"><a href=""><small>Dell 15 (2021) Laptop, 8GB, 256GB SSD, Integrated Graphics, 15.6" FHD Display...</a></small></p>
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="images/ass.png" class="mb-2 ms-5" height="18px">
   <b>₹87,990</b> <small class="text-secondary ms-2">₹1,14,990</small>  <small class="text-success ms-2 ">23% off</small>

  
  </div>
</div>

<div class="card ms-2" style="width: 17rem; border:none;">
  <a href=""><img src="images/boat.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
  <p class="card-text"><a href=""><small>Dell 15 (2021) Laptop, 8GB, 256GB SSD, Integrated Graphics, 15.6" FHD Display...</a></small></p>
    
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="images/ass.png" class="mb-2 ms-5" height="18px">
   <b>₹87,990</b> <small class="text-secondary ms-2">₹1,14,990</small>  <small class="text-success ms-2 ">23% off</small>

  
  </div>

</div>

<div class="card ms-2 " style="width: 17rem; border:none;">
  <a href="#"><img src="images/shoes.jpeg" class="card-img-top " alt="..." ></a>
  <div class="card-body">
  <p class="card-text"><a href=""><small>Dell 15 (2021) Laptop, 8GB, 256GB SSD, Integrated Graphics, 15.6" FHD Display...</a></small></p>

    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="images/ass.png" class="mb-2 ms-5" height="18px">
   <b>₹87,990</b> <small class="text-secondary ms-2">₹1,14,990</small>  <small class="text-success ms-2 ">23% off</small>

  
  </div>
</div>


<div class="card ms-2" style="width: 17rem; border:none;">
 <a href=""> <img src="images/macbook.jpeg" class="card-img-top" height="120px" alt="..."></a>
 <div class="card-body">
 <p class="card-text"><a href=""><small>Dell 15 (2021) Laptop, 8GB, 256GB SSD, Integrated Graphics, 15.6" FHD Display...</a></small></p>
    
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="images/ass.png" class="mb-2 ms-5" height="18px">
   <b>₹87,990</b> <small class="text-secondary ms-2">₹1,14,990</small>  <small class="text-success ms-2 ">23% off</small>

  
  </div>
</div>

<div class="card ms-2 mb-5 " style="width: 17rem; border:none;">
  <a href=""><img src="images/iphone12.png" class="card-img-top " alt="..." ></a>
  <div class="card-body">
  <p class="card-text"><a href=""><small>Dell 15 (2021) Laptop, 8GB, 256GB SSD, Integrated Graphics, 15.6" FHD Display...</a></small></p>
 
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="images/ass.png" class="mb-2 ms-5" height="18px">
   <b>₹87,990</b> <small class="text-secondary ms-2">₹1,14,990</small>  <small class="text-success ms-2 ">23% off</small>

  </div>
</div>

<div class="card ms-2 " style="width: 17rem; border:none;">
 <a href=""> <img src="images/mi.jpg" class="card-img-top" alt="..."></a>
  <div class="card-body">
  <p class="card-text mt-3"><a href=""><small>Dell 15 (2021) Laptop, 8GB, 256GB SSD, Integrated Graphics, 15.6" FHD Display...</a></small></p>
 
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="images/ass.png" class="mb-2 ms-5" height="18px">
   <b>₹87,990</b> <small class="text-secondary ms-2">₹1,14,990</small>  <small class="text-success ms-2 ">23% off</small>

  </div>
</div>

</div>
</div>


<div class="container mt-5 p-5" data-aos="fade-in">
  <div class="row ">
    <div class="col-sm-6 ">
      <img src="images/adbanner.webp" height="250px">
    </div>
    <div class="col-sm-6 ">
<h2 class="text-primary mt-4">I Phone 11</h2>
<h4>craziest offer on iphone </h4>
<p>Get $110 - $790 off when you trade in an iPhone 8 or newer◊◊</p>
<p>As part of our efforts to reach our environmental goals, iPhone 11 does not include a power adapter or EarPods. Included in the box is a USB‑C to Lightning cable that supports fast charging and is compatible with USB‑C power adapters and computer ports.

We encourage you to re‑use your current USB‑A to Lightning cables, power adapters, and headphones which are compatible with this iPhone. But if you need any new Apple power adapters or headphones, they are available for purchase.</p>
<a href="#"><button class="btn btn  text-light mt-3 shadow " style="background-color:#F74300;"><i class="fas fa-shopping-cart text-light me-2 "></i>ADD TO CART</button></a>
<a href=""><button class="btn btn-primary ms-4 mt-3 shadow"><i class="fas fa-shopping-bag text-light me-2"></i>BUY NOW</button></a>

    </div>
  </div>
</div>


<div class="container mt-5 p-5"  data-aos="fade-in">
  <div class="row ">
    <div class="col-sm-6">
    <h2 class="text-primary mt-4">Motorola G40 (Carbon Gray, 64 GB)  (4 GB RAM)</h2>
<h4 class="text-warning">Just&nbsp;<i class="fas fa-rupee-sign"></i> 9,499 </h4>
<p>Get $110 - $790 off when you trade in an iPhone 8 or newer◊◊</p>
<p>As part of our efforts to reach our environmental goals, iPhone 11 does not include a power adapter or EarPods. Included in the box is a USB‑C to Lightning cable that supports fast charging and is compatible with USB‑C power adapters and computer ports.

We encourage you to re‑use your current USB‑A to Lightning cables, power adapters, and headphones which are compatible with this iPhone. But if you need any new Apple power adapters or headphones, they are available for purchase.</p>
<a href="#"><button class="btn btn  text-light mt-3 shadow " style="background-color:#F74300;"><i class="fas fa-shopping-cart text-light me-2 "></i>ADD TO CART</button></a>
<a href=""><button class="btn btn-primary ms-4 mt-3 shadow"><i class="fas fa-shopping-bag text-light me-2"></i>BUY NOW</button></a>
    </div>
    <div class="col-sm-6 ">

<img src="images/motorola.jpg" height="230px">
    </div>
  </div>
</div>


<div class="container bg-trasparent my-4 p-3 mt-5 pt-5" style="position: relative"  data-aos="fade-in">
<h2 class="text-center p-5">Fastival offers</h2>
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3 mt-5">
    <div class="col hp">
      <div class="card h-100 border-0 p-2">
        <a href="#">
          <img src="https://www.freepnglogos.com/uploads/shoes-png/dance-shoes-png-transparent-dance-shoes-images-5.png" class="card-img-top" alt="product.title" />
        </a>

        <div class="label-top shadow-sm">
          <a class="text-white" href="#">nike</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success text-light">1.245$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
          <small>  <a target="_blank" href="#">ASUS TUF FX505DT Gaming Laptop- 15.6", 120Hz Full HD, AMD Ryzen 5 R5-3550H Processor, GeForce GTX 1650 Graphics, 8GB DDR4, 256GB PCIe SSD, RGB Keyboard, Windows 10 64-bit - FX505DT-AH51</a></small>
          </h5>

          <div class=" text-center gap-2 my-4">

          <a href="#" class="btn btn bold-btn text-light p-3 py-2" style="background-color:#F74300;"><i class="fas fa-shopping-bag me-2 text-light  "></i> buy now</a>
            <a href="#" class="btn btn-primary bold-btn text-light p-3 py-2" style="background-color:"><i class="fas fa-shopping-cart text-light "></i></a>


          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              <i class="far fa-heart text-danger" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100  border-0">
        <a href="#">
          <img src="https://m.media-amazon.com/images/I/71wF7YDIQkL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>

        <div class="label-top shadow-sm">
          <a class="text-white" href="#">razer</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success text-light">2.345$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
          <small>  <a target="_blank" href="#">Razer Blade 15 Base Gaming Laptop 2020: Intel Core i7-10750H 6-Core, NVIDIA GeForce GTX 1660 Ti, 15.6" FHD 1080p 120Hz, 16GB RAM, 256GB SSD, CNC Aluminum, Chroma RGB Lighting, Black</a></small>
          </h5>

          <div class="text-center gap-2 my-4">

          <a href="#" class="btn btn bold-btn text-light p-3 py-2" style="background-color:#F74300;"><i class="fas fa-shopping-bag me-2 text-light  "></i> buy now</a>
            <a href="#" class="btn btn-primary bold-btn text-light p-3 py-2" style="background-color:"><i class="fas fa-shopping-cart text-light "></i></a>

          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              <i class="far fa-heart text-danger" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100  border-0">
        <a href="#">
          <img src="https://m.media-amazon.com/images/I/81KDKQkSXFL._AC_SS450_.jpg" class="card-img-top" alt="product.title" />
        </a>

        <div class="label-top shadow-sm">
          <a class="text-white" href="#">LG</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success text-light">1.020$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
          <small>  <a target="_blank" href="#">Lenovo Legion 5 Gaming Laptop, 15.6" FHD (1920x1080) IPS Screen, AMD Ryzen 7 4800H Processor, 16GB DDR4, 512GB SSD, NVIDIA GTX 1660Ti, Windows 10, 82B1000AUS, Phantom Black</a></small>
          </h5>

          <div class="text-center gap-2 my-4">

          <a href="#" class="btn btn bold-btn text-light p-3 py-2" style="background-color:#F74300;"><i class="fas fa-shopping-bag me-2 text-light  "></i> buy now</a>
            <a href="#" class="btn btn-primary bold-btn text-light p-3 py-2" style="background-color:"><i class="fas fa-shopping-cart text-light "></i></a>

          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              <i class="far fa-heart text-danger" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100  border-0">
        <a href="#">
          <img src="https://www.freepnglogos.com/uploads/chair-png/wooden-chair-png-transparent-image-pngpix-0.png" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">chair</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success text-light">2.245$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
           <small> <a target="_blank" href="#">MSI GL66 Gaming Laptop: 15.6" 144Hz FHD 1080p Display, Intel Core i7-11800H, NVIDIA GeForce RTX 3070, 16GB, 512GB SSD, Win10, Black (11UGK-001)</a></small>
          </h5>

          <div class="text-center gap-2 my-4">

          <a href="#" class="btn btn bold-btn text-light p-3 py-2" style="background-color:#F74300;"><i class="fas fa-shopping-bag me-2 text-light  "></i> buy now</a>
            <a href="#" class="btn btn-primary bold-btn text-light p-3 py-2" style="background-color:"><i class="fas fa-shopping-cart text-light "></i></a>
          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              
<i class="far fa-heart text-danger" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<!-- Footer start-->


<footer class="section-footer  mt-5 p-3" style="background-color:#172337;" >
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md-4">
					<article class="mr-3">
						<img src="images/favicon.png" class="logo-footer">
            <br>
				<small>		<p class="mt-3 text-light">Flipkart Internet Private Limited,
<br>
Buildings Alyssa, Begonia &

Clove Embassy Tech Village,
<br>
Outer Ring Road, Devarabeesanahalli Village,
<br>
Bengaluru, 560103,

Karnataka, India
<br>
CIN : U51109KA2012PTC066107
<br>
Telephone:<a href="#" style="text-decoration:none;"> 1800 202 9898</a></p></small>
						<div>
						    <a class="btn btn-outline-primary text-light mt-2" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
						    <a class="btn btn-outline-secondary text-light mt-2 ms-2" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram"></i></a>
						    <a class="btn btn-outline-danger text-light mt-2 ms-2" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube"></i></a>
						    <a class="btn btn-outline-info text-light mt-2 ms-2 " title="Twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a>
						</div>
					</article>
				</aside>
				<aside class="col-sm-3 col-md-2 text-light" >
					<h6 class="title text-secondary " >About</h6>
					<ul class="list-unstyled">
					<small>	<li class="mt-3"> <a href="#" class=" text-light" style="text-decoration:none;">About us</a></li>
						<li class="mt-2"> <a href="#" class=" text-light" style="text-decoration:none;">Services</a></li>
						<li class="mt-2"> <a href="#" class=" text-light" style="text-decoration:none;">Rules and terms</a></li>
						<li class="mt-2"> <a href="#" class=" text-light" style="text-decoration:none;">Blogs</a></li></small>
					</ul>
				</aside>
				<aside class="col-sm-3 col-md-2">
					<h6 class="title text-secondary">Services</h6>
					<ul class="list-unstyled">
					<small>	<li class="mt-3"> <a href="#" class=" text-light" style="text-decoration:none;">Help center</a></li>
						<li class="mt-2" > <a href="#" class=" text-light mt-2" style="text-decoration:none;">Money refund</a></li>
						<li class="mt-2"> <a href="#" class=" text-light" style="text-decoration:none;">Terms and Policy</a></li>
						<li class="mt-2"> <a href="#"class=" text-light" style="text-decoration:none;">Open dispute</a></li></small>
					</ul>
				</aside>
				<aside class="col-sm-3  col-md-2">
					<h6 class="title text-secondary">For users</h6>
					<ul class="list-unstyled">
				<small>		<li class="mt-3"> <a href="requester/customerlogin.php" class=" text-light" style="text-decoration:none;"> User Login </a></li>
						<li class="mt-2"> <a href="requester/customerregistration.php" class=" text-light" style="text-decoration:none;"> User register </a></li>
						<li class="mt-2" > <a href="#" class=" text-light" style="text-decoration:none;"> Account Setting </a></li>
						<li class="mt-2"> <a href="#" class=" text-light" style="text-decoration:none;"> My Orders </a></li>
						<li class="mt-2"> <a href="#" class=" text-light" style="text-decoration:none;"> My Wishlist </a></li></small>
            <br><br>
    <?php include("svg.php");?>

					</ul>
				</aside>
				<aside class="col-sm-2  col-md-2">
					<h6 class="title text-secondary ms-5">Our app</h6>
					<a href="https://apps.apple.com/in/app/flipkart-online-shopping-app/id742044692" class="d-block mb- mt-3"><img src="images/appstore.png" height="35"></a>
					<a href="https://play.google.com/store/apps/details?id=com.flipkart.android&hl=en_IN&gl=US" class="d-block mt-2"><img src="images/playmarket.png" height="35"></a>
          
          
				</aside>
        <br><br>
        
			</div> <!-- row.// -->
      
		</section>	<!-- footer-top.// -->

    
		<section class="footer-copyright mt-4  ">
				<p class="  text-muted"> © 2019 Company  All rights resetved </p>
				<p target="_blank" class="float-right text-muted">
					<a href="#" class=" text-light" style="text-decoration:none;">Privacy &amp; Cookies</a> &nbsp; |   &nbsp;
					<a href="#" class=" text-light" style="text-decoration:none;">Accessibility</a>
				</p>
		</section>
	</div><!-- //container -->
</footer>
 

<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "617d2cc97237640007507a49";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>



<!-- End of ChatBot code -->


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset: 300,
            duration: 950,
        });
        </script>
  
 
</body>
</html>