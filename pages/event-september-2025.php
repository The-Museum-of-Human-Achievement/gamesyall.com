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
            Captain Quack's Bakery and Coffee house <a href="https://maps.app.goo.gl/q19jEF1Ps2LvSkuY8" target="_blank">5326 Menchaca Rd, Austin, TX 78745</a>
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
        </div>
    </div>

    <!--Games at the event-->
    <div>
        <h2 style="text-align: center;">Games This Month</h2>        
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
