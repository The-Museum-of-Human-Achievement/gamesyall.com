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

$headTitle = "December 2022 Meetup - Games Y'all";
$headImage = "/img/event-img/GY-Banner-Dec.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-december-2022">December 3, 2022</a>
                </p>
            </div>
        </div>
  

       <!--Content and Information-->
        <div class="row">
             <div class="col-4">
                    <h1>December Meetup</h1>
                
                    <h4> December 3, 2022 - 7-10pm</h4>
                
				<p>The Museum of Human Achievement, <a href="https://goo.gl/maps/B9JgLYYeKq9nKLue7">3600 Lyons Road, Austin, TX 78702</a> </p>
	
			
				     </div>
				<div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Dec.png" alt="Games Y'all presents our December Meetup'">
            </div>
            <div class="col-10">
			<p>	Our final meetup of the year! No theme for December, just cool community submitted games, hot drinks, and holiday fun! Bring your friends, roommates, and co-workers (the ones you like!).</p>
<p>The Museum of Human Achievement hosted some friends at the MoHA 🚗 Drive-In from 6-10pm!<br><br>
🎁 Holiday Market with The Mall<br>
🔮 Bingo with Cindy Popp<br>
🎥  Screenings of Welcome to the Dollhouse and Clueless<br>
 <p/>
 
<br>
      <h5>Games Y'all + Fantastic Arcade</h5>
<p>Games Y’all is a meetup presented by Fantastic Arcade & The Museum of Human Achievement, held every month at venues around Austin for indie devs, digital artists, and games fans.
<br><br>
Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>

       </div>
<!--Venue details can be deleted when event has passed-->    
                  

            <!--If this is a upcoming event, uncomment the button element below-->
            	<br>
     
                
        </div> 
        </div>
    <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
   <!--Yoko Redux card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/yoko-redux.png" alt="- - A rectangular promotional image for Yoko Redux: Dreams of a Blue Planet. It features a landscape with varying shades of blue and two red celestial bodies in the background. There is a robot humanoid next to a 80s style sports car."> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Yoko Redux: Dreams of a Blue Planet</h4>
                <p>Yoko Redux: Dreams of a Blue Planet is driven by a rich, often cryptic, story as you control one of three main characters over the course of seven immersive chapters. The story takes you down the paths of Locke, Jeanne and Primus in a world just waiting to be discovered and cracked open. 
 <br><br>
Follow along on a progression through the psychedelic in multiple color palettes. Try to hold on to your sanity through mind bending visuals, cinematic camera angles and logic twisting story and you may discover...who is Yoko?
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1869560/Yoko_Redux_Dreams_of_a_Blue_Planet/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Missing Sentinel Software<h6> 
                <div class="dev-social">
                  <h6>@missingsentinel</h6>
                  <a href="https://twitter.com/missingsentinel">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--The Living Space card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/living-space.png" alt="- A square promotional image for The Living Space. It features the title in black with a beige, yellow, red, and black floral pattern in the background.">
                </div>  

              <!--Game Text -->
              <div>
                <h4>The Living Space</h4>
                <p>
                  The Living Space is a first-person immersive experience which relies heavily on surreal visuals and dream-like sounds. Allowing players to freely roam at their own pace with no defined goals, the environment within the game alters, visually and aurally, based on the player’s gaze and movement. Your surroundings change depending on what areas you go to, yet their locations are not given to you or defined. Thus, the game doesn’t explicitly tell a single story but invites players to explore, look, listen, and take their time, nurturing their own story. 
<br><br>
Costas Constantinides is a game developer and illustration artist who creates surreal experiences and art inspired by folklore and fantasy. His work consists of intricate and mythical illustrations, and dream-like games. In his games, he seeks to combine his illustration work with digital environments and visual effects to amplify the experience.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://consc.itch.io/the-living-space">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Costas Constantinides</h6>


                <div class="dev-social">	
                  <h6>@costasconsc</h6>
                  <a href="https://www.instagram.com/costasconsc/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>          
          
          <!--Barnacle Goose card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/barnacle-goose.png" alt="A square promotional image for The Barnacle Goose Experiment. It features the game title in gothic black text on a white background."> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>The Barnacle Goose Experiment</h4>
                <p>The Barnacle Goose Experiment is an abiogenesis idle clicker game, set in a world where spontaneous generation is commonplace.
<br><br>
You play as a researcher studying the creation of new and living things out of raw and non-living matter. In order to undertake this work without experimental contamination, you are locked inside of a hermetically sealed dome— entirely empty. As such, the only raw material for experimentation is that of your own body.
<br><br>
Through the accretions of self, the slow learning of mechanical systems, and the simple duration of time, you must uncover the combinatory logic of spontaneous generation and make again a living world from a dead one.
<br><br>
Music from Ben Babbitt, halina heron, Geotic, Adobo, Jún, Smokey Emery, Sadurn, Zac Traeger, SamanthaZero, and Eli Rainsberry on the in-game radio.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://everest-pipkin.com/barnacle-goose/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Everest Pipkin<h6> 
                <div class="dev-social">
                  <h6>@everestpipkin</h6>
                  <a href="https://twitter.com/everestpipkin">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div>        

<!--Super Mario: Magnum Opus card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/magnum-opus.png" alt="- - A square promotional image for Super Mario: Magnum Opus featuring a black background and the tile rendered in alternating colors of Blue, Yellow, Red, Green from letter to letter.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Super Mario: Magnum Opus</h4>
                <p> 
Introducing an all new Mario adventure, combining elements of classic Mario platforming, action-packed Run N' Gun gameplay, and a gripping cinematic storyline about family and betrayal.
 <br><br>
Journey through flowering fields, ancient desert ruins, nuclear wastelands, and much more. Join the Mario Bros. on their mysterious search to find their third brother, all while fighting against the mischievous business man known as JB.
</p>
    <br> <br>    <br> <br>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://mfgg.net/index.php?act=resdb&param=02&c=2&id=39068">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: grizzledwarveteran23</h6>

                <div class="dev-social">	
                  <h6>@smmoproject</h6>
                  <a href="https://twitter.com/smmoproject">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
<!--El Paso, Nightmare card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/el-paso-nightmare.png" alt="- - A rectangular promotional image for El Paso Nightmare. It shows a red-headed male human shooting at three black werewolves with a biblically accurate angel in the background.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>El Paso, Nightmare</h4>
                <p> Slay hordes of vampires, werewolves, and Biblically-accurate angels in this standalone survival horror FPS side story from the El Paso, Elsewhere universe.
<br><br>
El Paso, Nightmare is a first-person horror game about stepping out of your motel room to get a bucket of ice, and instead being greeted by horrors beyond imagination. Become down-on-his-luck IT programmer Luis Rojas as he attempts to escape the dimension-shifting disaster that players will experience in the upcoming El Paso, Elsewhere. Flee iconic horror monsters from film, literature, and myth before turning the tables with an arsenal of powerful weapons.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2154820/EL_PASO_NIGHTMARE/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
               <p> El Paso, Elsewhere comes out next year! <a href="https://store.steampowered.com/app/1546310/El_Paso_Elsewhere/">Wishlist on Steam Here</a>
                </p>
              <div>
                <h6>Developer: Strange Scaffold</h6>


                <div class="dev-social">	
                  <h6>@StrangeScaffold</h6>
                  <a href="https://twitter.com/StrangeScaffold">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div>   
          
<!--Hyper Demon card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/hyper-demon.png" alt="- - A square promotional image with the title Hyper Demon in white. There are 3 shimmering skulls with a rainbow shimmer effect.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Hyper Demon</h4>
                <p>HYPER DEMON is an FPS like no other. a pearl of lightning. a dream from the future. a drop of poison. a swan song. The faster you slay demons, the harder the game and the higher your score. There is an end. Will it see you?		
                </p>
                <br> <br>    <br> <br>     <br> <br>     <br> <br>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1743850/HYPER_DEMON/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sorath</h6>

                <div class="dev-social">	
                  <h6>@sorathdev</h6>
                  <a href="https://twitter.com/sorathdev">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--Bachelor in Paradise in the Sims 4 card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/December-2022/games/bachelor-sims-4.png" alt="- - A rectangular promotional image for Bachelor in Paradise in The Sims 4. It features the game title along with screenshots from the game in the background and 2-D character cutouts of a female and male character with green diamonds above their heads.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Bachelor in Paradise in the Sims 4</h4>
                <p>
                  Systems at risk!!! What system? The Bachelor Franchise! What ever happened to good old American
values? Where (white) men and women looked for love for the Right Reasons? Whatever happened to
our heteronormative representation? The pure symbol of the rose?
<br> <br>
The solution? Break it even more! Take advantage of its greatest (and messiest) product, Bachelor in
Paradise, put it in the Sims 4, and turn it into a study on AI and the construction of “natural” narratives
through editing, addition, and omission.
<br> <br>
Rudy Falagan (b.1999, he/it) is an interdisciplinary artist with a BFA in Fine Art from the University of Southern California, Roski School of Art and Design. 
<br> <br>
His interests span from internet culture to the materiality of clay to the human capacity for information, and oftentimes draws from his own ordeals with mental and physical health as a way to analyze the limits of identity creation in both digital and analog space. It is very grateful to have the ability to do these things.

 					</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.welcometomyhomepage.net/">Experience It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Rudy Falagán</h6>


                <div class="dev-social">	
                  <h6>@poptropican</h6>
                  <a href="https://www.instagram.com/poptropican/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
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
                    <img src="/img/Archived-img/December-2022/photos/GY-dec-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/December-2022/photos/GY-dec-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/December-2022/photos/GY-dec-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/December-2022/photos/GY-dec-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/December-2022/photos/GY-dec-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/December-2022/photos/GY-dec-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
