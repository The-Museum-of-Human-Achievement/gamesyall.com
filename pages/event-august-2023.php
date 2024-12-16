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

$headTitle = "August 2023 Meetup - Games Y'all";
$headDescription = "Finish off your summer with Games Y'all! Come to our casual monthly meetup to play indie games and experience some unique digital arts projects.";
$headImage = "/img/event-img/GY-Banner-Aug-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-august-2023">August 24th, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>August Meetup</h1>
                
                    <h4>August 24th, 2023 - 7-10pm</h4>
				<p>Central Machine Works <a href="https://goo.gl/maps/ALUmu8pEEr4uNYY37">4824 E Cesar Chavez St, Austin, TX 78702</a> 
				<!-- <br><br>🎟 Free admission, donations welcome! RSVPs encouraged, or check-in at the door.</p> -->
	
			
				<!--RSVP Button -->
        <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16473042/games_yall_august_meetup">RSVP</a></button> -->
            
      </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Aug-23.png" alt="Fantastic Arcade presents, Games Y'all August Meetup at Central Machine Works">
            </div>
            

		 <div class="col-10">

<p>Finish off your summer with Games Y'all! Come to our casual monthly meetup to play indie games and experience some unique digital arts projects. Never been? Bring a couple of friends and check it out.
<p/>
    <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by Fantastic Arcade for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>

      <h5>Fantastic Arcade</h5>
<p>Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>

    <!--Venue details can be deleted when event has passed-->
<h5>Venue + Health Details</h5>

<p>Central Machine Works is a craft beer brewery built in an old metal fabrication shop that produced a variety of custom parts starting with airplanes in WWII (1940-2016). They have a large food menu, cocktails, and plenty of non-alcoholic beverage options! There is a parking lot behind the brewery off of 5th street, you'll find us in the back of the brewery.
<br><br>
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!
<p/>
          </div>
        </div>
        

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
       <!--"We'll make a car out of anything!!" card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2023/games/hot-wheelz.png" alt="A promotional image of We'll make a Car out of anything which features an orange hot wheels race track on a blue background"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>"We'll make a car out of anything!!"</h4>
<p>Hot Wheels "We'll make a car out of anything!!!" Build-A-Car Photo Studio is a take on how ridiculous and over-the-top games and marketing for kids can get. This "game" isn't endorsed by Hot Wheels or Mattel (please don't sue Kristine) but it hopes to capture the essence of Hot Wheels' big car energy as well as paying homage to how sometimes the configurator in a game might be the most fun part. 
<br><br>
Kristine Fernandez is a web developer and artist with a focus on creative coding. Lately that has meant developing mini games / experiences that aren't necessarily supposed to be fun but instead are explorations of a concept and breaking something intangible and/or complex into something more tangible, immersive, and engaging like a game.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.kristinefernandez.com">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Kristine Fernandez<h6> 
                     <div class="dev-social">
                  <h6>@24hrpizzadotcom</h6>
                  <a href="https://www.instagram.com/24hrpizzadotcom/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--round n’ round card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/August-2023/games/round-n-round.png" alt="A  promotional image for round n’ round showing a hotwheel car covered in I heart mom stickers with a ogress driver on top of a race track"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>round n’ round</h4>
                <p>We need to talk. Call me >.< 
<br><br>
Drive around the difficult conversations that are desperately needed to be had. Made with Unity and a bunch of remixed 3D models.
<br><br>
Celine Lassus (b. 1999, Tampa, FL) is a digital native first, artist second. Based in Austin, TX, they work across interactive visual essays (or what you could call games), performance, video and installation. Their work has been exhibited in the New Art City Festival, The Wrong Biennale, and archived by the Rhizome ArtBase. They have attended the CATS+ Residency at The Museum of Human Achievement and hold a BFA in Studio Art from The University of Texas at Austin.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://celinelassus.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Celine Lassus</h6>
                <div class="dev-social">
                  <h6>@bimbointech</h6>
                  <a href="https://www.instagram.com/bimbointech/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
  <!--Nightingale card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2023/games/nightingale.png" alt="A black and white rectangular promotional image for Nightingale featuring a pixle style interior hospital room with a patient on a gurney"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Nightingale</h4>
<p>Nightingale is a short form horror game with some light puzzle elements developed for the Playdate. (Entirely in pulp!) It's about what it means to feel safe in your own body, inspired mostly by my experiences with auto-immune conditions. Expected release September 2023. CW for mild blood, R-rated language, and implied child abuse/neglect.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://kodiakgamesatx.itch.io/">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Kodiak Games<h6> 
           
                </div>
              </div>
            </div>
          </div>   
            
 <!--Dyebreaker card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/August-2023/games/dyebreaker.png" alt="A  promotional image for the game dyebreaker featuring pixelated battleships on a 2-d background"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Dyebreaker</h4>
                <p>Dyebreaker is a two-button “air hockey platformer” with visuals inspired by screen print posters and the Game Boy Color. Two teams jump around a dynamic stage and push the puck towards opposing goals, either by boosting into it or by “riding” it – players can hop onto slow-moving pucks, move them, then shoot them in any direction.
<br><br>
Each stage is a mish-mash of hazards: spinning fans, gates that open and close, booster pads, moving walls, and more. Scoring enough goals wins the stage, and winning a stage adds a layer of color to the winner’s screen print. Each match consists of a handful of stages pulled from a large pool, lasting until one team has won enough stages to complete their poster art!
<br><br>
Dyebreaker is a work-in-progress and this prototype focuses on gameplay. The final game will feature many playable teams, each with their own unique characters and poster art.
<br><br>
Dyebreaker is designed and developed by Walt Mitchell, who also draws some of the pixel art. Walt is a webdev-turned-gamedev who made a handful of arcade games and now works in the games industry professionally, mostly on game UI. Walt is assisted by his childhood friend, Ramsey Haefner, an L.A.-based animator and illustrator who has been developing Dyebreaker's color palettes, UI design, and pixel art.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://walt.codes/zip/Dyebreaker-by-Walt-Mitchell.zip">Play It Here</a>
                </button>

              </div>

             <!--Dev Text-->
              <div>
                <h6>Developers: Walt Mitchell & Ramsey Haefner</h6>


                <div class="dev-social">	
                  <h6>@CoffeeSandwhich</h6>
                  <a href="https://twitter.com/CoffeeSandwhich">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@samseyramwich</h6>
                  <a href="https://www.instagram.com/samseyramwich/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
        
 <!--Warline card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2023/games/warline.png" alt="A promotional image for Warline faturing a mage on a blue dragon opposing a mage on a red dragon"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Warline</h4>
<p>Warline is a fantasy strategy and tactics board game in which you design a unique strategy interactively, then design complex custom combos with your units on the battlefield. The game is set against an "elegant dark fantasy" backdrop; you take on the role of one of Soroyland's four warring kingdoms, each populated by new, non-standard fantasy races. Three unique game modes offer flexible player counts (1-, 2-, 3-, and 4-players) and invite you into the history of Warline's world.
<br><br>
Warline has been likened to, "Final Fantasy Tactics if you could design your own tactical actions with each turn."
<br><br>
Justin Leingang is a veteran game director, designer, and developer—professional and hobbyist. He has directed and/or designed many commercial games for various platforms throughout his 25 year career, but has also independently created a number of indie video games (Glum Buster, Puppy Stew, Cow Trouble, and more).
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://warline.eljayplay.com">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: El Jay Play<h6> 
                     <div class="dev-social">
                  <h6>@eljayplay</h6>
                  <a href="https://twitter.com/eljayplay">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Venba card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/August-2023/games/venba.png" alt="A  promotional image for Venba showing an Indian Mother, Son, and Father cooking together"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Venba</h4>
                <p>Venba is a narrative cooking game, where you play as an Indian immigrant mom, who immigrates to Canada with her family in the 1980s. Players will cook various dishes and restore lost recipes, hold branching conversations and explore in this story about family, love, loss and more.
<br><br>
Visai Games is a small studio based in Toronto that's focused on telling intimate stories through interesting mechanics.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://venbagame.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Visai Games</h6>
                <div class="dev-social">
                  <h6>@venbaGame</h6>
                  <a href="https://twitter.com/venbaGame/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      
          
 <!--Welcome to Polly’s Place card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2023/games/pollys-place.png" alt="Colorful, mostly pink pixel art in the style of an early 2000’s self-made website with lucky clovers, a bunny rabbit, a horse shoe, bamboo, and pop-up windows teasing information about a fictional show called Polly’s World by Lucky Clover studios.'"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Welcome to Polly’s Place</h4>
<p>Welcome to Polly's Place is an interactive fiction meant to bring about the nostalgia of early 2000's internet culture. From taking care of digital pets to getting harassed on fan forums this time period was unique in the strangest way. We were just figuring out that the internet could be used to connect more people than ever before. These connections are the focus of this project. The friendships that weren't possible before the fear of the millennium bug. The people we talked to daily on game sites that have now become inactive. People who are just as real to us as we are to them. Even if you can't speak to someone face to face, your connection to them is still worthwhile. Polly's Place aims to blur the line between an "internet friend" and a "real friend" if not erase it completely.
<br><br>
Michelle Foto is a freelance illustrator who was born in Mandeville, Louisiana to a Filipino immigrant and an Italian from New Orleans. They recently completed their BA in New Media & Animation from Southeastern University. Michelle is someone who considers themself to be an artist before anything else.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.welcometomyhomepage.net/">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Michelle Foto <h6> 
                     <div class="dev-social">
                  <h6>@staribon</h6>
                  <a href="https://www.instagram.com/staribon/">
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
                    <img src="/img/Archived-img/August-2023/photos/GY-august-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2023/photos/GY-august-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2023/photos/GY-august-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2023/photos/GY-august-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/August-2023/photos/GY-august-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/August-2023/photos/GY-august-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
