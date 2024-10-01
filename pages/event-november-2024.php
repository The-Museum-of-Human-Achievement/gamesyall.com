<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "November 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all November Meetup";
$headImage = "/img/event-img/GY-Banner-Nov-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-november-2024">November 22nd, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>November Meetup</h1>
        
            <h4>November 22nd, 2024 - 7-10pm</h4>
        
            <p> <a href="https://maps.app.goo.gl/xTKBS7ctHXhmwhvH7" target="_blank">1908 Kramer Ln, Suite 250, 78758</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
		<button class="button" id="RSVP'"><a href="https://withfriends.co/event/20882942/games_yall_november">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Nov-24.png" alt="The Museum of Human Achievement presents, Games Y'all November Meetup">
        </div>

        <div class="col-10">
           <p>Led by our Games Y’all Committee member Jonathan Levine, our November meetup is focused on accessibility and features games that take accessibility into active consideration in the game’s design! Join us to experience and learn about accessible design decisions in games.<p/>
				
			<h5>Venue + Health Details</h5>
            <p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!<p/>
            <br>        

			<h5>Games Y'all</h5>
			<p>Games Y’all showcases indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. Games Y’all celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.<p/>
			<br>

			<h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>
            
			</div>
    </div>

  <!--Games at the event--
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Wormspell card--
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/wormspell.png" alt="A promotional image for Wormspell"> 
              </div>  
              
              <!--Game Text--
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

   <!--Dev Text--
              <div>
                <h6>Developer: Crimp Games<h6> 
                </div>
              </div>
            </div>
          </div> 

<!--Oblivion Eve Game--
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2024/games/oblivion-eve.png" alt="A promotional image for Oblivion Eve"> 
              </div>  

              <!--Game Text--
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

              <!--Dev Text--
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
          

          
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past
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
                -->
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
