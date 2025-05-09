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
        
            <h4>February 27th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/4RQviD9mDGSGXdFh6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/17482522/games_yall_february_meetup">RSVP</a></button> -->
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

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
<!--HA-L card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/ha-l.png" alt="- A promotional image for Hal">
                </div>  

              <!--Game Text-->
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

              <!--Dev Text-->
              <div>
                <h6>Developers: Ethan & David</h6>

                </div>
              </div>
            </div>
          </div>          
          
          
<!--Stan Derp card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/stan-derp.jpg" alt="- A promotional image for Stan Derp"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Stan Derp</h4>
                <p>In Stan Derp, the player must keep their balance on stage to not fall down while delivering their standup routine. Players must build setup meter in order to deliver punchlines that get the crowd going, but none of that will work if you don't breathe!
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://globalgamejam.org/games/2024/stan-derp-4">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Clicky Clack<h6> 
                </div>
              </div>
            </div>
          </div>     

<!--Superphone card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/super-phone.png" alt="- A promotional image for Super Phone">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Superphone</h4>
                <p>Superphone is a satirical and chaotic Warioware ripo . You've got the latest smartphone, waste as much time on it as possible. Made for GGJ2024.
                <br><br>
               Sarathi is a coder, solo game designer, and co-founder of local ed-tech startup Squarecap. He is an avid reader and a convicted jaywalker.
            </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://sarathi.itch.io/superphone">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sarathi Sathasivan</h6>

                <div class="dev-social">	
                  <h6>@sarathi</h6>
                  <a href="https://sarathi.itch.io">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      
              
 <!--Go to Hole card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/go-to-hole.jpeg" alt="- A promotional image for Go to Hole">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Go to Hole</h4>
                <p>Fresh off of this year's Global Game Jam, Go to Hole is a 2D, multiplayer, golng game where the golf balls are actually men! launch them in the air and try to get the man in the hole in as few turns as possible. Go to Hole is in it's Prototype stage and we are working on making it into a fully edged mobile/web game.
                <br><br>
              Jake and Dane (cancer and libra respectively) are two students who love making games — and have been for the past few years. Each project is unique in its own way, ranging from hiring clowns for a circus to flinging men through a golf course. No matter what, you can guarantee the game you’ll play will be a strange little thing.
              </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://omelettefried.itch.io/get-to-hole">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Dolmanton Studios</h6>

                <div class="dev-social">	
                  <h6>@eggflavored</h6>
                  <a href="https://eggflavored.itch.io/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@omelettefried</h6>
                  <a href="https://omelettefried.itch.io/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                
 <!--Clown Clash card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/clown-clash.png" alt="- A promotional image for Clown Clash"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Clown Clash</h4>
                <p>Clown Clash is a simple fighting game that was made for the 2024 Global Game Jam. In it, you play as a friendly clown that has to bring their fellow circus performer back to their senses... by throwing a bunch of pies in their face!
                <br><br>
			Jimmy L. is (primarily) a 3D modeler/animator who makes games as a hobby. Above all, he loves making things that are cute.
			</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://jimjimthebard.itch.io/clown-clash">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Jimmy Liu<h6> 
                <div class="dev-social">
                  <h6>@jimjimthebard</h6>
                  <a href="https://jimjimthebard.itch.io/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>         
          
          
<!--Dashboard Confessionals card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/dashboard-confessionals.png" alt="- A promotional image for Dashboard Confessionals"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Dashboard Confessionals</h4>
                <p>In 2022 Jamie DeAngelo began tracking how they spent their time in a conditionally-formatted excel spreadsheet. As an artist who has worked “fairly soullessly” with data analysis in their day job, reclaiming data collection as a meditative personal practice became a gratifying way to find purpose in daily life. Dashboard Confessionals is a humorous, vulnerable, and highly self aware presentation of this data, consolidated into 6 categories. It borrows from corporate visuals of sales growth graphs and web traffic heatmaps, subtly subverted with wiggly hand drawn charts, stories, and metrics chronicling their anxious thoughts, personal judgements, and little treats.
                <br><br>
				Jamie DeAngelo is a former graphic designer and current bureaucrat/desk surfer who loves illustration, but lately loves charts even more.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://homepageguest.wixsite.com/jamie-deangelo">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Jamie DeAngelo<h6> 
                <div class="dev-social">
                  <h6>@romen_cake</h6>
                  <a href="https://www.instagram.com/romen_cake/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--The Case of the Golden Idol card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2024/games/the-golden-idol.jpeg" alt="- A promotional image for The Case of the Golden Idol">
                </div>  

              <!--Game Text-->
              <div>
                <h4>The Case of the Golden Idol</h4>
                <p>The Case of the Golden Idol is set in the 18th century where you piece together clues and reconstruct the events of mysterious deaths using a unique drag-and-drop evidence mechanic. The game is brought to life combining early 90ies PC point and click adventure game pixel art aesthetics with late 90ies 3D rendered cutscene visuals.
                <br><br>
              Color Gray Studio was founded in 2021 by two brothers Andrejs and Ernests to explore if they can use their many years’ experience in the industry to make creatively fulfilling and financially viable games. The Case of the Golden Idol is the studio's first game.
              </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.thegoldenidol.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Color Gray Games</h6>

                <div class="dev-social">	
                  <h6>@colorgray7</h6>
                  <a href="https://twitter.com/colorgray7">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
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
