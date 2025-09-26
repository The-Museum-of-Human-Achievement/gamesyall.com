<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "January 2025 Meetup - Games Y'all";
$headDescription = "Games Y'all January Meetup";
$headImage = "/images/event-img/GY-Banner-Jan-25.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-january-2025">January 26th, 2025</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
        <h1>January Meetup</h1>
        <h4>January 26th, 2025 - 7-9pm</h4>
    
        <p>
            <!-- The Museum of Human Achievement  -->
            <a href="https://maps.app.goo.gl/xTKBS7ctHXhmwhvH7" target="_blank">1908 Kramer Ln, Suite 250, 78758</a>
            <br /><br />
            <!-- 🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome. -->
        </p>
            
        <!--RSVP Button-->
        <!-- <button class="button" id="RSVP'"><a href="https://withfriends.co/event/22573514/games_yall_january">RSVP</a></button> -->
    </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/images/event-img/GY-Banner-Jan-25.png" alt="The Museum of Human Achievement presents, Games Y'all January Meetup">
        </div>

        <div class="col-10">
          <p>
            We’re starting off 2025 with a Games Y'all x IGDA collab meetup to showcase projects developed from ATX Global Game Jam 2025! See you there on January 26th from 7-10pm at 1908 Kramer Ln, Suite 250, 78758.
            <br><br>
            Interested in participating in the ATX Global Game Jam? Read more info here: <a href="https://globalgamejam.org/jam-sites/2025/austin-ggj-2025" target ="_blank">https://globalgamejam.org/jam-sites/2025/austin-ggj-2025</a>            
          </p>
          <br>

          <h5>Venue + Health Details</h5>
            <p>This event will be indoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!</p>
            <br>

          <h5>IGDA - ATX</h5>
            <p>The mission of the International Game Developer Association - Austin (IGDA - ATX) chapter is supporting and empowering game developers in the greater Austin area to achieve fulfilling and sustainable careers, along with bridging the gap between both new and old game devs. </p>
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
          <h2 style="text-align: center;">Games This Month</h2>
          <p style="text-align: center;">
            This month's games were made during the ATX Global Gam Jam 2025 and can be found here: <a href="https://globalgamejam.org/group/11685/games" target="_blank">https://globalgamejam.org/group/11685/games</a>
          </p>
        </div>
    <!--Event Images-->
    <!--Only use this section after an event to house images from the past-->
    <div class="row">
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <!-- <img src="/images/Archived-img/September-2024/photos/sep-gy-photo-1.png" style="width: 375px; height: 375px;">  -->
                 <img src="/images/Archived-img/January-2025/photos/GY-january-1.png" style="width: 375px; height: 375px;">
                 <img src="/images/Archived-img/January-2025/photos/GY-january-2.png" style="width: 375px; height: 375px;">
                 <img src="/images/Archived-img/January-2025/photos/GY-january-3.png" style="width: 375px; height: 375px;">
                 <img src="/images/Archived-img/January-2025/photos/GY-january-4.png" style="width: 375px; height: 375px;">
                 <img src="/images/Archived-img/January-2025/photos/GY-january-5.png" style="width: 375px; height: 375px;">
                 <img src="/images/Archived-img/January-2025/photos/GY-january-6.png" style="width: 375px; height: 375px;">
            </div>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
