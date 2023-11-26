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

$headTitle = "July 2022 Meetup - Games Y'all";
$headDescription = "This month’s theme is PARTY GAMES! We’ll be playing fun submissions from our community (with the devs in attendance!) and some of our slumber party favorites.";
$headImage = "/img/event-img/GY-Banner-July.png"; // this is optional! only needed if the page has an image

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
                    <a href="../events">Past Events</a> 
                    >
                    <a href="event-july-2022">July 15, 2022</a>
                </p>
            </div>
        </div>

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>July 15, 2022</h1>
                <p>This month’s theme is PARTY GAMES! We’ll be playing fun submissions from our community 
                  (with the devs in attendance!) and some of our slumber party favorites. Come play games, 
                  hang out, and meet friends. Batch has beer on tap, an espresso bar, several coolers of 
                  other boozy and non-alcoholic drink options, maybe kolaches (until sold out), and Feisty 
                  Bites Vietnamese food truck.</p>

                <!--If this is a upcoming event, uncomment the button element below-->
                <!--
                    <button class="button" id="rsvp-button">RSVP</button> 
                -->
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="../img/event-img/GY-Banner-July.png" alt="Games Y'all presents their July Meetup'">
            </div>
        </div>

        <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>

          <!--Slumber Squad card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/slumber-squad-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Slumber Squad</h4>
                <p>
                  Slumber Squad is a local multiplayer party game where 2 - 4 kids at a slumber party work together to beat a video game.To win the
                  game players will need to work together to get rid of the distractions and conquer the game.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://gumboot.itch.io/slumber-squad">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Brieyh'leai & Nic Lupfer </h6>
                <p>
                  Brieyh’leai and Nic are a two person team, who’ve been making games together under the name Gumboot Studio since 2016. They met at a 
                  game jam while attending Texas A&M University and have been jamming ever since. 
                </p>

                <div class="dev-social">
                  <h6>Brieyh'leai</h6>
                  <a href="https://twitter.com/comfyfish">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>

                <div class="dev-social">
                  <h6>Nic Lupfer</h6>
                  <a href="https://twitter.com/niclupfer">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Citizen Sleeper card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/Citizen-sleeper-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Citizen Sleeper</h4>
                <p>
                  Live the life of an escaped worker, washed-up on a lawless station at the edge of an interstellar society. 
                  Inspired by the flexibility and freedom of TTRPGs, explore the station, choose your friends, escape your past and
                  change your future.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1578650/Citizen_Sleeper/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By Gareth Damian Martin | Jump Over the Age  </h6>
                <p>
                </p>

                <div class="dev-social">
                  <!--<h6>Gareth Damian Martin</h6>-->
                  <a href="https://twitter.com/JumpOvertheAge?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Space Huggers card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/space-huggers-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Space Huggers</h4>
                <p>
                  Space Huggers is a run and gun roguelike platformer with procedural environments that are fully destructible. 
                  Play solo or co-op with a group of 2-4 friends. It runs in most web browsers and mobile devices using the powerful 
                  open source LittleJS game engine.
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://www.newgrounds.com/portal/view/819609">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Frank Force</h6>
                <p>
                </p>

                <div class="dev-social">
                  <a href="https://twitter.com/KilledByAPixel">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        

          <!--PARTYENGINE card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/Partyengine-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>PARTYENGINE</h4>
                <p>
                  A procedurally-generated party that can be used as a music visualizer.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://aggrocrab.itch.io/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>By AGGRO CRAB</h6>
                <p>
                  Aggro Crab is an indie studio comprised of Nick Kaman and Caelan Pollock. We’ve been working together for 3 
                  years now on various projects, and specialize in games that combine punchy, frenetic gameplay with chill vibes 
                  and nuanced aesthetics.
                </p>

                <div class="dev-social">
                  <h6>AGGRO CRAB</h6>
                  <a href="https://twitter.com/aggrocrabgames">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
          
          <!--Swapette Showdown-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/swapette-showdown-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Swapette Showdown</h4>
                <p>
                  WE CHALLENGE YOU TO A SWAPETTE SHOWDOWN!!!! <br><br>
                  Swapette Showdown is a competitive magical girl puzzle battle game for 1-4 players. Swap your blocks to create matches
                   and attacks. Battle as/against magical girls a.k.a. the Swapettes.
                  We are still in development, planning to release on Steam first. 
                  
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://store.steampowered.com/app/862900/Swapette_Showdown/">Wishlist It</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By 3D Generation</h6>
                <p>
                  We are a small team from San Antonio, Texas. 
                </p>

                <div class="dev-social">
                  <h6>@Swapette Showdown</h6>
                  <a href="https://twitter.com/swapettegame?lang=en">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

          <!--Samurai Gunn 2-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/Samurai-gun-2-img.png"  style=" height: 330px;"> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Samurai Gunn 2</h4>
                <p>
                  The long awaited sequel to a game that helps make up the DNA of Fantastic Arcade, Samurai Gunn 2! Adventure with a friend through a medieval metropolis on the brink 
                  of crisis—fight or fly past your foes to discover the mystery behind Gunn City’s ghostly threat. Or battle together with 
                  a group of 2-4 friends in versus with improved controls, new levels, and new characters!
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1397790/Samurai_Gunn_2/">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Beau Blyth, Nelson Boles, Valentin Seiche, Doseone, Adam Robezzoli, Evan Hemsley, YellowAfterlife</h6>
                <p>
                </p>

                <h6>@SamuraiGunn</h6>
                <div class="dev-social">
                  <a href="https://twitter.com/SamuraiGunn">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

          <!--KAIJU SUPER DATETECH!-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/kaiju-super-datetech-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>KAIJU SUPER DATETECH!</h4>
                <p>
                  A Giant Monster has appeared in Kyoto II!
                  The city's only hope is for you and your company to construct a Colossal Robot, maneuver your creation to the target creature, and... ask it out to dinner? Or a film? Or something?
                  Cooperate in building a perfect match for the kaiju, and compete against rival companies to romance the lonely monster in KAIJU SUPER DATETECH!                  
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="https://powerhoof.itch.io/kaiju-super-datetech">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By Dave & Barney</h6>
                <p>
                </p>


                <div class="dev-social">
                  <h6>@powerhoof</h6>
                  <a href="https://twitter.com/Powerhoof">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

          <!--Gun Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/July-2022/games/gun-game-img.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Gun Game</h4>
                <p>
                  Gun Game is a multiplayer versus party game about increasingly crazy guns. Play rounds where players are pitted against each 
                  other in a new arena! Upgrade your guns down unique branching paths! Put on silly hats! And, finally, be the last subject 
                  standing. 
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1571750/Gun_Game/">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>Alex Huang & Grant Ross | Fireround </h6>
                <p>
                </p>

                <div class="dev-social">
                  <h6>Alex Huang</h6>
                  <a href="https://twitter.com/ralpphdev">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
                <div class="dev-social">
                  <h6>Grant Ross</h6>
                  <a href="https://twitter.com/froggy_loops">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
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
                    <img src="../img/Archived-img/July-2022/photos/GY-july-1.jpeg" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/July-2022/photos/GY-july-2.jpeg" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/July-2022/photos/GY-july-3.jpeg" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/July-2022/photos/GY-july-4.jpeg" style="width: 375px; height: 375px;"> 
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
