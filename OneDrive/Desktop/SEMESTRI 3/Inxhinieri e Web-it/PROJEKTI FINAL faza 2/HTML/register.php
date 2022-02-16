<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
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
    
    <div class="container">
        <div class="header">
            <h2>REGISTER NOW</h2>
        </div>
        <form id="form" class="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text"  id="username" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password"id="password"/>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password check</label>
                <input type="password"id="password2"/>
                <small>Error message</small>
            </div>
            <button>SUBMIT</button>
        </form>
    </div>

    
    <script src="../js/main.js"></script>
</body>
</html>