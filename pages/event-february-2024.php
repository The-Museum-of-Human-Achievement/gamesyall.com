<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "February 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all February Meetup";
$headImage = "/img/event-img/GY-Banner-Feb-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-february-2024">February 17th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>February Meetup</h1>
        
            <h4>February 17th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/4RQviD9mDGSGXdFh6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/17482522/games_yall_february_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Feb-24.png" alt="The Museum of Human Achievement presents, Games Y'all February Meetup">
        </div>

        <div class="col-10">
           <p>Join us for a Games Y’all roundup of this year's local Austin Global Game Jam submissions!
			<br><br>
			We hosted the Austin chapter of the 2024 Global Game Jam at The Museum of Human Achievement in partnership with EGaDS, Moonlit Studios, and IGDA. This mad rush of game development yielded some stellar results! Join us when we return to The Museum of Human Achievement to play, hang, and meet new folks passionate about indie games, digital art, and game development.
			</p>
			 <br>
<h5>Venue & Parking Details</h5>
			<p>This event will be held at The Museum of Human Achievement. There is a large parking lot as well as street parking available. MoHA is a large warehouse space and is not climate controlled, please dress according to weather.
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
          
          
 <!--HouseKeeping card
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/housekeeping.png" alt="- A promotional image for House Keeping">
                </div>  

              <!--Game Text
              <div>
                <h4>HouseKeeping</h4>
                <p>HouseKeeping is an Isometric Couch Co-Op party game similar to Overcooked or Splatoon. Two teams of players must battle for control of the House. The Keepers (House Cleaners) must clean the house. While the Cats must destroy the house and of course cause chaos. Whoever has more control of the house at the end of the round wins. We hope to take this game further and hopefully publish it at some point!
                <br><br>
               HouseKeeping was developed by a small team of students at Austin Community College as our final project in college. We as a team enjoyed developing this game so much we recently submitted it to the Independent Games Festival. In hopes of being nominated for "Best Student Game". 
               </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://tom9671.itch.io/housekeeping">Play It Here</a>
                </button>

              </div>

              <!--Dev Text
              <div>
                <h6>Developer: Team HouseKeeping</h6>

                <div class="dev-social">	
                  <h6>@IfItWorksStudio</h6>
                  <a href="https://twitter.com/IfItWorksStudio">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
          
 <!--don't rock the boat card
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/rock-boat.jpeg" alt="- A promotional image for don't rock the boat"> 
              </div>  

              <!--Game Text
              <div>
                <h4>don't rock the boat</h4>
                <p>"don't rock the boat - an interactive story by elliot degrassi. A women's crew team plagued with internal debate over who is allowed to row in their league finds themselves stalked by a river monster. Written for and awarded Best Story of Scream Dunk 2023. Cover art by Ravi Teixeira. 
			<br><br>
			Dev Disclaimer: I am transgender and this piece is pro-trans rights. some characters are transgender and others are transphobes. their stories are told from their perspectives.
			this story is for mature audiences.
			<br><br>
			Content Warnings: transphobia, sexual assault (off-screen)"</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://elliotdegrassi.itch.io/dont-rock-the-boat">Play It Here</a>
                </button>

              </div>

              <!--Dev Text
              <div>
                <h6>Developer: Elliot Degrassi<h6> 
                <div class="dev-social">
                  <h6>@highway2helliot</h6>
                  <a href="https://www.instagram.com/highway2helliot/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>     

 
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past
    <div class="row">
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
