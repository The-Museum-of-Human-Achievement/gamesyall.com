<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "Games Y'all Roundup";
$headDescription = "Games Y'all End of Year Sponsorship Information";
//$headImage = "/img/event-img/GY-Banner-Sep-24.png"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <div class="col-12" style="background-color: white; display: flex; justify-content: center" >
        <object data="img/pdf/gy_roundup.pdf#toolbar=1" type="application/pdf" width="95%" height="850"></object>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
