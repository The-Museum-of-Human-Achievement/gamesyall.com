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

    <!--Event info-->
        <!-- NEXT EVENT-->
        
        <div class="row" style="margin-top: 80px;">
        <div class="col-6">
                <h3>May Games Y'all Meetup</h3>
            <!-- RSVP Pre Event -->
                <!-- 
                <p>
                Join us for Games Y'all at the Museum of Human Achievement! 📆📍<br>
                We'll have a fresh lineup of indie games to check out, folks to meet, and we'll be doing it at the same time as <a href="https://moha.wiki/CATS+" target="blank">MoHA's CATS+</a>showcase, so there will be even more art to check out!
                </p>
                <p>
                    Saturday May 17th, 2025<br>
                    7-10pm<br>
                    The Museum of Human Achievement<br>
                    <a href="https://maps.app.goo.gl/gnfLL6bdV5qLRqpd9" target="_blank">3600 Lyons Rd. Austin, TX 78702</a>
                    <br><br>
                    🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
                </p>
                <button 
                    class="button" id="RSVP'"><a href="https://withfriends.co/event/23296359/games_yall_may_2025" target="_blank">RSVP</a>
                </button> -->
                
            <!--Current Event Description-->
                <p>
                    Games Y’all is a casual meetup for indie devs, digital artists, and games fans held
                    every month. 🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
                </p>
                <button class="button" id="More Info'"><a href="/event-may-2025">More Info</a></button>
            </div>
            <div class="col-6">
                <img src="/img/event-img/GY-Square-May-25.png" alt="Games Y'all May Meetup" >
            </div>
        </div> 

        <!--Upcoming Event Info-->
        <!-- 

            <div class="col-4" id="upcoming-event-text">
                <h3>Fantastic Arcade: Fun Size Edition!</h3>
                <p>🗓️ October 26th 📍 Baker Center
                <br><br> 
                October is here and Fantastic Arcade is back for our 10th event, Fantastic Arcade: Fun Size Edition! 🎟 Tickets on sale now!
                </p>
                <br>
                <button class="button" id="Tickets'"><a href="https://withfriends.co/event/20872516/fantastic_arcade_fun_size_edition">Tickets</a></button>
            </div>
        </div> -->
        
    <!-- NEWSLETTER -->
    <div class="row">
        <div class="col-6">
            <h2>Newsletter</h2>
            <p>Keep up to date with our events, opportunities, and announcements by signing up for our newsletter.</p>
            <button class="button" id="More Info'"><a href="https://www.themuseumofhumanachievement.com/forms/email/" target="_blank">Sign Up</a></button>
        </div>
        <div class="col-6">
            <img src="./img/misc-img/newsletter.png" alt="Sign up for our newsletter!" >
        </div>
    </div>
    
             <!-- OPEN CALL-->
    <div class="row">
        <div class="col-8" id="announcement-banner">
            <a href="/submit-a-game">
 			<img src="/img/misc-img/call-for-games.png" id="upcoming-event-img" alt="The Museum of Human Achievement presents, Games Y'all Meetup" width="400" height="500" />
            </a>
        </div>

            <!--Open Call info-->
        <div class="col-4" id="upcoming-event-text">
            <h3>✅Open Call✅</h3>
            <p>Show us your stuff y’all! New or old, finished or beta, game or not-quite game. Submit today!</p>
            <br>
            <button class="button" id="More Info'"><a href="/submit-a-game">More Info</a></button>
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
                    <a href="/submit-a-game">SUBMIT</a> 
                </button>
            </div>
        </div>

        <div class="col-4">
            <div class="flex-container-column" style="align-items: center;">
                <h4 style="text-align: center;">Sign up to Volunteer</h4>
                <img src="./img/horse-img/horse-volunteer-blue.png" class="horse-img" alt="A horse getting ready to volunteer." >
                <button class="button">
                    <a href="http://fantasticarcade.com/join/hey/" target="_blank">VOLUNTEER</a>
                </button>
            </div>
        </div>
        
        <div class="col-4">
            <div class="flex-container-column" style="align-items: center;">
                <h4 style="text-align: center;">Give us Feedback</h4> 
                <img src="./img/horse-img/horse-feedback.png" class="horse-img" alt="A horse writing his thoughts about the show on paper." >
                <button class="button">
                <a href="https://form.jotform.com/231855146635157" target="_blank">FEEDBACK</a>
                </button>
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
