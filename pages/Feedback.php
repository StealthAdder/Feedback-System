<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="icon" href="../css/img/college_icon.png">
    <link rel="stylesheet" href="../css/a_fb.css">
</head>
<body>
    <header>
        <div class="title-div">
            <a href="../Feedback-System/index.html"><img src="../css/img/college_icon.png" alt="Logo" id="college_icon"></a>
            <h1 id="title">College Name</h1>
        </div>
        <div class="navbar">
            <a href="../index.php" class="nav-a">Home</a>
            <a href="#" class="nav-a">Events</a>
            <a href="#" class="nav-a">Extras</a>
        </div>
    </header>
    <main>
        <form action="../db/anonymous/afb.inc.php" method="post" autocomplete="off">
            <!-- basics -->
            <div class="feed-block">
                <div class="feed-subblock">
                    <img src="/Feedback-System/css/img/anonymous_icon.jpg" alt="Feeback Icon" id="afb-icon">
                    <h3>Anonymous Feedback</h3>
                    <?php

                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p class="error">Fill in all the fields</p>';
                            }
                        }
                        else if ($_GET['info'] == "sent") {
                            echo '<p class="error">We have got your feedback!</p>';
                            echo '<p class="">Thanks - TeamX Hypertext</p>';
                        }
                    ?>
                    <div class="feed-content">
                        <Select name="dept" style="margin-right: 30px;">
                            <option value="" disabled selected>Department</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                        </Select>
                        <select name="sem" style="margin-left: 35px;">
                            <option value="" disabled selected>Semester</option>
                            <option value="I SEM">I SEM</option>
                            <option value="II SEM">II SEM</option>
                            <option value="III SEM">III SEM</option>
                            <option value="IV SEM">IV SEM</option>
                            <option value="V SEM">V SEM</option>
                            <option value="VI SEM">VI SEM</option>
                            <option value="VII SEM">VII SEM</option>
                            <option value="VIII SEM">VIII SEM</option>
                        </select>
                    </div>
                    <div class="feed-content">
                        <textarea name="msg" cols="50" rows="8" placeholder="Write your feedback"></textarea>
                    </div>
                    <div id="submit-bt">
                        <button type="submit" name="feedback-submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <!-- footer design later -->
        <div class="div-contact">
            <ul id="ul-foot">
                <li class="li-foot"><a href="https://github.com/StealthAdder/Feedback-System" class="a-foot" target="_blank">TeamX Hypertext</a></li>
                <li class="li-foot" style="float: right;"><a href="https://github.com/StealthAdder" class="a-foot" target="_blank">StealthAdder</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>