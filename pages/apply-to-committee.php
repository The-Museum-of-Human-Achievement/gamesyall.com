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

$headTitle = "Apply To Committee - Games Y'all";
$headDescription = "We are seeking new voices to shape the reality of Fantastic Arcade and Games Y’all.";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

  <div class="row" style="margin-bottom: 0px;">
      <div class="col-2"></div>
      <div class="col-8">
        <h1>Indie Games Committee Application</h1>
        <p>
          We are seeking new voices to shape the reality of Fantastic Arcade and Games Y’all. <br> <br>
          
          We strive for strong representation of BIPOC, LGBTQIA+, female, gender nonbinary, and disabled individuals in our 
          leadership to best serve our diverse community. Folks of identities that are underrepresented in the games industry 
          are especially encouraged to apply (whether you work in the industry or not). <br> <br>

          Currently, we are in the process of updating our application form and committee systems to match our changing needs
          and reflect what we've heard from community members. There are many ways we hope to have y'all involved! Stay tuned 
          for more information on our committee program. In the meantime, let us know you're interested or sign up to <a href="./volunteer">volunteer</a>!<br> <br>
        </p>

        <p>
          Questions? Reach out to jay@themuseumofhumanachievement.com
        </p>
      </div>
      <div class="col-2"></div>
    </div>

    <div class="row" style="text-align: center;">
      <div class="col-12">
        <button class="button" style="align-items: center;">
          <a href="https://form.jotform.com/231844967692169"> I'm interested!</a>
        </button>
      </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
