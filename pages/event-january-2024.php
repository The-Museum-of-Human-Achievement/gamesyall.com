<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "January 2024 Meetup - Games Y'all";
$headDescription = "Fantastic Arcade presents, Games Y'all January Meetup";
$headImage = "/img/event-img/GY-Banner-Jan-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-january-2024">January 21, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>January Meetup</h1>
        
            <h4>January 21st, 2024 - 12-3pm</h4>
        
            <p>
                Austin Central Public Library, <a href="https://maps.app.goo.gl/BiMzyohMon7cpD2z5" target="_blank">710 W Cesar Chavez St, Austin, TX 78701</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/17063117/games_yall_january_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Jan-24.png" alt="Fantastic Arcade presents, Games Y'all January Meetup">
        </div>

        <!--If this is a upcoming event, uncomment the button element below-->
        <!-- <br>
        <button class="button" id="Email List"><a href="https://themuseumofhumanachievement.com/forms/email/">Join Email List</a></button> -->

        <div class="col-10">
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

  <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
 <!--HouseKeeping card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/housekeeping.png" alt="- A promotional image for House Keeping">
                </div>  

              <!--Game Text -->
              <div>
                <h4>HouseKeeping</h4>
                <p>HouseKeeping is an Isometric Couch Co-Op party game similar to Overcooked or Splatoon. Two teams of players must battle for control of the House. The Keepers (House Cleaners) must clean the house. While the Cats must destroy the house and of course cause chaos. Whoever has more control of the house at the end of the round wins. We hope to take this game further and hopefully publish it at some point!
                <br><br>
               HouseKeeping was developed by a small team of students at Austin Community College as our final project in college. We as a team enjoyed developing this game so much we recently submitted it to the Independent Games Festival. In hopes of being nominated for "Best Student Game". 
               </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://tom9671.itch.io/housekeeping">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Team HouseKeeping</h6>

                <div class="dev-social">	
                  <h6>@IfItWorksStudio</h6>
                  <a href="https://twitter.com/IfItWorksStudio">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
          
 <!--don't rock the boat card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/rock-boat.jpeg" alt="- A promotional image for don't rock the boat"> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>don't rock the boat</h4>
                <p>don't rock the boat - an interactive story by elliot degrassi. A women's crew team plagued with internal debate over who is allowed to row in their league finds themselves stalked by a river monster. Written for and awarded Best Story of Scream Dunk 2023. Cover art by Ravi Teixeira.
                <br><br>
                 TW: transphobia, off-screen sexual assault
                <br><br>
				Elliot Degrassi (they/them) is normally a sound designer and composer. </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://elliotdegrassi.itch.io/dont-rock-the-boat">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Elliot Degrassi<h6> 
                <div class="dev-social">
                  <h6>@highway2helliot</h6>
                  <a href="https://www.instagram.com/highway2helliot/">
                    <img src="/img/Social-buttons/instagram-alt-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>     

 <!--1 Friend Online card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/one-friend.png" alt="- A promotional image for 1 Friend Online">
                </div>  

              <!--Game Text -->
              <div>
                <h4>1 Friend Online</h4>
                <p>You take on the role of Scott, a college freshman playing through an online RPG with your best friend in the year 2003. However, as you and Robin talk over the action, it becomes clear that your friend is really struggling. The way you interact with him in-game throughout this adventure-- from stealing his loot, to trusting his input on which path to take, or even whether you fight monsters as a team-- will impact whether you 2 stay friends after this tumultuous time in his life.
             </p>
             <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://wolfpengames.itch.io/1fo">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Wolf-Pen Games</h6>

               <!-- <div class="dev-social">	
                  <h6>@?</h6>
                  <a href="https://twitter.com/?">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a> -->
                </div>
              </div>
            </div>
          </div>          
          
          
 <!--Project: Petra card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/merge-conflct.png" alt="- A promotional image for Project: Petra"> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Project: Petra</h4>
                <p>Project: Petra” is a third-person action game that pairs kinetic combat and platforming with an impactful climate narrative. Throughout the game, you climb the ranks of The Bubble Brigade rebellion and fight against ZENITH, the evil corporation responsible for the destruction of your village. Wielding a giant bubble wand, you chain together bubble-based attacks to create a satisfying combo of pops!
				<br><br>
				Merge Conflict is an Indie Game Studio focused on centering marginalized perspectives and environmental awareness, based out of Austin, Texas.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.mergeconflictstudio.com/">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Merge Conflict Studios<h6> 
                <div class="dev-social">
                  <h6>@refreshthegame</h6>
                  <a href="https://twitter.com/refreshthegame">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Zombeats card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/zombeats.png" alt="- A promotional image for Zombeats">
                </div>  

              <!--Game Text -->
              <div>
                <h4>Zombeats</h4>
                <p>Zombeats is a high-octane rhythm game set in the apocalypse. Shoot zombies to the beat as they swarm from all directions, while managing limited ammo reserves. Unlock original songs as you progress through each character's story, import your own levels with the custom level editor, chase high scores on the global leaderboard, and customize your experience with difficulty modifiers!
                </p>
             <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://umbresp.itch.io/zombeats">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Brain Dead Studios</h6>

               <!-- <div class="dev-social">	
                  <h6>@?</h6>
                  <a href="https://twitter.com/?">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a> -->
                </div>
              </div>
            </div>
          </div>          
          
          
 <!--Ludus card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/ludus.png" alt="- A promotional image for Ludus"> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Ludus</h4>
                <p>For her Welcome to my Homepage residency Angélica focused on researching the artisanal production of toys in Mérida, a moderately sized city located in the center of the Venezuelan Andes. A new multidisciplinary project titled Ludus has emerged from this research. Its objective is to exalt this artisanal tradition through the long-term development of collaborations in film, music, and performance art.
                <br><br>
				Angélica Burgos Colls (b. 1994) is a Venezuelan visual artist and art director. She continues to develop her skills in several disciplines in order to nourish her fundamental passion of studying the language of created spaces.
				</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://www.welcometomyhomepage.net/">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Angelica Burgos Colls<h6> 
                <div class="dev-social">
                  <h6>@angelicaburgosc</h6>
                  <a href="https://www.instagram.com/angelicaburgosc/">
                    <img src="/img/Social-buttons/instagram-alt-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
<!--Trend Watch 2024 card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/trend-watch-2024.jpg" alt="- A promotional image for Trend Watch 2024"> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Trend Watch 2024</h4>
                <p>"Make your own Trend Watch 2024 workbook as you explore trend predictions, dig into your memories and your purse to find lifestyle inspiration, and upload your assignments to be graded by Julia Kunze herself (don’t worry, I hear she’s an easy grader). Julia’s mixed media aesthetic and background as an educator make for an incredibly playful, exploratory, and creative experience.
				<br><br>
				MTVs catfish, superhero costumes, fantasy romance novels, country music and anything low-rent help Julia Kunze make sculptures and drawings. She has had many fashion shows and knows a lot about trends. Her favorite line is the one between funny and serious and that is what she hopes to achieve in her work. "
				<br><br>
				Julia is an artist and collaborator. She loves horses, writing, making clothing and making friends. She has a clothing brand with her best friend called horse misterys and she just bought a Prius.
				</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://www.welcometomyhomepage.net/">Explore</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Artist: Julia Kunze<h6> 
                <div class="dev-social">
                  <h6>@horsemisterys</h6>
                  <a href="https://www.instagram.com/horsemisterys/">
                    <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
<!--Slay the Princess card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/January-2024/games/slay-the-princess.jpeg" alt="- A promotional image for Slay the Princess">
                </div>  

              <!--Game Text -->
              <div>
                <h4>Slay the Princess</h4>
<p>"You're on a path in the woods. And at the end of that path is a cabin. And in the basement of that cabin is a Princess (Nichole Goodnight).
<br><br>
You're here to slay her. If you don't, it will mean the end of the world. 

At least, that's what The Narrator (Jonathan Sims) tells you. But can you trust him? Can you trust her? Sure, you can do as you're told, killing the entity in the basement, whether she's a Princess or... something else. Or you can try to find some other way out of the eternity of choices and twisting paths youand the ""Princess"" have found yourselves in.

After all... is the world that tasked you to save it really worth saving?"
<br><br>
"Black Tabby Games is a two person studio that consists of Abby Howard (she/her) and Tony Howard-Arias (he/him). They share a last night because they're married. You might be familiar with Abby's work from her decade-long career as a graphic novelist, where she wrote and illustrated such works as The Crossroads at Midnight, The Last Halloween, The Earth Before Us, and Junior Scientist Power Hour. You're probably not familiar with Tony's work outside of games, though he did a stint doing analytics for The Boston Globe.
<br><br>
Tony and Abby live in Toronto with their cat (Spoons), their ball python (Wednesday) and their Axolotl (Nubs)."
</p>
             <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1989270/Slay_the_Princess/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Black Tabby Games</h6>

               <div class="dev-social">	
                  <h6>@blacktabbygames</h6>
                  <a href="https://twitter.com/blacktabbygames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          
          
          
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past
    <div class="row">
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
