<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "April 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all April Meetup";
//TODO: update headimage
$headImage = "/img/event-img/GY-Banner-April-25.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-may-2025">Saturday May 17th, 2025</a> 
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>May Meetup</h1>
        <h4>Saturday May 17th, 2025 - 7-10pm</h4>

        <!-- Location  -->
        <p>
            The Museum of Human Achievement
            <a href="https://maps.app.goo.gl/gnfLL6bdV5qLRqpd9" target="_blank">3600 Lyons Rd. Austin, TX 78702</a>
            <br /><br />
            🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
        </p>
            
        <!--RSVP Button-->
        <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/23296359/games_yall_may_2025" target="_blank">RSVP</a></button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-May-25.png" alt="The Museum of Human Achievement presents, Games Y'all May Meetup">
        </div>

        <div class="col-10">
            <!-- Put PR text here -->
            <p>
                Join us for Games Y'all at the Museum of Human Achievement! 📆📍<br>
                We'll have a fresh lineup of indie games to check out, folks to meet, and we'll be doing it at the same time as <a href="https://moha.wiki/CATS+" target="blank">MoHA's CATS+</a>showcase, so there will be even more art to check out!
            </p>
            <br><br>
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
    <!--End of Content and Information-->

     <!--Homepages at the event-->
     <div>
        <h2 style="text-align: center;">Homepages This Month</h2>
        
        <!--a side view of a yellow car Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/May-2025/homepages/currentArchive.png" alt="A promotional image for currentarchive. A white background with a bird centered in the image which resembles a web-browser window, a button can be seen that says 'information moves as water'">
                </div>
                <!--Project Text-->
                <div>
                    <h4>currentarchive</h4>
                    <p>currentarchive is a poetic net art project that reflects my research process as a mixed, diasporic anishinaabe. It animates the senses of obscurity, denial, and loss that often define searches for indigeneity in institutional spaces (and sometimes daily life). i altered photographic, audio, and textual material from my own experience and family history to subvert the oppressive practices of redaction and obfuscation. currentarchive is entwined with refusal—first to be recognized, and then to be dismissed.</p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://currentarchive.online/" target="_blank">Explore</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: kama rose</h6>
                <p>
                kama rose (born 2000) is a mixed anishinaabe artist raised in northern california, in a city braided with two major rivers. she utilizes sound, words, and photos and videos to make works that inquire both personal and collective memory. she released her first music single, “empathy”, in 2023, and self-published the book “a light world” in 2024.
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/kama__rose/">
                        <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to kama rose's Instagram account.">
                        </a>
                        <a target="_blank" href="https://bioluminescent.world/">
                            https://bioluminescent.world/
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <!--blessings generator Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/April-2025/homepages/blessings generator.jpg" alt="A promotional image for blessings generator. 6 cups of tea arranged on a rectangular table. Surrounding the table is a mortar & pestle, incense burner, herbs, popcorn and a kettle.">
                </div>
                <!--Project Text-->
                <div>
                    <h4>ምርቃት (mirik’at) / blessings generator</h4>
                    <p>
                    The ምርቃት (mirik’at) / blessings generator is a collaborative web-based interactive work. Inspired by coffee ceremonies and the verbal art of well-wishing from their shared homeland of Ethiopia, the artists created this project to cultivate a new practice of collective care-taking for virtual space. 
                    <br><br>
                    The website allows visitors to receive blessings on topics ranging from world woes to future hopes, or to receive a customized blessing based on their specific concern. Sharing a wealth of knowledge about the practice of well-wishing, the project invites visitors to bring ምርቃት (mirik’at) into their lives to experience the sense of wellbeing and interconnectedness that come with rooting for each other.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://homepageguest.wixsite.com/blessings/" target="_blank">Explore</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                    <h6>Developer: Betelhem Makonnen, Mayet, & Mihret Kebede</h6>
                    <p>
                    A native of Ethiopia, Betelhem Makonnen, researches perception, presence, and place within African diasporic consciousness. In addition to her studio practice she co-organizes Addis Video Art Festival.
                    <br><br>
                    Mayet explores the intersection of artificial intelligence, human connection, and creative expression. With a background in international relations, economics, and data science, she examines how technology shapes the way we learn, grow, and interact.
                    <br><br>
                    Mihret Kebede is a multidisciplinary artist, poet, and co-founder of Tobiya Poetic Jazz, Netsa Art Village Artists Collective, and Addis International Video Art Festival. Mihret's artistic journey spans local and international projects across cultures.
                    <br><br>
                    </p>
                    <div class="dev-social">
                        Betelhem Makonnen - <a target="_blank" href="https://betelhemmakonnen.com/">
                        https://betelhemmakonnen.com/
                        </a>
                        Mihret Kebede - <a target="_blank" href="https://linktr.ee/mihretkebede">
                        https://linktr.ee/mihretkebede
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Homepages at the event-->
    </div>

    <!--Games at the event-->
    <div>
        <!-- TODO: fill out game section -->
        <h2 style="text-align: center;">Games This Month</h2>

        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!-- V-Shift Game Card -->
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/May-2025/games/VShift.png" alt="A promotional image for Vee-Shift. Letters spelling Vee-Shift are written in red at the top of the image, right below the letters is a person holding up a staff that is channeling lightning into itself. To the left and right of the person is piles of defeated opponents.">
                </div>
                <!--Project Text-->
                <div>
                    <h4>V-Shift</h4>
                    <p>V-Shift is a high-intensity, fast-paced, battle platformer where mastering your movement is key to victory. Choose your champion and become the ultimate gladiator in a galaxy-wide alien arena. Master the V-Shift: velocity is damage; stillness is death. </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://store.steampowered.com/app/3361890/VShift/" target="_blank">Play Now</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: Propel Studios</h6>
                <p>
                Founded in 2024, Propel Studios began as a team of seven passionate UT Austin students, creating V-Shift as their senior capstone project. Fueled by their own dedication, they continued to work on V-Shift post-school, publishing the game on Steam and showcasing at GDC Play 2025. Embracing the chaos of creativity as a tool to improve, Propel Studios push themselves to design games that are as engaging to play as they are exciting to master, bringing friends and rivals together in unforgettable battles.
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/vshiftgame/">
                        <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to Ashcroft's Instagram account.">
                        </a>
                        <a target="_blank" href="https://vshift.neocities.org/">
                            https://vshift.neocities.org/
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@V-Shift">
                        https://www.youtube.com/@V-Shift
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@vshiftgame">
                        https://www.tiktok.com/@vshiftgame
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Ashcroft Game Card -->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                
                <div>
                <!--Promo Image-->
                    <img src="/img/Archived-img/May-2025/games/Ashcroft.png" alt="A promotional image for Ashcroft. A Victorian-style house painted white with lavender accents is centered on a black backgroud, the title Ashcroft is lettered in a similar lavender color at the bottom.">
                </div>
                <!--Project Text-->
                <div>
                    <h4>Ashcroft</h4>
                    <p>Ashcroft is a narrative-driven, psychological horror game being built through Bitsy with Twine integration. It follows two women of different eras - one in the present day and one in the late 1800s. Playing as Lesly, we follow her story as the new Dorm Manager for an all-girls residence hall in Texas. As strange happenings in the house put her on edge, she begins to unravel the story of Eliza, one of the first owners, whose traumatic past led to the current state of the Ashcroft dormitory. </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://x.com/AshcroftGame" target="_blank">Learn More</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                    <h6>Developer: Twisted Lavender</h6>
                    <p>
                    Twisted Lavender is an indie studio created by Nina Martinez and Lindsay Howard to explore different storytelling formats and genres. If its a little creepy, spooky, and has some female rage, it's definitely up our alley. Our first and inaugural title, ASHCROFT, is a Twisty retro pixel horror game featuring a fully voiced cast. Twisted Lavender is developing an anthology of small games based within the ASHCROFT universe. 
                    <br><br>
                    The Twisted Lavender team is currently comprised of three people: Nina Martinez, Lindsay, Howard, and Lily Peterson. Nina met Lindsay in college where they bonded over their love of games. After they began production, Nina and Lindsay brought Lily Peterson on as a Programmer to help bring their spooky ideas to life.
                    </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/ashcroftgame/">
                        <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;" alt="A link to Ashcroft's Instagram account.">
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@ashcroftgames">
                        https://www.tiktok.com/@ashcroftgames
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- The Four Money Bears: Berryville Game Card -->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/May-2025/games/FourMoneyBears.jpg" 
                    alt="A promotional image for Vee-Shift. A bear in a backwards baseball cap, T-shirt and jeans is ecstatically pulling a cart with pies, jams and berries while money is flying all over the place.">
                </div>
                <div>
                    <!--Project Text & Call to Action-->
                    <h4>The Four Money Bears: Berryville</h4>
                    <p>
                        Learn to Make Millions in this Cozy Merchant Sim. Build a business and beat the competition to become the biggest merchant in the world by learning smart financial habits, behaviors and traits. Craft pies & jams from tons of different berries. Have fun running your shop & helping your community! Based on the award winning children's book.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://linktr.ee/thefourmoneybears" target="_blank">Wishlist Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text & Dev Socials-->
                    <h6>Developer: TFMB inc. </h6>
                    <p>
                        TFMB Inc. leads the charge in financial literacy innovation, seamlessly integrating education with interactive technology to empower families, educators, and financial professionals. A collaborative venture between Mac Gardner, CFP® & Ryan Gallini, TFMB Inc. blends proven financial principles with captivating experiences.
                        <br>Driven by a shared vision, the company is on a mission to inspire a financially literate future for all.
                    </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.instagram.com/fourmoneybears ">
                        <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to The Four Money Bear's Instagram account.">
                        </a>
                        <a target="_blank" href="https://www.facebook.com/thefourmoneybears">
                        https://www.facebook.com/thefourmoneybears
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- GravShift Game Card -->
         <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/May-2025/games/GravShift.png" 
                    alt="A promotional image for Vee-Shift. A ball is falling down and changing its trajectory upwards, avoiding spikes, by exerting effort.">
                </div>
                <div>
                    <!--Project Text & Call to Action-->
                    <h4>GravShift</h4>
                    <p>
                        An arcade style precision platformer where you Invert gravity and jump to work your way through a gauntlet of hazards, collecting coins and big bonuses. 
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://store.steampowered.com/app/3637870/GravShift_Demo/?utm_source=event&utm_campaign=games_yall" target="_blank">Wishlist Now</a>
                    </button>
                </div>
                <div>
                    <!--Dev Text-->
                    <h6>PogoBrick LLC</h6>
                    <p></p>
                    <!--Dev Socials-->
                    <div>
                        <a target="_blank" href="https://bsky.app/profile/pogobrick.bsky.social">
                        <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to the PogoBrick BlueSky account.">
                        </a>
                        <a target="_blank" href="https://discord.gg/aXmRGvD7Yn">
                        <img src="/img/Social-buttons/discord-button.png" style="width: 64px; height: auto;" alt="A link to The PogoBrick Discord Channel.">
                        </a>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=61571274210590">
                        https://www.facebook.com/profile.php?id=61571274210590
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Draggin' Game Card -->
         <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/May-2025/games/Draggin.png" 
                    alt="A promotional image for Vee-Shift. 
                    A Mouse Witch holding up a magic wand is surrounded by dragons of different colors.">
                </div>
                <div>
                     <!--Project Text-->
                    <h4>Draggin'</h4>
                    <p>
                        Wrangle Draggins by draggin' the mouse in this charming arcade roguelite! Click-and-drag to wear Draggins down until they can be captured and get your fill of wave battlin', achievement huntin', upgrade unlockin', rinse-and-repeatin'!
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                            <a href="https://linktr.ee/draggingame" target="_blank">Wishlist Now</a>
                        </button>
                    </div>
                <div>
                    <!--Dev Text-->
                    <h6>The Draggin' Team</h6>
                    <p>
                        We're a group of friends who have been working on this project remotely for about five months. What started as a short term project grew in scope once we realized its potential. We're now aiming to publish this game as our first ever commercial steam title. Above all, our biggest commitments are making a game that we're proud of and refining our skills even further.
                    </p>
                    <!--Dev Socials-->
                    <div>
                        <a target="_blank" href="https://bsky.app/profile/draggingame.bsky.social">
                        <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to the Draggin game BlueSky account.">
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@draggin.game">
                            https://www.tiktok.com/@draggin.game
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stomach Game Card -->
         <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <!--Promo Image-->
                    <img src="/img/Archived-img/May-2025/games/Stomach.png" 
                    alt="A promotional image for Stomach. 
                    A fridge with boxes of ingredients, pots, and pans right next to it.">
                </div>
                <div>
                    <!--Project Text-->
                    <h4>Stomach</h4>
                    <p>
                        You are a line cook who was recently hired for a cruise ship gig where every day you prepare ingredients and make dishes to then deliver to customers. However, each night the ship seems to twist and turn against you and its walls sound less like its creaking but breathing. However, no matter what you might see, no matter what you might hear… YOU. MUST. COOK.
                    </p>
                    <!--Call to Action-->
                    <!-- <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="" target="_blank">Play Now</a>
                    </button> -->
                </div>
                <div>
                    <!--Dev Text-->
                    <h6>Vertical Fish Studios</h6>
                    <p>
                        Hi! We are a group of college students and aspiring game developers who developed this horror game in under 15 weeks for our video game capstone class. We wanted to tackle the challenge of making a retro horror aesthetic reminiscent of old PlayStation graphics. We are a mix of VFX artists, 3D Modelers, programmers, and me as the producer and we're super passionate about continuing to develop the game! 
                    </p>
                    <!--Dev Socials-->
                    <div></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End of Games at the event-->

    <!--Event Images-->
    <!--Only use this section after an event to house images from the past-->
    <!-- <div class="row">-
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/img/Archived-img/April-2025/photos/april-gy-photo-1.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/April-2025/photos/april-gy-photo-2.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/April-2025/photos/april-gy-photo-3.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/April-2025/photos/april-gy-photo-4.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/April-2025/photos/april-gy-photo-5.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/April-2025/photos/april-gy-photo-6.jpg" style="width: 375px; height: 375px;"> 
            </div>
        </div>
    </div> -->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
