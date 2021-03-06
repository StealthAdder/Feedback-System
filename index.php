<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Name - Main page</title>
    <link rel="stylesheet" href="../Feedback-System/css/index.css">
    <link rel="icon" href="css\img\college_icon.png">
</head>
<body>
    <header>
        <div class="title-div">
            <a href="../Feedback-System/index.html"><img src="../Feedback-System/css/img/college_icon.png" alt="Logo" id="college_icon"></a>
            <h1 id="title">College Name</h1>
        </div>
        <div class="navbar">
            <?php
                if (isset($_SESSION['student_usn'])) {
                    echo '<a href="../Feedback-System/pages/varFeed.php" class="nav-a">Feedback Form</a>';
                }
                else {
                    echo '<a href="../Feedback-System/pages/Feedback.php" class="nav-a">Anonymous Feedback</a>';
                }
            ?>
            <?php if (isset($_SESSION['student_usn'])) { ?>
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn" style="font-weight: bold;"><?php echo $_SESSION['student_name'];?></button>
                <div class="dropdown-content">
                    <a href="../Feedback-System/auth/stud-loginsys/includes/logout.php" class="nav-a">Log Out</a>
                </div>
                </div>
            <?php } else { ?>
                <a href="../Feedback-System/auth/stud-loginsys/student-login.php" class="nav-a" style="float: right; margin-right: 15px">Log In</a>
            <?php } ?>
            <!-- <div class="dropdown" style="float:right;">
                <button class="dropbtn">Username</button>
            <div class="dropdown-content">
                <a href="../Feedback-System/auth/stud-loginsys/includes/logout.php" class="nav-a">Log Out</a>
            </div> -->
        </div>
    </header>
    <main>
        <!-- background feature with some cool slides -->
        <!-- Feature Update -->
        <h3 id="h3-main">Welcome to main page</h3>
        <div class="div-main">
            <h5>News</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam incidunt a consectetur sit omnis, accusantium eius alias! Sapiente quisquam nihil distinctio. Rem voluptatibus iste molestiae saepe eos quod velit aut.</p>
            <br>
            <h5>Events</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium eveniet earum eaque necessitatibus ipsum aperiam ad commodi maxime, impedit consequatur alias temporibus et. Quam esse reprehenderit officiis excepturi repellendus.</p>
        </div>
        <div class="div-main">
            <h5>Extra</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam incidunt a consectetur sit omnis, accusantium eius alias! Sapiente quisquam nihil distinctio. Rem voluptatibus iste molestiae saepe eos quod velit aut.</p>
            <br>
            <h5>Extra 1</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium eveniet earum eaque necessitatibus ipsum aperiam ad commodi maxime, impedit consequatur alias temporibus et. Quam esse reprehenderit officiis excepturi repellendus.</p>
        </div>
        <h3 id="h3-updates">Updates</h3>
        <div class="feed">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A aperiam ullam est voluptas. Suscipit voluptates commodi amet temporibus earum laborum voluptate modi, maiores incidunt consequatur, magni quidem. Sequi, maxime adipisci? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus magnam fuga quam nam enim. Rerum, soluta. Sequi delectus quisquam rem, magnam aut ex, corrupti earum atque omnis nulla eaque minima?</p>
        </div>
    </main>
    <footer>
        <div class="div-contact">
            <ul id="ul-foot">
                <li class="li-foot"><a href="https://github.com/StealthAdder/Feedback-System" class="a-foot" target="_blank">TeamX Hypertext</a></li>
                <li class="li-foot" style="float: right;"><a href="https://github.com/StealthAdder" class="a-foot" target="_blank">StealthAdder</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>