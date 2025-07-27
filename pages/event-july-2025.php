<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "June 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all July Meetup";
$headImage = "/img/event-img/GY-Banner-July-25.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-july-2025">July 19th, 2025</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>Games Y'all - July Meetup</h1>
        <h4>July 19th, 2025 - 12-3pm</h4>
        
        <p>
            <a href="https://maps.app.goo.gl/ZLsKFQdzYbEERfVEA" target="_blank">6401 Airport Blvd, Austin, TX 78752</a>
            <br><br>
            🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
        </p>
        <!-- <button 
            class="button" id="RSVP'"><a href="https://withfriends.co/event/23769551/games_yall_june_2025" target="_blank">RSVP</a>
        </button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-July-25.png" alt="The Museum of Human Achievement presents, Games Y'all June Meetup">
        </div>

        <div class="col-10">
            <!-- Add event text here -->
            <p>
                Come join Games Y'all as we descend upon The Highland Collective for our July meetup!<br>
                We'll have friends, fun, and a curated selection of weird, wonderful games made by local devs! Come to play, see some friends, or make some new ones!
            </p>
            <br>

            <h5>Venue + Health Details</h5>
            <p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!</p>
            <br>

            <h5>Games Y'all</h5>
            <p>Games Y’all showcases indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. Games Y’all celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.<p/>
            <br>

            <h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>

            <h5>Highland Collective</h5>
            <p>The Highland Collective is a loosely associated group of artists and makers working out of a gallery in Central Austin. They host weekly educational and community building events, monthly showings and have exhibited the work of over 500 local artists.</p>
            <br>
        </div>
    </div>

    <!--Games at the event-->
    <div>
        <!--Culture Cue Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                     <img src="/img/Archived-img/July-2025/games/culturecue.jpg" alt="A promotional image for Culture Cue. ">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Culture Cue</h4>
                    <p>
                        Culture Cue is an experience-sharing board game designed to connect people through storytelling. It was created as a way for players to communicate with others by sharing their experiences. Designed with a familiar game style and mechanics this board game can easily bring different people of different backgrounds and generations to enjoy a fun-filled time on game night.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://www.kickstarter.com/projects/paulprogramspresents/culture-cue/" target="_blank">Back Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Gathered Her to Game</h4>
                    <p>
                        Gathered Here to Game is a team of culturally diverse and passionate minority creators who love playing social games that bring people together. The team has several years of experience shipping games across different platforms from mobile to consoles. Team members are also experience in the Tabletop Role Playing space having contributed to compilation titles.
                    </p>
                    <!--Dev Socials-->
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/culturecuegame/">
                            <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to the Culture Cue game Instagram page.">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Game Card -->

        <!--At the Edge of Everything Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                     <img src="/img/Archived-img/July-2025/games/AtTheEdge.jpg" alt="A promotional image for At the Edge of Everything. ">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>At the Edge of Everything</h4>
                    <p>
                        "At the Edge of Everything is a two-player meditative roleplaying game which explores how memory shapes identity and relationship through collaborative watercolor painting and storytelling. Players collaboratively watercolor and share memories, dynamically creating characters and relationships by exploring how memories are formed and how they fade away. These memories need not be your own, but can be if you wish. Stretch the limits of reality and fiction, unraveling the strands of time as you tell you and your characters’ shared story.
                        <br><br>
                        At the Edge of Everything is a game about creation, growth and decay, and the beauty of the cycle between them. Fading memories give way to vibrant canvases for new events. How will you remember your life?"
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://erenmakesgames.itch.io/at-the-edge-of-everything" target="_blank">Play Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Eren Slifker and Team Isaac</h4>
                    <p>
                       Hi! I'm Eren, a game designer and developer currently based in Austin. I'm passionate about learning new skills and working collaboratively across disciplines, and I strive make games that are meaningful, beautiful, and, above all, fun. My games often feature queer and neurodivergent characters, exploring and unpacking my collaborators' and my life experiences through the process of creation and play. I am one of the co-founders of Slandercast Studio, creators of At Winter's End, Suitcase Junction Worker, and Morningtide Motel. In addition to game development, I am a sound designer, a video editor, media artist, and maker space logistics coordinator. In my free time, you’ll find me planning out my Satisfactory world in a spreadsheet or baking way too many loaves of bread.
                    </p>
                    <!--Dev Socials-->
                    <div class="dev-social">
                        <a target="_blank" href="https://www.slandercast.studio/">
                            https://www.slandercast.studio/
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Game Card -->

        <!--Phantasmagoric Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                     <img src="/img/Archived-img/July-2025/games/phantasmagoric.png" alt="A promotional image for Phantasmagoric. ">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Phantasmagoric</h4>
                    <p>
                       Phantasmagoric is a thriller visual novel, meet up with your online best friend! See how different reality can be when you finally meet the person behind your screen. Sean is excited to see you as well! Will you and him have an amicable meet-up or will you constantly butt heads through out the day? And of course... Sean is always right.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://x.com/Plutraser" target="_blank">Learn More</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Plutraser</h4>
                    <p>
                       I'm Savannah otherwise known as Plutraser! I am a sucker for horror games and decided to dip my toe into the genre in the means I know how with my skills; Which means using Renpy! I am an artist first and foremost, writer second and game developer third! I am using my talents to convey a story for you to play! I am the sole developer for Phantasmagoric so far. I try my best to produce the best work I can for my first game! 
                    </p>
                    <!--Dev Socials-->
                    <div class="dev-social">
                        <a target="_blank" href="https://discord.com/invite/6Q3BeRDku5">
                            <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;" alt="A link to the Phantasmagoric Discord Server.">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Game Card -->

        <!--Best Fwends Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                     <img src="/img/Archived-img/July-2025/games/BestFwends.jpg" alt="A promotional image for Best Fwends. ">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Best Fwends</h4>
                    <p>
                       A best buddies adventure for the Atari 2600
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://the_dannobot.itch.io/best-fwends" target="_blank">Play Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Dan & Bashie Manning</h4>
                    <p>
                       Dan is a, indie game designer and developer in Austin for over 10+ years. Bashie is an 8 year old game developer who is the World's Biggest Sonic The Hedgehog Fan.
                    </p>
                </div>
            </div>
        </div>
        <!--End of Game Card -->

        <!--Hall of the dwarf king Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                     <img src="/img/Archived-img/July-2025/games/HallofDwarfKing.jpg" alt="A promotional image for hall of the dwarf king. ">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>HALL of the DWARF KING</h4>
                    <p>
                       HALL of the DWARF KING is Playdate Dungeon Puzzler made for 1-3 players. The game can be played on the system or in concert with a physical board and cards!
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://ledbetter-games.itch.io/hotdk" target="_blank">Learn More</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Ledbetter Games</h4>
                    <p>
                       Ledbetter Games is the Developer of PUP CUP, Off-Planet Dreams and the ART series for the Playdate including ART7, ART-O-Ween, ART&.. More and the Panels Comic A Ghost in the Gallery.
                    </p>

                    
                     <!--Dev Socials-->
                    <div class="dev-social">
                        <a target="_blank" href="https://bsky.app/profile/ldbrart.bsky.social">
                            <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to the Phantasmagoric Discord Server.">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Game Card -->

        <!--Frog Joust Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                     <img src="/img/Archived-img/July-2025/games/FrogJoust.jpg" alt="A promotional image for Frog Joust. ">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Best Fwends</h4>
                    <p>
                       Frog Joust is a physical poker-like card game where you challenge fellow players into contests of might! Players use cards in their hands as champions to compete against each other and gamble coins in a quest to be the wealthiest lord! Each champion has an associated strength value, with the larger number winning the contest, but worry not, as losing gains you a card from the retribution deck, potentially giving you an edge in your following contests. Push your luck or bluff your way to victory!
                    </p>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Ricardo Correa-Altiery</h4>
                    <p>
                       Howdy! I am Ricardo Andres Correa-Altiery, nice to meet ya! I am a Puerto Rican Artist, Game Designer, Game Enthusiast, and Entertainer! I am a fan and admirer of tons of different mediums like animation, cinema, and video games. In my spare time, I enjoy creating video games and board games to share with my friend group. I am currently working on setting up a game design portfolio, so feel free to reach out to collaborate! 
                    </p>

                     <!--Dev Socials-->
                    <div class="dev-social">
                        <a target="_blank" href="https://www.linkedin.com/in/ricardo-correa-altiery-53757b193/">
                            linkedin.com/in/ricardo-correa-altiery-53757b193
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Game Card -->
    </div>
    <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/July-2025/photos/GY-july-1.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/July-2025/photos/GY-july-2.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/July-2025/photos/GY-july-3.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/July-2025/photos/GY-july-4.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/July-2025/photos/GY-july-5.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/July-2025/photos/GY-july-6.jpg" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
