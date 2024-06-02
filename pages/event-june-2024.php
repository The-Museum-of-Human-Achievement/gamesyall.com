<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "June 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
$headImage = "/img/event-img/GY-Banner-June-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-june-2024">June 24th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>June Meetup</h1>
        
            <h4>June 20th, 2024 - 7-10pm</h4>
        
            <p>
                Last Stand Brewing <a href="https://maps.app.goo.gl/eUtjWRte5caGLkun9" target="_blank">Building 6, 7601 S Congress Ave, Austin, TX 78745</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20202067/games_yall_june_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-June-24.png" alt="The Museum of Human Achievement presents, Games Y'all June Meetup">
        </div>

        <div class="col-10">
           <p>Welcome to summer y’all! We are returning to Last Stand Brewing for our 2nd Tabletop Edition of Games Y’all. We’ll have AC (YAY!), Tabletop RPGS, new Welcome to My Homepage Residents, and more!
			<br><br>
			Last Stand Brewing is located in The Collective on South Congress Avenue, Last Stand Brewing boasts a full bar and kitchen. They offer house made soda, craft beer, cocktails, a curated wine list as well as a kitchen with a strong focus on farm to fork food.
			</p>
 <br>
<h5>Games Y'all</h5>
            <p>Games Y’all is a monthly meetup presented by the Museum of Human Achievement for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. <p/>
            <br>
            
<h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>
<h5>Health Details</h5>
            <p>This event will be indoors and outdoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!<p/>
        </div>
    </div>

  <!--Games at the event--
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Teddy's Inferno card--
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/teddy-inferno.png" alt="- A promotional image for Teddy's Inferno"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Teddy's Inferno</h4>
                <p>Teddy's Inferno is a top-down arcade shooter with Asteroids-style movement, heavily inspired by Devil Daggers. The player has to survive as long as possible against increasingly frantic waves of enemies, collecting gems to upgrade their weapon in the process. The player's score is purely based on how long they survive. Several special game modes are also available, which alter the difficulty or change the rules of the game. It's named after my cat, Teddy (though the game has nothing to do with cats).
				The game is complete and out (for free) on itch.io, and I built it solo (using a few free assets) with the Phaser 3 game engine.
				<br><br>
				Robocrow is a hobbyist game developer, working solo on small, free browser games in their spare time, and has been building games on and off since high school. Robocrow likes to build games that are simple and quick to play, but offer a lot of replayability.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://robocrow.itch.io/teddys-inferno">Play it Here</a>
                </button>

              </div>

   <!--Dev Text--
              <div>
                <h6>Developer: Robocrow<h6> 
                <div class="dev-social">
                  <h6>@robocrow</h6>
                  <a href="https://robocrow.itch.io/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Piroot Game--
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/piroot.png" alt="- A promotional image for Piroot"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Piroot</h4>
                <p>Piroot is an open world action adventure game that I have been developing for about 6 years now. In my game the player controls a ball that can roll around and explore the planet, while gaining new weapons and abilities.
                <br><br>
Frank Force is an experienced game developer and creative coder known for his work on major titles including “Doom”, “Mafia 3”, “Red Faction”, “Psi-Ops”, and “Starhawk”. Now working as an independent game developer he has created a wide variety of games playable online and also released a suite of open source tools for creating art, games, and music including the popular LittleJS game engine and ZzFX sound generator. Frank has also written extensively about creative coding and generative art development. One of his favorite hobbies is writing tiny programs with interesting visual results, having produced over a thousand in total. In 2019 he won Optical Illusion of the Year for creating the “Dual Axis Illusion”. Frank currently lives with his wife in Austin, where he continues to explore new ideas at the frontier of game development and computer art.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2523510/Piroot">Website</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developer: Frank Force Games<h6> 
                <div class="dev-social">
                  <h6>@FrankForceGames</h6>
                  <a href="https://twitter.com/FrankForceGames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      

    <!--Event Images-->
    <!--Only use this section after an event to house images from the past--
    <div class="row">-
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-6.png" style="width: 375px; height: 375px;">
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
