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

$headTitle = "October 2022 Meetup - Games Y'all";
$headDescription = "Come on Down!™ to the Museum of Human Achievement for the October edition of Games Y’all. This month we have a double feature! Costumes are highly encouraged.";
$headImage = "/img/event-img/GY-Banner-Oct.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-october-2022">October 27, 2022</a>
                </p>
            </div>
        </div>

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>October 27, 2022</h1>
               <h5>Come on Down!™</h5>
		<p>Come on Down!™ to the Museum of Human Achievement for the October edition of Games Y’all. This month we have a double feature! Costumes are highly encouraged. </p>

		<p>OUTSIDE at the MoHA drive-in stage is a showcase of game shows made by our very own community of witches, bats, and pumpkins at the <a href="https://gamesyall.com/html/event-october-GJ-2022">Fantastic Arcade Game Show Game Jam.</a> Hosted by the infamous Shannon Stott and Coby West! </p>

        
		<p>INSIDE the MoHA gallery we're showcasing a roundup of spooky and fun indie games from our community.</p>
                  
                  <!--Venue details can be deleted when event has passed-->    
           

                    <!--If this is a upcoming event, uncomment the button element below-->
                <!--
                    <button class="button" id="rsvp-button">RSVP</button> 
                -->
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Oct.png" alt="Games Y'all presents, October Meetup - Spooky Games and Game Shows">
            </div>
        </div>
       
       <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          <!--Murder House card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/murderhouse.jpeg" alt="- This is a promotional image for Murder House which features a human in a pink bunny suit wielding a scythe at a pair of upraised hands. Murderhouse is written across the image in a bloody style font that is red with a black background.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Murder House</h4>
                <p>
                  A local news team breaks into an abandoned house to chase a salacious ghost story... until a MANIAC chases them! ...VHS era 80's slasher. PS1 style survival horror!
                  </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1064460/Murder_House/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer + Publisher: Puppet Combo</h6>


                <div class="dev-social">	
                  <h6>@PuppetCombo</h6>
                  <a href="https://twitter.com/PuppetCombo">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>          
          
 <!--Frankenfur! card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/frankenfur.jpg" alt="This is a promotional image for Frankenfur which features their tagline “Horrors you’ve never seen before… because YOU will be creating them!”. The image features a werewolf being electrocuted by a yellow eel."> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Frankenfur!</h4>
                <p>
                  Make the nightmare of your dreams in Frankenfur! In this physical card game, players take on the role of mad scientists competing to make the most powerful franken-monster out of various creature body parts. You'll use crazy experiments and hire wacky assistants to synergize your strengths. Set up ways to sabotage your opponent and plan out which cards are used for their abilities, or as energy to power your creation and bring your monster to life! It’s all about making the biggest, baddest monster possible! Frankenfur! can be played competitively for 1-on-1 play or as a party game for up to 4 people. A game that celebrates both a casual fun game night or a heated battle against competitors, Frankenfur! offers something for everyone!
 
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.tropicalheatstudios.com/frankenfur">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Tropical Heat Studios <h6> 
                <br>


                <div class="dev-social">
                  <h6>@frankenfur</h6>
                  <a href="https://twitter.com/Frankenfur">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
<!--THERE SWINGS A SKULL: GRIM TIDINGS card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/there-swings-a-skull.png" alt="This is a promotional image for There Swings A Skull: Grim Tidings which features a top down view of a level in the game. There is a strange metal contraption centered in the image with a noose dangling from it. The title is rendered in white.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>THERE SWINGS A SKULL: GRIM TIDINGS</h4>
                <p>
                  THERE SWINGS A SKULL: GRIM TIDINGS is a narrative-horror game centered around husbands Anatoli and Pyotr and their attempt to prevent their home from annihilation by a sentient, maniacal sun. It features striking pixel graphics, compelling characters and dialogue, and a haunting, enthralling soundtrack. 
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1983580/There_Swings_a_Skull_Grim_Tidings/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Quinn K., Conor Walsh, Leaf Let, and Z. Bill. <br>
                Publisher: A Team Forbidden</h6>


                <div class="dev-social">	
                  <h6>@letleaf</h6>
                  <a href="https://twitter.com/LetLeaf">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@z_bill</h6>
                  <a href="https://twitter.com/z_bill">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@bustedkeyboards</h6>
                  <a href="https://twitter.com/BustedKeyboards">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@quinnpixelart</h6>
                  <a href="https://twitter.com/QuinnPixelArt">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
<!--Kill it With Fire card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/kill-it-with-fire.jpeg" alt="This is a promotional image for Kill it with Fire which features a spider and a pizza box on top of a counter with ninja stars embedded into the surface.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Kill It With Fire</h4>
                <p>
                  The spider - mankind’s most ancient and deadly nemesis. As a licensed Kill It With Fire exterminator, it’s time to fight back!  Assemble your arsenal of increasingly excessive weapons, track spiders across suburbia, and burn everything in your path!  To defeat spiders you must exploit their weaknesses!!
                  </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1179210/Kill_It_With_Fire/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Casey Donnellan Games LLC</h6>


                <div class="dev-social">	
                  <h6>@caseydonnellan</h6>
                  <a href="http://twitter.com/caseydonnellan">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
<!--ART7 card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/art-7.png" alt="This is a promotional image for ART7 featuring pixel art of the word “love” written on a canvas that is set on an easel. It is black and white.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>ART7</h4>
                <p>
                  ART7 is a 1-bit Art Gallery for the Playdate Handheld Console. You can download the game and run it on Playdate Hardware or the Playdate Simulator included in the Playdate Developer SDK! In ART7 there are pieces from the Indie Playdate Dev community, from the Gameboy Camera community, my own work and that of other artists at large. There's a little more game in here than a lot of folks might expect actually. Not the most game that could have been, but there are definitely some things to be found and discovered.
 <br>
ART-O-Ween: Night at the Gallery is a Spooooooky Adventure Game held on an expanded version of the gallery grounds. Your night will involve tricks, treats and will be a real.. Monster Mash! (I'm not sorry for that at all.)
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://ledbetter-games.itch.io/art7">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Dylan Warren</h6>
                <h6>Publisher: Ledbetter Games</h6>

                <div class="dev-social">	
                  <h6>@LDRB_art</h6>
                  <a href="https://twitter.com/LDBR_art">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--Untitled Stair Game card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img  src="/img/Archived-img/October-2022/games/untitled-stair-game-1.png" alt="This is a promotional image for Untitled Stair Game which features a 3D render of a room in a multi-story building where you can see the brick lined entrance to a staircase. The image is black and white and features a pointillism style. ">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Untitled Stair Game</h4>
                <p>
                 Untitled Stair Game is a Survival-Horror game with a main focus on Survival. It is being made by Roy Ott and Steve Gutierrez. The game is about the player's journey down a seemingly infinite staircase. To survive inside the staircase, the player will scavenge supplies and craft tools to aid in their descent. But where could this staircase lead? It is hard to tell… it is just so dark.
 
The game is currently in early alpha, and we hope to collect useful playtest data for our primary gameplay loop. </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://gamesyall.com/html/event-october-2022">Coming Soon!</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Roy Ott and Steve Gutierrez</h6>


                 <!--<div class="dev-social">	
                  <h6>@bimbointech</h6>
                  <a href="https://www.instagram.com/bimbointech/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>-->
                </div>
              </div>
            </div>
          </div>     
       
 <!--CYCO Game card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/cyco.jpeg" alt="This is a promotional image for CYCO that features two fighters locked in battle with a sunburst in the background. The image is black and white with a noisy texture. ">
             </div>  

              <!--Game Text -->
              <div>
                <h4>CYCO</h4>
                <p> CYCO is a fully 3D fighting game that offers a suite of novel gameplay mechanics and character controls. Enter into a new paradigm of lethal combat and shield those whom you care for from the ceaseless blasts of natural entropy and interhuman deception. Claim your future, CYCO.
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1948680/CYCO/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: PHOSPHORUS</h6>

					<div class="dev-social">	
                  <h6>@p1105405</h6>
                  <a href=" https://www.instagram.com/p1105405/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>    
                </div>
              </div>
            </div>
          </div>    
                                           

<!--Trombone Champ card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/trombone-champ.jpeg" alt="This is a promotional image for Trombone Champ which shows two trombone players playing their instruments behind a bold title “Trombone Champ” rendered in intense rounded font with yellow/red lettering for champ and white/blue lettering for Trombone.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Trombone Champ</h4>
                <p>
                Trombone Champ is the world's first trombone-based rhythm music game. Unlike most music games, you can freely play any note at any time. You're not just following along with the music, you're actually playing the music! Play over 20 songs, collect all 50 Tromboner Cards, and discover the secrets of the Trombiverse!
                 </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1059990/Trombone_Champ/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer + Publisher: Holy Wow Studios</h6>

         <div class="dev-social">	
                  <h6>@HolyWowStudios</h6>
                  <a href="https://twitter.com/HolyWowStudios">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--WTMH The Waiting Machine card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/the-waiting-machine.png" alt="This is a promotional image for the waiting machine which features white, red, and orange letters that are layered and arranged in a circle fashion over a black background.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>The Waiting Machine</h4>
                <p>
                 “The Waiting Machine” is a website and digital art project where people could go get distracted while waiting for results of any type of applications, especially the ones that involve big, complex bureaucratic systems, such as governments, companies, and universities.
 
				Ranran Fan (b. China) is a device-maker and an artist who works in photography, new media, installation, and performance. She invents various devices as solutions to explore the absurd existence of the free individual female subject under an oppressive political and patriarchal environment. Through these devices, she is able to create a separate world as an alternative mode of existence.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://thewaitingmachine.xyz/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Ranran Fan</h6>

                <div class="dev-social">	
                  <h6>@ranran_narnar</h6>
                  <a href="https://www.instagram.com/ranran_narnar/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div> 
          
          <!--Game Jam Game card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2022/games/game-show-game-jam.png" alt="This is a promotional image for Come on Down!, which is a showcase of game shows made by Fantastic Arcade’s community of artists, game devs, and friends. The image features a pixel-art stage with three contestant podiums featuring spooky pixel art of a pumpkin, a bat, and a witch hat.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Come on Down!</h4>
                <p>
                Come on Down!™ to the Museum of Human Achievement for game shows!

Outside at the MoHA drive-in stage we will showcase game shows made by our very own community of witches, bats, and pumpkins at the Fantastic Arcade Game Show Game Jam. Hosted by the infamous Shannon Stott and Coby West!
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://gamesyall.com/html/event-october-GJ-2022">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Fantastic Arcade</h6>

                <div class="dev-social">	
                  <h6>@GamesYall</h6>
                  <a href="https://twitter.com/GamesYall">
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
                    <img src="/img/Archived-img/October-2022/photos/oct-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2022/photos/oct-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2022/photos/oct-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2022/photos/oct-gy-photo-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/October-2022/photos/oct-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2022/photos/oct-gy-photo-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>
        
        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <!--
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="[Event image here]" style="width: 375px; height: 375px;"> 

                </div>
            </div>
        </div>
        -->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
