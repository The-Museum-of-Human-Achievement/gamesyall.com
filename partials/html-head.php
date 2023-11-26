<?php

// Populate meta info defaults
if (empty($headTitle))
{
    $headTitle = "Games Y'all";
}
if (empty($headDescription))
{
    $headDescription = "Games Y’all is an Austin indie games meetup held every month for indie devs, digital artists, and games fans.";
}
if (empty($headImage))
{
    $headImage = "/img/games-yall-logo-full.jpg";
}

?>

<head>
    <title><?php echo($headTitle) ?></title> 
    <meta name="description" content="<?php echo($headDescription) ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo($headTitle) ?>">
    <meta property="og:description" content="<?php echo($headDescription) ?>">
    <meta property="og:url" content="https://gamesyall.com">
    <meta property="og:site_name" content="Games Y'all">
    <meta property="og:image" content="<?php echo($headImage) ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo($headTitle) ?>">
    <meta name="twitter:description" content="<?php echo($headDescription) ?>">
    <meta name="twitter:image" content="<?php echo($headImage) ?>">

    <link rel="stylesheet" href="/mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Roboto&display=swap" rel="stylesheet">

    <!--Encoding Information-->
    <meta charset="UTF-8">

    <!--Favicon Information-->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--Java Script reference-->
    <script src="/javaScript/myscripts.js"></script>        
</head>