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

$headTitle = "Sponsorship - Games Y'all";
$headDescription = "Consider helping Games Y'all roll along through sponsorship. Sponsoring helps us pay for email service, supplies, games, rent, 
equipment maintenance, etc.";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>
    
<!--Sponsorship Text-->
    <div class="row">
        <div class="col-12">
        <h1> Sponsorship </h1>
        <hr>
        <p>
            Interested in sponsoring Games Y’all and the Indie Games programs at The Museum of Human Achievement? All sponsors receive a shoutout on stage at the meetup, a mention in our newsletter, plus company name and logo on our website.
			<br> <br>
            The Museum of Human Achievement is our administrator and 501(c)3 nonprofit fiscal sponsor - your memberships and
            donations are processed through them and are tax deductible to the extent allowed by the law. <br> <br>
        </p>
            
            <button class="button" style="margin: 10px">
            <a href="https://opencollective.com/gamesyall/projects/games-yall-donations#category-CONTRIBUTE">
                Annual, Monthly, or one-time Donations!
            </a>
            </button>

        </div>
        </div>

    </div>
    
<!--Sponsor List-->
    <div class="row">
        <div class="col-12">
        <h1> Thank You to our Sponsors!</h1>
        <hr>
 <div class="col-8">
            <!--Add your Sponsor image here-->

            <img src="/img/sponsors/devolver-digital.png" alt="Devolver Digital">
            <img src="/img/sponsors/mighty-coconut.png" alt="Mighty Coconut">
        </div>
        
        </div>
        </div>

    </div>



    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
