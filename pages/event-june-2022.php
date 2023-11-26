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

$headTitle = "June Meetup 2022 - Games Y'all";
$headDescription = "This month we’ve got a - New Date, New Location - now with air conditioning!";
$headImage = "/img/event-img/GY-Banner-June.png"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!--BREAD CRUMS-->
    <div class="row" style="margin-bottom: 0px; margin-top: 0px;">
            <div class="col-4" style="justify-content: left;">
                <p>
                    <a href="/events">Past Events</a> 
                    >
                    <a href="/event-june-2022">June 16, 2022</a>
                </p>
            </div>
        </div>

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>June 16, 2022</h1>
                <p>This month we’ve got a - New Date, New Location - now with air conditioning! We hope 
                  to get back to a regular schedule soon, but are trying out venues and rolling with the 
                  dates available in our budget. If you have dream location, let us know. See you in a couple weeks!</p>

                <!--If this is a upcoming event, uncomment the button element below-->
                <!--
                    <button class="button" id="rsvp-button">RSVP</button> 
                -->
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-June.png" alt="A green banner for june's Games Y'all">
            </div>
        </div>

        <!--Games at the event 
        <div class="row">
            <div class="col-12">

                  <div class="game-card">
                      <h4>Paint Boi</h4>
                      <img src="/img/Archived-img/June-2022/games/paint-boi-img.jpg" class="game-card-img">
                  </div>

                  <div class="game-card">
                      <h4>Skelly Gun</h4>
                      <img src="/img/Archived-img/June-2022/games/skelly-gun-img.png" class="game-card-img">
                  </div>

                  <div class="game-card">
                      <h4>(Try To) Dress Up</h4>
                      <img src="/img/Archived-img/June-2022/games/try-to-dress-up-img.png" class="game-card-img">
                  </div>

                  <div class="game-card">
                    <h4>Bridgebourn</h4>
                    <img src="/img/Archived-img/June-2022/games/Bridgebourn-img.png" class="game-card-img">
                  </div>

                </div>
            </div>
        </div>
        -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>

          <!--Stacklands-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2022/games/stackland-img.jpg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Stacklands</h4>
                <p>
                  Stacklands is a village builder where you stack cards to collect food, build structures, and fight creatures. For example, 
                  dragging a 'Villager' card on top of a 'Berry Bush' card will spawn 'Berry' cards which the villagers can eat to survive!
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://store.steampowered.com/app/1948280/Stacklands/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Sokpop</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@sokpopc</h6>
                  <a href="https://twitter.com/sokpopco">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Bridgebourn card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2022/games/Bridgebourn-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Bridgebourn</h4>
                <p>
                  Explore a hand-crafted world filled with treasure and secrets with your band of adventurers. 
                  Bridgebourn focuses on modern nostalgia, immersive exploration, and a unique hand-painted art style with fresh game mechanics.
                  Fight with weapons that you acquire and reactive abilities that you learn as you explore more new lands.
                  
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://bridgebourn.com/presskit/bridgebourn/">Learn More</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Bamboo Bandit (Siavash Ranjbar) </h6>
                <p>
                  Bridgebourn is an adventure RPG made by solo indie game developer Bamboo Bandit (Siavash Ranjbar).
                </p>

                <div class="dev-social">
                  <h6>@BambooBanditSR</h6>
                  <a href="https://twitter.com/BambooBanditSR">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--SKELLY GUN Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2022/games/skelly-gun-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>SKELLY GUN</h4>
                <p>
                  I was just about to catch a super rare creature in a gps-based monster catching game, but then I fell into a cave full of skeletons and 
                  there's no phone signal down here?! man wtf
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://pizzapranks.itch.io/indiepocalypse-21">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>Baku</h6>
                <p>
                  Skelly Gun was a part of the Video game Zine, indiepocalypse #21.
                </p>

                <div class="dev-social">
                  <h6>@bakumoe</h6>
                  <a href="https://twitter.com/bakumoe">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--(try to) Dress Up card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2022/games/try-to-dress-up-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>(try to) Dress Up</h4>
                <p>
                  "(try to) Dress Up" is a dress up game where you have to get my parents' permission before going out in your final look. 
                  Good luck with that- they're pretty tough judges to please!
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://nivikan.itch.io/try-to-dress-up">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Nivetha Kannan</h6>
                <p>
                  (Try to) Dress Up was feature in the video game zine indiepocalypse #11.
                </p>

                <div class="dev-social">
                  <h6>@nivixion</h6>
                  <a href="https://twitter.com/nivixion">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--Paint Boi Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2022/games/paint-boi-img.jpg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Paint Boi</h4>
                <p>
                  A painting game/ art tool/ playground
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://pizzapranks.itch.io/indiepocalypse-18">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Aaron Taecker-Wyss & bb Tombo | SlugHuman Productions</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@TaeckerWyss</h6>
                  <a href="https://twitter.com/TaeckerWyss?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@bbtombo</h6>
                  <a href="https://twitter.com/bbtombo">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
        </div>

        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/June-2022/photos/june-photo-1.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/June-2022/photos/june-photo-2.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/June-2022/photos/june-photo-3.JPG" style="width: 375px; height: 375px;"> 
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
