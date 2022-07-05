<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="html, css bootstrap, mega menu, navbar, large dropdown, menu CSS examples" />
	<meta name="description" content="Bootstrap 5 navbar megamenu examples with simple css demo code" />  

	<title> </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<style type="text/css">
.navbar .megamenu{ padding: 1rem; }
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	
	.navbar .has-megamenu{position:static!important;}
	.navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
	
}	
a
{
	text-decoration:none;
	color:grey;
}
/* ============ desktop view .end// ============ */


/* ============ mobile view ============ */
@media(max-width: 991px){
	.navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
		overflow-y: auto;
	    max-height: 90vh;
	    margin-top:10px;
	}
}
/* ============ mobile view .end// ============ */
</style>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
        	element.addEventListener('click', function (e) {
        		e.stopPropagation();
        	});
        })
    }); 
	// DOMContentLoaded  end
</script>

</head>
<body>
<!-- ============= COMPONENT ============== -->
<nav class="navbar navbar-expand-lg navbar  bg-white  shadow-sm  ">
<div class="container	">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse  " id="main_nav">
		<small class="ms-auto me-auto">
			<ul class="navbar-nav ms-auto me-auto border-0 container " style="font-size:10px;">
		
			<li class="nav-item dropdown has-megamenu ms-4  ">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown"> Electronics  </a>
				<div class="dropdown-menu megamenu shadow border-0 container ms-auto me-auto" role="menu" style="">
					<div class="container">
					<div class="row g-3   " style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu ">
								<h6 class="title text-primary">Mobiles</h6>
								<ul class="list-unstyled ">
								<small><li class="mt-3 "><a href="#" >Mi</a></li></small>
								<small><li class="mt-2"><a href="#">Realme</a></li></small>	
								<small><li class="mt-2"><a href="#">Samsung</a></li></small>	
								<small><li class="mt-2"><a href="#">Oppo</a></li></small>	
								<small><li class="mt-2"><a href="#">Infinix</a></li></small>	
								<small><li class="mt-2"><a href="#">Apple</a></li></small>	
								<small><li class="mt-2"><a href="#">Vivo</a></li></small>	
								<small><li class="mt-2"><a href="#">Honor</a></li></small>	
								<small><li class="mt-2"><a href="#">Asus</a></li></small>	
								<small><li class="mt-2"><a href="#">Poco X2</a></li></small>	
								<small><li class="mt-2"><a href="#">Realme Nazro 10 </a></li></small>	
								<small><li class="mt-2"><a href="#">Infinix hot 10</a></li></small>	
								<small><li class="mt-2"><a href="#">IQOO 3</a></li></small>	
								<small><li class="mt-2"><a href="#">iPhone SE</a></li></small>	
								<small><li class="mt-2"><a href="#">Motorola razr</a></li></small>	
								<small>	<li class="mt-2"><a href="#">realme Narzo 10A</a></li></small>
								<small><li class="mt-2"><a href="#">Motorola g8 power lite</a></li></small>	

								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6 ">
							<div class="col-megamenu">
								<h6 class="title text-primary">Mobile Accessories</h6>
								<ul class="list-unstyled">
							<small>	<li class="mt-3"><a href="#">Mobile cases</a></li>
								<li class="mt-2"><a href="#">Headphones & Headsets</a></li>
								<li class="mt-2"><a href="#">Power Banks</a></li>
								<li class="mt-2"><a href="#">Screenguards</a></li>
								<li class="mt-2"><a href="#">Memory Cards</a></li>
								<li class="mt-2"><a href="#">Smart Headphones</a></li>
								<li class="mt-2"><a href="#">Mobile Cables</a></li>
								<li class="mt-2"><a href="#">Mobile Chargers</a></li>
								<li class="mt-2"><a href="#">Mobile Holders</a></li>
							<b>	<li class="mt-2 "><a href="#">Smart Wearable Tech</a><i class="fas fa-caret-right ms-2 text-primary"></i></li></b>
								<li class="mt-2"><a href="#">Smart Watches</a></li>
								<li class="mt-2"><a href="#">Smart Glasses (VR)</a></li>
								<li class="mt-2"><a href="#">Smart Bands</a></li>
							<b>	<li class="mt-2 text-dark"><a href="#">Health Care Appliances</a><i class="fas fa-caret-right ms-2 text-primary"></i></li></b>
								<li class="mt-2"><a href="#">Bp Monitors</a></li>
								<li class="mt-2"><a href="#">Weighing Scale</a></li></small>


									
									

								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Laptops<i class="fas fa-caret-right ms-2 "></i></h6>
								<ul class="list-unstyled">
							<small>	<li class="mt-3"><a href="#">Gaming Laptops</a></li>
							<b>	<li class="mt-2"><a href="#">Desktop PCs</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></b>
							<b>	<li class="mt-2"><a href="#">Gaming & Accessories</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></b>
							<b>	<li class="mt-2"><a href="#">Computer Accessories</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></b>
								<li class="mt-2"><a href="#">External Hard Disks</a></li>
								<li class="mt-2"><a href="#">Pendrives</a></li>
								<li class="mt-2"><a href="#">Laptop Skins & Decals</a></li>
								<li class="mt-2"><a href="#">Laptop Bags</a></li>
								<li class="mt-2"><a href="#">Mouse</a></li>
							<b>	<li class="mt-2"><a href="#">Computer Peripherals</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></b>
								<li class="mt-2"><a href="#">Printers & Ink Cartridges</a></li>
								<li class="mt-2"><a href="#">Monitors</a></li>
							<b>	<li class="mt-2"><a href="#">Tablets</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></b>
								<li class="mt-2"><a href="#">Apple iPads</a></li></small>


								

								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Televisions</h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Speakers</a></li></small>
								<small>	<li class="mt-2"><a href="#">Home Audio Speakers</a></li></small>
								<small>	<li class="mt-2"><a href="#">Home Theatres</a></li></small>
								<small>	<li class="mt-2"><a href="#">Soundbars</a></li></small>
								<small>	<li class="mt-2"><a href="#">Bluetooth Speakers</a></li></small>
								<small>	<li class="mt-2"><a href="#">DTH Set Top Box</a></li></small>
							<b>	<small>	<li class="mt-2"><a href="#">Smart Home Automation</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></small></b>
								<small>	<li class="mt-2"><a href="#">Google Nest</a></li></small>
							<b>	<small>	<li class="mt-2"><a href="#">Camera</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></small></b>
								<small>	<li class="mt-2"><a href="#">DSLR & Mirrorless</a></li></small>
								<small>	<li class="mt-2"><a href="#">Compact & Bridge Cameras</a></li></small>
								<small>	<li class="mt-2"><a href="#">Sports & Action</a></li></small>
							<b>	<small>	<li class="mt-2"><a href="#">Camera Accessories</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></small></b>
								<small>	<li class="mt-2"><a href="#">Lens</a></li></small>
								<small>	<li class="mt-2"><a href="#">Tripods</a></li></small>
							<b>	<small>	<li class="mt-2"><a href="#">Network Components</a><i class="fas fa-caret-right ms-2 text-primary "></i></li></small></b>
								<small>	<li class="mt-2"><a href="#">Routers</a></li></small>

								
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown"> TV & Appliances  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="container">
					<div class="row g-3 " style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Televisions<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<b><li class="mt-3"><a href="#">New Launches <i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Smart & Ultra HD <i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Top Brands</a></li>
									<li class="mt-2"><a href="#">Mi</a></li>
									<li class="mt-2"><a href="#">Vu</a></li>
									<li class="mt-2"><a href="#">Thonsom</a></li>
									<li class="mt-2"><a href="#">Samsung</a></li>
									<li class="mt-2"><a href="#">iFFALCON by TCL</a></li>
									<li class="mt-2"><a href="#">LG</a></li>
									<li class="mt-2"><a href="#">realme</a></li>
									<li class="mt-2"><a href="#">Motorola</a></li>
								<b>	<li class="mt-2"><a href="#">Shop by screen size<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">24 & below</a></li>
									<li class="mt-2"><a href="#">28 - 32</a></li>
									<li class="mt-2"><a href="#">39 - 43</a></li>
									<li class="mt-2"><a href="#">48 - 55</a></li></small>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Washing Machine <i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
									<small><li class="mt-3"><a href="#">Fully Automatic Front Load</a></li>
									<li class="mt-2"><a href="#">Semi Automatic Top Load</a></li>
									<li class="mt-2"><a href="#">Fully Automatic Top Load</a></li>
								<b>	<li class="mt-2"><a href="#">Air Conditioners <i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Inverter AC</a></li>
									<li class="mt-2"><a href="#">Split ACs</a></li>
									<li class="mt-2"><a href="#">Window ACs</a></li>
								<b>	<li class="mt-2"><a href="#">Shop By Brand<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">LG</a></li>
									<li class="mt-2"><a href="#">Hitachi</a></li>
									<li class="mt-2"><a href="#">Carrier</a></li>
								<b>	<li class="mt-2"><a href="#">Refrigerators <i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Single Door</a></li>
									<li class="mt-2"><a href="#">Double Door</a></li>
									<li class="mt-2"><a href="#">Triple door</a></li>
									<li class="mt-2"><a href="#">Side by Side</a></li>
									<li class="mt-2"><a href="#">Convertible</a></li>




</small>
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Kitchen Appliances <i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Microwave Ovens</a></li>
									<li class="mt-2"><a href="#">Oven Toaster Grills (OTG)</a></li>
									<li class="mt-2"><a href="#">Juicer/Mixer/Grinder</a></li>
									<li class="mt-2"><a href="#">Electric Kettle</a></li>
									<li class="mt-2"><a href="#">Induction Cooktops</a></li>
									<li class="mt-2"><a href="#">Chimneys</a></li>
									<li class="mt-2"><a href="#">Hand Blenders</a></li>
									<li class="mt-2"><a href="#">Sandwich Makers</a></li>
									<li class="mt-2"><a href="#">Pop Up Toasters</a></li>
									<li class="mt-2"><a href="#">Wet Grinders</a></li>
									<li class="mt-2"><a href="#">Food Processors</a></li>
									<li class="mt-2"><a href="#">Coffee Makers</a></li>
									<li class="mt-2"><a href="#">Dishwashers</a></li>
									<b><li class="mt-2"><a href="#">Healthy Living Appliances<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Small Home Appliances<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Irons</a></li>
									<li class="mt-2"><a href="#">Water Purifiers</a></li>
									<li class="mt-2"><a href="#">Fans</a></li>
									<li class="mt-2"><a href="#">Air Coolers</a></li>
									<li class="mt-2"><a href="#">Inverters</a></li>
									<li class="mt-2"><a href="#">Vacuum Cleaners</a></li>
									<li class="mt-2"><a href="#">Sewing Machines</a></li>
									<li class="mt-2"><a href="#">Voltage Stabilizers</a></li>
									<li class="mt-2"><a href="#">Water Geysers</a></li>
									<li class="mt-2"><a href="#">Immersion Rods</a></li>
									<li class="mt-2"><a href="#">Top Brands</a></li>
									<li class="mt-2"><a href="#">Livpure</a></li>
									<li class="mt-2"><a href="#">Philips</a></li>
									<li class="mt-2"><a href="#">Bajaj</a></li>
									<li class="mt-2"><a href="#">IFB</a></li>
									<li class="mt-2"><a href="#">Eureka Forbes</a></li>
									<li class="mt-2"><a href="#">Kaff</a></li></small>



								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
					</div>
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Men  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="row g-3" style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
							<b>	<h6 class="title text-primary">Footwear<i class="fas fa-caret-right ms-2 text-primary "></i></h6></b>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sports Shoes</a></li>
									<li class="mt-2"><a href="#">Casual Shoes</a></li>
									<li class="mt-2"><a href="#">Formal Shoes</a></li>
									<li class="mt-2"><a href="#">Sandals & Floaters</a></li>
									<li class="mt-2"><a href="#">Flip- Flops</a></li>
									<li class="mt-2"><a href="#">Boots</a></li>
									<li class="mt-2"><a href="#">Running Shoes</a></li>
									<li class="mt-2"><a href="#">Sneakers</a></li>
									<li class="mt-2"><a href="#">Men's Grooming</a></li>
									<li class="mt-2"><a href="#">Deodorants</a></li>
									<li class="mt-2"><a href="#">Perfumes</a></li>
								<b>	<li class="mt-2"><a href="#">Beard Care & Grooming<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Shaving & Aftershave</a></li>
									<li class="mt-2"><a href="#">Sexual Wellness</a></li></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Clothing<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Top wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">T-Shirts</a></li>
									<li class="mt-2"><a href="#">Formal Shirts</a></li>
									<li class="mt-2"><a href="#">Casual Shirts</a></li>
									<li class="mt-2"><a href="#">Bottom wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">Jeans</a></li>
									<li class="mt-2"><a href="#">Casual Trousers</a></li>
									<li class="mt-2"><a href="#">Formal Trousers</a></li>
									<li class="mt-2"><a href="#">Track pants</a></li>
									<li class="mt-2"><a href="#">Shorts</a></li>
									<li class="mt-2"><a href="#">Cargos</a></li>
									<li class="mt-2"><a href="#">Three Fourths</a></li>
								<b>	<li class="mt-2"><a href="#">Suits, Blazers & Waistcoats<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Ties, Socks, Caps & More<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
								<b>	<li class="mt-2"><a href="#">Fabrics<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>




								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Winter Wear<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sweatshirts</a></li>
									<li class="mt-2"><a href="#">Jackets</a></li>
									<li class="mt-2"><a href="#">Sweater</a></li>
									<li class="mt-2"><a href="#">Tracksuits</a></li>
								<b>	<li class="mt-2"><a href="#">Ethnic wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Kurta</a></li>
									<li class="mt-2"><a href="#">Ethnic Sets</a></li>
									<li class="mt-2"><a href="#">Sherwanis</a></li>
									<li class="mt-2"><a href="#">Ethnic Pyjama</a></li>
									<li class="mt-2"><a href="#">Dhoti</a></li>
									<li class="mt-2"><a href="#">Lungi</a></li>
								<b>	<li class="mt-2"><a href="#">Innerwear & Loungewear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Briefs & Trunks</a></li>
									<li class="mt-2"><a href="#">Vests</a></li>
									<li class="mt-2"><a href="#">Boxers</a></li>
									<li class="mt-2"><a href="#">Pyjamas and Lounge Pants</a></li>
									<li class="mt-2"><a href="#">Thermals</a></li>
									<li class="mt-2"><a href="#">Night Suits</a></li>
								<b>	<li class="mt-2"><a href="#">Raincoats & Windcheaters<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>





								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Watches<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Fastrack</a></li>
									<li class="mt-2"><a href="#">Casio</a></li>
									<li class="mt-2"><a href="#">Titan</a></li>
									<li class="mt-2"><a href="#">Fossil</a></li>
									<li class="mt-2"><a href="#">Sonata</a></li>
								<b>	<li class="mt-2"><a href="#">Accessories<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Backpacks</a></li>
									<li class="mt-2"><a href="#">Wallets</a></li>
									<li class="mt-2"><a href="#">Belts</a></li>
									<li class="mt-2"><a href="#">Luggage & Travel</a></li>
									<li class="mt-2"><a href="#">Frames</a></li>
									<li class="mt-2"><a href="#">Sunglasses</a></li>
									<li class="mt-2"><a href="#">Jewellery</a></li>
									<b><li class="mt-2"><a href="#">Sports & Fitness Store<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


									
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			
			
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Women  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="row g-3" style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
							<b>	<h6 class="title text-primary">Footwear<i class="fas fa-caret-right ms-2 text-primary "></i></h6></b>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sports Shoes</a></li>
									<li class="mt-2"><a href="#">Casual Shoes</a></li>
									<li class="mt-2"><a href="#">Formal Shoes</a></li>
									<li class="mt-2"><a href="#">Sandals & Floaters</a></li>
									<li class="mt-2"><a href="#">Flip- Flops</a></li>
									<li class="mt-2"><a href="#">Boots</a></li>
									<li class="mt-2"><a href="#">Running Shoes</a></li>
									<li class="mt-2"><a href="#">Sneakers</a></li>
									<li class="mt-2"><a href="#">Men's Grooming</a></li>
									<li class="mt-2"><a href="#">Deodorants</a></li>
									<li class="mt-2"><a href="#">Perfumes</a></li>
								<b>	<li class="mt-2"><a href="#">Beard Care & Grooming<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Shaving & Aftershave</a></li>
									<li class="mt-2"><a href="#">Sexual Wellness</a></li></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Clothing<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Top wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">T-Shirts</a></li>
									<li class="mt-2"><a href="#">Formal Shirts</a></li>
									<li class="mt-2"><a href="#">Casual Shirts</a></li>
									<li class="mt-2"><a href="#">Bottom wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">Jeans</a></li>
									<li class="mt-2"><a href="#">Casual Trousers</a></li>
									<li class="mt-2"><a href="#">Formal Trousers</a></li>
									<li class="mt-2"><a href="#">Track pants</a></li>
									<li class="mt-2"><a href="#">Shorts</a></li>
									<li class="mt-2"><a href="#">Cargos</a></li>
									<li class="mt-2"><a href="#">Three Fourths</a></li>
								<b>	<li class="mt-2"><a href="#">Suits, Blazers & Waistcoats<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Ties, Socks, Caps & More<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
								<b>	<li class="mt-2"><a href="#">Fabrics<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>




								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Winter Wear<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sweatshirts</a></li>
									<li class="mt-2"><a href="#">Jackets</a></li>
									<li class="mt-2"><a href="#">Sweater</a></li>
									<li class="mt-2"><a href="#">Tracksuits</a></li>
								<b>	<li class="mt-2"><a href="#">Ethnic wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Kurta</a></li>
									<li class="mt-2"><a href="#">Ethnic Sets</a></li>
									<li class="mt-2"><a href="#">Sherwanis</a></li>
									<li class="mt-2"><a href="#">Ethnic Pyjama</a></li>
									<li class="mt-2"><a href="#">Dhoti</a></li>
									<li class="mt-2"><a href="#">Lungi</a></li>
								<b>	<li class="mt-2"><a href="#">Innerwear & Loungewear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Briefs & Trunks</a></li>
									<li class="mt-2"><a href="#">Vests</a></li>
									<li class="mt-2"><a href="#">Boxers</a></li>
									<li class="mt-2"><a href="#">Pyjamas and Lounge Pants</a></li>
									<li class="mt-2"><a href="#">Thermals</a></li>
									<li class="mt-2"><a href="#">Night Suits</a></li>
								<b>	<li class="mt-2"><a href="#">Raincoats & Windcheaters<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>





								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Watches<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Fastrack</a></li>
									<li class="mt-2"><a href="#">Casio</a></li>
									<li class="mt-2"><a href="#">Titan</a></li>
									<li class="mt-2"><a href="#">Fossil</a></li>
									<li class="mt-2"><a href="#">Sonata</a></li>
								<b>	<li class="mt-2"><a href="#">Accessories<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Backpacks</a></li>
									<li class="mt-2"><a href="#">Wallets</a></li>
									<li class="mt-2"><a href="#">Belts</a></li>
									<li class="mt-2"><a href="#">Luggage & Travel</a></li>
									<li class="mt-2"><a href="#">Frames</a></li>
									<li class="mt-2"><a href="#">Sunglasses</a></li>
									<li class="mt-2"><a href="#">Jewellery</a></li>
									<b><li class="mt-2"><a href="#">Sports & Fitness Store<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


									
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Baby & Kids  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="row g-3" style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
							<b>	<h6 class="title text-primary">Footwear<i class="fas fa-caret-right ms-2 text-primary "></i></h6></b>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sports Shoes</a></li>
									<li class="mt-2"><a href="#">Casual Shoes</a></li>
									<li class="mt-2"><a href="#">Formal Shoes</a></li>
									<li class="mt-2"><a href="#">Sandals & Floaters</a></li>
									<li class="mt-2"><a href="#">Flip- Flops</a></li>
									<li class="mt-2"><a href="#">Boots</a></li>
									<li class="mt-2"><a href="#">Running Shoes</a></li>
									<li class="mt-2"><a href="#">Sneakers</a></li>
									<li class="mt-2"><a href="#">Men's Grooming</a></li>
									<li class="mt-2"><a href="#">Deodorants</a></li>
									<li class="mt-2"><a href="#">Perfumes</a></li>
								<b>	<li class="mt-2"><a href="#">Beard Care & Grooming<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Shaving & Aftershave</a></li>
									<li class="mt-2"><a href="#">Sexual Wellness</a></li></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Clothing<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Top wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">T-Shirts</a></li>
									<li class="mt-2"><a href="#">Formal Shirts</a></li>
									<li class="mt-2"><a href="#">Casual Shirts</a></li>
									<li class="mt-2"><a href="#">Bottom wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">Jeans</a></li>
									<li class="mt-2"><a href="#">Casual Trousers</a></li>
									<li class="mt-2"><a href="#">Formal Trousers</a></li>
									<li class="mt-2"><a href="#">Track pants</a></li>
									<li class="mt-2"><a href="#">Shorts</a></li>
									<li class="mt-2"><a href="#">Cargos</a></li>
									<li class="mt-2"><a href="#">Three Fourths</a></li>
								<b>	<li class="mt-2"><a href="#">Suits, Blazers & Waistcoats<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Ties, Socks, Caps & More<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
								<b>	<li class="mt-2"><a href="#">Fabrics<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>




								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Winter Wear<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sweatshirts</a></li>
									<li class="mt-2"><a href="#">Jackets</a></li>
									<li class="mt-2"><a href="#">Sweater</a></li>
									<li class="mt-2"><a href="#">Tracksuits</a></li>
								<b>	<li class="mt-2"><a href="#">Ethnic wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Kurta</a></li>
									<li class="mt-2"><a href="#">Ethnic Sets</a></li>
									<li class="mt-2"><a href="#">Sherwanis</a></li>
									<li class="mt-2"><a href="#">Ethnic Pyjama</a></li>
									<li class="mt-2"><a href="#">Dhoti</a></li>
									<li class="mt-2"><a href="#">Lungi</a></li>
								<b>	<li class="mt-2"><a href="#">Innerwear & Loungewear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Briefs & Trunks</a></li>
									<li class="mt-2"><a href="#">Vests</a></li>
									<li class="mt-2"><a href="#">Boxers</a></li>
									<li class="mt-2"><a href="#">Pyjamas and Lounge Pants</a></li>
									<li class="mt-2"><a href="#">Thermals</a></li>
									<li class="mt-2"><a href="#">Night Suits</a></li>
								<b>	<li class="mt-2"><a href="#">Raincoats & Windcheaters<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>





								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Watches<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Fastrack</a></li>
									<li class="mt-2"><a href="#">Casio</a></li>
									<li class="mt-2"><a href="#">Titan</a></li>
									<li class="mt-2"><a href="#">Fossil</a></li>
									<li class="mt-2"><a href="#">Sonata</a></li>
								<b>	<li class="mt-2"><a href="#">Accessories<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Backpacks</a></li>
									<li class="mt-2"><a href="#">Wallets</a></li>
									<li class="mt-2"><a href="#">Belts</a></li>
									<li class="mt-2"><a href="#">Luggage & Travel</a></li>
									<li class="mt-2"><a href="#">Frames</a></li>
									<li class="mt-2"><a href="#">Sunglasses</a></li>
									<li class="mt-2"><a href="#">Jewellery</a></li>
									<b><li class="mt-2"><a href="#">Sports & Fitness Store<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


									
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Home & Furniture
  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="row g-3" style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
							<b>	<h6 class="title text-primary">Footwear<i class="fas fa-caret-right ms-2 text-primary "></i></h6></b>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sports Shoes</a></li>
									<li class="mt-2"><a href="#">Casual Shoes</a></li>
									<li class="mt-2"><a href="#">Formal Shoes</a></li>
									<li class="mt-2"><a href="#">Sandals & Floaters</a></li>
									<li class="mt-2"><a href="#">Flip- Flops</a></li>
									<li class="mt-2"><a href="#">Boots</a></li>
									<li class="mt-2"><a href="#">Running Shoes</a></li>
									<li class="mt-2"><a href="#">Sneakers</a></li>
									<li class="mt-2"><a href="#">Men's Grooming</a></li>
									<li class="mt-2"><a href="#">Deodorants</a></li>
									<li class="mt-2"><a href="#">Perfumes</a></li>
								<b>	<li class="mt-2"><a href="#">Beard Care & Grooming<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Shaving & Aftershave</a></li>
									<li class="mt-2"><a href="#">Sexual Wellness</a></li></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Clothing<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Top wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">T-Shirts</a></li>
									<li class="mt-2"><a href="#">Formal Shirts</a></li>
									<li class="mt-2"><a href="#">Casual Shirts</a></li>
									<li class="mt-2"><a href="#">Bottom wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">Jeans</a></li>
									<li class="mt-2"><a href="#">Casual Trousers</a></li>
									<li class="mt-2"><a href="#">Formal Trousers</a></li>
									<li class="mt-2"><a href="#">Track pants</a></li>
									<li class="mt-2"><a href="#">Shorts</a></li>
									<li class="mt-2"><a href="#">Cargos</a></li>
									<li class="mt-2"><a href="#">Three Fourths</a></li>
								<b>	<li class="mt-2"><a href="#">Suits, Blazers & Waistcoats<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Ties, Socks, Caps & More<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
								<b>	<li class="mt-2"><a href="#">Fabrics<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>




								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Winter Wear<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sweatshirts</a></li>
									<li class="mt-2"><a href="#">Jackets</a></li>
									<li class="mt-2"><a href="#">Sweater</a></li>
									<li class="mt-2"><a href="#">Tracksuits</a></li>
								<b>	<li class="mt-2"><a href="#">Ethnic wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Kurta</a></li>
									<li class="mt-2"><a href="#">Ethnic Sets</a></li>
									<li class="mt-2"><a href="#">Sherwanis</a></li>
									<li class="mt-2"><a href="#">Ethnic Pyjama</a></li>
									<li class="mt-2"><a href="#">Dhoti</a></li>
									<li class="mt-2"><a href="#">Lungi</a></li>
								<b>	<li class="mt-2"><a href="#">Innerwear & Loungewear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Briefs & Trunks</a></li>
									<li class="mt-2"><a href="#">Vests</a></li>
									<li class="mt-2"><a href="#">Boxers</a></li>
									<li class="mt-2"><a href="#">Pyjamas and Lounge Pants</a></li>
									<li class="mt-2"><a href="#">Thermals</a></li>
									<li class="mt-2"><a href="#">Night Suits</a></li>
								<b>	<li class="mt-2"><a href="#">Raincoats & Windcheaters<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>





								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Watches<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Fastrack</a></li>
									<li class="mt-2"><a href="#">Casio</a></li>
									<li class="mt-2"><a href="#">Titan</a></li>
									<li class="mt-2"><a href="#">Fossil</a></li>
									<li class="mt-2"><a href="#">Sonata</a></li>
								<b>	<li class="mt-2"><a href="#">Accessories<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Backpacks</a></li>
									<li class="mt-2"><a href="#">Wallets</a></li>
									<li class="mt-2"><a href="#">Belts</a></li>
									<li class="mt-2"><a href="#">Luggage & Travel</a></li>
									<li class="mt-2"><a href="#">Frames</a></li>
									<li class="mt-2"><a href="#">Sunglasses</a></li>
									<li class="mt-2"><a href="#">Jewellery</a></li>
									<b><li class="mt-2"><a href="#">Sports & Fitness Store<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


									
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Sports, Books & More  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="row g-3" style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
							<b>	<h6 class="title text-primary">Footwear<i class="fas fa-caret-right ms-2 text-primary "></i></h6></b>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sports Shoes</a></li>
									<li class="mt-2"><a href="#">Casual Shoes</a></li>
									<li class="mt-2"><a href="#">Formal Shoes</a></li>
									<li class="mt-2"><a href="#">Sandals & Floaters</a></li>
									<li class="mt-2"><a href="#">Flip- Flops</a></li>
									<li class="mt-2"><a href="#">Boots</a></li>
									<li class="mt-2"><a href="#">Running Shoes</a></li>
									<li class="mt-2"><a href="#">Sneakers</a></li>
									<li class="mt-2"><a href="#">Men's Grooming</a></li>
									<li class="mt-2"><a href="#">Deodorants</a></li>
									<li class="mt-2"><a href="#">Perfumes</a></li>
								<b>	<li class="mt-2"><a href="#">Beard Care & Grooming<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Shaving & Aftershave</a></li>
									<li class="mt-2"><a href="#">Sexual Wellness</a></li></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Clothing<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Top wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">T-Shirts</a></li>
									<li class="mt-2"><a href="#">Formal Shirts</a></li>
									<li class="mt-2"><a href="#">Casual Shirts</a></li>
									<li class="mt-2"><a href="#">Bottom wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">Jeans</a></li>
									<li class="mt-2"><a href="#">Casual Trousers</a></li>
									<li class="mt-2"><a href="#">Formal Trousers</a></li>
									<li class="mt-2"><a href="#">Track pants</a></li>
									<li class="mt-2"><a href="#">Shorts</a></li>
									<li class="mt-2"><a href="#">Cargos</a></li>
									<li class="mt-2"><a href="#">Three Fourths</a></li>
								<b>	<li class="mt-2"><a href="#">Suits, Blazers & Waistcoats<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Ties, Socks, Caps & More<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
								<b>	<li class="mt-2"><a href="#">Fabrics<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>




								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Winter Wear<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sweatshirts</a></li>
									<li class="mt-2"><a href="#">Jackets</a></li>
									<li class="mt-2"><a href="#">Sweater</a></li>
									<li class="mt-2"><a href="#">Tracksuits</a></li>
								<b>	<li class="mt-2"><a href="#">Ethnic wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Kurta</a></li>
									<li class="mt-2"><a href="#">Ethnic Sets</a></li>
									<li class="mt-2"><a href="#">Sherwanis</a></li>
									<li class="mt-2"><a href="#">Ethnic Pyjama</a></li>
									<li class="mt-2"><a href="#">Dhoti</a></li>
									<li class="mt-2"><a href="#">Lungi</a></li>
								<b>	<li class="mt-2"><a href="#">Innerwear & Loungewear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Briefs & Trunks</a></li>
									<li class="mt-2"><a href="#">Vests</a></li>
									<li class="mt-2"><a href="#">Boxers</a></li>
									<li class="mt-2"><a href="#">Pyjamas and Lounge Pants</a></li>
									<li class="mt-2"><a href="#">Thermals</a></li>
									<li class="mt-2"><a href="#">Night Suits</a></li>
								<b>	<li class="mt-2"><a href="#">Raincoats & Windcheaters<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>





								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Watches<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Fastrack</a></li>
									<li class="mt-2"><a href="#">Casio</a></li>
									<li class="mt-2"><a href="#">Titan</a></li>
									<li class="mt-2"><a href="#">Fossil</a></li>
									<li class="mt-2"><a href="#">Sonata</a></li>
								<b>	<li class="mt-2"><a href="#">Accessories<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Backpacks</a></li>
									<li class="mt-2"><a href="#">Wallets</a></li>
									<li class="mt-2"><a href="#">Belts</a></li>
									<li class="mt-2"><a href="#">Luggage & Travel</a></li>
									<li class="mt-2"><a href="#">Frames</a></li>
									<li class="mt-2"><a href="#">Sunglasses</a></li>
									<li class="mt-2"><a href="#">Jewellery</a></li>
									<b><li class="mt-2"><a href="#">Sports & Fitness Store<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


									
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
			<li class="nav-item dropdown has-megamenu ms-4">
				<a class="nav-link dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">Flights  </a>
				<div class="dropdown-menu megamenu border-0  shadow container ms-auto me-auto " role="menu">
					<div class="row g-3" style="font-size:12px;">
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
							<b>	<h6 class="title text-primary">Footwear<i class="fas fa-caret-right ms-2 text-primary "></i></h6></b>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sports Shoes</a></li>
									<li class="mt-2"><a href="#">Casual Shoes</a></li>
									<li class="mt-2"><a href="#">Formal Shoes</a></li>
									<li class="mt-2"><a href="#">Sandals & Floaters</a></li>
									<li class="mt-2"><a href="#">Flip- Flops</a></li>
									<li class="mt-2"><a href="#">Boots</a></li>
									<li class="mt-2"><a href="#">Running Shoes</a></li>
									<li class="mt-2"><a href="#">Sneakers</a></li>
									<li class="mt-2"><a href="#">Men's Grooming</a></li>
									<li class="mt-2"><a href="#">Deodorants</a></li>
									<li class="mt-2"><a href="#">Perfumes</a></li>
								<b>	<li class="mt-2"><a href="#">Beard Care & Grooming<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Shaving & Aftershave</a></li>
									<li class="mt-2"><a href="#">Sexual Wellness</a></li></small>


								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Clothing<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Top wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">T-Shirts</a></li>
									<li class="mt-2"><a href="#">Formal Shirts</a></li>
									<li class="mt-2"><a href="#">Casual Shirts</a></li>
									<li class="mt-2"><a href="#">Bottom wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li>
									<li class="mt-2"><a href="#">Jeans</a></li>
									<li class="mt-2"><a href="#">Casual Trousers</a></li>
									<li class="mt-2"><a href="#">Formal Trousers</a></li>
									<li class="mt-2"><a href="#">Track pants</a></li>
									<li class="mt-2"><a href="#">Shorts</a></li>
									<li class="mt-2"><a href="#">Cargos</a></li>
									<li class="mt-2"><a href="#">Three Fourths</a></li>
								<b>	<li class="mt-2"><a href="#">Suits, Blazers & Waistcoats<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<b><li class="mt-2"><a href="#">Ties, Socks, Caps & More<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
								<b>	<li class="mt-2"><a href="#">Fabrics<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>




								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Winter Wear<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Sweatshirts</a></li>
									<li class="mt-2"><a href="#">Jackets</a></li>
									<li class="mt-2"><a href="#">Sweater</a></li>
									<li class="mt-2"><a href="#">Tracksuits</a></li>
								<b>	<li class="mt-2"><a href="#">Ethnic wear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Kurta</a></li>
									<li class="mt-2"><a href="#">Ethnic Sets</a></li>
									<li class="mt-2"><a href="#">Sherwanis</a></li>
									<li class="mt-2"><a href="#">Ethnic Pyjama</a></li>
									<li class="mt-2"><a href="#">Dhoti</a></li>
									<li class="mt-2"><a href="#">Lungi</a></li>
								<b>	<li class="mt-2"><a href="#">Innerwear & Loungewear<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Briefs & Trunks</a></li>
									<li class="mt-2"><a href="#">Vests</a></li>
									<li class="mt-2"><a href="#">Boxers</a></li>
									<li class="mt-2"><a href="#">Pyjamas and Lounge Pants</a></li>
									<li class="mt-2"><a href="#">Thermals</a></li>
									<li class="mt-2"><a href="#">Night Suits</a></li>
								<b>	<li class="mt-2"><a href="#">Raincoats & Windcheaters<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>





								</ul>
							</div>  <!-- col-megamenu.// -->
						</div>    
						<div class="col-lg-3 col-6">
							<div class="col-megamenu">
								<h6 class="title text-primary">Watches<i class="fas fa-caret-right ms-2 text-primary "></i></h6>
								<ul class="list-unstyled">
								<small>	<li class="mt-3"><a href="#">Fastrack</a></li>
									<li class="mt-2"><a href="#">Casio</a></li>
									<li class="mt-2"><a href="#">Titan</a></li>
									<li class="mt-2"><a href="#">Fossil</a></li>
									<li class="mt-2"><a href="#">Sonata</a></li>
								<b>	<li class="mt-2"><a href="#">Accessories<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b>
									<li class="mt-2"><a href="#">Backpacks</a></li>
									<li class="mt-2"><a href="#">Wallets</a></li>
									<li class="mt-2"><a href="#">Belts</a></li>
									<li class="mt-2"><a href="#">Luggage & Travel</a></li>
									<li class="mt-2"><a href="#">Frames</a></li>
									<li class="mt-2"><a href="#">Sunglasses</a></li>
									<li class="mt-2"><a href="#">Jewellery</a></li>
									<b><li class="mt-2"><a href="#">Sports & Fitness Store<i class="fas fa-caret-right ms-2 text-primary "></i></a></li></b></small>


									
								</ul>
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
					</div><!-- end row --> 
				</div> <!-- dropdown-mega-menu.// -->
			</li>
		</ul>
</small>
	</div> 
	</div><!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->


			
		

</body>
</html>