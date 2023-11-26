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

$headTitle = "March 2023 Meetup - Games Y'all";
$headDescription = "Warmth approaches! We're back with our ol' friends at Batch Craft Beer for our 3rd meetup of the year.";
$headImage = "/img/event-img/GY-Banner-Mar-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-march-2023">March 11, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>March Meetup</h1>
                
                    <h4> March 11th, 2023 - 7-10pm</h4>
                
				<p>Batch Craft Beer <a href="https://goo.gl/maps/SMK8u7jUcgoQHxhXA">3220 Manor Rd, Austin, TX 78723</a> </p>
	
			
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/15620303/games_yall_march_meetup">RSVP</a></button>
       
				<br>-->
	
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Mar-23.png" alt="Fantastic Arcade presents, Games Y'all March Meetup">
            </div>
            

		 <div class="col-10">
			<p>Warmth approaches! We're back with our ol' friends at Batch Craft Beer for our 3rd meetup of the year. We've got an excellent selection of games along with a showcase of local musicians. Got some games industry friends visiting from out of town? Bring em along!
			<br><br>

 &nbsp; &nbsp; &nbsp; &nbsp; 🎶Music 🎶<br><br>
 &nbsp; &nbsp; &nbsp; &nbsp;exodrifter<br>
 &nbsp; &nbsp; &nbsp; &nbsp;Emily E. Meo <br>
 &nbsp; &nbsp; &nbsp; &nbsp;DJ ROCKMAN<br>
 &nbsp; &nbsp; &nbsp; &nbsp;Retr05pect<p/>

    <!--Venue details can be deleted when event has passed
<h5>Venue + COVID Details</h5>
<p>This event is indoors and outdoors. There is a large parking lot and bike racks. Batch Craft Beer has a selection of Coffee, Kolaches, Baked Goods, and Craft Beer.
<br><br>
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you are experiencing symptoms. Masks are welcome! Hand sanitizer and wipes for controllers will be available. <p/>
<br>-->
      <h5>Games Y'all + Fantastic Arcade</h5>
<p>Games Y’all is a meetup presented by Fantastic Arcade & The Museum of Human Achievement, held every month at venues around Austin for indie devs, digital artists, and games fans.
<br><br>
Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>
          </div>
        </div>

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
  <!--Solastalgia card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/solastalgia.png" alt="A rectangular promotional image for Solastalgia featuring a sunlit silhouette of a stag, with sun beams in the foreground, and a green forest scene in the background."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Solastalgia</h4>
<p>Solastalgia is a short interactive visual poem about loss, longing, and dislocation. The word solastalgia was coined by philosopher Glenn Albrecht in his 2003 paper Solastalgia: A new concept in human health and identity. It describes it as the pain experienced when there is recognition that the place where one resides and that one loves is under immediate assault. It is manifested in an attack on one’s sense of place, in the erosion of the sense of belonging to a particular place and a feeling of distress about its transformation.
<br><br>
Content warning: Flashing lights, sudden loud noises
<br><br>
Designed and developed by Farfama. Written by Sivani.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://farfama.itch.io/solastalgia">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Farfama Hargaaya<h6> 
                <div class="dev-social">
                  <h6>@farfama</h6>
                  <a href="https://twitter.com/farfama">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Memento Mori card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/March-2023/games/memento_mori.png" alt="A square promotional image for Memento Mori. It features a pixel drawing of a skeleton decaying in grass."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Memento Mori</h4>
                <p>Memento Mori is a short Twine piece focused on facing your own mortality.
				<br><br>
				It begins by asking the details of your ideal death, and proceeds on to details of how you hope your corpse is handled. Memento Mori also includes links to various educational resources for the death-positive movement and how to get involved in preparing for the inevitable.
				</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://mofthomp.itch.io/memento-mori">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Molly Thompson</h6>
                <div class="dev-social">
                  <h6>@mofthomp</h6>
                  <a href="https://twitter.com/mofthomp">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
 <!--Vessels card-->  
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/vessels.png" alt="A square promotional image for Vessels. The image shows the title Vessels in white text with a game character floating behind the title gasping for breath with 3 disembodied heads of other game characters in the background.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Vessels</h4>
                <p>
                Quarantined inside an airlock. No memories. No way out. The remaining crew thinks there’s something wrong with you, but the Voice says it’ll help you escape. Navigate volatile conversations & unravel mysteries in this narrative adventure about trust, self-destruction, & shifting identities. 
				<br><br>
				Vessels is an IGF award winning 2-3 hour, character-driven story, in which no one is exactly who they appear to be… even you. With the help of the enigmatic Voice, rewind time and control the other crew members to explore, manipulate, and gain control. Experience atmospheric, environmental storytelling as you piece together clues on a ship reeling from a grisly death and spreading paranoia. Made by a team local Austin game devs -- the Local Space Survey Corps! 
				</p>
				
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.vesselsgame.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Local Space Survey Corps</h6>


                <div class="dev-social">	
                  <h6>@VesselsGame</h6>
                  <a href="https://twitter.com/VesselsGame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div>       
 <!--ControllerType card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/controller-type.jpg" alt="A rectangular promotional image for controller type showing the basic program design for this alternate typing controller.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>ControllerType</h4>
                <p>
                  This is a simple prototype for an alternate way of typing using a gamepad without using an on-screen keyboard. It's designed similar to a radial menu, with the four primary buttons (ABXY) each housing a different menu containing 8 letters. The user selects the letter they wish to type from the menu using the joystick.
ControllerType is an alternative, faster way of typing using a gamepad that avoids an onscreen keyboard, instead opting to use a radial menu. While this is mainly just a prototype, there are a variety of options included to help make this method of typing as approachable as possible (as well as a few other surprises hidden inside).
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="">Coming soon!</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Conner Arrington </h6>
            	 <div class="dev-social">	
                  <h6>@EraserLark</h6>
                  <a href="https://twitter.com/EraserLark">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>  
                  
<!--Tuck & Rolo card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/tuck-rolo.png" alt="A square promotional image for Tuck & Rolo. The image is made in a pixel art style and shows a scene from the game where the characters Tuck, a skeleton, and Rolo, a bird, are fighting a red demon.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Tuck & Rolo</h4>
                <p>Tuck and Rolo is a spooky arcade platformer developed for the PICO-8 "fantasy console". Throw your boney body at enemies or fling fireballs from afar. Make good use of your shield as you traverse the dangers of the game’s one long level. Should you succeed, go for the high score in the repeatable NG+ mode. But only the truly adventurous will find all 9 Secret Shrooms!
<br><br>
Walt Mitchell is an Austin-based webdev turned gamedev. He designed, developed, and made the art for Tuck and Rolo. The music was composed by D.D Curry.
<br><br>
Lexaloffle’s PICO-8 features 16 colors, 128x128 resolution, 4 channel sound and other limitations that “are carefully chosen to be fun to work with, to encourage small but expressive designs, and to give cartridges made with PICO-8 their own particular look and feel.” The PICO-8 app includes tools for making sprites, maps, and SFX. Learn more on lexaloffle.com.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://walt.codes/tuck-and-rolo/">Play it Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Walt Mitchell</h6>

    
              <div class="dev-social">	
                  <h6>@CoffeeSandwhich</h6>
                  <a href="https://twitter.com/CoffeeSandwhich">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
<!-- Pizza Tower card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/pizza-tower.png" alt="A square promotional image for Pizza Tower featuring the pizza chef giving the thumbs up, he is surrounded by anthropomorphic vegetables. There is a yellow and red swirl in the background."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Pizza Tower</h4>
                <p>Pizza Tower is a fast paced 2D platformer inspired by the Wario Land series, with an emphasis on movement, exploration and score attack. Featuring highly stylized pixel art inspired by the cartoons from the '90s, and a highly energetic soundtrack.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2231450/Pizza_Tower/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Tour de Pizza</h6> 
            	
                <div class="dev-social">
                  <h6>@pizzatowergame</h6>
                  <a href="https://twitter.com/pizzatowergame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;"> </a>
                </div>
              </div>
            </div>
          </div>    
              
 <!--href.place card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/vidya-giri.png" alt="A square promotional image for Vidya Giri’s project href.place. The image features digital multi-colored sticky notes with different website URLS, sketches, and notes on a white background.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>href.place</h4>
                <p>
                  Vidya Giri is fond of sketching natural landscapes and exchanging links. With href.place she combines these passions to collect and share the various lands of the internet as illustrated postcards.
<br><br>
Sign up by March 12th to receive a hyperlink postcard in the physical mail! Vidya will recommend and draw an illustration of a website for you based on your interests. You can also recommend sites for Vidya to check out, which she will illustrate postcards for as well. All postcards will be shared on the website once the project is complete.
<br><br>
Vidya Giri is an artist from Houston, TX. Her art is reflective of her background: balanced between cultures, environments, and disciplines. Her work spans online spaces, printed media, projection, and painting on physical and digital canvases. Her (current) explorations revolve around collecting from one's surroundings as a form of reflection and the parallels between natural and human-made identities and the environments they encompass.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/vidya-giri">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Vidya Giri</h6>

                <div class="dev-social">	
                  <h6>@vidgiri</h6>
                  <a href="https://www.instagram.com/vidgiri/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;"> </a>
         
                </div>
              </div>
            </div>
          </div>  

<!-- Line Wobbler card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2023/games/line-wobbler.jpg" alt="A  promotional image for Line Wobbler featuring the build of the spring door stop controller that the game uses to control the LED strip."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Line Wobbler</h4>
                <p>Line Wobbler is a one-dimensional dungeon crawler game with a custom controller made out of a door-stopper spring and a five meter long LED strip display. It is an experiment in minimalism in game design, use of novel input mechanics, retro sound, and the incorporation of physical space into the game.
<br><br>
Robin is an experimental hardware game developer and interactive installation artist based in Berlin, Germany. His works range from award-winning one-dimensional hardware games, over weird wobbly spheres, to walls full of door stopper springs that visualise quantum physics in a playful yet scientifically accurate manner.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://wobblylabs.com">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Robin Baumgarten</h6> 
            	
                <div class="dev-social">
                  <h6>@Robin_B</h6>
                  <a href="https://twitter.com/Robin_B">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;"> </a>
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
                    <img src="/img/Archived-img/March-2023/photos/GY-mar-1.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/March-2023/photos/GY-mar-2.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/March-2023/photos/GY-mar-3.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/March-2023/photos/GY-mar-4.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/March-2023/photos/GY-mar-5.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/March-2023/photos/GY-mar-6.jpg" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
