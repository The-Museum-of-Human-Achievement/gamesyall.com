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
            <a href="/event-march-2025">April 24th, 2025</a> 
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>April Meetup</h1>
        <h4>April 24th, 2025 - 7-10pm</h4>

        <!-- Location  -->
        <p>
            The Museum of Human Achievement
            <a href="https://maps.app.goo.gl/gnfLL6bdV5qLRqpd9" target="_blank">3600 Lyons Rd. Austin, TX 78702</a>
            <br /><br />
            🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
        </p>
            
        <!--RSVP Button-->
        <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/23009692/games_yall_april" target="_blank">RSVP</a></button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-April-25.png" alt="The Museum of Human Achievement presents, Games Y'all January Meetup">
        </div>

        <div class="col-10">
            <!-- Put PR text here -->
             <p>
             Games Y'all returns to the Museum of Human Achievement for our April meet-up! Come out to play some games, experience some digital art, and connect with your local community!                
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
    
    <!--Homepages at the event-->
    <div>
        <h2 style="text-align: center;">Homepages This Month</h2>
        
        <!--a side view of a yellow car Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/April-2025/homepages/a side view of a yellow car.jpg" alt="A promotional image for a side view of a yellow car. A pastel yellow Fiat Panda Parked outside of an apartment building.">
                </div>
                <!--Project Text-->
                <div>
                    <h4>a side view of a yellow car</h4>
                    <p>a side view of a yellow car, is a tiny artistic web project I started in the context of the Welcome to My Homepage Residency. The aim is to experiment and toy with accessibility features such as alt text, audio transcription, but also low-tech media loaders designed for people with low-connectivity internet. The result is this intimate one-page website that features pictures of yellow cars alongside personal reflections on digital imagery in the age of self-driving cars. The website implements multiple accessibility features: an image loader that displays pixelated images by default with an added grainy aesthetic, a contextualized audio transcription of the page, and alt text for all images written in 5-7-5 short poem format.</p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://sideview.neocities.org/" target="_blank">Explore</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: Kaspar Ravel</h6>
                <p>
                    Kaspar Ravel (they/them) is an artist, teacher, and researcher in tactical new media. Their work draws from a tradition of art movements set in between symbolic activism and practical approaches (from subtle gestures to concrete actions). As a self-taught coder and DIY hacker, their intention is to demystify technology, which brings them to encourage low-tech cultures and digital literacy in educational contexts, such as workshops, tutorials and micro-edition. Today, they aspire to develop discursive and programmatic tools for resistance against the veil of big data and globalised surveillance. Their research takes the form of 'poelitical' experiments, merging poetic expression with political critique within on/offline artworks.
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.poelitics.org/">
                            Website
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
                    The ምርቃት (mirik’at) / blessings generator is a collaborative web-based interactive work by Betelhem Makonnen, Mayet, and Mihret Kebede. Inspired by coffee ceremonies and the verbal art of well-wishing from their shared homeland of Ethiopia, the artists created this project to cultivate a new practice of collective care-taking for virtual space. 
                    <br><br>
                    The website allows visitors to receive blessings on topics ranging from world woes to future hopes, or to receive a customized blessing based on their specific concern. Sharing a wealth of knowledge about the practice of well-wishing, the project invites visitors to bring ምርቃት (mirik’at) into their lives to experience the sense of wellbeing and interconnectedness that come with rooting for each other and honoring interdependence.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://homepageguest.wixsite.com/blessings/" target="_blank">Explore</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: Betelhem Makonnen, Mayet, and Mihret Kebede</h6>
                <p>
                A native of Ethiopia, Betelhem Makonnen, researches perception, presence, and place within African diasporic consciousness. In addition to her studio practice she co-organizes Addis Video Art Festival.
                <br><br>
                Mayet explores the intersection of artificial intelligence, human connection, and creative expression. With a background in international relations, economics, and data science, she examines how technology shapes the way we learn, grow, and interact.
                <br><br>
                Mihret Kebede is a multidisciplinary artist, poet, and co-founder of Tobiya Poetic Jazz, Netsa Art Village Artists Collective, and Addis International Video Art Festival. Mihret's artistic journey spans local and international projects across cultures.
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://betelhemmakonnen.com/">
                        https://betelhemmakonnen.com/
                        </a>
                        <a target="_blank" href="https://linktr.ee/mihretkebede">
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

        <!--Ultraprocessor Ribbon Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/April-2025/games/Ultraprocessor Ribbon.jpg" alt="A promotional image for Ultraprocessor Ribbon. Two characters are displayed in the middle of the image: one looking to the left with a smile, her hair braided into pigtails with a CD emerging from her head. The other looks off to the right with a stern expression: there is a cpu attached to her chest and ribbon cables coming out and connecting back into her shoulders. ">
                </div>
                <!--Project Text-->
                <div>
                    <h4>Ultraprocessor Ribbon</h4>
                    <p>
                    Half brick-breaker action! Half erotic visual novel! Follow the story of Stella and her computer-turned-android Ribbon as they fight to make old computers legal again in the year 2673.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://demuresoft.xyz/ribbon/ribbon.php" target="_blank">Learn More</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: DemureSoft</h6>
                <p>
                DemureSoft is a doujinsoft circle based in Austin, TX, formed by Jennifer Raye to reject the bleak and cynical outlooks of making independent video games. We're carving a new path, one which we hope will inspire others to never lose sight of their passions, and to shout them brilliantly from the rooftops. We strive to push the agendas of bishoujo, eroge, and doujin in America. We will not rest until our city looks like Akihabara.
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.patreon.com/c/DemureSoft">
                        https://www.patreon.com/c/DemureSoft
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <!--Holding Patterns Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/April-2025/games/Holding Patterns.jpg" alt="A promotional image for Holding Patterns. A Wooden puzzle block assembled but with clear markings denoting that it comes apart at various angles.">
                </div>
                <!--Project Text-->
                <div>
                    <h4>Holding Patterns</h4>
                    <p>
                    Holding Patterns are three dimensional wooden puzzles created from off-cuts from artist Michael Muelhaupt’s work, originally created for a group show “fitting” at Northern-Southern with Rachael Starbuck and Michael Muelhaupt. The nesting shapes became a metaphor for how social relationships define ourselves and create lasting impressions - community and culture build upon ourselves. 
                    </p>
                    <!--Call to Action-->
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: Jesse Cline</h6>
                <p>
                Jesse Cline is a designer, artist, and educator interested in contemporary and experimental methods of representation and production. 
                </p>
                    <div class="dev-social">
                    
                    
                    <a target="_blank" href="https://www.instagram.com/superpattern">
                        <img src="/img/Social-buttons/instagram-button.png" style="width: 64px; height: auto;" alt="A link to Jesse Cline's Instagram account.">
                    </a>
                    </div>
                </div>
                
            </div>
        </div>

        <!--Mystic Guantlets Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/April-2025/games/Mystic Gauntlets.jpg" alt="A promotional image for Mystic Gauntlets. ">
                </div>
                <!--Project Text-->
                <div>
                    <h4>Mystic Gauntlets</h4>
                    <p>
                    Mystic Gauntlets is a short and rowdy tabletop card game for 2 to 4 players. Players take turns equipping new Gauntlets, activating their powerful effects, or casting a variety of spells. Each player can have one Gauntlet equipped on their left and another on their right. Each Gauntlet has a unique effect depending on whether they are equipped on the left or the right! Use these effects to destroy other players' Gauntlets, earning you trophies! The game has a variety of modes to play depending on player count, including competitive 1v1, 4 player free-for-all, and two-headed giant team play! 
                    </p>
                    <!--Call to Action-->
                    <!-- <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://demuresoft.xyz/ribbon/ribbon.php" target="_blank">Learn More</a>
                    </button> -->
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: Ricardo Correa-Altiery</h6>
                <p>
                Howdy! I am Ricardo Correa-Altiery, nice to meet ya! To sum up a bit of myself I am a bilingual Puerto Rican Artist, Game Designer / Enthusiast! I have grand aspirations and goals in life, such as telling at least one truly lasting story! I am a fan and admirer of tons of different mediums like animation, cinema, and video games. In my spare time, I enjoy creating video games and board games to share with my friend group. 
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://www.linkedin.com/in/ricardo-correa-altiery-53757b193/">
                        www.linkedin.com/in/ricardo-correa-altiery-53757b193
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <!--NetEscape Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <!--Promo Image-->
                <div>
                    <img src="/img/Archived-img/April-2025/games/Net Escape.jpg" alt="A promotional image for NetEscape.">
                </div>
                <!--Project Text-->
                <div>
                    <h4>NetEscape</h4>
                    <p>
                    Once a thriving 90s MMO, NetEscape now stands as a time capsule, housing a dark secret beneath its bright, colorful surface. With the server shutdown looming at midnight, explore, gather clues, and uncover the mystery hidden within NetEscape before the game—and its secrets—are lost forever.
                    </p>
                    <!--Call to Action-->
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://store.steampowered.com/app/3344890/NetEscape/" target="_blank">Wishlist Now</a>
                    </button>
                </div>
                
                <!--Dev Text-->
                <div>
                <h6>Developer: Goblin Laundromat & Crisppyboat</h6>
                <p>
                Goblin Laundromat is a queer-led, game development cooperative and art collective dedicated to creating unique experiences through the medium of gaming and empowering underrepresented voices in the games industry.
                </p>
                    <div class="dev-social">
                        <a target="_blank" href="https://bsky.app/profile/goblinlaundromat.bsky.social">
                            <img src="/img/Social-buttons/bluesky-button.png" style="width: 64px; height: auto;" alt="A link to Jesse Cline's Instagram account.">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

    <!--End of Games at the event-->
    </div> 
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past-->
    <div class="row">-
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
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
