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

$headTitle = "February 2023 Meetup - Games Y'all";
$headImage = "/img/event-img/GY-Banner-Feb-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-february-2023">February 19, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>February Meetup</h1>
                
                    <h4> February 19th, 2023 - 2-5pm</h4>
                
				<p>Fairweather Cider <a href="https://goo.gl/maps/PBemCTuM2J2913dX9">10609 Metric Blvd #108, Austin, TX 78758</a> </p>
	
		
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/15620022/games_yall_february_meetup">RSVP</a></button>
       -->
				<br>
	
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Feb-23.png" alt="Fantastic Arcade presents, Games Y'all February Meetup">
            </div>
            

                <div class="col-10">
			<p> Howdy y’all, what an adventure! Thank you to Fairweather Cider for hosting us for our February meetup. Thank you to our the devs and digital artists who showcased!
<br><br>
Fairweather Cider offers wine, cider, and various non-alcoholic options. There is a coffee shop (All Gimmicks Coffee) as well as a food truck (Spicy Boy’s) on site.<p/>
<br>
  <!--Venue details can be deleted when event has passed  
<h5>Venue + Health Details</h5>
<p>There is a decent sized parking lot at the venue, off-site parking, and bike racks.

Main event inside with announcements on stage. <p/>
<br>
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you are experiencing symptoms. Masks are welcome! Hand sanitizer and wipes for controllers will be available. <p/>
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
          
          
  <!--Titanic II: Orchestra For Dying At Sea card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/titanic-ii.png" alt="A rectangular promotional image for Titanic 2: Orchestra for Dying at Sea, it features the title in a glowing red font. Centered in the image is a digital rendering of a large cruise ship that is laying at the bottom of the ocean and is lit by emergency red lights."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Titanic II: Orchestra For Dying At Sea</h4>
<p>Tragedy is comedy & comedy is tragedy. In this dying simulator, sacrifice your life to save the one you love from drowning in the icy waters of the Atlantic, sink to the bottom of the ocean floor and experience the strange, eccentric, & haunting world between life and death, memory and reality.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://flan.itch.io/titanic">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Flan Falacci<h6> 
                <div class="dev-social">
                  <h6>@big__flan</h6>
                  <a href="https://twitter.com/big__flan">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>Big Bag</h6>
                  <a href="https://discord.com/invite/vyDSPpwWsu">
                    <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@bigflan</h6>
                  <a href="https://ko-fi.com/bigflan">
                    <img src="/img/Social-buttons/ko-fi-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Card Cowboy card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/February-2023/games/card-cowboy.jpeg" alt="A rectangular promotional image for Card cowboy featuring the game title in western style lettering and the protagonist astride a horse overlooking a desert landscape nestled within a valley. A small western themed town can be seen in the distance."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Card Cowboy</h4>
                <p>Card Cowboy is a short, silly adventure game about using cards to explore the Wild West and try to get revenge on a Gunman 'who killed your dad, wooed your mom, and kicked your dog'. Your cards represent different cowboy core concepts like Gun, Lasso, Whiskey, and Horse and when you use them in different situations the game tries to build on or make jokes around your expectations.
				<br><br>
				You TOO can get revenge! Card Cowboy's voice actor Max Hudetz will be attending our February meetup to do a live reading! Form a team and shout your moves for a live version of Card Cowboy!
				<br><br>
				Card Cowboy was made by Brieyh’leai, Nic, Karley, Max, Tom, and Chris as part of a bi-annual game jam for our close friend group. Every 6 months or so, we book an Airbnb for a long weekend to jam together. Our theme this time was Cowboys!
					</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2149480/Card_Cowboy/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Publisher: Luckshot Games </h6>
                   <h6>Developers: Brieyh’leai, Nic, Karley, Max, Tom, and Chris </h6>
                <div class="dev-social">
                  <h6>@comfyfish</h6>
                  <a href="https://twitter.com/comfyfish">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>

                  <h6>@gleefulbeest</h6>
                  <a href="https://twitter.com/gleefulbeest">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
      
                  <h6>@max___hue</h6>
                  <a href="https://www.instagram.com/max___hue/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
    
                  <h6>@tomaeusd</h6>
                  <a href="https://twitter.com/tomaeusd">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>

                  <h6>@NicLupfer</h6>
                  <a href="https://twitter.com/NicLupfer">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
          
                  <h6>@chriswade__</h6>
                  <a href="https://twitter.com/chriswade__">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
 <!--OMUI card-->  
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/omui.png" alt="A rectangular promotional image for Onto Maizilind Unto Infinity, Act I: Destruction’s Wake. It features a fighter plane centered under the title of the game with several human characters from the game arranged across the image.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Onto Maizilind Unto Infinity</h4>
                <p>
                Onto Maizilind Unto Infinity (OMUI) is a game about humankind's suicidal instincts, interweaving grand geopolitical destruction with personal tragedy. 
                <br><br>
                It plays much like any other ‘Gone Home-like’ at first, but when you enter the living room it evolves into an interactive family drama - whereby the childhood desire to play distracts and disrupts the narrative delivery of larger historical exposition and context. As these forces are layered and intermingled, the slow buildup of apocalyptic horror elements crescendo to a climax unlike most other works in the horror genre. OMUI draws more from film, theater, and history to orient itself as it descends into a surreal madness. The pieces are sewn together in a dream-like cacophony, amounting to a world-ending nightmare and heartfelt elegy for the dead. 
                <br><br>
                For those mourners who refuse to forget but have been told over and over ‘the past is the past’, ‘that’s life’, or any other attempt to wave away impactful traumas: OMUI stands like a rock, resolutely relaying the message that the past is always with us, conditioning the present and determining our possible futures.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://thestaticman.itch.io/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Kas Ghobadi</h6>


                <div class="dev-social">	
                  <h6>@theStaticMan</h6>
                  <a href="https://twitter.com/theStaticMan">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                
                </div>
              </div>
            </div>
          </div>       
 <!--Fetch Quest card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/fetch-quest.png" alt="A square promotional image for Fetch Quest, it features a simple line drawing of a humanoid in front of a wildflower field with the words let me teach you to play fetch printed on a purple rectangle.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Fetch Quest!</h4>
                <p>
                  Fetch Quest is an adventure game inspired by the tropes of classic Japanese RPGs. As a dog, your day to day routine consists of sleeping, eating, and playing fetch! But what adventures would the dog have if he decided to wander off the beaten path? Currently being built up by a small team of ACC grads, this is a super early build of the game, but we're excited to see an audience response!
                  </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="">Coming soon!</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: 
                				<br>Delaney Bannon 
								<br>Josh Bishop
								<br>Yari Elizondo
								<br>Randall Jackson
								<br>Joseph Sterling Johnson
								<br>Phillip Latham
								<br>Logan Miller
								<br>Seth Shrader
								<br>AJ Smith  </h6>


               <!-- <div class="dev-social">	
                  <h6>@DelaneyBannon</h6>
                  <a href="https://twitter.com/DelaneyBannon">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>-->
         
                </div>
              </div>
            </div>
          </div>  
                  
<!--The Hidden Storybook card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/hidden-storybook.jpeg" alt="A square promotional image for The Hidden Storybook. It features an illustration of an open hardcover book with a three dimensional forest scene unfolding behind the game title rendered in white letters.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>The Hidden Storybook</h4>
                <p>Poof! You are transformed into the main character of your very own fairytale, with a host of magical beings and woodland creatures who'll help you with your everyday tasks. 
                <br><br>
                The Hidden Storybook is a motivational storytelling app that helps turn your everyday tasks magical. 
                In our first installment, you, no matter who you are in real life, become someone who is capable, energetic, and great at getting things done: Cinderella. Want inspiration and company while you clean your house or exercise? 
                We’ve got you. The Hidden Storybook brings you into a world where your Fairy Godmother and a group of friendly woodland creatures are right by your side. 
                <br><br>
                Need some tough love? Your stepmother and stepsisters provide extra motivation along the way. 
                Not only do these fairy tale characters provide great company, they also have handy tips for more effective and joyful cleaning and moving. And jokes. Everybody likes jokes!
					</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://makeeverymedia.com/TheHiddenStorybook/">Play it Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: The Hidden Room Theatre and Make Every Media, LLC</h6>

    
              <div class="dev-social">	
                  <h6>@MakeEveryMediaATX</h6>
                  <a href="https://www.instagram.com/MakeEveryMediaATX/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
<!-- Sail Forth card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/sail-forth.png" alt="A square promotional image for Fantastic Arcade’s game of the month Sail Forth. It features a small sailboat on open water with islands, a Lighthouse, and a pirate haven in the background."> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Sail Forth</h4>
                <p>Sail a fleet of customizable ships across an ocean whose ancient depths have swallowed the key to the mysterious past. Befriend fishfolk to expand your boat crews, take up arms against petulant pirates, and chart a course across an expansive watery world. Will you answer the call of High Adventure?
<br><br>
Festive Vector is a one-person development studio (aka David Evans) based in Seattle, Washington. From inception, David’s projects focus on creating feelings of positivity, hope, and just good ol’ fun. After some time spent at Microsoft he sought to develop his first title, Bicyclism Extra Pedal. Since then, David’s sophomore project, Sail Forth, has won various awards leading up to its release including EGX Official Selection 2019, Dreamhack Best Action Adventure 2019, and Seattle Indies Expo Official Selection (2019, 2020).
<br><br>
The Quantum Astrophysicists Guild was founded in 2011 and received global critical acclaim for our early titles The Bridge and Tumblestone. In 2019, we focused on collaborating with indie developers publishing on PC and consoles to provide opportunities on every platform available. Recently publishing critically acclaimed games Cozy Grove and Freshly Frosted further expanded our library.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.qag.io/sail-forth">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Festive Vector</h6> 
            	<h6>Publisher: The Quantum Astrophysicists Guild</h6> 
            	
                <div class="dev-social">
                  <h6>@festivevector</h6>
                  <a href="https://twitter.com/festivevector">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;"> </a>
                </div>
              </div>
            </div>
          </div>    
              
 <!--Uncanny Solutions card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/uncanny-solutions.jpeg" alt="A square promotional image for Uncanny Solutions, it features the title Uncanny Solutions in black lettering with a pink vine weaving through the letters in the foreground. In the background is an ethereal pink backdrop with brain like forms floating around the title.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Uncanny Solutions</h4>
                <p>
                  Liz Dexia is in the Homepage! Sneek a peek as their high-tech, very natural, parody wellness brand UNCANNY SOLUTIONS comes into being. “Recent advances in the time-honored practice of genetic modification means there has never been a better time to be the best you can be, the Natural Way™.”
<br><br>
				Working under the name Liz Dexia, gender-fluid artist Keith Womak took a dive into the world of Drag to discover what it means to be a Drag performer and in some cases, what it means to be human. After arriving in Austin 7 years ago from a background in illustration and fashion design, Drag became the focus for their creative pursuits. Using costume, performance, illustration, and a pandemic-fueled foray into video production, they have decided to bring these skills, themes, and ideas from Liz’s world into a more exploratory and interactive space.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/liz-dexia">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Liz Dexia </h6>


                <div class="dev-social">	
                  <h6>@elizabethdexia</h6>
                  <a href="https://www.instagram.com/elizabethdexia/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>  
                  
<!--Quilt card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/February-2023/games/quilt.png" alt="A square image for Quilt. A net art project consisting of patterns generated by user submitted prompts which create a digital quilt. It show several layers of blue, green, yellow, black, and purple patterns layered over eachother with scratchy and checkerboard textures.">
                </div>  

              <!--Game Text-->
              <div>
                <h4>Quilt</h4>
                <p>Make Droy’s Quilt is a simple gesture of caring and creativity online. As a user, you have the opportunity to contribute to a big digital quilt by choosing the shape, color, and pattern for the piece you would like to add. Make Droy then creates and weaves your requested shape into an interconnected collage of all the pieces we have made together. Quilt is a project to share as a small way to tell someone you’re thinking about them. Return often for a tiny moment of creativity.
			</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://homepageguest.wixsite.com/make-droy">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Make Droy</h6>
               <p> Make Droy is a machine person from a muddy town who builds game mechanics and communication systems using computing power.</p>

                           <!--Dev <div class="dev-social">	
                  <h6>@?</h6>
                  <a href="https://twitter.com/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>-->
         
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
                    <img src="/img/Archived-img/February-2023/photos/GY-Feb-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/February-2023/photos/GY-Feb-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/February-2023/photos/GY-Feb-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/February-2023/photos/GY-Feb-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/February-2023/photos/GY-Feb-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/February-2023/photos/GY-Feb-6.png" style="width: 375px; height: 375px;">
                  
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
