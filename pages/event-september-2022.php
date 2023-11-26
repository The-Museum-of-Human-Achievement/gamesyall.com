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

$headTitle = "September 2022 Meetup - Games Y'all";
$headDescription = "We went Back to School at the Baker Center (formerly Baker School) courtesy of Mighty Coconut!";
$headImage = "/img/event-img/GY-Banner-Sep.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-september-2022">September 22, 2022</a>
                </p>
            </div>
        </div>

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>September 22, 2022</h1>
                <p>We went Back to School at the Baker Center (formerly Baker School) courtesy of <a href="https://www.mightycoconut.com/">Mighty Coconut</a>! 
             We played games, hung out, and made new friends in the cafetorium. Thanks for coming devs! We DID have beer and we DIDN’T make you slow dance. </p>
                  
                  
                  <!--Venue details can be deleted when event has passed-->    
           

                    <!--If this is a upcoming event, uncomment the button element below-->
                <!--
                    <button class="button" id="rsvp-button">RSVP</button> 
                -->
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Sep.png" alt="Games Y'all presents, September Meetup - Back to School Games">
            </div>
        </div>
        
        <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
 <!--The Heroes Around Me card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/the-heroes-around-me.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>The Heroes Around Me</h4>
                <p>
                  The Heroes Around Me tells a story of a family of 3: the hard-working and quiet father – Nan, his daughter Lili, and their pet dog Sesame. Players will experience the harshness and warmth in the simpler time of the 1990s, where lots of stories are untold.
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1768470/The_Heroes_Around_Me/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: OK JOY<br>


                <div class="dev-social">
                  <h6>@OKJOY_Studio</h6>
                  <a href="https://twitter.com/okjoy_studio?lang=en">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
<!--Beacon Pines card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/beacon-pines.jpeg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Beacon Pines</h4>
                <p>
                  Beacon Pines is a cute and creepy adventure game. Sneak out late, make new friends, uncover hidden truths, and collect words that will change the course of fate! 
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1269640/Beacon_Pines/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Hiding Spot<br>
                Publisher: Fellow Traveller</h6>


                <div class="dev-social">	
                  <h6>@hidingspotgames</h6>
                  <a href="https://twitter.com/hidingspotgames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@FellowTravellr</h6>
                  <a href="https://twitter.com/FellowTravellr">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
<!--Poem Simulator card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/poem-simulator.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Poem Simulator</h4>
                <p>
                  Poem Simulator is an FPS that simulates the abstract process of poem-crafting. The user is invited to explore the ontological debris of a dreamy, semantically-ordered universe, suspending objects from three floating cubes, each representing a resultant stanza. Through arbitrary selection, a new poem-object is born: experiences reshuffle, ideas forcibly enmesh, sub-syntactic counter-currents reverse their course. The user will find this process pleasurable and noteworthy. 
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://augustsmith.net/1386-2/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: August Smith</h6>


                <div class="dev-social">	
                  <h6>@augustjsmith</h6>
                  <a href="https://twitter.com/augustjsmith">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
<!--Scrolling Exorcise card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/scrolling-exorcise.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Scrolling Exorcise</h4>
                <p>
                  The Scrolling Exorcise (2022) is an art piece created during the Museum of Human Achievement's residency Welcome to my Homepage.
 
The piece is based on the simple idea of utilizing the repetitive motion of scrolling as a catalyst for thought. I wanted to create an experience that could only be had within the context of the web. Instead of just housing animation or photos on a webpage, the piece is about our body's relationship to the shape of this tool.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.sara-roma.com/scrolling-exorcise">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Sara Roma</h6>

                <div class="dev-social">	
                  <h6>@chromaglyphs</h6>
                  <a href="https://www.instagram.com/chromaglyphs/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--s/f/wonderland card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/s-f-wonderland.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>s/f/wønderland</h4>
                <p>
                 s/f/wønderland is: a research project; a web-based painting tool; a mixed-media installation piece; a visual library; a participatory creative experiment; an online labyrinth; ... which explores fandom cultures as a transgressive and creative space for queer liberation, particularly in the context of state-enforced media censorship in Malaysia and Singapore.
</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://huachai-portfolio.carrd.co/">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Hua Chai</h6>

                <div class="dev-social">	
                  <h6>@huazzers</h6>
                  <a href="https://twitter.com/huazzers">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>    
          
 <!--CECE sings card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/cece-sings.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>CECE Sings</h4>
                <p>
                 Inspired by Flash games, CECE Sings is an interactive narrative that takes note from glitch feminism. Based on a memory, the story follows a fifth grade Celine on an emotional rollercoaster to potential superstardom. In conversation with the idealizations of the popstar and the cyborg, CECE Sings confronts your Y2K fantasies.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://celinelassus.itch.io/cece-sings">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Celine Lassus</h6>

                <div class="dev-social">	
                  <h6>@bimbointech</h6>
                  <a href="https://www.instagram.com/bimbointech/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
          
<!--Walkabout Mini Golf card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/walkabout-mini-golf.jpeg">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Walkabout Mini Golf: 20,000 Leagues Under the Sea</h4>
                <p>
                 Escape into a fun and beautiful world filled with the best mini golf courses you’ve ever seen! Play by yourself, meet someone new, or challenge your friends in a private game with up to 8 people. Extremely realistic physics create the perfect experience for hardcore golfers and casual players alike. Sink a perfect hole-in-one, search for lost balls, unlock hidden clubs, or just relax and take in the views from one of our 16 included courses. The golf is miniature, but the fun is huge! 
                 </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1408230/Walkabout_Mini_Golf_VR/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Mighty Coconut</h6>

                <div class="dev-social">	
                  <h6>@Mighty_Coconut</h6>
                  <a href="https://twitter.com/Mighty_Coconut">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>                            

<!--Cosmonious High card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/cosmonious-high.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Cosmonious High</h4>
                <p>
                 Owlchemy Labs' newest title, Cosmonious High, is an alien high school that's definitely completely free of malfunctions! After crash-landing your way into a memorable first day, you'll unlock powers, explore the halls, and discover the source of malfunctions to save the school from cosmic chaos.
                 </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1491490/Cosmonious_High/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Owlchemy Labs</h6>

                <div class="dev-social">	
                  <h6>@Owlchemylabs</h6>
                  <a href="https://twitter.com/Owlchemylabs">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 

<!--Cult of the Lamb card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/cult-of-lamb.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Cult of the Lamb</h4>
                <p>
                 Start your own cult in a land of false prophets, venturing out into diverse and mysterious regions to build a loyal community of woodland Followers and spread your Word to become the one true cult.
                 </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1313140/Cult_of_the_Lamb/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Massive Monster<br>
                Publisher: Devolver Digital</h6>

                <div class="dev-social">	
                  <h6>@massivemonster</h6>
                  <a href="https://twitter.com/massivemonster">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                 <h6>@devolverdigital</h6>
                  <a href="https://twitter.com/devolverdigital">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--EGaDS! card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/September-2022/games/egads.png">
              </div>  

              <!--Game Text -->
              <div>
                <h4>EGaDS! Mega Micro Jam</h4>
                <p>
                 The Electronic Game Developers Society (EGaDS!) is a group of interdisciplinary game development lovers at UT Austin! We are a community of UT students and faculty, industry professionals, and others who aim to promote learning and practicing game development through speaker nights, art and Unity workshops, Texas Game Jam (TXGJ), our annual game developers conference called GDC^2, and more!
                 <br><br>
We'll be tabling at this month's meetup, where we'll be showcasing our Mega Micro Jam game made by our members and advertising TXGJ (9/23-9/25)! Stop by to play our game and/or simply chat with us!
</p>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: EGaDS!</h6>

                <div class="dev-social">	
                  <h6>@EGaDSAustin</h6>
                  <a href="https://twitter.com/EGaDSAustin">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
   <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/September-2022/photos/sep-gy-photo-1.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2022/photos/sep-gy-photo-2.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2022/photos/sep-gy-photo-3.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2022/photos/sep-gy-photo-4.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/September-2022/photos/sep-gy-photo-5.jpg" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/September-2022/photos/sep-gy-photo-6.jpg" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <!--
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="[Event image here]" style="width: 375px; height: 375px;"> 

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
