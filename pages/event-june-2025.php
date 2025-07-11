<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "June 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all June Meetup";
$headImage = "/img/event-img/GY-Banner-June-25.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-june-2025">June 22th, 2025</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>Black Future Month</h1>
        <h4>June 22th, 2025 - 12-3pm</h4>
        
        <p>
            <!-- Location  -->
            <a href="https://maps.app.goo.gl/MYF1un8VKobn5z5BA" target="_blank">710 W Cesar Chavez St, Austin, TX 78701 (5th Floor)</a>
            <br><br>
            🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
        </p>
        <!--RSVP Button-->
        <button 
            class="button" id="RSVP'"><a href="https://withfriends.co/event/23519952/games_yall_june_2025" target="_blank">RSVP</a>
        </button>
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-June-25.png" alt="The Museum of Human Achievement presents, Games Y'all June Meetup">
        </div>

        <div class="col-10">
            <!-- Add event text here -->
            <p>
                Join us at Austin Public Library's Central Branch in their Innovate Lab for our June Games Y'all meetup!<br>
                In honor of Juneteenth, we've titled our next event Black Future Month and are platforming as many Black devs & creators as we can!
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
          
        </div>
    </div>

    <!--Games at the event-->
    <div>
        <!--Let Me Cook Game Card-->
         <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                    <div>
                        <img src="/img/Archived-img/June-2025/games/LetMeCook.png" alt="A promotional image for Let Me Cook.">
                    </div>
                <div>
                    <!--Project Text-->
                    <h4>Let Me Cook!</h4>
                    <p>
                        Let Me Cook! is a multiplayer cooking sim where trial and error is on the menu.<br>
                        Chop and throw it in the pot! If you succeed in making a recipe you can then chow down with friends.<br>
                        Don't forget to display your Chef status by visiting the Let Me Cook Shop.<br>
                        Prove your skills in the Let Me Cook kitchen and CLAIM YOUR PRIZE!
                    </p>
                    <!--Call to Action-->
                        <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                            <a href="https://horizon.meta.com/world/10232963677506610/" target="_blank">Play Now</a>
                        </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Ashley "Ashes2Ashes2" Briley</h4>
                    <p>
                        Ashes2Ashes2 went from CPA by day to full-time VR creator after downloading the world building and social VR application, Horizon Worlds. Since her first published world “The Blue House”, she has been focused on creating inclusivity and safe spaces via her builds. When not doing solo projects she is apart of the VRinReview dev team.
                    </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/ashes2ashes2/">
                            <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to Ashley Briley's Instagram account.">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Man in a Dress Game Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/June-2025/games/Man in a Dress.jpg" alt="A promotional image for Man in a Dress.">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Man in a Dress</h4>
                    <p>
                        Based on true events, Sai is out on the town with his friends when terror strikes throwing the entire night into a chaotic nightmare that will take your calm head and voice to help him survive in this choice-based, playable, true crime podcast.  
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://sai-fi.itch.io/man-in-a-rose" target="_blank">Play Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>Sai Sion </h4>
                    <p>
                        Sai Sion H. is an award-winning Audio Alchemist and Creative Technologist. Their work spans diverse projects, including an acclaimed sci-fi audio drama, documentary production, and leading game development teams. His innovative approach has earned them recognition from prestigious organizations such as the Webby Awards, Third Coast International Audio Festival and Variety Magazine.
                    </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/sighmabean/">
                            <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to Sai Sion's Instagram account.">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Buzz Kill Zero Game Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/June-2025/games/Buzz Kill Zero.jpg" alt="A promotional image for Buzz Kill Zero.">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Buzz Kill Zero</h4>
                    <p>
                        "Buzz Kill Zero is a retro-themed arcade shooter (or shmup), taking classic gameplay elements & reinterpreting them for a new audience. Use bombs, shields, & hyper mode to take down the enemies & top the leaderboards.<br>
                        An AI named Shazzaria is turning against her human creators. She has gone crazy, crafting an army of destroy all human life. Journey into space to take her out."
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://linktr.ee/kapaent" target="_blank">Follow KaPa ENT to stay Updated!</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>KaPa ENT </h4>
                    <p>
                        We are KaPa ENT, an independent game studio & publisher founded by Kaleb Parham in 2021. We have three focuses: 1) innovating arcade design for the modern gaming era 2) pioneering more black cast in video games without stereotypes & politics 3) building a community of gamers who simply enjoy our games & characters! Our most recent game was the mobile game Panic Gem Odyssey, which maintains a 4.9 rating on both Google Play & the App Store! As we grow, we hope to be recognized for innovation, boldness, & positivity in the gaming world.
                    </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/kapa_ent/?hl=en">
                            <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to Kapa Ent's Instagram account.">
                        </a>
                        <a target="_blank" href="https://bsky.app/profile/kapaent.com">
                            <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to Kapa Ent's Bluesky account.">
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@kapaent_llc">
                            https://www.tiktok.com/@kapaent_llc
                        </a>
                        <a target="_blank" href="https://kapaent.com/">
                            https://kapaent.com/
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@KaPaENT/">
                            https://www.youtube.com/@KaPaENT/
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Primal Force Game Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/June-2025/games/PrimalForce.jpg" alt="A promotional image for Primal Force.">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Primal Force Arena</h4>
                    <p>
                        Primal Force Arena is an online multiplayer sci-fi strategy game allowing worldwide players to challenge each other in fast paced tactical battles mixing strategy, action, RPG and match-3 experiences in a life breathing, dynamic and colorful world! Primal Force Arena offers a wide array of tactics to combine on the battlefield, an innovative, dynamic battle system and a brand new, promising and extendable IP to various suites through its intriguing storyline!
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://play.google.com/store/apps/details?id=com.NGaninGames.PrimalForceArena" target="_blank">Play Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h4>N'Ganin Games</h4>
                    
                    <div class="dev-social">
                        <a target="_blank" href="https://linktr.ee/nganingames">
                            https://linktr.ee/nganingames
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Obsidian Eclipse Game Card-->
        <!--Cloning Marshland Game Card-->
    </div>
    <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/June-2025/photos/june-gy-photo-1.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/June-2025/photos/june-gy-photo-2.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/June-2025/photos/june-gy-photo-3.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/June-2025/photos/june-gy-photo-4.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/June-2025/photos/june-gy-photo-5.jpg" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/June-2025/photos/june-gy-photo-6.jpg" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
