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

$headTitle = "Come on Down!™ - A Game Show Game Jam - Games Y'all";
$headDescription = "It’s a game show. It’s a jam. It’s a game show jam! ";
$headImage = "/img/event-img/DA-Banner-Oct-gamejam.png"; // this is optional! only needed if the page has an image

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
                    <a href="/events">Events</a> 
                    >
                    <a href="/event-october">October 22 + 23, 2022</a>
                </p>
            </div>
        </div>
  

       <!--Content and infomration-->
        <div class="row">
                 
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/DA-Banner-Oct-gamejam.png" alt="Fantastic Arcade presents, Games Y'all 10/27'">
            </div>
            
             <div class="col-10">
                    <h1>Come on Down!™</h1>
                    <h2>a Game Show Game Jam</h2>
                    <h4>Sat 10/22 - Sun 10/23, 2022</h4>
               <!-- <h5>11:00am-9:00pm<br>
				The Museum of Human Achievement, <a href="https://goo.gl/maps/B9JgLYYeKq9nKLue7">3600 Lyons Road, Austin, TX 78702</a> </h5>-->
       

<p>It’s a game show. It’s a jam. It’s a game show jam! <br>

Come to the Museum of Human Achievement this weekend to collaborate on your very own GAME SHOW! No experience needed or minimum time requirement to participate, just come have fun.</p>
<br>

   <!--<h4>Sign up</h4>

<p>Fill out <a href="https://forms.gle/CTuNYkJeEw5hxcPj9">this form</a> and we’ll pair you with a team. You can sign up alone or with friends. If you’re really on the ball and already have a full team, you can register your team!</p>
<br>
 <button class="button" id="Registration"><a href="https://forms.gle/gPpzpkGoakecDtPp7">Game Jam Registration</a></button> -->
 <br><br>

<h4>Timeline</h4>

<h5>Kickoff - 11am on Saturday 10/22</h5>
<p>Hear the scoop, meet your teammates (or bring your own), get inspired with weird game show clips, sign up for bonus challenges, and enjoy some cold brew (thanks Texas Coffee Traders!) and a cereal buffet. Can’t make it Saturday but still want to join in? Tell us on the team finder!</p>

<h5>Open workspace - 11am-9pm Sat & Sun 10/22-10/23</h5>
<p>Jam with us! 2 days of access to collaborative workspace, mentors (for making things with computers and hands), tools, computers, a big pile of cardboard, and as many encouraging remarks as you need. This is an optional resource! If you’d rather work somewhere else, go for it. It’s also up to you and your team how much time you spend making your game show.</p>

<h5>Submission deadline - 9pm on Sunday 10/23</h5>
<p>Times’ up! Tell us what it’s called, who made it, and what you’re doing. We’ll give you a time slot at the showcase.</p>

<h5>Showcase - 8pm Thurs 10/27</h5>
<p>Hosted by the infamous Shannon Stott and Coby West during our <a href="https://gamesyall.com/html/event-october-2022">Halloween Games Y’all event</a>. Put on your game show in front of a live studio audience at the MoHA outdoor stage! Also broadcast live on Discord! Bring your friends and fam.</p>
<br>


<h4>Who is this for?</h4>

<p>Game devs and coders, artists and performers, musicians and sound effect artists, costume and prop designers. But really, anyone who wants to collaborate and have fun together. No experience necessary.</p>
<br>


<h4>A Game Show?</h4>

<p>Think quiz show, dating game, obstacle course, three door situation, gross slime challenges, total gameshow nonsense. Up to you! 
<br>Fully analog theatrical productions, multi-player video games, and everything in between are encouraged.
<br>Make something to be presented on stage with a live studio audience in mind.
<br>Play-through should be 5 minutes or less. Set up and clean up should be 5 minutes or less.</p>
<br>
<button class="button" id="Game Jam Rule Book"><a href="https://docs.google.com/document/d/1g_bqWbKZVNncOv6SuQ7lE3O4bhW74fX04oa685wEp1Y/edit?usp=sharing">Game Jam Rule Book</a></button> 
                <br><br>

<h4>Teams</h4>

<p>A successful team might have: programmer, designer, digital artist, narrative designer or writer, musician or sound effects person, props and set designer, costume designer, game show host, physical computing designer.
But don’t take our word for it! If you want a team of all puppeteers, cool. </p>
<br>


<h4>Venue Details</h4>

<p>We are a warehouse space next to the Canopy Arts Complex. If you see a pink and blue trailer, an old city bus, and some astroturf – you’re in the right place. 
<br>There is plenty of parking available and a bike rack.
<br>This event will be indoors in the MoHA gallery space and outdoors at the MoHA drive-in theater (AKA the parking lot). The outside temperatures are the inside temperatures, so dress accordingly.
<br>We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and wipes for controllers will be available. Masks are welcome!
<br>Our space is wheelchair accessible. If you need access to the lift, just ask!</p>


<br>
<h4>Questions?</h4>

<p>Contact us at games@themuseumofhumanachievement.com</p>
               
             <!--Venue details can be deleted when event has passed-->    
                  

                <!--If this is a upcoming event, uncomment the button element below-->
            
                   

        <!--Games at the event -->
          <!--[GAME] card
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game image]]">
              </div>  

              <!--Game Text 
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="[Hyperlink to game]">Play It Here</a>
                </button>

              </div>

              <!--Dev Text
              <div>
                <h6>[Dev name or team name]</h6>
                <p>
                  [Text about dev]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social media handle]</h6>
                  <a href="[hyperlink to social]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--[Game] Card
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game Image]">
              </div>  

              <!--Game Text
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="[Hyperlink to game page]">Play It Here</a>
                </button>
              </div>

              <!--Dev Text
              <div>
                <h6>By [Dev Name or team name]</h6>
                <p>
                  [Text on dev or team]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social]</h6>
                  <a href="[Hyperlink to dev's twitter]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--[GAME] card
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game image]]">
              </div>  

              <!--Game Text 
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="[Hyperlink to game]">Play It Here</a>
                </button>

              </div>

              <!--Dev Text
              <div>
                <h6>[Dev name or team name]</h6>
                <p>
                  [Text about dev]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social media handle]</h6>
                  <a href="[hyperlink to social]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--[Game] Card
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game Image]">
              </div>  

              <!--Game Text
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="[Hyperlink to game page]">Play It Here</a>
                </button>
              </div>

              <!--Dev Text
              <div>
                <h6>By [Dev Name or team name]</h6>
                <p>
                  [Text on dev or team]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social]</h6>
                  <a href="[Hyperlink to dev's twitter]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--[GAME] card
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game image]]">
              </div>  

              <!--Game Text
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="[Hyperlink to game]">Play It Here</a>
                </button>

              </div>

              <!--Dev Text
              <div>
                <h6>[Dev name or team name]</h6>
                <p>
                  [Text about dev]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social media handle]</h6>
                  <a href="[hyperlink to social]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--[Game] Card
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game Image]">
              </div>  

              <!--Game Text 
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="[Hyperlink to game page]">Play It Here</a>
                </button>
              </div>

              <!--Dev Text
              <div>
                <h6>By [Dev Name or team name]</h6>
                <p>
                  [Text on dev or team]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social]</h6>
                  <a href="[Hyperlink to dev's twitter]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
-->
        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
         <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/tzDyicgGjXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
         </div>
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
