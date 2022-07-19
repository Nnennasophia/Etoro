<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->



<!-- Mirrored from krisptrade.com/en/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 10:08:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="
{{$compd? $compd->Companyname: 'Coming soon'}}">
	<meta name="og:description" content="More than 25,000 investors from across the world rely on 
{{$compd? $compd->Companyname: 'Coming soon'}} to achieve premium returns on their invested capital. Our investors range from public and private pension funds to wealthy individuals and families to sovereign wealth funds, unions and corporations. Through an array of products and geographic specific-funds, we work to meet the dynamic needs of the world’s most sophisticated investors. ">
	<meta name="og:image" content="www.lindoptions.team/og.html">
	<meta name="og:url" content="www.krisptrade.com">
	<meta name="og:site_name" content="KrispTrade">
	<meta name="og:locale" content="en_US">
	<meta name="og:type" content="website">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - 
{{$compd? $compd->Companyname: 'Coming soon'}}</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{asset("en/assets/images/ktlogo.html")}}" />
	<link rel="apple-touch-icon-precomposed" href="{{asset("en/assets/images/ktlogo.html")}}">
	<link rel="apple-touch-icon-precomposed" href="{{asset("en/assets/images/ktlogo.html2")}}">
	<link rel="apple-touch-icon-precomposed" href="{{asset("en/assets/images/ktlogo.html")}}">	

	<!-- font awesome -->
	<link rel="stylesheet" href="{{asset("use.fontawesome.com/releases/v5.0.12/css/all.html")}}" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i%7cPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cLato:100,100i,300,300i,400,400i,700,700i,900,900i%7cOpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7cPT+Sans:400,400i,700,700i" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="{{asset("en/assets/revolution/css/settings.css")}}">
	
	<!-- Library -->
    <link href="{{asset("en/assets/css/lib.css")}}" rel="stylesheet">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" href="{{asset("en/assets/css/rtl.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("en/assets/css/my-css.css")}}">	
	<link rel="stylesheet" type="text/css" href="{{asset("en/style.css")}}">
	

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target="ownavigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div><!-- Loader /- -->

		<!-- SidePanel -->
		<div class="container-fluid bg-dark py-2">	
			<div class="row">
				<!-- <div class="col-md-6 text-center">
					<span><i class="fa fa-phone"></span></i>  
					<a href="tel:001234567899">0012 3456 7899</a>
				</div> -->
				<div class="col-md-12 text-center">						
						<div id="google_translate_element"></div>
						
						<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
						<script type="text/javascript" src="translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
				</div>
			</div>
		</div>
		<!-- SidePanel /- -->

	<!-- Header Section -->
	<header class="header_s header-fix header_s1">


		<!-- Menu Block -->
		<div class="menu-block my-0">
			<nav class="navbar ownavigation navbar-expand-lg my-0">
				<!-- Container -->
				<div class="container">
					<a class="image-logo navbar-brand" href="{{route('index')}}"><img src="{{asset("en/assets/images/etoro.png")}}" alt="Logo" /></a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="true" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="navbar-nav">
							<li class=""><a class="nav-link " title="Home" href="{{route('index')}}">HOME</a></li>
							<li class=""><a class="nav-link" title="About" href="{{route('about')}}">ABOUT</a></li>
							<li><a class="nav-link" title="About" href="{{route('ourplan')}}">OUR PLANS</a></li>
							<li class="dropdown">
								<a class="nav-link dropdown-toggle" title="Services" href="">MEMBER AREA</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{route('register')}}" >REGISTER</a></li>
									<li><a class="dropdown-item" href="{{route('login')}}">LOGIN</a></li>
								</ul>
							</li>
							<li class=""><a class="nav-link" title="About" href="{{route('faq')}}">FAQS</a></li>
							<li class=""><a class="nav-link" title="About" href="{{route('contact')}}">CONTACT US</a></li>
						</ul>
					</div>
					<div id="loginpanel-1" class="desktop-hide">
						<div class="right toggle" id="toggle-1">
							<a id="slideit-1" class="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
							<a id="closeit-1" class="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
						</div>
					</div>
				</div>
				<!-- Container /- -->
			</nav>
		</div>
		<!-- Menu Block /- -->
	</header>




  @yield('body')




  
	<!-- Footer Section -->
	<div class="footer-section">
		<!-- Footer Widget -->
		<div class="footer-widget">
			<!-- Container -->
			<div class="container">			
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<!-- Widget : About -->
						<aside class="widget widget_about">
							<h3 class="widget-title">
{{$compd? $compd->Companyname: 'Coming soon'}}</h3>
					        <!-- <a class="image-logo navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Logo" /></a>							 -->
							<p>Through the long period of working, we proved our high level and have won the trust of our partners, earned a good reputation. </p>
							<P>The Company is striving to create the most comfortable conditions for our clients and ensures the quality of work of our entire team. We take pains by all means to improve the lives of each our client, for the welfare of our customers – it’s the most important.</P>
							<p>We have created the structure with efficiency, that not many people can boast about.</p>
						
						</aside><!-- Widget : About /- -->						
					</div>
					<div class="col-lg-3 col-md-6">
						<!-- Widget: Pages -->
						<!-- Widget : About -->
						<aside class="widget widget_about">
							<h3 class="widget-title">Data Protection</h3>
							<p>All personal data which you provide the company are stored in an environment of strict confidentiality and are protected by the Law on protection of personal data. </p>
							<p>All your personal data can be used by the company only for optimization of investment interaction between 
{{$compd? $compd->Companyname: 'Coming soon'}} and investor, and also for improvement of quality of the provided services.</p>
						</aside><!-- Widget : About /- -->
					</div>
					<div class="col-lg-3 col-md-6">
						<!-- Widget: Pages -->
						<aside id="pages2" class="widget widget_pages">
							<h3 class="widget-title">Quick Links</h3>
							<ul>
								<li class="page_item"><a href="{{route('index')}}">HOME</a></li>
								<li class="page_item"><a href="{{route('about')}}">ABOUT</a></li>
								<li class="page_item"><a href="{{route('ourplan')}}">OUR PLANS</a></li>
								<li class="page_item"><a href="{{route('faq')}}">FAQS</a></li>
								<li class="page_item"><a href="{{route('contact')}}">CONTACT US</a></li>
							</ul>
						</aside><!-- Widget: Pages /- -->
					</div>
					<div class="col-lg-3 col-md-6">
						<!-- Widget : Contact Info -->
						<aside class="widget widget_contact-info">
							<h3 class="widget-title">Contact info</h3>
							<div class="wid-cnt-detail">
                                    <p><i class="fa fa-phone"></i><a href="{{$compd? $compd->Companyname: 'Coming soon'}}">{{$compd? $compd->Companyname: 'Coming soon'}}</a></p>
                                    <p><i class="fa fa-envelope"></i><a href="{{$compd? $compd->Companyname: 'Coming soon'}}">{{$compd? $compd->Companyname: 'Coming soon'}}</a></p>
								<p><i class="fa fa-map-marker"></i>{{$compd? $compd->Companyname: 'Coming soon'}}</p>
							</div>
						</aside><!-- Widget : Contact -->
					</div>
				</div><!-- Row /- -->
                <hr width="100%t"></hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 footer-about footer-col ">
                        <aside class="widget widget_pages">
                         <h3 class="widget-title">Quick Links Buy bitcoin EUROPE</h3>
                        <ul class="footer-nav">
                            <li><a href="https://coinmama.com/">Coin Mama</a></li>
                            <li><a href="https://coinfxinvestment.com/en/https/paybis.html">PayBis</a></li>
                            <li><a href="https://coinbase.com/">Coin Base</a></li>
                            <li><a href="https://luno.com/">Luno</a></li>
                            <li><a href="https://xcoin.com/">Xcoin</a></li>
                            <li><a href="https://kraken.com/">kraken</a></li>
                            <li><a href="https://binance.com/">Binance</a></li>
                            <li><a href="https://bit2me.com/">Bit2me</a></li>
                        </ul>
                    </aside>
                    </div>
                    <div class="col-md-4 col-sm-4 footer-about footer-col">
                    <aside class="widget widget_pages">
                         <h3 class="widget-title">Quick Links Buy bitcoin AMERICA</h3>
                        <ul class="footer-nav">
                            <li><a href="https://coinmama.com/">Coin Mama</a></li>
                            <li><a href="https://coinfxinvestment.com/en/https/paybis.html">PayBis</a></li>
                            <li><a href="https://coinbase.com/">Coin Base</a></li>
                            <li><a href="https://luno.com/">Luno</a></li>
                            <li><a href="https://xcoin.com/">Xcoin</a></li>
                            <li><a href="https://localbitcoins.com/">Local Bitcoins</a></li>
                            <li><a href="https://cex.io/">cex</a></li>
                        </ul>
                    </aside>
                    </div>
                    <div class="col-md-4 col-sm-4 footer-about footer-col ">
                    <aside class="widget widget_pages">
                         <h3 class="widget-title">Quick Links Buy bitcoin OTHERS</h3>
                        <ul class="footer-nav">
                            <li><a href="https://indodax.com/">Indodax</a></li>
                            <li><a href="https://coinfxinvestment.com/en/https/coinhako.html">Coinhako</a></li>
                            <li><a href="https://wazirx.com/">Wazirx</a></li>
                            <li><a href="https://zebpay.com/">Zebpay</a></li>
                        </ul>
                    </aside>
                    </div>

			</div><!-- Container /- -->
		</div><!-- Footer Widget /- -->
		<div class="bottom-footer">
			<!-- Container -->
			<div class="container">
				<div class="ftr-content">
					<p><i class="fa fa-copyright"></i> 
{{$compd? $compd->Companyname: 'Coming soon'}}. All Rights Reserved</p>
					<a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>
				</div>
			</div><!-- Container /- -->
		</div>
	</div>
	<!-- Footer Section /- -->
	
	<!-- JQuery v1.12.4 -->
	<script src="{{asset("en/assets/js/jquery.js")}}"></script>	
	<script src="{{asset("en/assets/js/jquery-1.12.4.min.js")}}"></script>
	

	<!-- Library - Js -->
	<script src="{{asset("en/assets/js/popper.min.js")}}"></script>
	<script src="{{asset("en/assets/js/lib.js")}}"></script>
	
	<!-- REVOLUTION JS FILES -->
	<script src="{{asset("en/assets/revolution/js/jquery.themepunch.tools.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/jquery.themepunch.revolution.min.js")}}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.carousel.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
	<script src="{{asset("en/assets/revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
	
	<!-- Library - Theme JS -->
    <script src="{{asset("en/assets/js/functions.js")}}"></script>
	<script src="{{asset("en/assets/js/slider-js.js")}}"></script>
	<script src="{{asset("en/assets/js/recents.js")}}"></script>

<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e78822c467c0e0ca3fcd24f3d89b8c39f3792876';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='../../www.smartsuppchat.com/loaderd41d.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
	
	
	
</body>


<!-- Mirrored from krisptrade.com/en/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 10:08:37 GMT -->
</html>