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

$headTitle = "May 2023 Meetup - Games Y'all";
$headDescription = "🦅Calling animal friends!🦅 ⚡Calling indie game fans!⚡ 💥Welcome once again to the Museum of Human Achievement!💥";
$headImage = "/img/event-img/GY-Banner-May-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-may-2023">May 27th, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>May Meetup</h1>
                
                    <h4> May 27th, 2023 - 7-11pm</h4>
                
				<p>The Museum of Human Achievement, <a href="https://goo.gl/maps/B9JgLYYeKq9nKLue7">3600 Lyons Road, Austin, TX 78702</a> </p>
	
			
				<!--RSVP Button 
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16043354/games_yall_may_meetup">RSVP</a></button>
       
	<p>Donate what you can! RSVP please.<p/>-->
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-May-23.png" alt="Fantastic Arcade presents, Games Y'all May Meetup">
            </div>
            

		 <div class="col-10">
			<p>🦅Calling animal friends!🦅 ⚡Calling indie game fans!⚡ 💥Welcome once again to the Museum of Human Achievement!💥
<br><br>Fantastic Arcade presents Games Y’all x Me & My Animal Friend
<br>
🎮🐖🦙🐂🐐🐏🦭🦘🐍🐘🐄🐑🐀🐅🐿️ 🎮
<br>
1 part pet talent show and 1 part indie game showcase!
<br><br>
Me & My Animal Friend is a pet talent show! Come see the finest, most talented, and dare we say endearing pets you’ve ever seen. Watch contestants present their talent in a series of video and stage presentations.
<br><br>
Do you know a talented critter?<a href="https://forms.gle/5wkvC5U1ovdhrggGA">Submit or share our form.</a> 
<br><br>
NO UNREGISTERED PETS ALLOWED! Only pets who are registered to perform for the show are welcome. This is for the safety of all animal and human attendees.
<br><br>
Games Y’all is a monthly meetup presented by Fantastic Arcade for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>
<br>
    <!--Venue details can be deleted when event has passed-->
<h5>Venue + COVID Details</h5>
<p>This event will indoors and outdoors. There is a large parking lot and street parking available.
<br>
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you are experiencing symptoms. Masks are welcome! Hand sanitizer and wipes for controllers will be available. <p/>
<br>
      <h5>Fantastic Arcade</h5>
<p>Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>
          </div>
        </div>

  <!--Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
  <!--Bounce Bat card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2023/games/bounce-bat.png" alt="Bats flying over a city, a promotional image for Bounce Bats"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Bounce Bat</h4>
<p>Bounce Bat is an Austin inspired arcade game where you play as a little bat flapping your way through town trying to eat bugs and cause trouble!
<br><br>
String together aero-bat-ic combos as you bounce through bustling city streets and chomp down on a buffet of bugs across an Austin inspired procedural environment.
<br><br>
Play single player or face off against your friend. Have a chill flight or test your skills in challenge mode.
<br><br>
Bounce Bat was initially created during the ATX Game Maker's Jam in early 2023 and is still under development. It is being developed by Nic and Brieyh'leai, an Austin-based game dev duo who've been making goofy games together since 2016!
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://gumboot.itch.io/bounce-bat">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Gumboot<h6> 
                <div class="dev-social">
                  <h6>@comfyfish</h6>
                  <a href="https://twitter.com/comfyfish">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@niclupfer</h6>
                  <a href="https://twitter.com/niclupfer">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Honk Your Heart Out card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/May-2023/games/honk.jpg" alt="Two geese in love, a promotional image for Honk Your Heart Out"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Honk Your Heart Out</h4>
                <p>Honk Your Heart Out is a goose courtship dance rhythm game. The sound is designed off of the chord theory of music made for love songs. This is a stylized game using a combination of Unreal's unlit materials and custom stylized shaders. All elements of the project were created in the span of 48 hours during to 2023 Chillennium Game Jam held at Texas A&M University. The creators of this game are all A&M students & now alumni.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://jtw906.itch.io/honk-your-heart-out">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Dino Gamerz</h6>
                </div>
              </div>
            </div>
          </div> 
            
          <!--Hatamari card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2023/games/hatamari.png" alt="A Sea Urchin with a hat on it, a promotional image for Hatamari"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Hatamari</h4>
<p>In Hatamari you are a sea urchin with dreams of becoming a hat while gathering hats to stay safe from predators.
<br><br>
Hatamari was cobbled together over a few days and was inspired by the members of the Fantastic Arcade discord.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://thecoby.itch.io/hatamari">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Coby West<h6> 
                <div class="dev-social">
                  <h6>@HowdySkunk</h6>
                  <a href="https://twitter.com/HowdySkunk">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Zoop Zoop Bee Adventures 7 / Wasm4-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/May-2023/games/zoom-wasm.png" alt="Bees rendered in the pixel style, a promotional image for Zoop Zoop Bee Adventures 7"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Zoop Zoop Bee Adventures 7 / Wasm4</h4>
                <p>Pollinate the meadow! Dodge the Duck! Go on an adventure with Zoop Zoop and his
friends, to save his meadows from the dastardly Dick Dastardly Duck! Compete
with your friends to collect the most yummy pollins!
<br><br>
A game made in Wasm4, a fantasy console without all the bells and whistles.
Wasm4 supports many compiled languages, my favorite being Zig. There are merely
15 functions and 64kb to use, cartridges come with rollback multiplayer and save
states built in.
<br><br>
Wasm4 makes low-level and new programmers feel at home, use your own text
editor, language of choice, and sprites can even be drawn in binary!
<br><br>
Made by Award Winning programmer Garrett Hale and June R. professional Community
Manager and Hobby Horror Streamer on Twitch.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://wasm4.org/play/zoopzoop">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Garrett Hale, June Rodriguez</h6>
                <div class="dev-social">
                  <h6>@HauntedPeppers</h6>
                  <a href="https://twitter.com/HauntedPeppers/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      
              
          <!--uCaptain2: World of Fishing card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2023/games/ucaptain.png" alt="A fishing ship on a rough sea, a promotional image forCaptain2: World of Fishing"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>uCaptain2: World of Fishing</h4>
<p>uCaptain2 is the world's first open world fishing simulator for PC and mobile devices! This project is developed by Studio Pareidolia.
<br><br>
uCaptain2 is working with the<a href="https://onebillionresilient.org/project/gaming-technology/">Adrienne Arsht-Rockefeller Foundation Resilience Center</a>to spread awareness of climate resilience. If you’re interested in connecting with fellow climate-minded game devs, looking for information on climate change and the games industry, or just want to learn more about the work that’s being done, visit the Arsht-Rock’s website!
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2385450/uCaptain2_World_of_Fishing/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Studio Pareidolia<h6> 
                </div>
              </div>
            </div>
          </div>        
            
 <!--Passpartout 2: The Lost Artist card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/May-2023/games/passpartout-2.jpg" alt="A painter in the middle of a city street, a promotional image for Passpartout 2L The Lost Artist"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Passpartout 2: The Lost Artist</h4>
                <p>Embark on your struggling artist adventure. Draw and sell art to cheeky critics to reclaim your lost art career. Explore the endearing art-starved town of Phénix and show them you're a true artist!
<br><br>
Draw and sell art on the go using your handy foldable easel. Explore the endearing puppet town, get to know the residents and what makes them tick. Help them out with commissions, like drawing a new ad for Steve's restaurant! Or why not buy a studio so you can work from home, just like the good old days?
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1571100/Passpartout_2_The_Lost_Artist/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Flamebait Games</h6>
                <div class="dev-social">
                  <h6>@FlamebaitGames</h6>
                  <a href="https://twitter.com/FlamebaitGames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
          <!--Dredge card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2023/games/dredge.jpg" alt="On the left a lighthouse and on the right ship afloat a dark and spooky ocean, a promotional image for Dredge"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Dredge</h4>
<p>DREDGE is a single-player fishing adventure with a sinister undercurrent. Sell your catch, upgrade your boat, and dredge the depths for long-buried secrets. Explore a mysterious archipelago and discover why some things are best left forgotten.
<br><br>
Captain your fishing trawler to explore a collection of remote isles, and their surrounding depths, to see what lies below. Sell your catch to the locals and complete quests to learn more about each area’s troubled past. Outfit your boat with better equipment to trawl deep-sea trenches and navigate to far-off lands, but keep an eye on the time. You might not like what finds you in the dark…
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1562430/DREDGE/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Black Salt Games<h6> 
                <div class="dev-social">
                  <h6>@BlackSaltGames</h6>
                  <a href="https://twitter.com/BlackSaltGames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Garden Story card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/May-2023/games/garden-story.png" alt="A bluebbery holding a sword on a deck in front of a house, a promotional image for Garden Story"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Garden Story</h4>
                <p>Unify a broken community as the newly-appointed Guardian of The Grove. Traverse a vibrant island to combat invasive Rot, inspire its inhabitants, and rebuild your home. You won't have to do this alone: fruity friends await, ready to lend a hand!
<br<br>
Concord, the youngest grape in The Grove, is now a Guardian, and it’s their job to help restore the island. That’s a lot to shoulder for a grape barely off the vine… and more than a few inhabitants are skeptical they have what it takes. Fortunately, Concord has friends like Elderberry, Rana, and Fuji on their side! With their help, you can take on the dangerous Rot and find ways to encourage other residents to assist in the efforts. 
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.gardenstorygame.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Picogram</h6>
                <div class="dev-social">
                  <h6>@gardenstorygame</h6>
                  <a href="https://twitter.com/gardenstorygame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
          <!--THINK card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2023/games/think.png" alt="Higher learning graduates tossing caps in front of a polluting factory, a promotional image for the  project THINK Public Schools"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>THINK! Public Schools</h4>
<p>Tiffany K. Smith is an interdisciplinary artist from Los Angeles living and working in Austin, TX. Drawing on her past experience as a teacher, she makes digital collages, videos, and interactive web-based experiences that examine the impact of gun culture and gun violence in American schools and considers the future of education. Her projects often pull from advertising, active shooter training, and political speeches to raise questions about America’s values and encourage a deeper investigation of policies shaping education.
<br><br>
Smith graduated from UCLA with a bachelor's degree in studio art in 2011 and a master's degree in education in 2017. From 2016 to 2021, she taught social studies to middle and high school students in Los Angeles public schools. Her work has been shown at The Wende Museum (Los Angeles, CA), DORF (Austin, TX), Art Room (Fort Worth, TX), FLAT PACK (Albany, TX), and California State University, Long Beach.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/tiffany-k-smith">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Tiffany K. Smith<h6> 
                <div class="dev-social">
                  <h6>@tiffanyksmith_studio</h6>
                  <a href="https://www.instagram.com/tiffanyksmith_studio">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
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
                    <img src="/img/Archived-img/May-2023/photos/GY-may-23-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/May-2023/photos/GY-may-23-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/May-2023/photos/GY-may-23-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/May-2023/photos/GY-may-23-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/May-2023/photos/GY-may-23-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/May-2023/photos/GY-may-23-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
