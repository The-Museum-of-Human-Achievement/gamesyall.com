<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
//
// Uses the following variables if set before "require():
//      $headTitle = "Cool Page Title - Games Y'all"; 
//      $headDescription = "A longer description of the page in question, with a bit more information than the title.";
//      $headImage = "/img/event-img/some-cool-event-image.jpg";

$headTitle = "January 2023 Meetup - Games Y'all";
$headDescription = "Happy New Year! We kicked 2023 off with a Family Edition of Games Y'all. We showcased a diverse roundup of games that featured makers of different ages and experience levels.";
$headImage = "/img/event-img/GY-Banner-Jan-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-january-2023">January 21, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>January Meetup</h1>
                
                    <h4> January 21st, 2023 - 2-5pm</h4>
                
				<p>Batch Craft Beer <a href="https://goo.gl/maps/SMK8u7jUcgoQHxhXA">3220 Manor Rd, Austin, TX 78723</a> </p>
	
		
				<!--RSVP Button-->
          
       
				<br>
	
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Jan-23.png" alt="Fantastic Arcade presents, Games Y'all January Meetup, Family Edition'">
            </div>
            

                <div class="col-10">
			<p> Happy New Year! We kicked 2023 off with a Family Edition of Games Y'all. </p>
 

	<p>We showcased a diverse roundup of games that featured makers of different ages and experience levels. We hoped to connect younger folks interested in indie video games and game development with developers who are excited about their craft! Game developers in attendance were there to share their work, chat with folks, and tell us more about what goes on behind the scenes.</p>

	<p>Batch Craft Beer offers food and beverages on site as well as ample outdoor space for kiddos to play.</p>
    
    <br>
    <!--Venue details can be deleted when event has passed
<h5>Venue + COVID Details</h5>
<p>This event is indoors and outdoors. There is a decent sized parking lot and bike racks.
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you are experiencing symptoms. We’ll be in shared space, so can’t guarantee the vax status of regular venue patrons. Hand sanitizer and wipes for controllers will be available.
</p>
<br>--> 
      <h5>Games Y'all + Fantastic Arcade</h5>
<p>Games Y’all is a meetup presented by Fantastic Arcade & The Museum of Human Achievement, held every month at venues around Austin for indie devs, digital artists, and games fans.
<br><br>
Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>
          </div>
        </div>


       
    <!--Games at the event--> 
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          

          
  <!--Ozwomp card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2023/games/ozwomp.jpeg" alt="A square promotional image for the Ozwomp Series. Title of the series is oriented in a circular fashion with the word Ozwomp repeated three times in Green, Yellow, and Orange. The title surrounds a multi-colored polygon shaped character from the series."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Ozwomp</h4>
<p>
1 - Ozwomp is Arriving:
<br>
You have received a mysterious letter from Ozwomp asking if you will meet them at the pan-dimensional gateway - will Ozwomp ever arrive? Who is Ozwomp? Why are there orbs everywhere? Based on an Irish play by Samuel Becket, Ozwomp is Arriving is about the uncertainly of existence and the memory of places.
<br><br>
2 - Ozwomp is Online:
<br>
You have reached a 3D social network from another reality - meet opinionated locals, explore with your friends - find decaying data in the fragments of space! The sometimes online sometimes offline world is the perfect getway location!
<br><br>
3 - Ozwomp's Voyage:
<br>
Ozwomp has been invited to a party at the end of the universe - you will accompany him on a voyage through space and time - through darkness and light - through the many worlds we all inhabit. This is a tiny meditation game.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://melonking.net/games/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Melon King<h6> 
                <div class="dev-social">
                  <h6>@melon</h6>
                  <a href="https://social.yesterweb.org/web/@melon">
                    <img src="/img/Social-buttons/mastodon-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Star Stuff card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2023/games/star-stuff.jpeg" alt="A rectangular promotional image for Star Stuff featuring a Red Star character from the game with its yellow robotic companion standing on a space platform with ringed planets in the background. ">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Star Stuff</h4>
                <p>
                 Star Stuff is a cosmic coding puzzler that takes place in a star factory. Play as Mija (me-ha), a bright-eyed engineer, as they tackle their first day on the job. Play alongside bots to solve increasingly intricate puzzles, and work around increasingly devious rogue bots! 70+ hand-crafted puzzles stand between you and saving the ever-expanding universe. 
                 <br><br>
                 No prior coding experience required!
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1955110/Star_Stuff/ ">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Ánimo Games Studio</h6>


                <div class="dev-social">	
                  <h6>@animogames_</h6>
                  <a href="https://twitter.com/animogames_">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>          
          
 <!--Re:Fresh card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2023/games/refresh.jpeg" alt="A rectangular promotional image for Refresh. It features the title in white over a screenshot of the game featuring a green hilly landscape, wind turbines, and some blue colored characters from the game."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Re:Fresh</h4>
                <p>Lose yourself in the relaxing solarpunk breeze of Re:Fresh, a 3D exploration-platformer game where you play as a robot collecting materials to help repair your town after a torrential storm. Explore at your own pace in the open-ended environment and collect solar cells to upgrade your movement options, forging your own path to get the town up and running again.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://rhia-a.itch.io/re-fresh">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Team Merge Conflict<h6> 
                <div class="dev-social">
                  <h6>@ReFreshTheGame</h6>
                  <a href="https://twitter.com/ReFreshTheGame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div>       
 <!--Amazing Chicken Adventures card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2023/games/amazing-chicken.jpeg" alt="A rectangular promotional image for The Amazing Chicken Adventures. It features the game title with yellow lettering on a green rectangle, in the background is a scene from the game featuring a green hilly landscape with one of the chicken protagonists.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Amazing Chicken Adventures 🐔</h4>
                <p>
                  Introducing Amazing Chicken Adventures, the ultimate egg-rolling puzzle platformer indie game made solo by Piotr Rochala in Melbourne, Australia. In this game, you'll have to use your wits and outsmart the forces of gravity to save the world, one egg at a time. Set to the tune of classical music and equipped with ridiculous chicken-themed tools and a mandatory funny hat, you'll have to navigate through tricky levels and use your problem-solving skills to emerge victorious. 
<br><br>
With no instructions to guide you, this game will keep you on your toes and provide endless entertainment. So put on your thinking cap and let's get cracking - the adventure of a lifetime awaits!
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.amazingchickenadventures.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Piotr Rochala</h6>


                <div class="dev-social">	
                  <h6>@thechickgame</h6>
                  <a href="https://twitter.com/thechickgame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>  
                  
          <!--Rooster Kick card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2023/games/rooster-kick.png" alt="A rectangular promotional image for Rooster Kick featuring a rooster standing on a dirtmound with the game title above in Western lettering. ">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Rooster Kick</h4>
                <p>Rooster Kick is a fast paced survival game where you play the role of a rooster and your one goal is to survive!  You must face off against predators who wish to eat your children all while finding food to stay alive at the same time.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="">Coming Soon</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Grant Johnson</h6>

       </div>
              </div>
            </div>
          </div>   
                <!-- <div class="dev-social">	
                  <h6>@animogames_</h6>
                  <a href="https://twitter.com/animogames_">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>          
          
<!-- Pentiment card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2023/games/pentiment.jpeg" alt="A rectangular promotional image for Pentiment. There is an unidentified character leaning over a table painting, their head is shrouded in orange smoke."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Pentiment</h4>
                <p>Step into a living illustrated world in a time when Europe is at a crossroads of great religious and political change. Walk in the footsteps of Andreas Maler, a master artist who finds himself in the middle of murders, scandals, and intrigue in the Bavarian Alps.
<br><br>
From Obsidian, this game is a historical narrative-driven game focusing on character development, heavily stylized art, and choice-driven storytelling in early 16th century Bavaria. Players will play as Andreas Maler, a clever illustrator caught up in a series of murders in Tassing and Kiersau Abbey over the course of twenty five years. Players will be responsible for conducting their own investigation to decide the fate of the community, but each decision will have lasting consequences and inexorably draws Andreas closer to the center of an underlying conspiracy.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://pentiment.obsidian.net/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Obsidian Entertainment<h6> 
                <div class="dev-social">
                  <h6>@obsient</h6>
                  <a href="https://twitter.com/obsient">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div>        

          
        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
       <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/January-2023/photos/GY-Jan-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/January-2023/photos/GY-Jan-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/January-2023/photos/GY-Jan-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/January-2023/photos/GY-Jan-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/January-2023/photos/GY-Jan-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/January-2023/photos/GY-Jan-6.png" style="width: 375px; height: 375px;">    
                      </div>
            </div>
        </div>
                     <div class="flex-container-row">
                    <img src="/img/Archived-img/January-2023/photos/daniel-murray-ozwomp-thank-you.gif" style="width: 375; height: 375;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
