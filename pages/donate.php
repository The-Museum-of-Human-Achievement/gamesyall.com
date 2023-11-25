<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
//
// Uses the following variables if set before "require():
//      $headTitle = "Cool Page Title - Games Y'all"; 
//      $headDescription = "A longer description of the page in question, with a bit more information than the title.";
//      $headImage = "/img/event-img/some-cool-event-image.jpg";

$headTitle = "Donate - Games Y'all";
$headDescription = "Consider helping Games Y'all roll along through a donation. Donations help us pay for email service, supplies, games, rent, 
equipment maintenance, etc.";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!--Donation Text-->
    <div class="row">
        <div class="col-12">
        <h1> Donations </h1>
        <hr>
        <p>
            Consider helping Games Y'all roll along through a donation. Donations help us pay for email service, supplies, games, rent, 
            equipment maintenance, etc.
            
            The Museum of Human Achievement is our administrator and 501(c)3 nonprofit fiscal sponsor - your memberships and
            donations are processed through them and are tax deductible to the extent allowed by the law. <br> <br>

            If your workplace does donation matching or corporate giving, let’s talk! <br> <br>
        </p>
            
            <button class="button" style="margin: 10px">
            <a href="https://opencollective.com/gamesyall">
                Monthly or one-time Donations!
            </a>
            </button>

            <button class="button" style="margin: 10px">
            <a href="https://account.venmo.com/u/TheMuseum">
                Venmo
            </a>
            </button>
        </div>
        </div>

    </div>

    <!--Help us out in other ways-->
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-12" style="text-align: center;">
        <h4 >Can't donate but still want to help out?</h4>
        <p>
            Consider Volunteering, submitting a game, or joining a committee. 
        </p>
        </div>
    </div>
    <div class="row">
        <!--Volunteer-->
        <div class="col-4" style="text-align: center;">
        <!--
        <img src="../img/horse-img/horse-volunteer-blue.png" class="horse-img" style="  margin-left: auto; margin-right: auto; padding-left: 5px;">
        <br>
        -->
        <button class="button" style="  margin-left: auto; margin-right: auto;">
            <a href="./volunteer.html"> Volunteer </a>
        </button>
        </div>

        <!--Submit a Game-->
        <div class="col-4" style="text-align: center;">
        <!--
        <img src="../img/horse-img/horse-submit.png" class="horse-img" style="  margin-left: auto; margin-right: auto; padding-left: 5px;">
        <br>
        -->
        <button class="button" style="  margin-left: auto; margin-right: auto;">
            <a href="./Submit-a-game.html"> Submit a Game </a>
        </button>          
    </div>
        
        <!--Join the Committee-->
        <div class="col-4" style="text-align: center;">
        <!--
        <img src="../img/horse-img/horse-standing-left - Crop.png" class="horse-img" style="  margin-left: auto; margin-right: auto; padding-left: 5px;">
        <br>
        -->
        <button class="button" style="  margin-left: auto; margin-right: auto;">
            <a href="./apply-to-committee.html"> Join a Committee </a>
        </button>
        </div>          
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
