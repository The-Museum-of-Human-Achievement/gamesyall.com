<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "June 2024 Meetup - Games Y'all";
$headDescription = "Games Y'all June Meetup";
$headImage = "/img/event-img/GY-Banner-June-24.png"; // this is optional! only needed if the page has an image

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
            <h1>June Meetup</h1>
        
            <h4>June 20th, 2024 - 7-10pm</h4>
        
            <p>
                Last Stand Brewing <a href="https://maps.app.goo.gl/eUtjWRte5caGLkun9" target="_blank">Building 6, 7601 S Congress Ave, Austin, TX 78745</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/20202067/games_yall_june_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-June-24.png" alt="The Museum of Human Achievement presents, Games Y'all June Meetup">
        </div>

        <div class="col-10">
           <p>We’re returning to Last Stand Brewing for our 2nd Tabletop Edition of Games Y’all. We’ll have AC (YAY!), Tabletop RPGS, new Welcome to My Homepage Residents, and more!
			<br><br>
		GOOD NEWS! Clear The Air ATX will be providing an air purifier for our meetup to help provide a safer space for our community. Clear The Air ATX is a volunteer organization that provides free air purifiers for Austin events so that organizers can provide a safer environment for the artists, audiences, and staff at the venues.
		<br><br>
		Last Stand Brewing is located in The Collective on South Congress Avenue, Last Stand Brewing boasts a full bar and kitchen. They offer house made soda, craft beer, cocktails, a curated wine list as well as a kitchen with a strong focus on farm to fork food.
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
          
<!--1-1(bit) card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/1-1-playdate.jpg" alt="A promotional image for 1-1(bit)"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>1-1(bit)</h4>
                <p>Dying is Feedback. Death is information. 1-1(bit) is a puzzle platformer made in Pulp for the Playdate. The platforms are invisible and the player builds a mental map of the level layout through traversal and observation... but is there more to the game than a grid of dots? You must be dreaming.
				<br>
					Players Can reveal the level using the B menu. Players also tend Not to do that. 
				<br><br>
				Inspiration This game was inspired by a similar project shown at Fantastic Arcade. It was a beautiful wooden arcade wall mount that consisted of a joystick and a single, vertical strip of red LEDs. As you navigated the level you 'viewed' it 1-pixel slice at a time by observing your dot's position.
				<br><br>
				Ledbetter Games has been making and showing Playdate games in Austin, Tx for the last couple years. They created the ART series, CHEK for 2-4 players and are very much looking forward to seeing you play 1-1(bit) Off-Planet Dreams and perhaps creating a level or two of your own!
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://ledbetter-games.itch.io/1-1bit">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Ledbetter Games<h6> 
                <div class="dev-social">
                  <h6>@ledbetter-games</h6>
                  <a href="https://ledbetter-games.itch.io/">
                    <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Culture Cue Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/culture-cue.jpeg" alt="A promotional image for Culture Cue"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Culture Cue</h4>
                <p>Culture Cue is the board game that focuses on players' stories and experiences. In Culture Cue, players get to share their own personal experiences with each other while trying to get all their tokens to Generational Enlightenment.
               <br><br>
               Culture Cue was developed by Paul Quinones and Lisa Poon. Paul is a game industry professional that has worked on several mobile titles and smaller Tabletop RPGs like Modern Unicorns. Lisa is Hong Kong born and Jacksonville, Fl raised UX Researched always looking to create new opportunities to bring people together.
            </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://culturecue.games/">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Paul & Lisa<h6> 
                <div class="dev-social">
                  <h6>@culturecuegame</h6>
                  <a href="https://www.instagram.com/culturecuegame">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Comic Book Boom! card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/comic-book-boom.jpg" alt="A promotional image for Comic Book Boom!"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Comic Book Boom!</h4>
                <p>In Comic Book Boom!, you play as a comics publisher at the height of the industry’s wildest era: The bombastic 1990’s. To score big in this booming market, you’ll need to...
				<br><br>
					• Publish books with the hottest ’90s themes
					<br>
					• Hype up readers with outrageous stunts
					<br>
					• Dazzle collectors with enhanced cover gimmicks
				<br><br>
					Be careful: Push the fans too far, and this boom is going to bust. Through big bets and market manipulation, you and your rival publishers might print up a fortune – or get too greedy and lose it all!
				<br><br>
					Designed by Dan Nichols
					<br>
					Dan Nichols is a designer based out of Austin, TX, and runs an indie company, Gadabout Games, which published its first title in 2021. His work on Comic Book Boom! has been recognized as a finalist for the 2024 Cardboard Edison Award and for the 2024 Ion Award for Best Strategy Game Design.
					<br><br>
					Illustrated by Eric Koda
					<br>
					Eric Koda is an acclaimed comic book artist based out of Redlands, CA. You may recognize Eric’s work from Daredevil (2023), Amazing Spider-Man (2022), Marvel Voices (2022, 2023), and Generation X (2017).
					</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://gadabout.games/cbb">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Gadabout Games<h6> 
                <div class="dev-social">
                  <h6>@ComicBookBoomGame</h6>
                  <a href="https://www.instagram.com/ComicBookBoomGame">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Frankenfur! card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/frankenfur.png" alt="A promotional image for Frankenfur!"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Frankenfur!</h4>
                <p>Frankenfur! is a fast paced fur flying monster building card game where every player is a mad scientist competing to create the most powerful franken-monster! In the spirit of true scientific discovery, we encourage people to experiment in this game and have fun the way they want to!
                <br><br>
				Tropical Heat Studios is a game development studio, focusing on irreverent cartoon comedy.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.tropicalheatstudios.com/shop">Play it Here</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Tropical Heat Studios <h6> 
                <div class="dev-social">
                  <h6>@tropicalheatstudios</h6>
                  <a href="https://www.instagram.com/tropicalheatstudios">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--The DUNGENERATOR: DIE in a Dungeon Game-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/close-monsters.jpg" alt="A promotional image for The DUNGENERATOR: DIE in a Dungeon"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>The DUNGENERATOR: DIE in a Dungeon</h4>
                <p>A solo/cooperative, narrative dungeon-crawler that turns your dice into doomed heroes!
                <br><br>
				ROLLINKUNZ is an inky illustrator and bizarro game designer who's been publishing indie tabletop games and accessories since 2020. 
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.rollinkunz.com/p/the-dungenerator.html">Website</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: ROLLINKUNZ<h6> 
                <div class="dev-social">
                  <h6>@rollinkunz</h6>
                  <a href="https://www.instagram.com/rollinkunz">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>      

<!--ALTARSHOCK Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/altar-shock.png" alt="A promotional image for ALTARSHOCK"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>ALTARSHOCK</h4>
                <p>ALTARSHOCK is a quick-start, chaotic, and brutal skirmish game. Miniature-Agnostic, you can get started with an old action figure and a tissue box. Just enough rules and crunch to make it satisfying, ALTARSHOCK offers gameplay that is easy to learn but difficult to master, and with 5 different game modes, infinite replayability.
                <br><br>
				Led by Creative Director, John Baltisberger, Madness Heart Games seeks to bring interesting, unique, and most importantly, FUN games to the masses. Madness Heart Games publishes original games as well as third party adventures and supplements for exciting independent games such as Mörk Borg and Old School Essentials.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://madness-heart-games.itch.io/">Play it Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Madness Heart Games<h6> 
                <div class="dev-social">
                  <h6>@MHP_Games</h6>
                  <a href="https://x.com/MHP_Games">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Lisa Hut's Memory Palace card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/memory-palace.png" alt="A promotional image for Lisa Hut's Memory Palace"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Lisa Hut's Memory Palace</h4>
                <p>Lisa Hut’s Memory Palace is a digital scrapbook of weirdly specific pop culture moments. Inspired by the intensity of Y2K era fan sites and tween notebook collages, Lisa Hut created over a dozen web shrines to pop culture memories collected through an anonymous online survey. The pages are layered with cable TV screen grabs, glitter text, and archival GeoCities GIFs re-creating each moment, hyper-personalized with the context the memory-sharers included like where they were or who their celebrity crush was at the time. Visit Lisa Hut’s Memory Palace to dig into the media moments that just won’t leave people’s heads.
                <br><br>
                Lisa Hut is a hastily thrown together collective of two lil' freaks living in Austin, TX. They make digital art about hyper-specific pop culture moments in an unsuccessful-yet-cute attempt to connect with people around them.
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/lisa-hut">Explore</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Artist: Lisa Hut<h6> 
                <div class="dev-social">
                  <h6>@cindy.popp</h6>
                  <a href="https://www.instagram.com/cindy.popp">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                   <h6>@crombomb</h6>
                  <a href="https://www.instagram.com/crombomb">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--TITANOMACHY: Dreams of the Hue Game-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/tdoth.jpg" alt="A promotional image for TITANOMACHY: Dreams of the Hue"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>TITANOMACHY: Dreams of the Hue</h4>
                <p>A tabletop Roleplaying built on the Wild Words engine popularized by Kickstarter successs The Wildsea, TDotH narratively simulates bringing down the last trillionaires to their knees in a crumbling CyberBioPunk future all set in an overgrown futuristic Houston - The Hue.
				<br><br>
				Join us for quick city and character generation, and a quick overview of TDotH’s mechanical system and the adventure that await its protagonists - the Omens.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.tumblr.com/tdoth">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sillion L<h6> 
                <div class="dev-social">
                  <h6>@tdoth</h6>
                  <a href="https://www.tumblr.com/tdoth">
                    <img src="/img/Social-buttons/tumblr-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Power Creeps card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/June-2024/games/power-creeps.PNG" alt="A promotional image for Power Creeps"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Power Creeps</h4>
                <p>Power Creeps is a simple and chaotic TTRPG system that blends dice mechanics with party-game style rules. It is played with 2-6 players and 1 Creep Master (CM.) Players cast spells from an ever changing collection of words created by the group at the start of the game. The players work together as a party to pursue and acquire their one true Desire.
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://hunterjallen.itch.io/">More Info</a>
                </button>

              </div>

   <!--Dev Text-->
              <div>
                <h6>Developer: Hunter J Allen<h6> 
                <div class="dev-social">
                  <h6>@HunterJAllen</h6>
                  <a href="https://x.com/HunterJAllen">
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
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/June-2024/photos/june-gy-photo-6.png" style="width: 375px; height: 375px;">
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
