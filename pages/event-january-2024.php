<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "January 2024 Meetup - Games Y'all";
$headDescription = "Fantastic Arcade presents, Games Y'all January Meetup";
$headImage = "/img/event-img/GY-Banner-Jan-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/event-january-2024">January 21, 2024</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <div class="col-4"style="justify-content: left;">
            <h1>January Meetup</h1>
        
            <h4>January 21st, 2024 - 12-3pm</h4>
        
            <p>
                Austin Central Public Library, <a href="https://maps.app.goo.gl/BiMzyohMon7cpD2z5" target="_blank">710 W Cesar Chavez St, Austin, TX 78701</a>
                <br /><br />
                🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.
            </p>
                
            <!--RSVP Button-->
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/17063117/games_yall_january_meetup">RSVP</a></button>
        </div>
                        
        <div class="col-8">
            <!--Add your event image here-->
            <img src="/img/event-img/GY-Banner-Jan-24.png" alt="Fantastic Arcade presents, Games Y'all January Meetup">
        </div>

        <!--If this is a upcoming event, uncomment the button element below-->
        <!-- <br>
        <button class="button" id="Email List"><a href="https://themuseumofhumanachievement.com/forms/email/">Join Email List</a></button> -->

        <div class="col-10">
            <h5>Games Y'all</h5>
            <p>Games Y’all is a monthly meetup presented by the Museum of Human Achievement for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. <p/>
            <br>
            <h5>The Museum of Human Achievement</h5>
            <p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
            <br>
            <h5>Health Details</h5>
            <p>This event will be indoors and outdoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!<p/>
        </div>
    </div>

    <!--Games at the event -->
    <!-- <div>
        <h2 style="text-align: center;">Games This Month</h2>


        <!--How to Say Goodbye card--
        <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
                <div>
                    <img src="/img/Archived-img/November-2023/games/how-to-say-goodbye.jpeg" alt="- A promotional image for How to Say Goodbye">
                </div>  

                <!--Game Text --
                <div>
                    <h4>How to Say Goodbye</h4>
                    <p>How to Say Goodbye is a beautiful narrative puzzle game inspired by picture books. Reorganize the environment and solve puzzles to help a group of ghosts on their quest to finally move on.
                    <br><br>
                    Florian and Baptiste started working together when they were studying graphic design and illustration. They both had a deep interest in storytelling and interactivity. After having spent time at various companies and other game related freelance missions, they join up to get back to what got them talking in the first place: making beautiful, emotional and entertaining games for everyone.
                    </p>
                    <button class="button"  style="margin: 10px; background-color: #F2D335;">
                    <a href="https://store.steampowered.com/app/1709700/How_to_Say_Goodbye/">Play It Here</a>
                    </button>
                </div>

                <!--Dev Text--
                <div>
                    <h6>Developer: Florian Veltman & Baptiste Portefaix</h6>

                    <div class="dev-social">	
                        <h6>@baptisteworks</h6>
                        <a href="https://twitter.com/baptisteworks">
                        <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                        </a>
                        <h6>@FlorianVltmn</h6>
                        <a href="https://twitter.com/FlorianVltmn">
                        <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>-->


    <!--Event Images-->
    <!--Only use this section after an event to house images from the past
    <div class="row">
        <div class="col-12">
            <h2 style="text-align: center;">Gallery</h2>

            <div class="flex-container-row">
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-4.png" style="width: 375px; height: 375px;">
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-6.png" style="width: 375px; height: 375px;">
            </div>
        </div>
    </div>
    -->

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
