<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,intial-scale1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>cultural heritage and traditions of INDIA</title>


<!-- Icons -->

<link rel="stylesheet" href="./css/all.css">


<!-------- Owl Carousel----------->
<link rel="stylesheet" href="./css/owl.theme.default.min.css">
<link rel="stylesheet" href="./css/owl.carousel.min.css">
<!-- Custom Style -->

<link rel="stylesheet" href="./css/Style.css">

<!-- -----------AOS------------->
<link rel="stylesheet" href="./css/aos.css">

</head>


<body>

<!-- -----------Navigation-------------- -->

<nav class="nav">
 <div class="nav-menu flex-row">
  <div class="nav-brand">
   <a href="#"class="text-gray">India Tour</a>
  </div>
  <div class="toggle-collapse">
   <div class="toggle-icons">
    <i class="fa fa-bars"></i>
   </div>
  </div>
  <div>
  <ul class="nav-items">
  
    <li class="nav-link">
      <a href="#">Home</a>
    </li>
    
    <!-- <li class="nav-link">
      <a href="#">Ctegory</a>
    </li> -->
    
    <!-- <li class="nav-link">
      <a href="#">Pages</a>
    </li> -->
    
    <li class="nav-link">
      Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
    </li>
      <li class="nav-link">
      <a href="logout.php">Logout</a>
    </li>
    
    <!-- <li class="nav-link">
      <a href="contact.html" href="style2.css">Contact Us</a>
    </li> -->
  </ul>
  </div>
  <div class="social">
    <a href="https://www.facebook.com"><i class="fab fa-facebook" style="font-size: 1.5rem;"></i></a>
    <a href="https://www.instagram.com"><i class="fab fa-instagram" style="font-size: 1.5rem;"></i></a>
    <a href="#"><i class="fab fa-twitter" style="font-size: 1.5rem;"></i></a>
    <a href="https://www.youtube.com"><i class="fab fa-youtube" style="font-size: 1.5rem;"></i></a>
    
    
  
  </div>
 </div>
</nav>

<!-- ----x-------Navigation--------x------ -->

<!-- -----------Main site section------------- -->

<main>

<!-- --------------site title----------------- -->

<section class="site-title">
<div class="site-background" data-aos="fade-up" data-aos-delay='100'>
</section>
<!-- 
 <h3>Tours and Travel</h3>
 <h1>Amazing places in India</h1>
 <button class="btn">Explore</button>
</div>
-->


<!-- --------x------site title-----------x------ -->

<!-- -------------Site 2nd Title-------------------->

<section>
  <div class="title">
    <h2><i class="fas fa-spa"></i>Culture of India</h2>
  </div>
    <div class="title-l">
      <p>The culture of India refers collectively to the thousands of distinct and unique cultures of all religions and communities present in India. There are 28 states and 8 Union territories in the country. From the largest to the smallest, each State/UT of India has a unique demography, history and culture, dress, festivals, language etc.India's culture is among the world's oldest; civilization in India began about 4,500 years ago.</p>
    </div>
    
</section>



<!-- -------------Site 2nd Title-------------------->


<!-----------------Information setion-------------->

<section>
  <div class="ss">
    <h2><i class="fas fa-map-marked-alt"></i>28 States Of India </h2>
  </div>
  <div class="blog">
     <div class="container">
       <div class=" oel-one owl-carousel owl-theme blog-post" data-options="autoplay: 1000; step:1; mode: carousel;">
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Andhra Pradesh/places/Vishakhapatnam's Beach Line, Marine Drive and Cityscape View[2].jpg" alt="Post-1">
            
            <div class="blog-title">
              <h4>Andhra Pradesh</h4>
              <h5>(Hydrabad)</h5>
             <a href="./AndP.php" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Maharashtra/mumbia.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Maharashtra</h4>
              <h5>(Mumbai)</h5>
              <a href="./Maha.php" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Arunachal Prdesh/anini.jpg" alt="Post-1" >
            <div class="blog-title">
              <h4>ArunachalPradesh</h4>
              <h5>(Itanagar)</h5>
              <a href="./AruP.php" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Chhattisgarh/chitrakot-waterfalls.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Chhattisgarh</h4>
              <h5>(chitrakot)</h5>
              <a href="./Chhat.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Assam/Dispur.jpg" alt="Post-1"  height="205">
            <div class="blog-title">
              <h4>Assam</h4>
              <h5>(Dispur)</h5>
              <a href="./Assam.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
          <img src="./images/Bihar/Patna.jpg" alt="Post-1" height="205">
          <div class="blog-title">
            <h4>Bihar</h4>
            <h5>(Patna)</h5>
            <a href="./Bihar.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
            <span>5minutes</span>
          </div>
         </div>
         
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
          <img src="./images/Goa/panaji.jpeg" alt="Post-1" height="205">
          <div class="blog-title">
            <h4>Goa</h4>
            <h5>(Panaji)</h5>
            <a href="./Goa.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
            <span>5minutes</span>
          </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
        <img src="./images/Gujarat/gandhi.jpg" alt="Post-1" height="205">
        <div class="blog-title">
          <h4>Gujarat</h4>
          <h5>(Gandhinagar)</h5>
          <a href="./Guj.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
          <span>5minutes</span>
        </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Haryana/Chandigarh.jpeg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Haryana</h4>
              <h5>(Chandigarh)</h5>
              <a href="./Har.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Himachal Pradesh/shimla.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Himachal Pradesh</h4>
              <h5>(Shimla)</h5>
              <a href="./Him.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content"data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Jharkhand/Ranchi-Main.png" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Jharkhand</h4>
              <h5>(Ranchi)</h5>
              <a href="./Jhar.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content"data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Karnataka/bangalore.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Karnataka</h4>
              <h5>(Bangalore)</h5>
              <a href="./Karn.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Kerala/Thlruvananthapuram.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Kerala</h4>
              <h5>(Thlruvananthapuram)</h5>
              <a href="./Kera.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Madhya Pradesh/Bhopal.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Madhya Pradesh</h4>
              <h5>(Bhopal)</h5>
              <a href="./Madhy.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content"data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Manipur/Imphal.jpeg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Manipur</h4>
              <h5>(Imphal)</h5>
              <a href="./Manipur.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Meghalaya/shillong-peak-shilong2-meghalaya-attr-hero.jpeg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Meghalaya</h4>
              <h5>(Shillong)</h5>
              <a href="./Megha.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Mizoram/Aizawl.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Mizoram</h4>
              <h5>(Alzawl)</h5>
              <a href="./Mizoram.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Nagaland/Kohima.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Nagaland</h4>
              <h5>(Kohima)</h5>
              <a href="./Naga.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Odisha/bhubaneshwar.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Odisha</h4>
              <h5>(bhubaneshwar)</h5>
              <a href="./Odish.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Punjab/chandigarh.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Punjab</h4>
              <h5>(Chandigarh)</h5>
              <a href="./Punjab.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Rajasthan/jaypur.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Rajasthan</h4>
              <h5>(jaipur)</h5>
              <a href="./Rajasthan.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Sikkim/Gangtok.jpeg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Sikkim</h4>
              <h5>(Gangtok)</h5>
              <a href="./Sikki.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Tamil Nadu/chennai-tripnhalt.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Tamil Nadu</h4>
              <h5>(Chennai)</h5>
              <a href="./Tamilnadu.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Telangana/Hyderabad-And-Vicinity.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Telangana</h4>
              <h5>(Hydrabad)</h5>
              <a href="./Telanga.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'> 
            <img src="./images/Tripura/Agartala.jpeg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Tripura</h4>
              <h5>(Agartala)</h5>
              <a href="./Tripura.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Uttarakhand/lucknow.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Uttarakhand</h4>
              <h5>(lucknow)</h5>
              <a href="./Uttarakh.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Uttar Pradesh/tag.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>Uttar Pradesh</h4>
              <h5>(Agra)</h5>
              <a href="./Uttarapra.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
         <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/West Bengal/DARJEELING.jpg" alt="Post-1" height="205">
            <div class="blog-title">
              <h4>West Bengal</h4>
              <h5>(Darjeeling)</h5>
              <a href="./Westba.html" target="_blank" style="border:0;"><button class="btn btn-blog" style="border: 0;">Explore</button></a>
              <span>5minutes</span>
            </div>
         </div>
            <!-- Union Territories-->
         <!-- <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
                <h4>Andaman and Nicobar Island</h4>
                <h5>(Port Blair)</h5>
                  <button class="btn btn-blog">Explore</button>
              <span>5minutes</span>
            </div>
          </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
              <h4>Chandigarh</h4>
              <h5>(Chandigarh)</h5>
                <button class="btn btn-blog">Explore</button>
              <span>5minutes</span>
            </div>
          </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
                <h4>Dadra and Nagar Haveli and Daman & Diu</h4>
                <h5>(Panaji)</h5>
                  <button class="btn btn-blog">Explore</button>
                <span>5minutes</span>
              </div>
            </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
                <h4>The Goverment of NCT of Delhi</h4>
                <h5>(Delhi)</h5>
                  <button class="btn btn-blog">Explore</button>
                  <span>5minutes</span>
              </div>
            </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
                <h4>Jammu & Kashmir</h4>
                <h5>(Srinagar-S',Jammu-W')</h5>
                  <button class="btn btn-blog">Explore</button>
                <span>5minutes</span>
              </div>
            </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
                <h4>Ladak</h4>
                <h5>(Leh)</h5>
                    <button class="btn btn-blog">Explore</button>
                <span>5minutes</span>
              </div>
            </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
                <h4>Lakshadweep</h4>
                <h5>(Kavaratti)</h5>
                  <button class="btn btn-blog">Explore</button>
                <span>5minutes</span>
               </div>
            </div>
          <div class="blog-content" data-aos="flip-left" data-aos-delay='200'>
            <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="Post-1">
              <div class="blog-title">
              <h4>Puducherry</h4>
              <h5>(Puducherry)</h5>
                <button class="btn btn-blog">Explore</button>
              <span>5minutes</span>
            </div>
          </div> -->
        </div>
        <div class="owl-navigation">
          <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
          <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
        </div>
     </div>

     
  </div>
</section>




<!-----------------Information setion-------------->

</main>

<!------------------Footer------------------------>

<footer class="footer">
 <div class="container">
   <div class="about-us" data-aos="fade-right" data-aos-delay="200">
    <h2>About Us</h2>
    <h3>India is one of the oldest civilizations in the world with a kaleidoscopic variety and rich cultural heritage. It has achieved all-round socio-economic progress since Independence. As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity. Bounded by the Great Himalayas in the north, it stretches southwards and at the Tropic of Cancer, tapers off into the Indian Ocean between the Bay of Bengal on the east and the Arabian Sea on the west</h3>
   </div>
  
   <div class="instagram" data-aos="fade-left" data-aos-delay="200">
    <h2>Instagram</h2>
    <div class="flex-row">
      <img src="./images/Assam/Assam.jpg" alt="insta1">
      <img src="./images/Arunachal Prdesh/anini.jpg" alt="insta2">
      <img src="./images/Bihar/shutterstock_308393690_20191104172653.jpg" alt="insta3">

    </div>
    <div class="flex-row">
      <img src="./images/heritage.webp" alt="insta4">
      <img src="./images/temples.webp" alt="insta5">
      <img src="./images/taj.jpg" alt="insta6">

    </div>
   </div>
   <div class="follow" data-aos="fade-left" data-aos-delay="200">
    <h2>Follow Us</h2>
    
    <div>
       <i class="fab fa-facebook" style="font-size: 3rem;"></i>
       <i class="fab fa-instagram" style="font-size: 3rem;"></i>
       <i class="fab fa-twitter" style="font-size: 3rem;"></i>
       <i class="fab fa-youtube" style="font-size: 3rem;"></i>

    </div>
   </div>
 </div> 
 <div class="rights flex-row">
   <h4 class="text-gray">
     Copyright ©2024 All rights reserved | made by 
     <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i>SY2105
      </a>
   </h4>
 </div>
 <div class="move-up">
   <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
 </div>
</footer>

<!------------------Footer------------------------>


<!-- -----x------Main site section-------x------ -->

<!-- Jquery library file-->
<script src="./Js/Jquery3.5.1.min.js"></script>

<!-------- Owl Carousel JS----------->

<script src="./Js/owl.carousel.min.js"></script>


<!------------AOS JS------------------>

<script src="Js/aos.js"></script>

<!-- Custom javaField Style -->
<script src="./Js/main.js"></script>
</body>
</html>