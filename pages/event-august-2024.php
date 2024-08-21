<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "August 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all August Meetup";
$headImage = "/img/event-img/GY-Banner-Aug-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-august-2024">August 23rd, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>August Meetup</h1>
        
            <h4>August 23rd, 2024 - 7-10pm</h4>
        
            <p>
                Howson Branch Austin Public Library <a href="https://maps.app.goo.gl/QRFUXkgfq1u1F1JHA" target="_blank">2500 Exposition Blvd, Austin, TX 78703</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20292114/games_yall_august_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Aug-24.png" alt="The Museum of Human Achievement presents, Games Y'all August Meetup">
        </div>

        <div class="col-10">
           <p>This August, we are celebrating Pride! Our Games Roundup will focus on projects developed by LGBTQ+ creators, and/or projects that prominently feature queer characters or the queer experience!
 			<br> <br>
			Shout out to Austin Public Library and our new friends at the Howson Branch. Not only are they our wonderful hosts but they are helping provide snacks, bevs, and some sweet surprises!</p>
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

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Dance Machine 2000 card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/dance-machine.png" alt="A promotional image for the Dance Machine 2000"> 
              </div>  

              <!--Game Text-->
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

   <!--Dev Text-->
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

<!--Murder at the Magic Rave Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/magic-rave.png" alt="A promotional image for Murder at the Magic Rave"> 
              </div>  

              <!--Game Text-->
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

              <!--Dev Text-->
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
          
<!--Cute Patoots card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/cute-patoots.png" alt="A promotional image for Cute Patoots"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Cute Patoots</h4>
                <p>Cute Patoots is a cheerful jaunt of colorful characters, cozy stages, and silly mysteries. See how nostalgic elements from games like Kirby and Mega Man fold into a dynamic adventure where cute meets danger.
                <br><br>
				OKiPOKiGAMES is a cute games project by Patrick Randazzo, a queer dev working in educational product design.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://okipokigames.itch.io/cute-patoots">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: OKiPOKi GAMES<h6> 
                <div class="dev-social">
                  <h6>@okipokigames</h6>
                  <a href="https://okipokigames.com/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--UPDOG Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/updog.png" alt="A promotional image for UPDOG"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>UPDOG</h4>
                <p>"UPDOG is a side-scrolling typing game about trying to walk way too many dogs at once. I cannot emphasize enough how many dogs there are. It's like... So many dogs. 
				<br><br>
				Hit the keys mapped to your dogs to keep them from floating away, but be careful! If you hit the wrong key, you'll get a lot of updog. Play what our friends have called ""the dark souls of dog walking”.
				<br><br>
				UPDOG was created in 2 weeks for the PIG Squad Summer Slow Jam - Random Generation."
				<br><br>
              Updog was created over the course of a few weeks by a group of friends who met through Blaseball, the infamous baseball horror sim.
              </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://thecoby.itch.io/updog">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: The Keep<h6> 
              <p>In alpha order by first name:
			<br><br>
			Aleksandria Minmaximus - Writing
			<br><br>
			Alex Hawke - Additional Art & Writing
			<br><br>
			Bria Davis - Art Lead
			<br><br>
			Coby West - Engineering, Design, & Additional Art
			<br><br>
			Colin McInerney  - Engineering, Design, & Sound Design
			<br><br>
			Matthew Drake - Additional Art
			<br><br>
			Quinn Palmer - Writing
			<br><br>
			Rachel DuBois McInerney - Additional Art
			<br><br>
			Rachel Stuckey - Dog Photography
				</p>
                
                </div>
              </div>
            </div>
          </div>     

<!--Rollin' Along card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/rollin-along.png" alt="A promotional image for Rollin' Along"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Rollin' Along</h4>
                <p>Rollin' Along is an endless marble shooter game about an armadillo's journey! Play as Arma the Armadillo on her quest to save her cactus friends. See how far you can last through multiple in-game nights while using different power-ups and strategies!
                <br><br>
				Rollin' Along was developed by a group of artists and developers from a mix of Austin and Chicago. Led by Victoria Bonzani, everyone came together and lended their unique skills to the project. Programming was done by Ron Harvey, Jackson Van Horn Art and Animation by Victoria Bonzani, Emily Garmen Sound by Bryson Brooks Music by Alice Quintanilla Character Design by Sydney Klinghoffer
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/3087820/Rollin_Along/">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developers: Victoria Bonzani, Ronald Harvey, Jackie Van Horn, Emily Garmen, Bryson Brooks, Alice Quintanilla, and Sydney Klinghoffer<h6> 
                <div class="dev-social">
                  <h6>@RollinAlongGame</h6>
                  <a href="https://twitter.com/RollinAlongGame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Hostyle Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/Hostyle.png" alt="A promotional image for Hostyle"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Hostyle</h4>
                <p>Hostyle is a 3D platformer that mixes speed focused gameplay with stylish movement options alongside a PS2/Dreamcast inspired aesthetic. The game follows a secret agent's job interview for one of the most corrupt companies on earth, wherein the player is tasked with traversing various simulated obstacle courses as quickly and as stylishly as possible.
                <br><br>
               I'm Jordan Shoemaker(he/they), a current UT student with a background in art and animation. I've had no experience in programming or game design prior to making Hostyle but I'm eager to finally share what I've been making over the past 4 months. Excited to be here for the first time!
               </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://gamesyall.com/event-august-2024">TBA</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer:  Jorb_EX<h6> 
                <div class="dev-social">
                  <h6>@jorb_ex</h6>
                  <a href="https://www.instagram.com/jorb_ex">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
      
<!--Prometheus Unbound card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/August-2024/games/prometheus-unbound.png" alt="A promotional image for Prometheus Unbound"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Prometheus Unbound</h4>
                <p>Prometheus Unbound is a 2D stealth platformer with graceful speed and machine-precision movement. The player controls Anala Piers, a cyborg-corpse laborer under the control of CarpoTech. Anala regains consciousness and immediately seeks answers and revenge for what happened to her. Gameplay includes fast-paced parkour movement and jumps, as well as stealth mechanics like sneaking, hiding, and wall sticking. Each stage is timed, allowing players to re-attempt levels for faster times, or even to challenge the clear times the developers set! In addition to the main story levels, there are five challenge levels where players can test their platforming and parkouring abilities to the limits. In addition, many levels are open to explore in multiple ways, allowing the player to find hidden collectibles and other areas. Following its release in March, Prometheus Unbound made the longlist for the 2024 Yugo BAFTA Student Awards.
                <br><br>
				The Prometheus Unbound team formed to create the game as a group project in UT Austin's 2D game design capstone course. The six of us came from many disciplines within the university, including programmers, film background, artists, and music. Our team is made up of Luke Mason, Jake Gollub, Cory Mason, Arnold Venter, Ainsley Johnston, and Rodrigo Okamoto Corbelli.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2846110/Prometheus_Unbound/">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Carpot Team<h6> 
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
