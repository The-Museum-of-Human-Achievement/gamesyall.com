<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "February 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all March Meetup";
//TODO: update headImage
// $headImage = "/img/event-img/GY-Banner-Feb-25.png"; // this is optional! only needed if the page has an image

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
            <!-- <a href="https://maps.app.goo.gl/xTKBS7ctHXhmwhvH7" target="_blank">1908 Kramer Ln, Suite 250, 78758</a>
            <br /><br />
            🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome. -->
        </p>
            
        <!--RSVP Button-->
        <!--TODO:get right link-->
        <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/22777518/games_yall_february_powerpoint_night" target="_blank">RSVP</a></button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <!-- TODO: update image -->
            <!-- <img src="/img/event-img/GY-Banner-Feb-25.png" alt="The Museum of Human Achievement presents, Games Y'all February Meetup"> -->
        </div>

        <div class="col-10">
            <!-- Put PR text here -->
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
