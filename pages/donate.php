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
        <div class="col-10">
         <img src="/img/misc-img/donations.png" alt="Sponsor Games Y'all" width="400" height="400" style="float:left">
            Consider helping Games Y'all roll along through a donation. Donations help us pay for email service, supplies, games, rent, 
            equipment maintenance, etc.
            <br> <br>
            The Museum of Human Achievement is our administrator and 501(c)3 nonprofit fiscal sponsor - your memberships and
            donations are processed through them and are tax deductible to the extent allowed by the law.

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
    
        <!--Matching Gift Programs Text-->
    <div class="row">
        <div class="col-12">
        <h1> Matching Gift Programs </h1>
        <hr>
        <p>
        Employee matching gift programs are corporate giving programs in which the company matches donations made by employees to eligible nonprofit organizations. It's an easy way to double your contribution to us!
     	  <br> <br>
	 	Do you work for any of the following companies:
        <br> <br>
		Intel, Microsoft, Activision Blizzard, Epic Games, Unity, NVIDIA, Riot Games, Sony, Nintendo, Zynga, Electronic Arts, Roblox, Apple, Meta, RetailMeNot, IBM, AMD, Dell, Oracle, Silicon Labs, Adobe, or Samsung Austin Semiconductor.
		<br> <br>
      	 If your workplace does donation matching or corporate giving, let’s talk! You can email us at games@themuseumofhumanachievement.com
        </p>
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
        <img src="/img/horse-img/horse-volunteer-blue.png" class="horse-img" style="  margin-left: auto; margin-right: auto; padding-left: 5px;">
        <br>
        -->
        <button class="button" style="  margin-left: auto; margin-right: auto;">
            <a href="./volunteer"> Volunteer </a>
        </button>
        </div>

        <!--Submit a Game-->
        <div class="col-4" style="text-align: center;">
        <!--
        <img src="/img/horse-img/horse-submit.png" class="horse-img" style="  margin-left: auto; margin-right: auto; padding-left: 5px;">
        <br>
        -->
        <button class="button" style="  margin-left: auto; margin-right: auto;">
            <a href="./submit-a-game"> Submit a Game </a>
        </button>          
    </div>
        
        <!--Join the Committee-->
        <div class="col-4" style="text-align: center;">
        <!--
        <img src="/img/horse-img/horse-standing-left - Crop.png" class="horse-img" style="  margin-left: auto; margin-right: auto; padding-left: 5px;">
        <br>
        -->
        <button class="button" style="  margin-left: auto; margin-right: auto;">
            <a href="./apply-to-committee"> Join a Committee </a>
        </button>
        </div>          
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
