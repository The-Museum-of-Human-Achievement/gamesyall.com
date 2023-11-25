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

$headTitle = "Example Page - Games Y'all";
$headDescription = "A longer description of the page in question, with a bit more information than the title.";
$headImage = "/img/event-img/EXAMPLE.png"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    Your page content here!

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
