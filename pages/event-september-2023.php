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

$headTitle = "September 2023 Meetup - Games Y'all";
$headDescription = "Games Y’all returns to the Baker Center Cafetorium! We’re inviting 15 game devs to share their in-progress indie game projects, come join us and explore their work.";
$headImage = "/img/event-img/GY-Banner-Sep-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-september-2023">September 22nd, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>September Meetup</h1>
                
                    <h4>September 22nd, 2023 - 7-10pm</h4>
				<p>Baker Center Cafetorium <a href="https://goo.gl/maps/YNf3d3xfc4iK5wAi9">3908 Avenue B, Austin, TX 78751</a> 
				<br><br>🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.</p>
	 		
			
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16603551/games_yall_september_meetup">RSVP</a></button>-->
            
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Sep-23.png" alt="Games Y'all presents September Meetup at the Baker Center Cafetorium">
            </div>
            

		 <div class="col-10">

<p>Games Y’all returns to the Baker Center Cafetorium! We’re inviting 15 game devs to share their in-progress indie game projects, come join us and explore their work. 
<br><br>
You can talk to the makers, share some feedback, and experience a variety of games at different stages of development. This is a great opportunity to learn what goes into making games as well as giving valuable insight to the game developers in attendance.
<br><br>
Shoutout to Mighty Coconut for helping facilitate the space!
<p/>
    <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by the Museum of Human Achievement for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>
<br>
      <h5>The Museum of Human Achievement</h5>
<p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
<br>
    <!--Venue details can be deleted when event has passed-->
<h5>Venue + Parking</h5>

<p>It's a big yellowish school building. Guests can park anywhere in the parking lot or street. The entrance door faces 39th street. There will be signs directing you from the parking area to the entrance! Look for traffic cones and folks gathering :) We'll have beer and non-alcoholic drinks available. All ages welcome, wristbands for 21+ who want to drink, ID check at the door. Please do not explore beyond our designated area for gathering!
<p/>
<br>
<h5>Health Details</h5>

<p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!
<p/>
          </div>
        </div>
        

  <!--Games at the event_-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
       <!--No Longer Human card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2023/games/no-longer-human.png" alt="A promotional image of the game No Longer Human"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>No Longer Human </h4>
<p>No longer human is a high-energy action game with expressive, freeform combat that encourages aggressive, stylish play set in the digital bedrock of the collective human psyche. You assume the role of Tsunono, a disgraced vocaloid idol, returning from a decade long exile to destroy the world.
<br><br>
Content warning: Flashing lights and excessive blood.
<br><br>
0801 LLC is a band of psychics developing hardcore software for the terminally disenfranchised.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1710960/No_longer_human/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: 0801 LLC<h6> 
                     <div class="dev-social">
                  <h6>@n0_longerhuman</h6>
                  <a href="https://twitter.com/n0_longerhuman">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Cute Patoots card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/September-2023/games/cute-patoots.png" alt="A  promotional image for the game Cute Patoots"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Cute Patoots</h4>
                <p>Smile your way through all life’s problems in this action platformer!
<br><br>
Patrick Randazzo is a queer professional who works in educational product design and loves retro, experimental, and serious games.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.okipokigames.com">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Okipoki Games</h6>
                </div>
              </div>
            </div>
          </div>  
          
                 <!--Awful Tree Farmer card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2023/games/awful-tree.png" alt="A promotional image of the game Awful Tree Farmer"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Awful Tree Farmer</h4>
<p>You have an airplane and five minutes to plant and grow as many trees as you can. Part flying game, part farming sim, part stress management - can you keep lightening from burning down your forest? Points are awarded for fully grown trees spread evenly across your three fields.
This game is a work in progress. It is built entirely with P5.js.
<br><br>
Joe McKay is an artist who has be making game-based projects since the late 90s. He teaches at SUNY Purchase college and spends time between Austin and New York.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="http://www.joemckaystudio.com/awfultreefarmer">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Joe McKay Studio<h6> 
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Nimrods card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/September-2023/games/nimrods.png" alt="A  promotional image for the game Nimrods"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Nimrods</h4>
                <p>Forge an explosive arsenal in NIMRODS, the reverse bullet hell roguelite that combines gun crafting and survivor action. Blast through waves of deadly aliens and unlock new characters. Craft powerful weapons on your mission and research them to develop new tech and become the ultimate space hunter!
NIMRODS distinguishes itself by enhancing the foundation of survive-em-up games, presenting a profound adventure marked by substantive exploration within a profoundly engaging meta game centered around innovative gun crafting. The concept of gun crafting isn't simply about assembling conventional weapons, but rather conjuring an assortment of unconventional and whimsical armaments. Fancy a pistol equipped with a sniper scope? You got it. How about an assault rifle that launches homing projectiles, which then divide and detonate upon impact? Absolutely. Perhaps even a shotgun sporting an AK magazine cleverly camouflaged as a banana? You bet.
<br><br>
Founded in 2016 through the collaboration of two of friends, Fiveamp has evolved into a team of seven individuals. Their collective efforts have yielded five game releases, amassing over 30 million downloads across all of their games. The team comprises dedicated and enthusiastic game developers driven by a shared aspiration to create exceptionally enjoyable gaming experiences.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/2086430/NIMRODS/">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Fiveamp</h6>
                <div class="dev-social">
                  <h6>@fiveampgames</h6>
                  <a href="https://twitter.com/fiveampgames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
<!--AI Hero card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2023/games/ai-hero.png" alt="A promotional image of the game AI Hero"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>AI Hero</h4>
<p>The year is 2015. AI runs the stock market, controls what people see on social media, and picks presidents. Can you be the one to control AI and make it serve humanity again? AI hero is a set of puzzle games based on my experience building AI systems and researching new AI algorithms.
<br><br>
Jason Gauci got his first computer from a dumpster behind a bank and has been coding ever since. His work on AI improves Search and Relevance for YouTube, Facebook, iOS, and many other products & services. Through his podcast, Programming Throwdown, Jason hopes to share his love of AI and coding with the world.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.programmingthrowdown.com">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Jason Gauci<h6> 
                 <div class="dev-social">
                  <h6>@NeuralNets4Life</h6>
                  <a href="https://twitter.com/NeuralNets4Life">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Scissors in Hell card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/September-2023/games/scissor-hell.png" alt="A  promotional image for the game Scissors in Hell"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Scissors in Hell</h4>
                <p>Scissors in Hell is a madcap 1st person Dungeon Crawler. 
Slice demons (in turn-based combat), 
explore among the flames (in real-time), 
then make a cool base (in hell)!
<br><br>
It's inspired by 90's Shooters, Genesis RPGs, 0451, and That Crafting Game (you know the one).
<br><br>
Z. Bill is a comic book artist & writer who has now been fully converted to making games! He is told, often, that his stuff is "weird."
<br><br>
His first Steam-released game, Mummy Sandbox, was featured on The Haunted PS1 Demo Disc 2021. Scissors in Hell is the spiritual successor.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href=" https://store.steampowered.com/app/1965480/Scissors_in_Hell">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Z. Bill</h6>
                <div class="dev-social">
                  <h6>@z_bill</h6>
                  <a href="https://twitter.com/z_bill">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
<!--Telomeria card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2023/games/telomeria.png" alt="A promotional image of the game Telomeria"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Telomeria</h4>
<p>Telomeria is a point-and-click adventure game set in a science-fantasy world following environmental collapse. The player solves puzzles and meets otherworldly creatures while exploring a decaying land in its final days. Taking inspiration from the early era of 3D graphics, Telomeria uses pre-rendered backgrounds and animations made with 90s graphics software.
<br><br>
Tim Harlow (Vaporshark Games) is an environmental scientist and part-time indie game developer in the Austin area. Their games often involve exploring lonely, haunted worlds and include themes of ecological and digital mysticism. 
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://vaporshark.itch.io/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Vaporshark Games<h6> 
                 <div class="dev-social">
                  <h6>@VaporCryptShark</h6>
                  <a href="https://twitter.com/VaporCryptShark">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Spiral Gate card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/September-2023/games/spiral-gate.png" alt="A  promotional image for the game Spiral Gate"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Spiral Gate</h4>
                <p>Spiral Gate is a turn-based tactics game in which players must learn and adapt to enemy patterns, as all units move and act at the same time, similar to board games like Star Wars: X-Wing.  Enemies provide visual cues to the player, clueing the player into their upcoming move and attack.  Once you’ve selected your moves, end your turn and watch the chaos play out!
<br><br>
Travis is a game developer located in Austin, TX with 10 years of experience making both commercial and educational games in Unity.  His previously shipped titles include Galactikitties and Fantasy Fairways.
Spencer is a game and UI/UX designer located in the DC area. He previously worked on the card game, Dust to Dust, as well as collaborated with Travis on the project Soar.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://travis-chandler.itch.io/spiral-gate">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Spencer Swan & Travis Chandler</h6>
                </div>
              </div>
            </div>
          </div>
        
<!--Monochrome Heights card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2023/games/monochrome.png" alt="A promotional image of the game Monochrome Heights"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Monochrome Heights</h4>
<p>Monochrome Heights is a tough-as-nails 2D platformer where you play as Happy the Robot, attempting to ascend Layla's Tower. Help Happy run, jump, and slide their way to the top of the tower. But don't forget Happy's most important and distinctive skill: phasing between black and white. Monochrome Heights is a modern retro-style experience, with a high level of difficulty and regular checkpoints. The game is inspired by early Super Mario Bros. and Mega Man titles, but brings its own unique twist in the form of the phasing mechanic to classic challenging platforming.
<br><br>
Patrick Knisely is an indie dev, podcaster, freelance writer, and climate advocate. He co-hosts the Nintendo podcast Super Switch Headz and is developing the indie game Monochrome Heights.
<br><br>
Bent Neatly is an internet content creator and musician currently working on the sound track to indie game Monochrome Heights.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://monochromeheights.com">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Patrick Knisely & Bent Neatly <h6> 
                 <div class="dev-social">
                  <h6>@Pdyx</h6>
                  <a href="https://twitter.com/Pdyx">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Tactical Battle Fights card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/September-2023/games/tactical.png" alt="A  promotional image for the game Tactical Battle Fights"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Tactical Battle Fights</h4>
                <p>Tactics. Battles. Fights. Tactical Battle Fights has it all. Unlock over 18 unique units, from knights, to pirates, to ghosts, to yetis, as you battle your way across the kingdom in a challenging campaign that will have you fighting in castles, circus tents, ancient temples, dwarven mining tunnels, and so much more before going toe to toe with a fearsome dragon. 
<br><br>
Drawing inspiration from classic 2D tactics games like Advance Wars and Fire Emblem (but way simpler and sillier), TBF is a 2D browser-based tactics game written entirely in vanilla JavaScript and HTML Canvas. It features charming low-res sprites, an incredible 8 bit soundtrack, and a nefarious enemy AI that will give even long-time fans of tactics games a lot to think about. So far it requires a mouse and keyboard to play, but will have mobile support soon.
<br><br>
TBF is the first game from Cycle Path Games, a silly studio with a silly name that Sean Roulier and Hailey Bobella came up with to describe their collaboration. Sean, who works at the Austin Public Library by day, made a soundtrack to a game that didn't exist and some silly sprites to go with it, and Hailey, a software engineer who works on apps and websites, decided to make it into a browser game that you can play (without an engine, for some reason!). This is hopefully the first of many games they plan to make together. Here's their silly logo, made by their other best friend Kela Kealaki.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://tacticalbattlefights.com">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Cycle Path Games</h6>
                </div>
              </div>
            </div>
          </div>
          
<!--Build-A-Web card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2023/games/build-a-web.png" alt="A promotional image of the game project Build-A-Web"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Build-a-Web</h4>
<p>Artist-in-residence Celine Lassus is gathering insight into what dreams individuals from marginalized communities have for the internet, and what needs aren’t being met. With the information collected, Celine will transform the data into an online dress up game.
<br><br>
Celine Lassus (b. 1999, Tampa, FL) is a digital native first, artist second. Based in Austin, TX, they work across interactive visual essays (or what you could call games), performance, video and installation. Their work has been exhibited in the New Art City Festival, The Wrong Biennale, and archived by the Rhizome ArtBase. They have attended the CATS+ Residency at The Museum of Human Achievement and hold a BFA in Studio Art from The University of Texas at Austin.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.welcometomyhomepage.net/ ">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Celine Lassus<h6> 
                 <div class="dev-social">
                  <h6>@bimbointech</h6>
                  <a href="https://www.instagram.com/bimbointech/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
 <!--Viewfinder card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/September-2023/games/viewfinder.png" alt="A  promotional image for the game View Finder"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Viewfinder</h4>
                <p>Challenge perception, redefine reality, and reshape the world around you with an instant camera. Viewfinder is a new single player game offering gamers hours of interesting and fun experiences while uncovering the mysteries left behind.
<br><br>
Viewfinder was developed by Sad Owl Studios in Scotland.</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.sos.games/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sad Owl Studios</h6>
                   <div class="dev-social">
                  <h6>@sadowlstudios</h6>
                  <a href="https://twitter.com/sadowlstudios">
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
                    <img src="/img/Archived-img/September-2023/photos/GY-september-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2023/photos/GY-september-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2023/photos/GY-september-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2023/photos/GY-september-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/September-2023/photos/GY-september-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2023/photos/GY-september-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
