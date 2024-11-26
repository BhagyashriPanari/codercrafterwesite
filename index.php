<?php
include('database.inc.php');
/*$msg="";*/
if(isset($_POST['submit']))

{
//getting the post values
$name=$_POST['name'];
$email_address=$_POST['email'];
$contact=$_POST['mobile'];
$message=$_POST['message'];


//query for data insertion
mysqli_query($con,"insert into contact_us(name,email,mobile,comment) values('$name','$email_address','$contact','$message')");
/*$msg="Thanks message";*/
	
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr></tr><tr><td>Mobile</td><td>$contact</td></tr><tr><td>Comment</td><td>$message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="codecrafterservices@gmail.com";
	$mail->Password="ojelivqfeclkemsv";
	$mail->SetFrom("codecrafterservices@gmail.com");
	$mail->addAddress("codecrafterservices@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	//echo $message;
}
?>



<!DOCTYPE html>
<html lang="eng">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Code Crafter Services</title>
  <meta content="" name="Technoit - IT Solutions & Business Services Multipurpose Responsive Website Template">
  <meta name="description"
    content="Technoit - IT Solutions & Business Services Multipurpose Responsive Website Template">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="" name="ZRTHEMES">

  <!-- Favicons -->
  <link href="assets/images/logo.png" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&amp;display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/stylesheets/styles.css" rel="stylesheet">


</head>

<body>

  <header id="header" class="header d-flex align-items-center sticked stikcy-menu">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/images/logo.png" alt="logo">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" class="">Home</a></li>
          <li><a href="#services" class="">Services</a></li>
          <li><a href="#featured" class="">About Us</a></li>
          <li><a href="#portfolio" class="">Our Work</a></li>
          <!-- <li><a href="#pricing" class="">Our Plans</a></li> -->
          <li><a href="#testimonials" class="">Testimonials</a></li>
          <li><a href="#team" class="">Team</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="packages.html">Pricing</a></li>
              <li><a href="faqs.html">FAQs</a></li>
              <li><a href="privacy-policy.html">Terms &amp; Conditions</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="blogs.html">Blogs</a></li>
              <li><a href="blog-details.html">Blog Detail Page</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="blogs.html">News</a></li> -->
        </ul>
      </nav><!-- .navbar -->
      <a href="#contact" class="btn-get-started hide-on-mobile">Let's Connect</a>
      <button id="darkmode-button"><i class="bi bi-moon-fill"></i></button>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!-- End Header -->

  <!--  Hero Section  -->
  <section id="hero" class="hero sticked-header-offset">

    <div id="particles-js"></div>
    <div id="repulse-circle-div"></div>
    <div class="container position-relative">
      <div class="row gy-5 aos-init aos-animate">
        <div class="col-lg-7 offset-lg-5 dark-bg order-lg-1 d-flex flex-column justify-content-start text-left caption">
          <h2 data-aos="fade-up">Delivering Superior Services <span>IT Solutions</span><span class="circle"
              data-aos="fade-right" data-aos-delay="800">.</span></h2>
          <p data-aos="fade-up" data-aos-delay="400">Empower your business to reach the world—with Code Crafter's expert
            care.
          </p>
          <div class="social" data-aos="fade-up" data-aos-delay="600">
            <a href="https://x.com/ManoramaBa47824"><i class="bi bi-twitter"></i></a>
            <!-- <a href="https://x.com/ManoramaBa47824"><i class="bi bi-google"></i></a> -->
            <!-- <a href="#"><i class="bi bi-facebook"></i></a> -->
            <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
            <a href="https://www.instagram.com/code_crafters6964?igsh=MWNmODA0eWhrMDZ6OQ=="><i class="bi bi-instagram"></i></a>
          </div>
          <!-- <div class="d-flex justify-content-start">
            <a href="#contact" class="btn-get-started mr-20" data-aos="fade-up" data-aos-delay="800">Get Quotes</a>
            <a href="#services" class="btn-get-started" data-aos="fade-up" data-aos-delay="1000">Get Started</a>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <!-- Start Service Section -->
    <div id="services" class="section mt-3">
      <div class="top-icon-box position-relative">
        <div class="container position-relative">
          <div class="row gy-4">

            <h2 class="text-center color fw-bolder">Our Services</h2>
            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><img src="assets/images/icons/service-design.svg" alt="icon"></div>
                <h4 class="title">
                  <p style="color: #009fc9;">Web App Building</p>
                </h4>
                <p>Our team specializes in creating custom web applications tailored to meet your business needs,
                  ensuring a seamless and user-friendly experience for your audience</p>
              </div>
            </div>
            <!--End Icon Box -->

            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><img src="assets/images/icons/service-hosting.svg" alt="icon"></div>
                <h4 class="title">
                  <p style="color: #009fc9;">Web Hosting</p>
                </h4>
                <p>Reliable and secure web hosting solutions to keep your website running smoothly, with minimal
                  downtime and optimal performance</p>
              </div>
            </div>
            <!--End Icon Box -->

            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><img src="assets/images/icons/service-social.svg" alt="icon"></div>
                <h4 class="title">
                  <p style="color: #009fc9;">Software Development</p>
                </h4>
                <p>We deliver high-quality software solutions designed to streamline processes, enhance productivity,
                  and drive business growth</p>
              </div>
            </div>
            <!--End Icon Box -->

            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><img src="assets/images/icons/service-seo.svg" alt="icon"></div>
                <h4 class="title">
                  <p style="color: #009fc9;">ERP Solutions</p>
                </h4>
                <p>Optimize your business operations with our comprehensive ERP solutions, tailored to integrate
                  seamlessly with your existing systems</p>
              </div>
            </div>
            <!--End Icon Box -->


            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><img src="assets/images/icons/service-cloud.svg" alt="icon"></div>
                <h4 class="title">
                  <p style="color: #009fc9;">Cloud Server</p>
                </h4>
                <p>Leverage the power of cloud computing with scalable and secure cloud server solutions, providing
                  flexibility and remote access to your data</p>
              </div>
            </div>
            <!--End Icon Box -->


            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><img src="assets/images/icons/service-secure.svg" alt="icon"></div>
                <h4 class="title">
                  <p style="color: #009fc9;">Data Secuity</p>
                </h4>
                <p>Protect your valuable data with our advanced security protocols, ensuring confidentiality, integrity,
                  and availability across all your platforms</p>
              </div>
            </div>
            <!--End Icon Box -->

          </div>
        </div>
      </div>
    </div>
    <!-- End Service Section -->

    <!-- Featured -->
    <section>
      <div class="container" id="featured">
        <div class="section-header" data-aos="fade-up" data-aos-delay="100">
          <h2 class="fw-bolder">Why Choose Us</h2>
          <!-- <p>Lorem ipsum dolor sit amet</p> -->
        </div>
        <div class="row">
          <!-- start  left -->
          <div class="col-md-4 left">
            <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
              <div class="description">
                <h4>Experience</h4>
                <p>With years of industry expertise, we bring a deep understanding of client needs and innovative
                  solutions to every project.</p>
              </div>
              <div class="icon">
                <img src="assets/images/icons/icon-1.svg" alt="icon">
              </div>
            </div>

            <div class="list-wrap" data-aos="fade-up" data-aos-delay="400">
              <div class="description">
                <h4>Products</h4>
                <p>Our product line is designed to provide cutting-edge solutions that empower businesses to succeed in
                  a digital-first world.</p>
              </div>
              <div class="icon">
                <img src="assets/images/icons/icon-2.svg" alt="icon">
              </div>
            </div>


            <div class="list-wrap" data-aos="fade-up" data-aos-delay="500">
              <div class="description">
                <h4>Approach</h4>
                <p>Our client-centered approach ensures that every solution is tailored to meet specific needs,
                  delivering maximum impact and value.</p>
              </div>
              <div class="icon">
                <img src="assets/images/icons/icon-3.svg" alt="icon">
              </div>
            </div>
          </div>
          <!-- end  left -->

          <!-- start  center -->
          <div class="col-md-4 p-4 p-sm-5 center">
            <div class="list-center-wrap" data-aos="fade-up" data-aos-delay="100">
              <div class="center-icon">
                <img src="assets/images/features.jpg" alt="icon">
              </div>
            </div>
          </div>
          <!-- end  center -->
          <!-- start  right -->
          <div class="col-md-4 right">
            <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
              <div class="icon">
                <img src="assets/images/icons/icon-4.svg" alt="icon">
              </div>
              <div class="description">
                <h4>Pricing</h4>
                <p>We offer competitive pricing structures without compromising on quality, providing you with
                  cost-effective solutions.</p>
              </div>
            </div>

            <div class="list-wrap" data-aos="fade-up" data-aos-delay="200">
              <div class="icon">
                <img src="assets/images/icons/icon-5.svg" alt="icon">
              </div>
              <div class="description">
                <h4>Delivery</h4>
                <p>Efficient and timely delivery is at the heart of our operations, ensuring that every project meets
                  deadlines and exceeds expectations.</p>
              </div>
            </div>


            <div class="list-wrap" data-aos="fade-up" data-aos-delay="500">
              <div class="icon">
                <img src="assets/images/icons/icon-6.svg" alt="icon">
              </div>
              <div class="description">
                <h4>Support</h4>
                <p>Our dedicated support team is always ready to assist you, providing reliable solutions to any
                  challenges you may face.</p>
              </div>
            </div>
          </div>
          <!-- end  right -->
        </div>

      </div>
    </section>
    <!-- Featured -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2 class="fw-bolder">Our Work</h2>
    </div>
    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
      data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
      <div>
        <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">E-commerce</li>
          <li data-filter=".filter-product">POS</li>
          <li data-filter=".filter-branding">CRM</li>
        </ul><!-- End Portfolio Filters -->
      </div>

      <div class="row gy-4 portfolio-container">
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/Adarsh.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/Aura.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/civilEnginerring.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-books">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/harmony.png" class="img-fluid portfolio-image" alt="">
          </div>
        </div> -->
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/Kanku.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/KDLC.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/SeventhSense.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/ShreeHospital.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/SonaGroup.jpg" class="img-fluid portfolio-image" alt="">
          </div>
        </div>
        <!-- Portfolio Item -->
        <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
            <img src="assets/images/portfolio/Takshshila.png" class="img-fluid portfolio-image" alt="">
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>
    <!-- End Portfolio Section -->

    <!-- Start Pricing Section -->
    <!-- <div id="pricing" class="pricing section">
      <div class="container-fluid">
        <div class="container">
          <div class="section-header">
            <h2 class="fw-bolder">Our Plans</h2>
            
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="title border-2 border-bottom mb-2">
                  <h2 class="text-center">Basic</h2>
                </div>
              
                <div class="option">
                  <ul>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Static Website</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Maintenance</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Custome UI Design</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Single Page Website</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Multi-pages Websites</li>
                  </ul>
                </div>
               
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card text-center">
                <div class="title border-2 border-bottom mb-2">
                  <h2 class="text-center">Standard</h2>
                </div>
                
                <div class="option">
                  <ul>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Dynamic Pages With Admin Panel</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Domain and Hosting Free For 1 Year</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 5 Business Email Id's</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free SSL Certification</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Maintenance</li>
                  </ul>
                </div>
              
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card text-center">
                <div class="title border-2 border-bottom mb-2">
                  <h2 class="text-center">Premium</h2>
                </div>
                
                <div class="option">
                  <ul>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Basic + Standard</li>
                   <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited Products, Categories and SubCategories</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Payment Gateway</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Checkouts</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <!--  Testimonials Section  -->
    <section id="testimonials" class="testimonials">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2 class="fw-bolder">Testimonials</h2>
      <p class="happy-clients">Our Happy Clients</p>
    </div>

    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="info-box">
                <h3>Mahalaxmi Sandwich</h3>
                <h4>Sandwich Store</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                I am beyond impressed with Code Crafter’s work. They brought my vision to life with a sleek, modern website.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="info-box">
                <h3>Kanku</h3>
                <h4>Kanku E-Commerce</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                The team at Code Crafter truly understands e-commerce. My customers find it easy to navigate, and I’m thrilled with the results!
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="info-box">
                <h3>Tejas Hande</h3>
                <h4>CMS Project</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                The CMS designed for my centring business is outstanding. It makes managing everything effortless.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <div class="info-box">
                <h3>Aura Clinic</h3>
                <h4>Healthcare Services</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Our clinic’s website is a game-changer! It’s professional and makes booking appointments seamless.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

    <!-- End Testimonials Section -->

    <!--  Start Counter Section  -->
    <!-- <div id="stats-counter" class="call-to-action stats-counter section">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-4">
            <div class="stats-item d-flex flex-column align-items-center">
              <div class="icon circle"><img src="assets/images/icons/happy-clients.svg" alt="icon"></div>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><span>Happy Clients</span> consequuntur quae diredo</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="stats-item d-flex flex-column align-items-center">
              <div class="icon circle"><img src="assets/images/icons/complete-projects.svg" alt="icon"></div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><span>Completed Projects</span> adipisci atque quia aut</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="stats-item d-flex flex-column align-items-center">
              <div class="icon circle"><img src="assets/images/icons/hours-support.svg" alt="icon"></div>
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><span>Hours Of Support</span> aut commodi quaerat</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--  End Counter Section  -->

    <!--  Clients Section  -->
    <div id="clients" class="clients section">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center logos">
            <div class="swiper-slide"><img src="assets/images/clients/Final_aura_logo-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/HDS_Final.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/Mayur_FinalLogo.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/seventh_Final_logo.jpg" class="img-fluid" alt=""></div>
            <!-- <div class="swiper-slide"><img src="assets/images/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-8.png" class="img-fluid" alt=""></div> -->
          </div>
        </div>

      </div>
    </div>
    <!-- End Clients Section -->


    <!--  Our Team Section  -->
    <section id="team" class="team sections-bg py-5">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center mb-5">
      <h2 class="fw-bold display-5">Our Outstanding Team</h2>
      <p class="text-muted">Meet the people who make everything possible.</p>
    </div>

    <div class="row justify-content-center">
      <!-- Team Member: Manorama Banchhode -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/manorama.jpeg" alt="Manorama Banchhode" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Manorama Banchhode</h5>
            <p class="text-muted">CEO</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Yogesh Banchhode -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="150">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/yogesh.jpeg" alt="Yogesh Banchhode" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Yogesh Banchhode</h5>
            <p class="text-muted">Sr. Manager</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Shubham Lohar -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/shubham.jpeg" alt="Shubham Lohar" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Shubham Lohar</h5>
            <p class="text-muted">Sr. Project Manager</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Bhagyashri Panari -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="250">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/bhagyashri.jpeg" alt="Bhagyashri Panari" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Bhagyashri Panari</h5>
            <p class="text-muted">Sr. Team Leader</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Vaishnavi Karpe -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/hr.jpeg" alt="Vaishnavi Karpe" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Vaishnavi Karpe</h5>
            <p class="text-muted">HR</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Shramik Masti -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="350">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/shramik.png" alt="Shramik Masti" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Shramik Masti</h5>
            <p class="text-muted">Jr. Backend Developer</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Abrar Mirje -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/abrar.jpeg" alt="Abrar Mirje" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Abrar Mirje</h5>
            <p class="text-muted">Jr. Backend Developer</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Aishwarya Yadav -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="450">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/aishwarya.jpeg" alt="Aishwarya Yadav" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Aishwarya Yadav</h5>
            <p class="text-muted">Jr. Frontend Developer</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Jilani Pathan -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/jilani.jpeg" alt="Jilani Pathan" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Jilani Pathan</h5>
            <p class="text-muted">Jr. Frontend Developer</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Shifa Pathan -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="550">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/shifa.jpeg" alt="Shifa Pathan" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Shifa Pathan</h5>
            <p class="text-muted">Jr. WordPress Developer</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Prashant Patil -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="600">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/ppwhite.png" alt="Prashant Patil" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Prashant Patil</h5>
            <p class="text-muted">Jr. UI Designer</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Neha Thombare -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="650">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/neha.png" alt="Neha Thombare" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Neha Thombare</h5>
            <p class="text-muted">Jr. Business Analyst</p>
          </div>
        </div>
      </div>

      <!-- Team Member: Gitanjali Naidu -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="700">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/gita.jpeg" alt="Gitanjali Naidu" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Gitanjali Naidu</h5>
            <p class="text-muted">Jr. Business Analyst</p>
          </div>
        </div>
      </div>
<!-- Team Member: nadim -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="700">
        <div class="team-member card shadow border-0 text-center">
          <div class="team-image position-relative">
            <img src="assets/images/teamImages/nadim.jpeg" alt="Gitanjali Naidu" class="img-fluid rounded-circle mx-auto team-photo">
          </div>
          <div class="card-body">
            <h5 class="fw-bold">Nadim Devale</h5>
            <p class="text-muted">Marketing Head</p>
          </div>
        </div>
      </div>

    </div>
</div>
   
</section>


    <!-- End Our Team Section -->


    <!--  Frequently Asked Questions Section  -->
    <!-- <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>FAQ's</h2>
          <p>We are here to make your business much smoother</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    What is web domain and hosting?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Which server is best for websites linux or windows?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Google cloud or Amazon server which one is best and fast?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Why Organic SEO is important for all businesses?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Frequently Asked Questions Section -->


    <!--  Call To Action Section  -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center aos-init aos-animate" data-aos="zoom-out">
        <div class="row gy-4">
          <div class="col-lg-12">
            <h3>Let's Discuss your Projects</h3>
            <p>We pride ourselves with our ability to perform and deliver results. Use the form below to discuss your
              project needs with our team, we will get back asap</p>
            <a class="cta-btn" href="#contact">Conatct Us</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action Section -->



    <!-- <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Blogs</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Domain & Hosting</p>
              <h2 class="title">
                <a href="blog-details.html">How to host website on any hosting provider?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">William Bla</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Feb 1, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Advertisement</p>
              <h2 class="title">
                <a href="blog-details.html">How to create add on google adwords?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Jobi Ret</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Oct 5, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Marketing</p>
              <h2 class="title">
                <a href="blog-details.html">What is digital marketing and why is important?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Main Dow</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Dec 22, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div>

        </div>

      </div>
    </section> -->

    <!-- Start Contact Section -->
    <div id="contact" class="contact-section section">
      <div class="section-header">
        <h2 class="fw-bolder">Contact Us</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12" data-aos="fade-right">
            <div class="contact-information-box-3">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6 class="fw-bolder">Address:</h6>
                      <p>Vypari Peth, near Apple Hospita, E-ward, Shahupuri, Kolhapur, Maharashtra 416003</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6 class="fw-bolder">Phone:</h6>
                      <p>9518396964</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6 class="fw-bolder">Email:</h6>
                      <p>info@code-crafter.in</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12" data-aos="fade-left">
  <div class="form-container-box">
    <form id="main-contact-form" name="contact-form" method="post" action="index.php">
      <div class="row">
        <!-- Name Input -->
        <div class="col-sm-6 mb-3">
          <div class="form-group">
            <input name="name" class="form-control" placeholder="Name" type="text" required>
          </div>
        </div>
        <!-- Email Input -->
        <div class="col-sm-6 mb-3">
          <div class="form-group">
            <input name="email" class="form-control" placeholder="Email Address" type="email" required>
          </div>
        </div>
      </div>
      <!-- Contact Number -->
      <div class="form-group mb-3">
        <input name="mobile" class="form-control" placeholder="Contact No." type="text" maxlength="10" required>
      </div>
      <!-- Message -->
      <div class="form-group mb-3">
        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
      </div>
      <!-- Submit Button -->
      <div>
        <center>
          <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
          <div class="messages">
                        <div class="alert alert alert-success alert-dismissable alert-dismissable hidden"
                          id="msgSubmit"><button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button> Thank You! your message has been sent. </div>
                      </div>
        </center>
      </div>
    </form>
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- End Contact Section -->


  </main><!-- End #main -->

  <!--  Footer  -->
  <footer id="footer" class="footer-section">
    <div class="container">
      <div class="footer-content">
        <!-- <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index-2.html" class="logo d-flex align-items-center">
                  <img style="margin-left: 90px;" src="assets/images/logo.png" alt="logo">
                </a>
              </div>

              <div class="footer-social-icon mx-4 text-center">
                <a href=" #" class="twitter fs-5"><i class="bi bi-twitter"></i></a>
                <a href="#" class="faceboo fs-5"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram fs-5"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin fs-5"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>



          <div class="col-xl-4 col-lg-4 col-md-6 mb-50 mt-3">
            <div class="contact-widget footer-widget">
              <div class="footer-widget-heading">
                <h3 class="fw-bolder text-center">Contacts</h3>
              </div>
              <div class=" footer-text">
                <p><i class="bi bi-geo-alt-fill mr-15"></i> Vypari Peth, near Apple Hospita, E-ward, Shahupuri,
                  Kolhapur,
                  Maharashtra 416003</p>
                <p><i class="bi bi-telephone-inbound-fill mr-15"> 9518396964</i></p>
                <p><i class="bi bi-envelope-fill mr-15"></i> info@code-crafter.in</p>
              </div>
            </div>

          </div>
        </div> -->
        <div class="row">
          <!-- <div class="col-xl-6 col-lg-6 text-left text-lg-left"> -->
          <div>
            <p style="color: #b9b9b9;">© 2024 - Designed by Code Crafter Services</a>
            </p>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center active">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->

  <script src="assets/javascripts/jquery.min.js"></script>
  
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/javascripts/plugins.js"></script>
  <script src="assets/javascripts/purecounter_vanilla.js"></script>
  <script src="assets/javascripts/validator.min.js"></script>
  <script src="assets/javascripts/contactform.js"></script>
  <script src="assets/javascripts/particles.min.js"></script>
  <script src="assets/javascripts/script.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/javascripts/main.js"></script>

  

</body>
<!-- Mirrored from zrtechsolutions.com/demo/html/technoit/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 12:37:03 GMT -->

</html>