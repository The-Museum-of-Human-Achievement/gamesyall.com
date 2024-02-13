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

$headTitle = "November 2023 Meetup - Games Y'all";
$headDescription = "Join us for a showcase of indie video games led by women & non-binary developers, presented across two weekends at The Museum of Human Achievement.";
$headImage = "/img/event-img/GY-Banner-Nov-23.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-november-2023">November 11-12 + 18-19, 2023</a>
                </p>
            </div>
        </div>
  

       <!--Content and infomration-->
        <div class="row">
                 
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Nov-23.png" alt="The Museum of Human Achievement present our Games Y'all Showcase: Women & Non-Binary led Indie Games'">
            </div>
            
             <div class="col-8">
                    <h1>Games Y'all Showcase:</h1> <h4>Women & Non-Binary led Indie Games</h4>
                    <p>🗓️ Saturday November 11th - 12-4pm
                    <br>
                    🗓️ Sunday November 12th - 12-4pm
                     <br> 
                    🗓️Saturday November 18th - 12-4pm
                    <br>
                    🗓️ Sunday November 19th - 12-4pm</p>
				<p>The Museum of Human Achievement, <a href="https://goo.gl/maps/B9JgLYYeKq9nKLue7">3600 Lyons Road, Austin, TX 78702</a> </p>
	
				<p>Free admission, donations appreciated! Sign up for our newsletter for more info!
            </div>

            
             <div class="col-8">
                    <h5>Women & Non-Binary led Indie Games Showcase</h5>
		<p>Join us for a showcase of indie video games led by women & non-binary developers, presented across two weekends at The Museum of Human Achievement. We welcome Games Y’all regulars, East Austin Studio Tour visitors, and game-curious folks to explore a curated selection of indie video games. Offerings range from tiny budget solo developer games to mid-sized indie studio productions. Drop by to play (or watch) something new that you might not find anywhere else!
</p>

<!--If this is a upcoming event, uncomment the button element below-->
            		<br>
                    <button class="button" id="Email List"><a href="https://themuseumofhumanachievement.com/forms/email/">Join Email List</a></button>
                
               <br><br>
        		
	 <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by the Museum of Human Achievement for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>
<br>
      <h5>The Museum of Human Achievement</h5>
<p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
<br>
    <!--Venue details can be deleted when event has passed-->
<h5>Venue + Parking</h5>

<p>There is a large parking lot available in addition to bike racks. MoHA has public bathrooms, a bar for those 21+ (IDs checked at door), and is ADA accesible. Please contact games@themusuemofhumanachievement.com for more information on the accessibility of the space and/or for special accommodations.<p/>
<br>
<h5>Health Details</h5>

<p>This event will be indoors and outdoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!
<p/>
          </div>
        </div>
       <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
 <!--How to Say Goodbye card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/how-to-say-goodbye.jpeg" alt="- A promotional image for How to Say Goodbye">
                </div>  

              <!--Game Text -->
              <div>
                <h4>How to Say Goodbye</h4>
                <p>How to Say Goodbye is a beautiful narrative puzzle game inspired by picture books. Reorganize the environment and solve puzzles to help a group of ghosts on their quest to finally move on.
<br><br>
Florian and Baptiste started working together when they were studying graphic design and illustration. They both had a deep interest in storytelling and interactivity. After having spent time at various companies and other game related freelance missions, they join up to get back to what got them talking in the first place: making beautiful, emotional and entertaining games for everyone.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1709700/How_to_Say_Goodbye/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Florian Veltman & Baptiste Portefaix</h6>

                <div class="dev-social">	
                  <h6>@baptisteworks</h6>
                  <a href="https://twitter.com/baptisteworks">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                     <h6>@FlorianVltmn</h6>
                  <a href="https://twitter.com/FlorianVltmn">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>          
          
          
 <!--Perfect Tides card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/perfect-tides.jpeg" alt="- A promotional image for Perfect Tides"> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Perfect Tides</h4>
                <p>A point and click adventure game about the agony and anticipation of being a teen. Set in the year 2000, you play as Mara, an internet-obsessed young writer who lives on a so-called island paradise. Following 4 seasons of the year, you encounter through Mara the beauty and silence of the island, the turmoil of family life and mainland public school, and an ever-evolving quest for love, friendship and experience.
				<br><br>
				Meredith Gran (she/her) is a cartoonist, writer and game developer living in Philadelphia, PA. In 2022 she released her first game, Perfect Tides. She is currently working on the sequel, Perfect Tides: Station to Station. Previous work includes the long-running webcomic series, Octopus Pie.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://perfect-tides.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Three Bees<h6> 
                <div class="dev-social">
                  <h6>@perfect_tides</h6>
                  <a href="https://twitter.com/perfect_tides">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
        
          
<!--Coffee Talk Episode 2: Hibiscus & Butterfly card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/coffee-talk-2.jpeg" alt="- A promotional image for Coffee Talk Episode 2: Hibiscus & Butterfly">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Coffee Talk Episode 2: Hibiscus & Butterfly</h4>
                <p>Coffee Talk is a coffee brewing and heart-to-heart talking simulator about listening to fantasy-inspired modern peoples’ problems and helping them by serving up a warm drink or two.
                <br><br>
            The team behind "Coffee Talk Episode 2: Hibiscus & Butterfly" continued the legacy of the acclaimed 'Coffee Talk'. Andrew Jeremy resumed his roles as audio director/composer and project manager, with Dio Mahesa once again taking charge as lead artist and art director. Fredrik Lauwrensius led the programming efforts, supported by Jovan Anggara. Junkipatchi (Junki) stepped in as the narrative designer and lead writer, with assistance from co-writer Anna Winterstein, embracing the vision of the late Mohammed Fahmi to shape the game's narrative — ensuring fidelity to the original while infusing it with fresh experiences and perspectives.
 <br><br>
Coffee Talk Episode 2  marks Junkipatchi’s entrance into the game development world. Having worked in story production, comics, intellectual property, and the entertainment sector since the early 2010s, Junkipatchi is driven by a profound belief in the power of storytelling. This conviction underpins a commitment to articulating personal ideas and forging connections across diverse cultures and languages, utilizing any medium available.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1663220/Coffee_Talk_Episode_2_Hibiscus__Butterfly/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Toge Productions</h6>

                <div class="dev-social">	
                  <h6>@togeproductions</h6>
                  <a href="https://twitter.com/togeproductions">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
           
                </div>
              </div>
            </div>
          </div>  
          
  <!--Goodbye Volcano High card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/goodbye-volcano-high.jpeg" alt="A promotional image for Goodbye Volcano High">
              </div>  

 <!--Game Text -->
              <div>
                <h4>Goodbye Volcano High</h4>
                <p>Goodbye Volcano High is a cinematic LGBTQIA+ narrative adventure about love, change, and the end of the world. Guide Fang through their final year of high school as they try to make things right before time is up.	
                <br><br>
				KO_OP is an artist-run and owned studio.
				<br><br>
				Hope Erin Phillips (they/them) is a programmer, multimedia artist, and professional hobby collector. Before working on GVH at KO_OP as lead programmer, they completed a BFA in Intermedia/Cyberarts, taught themselves game development, and was a Critical Hit 2015 alumni. Their work has been shown at IndieCade as well as art galleries throughout North America.
				<br><br>
				Saleem Dabbous (they/he) is the studio director and co-founder of KO_OP, a worker-owned studio, creating original award-winning games and high-profile collaborations on major IPs.
				<br><br>
				Kyle McKernan (he/him) is a game director and designer at KO_OP. Kyle has worked in games since 2014 as a solo developer, an animator, a game designer, and a writer. He has also worked professionally as a graphic designer for numerous clients in and outside of the games industry. Games he has worked on include Beasts of Balance and Winding Worlds. Most recently, Kyle co-directed and led design on Goodbye Volcano High.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://goodbyevolcanohigh.com/">Play It Here</a>
                </button>

              </div>

<!--Dev Text-->
              <div>
                <h6>Developer: KO_OP</h6>


                <div class="dev-social">	
                  <h6>@ko_opmode</h6>
                  <a href="https://www.instagram.com/ko_opmode/">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Re:Fresh card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/re-fresh.jpeg" alt="A  promotional image for Re:Fresh"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Re:Fresh</h4>
<p>Lose yourself in the relaxing solarpunk breeze of Re:Fresh, a 3D exploration-platformer game where you play as a robot collecting materials to help repair your town after a torrential storm. Explore at your own pace in the open-ended environment and collect solar cells to upgrade your movement options, forging your own path to get the town up and running again.
<br><br>
Re:Fresh was created by Merge Conflict Studio: an Indie Game Studio focused on centering marginalized perspectives and environmental awareness, based out of Austin, Texas. Our goal at Merge Conflict is to create games that not only are fun for everyone but make the world a better place.
<br><br>
The Team:
<br>
Melody Geiger (she/her) CEO and Lead Producer
<br>
Will Sords (he/him) COO and Audio Director
<br>
Joseph Horak (he/they) CCO and Narrative Director
<br>
Connor Blankenship (he/they) CTO and Lead Gameplay Designer
<br>
Karina Teruya (she/they) Art Director
<br>
Ethan Godwin (he/him) Design Director</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2297650/ReFresh/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Merge Conflict<h6> 
                <div class="dev-social">
                  <h6>@mergeconflict</h6>
                  <a href="https://twitter.com/mergeconflict">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--Frog Detective: The Entire Mystery card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/frog-detective-3.jpeg" alt="A promotional image for Frog Detective: The Entire Mystery">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Frog Detective: The Entire Mystery</h4>
                <p>You're a detective, and a frog, and it's time to solve 3 thrilling mysteries!

				Play as the #2 best investigator as you find clues, question silly suspects, and look at things through your magnifying glass. Some nay-sayers have called the magnifying glass "useless", but what do they know?
                <br><br>
             Worm Club is a 2 person game dev team headquartered in Australia with Creative Director Grace Buxner & Design Director Thomas Bowker.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://frogdetective.net/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Worm Club
                </h6>


                <div class="dev-social">	
                  <h6>@frogdetective</h6>
                  <a href="https://twitter.com/frogdetective">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>   
                </div>
              </div>
            </div>
          </div>   
          
<!--Loddlenaut card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/loddlenaut.png" alt="A promotional image for Loddlenaut">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Loddlenaut</h4>
                <p>Loddlenaut is a cozy underwater survival game that takes place on an ocean planet. Play as an interstellar custodian who is sent to clean up the pollution left behind by a mysterious corporation and befriend some cute creatures along the way.
				<br><br>
				As you clean up the planet, you’ll run into axolotl-like aliens known as “loddles.” Rescue them from polluted waters and feed them fruits you find on the job while you make their planet habitable again.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1644940/Loddlenaut/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Moon Lagoon</h6>

                <div class="dev-social">	
                  <h6>@loddlenaut</h6>
                  <a href="https://twitter.com/loddlenaut">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--Bugaboo Pocket card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/bugaboo-pocket.jpeg" alt="A promotional image for Bugaboo Pocket">
              </div>  

 <!--Game Text -->
              <div>
                <h4>Bugaboo Pocket</h4>
                <p>A virtual pet game starring bugs from land, air and sea! Play as a research scientist living in a cabin with just your bugs and a penpal for company. Spoil them with pets, minigames, food and furniture. Raise and release bugs to help Beetleback Ridge recover from a devastating fire.
				<br><br>
				Elytra Games was founded by Beth Rosaschi and Sarah Yu who are partners both in the studio and in life. Having met a week before COVID lockdown, they bonded over a deep love for video games. They started designing Animal Crossing worlds (including a Taco Bell) so that they could go on virtual dates together and a studio was born. As a result, Elytra Games is focused on creating beautiful worlds that bring people joy and comfort.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://bugaboopocket.com/">Play It Here</a>
                </button>

              </div>

<!--Dev Text-->
              <div>
                <h6>Developer: Elytra Games</h6>


                <div class="dev-social">	
                  <h6>@BugabooPocket</h6>
                  <a href="https://twitter.com/BugabooPocket">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
          <!--Instanosis card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2023/games/salcido.png" alt="A promotional image for Instanosis">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Instanosis</h4>
                <p>Inspired by online quizzes, probing conversations with coworkers, and a fascination with the far corners of the internet, Oddalys Salcido's Instanosis serves as a diagnostic tool to help you re-discover the playfulness of the digital-age through the art of oversharing. Follow forking paths of absurdist questions, leading you through portals to shared text documents and curious websites curated by Salcido. Seek digital absolution for your sins, gaze out of someone else’s window, contemplate the boundaries of the physical body online, or explore whatever else your Instanosis prescribes.
                <br> <br>
            Oddalys Salcido is a 1st generation latine queer movement artist and filmmaker from Austin, Texas. As a child they felt cosmically connected to Selena Quintanilla and has been searching for that feeling in everything they’ve done since. Traditionally trained as a choreographer, contemporary dancer and reality TV consumer, Oddalys is a movement inspired filmmaker. With influences of absurdity and tenderness they bring an observant collage of their identities, mental illness and humorous existentialism embedded in both their films, choreography, and instagram captions. They morph into many identities such as a professional dancer for ARCOS, co-founder/director of Preheat Film Festival, web designer for artists, filmmaker, digital composer, tote bag designer, and cyborg. They are passionate about experimenting with contemporary movement and technology as a tool to blend both existing and non existing borders.
            </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://homepageguest.wixsite.com/oddalys-salcido">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Oddalys Salcido</h6>

                <div class="dev-social">	
                  <h6>@oddalys_______________</h6>
                  <a href="https://www.instagram.com/oddalys_______________/">
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
                    <img src="/img/Archived-img/November-2023/photos/nov-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
