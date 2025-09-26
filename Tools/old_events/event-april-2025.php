<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "April 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all April Meetup";
//TODO: update headimage
$headImage = "/images/event-img/GY-Banner-April-25.png"; // this is optional! only needed if the page has an image

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
        <button class="button" id="RSVP'"><a href="https://withfriends.co/event/23009692/games_yall_april" target="_blank">RSVP</a></button>
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <!-- TODO: update image -->
            <img src="/images/event-img/GY-Banner-April-25.png" alt="The Museum of Human Achievement presents, Games Y'all January Meetup">
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
    
    <!--Games at the event-->
    <div>
        <!-- TODO: fill out game section -->
        <!-- <h2 style="text-align: center;">Games This Month</h2> -->
       
    <!--End of Games at the event-->
    </div> 
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past-->
    <!-- <div class="row">-
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/images/Archived-img/February-2025/photos/feb-gy-photo-1.jpg" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/February-2025/photos/feb-gy-photo-2.jpg" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/February-2025/photos/feb-gy-photo-3.jpg" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/February-2025/photos/feb-gy-photo-4.jpg" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/February-2025/photos/feb-gy-photo-5.jpg" style="width: 375px; height: 375px;"> 
                <img src="/images/Archived-img/February-2025/photos/feb-gy-photo-6.jpg" style="width: 375px; height: 375px;"> 
            </div>
        </div>
    </div> -->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
