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

$headTitle = "Submit Your Game - Games Y'all";
$headDescription = "Our mission is to celebrate, amplify, and support unique games and underrepresented groups within indie games and beyond. This form and our selection process are an extension of our mission.";
$headImage = "/img/misc-img/GY-open-call-general.png";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

<Div class="row">
            <div class="col-2"></div>
            <div class="col-8" style="text-align: left;">
                 <h2>Submit Your Game!</h2>
                  <img src="/img/misc-img/GY-open-call-general.png" alt="Fantastic Arcade presents, our open call for indie games. Caption reads rolling deadline apply today and features a pixelated armadillo inspired from the game armadillo run.">
                
                <hr>
                <h2>How This Works</h2>
                <p>Our mission is to celebrate, amplify, and support unique games and underrepresented groups within indie games and beyond. This form and our selection process are an extension of our mission. We are specifically looking to uplift smaller teams, smaller games, and projects that don't quite fit the "games" mold.
<br><br>
We use the words game and project interchangeably in this form but, if selected, we will be in contact to ask which term you prefer for your project! Things that aren't necessarily games like net art, interactive media and experimental controllers are also accepted. 
<br><br>
Show us your stuff y’all! New or old, finished or beta, game or not-quite game. 
<br><br>
If you have a project that doesn't fit the form please email us at games@themuseumofhumanachievement.com.
<br><br>
Applications are reviewed by the selection committee on a rolling basis and don't expire. If accepted, we'll reach out to discuss schedule and logistics. Every month we will post a deadline to be featured for our next roundup, but don’t fret! Games that do not get selected will be considered for future meetups.

             </p>
                <button class="button">
                    <a href="https://form.jotform.com/231816434607153">Submission Form</a>
                </button>
            </div>
            <div class="col-2"></div>
        </Div>

        <div class="row" style="margin-bottom: 0px;">
            <div class="col-12">
                <h2 style="text-align: center;">Past Submissions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="game-card">
                    <h4>Star Stuff</h4>
                      <a href="./event-january-2023">
              <img src="/img/Archived-img/January-2023/games/star-stuff.jpeg" class="game-card-img" alt="A rectangular promotional image for Star Stuff featuring a Red Star character from the game with its yellow robotic companion standing on a space platform with ringed planets in the background" style="box-shadow: 5px 10px;">
            </a>
            
                  </div>  
            </div>
            <div class="col-4">
                <div class="game-card">
                          <h4>The Barnacle Goose Experiment</h4>
                    <a href="./event-december-2022">
              <img src="/img/Archived-img/December-2022/games/barnacle-goose.png" class="game-card-img" alt="A square promotional image for The Barnacle Goose Experiment. It features the game title in gothic black text on a white background." style="box-shadow: 5px 10px;">
            </a>
            
                  </div>  
            </div>
            <div class="col-4">
                <div class="game-card">
                    <h4>Art7</h4>
                    <a href="./event-october-2022">
              <img src="/img/Archived-img/October-2022/games/art-7.png" class="game-card-img" alt="This is a promotional image for ART7 featuring pixel art of the word “love” written on a canvas that is set on an easel. It is black and white." style="box-shadow: 5px 10px;">
            </a>
                  </div>  
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
