<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "July 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all July Meetup";
$headImage = "/img/event-img/GY-Banner-July-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-june-2024">June 24th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>July Meetup</h1>
        
            <h4>July 25th, 2024 - 7-10pm</h4>
        
            <p>
                RADIO/EAST <a href="https://maps.app.goo.gl/9QKeY1ZLcNW3Z2Zj7" target="_blank">3504 Montopolis Dr, Austin, TX 78744</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20269818/games_yall_july_meetup">RSVP</a></button>-->
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-July-24.png" alt="The Museum of Human Achievement presents, Games Y'all July Meetup">
        </div>

        <div class="col-10">
           <p>Our new friends down at RADIO/EAST are welcoming us into their coffeehouse to host our July Games Y’all. Join us for cold drinks, hot drinks, pastries, and games! This month's roundup showcases the wide variety of projects we receive for our open call.
 <br> <br>
Did you know you could submit your indie game or digital art project to show at future meetups? <a href="https://gamesyall.com/submit-a-game" target="_blank">Submit your game here!</a>
 <br> <br>
RADIO/EAST is a bakery and coffeehouse that boasts a diverse menu of drinks and snacks! There are 3 food trucks on site and plenty of parking.</p>
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
          
<!--Swashbucklin Summit card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/swashbucklin.png" alt="A promotional image for Swashbucklin Summit"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Swashbucklin Summit</h4>
                <p>Race against other pirates in this tactile strategy game building your way up to the treasure at the center peak! Place hexagonal tiles on the board around you to raise the elevation giving you a path to get to the high ground. Play cards to mess the other player’s plans up and to take you to new heights!
				<br><br>
			Team Alpha consists of a trio of students pursuing a Video Game Development degree at St. Edward's University! 
			</p>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Team Alpha<h6> 
                </div>
              </div>
            </div>
          </div> 

<!--Sun Is Dead Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/sun-is-dead.png" alt="A promotional image for Sun Is Dead"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Sun Is Dead</h4>
                <p>"Explore a world plunged into eternal darkness in ""Sun Is Dead,"" an apocalyptic action-adventure game. As a lone scavenger, you must navigate through treacherous, monster-infested cities to find precious resources, maintain your train, and survive. Key Features:
<br>
Dynamic Combat System: Master a diverse arsenal of melee and ranged weapons, each with unique combos and techniques. Adapt your playstyle to overcome increasingly powerful foes.
<br>
Procedurally Generated Levels: Experience a fresh challenge with every playthrough as you explore ever-changing urban landscapes filled with dangers and opportunities.
<br>
Train Customization: Upgrade and personalize your train to unlock new abilities and ensure your survival in a world where staying in one place means certain death.
<br>
Atmospheric World: Immerse yourself in a richly detailed, apocalyptic future where the sun has died, and shadows have come to life.
<br>
Resource Management: Scavenge for vital supplies, upgrade your gear, and keep your train running as you fend off relentless hordes of monsters.
<br>
Strategic Exploration: Choose your path through multiple branching routes, each with its own set of challenges and rewards.
<br>
Can you survive the darkness and find a safe haven in a world where the sun is dead? Embark on a journey of survival, combat, and discovery in "Sun Is Dead."
<br><br>
A solo dev is creating the game, Luis Garcia has worked in the game industry for over 10 years, and over time he has gained the skills needed to start and chase his dream of growing his own indie game studio.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2794410/Sun_Is_Dead/">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Glory Games Studio<h6> 
                <div class="dev-social">
                  <h6>@el_lui_garcia</h6>
                  <a href="https://twitter.com/el_lui_garcia">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Lemonade Time! card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/lemonade-time.jpg" alt="A promotional image for Lemonade Time!"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Lemonade Time!</h4>
                <p>Make as much lemonade as you can in the time limit by dragging around lemons and other supplies. A groundbreaking interactive media experience. We consider this project to be one of the first "stand type" games. Good luck! :)
<br><br>
"The year is 2024. One stormy May night a group of friends huddle around their Discord call to discuss something they had been planning for months - a low stress game jam. What happened over the course of this next week would change their lives forever...
<br>
Theatrics aside, this game was made by a group of friends wanting to learn more about Godot and keep their game dev skills fresh. We aimed for something low-scope and simple in design to help maintain flexibility on the team. Amidst the current turbulence of the industry it's important to be able to remind yourself why you're making games in the first place. This project helped us to do that."
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://eraserlark.itch.io/lemonade-time">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: DeathCrafts<h6> 
                </div>
              </div>
            </div>
          </div> 

<!--Infinite Library Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/infinite-library.png" alt="A promotional image for Infinite Library"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Infinite Library</h4>
                <p>You are Alex, the Librarian of the expansive Infinite Library! Navigate through treacherous puzzles using the Library's Books of Power to bend the laws of physics to your will and vanquish the Corruption.
                <br><br>
                We are a team of 7 students from Texas A&M, Our game received "Best in game design" at Texas A&M's annual Vizagogo competition. We are looking forward to getting to present our work and meet other game devs!
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://darkstorminteractive.itch.io/infinite-library">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Darkstorm Interactive<h6> 
                <div class="dev-social">
                  <h6>@InfiniteL1brary</h6>
                  <a href="https://x.com/InfiniteL1brary">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Bridgebourn card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/bridgebourn.png" alt="A promotional image for Bridgebourn"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Bridgebourn</h4>
                <p>Explore a hand-painted semi-open world. Discover secrets and treasure with your band of adventurers in this story rich ARPG. Experiment with powerful reactions by combining spells. Fight what lurks in the depths of dungeons. Enhance your playstyle with magic loot. Uncover mysteries of the Fadelands.
                <br><br>
				I've been practicing art all throughout my youth. Eventually, I learned to code to start working on Bridgebourn. It's been 9 years so far. The goal of the game is to share my love of adventure with others.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2027760/Bridgebourn/">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Bamboo's Bazaar, LLC<h6> 
                <div class="dev-social">
                  <h6>@BambooBanditSR</h6>
                  <a href="https://twitter.com/BambooBanditSR">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Research Notebook Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/research-notebook.png" alt="A promotional image for Research Notebook"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Research Notebook</h4>
                <p>I am using Notion to dispatch a research project that speculates the relationship between my avatar/alias self (@$#@) and an astronomer named Noor. @$#@ plays the role of a cyber anthropologist who discovers an archive from Noor, who happens to be the last astronomer from Earth. Here, I am researching in public as an invitation to discover different modes of making truths (or otherwise) in storytelling. You will find the webpage used as a collecting ground for ongoing research notes, images, and some voice memos reciting @$#@’s discovery.
                <br><br>
                asha jamila holmes is a Baltimore-born artist currently working in Chicago, IL. She makes images, new media experiments, and speculative research, as well as writes, programs, and parses archives. Her work inspects the lifecycle of visual images, considering the ancestries of their perception as the internet continues to change the way they are understood. She holds a BFA in photography with a concentration in curatorial studies from MICA. She is currently a photo gallery registrar.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://ashajamila.notion.site/Research-Notebook-3c9d9d63ad534ab280a3aee879e516b6">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Asha Jamila Holmes<h6> 
                </div>
              </div>
            </div>
          </div>   
          
<!--Caribbean Dominoes card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/July-2024/games/caribbean-dominoes.png" alt="A promotional image for Caribbean Dominoes"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Caribbean Dominoes</h4>
                <p>A classic game reimagined and full of personality. Caribbean Dominoes is dominoes with flair, finishers, chat, smack talk and more.
                <br><br>
				Kamau is a game dev extremely passionate about games and the impact they have on the human spirit. Game jams and ping pong are his go tos.
				<br><br>
				Christopher is a game dev that embodies the word “art”. He’s responsible for all the kick ass animations. Did we mention he knows how to fly planes and has been to over 25 countries?
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://play.google.com/store/apps/details?id=com.MoonlitStudios.CaribbeanDominoes&pli=1">Play it Here (Android)</a>
                </button>
                  <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://apps.apple.com/us/app/caribbean-dominoes/id1588590418">Play it Here (Apple)</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Moonlit Studios<h6> 
                <div class="dev-social">
                  <h6>@caribbeandominoes</h6>
                  <a href="https://discord.gg/m4hkEBfzkR">
                    <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
          
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past-->
    <div class="row">-
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/img/Archived-img/July-2024/photos/july-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/July-2024/photos/july-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/July-2024/photos/july-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/July-2024/photos/july-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/July-2024/photos/july-gy-photo-5.png" style="width: 375px; height: 375px;"> 
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
