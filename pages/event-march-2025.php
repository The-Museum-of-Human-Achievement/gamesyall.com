<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "March 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
 $headImage = "/img/event-img/GY-Banner-Mar-25.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-march-2025">March 8th, 2025</a> 
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>March Meetup</h1>
        <h4>March 8th, 2025 - 1-3pm</h4>
    
        <p>
            <!-- Location  -->
            <a href="https://maps.app.goo.gl/zeHbfrSRFEHwh2WY8" target="_blank">2317 Speedway, Austin TX, 78712</a>
            <br /><br />
            <!-- 🎟 This event is free and open to the public but RSVPs for GDC² are encouraged. You can RSVP here:  -->
        </p>
            
        <!--RSVP Button-->
        <!--TODO:get right link-->
        <!-- <button class="button" id="RSVP'"><a href="https://docs.google.com/forms/d/e/1FAIpQLSef5gNmgEmkp9qhzLVNp4VHma8abHqbTIfzqw1FBYlr39sE_w/viewform" target="_blank">RSVP</a></button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <!-- TODO: update image -->
            <img src="/img/event-img/GY-Banner-Mar-25.png" alt="EGaDS in collaboration with Games Y'all presents, GDC squared">
        </div>

        <div class="col-10">
            <!-- Put PR text here -->
             <p>
                Join Games Y'all on Saturday, March 8th from 1-3pm for the Student Showcase at GDC² held at the Gates-Dell Complex (2.216 & 2.100) at UT! There will be food, games, and community. What more could you ask for?
                <br><br>
                GDC² is a yearly event held by the University of Texas' Electronic Game Developers Society (EGaDS!) that aims to bring GDC to developers in Austin! This year, it is an official South by Southwest (SXSW) event!
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
                <img src="/img/Archived-img/February-2025/photos/feb-gy-photo-1.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/February-2025/photos/feb-gy-photo-2.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/February-2025/photos/feb-gy-photo-3.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/February-2025/photos/feb-gy-photo-4.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/February-2025/photos/feb-gy-photo-5.jpg" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/February-2025/photos/feb-gy-photo-6.jpg" style="width: 375px; height: 375px;"> 
            </div>
        </div>
    </div> -->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
