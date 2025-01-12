<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "November 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all November Meetup";
$headImage = "/img/event-img/GY-Banner-Nov-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-november-2024">November 22nd, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
          <h1>November Meetup</h1>
      
          <h4>November 22nd, 2024 - 7-10pm</h4>
      
          <p> <a href="https://maps.app.goo.gl/xTKBS7ctHXhmwhvH7" target="_blank">1908 Kramer Ln, Suite 250, 78758</a>
              <!-- <br /><br /> 🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome. -->
          </p>
              
          <!--RSVP Button-->
          <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20882942/games_yall_november">RSVP</a></button> -->
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Nov-24.png" alt="The Museum of Human Achievement presents, Games Y'all November Meetup">
        </div>

        <div class="col-10">
            <p>Led by our Games Y’all Committee member Jonathan Levine, our November meetup is focused on accessibility and features games that take accessibility into active consideration in the game’s design! Join us to experience and learn about accessible design decisions in games.<p/>
        
          <h5>Venue + Health Details</h5>
                <p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!<p/>
                <br>        

          <h5>Games Y'all</h5>
          <p>Games Y’all showcases indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. Games Y’all celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.<p/>
          <br>

          <h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>
        </div>
    </div>

  <!-- Games at the event-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
<!--Space Boat card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2024/games/space-boat.png" alt="A promotional image for Space Boat"> 
              </div>  
              
              <!--Game Text-->
              <div>
                <h4>Space Boat</h4>
                <p>
                  'Space Boat' is a humorous investigative narrative game set on an intergalactic cruise-ship inhabited by various carpet based lifeforms. Play as Inspector Domino an undercover an undercover space car detective and hunt down an intergalactic jewel thief.
                </p>
                <h6>Accessibility Features</h6>
                <ul>
                  <li>Playable without need of multiple button combinations </li>
                  <li>High contrast color design mitigates color blindness</li>
                  <li>Color blind shader mode</li>
                  <li>All dialog subtitled for hearing impaired players</li>
                  <li>Single stick control option making most of the game playable with one hand</li>
                  <li>Auto run available to reduce necessary button presses</li>
                  <li>Adjustable input sensitivity</li>
                  <li>Can switch between controller and keyboard/mouse in game</li>
                </ul>

                <p>
				        Recombobulator Games is a small indie company founded by a AAA veteran that wants nothing to do with scummy monetization practices currently employed by AAA companies. We want nothing more than to make great quality games that hearken back to the golden years of gaming but with modern themes and technology. 
                <br><br>
                Luis Alonso founded Recombobulator Games in August of 2020 (during the Covid-19 pandemic). He has been a game developer for over 20 years and brings knowledge from a number of AAA productions (i.e.: Mass Effect 3, Dead Space 2, Need For Speed: Nitro, Thief, etc.) He has been in the role of: animator, FX artist, shader artist, environment modeler, character modeler, technical artist, technical animator, technical director of art, and stress casualty. Additionally, he holds a degree in accounting, so he is counting every penny to make his dear game Space Boat, a reality. 
				        </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1534720/Space_Boat/">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Recombobulator games<h6> 

                <div class="dev-social">
                  <a target="_blank" href="https://discord.gg/JadgAk7KT3">
                    <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;" alt="A link to the Space Board Discord server.">
                  </a>  
                  <a target="_blank" href="https://twitter.com/RecombobulatorG">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;" alt="A link to the Recombobulator Games twitter">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> 

<!--Dawnfolk Card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2024/games/dawnfolk.png" alt="A promotional image for Dawnfolk"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Dawnfolk</h4>
                <p>
                Dawnfolk is a charmingly dark minimalist survival city-builder. Collect resources and rebuild your realm one tile at a time as you protect your settlers from oppressive shadows. Can you unveil the secrets of the monoliths to bring light back to the world?
                </p>
                <h6>Accessibility Features</h6>
                <ul>
                  <li>No compose menus </li>
                  <li>Skippable minigames</li>
                  <li>Controller support with optional haptic feedback</li>
                  <li>Large text with an option to switch from pixelated to a clear font</li>
                  <li>Previous dialog accessible </li>
                  <li>Large icons</li>
                  <li>Only a few objects on screen at a time</li>
                  <li>High contrast colors and unique shapes for each tile type </li>
                  <li>Narrator option who will read everything to the player</li>
                  <li>Playable without sound</li>
                  <li>Game plays in real time but can always be paused.</li>
                  <li>In game character available to give advice</li>
                  <li>Screen shake and flashes can be disabled</li>
                </ul>
                <p>
                Darenn Keller started as a Gameplay Programmer in 2 small game companies during his studies. After graduating in Programming and Game Design, he worked at Ubisoft Bordeaux for 3 years as Game Designer on the Ghost Recon and Assassin's Creed franchises. He left Ubisoft to become an independant game developer in solo, and released his first game Last In Space in only 1 month. He is currently working on Lueur and the Dim Settlers.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2308630/Dawnfolk/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Darenn Keller<h6> 
                <div class="dev-social">
                  <a target="_blank" href="https://darenn.itch.io/dawnfolk">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;" alt="A link to the Dawnfolk Itch page">
                  </a>
                  <a target="_blank" href="https://www.instagram.com/darennkeller/">
                  <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;" alt="A link to Daren Keller's Instagram">
                </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Upheaval card-->
<div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2024/games/upheaval.png" alt="A promotional image for Upheaval"> 
              </div>  
              
              <!--Game Text-->
              <div>
                <h4>Upheaval</h4>
                <p>
                Upheaval is a text-based open world roguelike adventure inspired by tabletop RPGs. Match wits with a world-hopping Magician as you explore the wilds around your remote village, track down magic treasures, and aid or disrupt factions. Be ready: Upheaval is coming!
                </p>
                <h6>Accessibility Features</h6>
                <ul>
                  <li>Turn based combat with no timed actions or complex controls</li>
                  <li>Large high contrast text</li>
                  <li>Background can be disabled and dark mode is available </li>
                  <li>Text to speech is available </li>
                  <li>A command line version of the game is available that is completely playable by blind players who can use any preferenced screen reader</li>
                  <li>Separate volume controls for music, sound effects, ambient sounds and text to speech</li>
                  <li>Keyboard and controller support with remapping to be added before release</li>
                  <li>Difficulty adjustable in game with options to adjust individual elements such as in game time, conjure items, teleport, and rewind</li>
                </ul>

                <p>
				        Alex Leone is a solo developer working in Minnesota, USA. Alex began developing Upheaval in January 2022. Alex has been making games since 2003. Upheaval will be his first commercial title.
				        </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://upheavalgame.com/">Play It Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Alex Leone<h6> 
                
                <div class="dev-social">
                  <a target="_blank" href="https://leonegaming.itch.io/upheaval">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;" alt="A link to the Upheaval Itch page">
                  </a>
                  <a target="_blank" href="https://upheavalgame.com/discord">
                    <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;" alt="A link to Upheaval Discord server">
                  </a>
                  <a target="_blank" href="https://bsky.app/profile/alexleone.bsky.social">
                    <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to Alex Leone's Blue Sky page">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> 
          
        <!--Fetch Quest Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2024/games/fetch-quest.png" alt="A promotional image for Fetch Quest"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Fetch Quest</h4>
                <p>
                Fetch Quest is a condensed action RPG that follows the life of a dog! As a player, you can either choose to follow the golden path, or take short diversions that lead to quests and minigames. The game has been designed to do a lot with minimal controls while offering a variety of accessibility options so that anyone can play it.
                </p>
                <h6>Accessibility Features</h6>
                <ul>
                  <li>Text and background adjustments</li>
                  <li>Visual adjustments to help distinguish players, npcs, and interactable objects</li>
                  <li>Difficulty settings for minigames</li>
                </ul>
                <p>
                Delaney Bannon works as a Producer at 22nd Century Toys, but has extensive experience making projects in Unity on his own time. His hobbies include building model kits and writing about himself in the third person.
                </p>
                <!-- TODO: get link to play Fetch Quest
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2308630/Dawnfolk/">Play It Here</a>
                </button> 
                -->

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Delaney Bannon<h6> 
                <div class="dev-social">
                  <a target="_blank" href="https://bsky.app/profile/delaneyb.bsky.social">
                    <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to the Delaney Bannon's Blue Sky page">
                  </a>
                  <a target="_blank" href="https://delaneyb.itch.io/">
                  <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;" alt="A link to Delaney Bannon's Itch page">
                </a>
                </div>
              </div>
            </div>
          </div> 
          
        <!--TTAP card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2024/games/ttap.png" alt="A promotional image for Space Boat"> 
              </div>  
              
              <!--Program Text-->
              <div>
                <h4>Texas Technology Access Program</h4>
                <p>
                Everyone has the right to kill zombies! The Texas Technology (TTAP) has resources for <a target="_blank" href="https://ttap.disabilitystudies.utexas.edu/accessible-video-gaming">accessible video gaming</a>. 
                Come explore accessible Xbox, PlayStation and PC based gaming tools and query us on how to build your games accessibly. 
                TTAP leads the state's efforts to carry out the federal <a target="_blank" href="https://www.at3center.net/at-act-information">21st Century Assistive Technology Act</a>. 
                Additional information on state AT Programs can be found at the <a target="_blank" href="https://at3center.net/">National Assistive Technology Act Technical Assistance and Training (AT3) Center</a>.
                </p>

                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://ttap.disabilitystudies.utexas.edu/">More Info Here</a>
                </button>

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
                <img src="/img/Archived-img/November-2024/photos/nov-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2024/photos/nov-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2024/photos/nov-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2024/photos/nov-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/November-2024/photos/nov-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2024/photos/nov-gy-photo-6.png" style="width: 375px; height: 375px;">
                
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
