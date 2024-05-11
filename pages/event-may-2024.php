<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "May 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
$headImage = "/img/event-img/GY-Banner-May-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-may-2024">May 24th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>May Meetup</h1>
        
            <h4>May 24th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/4RQviD9mDGSGXdFh6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/19993747/games_yall_may_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-May-24.png" alt="The Museum of Human Achievement presents, Games Y'all May Meetup">
        </div>

        <div class="col-10">
           <p>
         Howdy y'all, we’re rounding out this Spring with a double stack of fun!  We’ve got the return of powerpoint night and our regular ol' Games Y’all indie game meetup!
<br><br>
Powerpoints:  A 1hr power hour powerpoint presentation extravaganza! Interested in presenting something? Go to our discord for the open call!
<br><br>
Games Y’all: Our monthly meetup presented by The Museum of Human Achievement for indie devs, digital artists, and games fans. 
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
          
<!--Teddy's Inferno card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/teddy-inferno.png" alt="- A promotional image for Teddy's Inferno"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Teddy's Inferno</h4>
                <p>Teddy's Inferno is a top-down arcade shooter with Asteroids-style movement, heavily inspired by Devil Daggers. The player has to survive as long as possible against increasingly frantic waves of enemies, collecting gems to upgrade their weapon in the process. The player's score is purely based on how long they survive. Several special game modes are also available, which alter the difficulty or change the rules of the game. It's named after my cat, Teddy (though the game has nothing to do with cats).
				The game is complete and out (for free) on itch.io, and I built it solo (using a few free assets) with the Phaser 3 game engine.
				<br><br>
				Robocrow is a hobbyist game developer, working solo on small, free browser games in their spare time, and has been building games on and off since high school. Robocrow likes to build games that are simple and quick to play, but offer a lot of replayability.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://robocrow.itch.io/teddys-inferno">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Robocrow<h6> 
                <div class="dev-social">
                  <h6>@robocrow</h6>
                  <a href="https://robocrow.itch.io/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Piroot Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/piroot.png" alt="- A promotional image for Piroot"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Piroot</h4>
                <p>Piroot is an open world action adventure game that I have been developing for about 6 years now. In my game the player controls a ball that can roll around and explore the planet, while gaining new weapons and abilities.
                <br><br>
Frank Force is an experienced game developer and creative coder known for his work on major titles including “Doom”, “Mafia 3”, “Red Faction”, “Psi-Ops”, and “Starhawk”. Now working as an independent game developer he has created a wide variety of games playable online and also released a suite of open source tools for creating art, games, and music including the popular LittleJS game engine and ZzFX sound generator. Frank has also written extensively about creative coding and generative art development. One of his favorite hobbies is writing tiny programs with interesting visual results, having produced over a thousand in total. In 2019 he won Optical Illusion of the Year for creating the “Dual Axis Illusion”. Frank currently lives with his wife in Austin, where he continues to explore new ideas at the frontier of game development and computer art.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2523510/Piroot">Website</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Frank Force Games<h6> 
                <div class="dev-social">
                  <h6>@FrankForceGames</h6>
                  <a href="https://twitter.com/FrankForceGames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      

<!--Chained to the Moon card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/chained-to-the-moon.png" alt="- A promotional image for Chained to the Moon"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Chained to the Moon</h4>
                <p>A game/poem about loving when you're no longer in sight.
				<br>
				Click on the Moon to read the poem in its fragments as you gaze upon the sun and moon dancing through the sky.
				<br><br>
				CorazonTinTin intends to explore the vulnerabilities that his inner heart mirrors about the complex word surrounding her. She finds the digital realm to be a possible safe haven to communicate these feelings, focusing on the idea of movement, where the mediums of animation, video, dance, comics and games can intersect. Movement holds space for a myriads of truths that are processed differently than through a static image, or words of a page. It gives color to the ebb and flow of life, rhythm to our machines and fluidity to static constructs. Through movement, CorazonTintin hopes to create digital artifacts that allow her audience to both learn and play in tandem, and connect ideas that can be a salve to a changing world.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://corazontintin.itch.io/chainmoon">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Corazontintin<h6> 
                <div class="dev-social">
                  <h6>@corazontintin</h6>
                  <a href="https://corazontintin.itch.io">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      
          
<!--Astro Duel 2 Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/astro-duel-ii.png" alt="- A promotional image for Astro Duel 2"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Astro Duel 2</h4>
                <p>Astro Duel 2 is a sci-fi combat game combining top-down space dog fights with up-close platforming action. Whether versus or co-op, battle through space and on foot at the same time! Strike within the fully-destructible arenas or just nuke ‘em from orbit.
                <br><br>
				Wild Rooster is an independent game studio in Austin, Texas. We make the kind of multiplayer games that you want to share with your friends. Our games combine a nostalgic arcade experience with adrenaline-packed gameplay. Like a warm hug punching you in the face.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://astroduel2.com/">Website</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Wild Rooster<h6> 
                <div class="dev-social">
                  <h6>@astroduel</h6>
                  <a href="https://twitter.com/astroduel">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Every Letter card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/every-letter.png" alt="- A promotional image for Every Letter"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Every Letter</h4>
                <p>Every Letter is a letter writing game where you write letters on a typewriter based on characters' requests. (If you're familiar with Violet Evergarden, it was a heavy inspiration.) The game is mechanics-light with the player freely writing based on the requests, and it includes multiple small side stories scattered across these requests.
				Every Letter first came out a couple years ago and has since been ported to Steam and localized into multiple languages, with one more update on the way. I developed most of the game, but my friend (XtlusArt) made an illustration for it, and a whole bunch of translators made the various localizations possible (Locasaurus, Lucie Teulières, Sasha Boucheron, Sarah Deville, Anabel Morales, Ōkami, Hasanh, Ayliz Yıldız, Haigang Zhou).
				<br><br>
				Violet Fairy is a queer indie dev, a professional game designer & level designer, and the lead creator of Every Letter!  She loves making unusual games that are rich in narrative and simple yet heartfelt emotions.  To see her get really excited, ask for her thoughts on gay witches! 
				<br><br>
				Atlas is an illustrator and animator based in Los Angeles. As a creative, they work with clients, ranging from indie game companies to streamers and YouTubers, to provide 2D illustrations, animations, and 3D models. Although working as an all-rounder, their primary style focuses on colors and compositing 2D animations in a 3D space.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://violetfairy.itch.io/every-letter">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Violet Fairy<h6> 
                <div class="dev-social">
                  <h6>@avioletfairy</h6>
                  <a href="https://twitter.com/avioletfairy">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
<!--Oblivion Eve Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/oblivion-eve.gif" alt="- A promotional image for Oblivion Eve"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Oblivion Eve</h4>
                <p>A roguelike action-platformer where you use upgradeable weapons to combo powerful enemies to their doom!
				<br>
				Overcome tough fights, platforming challenges, puzzles, and more in your effort to free the titan who is incarcerated in the shifting prison's depths.
				<br><br>
				Andrew Julian (SmartAlloc) works as a software engineer and game developer, while moonlighting as an indie game developer, his true passion. For over a decade, Andrew has been developing games for the smallest and most restrictive environments - from calculators to washing machines to chatbots. Now he develops for the Pico-8, where he strives to create fun and deep games which can be compressed down to fit within the pixels of a 120x120 png file.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://smartalloc.itch.io/oblivion-eve">Website</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: SmartAlloc<h6> 
                <div class="dev-social">
                  <h6>@SmartAlloc</h6>
                  <a href="https://twitter.com/SmartAlloc">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Meet Me on the Deep Net card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/lizz-thabet.png" alt="- A promotional image for Meet Me on the Deep Net"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Meet Me on the Deep Net</h4>
                <p>Meet me on the deep net is a tiny browser-based game about intimacy, trust, and establishing connection in anonymity. Inspired by the Tor network's process of forming secure rendezvous points to allow websites to be visited and hosted anonymously, Thabet’s interactive narrative is a protocol drama about crossing an ocean to meet a stranger in search of, or offering connection. The blocky styling evokes text-based games and spreadsheet art, highlighting simple computer aesthetics. Thabet has created a space for optimism and awe in a web that’s increasingly surveilled, extractive, and monopolized. Each of the two journeys makes poetry of the requests and responses our devices make, revering the trust made possible in an open-source, privacy-minded network, supported by volunteers around the world.
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://meetmeonthedeep.net/">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Artist: Lizz Thabet<h6> 
            
                </div>
              </div>
            </div>
          </div>          
          
<!--Another Crab's Treasure Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/May-2024/games/aggro-crab.png" alt="A promotional image for Another Crab's Treasure"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Another Crab's Treasure</h4>
                <p>In a vibrant undersea kingdom on the verge of collapse, a hermit crab embarks on a treasure hunt to buy back his repossessed shell. The second game from AGGRO CRAB.
                <br><br>
				Aggro Crab is an indie game studio based in Seattle, WA.
				<br>
				We recently launched Going Under, a third-person roguelite about exploring dungeons themed around failed tech startup ideas.</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1887840/Another_Crabs_Treasure/">Website</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Aggro Crab<h6> 
                <div class="dev-social">
                  <h6>@aggrocrabgames</h6>
                  <a href="https://twitter.com/aggrocrabgames">
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
