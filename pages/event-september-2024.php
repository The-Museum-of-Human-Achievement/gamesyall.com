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
            <a href="/event-august-2024">September 20th, 2024</a>
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
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20718889/connectiquest">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Sep-24.png" alt="The Museum of Human Achievement presents, Games Y'all September Meetup">
        </div>

        <div class="col-10">
           <p>Our September meetup is a special one: ConnectiQuest is a fun, gamified networking event with quests to complete and swag to earn! It is a collaboration between four games organizations in Austin, TX: Games Y’all, IGDA, EGaDS!, and WIGA. Come and meet new friends, play new games, and learn about new orgs!
				<br><br>
				Free admission, donations welcome! RSVPs encouraged, or check-in at the door. <p/>
				
			<h5>Swag Details</h5>
            <p>Many studios around town have generously donated quest reward swag. Donors will be announced at the event and updated on the Games Y’all ConnectiQuest page.<p/>
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

  <!--Games at the event--
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Dance Machine 2000 card--
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/dance-machine.png" alt="A promotional image for the Dance Machine 2000"> 
              </div>  
              
              <!--Game Text--
              <div>
                <h4>Dance Machine 2000</h4>
                <p>The Dance Machine 2000 is a jukebox-inspired vessel that serves up dance videos that are as playful, absurdist, and unpolished as the currencies you can offer it. Will you choose to give the machine a round of applause or dense fog? What sort of dance will it inspire? 
				<br><br>
				Tay Hall spent their residency month considering alternative economies, ways of connecting with dance without the stakes of live performance, and exploring movement for camera. Like an old machine, they encountered some rusty parts while returning to a practice of video editing and collaboration. The resulting collection of videos and interactions are satisfyingly groovy, improvisational, and thoughtful.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/dancemachine2000">Explore</a>
                </button>

              </div>

   <!--Dev Text--
              <div>
                <h6>Artist: Tay Hall<h6> 
                <div class="dev-social">
                  <h6>@t4yh4ll</h6>
                  <a href="https://www.instagram.com/t4yh4ll/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Murder at the Magic Rave Game--
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/magic-rave.png" alt="A promotional image for Murder at the Magic Rave"> 
              </div>  

              <!--Game Text--
              <div>
                <h4>Murder at the Magic Rave</h4>
                <p>Murder at the Magic Rave is a tabletop roleplaying game about finding a wizard’s killer designed for 3-5 players.
                <br><br>
               Emily Weller(she/they) is a writer, game designer, and recent graduate from the University of Texas with a passion for compelling stories and clever mechanics.
               </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://gremil.itch.io/murder-at-the-magic-rave">Play It Here</a>
                </button>

              </div>

              <!--Dev Text--
              <div>
                <h6>Developer: Emily Weller<h6> 
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
    <!--Only use this section after an event to house images from the past--
    <div class="row">-
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-6.png" style="width: 375px; height: 375px;">
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
