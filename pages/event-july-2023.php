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
$headDescription = "This month’s theme is IMPACT GAMES! We’ll be playing meaningful submissions from our community (with the devs in attendance!) and other indie favorites with messages that extend beyond the screen.";
$headImage = "/img/event-img/GY-Banner-Aug.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-july-2023">July 27th, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>July Meetup</h1>
                
                    <h4>July 27th, 2023 - 7-10pm</h4>
				<p>Last Stand Brewing <a href="https://goo.gl/maps/jX7hc7StDWv2XjoB7">7601 S Congress Ave Building 6, Austin, TX 78745</a> 
				</p>
	
			
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16380635/games_yall_july_meetup">RSVP</a></button>
            -->
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-July-23.png" alt="Fantastic Arcade presents, Games Y'all July Meetup at Last Stand Brewing">
            </div>
            

		 <div class="col-10">

<p>We're going south y'all! Our July meetup will feature all indie tabletop games developed right here in Austin 🎲♟️🃏🧩
<br><br>
Let's hang inside, cool down with some AC, and play some games! We'll have 5 tables run by our guest developers and 1 table for open play. Prior to the event you will receive an email where you can choose which games and which sessions you want to join.
<br>
    <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by Fantastic Arcade for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>

      <h5>Fantastic Arcade</h5>
<p>Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>

    <!--Venue details can be deleted when event has passed
<h5>Venue + Health Details<h5/>
<p>This event will be indoors and outdoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!
<p/>
-->
          </div>
        </div>
        

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
  <!--Tiny Minotaur card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2023/games/tiny-minotaur.png" alt="A rectangular promotional image for Tiny Minotaur PVP"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Tiny Minotaur PVP</h4>
<p>Tiny Minotaur PVP Combat is a  guerilla style fast-paced Player vs. Player FANTASY TTPRG based on the Combat Systems of the immersive Tiny Minotaur Fantasy World! Created by Dana Mcknight and used in the Tiny Minotaur's live-action Quests (www.tinyminotaur.com), Tiny Minotaur PvP Combat is an underground phenomenon, encouraging players to meet IRL in local bars on full moons to duke it out for  FANTASY BATTLE DOMINANCE
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.tinyminotaur.com/store">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Tiny Minotaur<h6> 
                <div class="dev-social">
                  <h6>@thetinyminotaur</h6>
                  <a href="https://www.instagram.com/thetinyminotaur/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Turf War card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/July-2023/games/turf-wars.png" alt="A  promotional image for Turf Wars"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Turf Wars</h4>
                <p>It’s neighborhood rivalry run amok! Turf War is a strategy card game where players duel their next-door nemesis to prove that they're the best on the block. Build the perfect yard, win over your neighbors, and do whatever it takes to come out on top of this zany backyard battle. 2–4 Players. 30 Min. Ages 14+.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://gadabout.games/games/turf-war/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Gadabout Games</h6>
                <div class="dev-social">
                  <h6>@gadaboutgames</h6>
                  <a href="https://www.instagram.com/gadaboutgames/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
            <!--Voyage card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2023/games/voyage.png" alt="A rectangular promotional image for Voyage"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Voyage</h4>
<p>Set sail! VOYAGE is a map-making game of stories on the sea. Roll dice, draw cards, and answer prompts to create the story of your ship and its crew on its journey. Catch the wind, make discoveries, and draw your map as you chart your voyage. Will you discover an uncharted island? Dangerous pirates? Haunted treasure? A big whale?  
<br><br>
VOYAGE is written to be played either on your own or with any number of your friends, and works well as a standalone game or as a side game in the middle of an ongoing campaign.  Based on the Alone Among the Stars ruleset and created by Brendan McLeod, a professional video game developer and hobbyist tabletop developer with too many projects and not enough time.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://sulcata.itch.io/voyage">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sulcata<h6> 
                <div class="dev-social">
                  <h6>@_sulcata</h6>
                  <a href="https://twitter.com/_sulcata">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Chek card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/July-2023/games/chek.png" alt="A  promotional image for Chek"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Chek</h4>
                <p>Chek is a 2 or 4-player pass'n play board game that is also available for the Playdate! The game is designed to sit between checkers and chess in terms of strategy - quite simple to learn but deep in interaction. A game of Chek often swings between careful movement of groups of allied pieces, followed by a bloodbath of combat.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://ledbetter-games.itch.io/chek">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Ledbetter Games</h6>
                <div class="dev-social">
                  <h6>@ldbr_art</h6>
                  <a href="https://www.instagram.com/ldbr_art/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
            <!--Orc Borg x Dungenerator card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2023/games/dungenerator-orcborg.png" alt="A rectangular promotional image for Orc Borg x Dungenerator"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>ORC BORG x DUNGENERATOR</h4>
<p>
ORC BORG is a zine-length standalone RPG about orcs in space with beautiful, brutal art on every page. ORC BORG is a collaboration between Grant Howitt (Spire, Heart, Honey Heist, Goblin Quest) and ROLLINKUNZ! It's powered by the MÖRK BORG engine - so it's fast, cruel, and obsessed with the 
apocalypse. 
<br><br>
THE DUNGENERATOR is a deck of cards that generates inky, organic dungeons! Each Series features 60+ pieces of hand-inked art by ROLLINKUNZ! on 52 double-sided cards, a simple and unique dungeon-generation algorithm, and a PDF of detail prompt tables for each room. 
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://linktr.ee/ROLLINKUNZ">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: ROLLINKUNZ!<h6> 
                <div class="dev-social">
                  <h6>@rollinkunz</h6>
                  <a href="https://www.instagram.com/rollinkunz/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Kingdom Eighties card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/July-2023/games/kingdom-eighties.png" alt="A  promotional image for Kingdom Eighties"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Kingdom Eighties</h4>
                <p>Kingdom Eighties is a short story-based standalone expansion to the award-winning Kingdom series: A single player adventure of micro-strategy and base building, inspired by the neon lights of the eighties.
				<br><br>
You play as The Leader, a young camp counselor who will have to defend their town and family from the relentless attack of the mysterious Greed. What are these monsters, and why are they trying to steal their family legacy, the Crown of Creation?
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1956040/Kingdom_Eighties/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Fury Studios</h6>
                <div class="dev-social">
                  <h6>@kingdomthegame</h6>
                  <a href="https://twitter.com/kingdomthegame">
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
                    <img src="/img/Archived-img/July-2023/photos/GY-july-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/July-2023/photos/GY-july-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/July-2023/photos/GY-july-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/July-2023/photos/GY-july-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/July-2023/photos/GY-july-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/July-2023/photos/GY-july-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
