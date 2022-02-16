<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo"><h3>Mo<span>Re.</span></h3></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="../HTML/index.php">Home</a></li>
            <li><a href="../HTML/about.php">About Us</a></li>
            <li><a href="../HTML/courses.php">Courses</a></li>
            <li><a href="../HTML/skills.php">Skills</a></li>
            <li><a href="../HTML/contact.php">Contact</a></li>
            <li><a href="../HTML/login.php">Log In</a></li>
        </ul>
    </header>
    <section class="our-team">
        <div class="heading">
            <span>WHO WE ARE</span>
            <h2>Meet Our Team</h2>
        </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="../img/Timi.jpg" style="width: 100%; height: 37rem;">
          <div class="team2">
            <br> <br>
            <span><h3>TIM COOK</h3></span>
            <h3>CEO - Principal & Design Developer</h3> <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis vel! Fugiat,
                numquam dolore? Molestiae harum doloribus adipisci <br> nisi tempora  mollitia itaque 
                repellat voluptatibus consequatur corporis</p>
        </div>
        </div>
        
        <div class="mySlides fade">
          <img src="../img/safra.jfif" style="width: 100%; height: 37rem;">
          <div class="team1">
            <br> <br>
            <span><h3>SAFRA CATZ</h3></span>
            <h3>CEO - Principal & Creative Director</h3> <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                 numquam dolore? Molestiae harum doloribus adipisci nisi tempora mollitia itaque 
                 repellat voluptatibus consequatur corporis,
                 praesentium corrupti natus maxime inventore incidunt dicta.
                 Perspiciatis vel!</p>
        </div>
        </div>
        
        <div class="mySlides fade">
          <img src="../img/elon.jpeg" style="width: 100%; height: 37rem;">
          <div class="team3">
            <br> <br>
            <span><h3> ELON MUSK</h3></span>
            <h3>CEO - Arificial Intellegence Manager</h3> <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis vel! Fugiat,
                numquam dolore? Molestiae harum doloribus adipisci <br> nisi tempora  mollitia itaque 
                repellat voluptatibus consequatur corporis</p>
        </div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
    </section>
    <section class="skills">
        <div class="heading">
            <span>WHAT WE KNOW</span>
            <h2>Our Skills</h2>
        </div>

        <div class="skills-content">
            <div class="column left">
                <h2>Our creative skills & experineces</h2> <br>
                <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Possimus fugit quae, quis ad
                      vel dolor. Vero molestias illum voluptatem, 
                      molestiae cumque, aspernatur repellendus, 
                    animi id sunt ipsam accusantium culpa impedit.</p> <br>
                    <div >
                        <button class="btn-C">READ MORE</button>
                    </div>
            </div> 
            <div class="column right">
                <div class="bars">
                    <div class="inf">
                        <span>HTML / CSS</span>
                        <span>90%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="inf">
                        <span>JavaScript</span>
                        <span>80%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="inf">
                        <span>Python</span>
                        <span>70%</span>
                    </div>
                    <div class="line python"></div>
                </div>
                
                <div class="bars">
                    <div class="inf">
                        <span>Java</span>
                        <span>85%</span>
                    </div>
                    <div class="line java"></div>
                </div>
                <div class="bars">
                    <div class="inf">
                        <span>C++</span>
                        <span>80%</span>
                    </div>
                    <div class="line cplus"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="footer" id="footer">
        <div class="footer-box">
            <h2>Mo<span>Re.</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt amet minus mollitia impedit qui asperiores!</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Explore</h3>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="contact.php">Contact</a></li>
        </div>
        <div class="footer-box">
            <h3>Courses</h3>
            <li><a href="#">Java</a></li>
            <li><a href="#">Python</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">C++</a></li>
        </div>
        <div class="footer-box contact-info">
            <h3>Contact</h3>
            <span>Topanicë / Kamenicë, KOSOVË</span>
            <span>+383 (45) 448 707</span>
            <span>kaltrinaa.morinaa@gmail.com</span>
            <span>rexhaisak@gmail.com</span>
            
        </div>
    </section>


    <script>
    var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }</script>
</body>
</html>