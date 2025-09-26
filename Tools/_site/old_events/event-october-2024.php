<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "Fantastic Arcade: Fun Size Edition!";
$headDescription = "Fantastic Arcade: Fun Size Edition!";
$headImage = "/images/event-img/GY-Banner-Oct-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-october-2024">October 26th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>Fantastic Arcade: Fun Size Edition!</h1>
        
            <h4>October 26th, 2024 - 7-10pm</h4>
        
            <p>
                Baker Center <a href="https://maps.app.goo.gl/wU9SNGcsFACKTmBL9" target="_blank">Baker Center, 3908 Avenue B, Austin, TX 78751</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!-- RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20561155/fantastic_arcade_fun_size_edition">RSVP</a></button> -->
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/images/event-img/GY-Banner-Oct-24.png" alt="The Museum of Human Achievement presents, Games Y'all October Meetup">
        </div>

        <div class="col-10">
<h5>Fantastic Arcade</h5>
            <p>Fantastic Arcade is a celebration of international indie and cult videogames, curated by The Museum of Human Achievement, in Austin Texas.<p/>
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
          
<!--1-1(bit) card--
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/images/Archived-img/June-2024/games/1-1-playdate.jpg" alt="A promotional image for 1-1(bit)"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>1-1(bit)</h4>
                <p>Dying is Feedback. Death is information. 1-1(bit) is a puzzle platformer made in Pulp for the Playdate. The platforms are invisible and the player builds a mental map of the level layout through traversal and observation... but is there more to the game than a grid of dots? You must be dreaming.
				<br>
					Players Can reveal the level using the B menu. Players also tend Not to do that. 
				<br><br>
				Inspiration This game was inspired by a similar project shown at Fantastic Arcade. It was a beautiful wooden arcade wall mount that consisted of a joystick and a single, vertical strip of red LEDs. As you navigated the level you 'viewed' it 1-pixel slice at a time by observing your dot's position.
				<br><br>
				Ledbetter Games has been making and showing Playdate games in Austin, Tx for the last couple years. They created the ART series, CHEK for 2-4 players and are very much looking forward to seeing you play 1-1(bit) Off-Planet Dreams and perhaps creating a level or two of your own!
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://ledbetter-games.itch.io/1-1bit">Play it Here</a>
                </button>

              </div>

   <!--Dev Text--
              <div>
                <h6>Developer: Ledbetter Games<h6> 
                <div class="dev-social">
                  <h6>@ledbetter-games</h6>
                  <a href="https://ledbetter-games.itch.io/">
                    <img src="/images/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Culture Cue Game--
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/images/Archived-img/June-2024/games/culture-cue.jpeg" alt="A promotional image for Culture Cue"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Culture Cue</h4>
                <p>Culture Cue is the board game that focuses on players' stories and experiences. In Culture Cue, players get to share their own personal experiences with each other while trying to get all their tokens to Generational Enlightenment.
               <br><br>
               Culture Cue was developed by Paul Quinones and Lisa Poon. Paul is a game industry professional that has worked on several mobile titles and smaller Tabletop RPGs like Modern Unicorns. Lisa is Hong Kong born and Jacksonville, Fl raised UX Researched always looking to create new opportunities to bring people together.
            </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://culturecue.games/">More Info</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developer: Paul & Lisa<h6> 
                <div class="dev-social">
                  <h6>@culturecuegame</h6>
                  <a href="https://www.instagram.com/culturecuegame">
                    <img src="/images/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
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
                <img src="/images/Archived-img/June-2024/photos/june-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/June-2024/photos/june-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/June-2024/photos/june-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/June-2024/photos/june-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/images/Archived-img/June-2024/photos/june-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/June-2024/photos/june-gy-photo-6.png" style="width: 375px; height: 375px;">
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
