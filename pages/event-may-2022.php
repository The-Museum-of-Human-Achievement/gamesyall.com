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

$headTitle = "May 2022 Meetup - Games Y'all";
$headDescription = "We will be sharing a power boost of powerpoints (5 min or less) on games-related topics including, but not limited to: rock climbing, GameBoy emulators, crystals, shareware, trans-authored erotica, mobile games, and making mistakes.";
$headImage = "/img/event-img/GY-Banner-May.jpg"; // this is optional! only needed if the page has an image

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
                    <a href="/event-may-2022">May 6, 2022</a>
                </p>
            </div>
        </div>

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>May 6, 2022</h1>
                <p>Come play games, watch presentations, hang out, and meet friends. We will be sharing a power boost of powerpoints 
                  (5 min or less) on games-related topics including, but not limited to: rock climbing, GameBoy emulators, crystals, 
                  shareware, trans-authored erotica, mobile games, and making mistakes.</p>

                <!--If this is a upcoming event, uncomment the button element below-->
                <!--
                    <button class="button" id="rsvp-button">RSVP</button> s
                -->
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-May.jpg" alt="The Musuem of Human Achievement presents Games Y'all'">
            </div>
        </div>

        <!--Games at the event -->
          <!--Shut Up and Dodgeball card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/Shut-Up-and-Dodgeball-img.jpeg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Shut Up and Dodgeball</h4>
                <p>
                  Single player dodgeball game being made created by WORM.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://jenniferraye.itch.io/">Learn More</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6> Jennifer Raye | WORM</h6>
                <p>
                  Jennifer Raye is a transgender developer who has created several games for Juegos Rancheros. 
                  
                </p>

                <div class="dev-social">
                  <h6>@jenn_raye</h6>
                  <a href="https://twitter.com/jenn_raye">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--The Tedium and You Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/the-tedium-and-you-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>The Tedium and You</h4>
                <p>
                  The Tedium and You traps the player in an infinite, procedurally generated office building, letting the player wander. 
                  The game seeks to uncover how different people react to respond to an interactive experience that gives them next to no stimulus.
                   Presently The Tedium and You is under devolpment. 
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://noahkuhn.itch.io/">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Noah Kuhn</h6>
                <p>
                  Noah Kuhn is a game developer currently majoring in Computer Science with a certificate in
                   Digital Arts & Media from the University of Texas at Austin. They are the president of UT's
                    Electronic Game Developers Society (EGaDS!) and like to take on interesting programming and 
                    game projects.
                </p>

                <div class="dev-social">
                  <h6>@Noah Kuhn</h6>
                  <a href="https://twitter.com/NoahKuhn">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Gem Setter card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/gem-setter-img.jpeg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Gem Setter</h4>
                <p>
                  A block sliding puzzle game about moving ice in an abstract world, with a level editor.
              
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://1f1n1ty.itch.io/gem-setter">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Matthew Zhang</h6>
                <p>
                  Matthew Zhang is a Solo Game developer, composer, and general digital wizard.
                </p>

                <div class="dev-social">
                  <h6>@1f1n1ty_</h6>
                  <a href="https://twitter.com/1f1n1ty_">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--Merchant Guilds' Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/Merchant-Guilds-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Merchant Guilds</h4>
                <p>
                  Blending together traditional RPG systems, management mechanics, and a fantasy overworld, Merchant aims to reimagine the world of role-playing games. Multiplayer.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://www.retoragames.com/">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Tyler Coleman | Retora Games</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@RetoraGames</h6>
                  <a href="https://twitter.com/RetoraGames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          


          <!--Afterplace card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/Afterplace-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Afterplace</h4>
                <p>
                  Afterplace is an adventurous indie mobile game full of fun characters and terrible secrets. 
                  The game will adapt dynamically to your playstyle. Afterplace is made to feel like a full-fledged indie adventure game t
                   hat fits in your pocket. Afterplace is scheduled to release in the summer of 2022. 
 
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="http://afterplacegame.com/">Learn More</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Evan Kice</h6>
                <p>
                  Evan Kice is a solo developer in Austin currently working on a game called Afterplace.
                </p>

                <div class="dev-social">
                  <h6>@evankice </h6>
                  <a href="https://twitter.com/evankice">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--A Memoir Blue Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/a-memoir-blue-img.jpg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>A Memoir Blue</h4>
                <p>
                  A Memoir Blue is an interactive poem about a superstar athlete and the all-encompassing love 
                  between mother and daughter. A unique aesthetic combining hand-drawn and 3D art brings Miriam’s magical-realist 
                  journey to life, as she swims into the depths of her memories. A series of gameplay vignettes blends sacrifice and heartbreak with victory and pride as she reconnects with her inner child and deepens the love she shares with her mother.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://store.steampowered.com/app/1497450/A_Memoir_Blue/">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Cloisters Interactive | Annapurna Interactive
                </h6>
                <p>
                  
                </p>

                <div class="dev-social">
                  <h6>@cloisters_i</h6>
                  <a href="https://twitter.com/cloisters_i">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Salty's Dream Cast Casino (aka SaltyBet) card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/Saltys-Dream-Cast-Casino-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Salty's Dream Cast Casino</h4>
                <p>
                  Salty Bet is a free game that allows you to place virtual bets on live competitive events. 
                  Salty Bet is purely for entertainment purposes and no real money will be paid out. Salty
                   Bucks are only used to play Salty Bet, they are not an actual currency and do not have value.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.saltybet.com/ ">Play Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Salty</h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>@saltybet </h6>
                  <a href="https://twitter.com/saltybet">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Grass Stains Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2022/games/Grass-Stains-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Grass Stains</h4>
                <p>
                  Grass Stains is a local multiplayer game about two little kids, their dog, and a soccer ball on a summer day. 
                  Kick the ball too hard at your friend and you might just knock them over. Will you play fair and help them up, 
                  or tease them while you score point after point? It’s up to you! Grass Stains was orginally show at Fantasticarcade 
                  in 2018.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://fantasticarcade.com//games/2018/grass-stains/">Learn More</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Nina Freeman & Co </h6>
                <p>
                  Grass Stains is a collaboration between Nina Freeman, Aaron Freedman, Diego Garcia, and Amos Roddy. 
                  Nina was the designer for Lost Memories Dot Net, Cibele, how do you Do it? and Kimmy, as well as part 
                  of the Fullbright team (Tacoma).
                </p>

                <div class="dev-social">
                  <h6>@PersocomNina</h6>
                  <a href="https://twitter.com/PersocomNina?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
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
                    <img src="/img/Archived-img/May-2022/photos/GY-may-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/May-2022/photos/GY-may-2.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/May-2022/photos/GY-may-3.jpg" style="width: 375px; height: 375px;"> 
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
