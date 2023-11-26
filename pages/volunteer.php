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

$headTitle = "Volunteer - Games Y'all";
$headDescription = "Wear a cool lanyard and help set up, check in guests, whisper nice things to computers, demo games, etc. Help all night or just for a bit.";
$headImage = "/img/Archived-img/July-2022/photos/GY-july-1.jpeg";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!-- Volunter Information-->
    <div class="row">
        <div class="col-4">
          <h1> Volunteer </h1>
          <p>
            Join in! Wear a cool lanyard and help set up, check in guests, whisper nice things to computers, demo games, etc.
             Help all night or just for a bit.
          </p>
          <button class="button" style="margin-left: 0px;">
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </button>
        </div>

        <div class="col-8">
          <img src="/img/Archived-img/July-2022/photos/GY-july-1.jpeg" alt="Three volunteers smiling at the information both.">
        </div>
      </div>

      <!-- Types of volunteers-->
      <div class="row" style="margin-bottom: 0px;">
        <!--Floater-->
        <div class="col-4">
          <div class="flex-container-column" style="min-height: 280px;">
            <h3>Floater</h3>
            <p>
              The floater has many hats and more hands; they wander around the event making sure everyone is having fun and helping out where they can.
            </p>
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </div>
        </div>

        <!--Greeter-->
        <div class="col-4">
          <div class="flex-container-column" style="min-height: 280px;">
            <h3>Greeter</h3>
            <p>
              The greeter is our friendly frontliners; they help people sign in and answer any questions that might pop up.
            </p>
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </div>
        </div>

        <!--Games Helper-->
        <div class="col-4">
          <div class="flex-container-column" style="min-height: 280px;">
            <h3>Games Helper</h3>
            <p>
              Each of our games on display has a games helper to make sure the computer runs smoothly and the controllers are sanitized.
            </p>
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </div>
        </div>
      </div>

      <!--Types of voluenteers 2-->
      <div class="row" style="margin-bottom: 0px;">
        <!--Set Up-->
        <div class="col-4">
          <div class="flex-container-column" style="min-height: 280px;">
            <h3>Set Up</h3>
            <p>
              Do you like lifting computers, running cables, and "play-testing" games. Then the set up team may be the perfect fit.
            </p>
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </div>
        </div>
        <!--Tare Down-->
        <div class="col-4">
          <div class="flex-container-column" style="min-height: 280px;">
            <h3>Teardown</h3>
            <p>
              The teardown team helps clean up after the show, packing and moveing all of the games back into storage.
            </p>
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </div>
        </div>
        <!--Transportation-->
        <div class="col-4">
          <div class="flex-container-column" style="min-height: 280px;">
            <h3>Transportation</h3>
            <p>
              Do you have a big'ol car? If you would like to help move some equipment before the show, transportation team is the place to be.
            </p>
            <a href="https://themuseumofhumanachievement.com/forms/volunteer/"> Sign Up</a>
          </div>
        </div>        

      </div>

      <div class="row">
        <div class="col-12" style="text-align: center;">
          <p> These roles are general examples and are subject to change.</p>
        </div>

    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
