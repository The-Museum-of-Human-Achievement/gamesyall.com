<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "September 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all September Meetup";
$headImage = "/img/event-img/GY-Banner-Sep-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-september-2024">September 20th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>September Meetup</h1>
        
            <h4>September 20th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/WWRbD2tmVacS79YH6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->

        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Sep-24.png" alt="The Museum of Human Achievement presents, Games Y'all September Meetup">
        </div>

        <div class="col-10">
           <p>Our September meetup is a special one: ConnectiQuest is a fun, gamified networking event with quests to complete and swag to earn! It is a collaboration between four games organizations in Austin, TX: Games Y’all, IGDA, EGaDS!, and WIGA. Come and meet new friends, play new games, and learn about new orgs! Full details can be found on the <a href="/connectiquest">ConnectiQuest</a> page!
				<br><br>
				Free admission, donations welcome! RSVPs encouraged, or check-in at the door. <p/>
				
			<h5>Swag Details</h5>
            <p>Owlchemy, Mighty Coconut, Devolver Digital, Airship Syndicate, CIG, and IGDA generously donated our quest rewards!<p/>
            <br>

			<h5>Games Y'all</h5>
			<p>Games Y’all showcases indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. Games Y’all celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.<p/>
			<br>

			<h5>IDGA</h5>
			<p>The mission of the International Game Developer Association - Austin (IGDA - ATX) chapter is supporting and empowering game developers in the greater Austin area to achieve fulfilling and sustainable careers, along with bridging the gap between both new and old game devs. <p/>
			<br>

			<h5>WIGA</h5>
			<p>WIGA’s intent is to provide a communal space for under-represented developers, including but not limited to: those identifying as women, non-binary, transgender, and genderqueer peoples. <p/>
			<br>

			<h5>EGaDS!</h5>
			<p>The Electronic Game Developers Society (EGaDS!) at UT Austin is an interdisciplinary student organization open to all UT Austin students with a passion for game development. Our mission is to help students grow as developers while fostering a supportive and welcoming community. <p/>
			<br>
       
<h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>
            
<h5>Venue + Health Details</h5>
            <p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!<p/>
        </div>
    </div>

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Wormspell card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/wormspell.png" alt="A promotional image for Wormspell"> 
              </div>  
              
              <!--Game Text-->
              <div>
                <h4>Wormspell</h4>
                <p>Wormspell is a magical spelling game where you're a Worm who learns to read when an Orb falls from the sky and bonks your head. Use your new spelling power to explore, help illiterate bugs, and rewrite the story of the world!
                <br><br>
				Crimp Team is a collection of local Austin devs who met rock climbing. For the last few years we've been excited to plan long weekend trips to jam together at AirBnbs in the privacy of rural Texas. Wormspell is our 5th game together and you can get it for free on Itch.io along with our past games: Honked! a clown noir, Gob N' Go, Card Cowboy, and Crash Land Crystal.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://chriswade.itch.io/wormspell">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Crimp Games<h6> 
                </div>
              </div>
            </div>
          </div> 

<!--Oblivion Eve Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/oblivion-eve.png" alt="A promotional image for Oblivion Eve"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Oblivion Eve</h4>
                <p>A roguelike action-platformer where you use upgradeable weapons to combo powerful enemies to their doom! Overcome tough fights, platforming challenges, puzzles, and more in your effort to free the titan who is incarcerated in the shifting prison's depths.
                <br><br>
              Andrew (SmartAlloc) works as a software engineer and game developer, while moonlighting as an indie game developer, his true passion. For over a decade, Andrew has been developing games for the smallest and most restrictive environments - from calculators to washing machines to chatbots. Now he develops for the Pico-8, where he strives to create fun and deep games which can be compressed down to fit within the pixels of a 120x120 png file.
               </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://smartalloc.itch.io/oblivion-eve">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: SmartAlloc<h6> 
                <div class="dev-social">
                  <h6>@gremilwrites</h6>
                  <a href="https://twitter.com/gremilwrites">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
 <!--Time Teddy card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/time-teddy.png" alt="A promotional image for Time Teddy"> 
              </div>  
              
              <!--Game Text-->
              <div>
                <h4>Time Teddy</h4>
                <p>Play as Teddy, a lost baby polar bear in the melting Arctic. Navigate through 3D platforms, travel through time, and solve puzzles as you try to reunite with the mama bear! Solve climate change along the way!
                <br><br>
			This game was made for IndieCade's Climate Jam 2024, which was hosted June 16th, 2024 - July 14th, 2024 (a total of 4 weeks). The team consisted of 2 programmers, 1 3D artist, 1 3D animator, 1 2D artist, and 1 sound designer/ composer. We all met through Discord and conducted various meetings and work sessions via Discord's call feature. Though some of us are in the same time zones, others are all across the US! Time Teddy recieved an honorable mention and was among 48 games submitted to the 2024 IndieCade Climate Jam. 
			</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://gemxo.itch.io/timeteddy">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Glacier Guardians<h6> 
                </div>
              </div>
            </div>
          </div> 

<!--Hidden in my Paradise Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/hidden-paradise.jpg" alt="A promotional image for Hidden in my Paradise"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Hidden in my Paradise</h4>
                <p>Hide objects, decorate, and complete missions in this cozy hidden-object game where you can create little paradises and share them with the world!
                <br><br>
              	Creating fantasy stories in form of indie video games.
				<br>
				Ogre Pixel is an indie game development studio settled in Aguascalientes, México since March 2014. Our slogan and philosophy is: Working hard to live the dream...
				<br>
				Ogre Pixel is currently composed of: Steve Durán (Director, Programmer), Gabriela Godínez (Script Writer), Marco Elizondo (Lead Programmer), Mahelet (Lead Artist), Majo Félix (Audio Director & Composer).
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2834330/Hidden_in_my_Paradise/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Ogre Pixel<h6> 
                <div class="dev-social">
                  <h6>@ogrepixel</h6>
                  <a href="https://twitter.com/ogrepixel/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
 <!--Revision on Reunification card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/revision-reunification.png" alt="A promotional image for Revision on Reunification"> 
              </div>  
              
              <!--Game Text-->
              <div>
                <h4>Revision on Reunification</h4>
                <p>Jo Suk's Revision on Reunification is a digital memorial for the Arch of Reunification, which stood in Pyongyang, North Korea from 2001 to 2024. Its intentional demolition by the North Korean government confirmed a new era for South-North relations on the Korean peninsula, characterized by open antagonism. This inflection point follows decades of failed efforts at peaceful reunification, incurred in part by U.S. interventionism. Though now nonexistent, the Arch of Reunification continues with a new nature through this digital memorial, one that personalizes, politicizes, and questions the posthumous symbolism of the monument.
                <br><br>
				Jo Suk / 석조 is an artist and writer whose practice contemplates the relational, quotidian, and temporal elements of our short time here on Earth. Their work can be found at The Wrong Biennale, Are.na, Crawlspace, and Rhizome. They are present online at <a href="https://joannesuk.com/" target="_blank">joannesuk.com</a>
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://joannesuk.com/revision-on-reunification/">Explore</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Artist: Jo Suk / 석조<h6> 
                <div class="dev-social">
                  <h6>@jo.stor</h6>
                  <a href="https://www.instagram.com/jo.stor">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>           
          
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past-->
    <div class="row">-
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/img/Archived-img/September-2024/photos/sep-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/September-2024/photos/sep-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/September-2024/photos/sep-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/September-2024/photos/sep-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/September-2024/photos/sep-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/September-2024/photos/sep-gy-photo-6.png" style="width: 375px; height: 375px;">
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
