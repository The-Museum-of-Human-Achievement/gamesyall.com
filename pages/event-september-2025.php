<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "August 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all August Meetup";
$headImage = "/img/event-img/GY-Banner-August-25.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-August-2025">September 22nd, 2025</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>Games Y'all - September Meetup</h1>
        <h4>Thursday September 18th, 2025 - 7-9pm</h4>
        <p>
            Captain Quack's Bakery and Coffee house <a href="https://maps.app.goo.gl/3QfhF7wcL11HYF3f6" target="_blank">5326 Menchaca Rd, Austin, TX 78745</a>
            <br><br>
            🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
        </p>
        <button 
            class="button" id="RSVP'"><a href="https://withfriends.events/event/mw4iq9Gf/games-yall-september-2025/" target="_blank">RSVP</a>
        </button>
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-September-25.png" alt="The Museum of Human Achievement presents, Games Y'all September Meetup">
        </div>

        <div class="col-10">
            <!-- Add event text here -->
            <p>
                Howdy friends! School's back and so are we! Come join us at Captain Quack's for our September Meetup! 🦆 🍻 🎮 
            </p>
            <br>

            <h5>Venue + Health Details</h5>
            <p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!</p>
            <br>

            <h5>Games Y'all</h5>
            <p>Games Y’all showcases indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. Games Y’all celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>
            <br>

            <h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>
        </div>
    </div>

    <!--Games at the event-->
    <div>
        <h2 style="text-align: center;">Games This Month</h2>     
            <!--ELECTROMANCER Card-->
                <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
                    <div class="game-card-long">
                        <div>
                            <!--Promo Image-->
                            <img src="/img/Archived-img/September-2025/games/electromancer.png" alt="A promotional image for ELECTROMANCER. ">
                        </div>
                        <div>
                            <!--Project Text-->
                            <h4>ELECTROMANCER</h4>
                            <p>
                                "Inspired by the POLYBIUS urban legend, early 3D dungeon crawlers like King's Field, and the SwordQuest games for the Atari VCS comes ELECTROMANCER, a first person mystery/horror game about visibility and the intertwining of man and machine.
                                <br><br>
                                In the town of Red Pines, Washington, there were always whispers of something sinister within town. You play as Eleanor Rivers, and your brother Bernard went missing years ago. Even after searching for him everywhere, nothing came up, until now."
                            </p>
                            <!--Call to Action-->
                            <button class="button"  style="margin: 10px; background-color: #F2D335;">
                                <a href="https://4terrabytes.itch.io/electromancer" target="_blank">Play Now</a>
                            </button>
                        </div>
                        <div>
                            <!--Dev Text-->
                            <h4>NOCTURNE PROTOCOL </h4>
                            <p>
                                NOCTURNE PROTOCOL is a group of five developers, designers, and artists who are currently working on ELECTROMANCER. Most of the team are developers outside of their regular work/classwork, and primarily work remotely. The group is currently independent.
                            </p>
                            <!--Dev Socials-->
                            <div class="dev-social">
                                <a target="_blank" href="https://x.com/fourterrabytes">
                                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;" alt="A link to the Nocturn Protocal's X page.">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--End of Game Card -->

            <!--Snails have Skeletons Card-->
                <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
                    <div class="game-card-long">
                        <div>
                            <!--Promo Image-->
                            <img src="/img/Archived-img/September-2025/games/snails-have-skeletons.jpg" alt="A promotional image for Snails Have Skeletons. ">
                        </div>
                        <div>
                            <!--Project Text-->
                            <h4>Snails Have Skeletons</h4>
                            <p>
                                The dark adventure game, Snails Have Skeletons, is a dark spin on the classic 16-bit adventure genre. Explore an interconnected world and battle the undead to uncover the mystery of the curse.
                                <br><br>
                                Features:<br>
                                A fully explorable interconnected world<br><br>
                                Hard-hitting combat which encourages careful play<br><br>
                                An original story inspired by late 19th and early 20th century horror fiction<br><br>
                                A multi-pronged approach to narrative design, encouraging replays.<br><br>
                                4-6 hours of gameplay, depending on how deep you invest yourself in the world
                            </p>
                            <!--Call to Action-->
                            <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                                <a href="https://store.steampowered.com/app/2312930/Snails_Have_Skeletons/" target="_blank">Wishlist Now</a>
                            </button>
                        </div>
                        <div>
                            <!--Dev Text-->
                            <h4>Aesir Aesthetics </h4>
                            <p>
                                Wade Josey is a composer based in Austin TX. His most recent project is Snails Have Skeletons, a 16-bit adventure game developed by Icelandic game designer Aesir Aesthetics. The two have collaborated for 4 years and are excited for players to explore this hand crafted world of swamps and secrets. 
                            </p>
                            <!--Dev Socials-->
                            <div class="dev-social">
                                <a target = "_blank" href="https://www.youtube.com/channel/UC3gqsroAUrKCaeK0Eu3iWBg"> https://www.youtube.com/channel/UC3gqsroAUrKCaeK0Eu3iWBg
                                <br>
                                <a target="_blank" href="https://www.instagram.com/wadejoseymusic/">
                                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to Wade Josey's Instagram page.">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--End of Game Card -->

            <!--Solar War Card-->
                <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
                    <div class="game-card-long">
                        <div>
                            <!--Promo Image-->
                            <img src="/img/Archived-img/September-2025/games/solar-war.jpg" alt="A promotional image for Solar War. ">
                        </div>
                        <div>
                            <!--Project Text-->
                            <h4>Solar War</h4>
                            <p>
                                "Solar War! A fast-paced, space-themed, shoot-em-up, bullet hell, arcade style game where players attempt to shoot and weave through a horde of enemy planets in a bid to survive just a little bit longer.
                                <br><br>
                                The planets have orbited peacefully for countless millennia. But then… BOOM! Now all orbital bodies are free to move independent of gravity (and they can respawn when defeated too.) You're The Earth… good luck!"
                            </p>
                            <!--Call to Action-->
                            <button class="button"  style="margin: 10px; background-color: #F2D335;">
                                <a href="https://store.steampowered.com/app/2543990/Solar_War/" target="_blank">Play Now</a>
                            </button>
                        </div>
                        <div>
                            <!--Dev Text-->
                            <h4>Andrew McMeans</h4>
                            <p>
                                Hello! My game, Solar War, is a passion project turned honors capstone project that I have developed over the course of 5 years. I enjoy making games, viewing it as my hobby, and I have some ideas on other games that I would like to make in the future!
                            </p>
                            <!--Dev Socials-->
                            
                        </div>
                    </div>
                </div>
            <!--End of Game Card -->

            <!--Tahitian Driftin' Card-->
                <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
                    <div class="game-card-long">
                        <div>
                            <!--Promo Image-->
                            <img src="/img/Archived-img/September-2025/games/tahitian-driftin.png" alt="A promotional image for Tahitian Driftin'. ">
                        </div>
                        <div>
                            <!--Project Text-->
                            <h4>Tahitian Driftin'</h4>
                            <p>
                                A tropical anti-gravity racing game from the depths of a long-lost arcade cabinet that will have you cruising through lush, remote Polynesian islands with a draft-based boost system that fosters tight-knit competition between players
                            </p>
                            <!--Call to Action-->
                            <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                                <a href="https://store.steampowered.com/app/3565460/Tahitian_Driftin/" target="_blank">Play Now</a>
                            </button>
                        </div>
                        <div>
                            <!--Dev Text-->
                            <h4>Pixel Pushers Union 512</h4>
                            <p>
                                Pixel Pushers Union 512 is a worker-owned cooperative.  We produced the successful title, "Tonight We Riot" and operate on the principles of Shop Democracy, wherein every team member has a say and profits are split evenly across the board.
                            </p>
                            <!--Dev Socials-->
                            <div class="dev-social">
                                <a target="_blank" href="https://bsky.app/profile/tahitiandriftin.bsky.social">
                                    <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to the Tahitian Driftin' Blue Sky page.">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--End of Game Card -->
    </div>
    <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <!-- <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/August-2025/photos/GY-August-1.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/August-2025/photos/GY-August-2.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/August-2025/photos/GY-August-3.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/August-2025/photos/GY-August-4.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/August-2025/photos/GY-August-5.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/August-2025/photos/GY-August-6.jpg" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div> -->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
