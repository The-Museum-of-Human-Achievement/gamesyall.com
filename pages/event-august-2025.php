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
            <a href="/event-August-2025">August 22nd, 2025</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>Games Y'all - August Meetup</h1>
        <h4>August 22nd, 2025 - 7-10pm</h4>
        <p>
            Austin Public Library - Howson Branch <a href="https://maps.app.goo.gl/q19jEF1Ps2LvSkuY8" target="_blank">2500 Exposition Blvd, Austin, TX 78703</a>
            <br><br>
            🎟️ Free admission, donations are encouraged! RSVPs encouraged but not required!
        </p>
        <!-- <button 
            class="button" id="RSVP'"><a href="https://withfriends.events/event/J6BqmNov/cool/" target="_blank">RSVP</a>
        </button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-August-25.png" alt="The Museum of Human Achievement presents, Games Y'all August Meetup">
        </div>

        <div class="col-10">
            <!-- Add event text here -->
            <p>
                Summer's heating up and so is Games Y'all! Join us this month for our special Pride event! Y'all Means All! 🖤🤎🤍❤️🧡💛💚💙💜
                <br><br>
                🏳️‍🌈 Honoring Austin's August Pride month, we're showcasing all games made by the amazing queer, trans, and LGBT+ members of our communities!
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

            <h5>Welcome to my Homepage</h5>
            <p>Welcome to my Homepage is an international online residency program and non-traditional art venue for the creation and appreciation of new net art. Residents are supported by individual mentors and a stipend. Artworks created through this residency are shared publicly online and in-person through partnership with the Austin Public Library and Games Y'all.</p>
        </div>
    </div>
    <!--Homepages at the Event-->
    <div>
        <h2 style="text-align: center;">Welcome to my Homepage projects this month</h2>
        
        <!--How to Make it home Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/How to make it Home.jpg" alt="- A promotional image for How to make it Home">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>How To Make It Home</h4>
                        <p>
                        "How To Make It Home is a text game in which the player navigates an urban landscape at night. It’s about alienation, cities, wildlife, and helplessness. The world is dark and you are a misanthropic type, not fully human, beast, or spirit but some amalgam of them all, seeking to carve out a home in a place that feels unfamiliar. Your decisions illuminate your path, as you traverse the grease and heat of the city’s intestines, writhe in the grass, hiss at glaring streetlights, and wonder at mysterious creatures. Take a journey or two and see what you become. The night is calling, time to go.
                        <br><br>
                        Perfect for fans of poetry, interactive fiction, nighttime walks, idly picking at scabs, or coding with Javascript frameworks. This project was made using Undum."
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #9BE9FF;" target="_blank">
                        <a target="_blank" href="https://bodypoetic.neocities.org/htmih/">Play Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Florence Walker (aka bodypoetic)</h6>
                        <p>
                        Florence Walker - also known as bodypoetic - is a writer, new media artist, and occasional academic. Her poetry has been featured in the Mays Anthology, Pidgeonholes, Acumen, Evocations, and other journals; her new media work lives at <a href="https://bodypoetic.itch.io/" target="_blank">https://bodypoetic.itch.io/</a>. She has two degrees, a New Media Writing Prize, and an enduring fascination with the flesh.
                        </p>
                        <div class="dev-social">	
                        <a href="https://bodypoetic.neocities.org/" target="_blank">
                            https://bodypoetic.neocities.org/
                        </a>
                        </div>
                    </div>
            </div>
        </div> 
        <!--End of Game Card-->   

        <!--I am not a robot Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/I am not a robot.png" alt="- A promotional image for I am not a robot">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>I AM NOT A ROBOT</h4>
                        <p>
                        I AM NOT A ROBOT is an interactive fiction about an online bot grasping for a deeper understanding of humanity through its favorite communication formats - captchas and personality quizzes. The user is prompted through a conversation about love, bodies, and identity, culminating in a poetic interpretation of the provided responses. Inspired by research into AI assistants and companion bot users, Taylor Paydos’s hand coded project asks us to playfully introspect on our relationships to AI. Do we see them as gendered, intimate, soulless? What does it mean to tell a computer that you’re human?
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #F2D335;" target="_blank">
                        <a target="_blank" href="https://iamnotarobot.online/">Explore</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Taylor Paydos</h6>
                        <p>
                        Taylor Paydos is a creative technologist, web designer, and community organizer. They navigate emotions towards surveillance tech, virtual community, and intimacy online through narrative websites, 3D games, and video work. They blend their critique of technology with humor and play, drawing inspiration from early net artwork, glitch as art, and 2000s aesthetics. The most important part of their creative practice is community, they currently run an art collective with Margot Whipps in Philadelphia. For work they are with the Phillips Auction House as a digital producer and Coco Marketing as a contract designer. They graduated from the New School in 2022 with a BA in Culture and Media and a BFA in Design and Tech. You can find them surfing the web.
                        </p>
                        <div class="dev-social">	
                        <a href="https://emmataylor.fun/" target="_blank">
                            https://emmataylor.fun/
                        </a>
                        </div>
                    </div>
            </div>
        </div> 
        <!--End of Game Card-->   
        
    </div>
    <!--Games at the event-->
    <div>
        <h2 style="text-align: center;">Games This Month</h2>

        <!--Auragami Card-->
                <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/Auragami.png" alt="- A promotional image for Auragami">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>Auragami</h4>
                        <p>
                            Auragami is a rhythm-like VR game with immersive, dreamy visuals and a soundtrack packed with healing frequencies. 
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://teamauragami.itch.io/auragami?utm_campaign=linkinbio&utm_medium=referral&utm_source=later-linkinbio" target="_blank">Play Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Team Auragami</h6>
                        <p>
                            "Team Auragami was formed as a student team for ACC’s graduating capstone project. Comprised of diverse members with multiple queer, trans, and femme members and leaders, Team Auragami has highlighted diversity and the need for representation in decision-making — both in the team and in the industry at large. 
                            <br><br>
                            With Auragami as a nearly complete project with focuses on healing and empowerment, we hope our mark on the world is one for the better. Feel free to play and give feedback!"
                        </p>
                        
                    </div>
            </div>
        </div> 
        <!--End of Game Card--> 

        <!--Bad Jazz Card-->
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/Bad Jazz.jpg" alt="- A promotional image for Bad Jazz">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>Bad Jazz</h4>
                        <p>
                        Bad Jazz is a short walking simulator. THERE ARE NO JUMPSCARES. There is a painting in each room. When you've found them all, you win!
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #F2D335;" target="_blank">
                        <a target="_blank" href="https://juice-baby.itch.io/bad-jazz">Play Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Morgan Taylor</h6>
                        <p>
                        Hello, Morgan here! Tin and I made this as part of an advanced VR game development course over the course of ten weeks. I was the level designer and artist and Tin made all the sounds for the game. I've always been very interested in walking simulators ever since I played my three favorites a couple years back, those being Cement Mixer Simulator 2003, Hendecad, and Red Desert Render, which you can find on itch! Visit my itch page for other silly and strange games!
                        </p>
                        <div class="dev-social">	
                        <a target="_blank" href="https://juice-baby.itch.io/">
                            <img src="/img/Social-buttons/itch-button.png" style="width: 64px; height: auto;" alt="A link to Morgan Taylor's Itch dot i o account.">
                        </a>
                        </div>
                    </div>
            </div>
        </div> 
        <!--End of Game Card--> 

        <!--Cute Patoots Card-->
            <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/cute patoots.png" alt="- A promotional image for Cute Patoots">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>Cute Patoots</h4>
                        <p>
                            Cute 2D platform shooter, inspired by Mega Man and Kirby.
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                        <a href="https://store.steampowered.com/app/3416360/Cute_Patoots/?curator_clanid=44917508" target="_blank">Wishlist Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>OKiPOKiGAMES</h6>
                        <p>
                            OKiPOKiGAMES is a cute games project focused on exploring wholesome themes and silly content.
                        </p>
                        <div class="dev-social">	
                        <a target="_blank" href="https://okipokigames.com/">
                           https://okipokigames.com/
                        </a>
                        </div>
                    </div>
            </div>
        </div> 
        <!--End of Game Card--> 

               <!--Dead Heat HeartBeat Card-->
            <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/dead heat heart beat.jpg" alt="- A promotional image for Dead Heat Heart Beat">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>Dead Heat HeartBeat</h4>
                        <p>
                            A TTRPG of racing and romance between lesbian horse girls
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://jackrabbitcollective.itch.io/dhhb" target="_blank">Play Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Hunter J Allen</h6>
                        <p>
                        Making games and zines for freaks and fiends
                        </p>
                    </div>
            </div>
        </div> 
        <!--End of Game Card--> 





     

        <!--Hextype Mechapop Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/hextypemechapop.jpg" alt="A promotional image for Hex type Mecha-pop">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>Hextype Mechapop</h4>
                        <p>
                        Type, target, destroy! Defend your town from an astral onslaught. Pilot a mech where your targeting system is controlled by your keyboard. Type to target threats, type your weapon to fire. Keep up with what comes down against you against the soundtrack. The more you type, the more you unlock your overheat weapon. Currently in development - we're looking for feedback. 
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #9BE9FF;" target="_blank">
                        <a target="_blank" href="https://luckyson.itch.io/hextype-mechapop">Play Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Lucky Son</h6>
                        <p>
                        Lucky Son is a small, indie team focused on narrative games combining mechanics with meaning. Our past work includes IGF winner Vessels. 
                        </p>
                    </div>
            </div>
        </div> 
        <!--End of Game Card--> 

        <!--Inferno Card-->
            <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
                <div class="game-card-long">
                    <div>
                        <img src="/img/Archived-img/August-2025/games/Inferno.jpg" alt="- A promotional image for Inferno">
                    </div>  

                    <!--Game Text -->
                    <div>
                        <h4>Inferno</h4>
                        <p>
                            Inferno is a fire-fueled 2D platformer. Play as Kai, a sergeant on a mission to hunt down his traitorous commanding officer. Run, jump, dash and FIRE in this militaristic world to overthrow corruption and ignite your revenge.
                        </p>
                        <button class="button"  style="margin: 10px; background-color: #F2D335;">
                        <a href="https://store.steampowered.com/app/1430170/Inferno/" target="_blank">Wishlist Now</a>
                        </button>

                    </div>

                    <!--Dev Text-->
                    <div>
                        <h6>Bombfire</h6>
                        <p>
                            CJ (he/him) is an artist born and raised in Texas. He is a graphic designer by profession and works in the world of graphic design. He has been in game development since 2016, only ever working on one game, Inferno. Inspired by his love for 90's anime and manga, as well as traditional 2D platformers, he hopes to bring those styles over to Inferno.
                        </p>
                    </div>
                </div>
            </div> 
        <!--End of Game Card--> 

        <!--memories of a postage stamp Card-->
        <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <img src="/img/Archived-img/August-2025/games/memories of a postage stamp.jpg" alt="- A promotional image for memories of postage stamp">
                </div>  

                <!--Game Text -->
                <div>
                    <h4>memories of a postage stamp</h4>
                    <p>
                    a website game about restoring a family stamp collection. in this game, help put together pieces of a stamp collection, fill in the blanks, and inspect details in order to build a memory archive.
                    <br><br>
                    this game was inspired by the process of digitizing my mom and uncle's childhood stamp collection and trying to better understand each one: https://stamps.vidyagiri.com/
                    read more about this project here: <a href="https://cursormag.net/stamparchive" target="_blank">https://cursormag.net/stamparchive</a>
                    <br><br>
                    also this was created for the browser is a game engine class taught by everest pipkin at the school for poetic computation. check out more of the games from the class here: <br><a href="https://docs.google.com/spreadsheets/d/18XBhhWdmURZal7KKys_nZps5celJbn88esXACpU0Efk/edit?gid=938032873#gid=938032873" target="_blank">https://docs.google.com/spreadsheets/d/18XBhhWdmURZal7KKys_nZps5celJbn88esXACpU0Efk/edit?gid=938032873#gid=938032873</a>
                    <br><br>
                    inspirations for this game are collected here: <br><a href="https://www.figma.com/board/KaqVm0oJdhMuAdfZ84Bt5n/stamp-game?node-id=0-1&p=f&t=CXIZmTDjhkfPqNxX-0" target="_blank">https://www.figma.com/board/KaqVm0oJdhMuAdfZ84Bt5n/stamp-game?node-id=0-1&p=f&t=CXIZmTDjhkfPqNxX-0</a>
                    </p>
                    <button class="button"  style="margin: 10px; background-color: #9BE9FF;" target="_blank">
                    <a href="https://vidyagiri.com/sfpc/memories-of-a-postage-stamp" target="_blank">Play Now</a>
                    </button>

                </div>

                <!--Dev Text-->
                <div>
                    <h6>vidya giri</h6>
                    <p>
                    Vidya Giri is an artist, designer, and engineer from Houston, TX, living in San Francisco, CA.
                    </p>
                    <div class="dev-social">	
                    <a target="_blank" href="https://www.instagram.com/vidgiri/">
                        <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;" alt="A link to vidya giri's instagram account.">
                    </a>
                    <a href="https://vidyagiri.com/" target="_blank">https://vidyagiri.com/</a>
                    </div>
                </div>
            </div>
        </div> 
        <!--End of Game Card--> 

 
        
        </div>
    <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <div class="row">
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
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
