<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
//
// Uses the following variables if set before "require():
//      $headTitle = "Cool Page Title - Games Y'all"; 
//      $headDescription = "A longer description of the page in question, with a bit more information than the title.";
//      $headImage = "/img/event-img/some-cool-event-image.jpg";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!-- UPCOMING EVENT-->
    <div class="row">
        <div class="col-8" id="announcement-banner">
        <a href="./html/event-november-2023.html">
            <img src="./img/event-img/GY-Banner-Nov-23.png" id="upcoming-event-img" alt="The Museum of Human Achievement presents, Games Y'all November Meetup" width="400" height="500" />
        </a>
    </div>

        <!--Event info-->
    <div class="col-4" id="upcoming-event-text">
        <h3>November Meetup</h3>
        <p>🎮Women & Non-Binary led Indie Games Showcase🎮</p>
            <br>
        <button class="button" id="More Info'"><a href="https://gamesyall.com/html/event-november-2023.html">More Info</a></button>
        </div>
    </div>
            
    <!-- UPCOMING EVENT-->
    <div class="row">
        <div class="col-8" id="announcement-banner">
            <a href="./html/event-gotm-meetup.html">
                <img src="./img/event-img/GOTM-Banner-Nov-23.png" id="upcoming-event-img" alt="The Museum of Human Achievement presents, Games Y'all Game of the Month Meetup" width="400" height="500" />
            </a>
        </div>

            <!--Event info-->
        <div class="col-4" id="upcoming-event-text">
            <h3>Game of the Month Meetup</h3>
            <p>Wednesday November 15th <br> November GOTM: Goodbye Volcano Hugh</p>
            <br>
            <button class="button" id="More Info'"><a href="https://gamesyall.com/html/event-gotm-meetup.html">More Info</a></button>
        </div>
    </div>
            
    <!-- OPEN CALL-->
    <div class="row">
        <div class="col-8" id="announcement-banner">
            <a href="./html/Submit-a-game.html">
                <img src="./img/misc-img/GY-open-call-general.png" id="upcoming-event-img" alt="Fantastic Arcade presents, Open Call for Games." width="400" height="500" />
            </a>
        </div>

            <!--Open Call info-->
        <div class="col-4" id="upcoming-event-text">
            <h3>✅Open Call✅</h3>
            <p>Show us your stuff y’all! New or old, finished or beta, game or not-quite game. Submit today!</p>
            <br>
            <button class="button" id="More Info'"><a href="https://gamesyall.com/html/Submit-a-game.html">More Info</a></button>
        </div>
    </div>
            
    <!-- BE THE GAMES Y'ALL / Get Involved-->
    <div class="row">
        <h2 style="text-align: center;"> Get Involved </h2>

        <div class="col-4">
            <div class="flex-container-column" style="align-items: center;">
                <h4 style="text-align: center;">Submit Your Game</h4>
                <img src="./img/horse-img/horse-submit.png" class="horse-img" alt="A cute horse submiting their game." >
                <button class="button">
                    <a href="https://gamesyall.com/html/Submit-a-game.html">SUBMIT</a> 
                </button>
            </div>
        </div>

        <div class="col-4">
            <div class="flex-container-column" style="align-items: center;">
                <h4 style="text-align: center;">Sign up to Volunteer</h4>
                <img src="./img/horse-img/horse-volunteer-blue.png" class="horse-img" alt="A horse getting ready to volunteer." >
                <button class="button">
                    <a href="https://themuseumofhumanachievement.com/forms/volunteer/">VOLUNTEER</a>
                </button>
            </div>
        </div>
        
        <div class="col-4">
            <div class="flex-container-column" style="align-items: center;">
                <h4 style="text-align: center;">Give us Feedback</h4> 
                <img src="./img/horse-img/horse-feedback.png" class="horse-img" alt="A horse writing his thoughts about the show on paper." >
                <button class="button">
                <a href="https://form.jotform.com/231855146635157">FEEDBACK</a>
                </button>
            </div>
        </div>
    </div>

    <!-- WHAT IS GAMES Y'ALL-->
    <div class="row">
        <div class="col-6">
            <h2>What is Games Y'all?</h2>
            <p>Games Y’all is a casual meetup hosted by Fantastic Arcade for indie devs, digital artists, and games fans held
                every month. Come play games, hang out, meet friends, and learn how to share your work at future meetups. We 
                celebrate, amplify, and support the unique and underrepresented within indie games and beyond.</p>
            <a href="./html/about-us.html">Learn More</a>
        </div>
        <div class="col-6">
            <img src="./img/example-of-event.png" alt="Fantastic Arcade presents Games Y'all, Party Games edition." >
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
