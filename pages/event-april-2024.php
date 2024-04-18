<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "April 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
$headImage = "/img/event-img/GY-Banner-Apr-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-april-2024">April 20th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>April Meetup</h1>
        
            <h4>April 20th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/4RQviD9mDGSGXdFh6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/17732225/games_yall_april_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Apr-24.png" alt="The Museum of Human Achievement presents, Games Y'all April Meetup">
        </div>

        <div class="col-10">
           <p>
           April showers come and play games for 3 hours! YOU are invited to April Games Y’all. Join us for a selection of regional projects from across central Texas featuring play styles such as Roguelite, Shoot em up, Narrative based, and Fish Capitalism!
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
          
          
<!--HA-L card--
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/ha-l.png" alt="- A promotional image for Hal">
                </div>  

              <!--Game Text--
              <div>
                <h4>HA-L</h4>
                <p>Help HA-L fool the humans by laughing at jokes you don't understand! Don't laugh too much or not enough, otherwise you'll be discovered!
                <br><br>
             	 Ethan (Audio Lead at FarBridge) and David (Software Engineer, Audio at Panic Button) are both industry professionals who enjoy participating in game james. They have worked together over the past six years on various projects from audio optimization on big titles to silly brainstorms.
              	</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://globalgamejam.org/games/2024/ha-l-1">Play It Here</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developers: Ethan & David</h6>

                </div>
              </div>
            </div>
          </div>          
          
          
<!--Stan Derp card--
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/stan-derp.jpg" alt="- A promotional image for Stan Derp"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Stan Derp</h4>
                <p>In Stan Derp, the player must keep their balance on stage to not fall down while delivering their standup routine. Players must build setup meter in order to deliver punchlines that get the crowd going, but none of that will work if you don't breathe!
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://globalgamejam.org/games/2024/stan-derp-4">Play It Here</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developer: Clicky Clack<h6> 
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
