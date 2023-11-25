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

$headTitle = "April 2022 Meetup - Games Y'all";
$headImage = "/img/event-img/GY-Banner-April.png"; // this is optional! only needed if the page has an image

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
                <a href="/event-april-2022">April 1, 2022</a>
            </p>
        </div>
    </div>

    <!--Content and infomration-->
    <div class="row">
        <div class="col-4">
            <h1>April 1, 2022</h1>
            <p>Howdy, <br> <br>
                Let’s play some Games Y’all! <br> <br>

                Games Y’all is a casual meetup hosted by Fantastic Arcade for indie devs, digital artists, 
                and games fans. Come play games, hang out, meet friends,
                and learn how to share your work at future meetups. <br> <br> 
                
                We’ll have multiplayer games, solo games, 
                an experimental soda bar (with beer!), assorted candies, prizes and surprises. All guests will 
                be asked to share a vaccination card or negative COVID test (from the last 2 days) at the door. 
            </p>

            <!--If this is a upcoming event, uncomment the button element below-->
            <!--
                <button class="button" id="rsvp-button">RSVP</button> 
            -->
        </div>
        <div class="col-8">
            <!--Add your event image here-->
            <img src="../img/event-img/GY-Banner-April.png" alt="The Museum of Human Achievement presents the first ever Games Y'all!">
        </div>
    </div>

        <!--Pipsqueak card-->
    <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
        <div class="game-card-long">
            <div>
            <img src="../img/Archived-img/April-2022/games/pipsqueak-img.png">
            </div>  

            <!--Game Text -->
            <div>
            <h4>Pipsqueak</h4>
            <p>
                Pipsqueak has only one purpose in life: to eat all the eggs he can find. Help Pipsqueak traverse 
                through unseasoned terrain and vanquish any and all who get in his way. Pipsqueak was originally created 
                for Fantastic Arcade as a physical game cabinet. 

            </p>
            <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                <a href="https://fantasticarcade.com/games/2017/pipsqueak/">Learn More</a>
            </button>

            </div>

            <!--Dev Text-->
            <div>
            <h6> Jenny Jiao Hsia </h6>
            <p>
                Jenny Jiao Hsia started making games in 2013, and is currently finishing their last year of undergrad at the NYU Game Center.
                They mostly do art but likes to design and code on the side. If you have any questions or want to say hi, feel free to message 
                her on twitter.
            </p>

            <div class="dev-social">
                <h6>@q_dork</h6>
                <a href="https://twitter.com/q_dork">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            </div>
        </div>
        </div>
        
        <!--Risky Bison Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
        <div class="game-card-long">
            <div>
            <img src="../img/Archived-img/April-2022/games/risky-bison-img.png">
            </div>  

            <!--Game Text -->
            <div>
            <h4>risky Bison</h4>
            <p>
                Collect high premiums from the most at-risk & buy decorative cacti for your loved ones. 
                Risky Bison was originally created for Fantastic Arcade as a physical game cabinet. 
            </p>
            <button class="button"  style="margin: 10px;">
                <a href="https://captaingames.itch.io/risky-bison">Play It Here</a>
            </button>
            </div>

            <!--Dev Text-->
            <div>
            <h6>By Justin Smith</h6>
            <p>
                Justin Smith is an independent game developer living in Vancouver. He made a company called Captain Games 
                and is best know for an iPhone game called Enviro-bear 2010 as well as being the elf portrait in Baldur's Gate.
            </p>

            <div class="dev-social">
                <h6>@manbearcar</h6>
                <a href="https://twitter.com/manbearcar">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            </div>
        </div>
        </div>
        
        <!--MULTIBOWL card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
        <div class="game-card-long">
            <div>
            <img src="../img/Archived-img/April-2022/games/MULTIBOWL-img.jpg">
            </div>  

            <!--Game Text -->
            <div>
            <h4>MULTIBOWL</h4>
            <p>
                Multibowl is a two-player challenge of skill and knowledge, across exciting moments in over 300 historical
                games across dozens of hardware platforms. It’s the first videogame collage, maybe. And it’s built out of 
                a modified version of the incredible MAME emulator.
            </p>
            <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                <a href="http://www.foddy.net/2016/08/multibowl/">Learn More</a>
            </button>

            </div>

            <!--Dev Text-->
            <div>
            <h6>By Bennett Foddy & AP Thomson</h6>
            <p>
                Bennett Foddy is an independent game designer working in New York City, formerly game design faculty at the NYU Game Center. In the distant past, he played bass guitar for Cut Copy.
                AP Thomson is a graduate of MIT and NYU who designed Swap Sword, Beglitched and Stair: Slide the Blocks to Ascend. Thomson teaches at NYU Game Center.
            </p>

            <div class="dev-social">
                <h6>@bfod</h6>
                <a href="https://twitter.com/bfod">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            <div class="dev-social">
                <h6>@bad_tetris</h6>
                <a href="https://twitter.com/bad_tetris">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            </div>
        </div>
        </div>
        
        <!--Johann Sebastian Joust  Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
        <div class="game-card-long">
            <div>
            <img src="../img/Archived-img/April-2022/games/Johann-Sebastian-Joust-img.jfif">
            </div>  

            <!--Game Text -->
            <div>
            <h4>Johann Sebastian Joust</h4>
            <p>
                J.S.Joust is a no-graphics, digitally-enabled playground game designed for motion controllers.
                The goal is to be the last player remaining. When the music - J.S. Bach's Brandenburg Concertos - plays in slow-motion, the controllers are very sensitive to movement. When the music speeds up, the threshold becomes less strict, giving the players a small window to dash at their opponents. 

            </p>
            <button class="button"  style="margin: 10px;">
                <a href="http://www.jsjoust.com/">Learn More</a>
            </button>
            </div>

            <!--Dev Text-->
            <div>
            <h6> By Douglas Wilson | Die Gute Fabrik</h6>
            <p>
            </p>

            <div class="dev-social">
                <h6>@gutefabrik</h6>
                <a href="https://twitter.com/gutefabrik">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            </div>
        </div>
        </div>          

        <!--Nidhogg card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
        <div class="game-card-long">
            <div>
            <img src="../img/Archived-img/April-2022/games/Nidhogg-img.jpg">
            </div>  

            <!--Game Text -->
            <div>
            <h4>Nidhogg</h4>
            <p>
                Nidhogg is the epic award-winning fencing tug-of-war, full of graceful acrobatics and clumsy stabs.
                IRL yelling and excitement may occur, in this ultimate two-player showdown of fast-paced fencing and melee attacks.
            </p>
            <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                <a href="https://store.steampowered.com/app/94400/Nidhogg/">Play It Here</a>
            </button>

            </div>

            <!--Dev Text-->
            <div>
            <h6>By Messhoff</h6>
            <p>
                Messhof is a video game development studio founded in 2013 by Mark Essen and Kristy Norindr and located in Venice, California
            </p>

            <div class="dev-social">
                <h6>@messhof</h6>
                <a href="https://twitter.com/messhof">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            <div class="dev-social">
                <h6>@kr15t3a</h6>
                <a href="https://twitter.com/kr15t3a">
                <img src="../img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                </a>
            </div>
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
