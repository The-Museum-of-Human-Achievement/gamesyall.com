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

$headTitle = "August 2022 Meetup - Games Y'all";
$headImage = "/img/event-img/GY-Banner-Aug.png"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!--BREAD CRUMS-->
        <!-- Uncomment once this item is pushed to the past events page.-->
        <div class="row" style="margin-bottom: 0px; margin-top: 0px;">
            <div class="col-4" style="justify-content: left;">
                <p>
                    <a href="/events">Past Events</a> 
                    >
                    <a href="/event-august-2022">August 19, 2022</a>
                </p>
            </div>
        </div>
       

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>August 19, 2022</h1>
                <p>This month’s theme is IMPACT GAMES! We’ll be playing meaningful submissions from our community 
                  (with the devs in attendance!) and other indie favorites with messages that extend beyond the screen. 
                  Come play games, hang out, and meet friends. 
                  <br> <br>
                  Batch has beer on tap, an espresso bar, several coolers of other boozy and non-alcoholic drink options, 
                  maybe kolaches (until sold out), and Feisty Bites Vietnamese food truck.</p>

                <!--If this is a upcoming event, uncomment the button element below-->

               <!--     <button class="button" id="rsvp-button">RSVP</button> -->
                
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Aug.png" alt="Games Y'all presents, Games for impact.">
            </div>
        </div>

        <!--Games at the event -->
          <!--Spirit of Uku: One Frog Can Make a Difference. card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2022/games/Spirit-of-Uku-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Spirit of Uku: One Frog Can Make a Difference.</h4>
                <p>
                  A short meditation on climate change, planetary cycles, and the wonder that is existence on this planet, through the lens of a 
                  red-eyed tree frog's life cycle.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://pdyx.itch.io/spirit-of-uku">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Patrick Knisely </h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@Pdyx</h6>
                  <a href="https://twitter.com/Pdyx">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--Gender Dysphoria Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2022/games/gender-dysphoria-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Gender Dysphoria</h4>
                <p>
                  A short 20 minute non-linear narrative game about negative experiences after coming out as transgender.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://pizzapranks.itch.io/indiepocalypse-11">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Exodrifter</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@exodrifter</h6>
                  <a href="https://twitter.com/exodrifter">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Time Bandit card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2022/games/timebandit-img.jpg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Time Bandit</h4>
                <p>
                  Time Bandit is an idle adventure game where everything you do takes time. By coming back to
                   the game periodically, you are invited to make as much or as little progress as you like, to 
                   make playing it a kind of habit or meaningful ritual, to welcome addictive gameplay loops or
                    explore how to break them.  It tells a story of how our time doesn’t belong to us — and how we 
                    can take it back. 
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1481910/Time_Bandit__Part_1_Appendages_of_the_Machine/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Joel Jordon</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@pumbertop</h6>
                  <a href="https://twitter.com/pumbertop/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--Bible Study Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2022/games/bible-study-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Bible Study</h4>
                <p>
                  In her Welcome to my Homepage projects, Elexus Pettigrew scratches at her relationship to Christianity
                   and reflects on growing up as a closeted, Black, daughter of a preacher. When making the collage This Is 
                   America, she questioned if Black church is becoming more modern or returning to stereotypes of what Black 
                   congregants are supposed to be. For the video Bible Study, Pettigrew turned against her programming to not 
                   deface the bible, and instead followed a childhood urge to express herself on the pages.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://homepageguest.wixsite.com/elexus-pettigrew">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Elexus Pettigrew</h6>
                <p>
                  Welcome to my Homepage is an international online residency program run by IRL @ The Museum of 
                  Human Achievement that offers artists a low-stakes opportunity to explore the web as a site for 
                  creative production, and encourages net.art appreciation and conversation among visitors.
                </p>

                <div class="dev-social">
                  <h6>
                    epthegoat</h6>
                  <a href="https://www.instagram.com/epthegoat/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--Card Shark Card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2022/games/card-shark-img.jpg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Card Shark</h4>
                <p>
                  Card Shark is an adventure game full of cunning, intrigue, and delectable deceit. 
                  Enter a world where you’ll need to play your opponents better than you play your cards.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1371720/Card_Shark/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Nerial</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>♣️ Card Shark</h6>
                  <a href="https://twitter.com/nerial">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
<div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/August-2022/photos/aug-gy-photo-1.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2022/photos/aug-gy-photo-2.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2022/photos/aug-gy-photo-3.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2022/photos/aug-gy-photo-4.jpg" style="width: 375px; height: 375px;"> 
                     <img src="/img/Archived-img/August-2022/photos/aug-gy-photo-5.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2022/photos/aug-gy-photo-6.jpg" style="width: 375px; height: 375px;"> 
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
