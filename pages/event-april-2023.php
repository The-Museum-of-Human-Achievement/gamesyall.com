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

$headTitle = "April 2023 Meetup - Games Y'all";
$headImage = "/img/event-img/GY-Banner-April-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-april-2023">April 15th, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>April Meetup</h1>
                
                    <h4> April 15th, 2023 - 7-10pm</h4>
                
				<p>The Museum of Human Achievement, <a href="https://goo.gl/maps/B9JgLYYeKq9nKLue7">3600 Lyons Road, Austin, TX 78702</a> </p>
	
			
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/15897103/games_yall_april_meetup">RSVP</a></button>-->
       
	
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-April-23.png" alt="Fantastic Arcade presents, Games Y'all April Meetup">
            </div>
            

		 <div class="col-10">
			<p>Fantastic Arcade presents Games Y’all 🕹️ at the Museum🖼️! 
<br><br>
Have you been to our homebase, MoHA? The Museum of Human Achievement is like that really fun/weird relative who shows you avant-garde art and takes you to get snacks whenever you want. Come hangout and play a fresh roundup of community submitted indie video games! Every month the Games Y’all community gathers to play games, talk about projects, and connect to our local indie games community.
<br><br>
🖥️ You can also meet the CATS+! The Collaborative Art + Technology Situation (CATS+), a new program at The Museum of Human Achievement, groups artists and tech wizards to collaborate on projects and share their processes. Come get curious about art + technology with projects, performances, experiments, and processes from CATS+ resident artists and tech wizards.
<br><br>
👾 Also on view is pfft: an evastars retrospective created by Rachel Weil and FEMICOM Museum for Welcome to my Homepage. A retrospective celebrating the underground pixel-art subculture led by teenage webmistresses of the early 2000s. 
<br><br>
Donate what you can! Space is limited, RSVP please.
<p/>
<br>
    <!--Venue details can be deleted when event has passed
<h5>Venue + COVID Details</h5>
<p>This event will indoors and outdoors. There is a large parking lot and street parking available.
<br>
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you are experiencing symptoms. Masks are welcome! Hand sanitizer and wipes for controllers will be available. <p/>
<br>-->
      <h5>Games Y'all + Fantastic Arcade</h5>
<p>Games Y’all is a meetup presented by Fantastic Arcade & The Museum of Human Achievement, held every month at venues around Austin for indie devs, digital artists, and games fans.
<br>
Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>
          </div>
        </div>

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
  <!--AATNC card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2023/games/aatnc.png" alt="A rectangular promotional image for Astra and the New Constellation showing the title in a bold yellow and white pixelated font."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Astra and the New Constellation</h4>
<p>Astra And The New Constellation is a retro-inspired mascot platformer, developed entirely in the Pico-8 fantasy console engine. Play as the titular starlet Astra as she journeys across the galaxy, collecting stardust to form a constellation of her own to call home. AATNC features 15 distinct levels, nearly 30 minutes of original music, and a variety of options and accessibility features to support players in making the experience fit their preferences and needs.
<br><br>
Created by hobbyist developer Travis "rarelikeaunicorn" Antosh as a passion project over the course of three years, AATNC is their first commercial release and an attempt to showcase the power of Pico-8 in spite of its significant constraints while also harkening back to the games they played (and the ones they didn't get to play!) in their own childhood during the 90s.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://rarelikeaunicorn.itch.io/astra">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: rarelikeaunicorn<h6> 
                <div class="dev-social">
                  <h6>@travisakarare</h6>
                  <a href="https://twitter.com/travisakarare">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Alter Ego card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/April-2023/games/alter-ego.png" alt="A rectangular promotional image for Alter Ego featuring the title of the game in white with a subtitle “a game by fruit salad torture”. In the bottom right there a drawing of their raccoon character in blue, then red, and then yellow in order from left to right."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Alter Ego</h4>
                <p>Alter Ego is a 2D point-and-click narrative-based adventure game featuring psychological elements. Help Reese the rat uncover the mystery as to how the corpse of her partner ended up in her kitchen. Explore two levels with atmospheric environments, solve puzzles, and use the items in your inventory to uncover the mystery behind Reese and Winona’s relationship, and find the real culprit—if there is one!
                </p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://chemicahl.itch.io/alter-ego">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Fruit Salad Torture</h6>
                <div class="dev-social">
                  <h6>@ALTER_EGOGAME</h6>
                  <a href="https://twitter.com/ALTER_EGOGAME">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
             
 <!--Stellar Watch card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2023/games/stellar-watch.jpeg" alt="A rectangular promotional image for  Stellar Watch that features an outer space scene rendered in basic geometric shapes. The title is centered on the image in a white font, the background is a blend of purples, blues, and yellows."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Stellar Watch</h4>
<p>Stellar Watch is a tower defense game with space shooter elements. Deploy, upgrade, and research drones to protect the spaceship. Steer your ship to gain tactical advantages and outmaneuver your enemies.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2058070/Stellar_Watch/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: White Leaf<h6> 
                <div class="dev-social">
                  <h6>@StellarWatch_gg</h6>
                  <a href="https://twitter.com/StellarWatch_gg">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Light of Alariya card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/April-2023/games/light-of-alariya.jpeg" alt="A rectangular promotional image for Light of Alariya which features the games main character standing on a rocky planet surface with the game title."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Light of Alariya</h4>
                <p>Light of Alariya is an open-world, third-person, exploration puzzle game made by 27 student devs at SMU Guildhall within a span of 6 months. In Light of Alariya, you traverse the ancient alien temples and ruins to restore the power of the stars and awaken your sleeping civilization.
                </p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2142840/Light_of_Alariya/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: SMU Guildhall</h6>
                <a href="https://www.smu.edu/Guildhall/Academics/Student-Work/Team-Game-Projects/Light-of-Alariya">More info</a>
                </div>
              </div>
            </div>
          </div>          
          
          <!--Spacekraft! card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2023/games/spacekraft.jpeg" alt="A rectangular promotional image for Space Kraft that features an outer space scene with a planet to the left and a rocket ship to the left with the game title in the center."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Spacekraft!</h4>
<p>Explore planets, solve puzzles, gather resources and craft systems with this physics based space simulation arcade game. Refuel, repair and upgrade your ship to find your way back to mother earth.
<br><br>
SpaceKraft is a physics based space arcade game, with a story, simulation, puzzle, and open world mechanics twists. Easy to learn, hard to master controls are a little bit challenging, but using a spaceship via various gravity forces in an open-world galaxy will make you feel glorious and fun.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1703020/SpaceKraft/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: OverKraft<h6> 
                <div class="dev-social">
                  <h6>@SpaceKraft_game</h6>
                  <a href="https://twitter.com/SpaceKraft_game">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Boneraiser Minions card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/April-2023/games/boneraiser-minions.jpeg" alt="A rectangular promotional image for Boneraiser Minions that shows the game title in Pink and Fuchsia on a purple, blue, and black graveyard background. The image is rendered in the pixel style."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Boneraiser Minions</h4>
                <p>Amass an army of demonic undead to fight endless waves of heroes intent to end your boneraising ways! In this gothic-horror auto-battle roguelite, use the bones of slain heroes to raise your minions, collect powerful relics and spells, and unlock meta upgrades, all to survive King Gigald's crusade!
				<br><br>
				Caiys is a solo game developer making homebrew games in the UK.
				</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="http://caiysware.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Caiys</h6>
                <div class="dev-social">
                  <h6>@caiysware</h6>
                  <a href="https://twitter.com/caiysware">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
          <!--Espada de Sheris card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2023/games/espada-de-sheris.png" alt="A rectangular promotional image for Espada de Sheris, or Sword of Sheris, which features the game title rendered in a pixel font with a start button below."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Espada de Sheris</h4>
                <p>Espada is a solo indie game with pixelart 8bit inspired graphics, level design focused parkour that tell In the year 4000 where humans became extinct and what exists are cats and Duzker aliens who are called demons according to cats.
				<br><br>
				A euro ninja cat named Kibo was guarding the crystals of power until they were stolen by the Sovereign Stickers.
				</p>
				
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://uncached.gamemonetize.co/8chv08oikuak6kegbuuhxy0ds3h0cxc4/">Play It Here</a>
                </button>

              </div>

             <!--Dev Text-->
              <div>
                <h6>Developer: SketBR</h6>
                <div class="dev-social">
                  <h6>@Sket#3815</h6>
                  <a href="https://discord.gg/mg9MdPqg5N">
                    <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>         
            
 <!--Pfft! card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/April-2023/games/pfft.jpg" alt="A rectangular promotional mixed media image for Pfft!"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>pfft: an evastars retrospective</h4>
                <p>Approaching the 20th anniversary of evastars' "pixel friends" series, the original members of evastars have partnered with the Welcome to my Homepage and digital preservationist Rachel Simone Weil of FEMICOM Museum to produce pfft: an evastars retrospective. This retrospective project includes an official remaster of selected works from the pixel friends series, interviews, an illustrated glossary full of y2k web history, plus throw-back merch. Join us in celebration of this influential all-girl net art collective!
				<br><br>
				Rachel Simone Weil combines approaches from electrical engineering, art history, and DIY culture to create video art and electronic objects that reimagine the history of technology. She has produced glitch art and interactive works for formats ranging from payphones to browsers to 1980s video game consoles to handmade textiles. Weil's work is united by playful subversion of historical narratives, often through the creation of fakes and forgeries, to imagine a whimsical playground of electronic artifacts from an imagined past that privileges diverse participation over commercial viability. She has performed, shown work, or curated shows for museums and small DIY shows alike, including Blip Festival (New York), the V&A Museum (London), Glitch Festival (Chicago), and the Living Computer Museum (Seattle). Weil is also the founder of FEMICOM Museum.
			</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="http://femicom.org/fun/pfft/">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Rachel Weil</h6>
                <div class="dev-social">
                  <h6>@partytimehxlnt</h6>
                  <a href="https://twitter.com/partytimehxlnt">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
          <!--Joshua Kery card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2023/games/joshua-kerry.png" alt="A rectangular promotional image for A forthcoming archive of lost art."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>A Forthcoming Archive of Lost Art</h4>
<p>
Josh Kery revisits the occurrence of a theft as an occasion to reflect on art making, record collecting, and preservation with his dad, Peter Kery. Fraudulent movers stole most of Peter’s possessions during a cross country move in 2021.​ Among the things not stolen are his complete vinyl collection and a portion of his photographic portfolio from the 90s. 
During his residency, Josh created a web archive of audio of stories recorded during a series of interviews paired with B sides of original prints by Peter and A sides of new images by Josh. Album explores objects as memory triggers, and archiving as a way of accepting loss.
<br><br>
Josh Kery is a multidisciplinary artist making work about passing down stories and possessions between family members. He explores how family history is written and how outside events shape it in turn. Kery has shown work at the Philadelphia Fringe Festival, the Pennsylvania Center for Women in Politics, and the Frank-Ratchye STUDIO for Creative Inquiry. In 2020, he earned a BFA from Carnegie Mellon University in Pittsburgh, and moved to Washington DC in 2022.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/joshua-kery">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Joshua Kery<h6> 
                <div class="dev-social">
                  <h6>@joshuatkery</h6>
                  <a href="https://www.instagram.com/joshuatkery">
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
                    <img src="/img/Archived-img/April-2023/photos/GY-apr-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/April-2023/photos/GY-apr-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/April-2023/photos/GY-apr-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/April-2023/photos/GY-apr-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/April-2023/photos/GY-apr-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/April-2023/photos/GY-apr-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
