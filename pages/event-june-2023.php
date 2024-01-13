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

$headTitle = "June 2023 Meetup - Games Y'all";
$headDescription = "The City of Austin Public Library has invited us to bring Games Y’all to their Windsor Park Branch.";
$headImage = "/img/event-img/GY-Banner-June-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-june-2023">June 24th, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>June Meetup</h1>
                
                    <h4> June 24th, 2023 - 2-5pm</h4>
				<p>Windsor Park Branch, Austin Public Library, <a href="https://goo.gl/maps/sw1N4LJ9i9ACefBE6">5833 Westminster Dr, Austin, TX 78723</a> 
				<br><br>Free admission, donations welcome! RSVPs encouraged, or check-in at the door.</p>
	
			
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16149855/games_yall_june_meetup">RSVP</a></button>
            -->
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-June-23.png" alt="Fantastic Arcade presents, Games Y'all June Meetup at the Windsor Park Branch Library">
            </div>
            

		 <div class="col-10">
			<p>We're going to the Library! 
<br><br>
The City of Austin Public Library has invited us to bring Games Y’all to their Windsor Park Branch. We have a new roundup of indie games to play and new digital arts projects from Welcome to My Homepage to explore! 
<br><br>
In addition to our regular programming we are hosting a panel!
<br><br>
<h6>Playing Fair: Access & Accountability in Gaming Ecosystems</h6>
<br><br>
Join Carmaleta McKinnis-Williams (Head of DEI at the Austin Public Library), Kate Sánchez (Founder & Editor-in-Chief of But Why Tho?), and Jonathan Levine (disability advocate & Games Y'all Committee Member) as they collectively consider questions of power, accessibility, and accountability within the indy gaming ecosystem. This hour-long panel will be hosted by Courtney Cook, PhD whose questions will spin around an axis of power, violence, and possibilities for otherwise. There will be time for questions towards the close of the panel. 
<p/>
<br>
    <!--Venue details can be deleted when event has passed-->
<h5>Venue + COVID Details</h5>
<p>This event will indoors. There is a large parking lot and street parking available.
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
          
          
  <!--Mr Sleepy Man card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2023/games/sleepy-man.jpeg" alt="A rectangular promotional image for Mr. Sleepy Man"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Mr. Sleepy Man</h4>
<p>You play as a sleepy guy who's up way past his bedtime and out of control! This sandbox adventure is filled with comical hijinks, outrageous characters and platforming action!
<br><br>
In Mr. Sleepy Man, your actions have consequences. Characters will respond to your actions and interact with you based on your morality. 
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1657740/Mr_Sleepy_Man/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Devin Santi<h6> 
                <div class="dev-social">
                  <h6>@devin_santi</h6>
                  <a href="https://twitter.com/devin_santi">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
 <!--Ladies of Sorrow card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/June-2023/games/ladies-of-sorrow.png" alt="A  promotional image for Ladies of Sorrow: Night One"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Ladies of Sorrow: Night One</h4>
                <p>"Angela and her parents have just moved into their new home: an isolated gigantic mansion, which Angela's mother inherited from a recently deceased grandmother. However, during her very first night in the mansion, Angela realizes there is someone -- or something -- very dangerous within that place... but could it be real? Or could it be only in Angela's head?"
<br><br>
Ladies of Sorrow: Night One is a 2D survival horror & point-and-click adventure game prototype, deeply inspired by classic horror games, movies and novels. It features voiced dialogues in English and is available in 11 languages: English, Portuguese, Spanish, Italian, French, German, Polish, Russian, Korean, Chinese and Japanese.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://thenewson.itch.io/ladies-of-sorrow-night-one">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: TheNewSon</h6>
                <div class="dev-social">
                  <h6>@ladiesofsorrow_</h6>
                  <a href="https://twitter.com/ladiesofsorrow_">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          

  <!--The Tedium and You card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2023/games/tedium.png" alt="A  promotional image for The Tedium and You"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>The Tedium and You</h4>
<p>The Tedium and You is an experimental first-person exploration game featuring infinite, not-necessarily-Euclidean procedural generation and themes of meaninglessness. Getting points is easy: just walk back and forth across a boring hallway. But that likely won't hold your interest. Explore the facility instead and find that the more you see, the less you know; halls wrap in on themselves, rooms aren't always where you expected them to be, and you just can't seem to escape the soulless corporate carpeting and ticking clock.
<br><br>
The game is an exploration of low-grade existential dread, offering a strange commentary on the self-definition of meaning. When the world itself has no intention of giving you a clear, solid, objective meaning, you either create your own or give in to the tedium and quit.
<br><br>
A solo project by Noah Kuhn, a recent UT graduate, computer scientist, and general maker of things.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://noahkuhn.itch.io/the-tedium-and-you?secret=gZtf4CkLHdfqNiIdOWwY01MU">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Noah Kuhn<h6> 
                <div class="dev-social">
                  <h6>@_noah_kuhn_</h6>
                  <a href="https://twitter.com/_noah_kuhn_">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
  <!--PUNCHERMAN card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/June-2023/games/puncherman.png" alt="A  promotional image for PUNCHERMAN!"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>PUNCHERMAN!</h4>
                <p>PUNCHING IS ALL YOU KNOW. YOU'VE PUNCHED ALIENS, DEMONS, ZOMBIES—BUT WITH THESE THREATS GONE, YOU FACE YOUR GREATEST CHALLENGE YET: FAMILY LIFE.
<br><br>
PUNCHERMAN! is a comedy physics dad simulator where you live a day in the life of a former violent FPS protagonist/superhero/generally manly man as he tries to prove himself as a good father and husband. But there’s one problem with that: the only real ability he has is an insanely powerful PUNCH!
<br><br>
Engage in the most masculine of stay-at-home-daddery by completing household chores and running errands using only your fists of fury… and accidentally destroy everything you see in the process.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2364050/PUNCHERMAN_First_Day/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Team PUNCHERMAN!</h6>
                <div class="dev-social">
                  <h6>@PUNCHERMAN_GAME</h6>
                  <a href="https://twitter.com/PUNCHERMAN_GAME">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

  <!--Lichkeeper card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2023/games/lichkeeper.png" alt="A  promotional image for Lichkeeper"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Lichkeeper</h4>
<p>Defend your immortal soul from an onslaught of angry wizards in the most wizard and skeleton filled tower defense game around! Build the perfect defense for your dungeon using a number powerful traps, spells, and upgrades but beware, every round more wizards will come to try to take you down! Lichkeeper is a game in active development by Anodomani and is available for free on steam early access.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1847290/Lichkeeper/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Anodomani<h6> 
                <div class="dev-social">
                  <h6>@LichKeeper</h6>
                  <a href="https://twitter.com/LichKeeper">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
  <!--the dark is a soft, warm pressure card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/June-2023/games/dark-pressure.jpg" alt="A  promotional image for the dark is a soft, warm pressure"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>the dark is a soft, warm pressure</h4>
                <p>"Will you find my body?"
<br><br>
the dark is a soft, warm pressure. tells a story about nostalgia, regret, isolation, and our relationships to our bodies. It combines experimental text vignettes, surreal mini-games, video art, visceral sound design and wistful music.
Visual novel-like sections are interspersed with various 2D and 3D mini-games. After you complete a level, you're transported back to the hub world, where a body's parts are progressively built up. Each part emits a spatialized looping sound, adding to an increasingly noisy texture that you can revisit after each level. The game's tone shifts often from confrontational to contemplative, from scary to sad to silly.
<br><br>
The fact that we get to borrow our flesh for this long is a miracle.
<br><br>
Single-player games can sometimes feel isolating/frustrating, but I think they can also help us understand each other a bit better.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://maredjurphy.itch.io/thedark">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Mared Jurphy</h6>
                <div class="dev-social">
                  <h6>@maredjurphy</h6>
                  <a href="https://twitter.com/maredjurphy/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
            <!--Re:Fresh card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2023/games/refresh.png" alt="A  promotional image for Re:Fresh"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Re:Fresh</h4>
<p>Lose yourself in the relaxing solarpunk breeze of Re:Fresh, a 3D exploration-platformer collectathon game where you collect materials to help repair your town after a torrential storm!
<br><br>
Re:Fresh was developed by Merge Conflict, a 6 person group of UT Austin students, who are passionate about making games and making people smile. We hope you enjoy playing and take some time to relax and Re:Fresh 🌱
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2297650/ReFresh/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Merge Conflict<h6> 
                <div class="dev-social">
                  <h6>@mergeconflict</h6>
                  <a href="twitter.com/mergeconflict">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
  <!--Pan’orama card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/June-2023/games/panorama.jpeg" alt="A  promotional image for Pan’orama"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Pan’orama</h4>
                <p>Relax and unleash your creativity in this new city building puzzle game. Create amazing landscapes and discover wide range of structures with special abilities. Enter the world of beauty and tranquility with the panoramas of your own creation and don't forget to pet your new animal friends!
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1730250/Panorama/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Chicken Launcher</h6>
                      <h6>Publisher: Awaken Realms</h6>
                <div class="dev-social">
                  <h6>@AR_Panorama</h6>
                  <a href="https://twitter.com/AR_Panorama/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                    <h6>@awaken_realms</h6>
                  <a href="https://twitter.com/awaken_realms/">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
            <!--Microbes and Microchips card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2023/games/june-curry.png" alt="A  promotional image for Microbes and Microchips"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Microbes and Microchips</h4>
<p>Artist and mold enthusiast, June Curry, spent the month in a DIY laboratory curating neo-terrariums of fungus, protists, and computer chips to explore the inseparability of technology and biology. Her website lovingly documents the specimens as micro-celebrities, complete with glamor shots, rock star names, stats, and daily photo updates. In her lab diary, Curry catalogs her experiences with caretaking and discovery that, as with humans, some molds chose to fully embrace technology while others would simply rather die.
<br><br>
June Curry is a multidisciplinary filmmaker and artist based in Queens, NY. Since 2017, she has been creating short films, plays, augmented realities, music, and mold with an emphasis on the marriage of technology and biology. Her continued interest in microbiology and mold as an artform has been a way to explore life cycles, map the changes a life goes through, and debate when a death really occurs. Her work has been shown to those who ask to see it. Above her art, she wants trans people to feel the love they deserve.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/june-curry">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: June Curry<h6> 
                <div class="dev-social">
                  <h6>@jejuneposting</h6>
                  <a href="https://www.instagram.com/jejuneposting/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
            
  <!--THINK card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/June-2023/games/think.png" alt="A  promotional image for Think Public Schools"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>THINK! Public Schools</h4>
                <p>Tiffany K. Smith is an interdisciplinary artist from Los Angeles living and working in Austin, TX. Drawing on her past experience as a teacher, she makes digital collages, videos, and interactive web-based experiences that examine the impact of gun culture and gun violence in American schools and considers the future of education. Her projects often pull from advertising, active shooter training, and political speeches to raise questions about America’s values and encourage a deeper investigation of policies shaping education.
<br><br>
Smith graduated from UCLA with a bachelor's degree in studio art in 2011 and a master's degree in education in 2017. From 2016 to 2021, she taught social studies to middle and high school students in Los Angeles public schools. Her work has been shown at The Wende Museum (Los Angeles, CA), DORF (Austin, TX), Art Room (Fort Worth, TX), FLAT PACK (Albany, TX), and California State University, Long Beach.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://homepageguest.wixsite.com/tiffany-k-smith">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Tiffany K. Smith</h6>
                <div class="dev-social">
                  <h6>@tiffanyksmith_studio</h6>
                  <a href="https://www.instagram.com/tiffanyksmith_studio">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
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
                    <img src="/img/Archived-img/June-2023/photos/GY-june-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/June-2023/photos/GY-june-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/June-2023/photos/GY-june-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/June-2023/photos/GY-june-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/June-2023/photos/GY-june-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/June-2023/photos/GY-june-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
