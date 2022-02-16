<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
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
    <section class="login-body">
    <div class="login-container">
            <p>LOGIN</p> 
            <form action="" class="login-form" >
                <input type="text" placeholder="Name" id="login-name"> <br>
               <div> <input type="text" placeholder="Last name" id="login-surnane"></div>   <br>
                <input type="email" placeholder="Email" id="login-input"> <br>
                <input type="password" placeholder="Password" id="login-input"> <br>
                <button id="login-btn" class="login-btn">LOGIN</button>
            </form>
    </div>
    <div class="login-register">
        <p id="tittle-left">NOT A MEMBER?</p> <br>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo labore, provident cupiditate sequi voluptates tempora corrupti consequuntur iure repellendus amet? In obcaecati labore, voluptatem consectetur nulla eligendi provident non dolores.</p>
        <br>
        <p>adipisicing elit. Explicabo labore, provident 
            cupiditate sequi voluptates tempora corrupti 
            consequuntur iure repellendus amet? In obcaecati labore, voluptatem consectetur</p>
           <a href="register.php"> <button class="register-btn1">REGISTER</button></a>
        </div>
    </section>
         <!-- Footer -->
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
</body>
</html>