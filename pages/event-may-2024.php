<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "May 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
$headImage = "/img/event-img/GY-Banner-May-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-may-2024">May 24th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>May Meetup</h1>
        
            <h4>May 24th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/4RQviD9mDGSGXdFh6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/19993747/games_yall_may_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-May-24.png" alt="The Museum of Human Achievement presents, Games Y'all May Meetup">
        </div>

        <div class="col-10">
           <p>
         Howdy y'all, we’re rounding out this Spring with a triple stack of fun!  We’ve got the return of powerpoint night, a showcase from MoHA’s Artist Residency:  the  Collaborative Art + Technology Situation (CATS+, and our regular ol' Games Y’all indie game meetup!
<br><br>
Powerpoints:  A 1hr power hour powerpoint presentation extravaganza! Interested in presenting something? Go to our discord for the open call!
<br><br>
CATS+: The Collaborative Art + Technology Situation (CATS+) is a residency and community program that encourages thoughtful, critical, creative engagement with technology. Come checkout the showcase organized by the spring residents!
<br><br>
Games Y’all: Our monthly meetup presented by The Museum of Human Achievement for indie devs, digital artists, and games fans. 
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

  <!--Games at the event
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Speedway Survival card--
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2024/games/speedway-survival.png" alt="- A promotional image for Speedway Survival"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Speedway Survival</h4>
                <p>Speedway survival is a survival horror game that takes you to the darkest hour at UT. As Sola, you have to defeat shadow monsters wreaking havoc on UT's speedway with your magical flashlight. Fighting your way through Speedway, you have to rescue Sola's sister Luna.
                <br><br>
		"Skyler Kweon - Game Designer, Arts and Entertainment Technologies Sophomore @ UT Austin
		<br>
		Rachel Cannon - Artist, Sustainability Studies Senior @ UT Austin
		<br>
		Sebastian Davoli - Artist, Mechanical Engineer at Quaise Energy, UT Austin ME Graduate
		<br>
		Kalem Edlin - Audio Engineer, UT Austin CS Graduate
		</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://sunchankweon.itch.io/speedway-survival">Play it Here</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developer: Bloody Longhorns<h6> 

                </div>
              </div>
            </div>
          </div>         
          
<!--Money-Driven FishTank Game--
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/April-2024/games/money-drive-fish.png" alt="- A promotional image for Money-Driven FishTank Game"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Money-Driven FishTank Game</h4>
                <p>Money-Driven Fish Tank Game is a game I built and designed on the popular children’s platform, Roblox. I built the game on the Roblox platform after reading that, although mostly for children, strip clubs and sex clubs kept appearing, and the platform had to hire more moderators to get them deleted. This was a huge “scandal” for the platform. As much of my work investigates how sex work operates in the contemporary landscape, thematically and conceptually, Roblox was an interesting starting point for me.
 <br><br>
In the game, the idea is to collect as much currency as possible (which the avatar can collect in the form of stacks of hundreds and green rectangles), avoid a giant shark that can kill you, avoid tiny cute fish that can kill you, listen to various characters that deliver extremely cliche and strange fables, and get through a difficult golden/damask maze to your home space.       
<br><br>
Dahlia Bloomstone (b.1995) is a Puerto Rican/American artist and Hunter College MFA (NY, 2022) graduate with a BFA from Bard College (NY, 2018). She was a Teaching Assistant at Hunter College from 2020-2022 and a Visiting Artist/Professor at UTAustin in 2023. At present, she is an LMCC resident on Governor's Island and a New York Community Trust Van Lier Fellow at Theater Mitu. Dahlia lives and works in New York.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.dahliabloomstone.com">Website</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developer: Dahlia Bloomstone<h6> 
                <div class="dev-social">
                  <h6>@the_dancr_next_door</h6>
                  <a href="https://www.instagram.com/the_dancr_next_door">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
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
