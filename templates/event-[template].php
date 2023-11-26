<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "[Date] Meetup - Games Y'all";
$headDescription = "[Descriptive text about the event]";
$headImage = "/img/Archived-img/[Month-year]/games/[Game image]]"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!--BREAD CRUMS-->
        <!--
        <div class="row" style="margin-bottom: 0px; margin-top: 0px;">
            <div class="col-4" style="justify-content: left;">
                <p>
                    <a href="/events">Events</a> 
                    >
                    <a href="/event-[template]">[Date]</a>
                </p>
            </div>
        </div>
        -->

        <!--Content and infomration-->
        <div class="row">
            <div class="col-4">
                <h1>[Date]</h1>
                <p>[Descriptive text about the event]</p>

                <!--If this is a upcoming event, uncomment the button element below-->
                <!--
                    <button class="button" id="rsvp-button">RSVP</button> 
                -->
            </div>
            <div class="col-8">
                <!--Add your event image here-->
                <img src="" alt="">
            </div>
        </div>

        <!--Games at the event -->
          <!--[GAME] card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game image]]">
              </div>  

              <!--Game Text -->
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="[Hyperlink to game]">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>[Dev name or team name]</h6>
                <p>
                  [Text about dev]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social media handle]</h6>
                  <a href="[hyperlink to social]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--[Game] Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game Image]">
              </div>  

              <!--Game Text -->
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="[Hyperlink to game page]">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By [Dev Name or team name]</h6>
                <p>
                  [Text on dev or team]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social]</h6>
                  <a href="[Hyperlink to dev's twitter]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--[GAME] card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game image]]">
              </div>  

              <!--Game Text -->
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="[Hyperlink to game]">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>[Dev name or team name]</h6>
                <p>
                  [Text about dev]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social media handle]</h6>
                  <a href="[hyperlink to social]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--[Game] Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game Image]">
              </div>  

              <!--Game Text -->
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="[Hyperlink to game page]">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By [Dev Name or team name]</h6>
                <p>
                  [Text on dev or team]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social]</h6>
                  <a href="[Hyperlink to dev's twitter]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--[GAME] card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game image]]">
              </div>  

              <!--Game Text -->
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="[Hyperlink to game]">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>[Dev name or team name]</h6>
                <p>
                  [Text about dev]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social media handle]</h6>
                  <a href="[hyperlink to social]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!--[Game] Card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/[Month-year]/games/[Game Image]">
              </div>  

              <!--Game Text -->
              <div>
                <h4>[Game Title]</h4>
                <p>
                  [Game Text]
                </p>
                <button class="button"  style="margin: 10px;">
                  <a href="[Hyperlink to game page]">Play It Here</a>
                </button>
              </div>

              <!--Dev Text-->
              <div>
                <h6>By [Dev Name or team name]</h6>
                <p>
                  [Text on dev or team]
                </p>

                <div class="dev-social">
                  <h6>[Dev's social]</h6>
                  <a href="[Hyperlink to dev's twitter]">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>          

        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
        <!--
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="[Event image here]" style="width: 375px; height: 375px;"> 

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
