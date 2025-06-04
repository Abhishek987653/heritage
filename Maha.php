<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maharashtra</title>

    <!-- Icons -->
    <link rel="stylesheet" href="./css/all.css">

    <!-------- Owl Carousel----------->
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/ostyle.css">

    <!-- -----------AOS------------->
    <link rel="stylesheet" href="./css/aos.css">

    <style>
      .star-rating {
        direction: rtl;
        font-size: 2rem;
        unicode-bidi: bidi-override;
        display: flex;
      }
      .star-rating input {
        display: none;
      }
      .star-rating label {
        color: #ccc;
        cursor: pointer;
      }
      .star-rating input:checked ~ label,
      .star-rating label:hover,
      .star-rating label:hover ~ label {
        color: gold;
      }
      .review-box {
        width: 400px;
        margin: 30px auto;
        font-family: Arial;
      }
      textarea {
        width: 500px;
        height:100px;
        padding: 10px;
        margin-top: 10px;
      }
      #name{
        width: 200px;
        height:50px;
        padding: 10px;
    
      }
      button {
        padding: 10px 20px;
        margin-top: 10px;
        border-radius: 8px;
        }
      .review {
        border-bottom: 1px solid #ccc;
        margin-top: 20px;
        padding-bottom: 10px;
      }
    </style>

</head>
<body>
   <!-- Header Section -->
   <header>
    <div class="header-container">
        <h2>Maharashtra</h2>
        <nav>
            <ul>
              <li><a href="Index.php">Home</a></li>
              <li><a href="MahaFood.html">Food</a></li>
              <li><a href="MahaArt.html">Art and traditon</a></li>
              <li><a href="Mahanatural-park.html">Natural Parks</a></li>
              <li><a href="Mahabestplace.html">Places to Visit</a></li>
            </ul>
        </nav>
    </div>
</header>

    <!-- section-->
     <!-- Weather Section -->
     <section id="weather" class="section weather-section">
      <div class="weth">
          <h5><i class="fas fa-feather-alt"></i> Current Weather</h5>
          <a class="weatherwidget-io" href="https://forecast7.com/en/19d7575d71/maharashtra/" data-label_1="MAHARASHTRA" data-label_2="WEATHER" data-theme="original" >MAHARASHTRA WEATHER</a>
          <script>
          !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
          </script>
      </div>
    </section>



    <!-- section -->
    <section>
      <div class="middle">
     <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983702.7480414623!2d72.50890241005936!3d19.351254271110323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be053e90d161d1d%3A0x29be85dc048d6c14!2sMaharashtra!5e0!3m2!1sen!2sin!4v1697522564640!5m2!1sen!2sin" width="650" height="450" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"  class="center"></iframe>
     </div>
     <div class="text1">
         <h1>
           Best time to visit Maharashtra
         </h1>
        
         <p>The best time to visit Maharashtra is during the winter months, typically from October to February, when the weather is pleasant and ideal for sightseeing. Temperatures during this period range from 12-25°C, making it comfortable for exploring historical sites, markets, and hill stations.                                                                                                                    </p>
     </div>
     </div>
   </section>

    <div class="tit">
      <h1><br><br>Maharashtra</h1>
    </div>
    <section id="places" class="section places-section">
      <div class="places-container">
        <div class="place-card" data-aos="fade-up">
            <img src="images\Maharashtra\other\peoplemaharshtra.jpeg" alt="People"  data-aos="flip-left">
            <div class="place-info">
                <h4>People</h4>
                <p>The people of Maharashtra are a vibrant and diverse mix of ethnic, linguistic, and cultural communities. The majority are Marathi-speaking people, known for their rich cultural heritage, including classical and folk music, literature, theater, and festivals like Ganesh Chaturthi. Among them, the Marathas have historically played a significant role as warriors and landowners, particularly during the Maratha Empire established by Chhatrapati Shivaji Maharaj. Maharashtra is also home to various Scheduled Tribes (Adivasis) such as the Bhil, Warli, Gond, and Korku, who reside mainly in the hilly and forested regions and have preserved their distinct languages, traditions, and art forms like Warli painting. </p>
            </div>
        </div>
        <div class="place-card" data-aos="fade-up">
            <img src="images\Maharashtra\other\religion.png" alt="Religions"  data-aos="flip-left">
            <div class="place-info">
                <h4>Religions</h4>
                <p>The majority religion in Maharashtra is Hinduism, followed by over 79% of the population. It deeply influences the culture, festivals, and daily life of the people, with prominent temples like the Siddhivinayak Temple in Mumbai and Trimbakeshwar in Nashik. The second-largest religious group is Islam, with around 12% of the population, especially concentrated in cities like Mumbai, Aurangabad, and Malegaon. Buddhism is practiced by about 6% of the population, mostly among the Dalit community who embraced it under the leadership of Dr. B.R. Ambedkar during the 1956 Dalit Buddhist movement. Christianity is followed by a small but significant number of people, especially in the Konkan coast and urban centers. Other religions include Jainism, Sikhism, Zoroastrianism (Parsis), and Judaism, mainly found in urban areas like Mumbai and Pune. This religious diversity contributes to Maharashtra’s rich cultural and spiritual landscape.

                </p>
            </div>
        </div>
        <div class="place-card" data-aos="fade-up">
          <img src="images\Maharashtra\other\Fairs and Festivals of maharshtra.jpg" alt="Fairs and Festivals"  data-aos="flip-left">
          <div class="place-info">
              <h4>Fairs and Festivals</h4>
              <p>
                Maharashtra is known for its colorful fairs and vibrant festivals that reflect its rich culture and traditions. Ganesh Chaturthi is the most famous festival, celebrated with great devotion and public processions. Gudi Padwa marks the Marathi New Year, while Diwali, Holi, and Makar Sankranti are celebrated with joy across the state. The Pandharpur Wari, a major pilgrimage, draws thousands of devotees annually. Rural fairs like the Khandoba Yatra and cultural events like the Kala Ghoda Arts Festival in Mumbai showcase the state’s spiritual and artistic diversity, bringing people together in celebration, devotion, and community harmony.
              </p>
          </div>
        </div>
        <div class="place-card" data-aos="fade-up">
          <img src="images\Maharashtra\other\Architecture of maharshta.jpeg" alt="Architecture"  data-aos="flip-left">
          <div class="place-info">
              <h4>Architecture</h4>
              <p>
                Maharashtra's architecture reflects a rich blend of ancient, medieval, and modern styles. The state is home to remarkable rock-cut caves like Ajanta and Ellora, showcasing Buddhist, Hindu, and Jain art. Chhatrapati Shivaji Maharaj Terminus in Mumbai exemplifies Victorian Gothic architecture. Forts such as Raigad and Sinhagad highlight Maratha military design. Wadas in Pune represent traditional residential architecture. The Gateway of India symbolizes colonial influence, while temples like Trimbakeshwar and Bhimashankar showcase intricate Hindu designs. Modern cities like Mumbai also feature Art Deco and contemporary skyscrapers, making Maharashtra a diverse architectural landscape blending heritage with urban growth.
              </p>
          </div>
        </div>
        <div class="place-card" data-aos="fade-up">
          <img src="./images/Maharashtra/other/Literature.jpg" alt="Literature"  data-aos="flip-left">
          <div class="place-info">
              <h4>Literature</h4>
              <p>
                Marathi literature, a rich and diverse body of literary works in the Marathi language, holds a prominent place in Indian literary history. It's known for its devotional and philosophical traditions, particularly influenced by the Mahanubhava and Warkari movements. Key figures like Dnyaneshwar, Eknath, and Tukaram, known as saint poets, have shaped Marathi literature through their profound spiritual and devotional writings. 
              </p>
          </div>
        </div>
        <div class="place-card" data-aos="fade-up">
          <img src="images\Maharashtra\other\Social Customs and Traditions of maha.jpg" alt="Social Customs and Traditions"  data-aos="flip-left">
          <div class="place-info">
              <h4>Social Customs and Traditions</h4>
              <p>
                Maharashtra is known for its vibrant customs and traditions, deeply rooted in its cultural history. Festivals like Ganesh Chaturthi, Gudi Padwa, and Makar Sankranti are widely celebrated with grand processions, dances, and feasts. Traditional dances like Lavani and Tamasha showcase the state's folk culture. Pukka marriages follow elaborate rituals, with special customs based on caste and region. The kolhapuri chappals and Paithani sarees are traditional attire, and Maharashtrian cuisine, including puran poli and misal pav, holds a special place in daily life. Hospitality is key, with guests often treated with warmth and respect.  
              </p>
          </div>
        </div>
        <?php
          ob_start();
     

            $conn = new mysqli("localhost", "root", "", "review_system");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Handle form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $rating = $_POST["rating"];
                $review = $_POST["review"];

                $stmt = $conn->prepare("INSERT INTO maha (username, rating, review) VALUES (?, ?, ?)");
                $stmt->bind_param("sis", $username, $rating, $review);
                $stmt->execute();
                $stmt->close();
                // Redirect to avoid resubmission on refresh
                header("Location: Maha.php" . $_SERVER["PHP_SELF"]);
                exit();
            }
    ?>
            <div class="review-box">
              <h2>Submit Your Review</h2>
              <form method="POST" action="">
                <input type="text" name="username" id="name"  value="<?php echo htmlspecialchars($_SESSION['username']); ?>" readonly><br>
                <div class="star-rating">
                  <input type="radio" name="rating" id="5-stars" value="5"><label for="5-stars">&#9733;</label>
                  <input type="radio" name="rating" id="4-stars" value="4"><label for="4-stars">&#9733;</label>
                  <input type="radio" name="rating" id="3-stars" value="3"><label for="3-stars">&#9733;</label>
                  <input type="radio" name="rating" id="2-stars" value="2"><label for="2-stars">&#9733;</label>
                  <input type="radio" name="rating" id="1-star" value="1" required><label for="1-star">&#9733;</label>
                </div>
                <textarea name="review" placeholder="Write your review..." required></textarea>
                <center>
                <button type="submit">Submit</button>
                </center>
              </form>
            
              <h2>All Reviews</h2>
          <?php
          $result = $conn->query("SELECT * FROM maha ORDER BY created_at DESC");
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="review">';
                  echo '<strong>' . htmlspecialchars($row["username"]) . '</strong> ';
                  echo str_repeat('⭐', $row["rating"]);
                  echo '<p>' . htmlspecialchars($row["review"]) . '</p>';
                  echo '<small>' . $row["created_at"] . '</small>';
                  echo '</div>';
              }
          } else {
              echo "<p>No reviews yet.</p>";
          }
          $conn->close();
          ob_end_flush();
          ?>
      </div>
    </section>
<!--------------    People Of Maharashtra    ----------->

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