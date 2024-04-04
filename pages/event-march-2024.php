<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "March 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
$headImage = "/img/event-img/GY-Banner-Mar-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-march-2024">March 30th, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>March Meetup</h1>
        
            <h4>March 30th, 2024 - 7-10pm</h4>
        
            <p>
                The Museum of Human Achievement <a href="https://maps.app.goo.gl/4RQviD9mDGSGXdFh6" target="_blank">3600 Lyons Road, Austin, Texas, 78702</a>
            </p>
                
            <!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/17630057/games_yall_march_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Mar-24.png" alt="The Museum of Human Achievement presents, Games Y'all March Meetup">
        </div>

        <div class="col-10">
           <p>Join us on the last Saturday of March for Games Y’all! We’ll be back at The Museum of Human Achievement with a fresh selection of locally produced Indie Games. Interested in submitting a game? We are currently accepting submissions for our April and May Games Y’all Meetups.
           <br><br>
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
          
          
<!--Obsolete Adapter card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/obsolete-adapter.png" alt="- A promotional image for Obsolete Adapter"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Obsolete Adapter</h4>
                <p>Obsolete Adaptor is an interactive dialogic poem made in neverwinter nights 2 (2006) toolset for creating custom modules. They chose this medium out of a personal nostalgia as well as to reflect on things that fall out of use or become obsolete. The dialogue between the Swordsman and the Wizard reflects on virtual time, labor, identity, retirement, and function vs personal fulfillment. The game takes certain inspiration from Ursula K Leguin’s Carrier Bag of Fiction and wouldn't exist without the introduction of family LAN games and the labor of John Romanus’ 20 years as a government employment (2004-2024).
                <br><br>
		"Sara Aleyce Roma is an Austin, Texas based new media artist who utilizes stop-motion, web animation, free association writing, found objects/found “software”, live video mixing, and performance.
<br>
Raised by the internet in Nebraska they learned HTML on neopets and animation from youtube before formally studying Motion Media at SCAD, the Savannah College of Art and Design.
<br>
Their work has been shown in spaces across Texas including MoHA, the Orange Show, Martha’s, DadaLab, and other DIY venues."</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.chromaglyphs.xyz/">Website</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sara Roma<h6> 
                <div class="dev-social">
                  <h6>@chromaglyphs</h6>
                  <a href="https://www.instagram.com/chromaglyphs">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>         
          
<!--ILIAGC: I Live In A Graphing Calculator card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/iliagc.png" alt="- A promotional image for ILIAGC: I Live In A Graphing Calculator"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>ILIAGC: I Live In A Graphing Calculator</h4>
                <p>"ILIAGC is something akin to a graphing calculator mixed with a 2D platformer. There are coins to collect, things to buy, and high scores to chase. There's controller support and ""seamless""-ish local multiplayer of up to 4 players I believe.
<br>
I started it as a final project for an education class  I was taking (Spring 2023) and decided to keep working on it in the summer. The last update I made to it was on May 30, 2023. I'm currently working on other projects at the moment."
<br><br>
nandbolt (Alexander Wilson) is a current UT student in his 3rd year studying computational physics. He loves video games and has mainly focused on making 2D games independently using various engines (but mainly GameMaker). His current game development goals are to bring to life the various ridiculous ideas that come to his mind that can potentially bring some joy to others.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://nandbolt.itch.io/iliagc">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: nandbolt<h6> 
                <div class="dev-social">
                  <h6>@nandbolt</h6>
                  <a href="https://twitter.com/nandbolt">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
<!--Cows Vs Aliens card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/cow-aliens.png" alt="- A promotional image for Cows Vs Aliens"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Cows Vs Aliens</h4>
                <p>"Welcome to Cows Vs Aliens, an alt ctrl co-op arcade game! You are two aliens vacationing Earth together and have discovered the cutest creature you’ve ever laid eyes on: COWS! Sit in and operate our command chair controllers to collect as many cows as you can to maintain your happiness meter, but don’t fall for the decoys! FBI agents, suspicious of extraterrestrial activity, are disguised as cows and are out to get you AND your new beloveds!
<br>
The game is currently released on itch.io along with documentation and may be updated in the future for polish. Our custom-built alt controllers (2 chairs) are fully fabricated and wired and may be also updated in the future for polish."
<br><br>
Moo-niverse Entertainment is a team of students from UT Austin that was formed in the Fall 2023 Next Level Arcade Senior Design Project class.
<br>Em Dryer: Lead Producer, Audio Designer, Experience Designer
<br>Eriane Austria: Game Producer, Designer, & Programmer; UX Designer
<br>Emily Mercado: Concept Artist, 2D Game Artist, Animator, Level Designer
<br>Larenz Harrington: Alt Controller Fabricator, Programmer, & Designer
<br>Christine Chen: Concept Artist, 2D Game Artist, UI Artist, Animator
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://enair3.itch.io/cows-vs-aliens">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Moo-niverse Entertainment<h6> 
                </div>
              </div>
            </div>
          </div>         
          
          
<!--Book of Five Rings card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/book-of-five-rings.jpg" alt="- A promotional image for Book of Five Rings"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Book of Five Rings</h4>
                <p>A samurai duel for the Atari 2600
				Inspired by the writing of Musashi Musashino, the art of Hiroshige, and of course Bushido Blade, the grandaddy of all one-hit-kill swordfighting games.
				<br>
				I taught myself 6802 Assembly, coded the whole game, arted up an awesome label, and found a guy who builds Atari 2600 cartridges to put one together for me. I've got a vintage television, original VCS hardware, it's a fast & fun game, this project is gonna steal the show at Games Yall!
				<br><br>
				Dan Manning is a software architect and game developer in Austin TX. He has created games for Xbox, Android, iOS, and Atari 2600, including cult classic titles such as Opposites, Pajamorama, RoboJets, and Language Warriors.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://github.com/dmanning23/BookOfFiveRings">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Dan Manning<h6> 
                </div>
              </div>
            </div>
          </div>  
          
<!--Classifieds for Poets card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/classifieds-for-poets.png" alt="A promotional image for Classifieds for Poets"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Classifieds for Poets</h4>
                <p>The website *Classifieds for Poets* asks about the economic factor for artists and creative people of all kinds. Understanding the economy not as making money and paying bills, but as a complex system that regulates and administers resources, including the “production” of ideas, vital energy or emotions. More deeply, this project asks about how the economy would be if the symbolic creation were its center, as opposed to the money-material production centered capitalism. In a poetic society, where the economy is based on symbolic production, what is "profit?" The website will contain illustrations, texts and a forum. Its aesthetic will be of medieval prints.
                <br><br>
			Laura M. Cañas P. (Medellín, Colombia, 1992). Artist and Journalist. Based in Austin, TX, USA. She has a bachelor degree in Social Communication-Journalism, self-taught artist and has participated in group exhibitions, artists groups and received grants for creative projects. Laura´s work is developed at the intersection between art and journalism. Her main mediums are linoleum, comics, etching and digital illustration. Her creative work is made from her perspective as a Latina woman. With her art she explores the themes of the feminine, gender violence, the power to heal, resilience and relationships within nature. She is also interested in the questioned relationship between Global North-South, and in new ways of thinking such as decolonization and alternative economies.
			</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/classifiedsforpoets/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Laura M. Cañas P.<h6> 
                <div class="dev-social">
                  <h6>@seafilantijeras</h6>
                  <a href="https://www.instagram.com/seafilantijeras/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>         
               
<!--All About Computer Love card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/computer-love.png" alt="- A promotional image for All About Computer Love"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>All About Computer Love</h4>
                <p>Sara Martínez’s All About Computer Love is a daydreamy, interactive visual essay. Open your desktop browser’s command console to read Martínez’s love letter to the internet, laden with her reflections on safety, belonging, and agency. Type to unfurl a sweet, javascript animated, domestic landscape that evokes the aesthetics of early American needlework samplers, ASCII art, and e-card valentines. 
			<br>
			“...I have loved a lot through the internet and have feared so little.”
			<br><br>
			Sara Martínez is a writer, designer and interdisciplinary artist based in Mexico. Her work has taken different forms such as installation, digital mixed media, performance, essays, electronic poetry and short fiction. Her work explores themes such as poetic terrorism, poetic practices of intentional illegibility and text corruption, the body and the avatar, and the question of the subconscious in computational mediums and machines. She holds a Bachelor’s degree in Communications and Digital Media from Universidad Iberoamericana. Her work has appeared in Mvseo Privado, Revista 404, Museo Cabañas and the gallery Rosario Sánchez.
			</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://all-about-computer-love.glitch.me/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Sara Martinez<h6> 
                <div class="dev-social">
                  <h6>@identikitten</h6>
                  <a href="https://www.instagram.com/identikitten/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
 <!--Pacific Drive card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/March-2024/games/pacific-drive.jpeg" alt="A promotional image for Pacific Drive"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Pacific Drive</h4>
                <p>Face the supernatural dangers of the Olympic Exclusion Zone with a car as your only lifeline in this driving survival adventure! Scavenge resources, load up your trusty station wagon, and drive like hell to make it through alive.
                <br><br>
				Ironwood Studios is a Seattle based game development team made up of experienced developers with a long history in the industry. Driven forward by surreal settings and compelling gameplay that actually tells a story, we've been putting those values towards our first title.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.pacificdrivegame.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Ironwood Studios<h6> 
                <div class="dev-social">
                  <h6>@ironwoodtweets</h6>
                  <a href="https://twitter.com/ironwoodtweets">
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
                <img src="/img/Archived-img/March-2024/photos/mar-gy-photo-1.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/March-2024/photos/mar-gy-photo-2.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/March-2024/photos/mar-gy-photo-3.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/March-2024/photos/mar-gy-photo-4.jpg" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/March-2024/photos/mar-gy-photo-5.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/March-2024/photos/mar-gy-photo-6.jpg" style="width: 375px; height: 375px;">
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
