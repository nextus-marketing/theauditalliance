<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="AccoLedgers provides reliable bookkeeping, payroll, tax solutions, and financial management services for small and growing businesses. Simplify your finances with expert support you can trust.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
	<!-- Page Title -->
	<title>@yield('title')</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/favicon.png">
	<!-- Google Fonts Css-->
     <link rel="canonical" href="{{ url()->current() }}" />
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="/frontend/css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/frontend/css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<!-- Main Custom Css -->
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/frontend/css/my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE0p3FQYV0IB1RWlY0Vp3uFvT8Fj0zYtE3QF8W4rYx04Rk9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="tt-magic-cursor">

    <!-- Preloader Start -->
	<!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="/frontend/images/loader.svg" alt=""></div>
		</div>
	</div> --> 
	<!-- Preloader End -->

	<!-- Magic Cursor Start -->
	<div id="magic-cursor">
		<div id="ball">
            <div class="circle"></div>
        </div>
	</div>
	<!-- Magic Cursor End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="/frontend/my-img/logo.png" alt="Logo" style="width:220px; height:55px;">
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>                                
                                <li class="nav-item"><a class="nav-link" href="/#about">about us</a></li>
                                <li class="nav-item"><a class="nav-link" href="/#contact">Contact Us</a></li>                            
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#" class="btn-default">Call Now</a>
                        </div>
                        <!-- Let’s Start Button End -->
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
	<footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer About Start -->
                    <div class="footer-about">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <img src="/frontend/my-img/footer-logo.png" alt="footer-logo"  style="width:300px; height:90px;">
                                </div>
                                <!-- Footer Logo End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Footer Title Start -->
                                <div class="footer-title">
                                    <h2>Trusted By Businesses And Individuals Across The Country</h2>
                                </div>
                                <!-- Footer Title End -->
                            </div>
                        </div>
                    </div>
                    <!-- Footer End Start -->

                    <!-- Footer Body Start -->
                    <div class="footer-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Subscribe Newsletter Start -->
                                <div class="subscribe-newsletter">
                                    <!-- Newsletter Title Start -->
                                    <div class="newsletter-title">
                                        <h3>About Us</h3>
                                    </div>
                                    <!-- Newsletter Title End -->

                                    <!-- Newsletters Form Start -->
                                    <div class="newsletters-form">
                                        <p style="color:#ffff;"><b class="highlights">AccoLedgers </b> is a trusted accounting and financial services firm providing expert bookkeeping, tax, and payroll solutions. We help businesses and individuals stay organized, compliant, and audit-ready.</p>
                                       
                                    </div>
                                    <!-- Newsletters Form End -->
                                </div>
                                <!-- Subscribe Newsletter End -->
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-5 col-6">
                                        <!-- Footer Links Start -->
                                        <div class="footer-links">
                                            <h2>quick links</h2>
                                            <ul>
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/#about">About Us</a></li>
                                                <li><a href="/#contact">Contact Us</a></li>
                                            </ul>
                                        </div>
                                        <!-- Footer Links End -->
                                    </div>
                                    
                                    <!-- <div class="col-md-4 col-6">
                                        <div class="footer-links">
                                            <h2>Policies & Terms</h2>
                                            <ul>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms And Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div> -->

                                    <div class="col-md-5">
                                        <!-- Footer Contact Start -->
                                        <div class="footer-contact">
                                            <h2>say hello</h2>
                                            <ul>
                                                <li><a href="mailto:info@accoledgers.com">info@accoledgers.com</a></li>
                                                <li><a href="tel:+123456789">(+0) 123 456 789</a></li>
                                            </ul>
                                        </div>
                                        <!-- Footer Contact End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Body End -->

                    <!-- Copyright Footer Start -->
					<div class="footer-copyright">
                        <div class="container">
                            <div class="row">
                                <!-- Left Side: Copyright -->
                               <div class="col-md-6 text-left">
                                    <p style="color: #ffffff; align-item:center;">© 2025 AccoLedgers. All rights reserved.</p>
                                </div>

                                <!-- Right Side: Privacy Policy -->
                                <div class="col-md-6 text-md-right text-left mt-2 mt-md-0">
                                    <a href="/privacy-policy"  style="color: #ffffff;" class="me-2">Privacy Policy</a> <span class="me-2">||</span> 
                                    <a href="/terms-and-condition"  style="color: #ffffff;" >Terms And Conditions</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- Copyright Footer End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <div id="promoPopup" class="promo-popup-overlay">
    <div class="promo-popup">
        
        <!-- Close Button -->
        <span class="close-popup">&times;</span>

        <!-- Logo -->
        <div class="popup-logo">
            <img src="/frontend/my-img/logo.png" alt="logo">
        </div>

        <!-- Title -->
        <h2><span style="color:#00000;">Get Started Today</span></h2>
        <p>Your stress-free financial journey begins with Accoledgers.</p>

        <!-- Call Button (same class as requested) -->
        <a href="tel:+1234567890" class="btn-default popup-btn-bounce">
            Contact Now
        </a>

    </div>
</div>


     <script>
    // Show popup after 2 seconds
    setTimeout(function() {
        document.getElementById("promoPopup").style.display = "flex";
    }, 2000);

    // Close Popup
    document.querySelector(".close-popup").onclick = function () {
        document.getElementById("promoPopup").style.display = "none";
    };

    // Close when clicking outside the popup
    window.onclick = function (e) {
        if (e.target == document.getElementById("promoPopup")) {
            document.getElementById("promoPopup").style.display = "none";
        }
    };
</script>

<style>
    /* Popup Overlay */
/* Overlay */
.promo-popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    display: none;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(4px);
    z-index: 99999;
    animation: fadeIn 0.4s ease-out;
}

/* Popup Box */
.promo-popup {
    background: rgba(255, 255, 255, 0.97);
    width: 90%;
    max-width: 520px;
    padding: 40px 35px;
    border-radius: 28px;
    text-align: center;
    position: relative;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    animation: popupZoom 0.45s ease-in-out;
}

/* Logo */
.popup-logo {
    display: flex;
    justify-content: center;
    margin-bottom: 18px;
}

.popup-logo img {
    width: 300px;
    height: auto;
    object-fit: contain;
}

/* Title */
.promo-popup h2 {
    font-size: 30px;
    font-weight: 800;
    color: #111;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
}

/* Content text */
.promo-popup p {
    font-size: 17px;
    color: #444;
    margin-bottom: 28px;
    line-height: 1.6em;
}

/* Close button */
.close-popup {
    position: absolute;
    top: 15px;
    right: 18px;
    font-size: 30px;
    font-weight: 600;
    cursor: pointer;
    color: #666;
    transition: 0.25s ease;
}

.close-popup:hover {
    color: #ff8159;
    transform: rotate(90deg);
}

</style>


<a href="tel:+1234567890" class="call-now-btn">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <path d="M22 16.92v3a2.06 2.06 0 0 1-2.27 2 19.79 19.79 0 0 1-8.63-3.07 19.23 19.23 0 0 1-6-6A19.79 19.79 0 0 1 2 4.27 2.06 2.06 0 0 1 4 2h3a2 2 0 0 1 2 1.72 13 13 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11l-1.27 1.27a16 16 0 0 0 6 6l1.27-1.27A2 2 0 0 1 17.47 14a13 13 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
      fill="white"/>
  </svg>
</a>

<style>
    .call-now-btn {
  position: fixed;
  left: 20px;            /* Opposite side */
  bottom: 24px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #ff8159;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-decoration: none;
  box-shadow: 0 6px 15px rgba(0,0,0,0.25);
  z-index: 9999;
  transition: transform 0.2s ease, background 0.2s ease;
}

.call-now-btn:hover {
  transform: scale(1.1);
  background: #ff6a3f; /* Slight darker hover */
}

@media (max-width: 480px) {
  .call-now-btn {
    width: 45px;
    height: 45px;
    left: 15px;
    bottom: 18px;
  }
}

</style>


<!-- 1) Add this near the end of <body> -->
<button id="scrollTopBtn" class="scroll-top" aria-label="Scroll to top">
  <!-- simple up arrow SVG -->
  <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M12 4l-8 8h5v8h6v-8h5z" fill="currentColor"/>
  </svg>
</button>

<!-- 2) Styles (put in your stylesheet) -->
<style>
  .scroll-top{
    position: fixed;
    right: 20px;
    bottom: 24px;
    width: 44px;
    height: 44px;
    border-radius: 8px;
    border: none;
    display: inline-grid;
    place-items: center;
    background: rgba(0,0,0,0.7);
    color: #fff;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    transform: translateY(10px);
    opacity: 0;
    pointer-events: none;
    transition: opacity 240ms ease, transform 240ms ease;
    z-index: 9999;
  }

  .scroll-top:focus { outline: 3px solid rgba(255,255,255,0.18); }

  /* visible state */
  .scroll-top.show{
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
  }

  /* Hover/focus styles */
  .scroll-top:hover,
  .scroll-top:focus {
    background: rgba(0,0,0,0.85);
    transform: translateY(-2px);
  }

  /* Respect reduced motion */
  @media (prefers-reduced-motion: reduce) {
    .scroll-top,
    .scroll-top.show { transition: none; }
  }

  /* Small-screen tweak */
  @media (max-width: 480px) {
    .scroll-top { right: 12px; bottom: 18px; width: 40px; height: 40px; }
  }
</style>

<!-- 3) Script (put before closing </body>) -->
<script>
  (function() {
    const btn = document.getElementById('scrollTopBtn');
    const showAfter = 300; // px scrolled before button appears

    // Show/hide handler
    function onScroll(){
      if (window.scrollY > showAfter) btn.classList.add('show');
      else btn.classList.remove('show');
    }

    // Smooth scroll behavior with reduced-motion fallback
    function scrollToTop() {
      const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (prefersReduced) {
        window.scrollTo(0, 0);
      } else {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    }

    // keyboard accessibility: Enter/Space activate
    btn.addEventListener('click', scrollToTop);
    btn.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        scrollToTop();
      }
    });

    // init
    window.addEventListener('scroll', onScroll, { passive: true });
    // in case page is already scrolled on load
    onScroll();
  })();
</script>


    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
	<script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
	<script src="/frontend/demo.awaikenthemes.com/assets/js/theme-panel.js"></script>
</body>

</html>