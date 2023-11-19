<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
//
// Uses the following variables if set before "require()":
//      $headTitle = "Cool Page Title - Games Y'all"; 
//      $headDescription = "A longer description of the page in question, with a bit more information than the title.";
//      $headImage = "/img/event-img/some-cool-event-image.jpg";

$headTitle = "GOTM Meetup - Games Y'all";
$headDescription = "It's like a book club, but for games! Meet with fellow members of the Games Y'all community to discuss the Game of the Month.";
$headImage = "/img/event-img/GOTM-Banner-Nov-23.png";
require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>GOTM Meetup</h1>
                
                    <h4>November 15th, 2023 - 7-9pm</h4>
				<p>Museum of Human Achievement <a href="https://goo.gl/maps/ahZcZEw7Dp1QDWcHA">3600 Lyons Rd, Austin, TX 78702</a> 
				<br><br>🎟 Free admission, donations welcome! RSVPs required, space is limited.</p>
	
			
				<!--RSVP Button -->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16914609/gotm_november_meetup">RSVP</a></button>
            
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="../img/event-img/GOTM-Banner-Nov-23.png" alt="The Museum of Human Achievement presents, Games Y'all Game of the Month Meetup">
            </div>
            

		 <div class="col-10">

<p>This months game: Goodbye Volcano High
<br><br>
Goodbye Volcano High is a cinematic narrative adventure about love, change, and the end of the world. Guide Fang through their final year of high school as they try to make things right before time is up.
<br><br>
It’s like a book club, but for games! Meet once a month with fellow members of the Games Y'all community to discuss the Game of the Month. Share your thoughts about the game design, narrative, art, and your experience playing the game! Meetings will be held 7-9pm on the last Wednesday of every month at the Museum of Human Achievement in the IRL Computer Lab. Snacks and drinks are permitted, but not provided.
<p/>
<br>
    <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by the Museum of Human Achievement for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>
<br>
<h5>The Museum of Human Achievement</h5>
<p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.
<p/>
<br>
    <!--Venue details can be deleted when event has passed-->
<h5>Venue + Health Details</h5>

<p>This event will be indoors in the climate controlled IRL Computer Lab at the Museum of Human Achievement. MoHA is a large warehouse space located on the east side of Austin, Texas. It is home to artists studios, an art gallery, a venue space, a drive-in theater, & more! The space is ADA accessible, please reach out to games@themuseumofhumanachievement.com if you need any additional information or accommodations.
<br><br>
We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!
<p/>
          </div>
        </div>
        
  <!--GOTM-->
        <div>
          <h2 style="text-align: center;">Game of the Month</h2>
          
<!--Goodbye Volcano High card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/November-2023/games/goodbye-volcano-high.jpeg" alt="A promotional image for the November Games Y'all Game of the Month"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Goodbye Volcano High - November</h4>
<p>Goodbye Volcano High is a cinematic narrative adventure about love, change, and the end of the world. Guide Fang through their final year of high school as they try to make things right before time is up.	
<br><br>
KO_OP is an artist run and owned studio. Founded in 2012, we've been experimenting with games and interactive art ever since. The studio is known for acclaimed games like GNOG, Lara Croft Go: Mirror of Spirits and Winding Worlds.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1382070/Viewfinder/">Play it Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: KO-OP</h6> 
                     <div class="dev-social">
                  <h6>@ko_opmode</h6>
                  <a href="https://www.instagram.com/ko_opmode/">
                    <img src="../img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--El Paso, Elsewhere card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="../img/Archived-img/October-2023/games/el-paso-sq.png" alt="A  promotional image for El Paso, Elsewhere"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>El Paso, Elsewhere - October</h4>
                <p>STAKES. GUNS. SLOW-MO. Fight werewolves and vampires in a reality-shifting motel. Dive through barricades to escape the grasp of evil puppets. Destroy the villain you loved. A new, third-person love letter to classic shooters. Neo-noir never looked so good.
<br><br>
Strange Scaffold is the development label of Xalavier Nelson Jr., who you might know from his work as a leading developer on Stranger Things VR, An Airport for Aliens Currently Run by Dogs, Hypnospace Outlaw, SkateBIRD, Can Androids Pray, or dozens of other critically-acclaimed projects.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1546310/El_Paso_Elsewhere/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Strange Scaffold</h6>
                <div class="dev-social">
                  <h6>@StrangeScaffold</h6>
                  <a href="https://twitter.com/StrangeScaffold">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
<!--Viewfinder card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="../img/Archived-img/September-2023/games/viewfinder.png" alt="A promotional image for the September Game of the Month Meetup showing a digitally rendered living room"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Viewfinder - September</h4>
<p>Challenge perception, redefine reality, and reshape the world around you with an instant camera. Viewfinder is a new single player game offering gamers hours of interesting and fun experiences while uncovering the mysteries left behind.
<br><br>
Viewfinder was developed by Sad Owl Studios in Scotland.</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/1382070/Viewfinder/">Play it Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Sad Owl Studios
                Publisher: Thunderful Publishing</h6> 
                     <div class="dev-social">
                  <h6>@sadowlstudios</h6>
                  <a href="https://twitter.com/sadowlstudios">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@Thunderfulgames</h6>
                  <a href="https://twitter.com/Thunderfulgames">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  

 <!--Venba card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="../img/Archived-img/August-2023/games/venba.png" alt="A  promotional image for Venba showing an Indian Mother, Son, and Father cooking together"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Venba - August</h4>
                <p>Venba is a narrative cooking game, where you play as an Indian immigrant mom, who immigrates to Canada with her family in the 1980s. Players will cook various dishes and restore lost recipes, hold branching conversations and explore in this story about family, love, loss and more.
<br><br>
Visai Games is a small studio based in Toronto that's focused on telling intimate stories through interesting mechanics.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://venbagame.com/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Visai Games</h6>
                <div class="dev-social">
                  <h6>@venbaGame</h6>
                  <a href="https://twitter.com/venbaGame/">
                    <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
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
                    <img src="../img/Archived-img/August-2023/photos/GY-august-1.png" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/August-2023/photos/GY-august-2.png" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/August-2023/photos/GY-august-3.png" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/August-2023/photos/GY-august-4.png" style="width: 375px; height: 375px;">
                    <img src="../img/Archived-img/August-2023/photos/GY-august-5.png" style="width: 375px; height: 375px;"> 
                    <img src="../img/Archived-img/August-2023/photos/GY-august-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>-->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
