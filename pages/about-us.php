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

$headTitle = "About Us - Games Y'all";
$headDescription = "Games Y’all is a meetup presented by the Museum of Human Achievement, held every month at venues around Austin for indie devs, digital artists, and games fans.";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <div class="row" style="margin-bottom: 0px;">
        <div class="col-12" >
            <h1>About Us</h1>
        </div>

        <div class="col-12">
            <h2>Who are we?</h2>
        </div>
    </div>

    <!--Games Y'all-->
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-10">
            <p>
            <b> Games Y’all </b> is a meetup presented by the Museum of Human Achievement, 
            held every month at venues around Austin for indie devs, digital artists, and 
            games fans. Games Y’all celebrates, amplifies, and supports the unique and 
            underrepresented within indie games and beyond.Come play games, share what 
            you’re working on, hang out and meet friends. Game submissions are accepted on 
            a rolling basis, with occasional themed calls for specific months. Throughout the 
            year we host Game Jams, Digital Do-Si-Dos and our Game of the Month meetup.
            <a href="https://www.gamesyall.com/ ">gamesyall.com/ </a>
            </p>
        </div>

        <div class="col-2">
            <img src="/img/Social-buttons/games-yall-logo-square.png" alt="The games Y'all logo" style="width:72px; height:72px;">
        </div>
    </div>

    <!--MoHA-->
    <div class="row">
        <div class="col-10">
            <p><b> The Museum of Human Achievement </b> is a multi-disciplinary art space and 
            non-profit organization in Austin, Texas. We cultivate new work, community, and vibe 
            by providing radically affordable arts space to support artists and audiences in the
                creation of new ideas. MoHA fosters unconventional interactions between artists and 
                audiences with a focus on community building, the open exchange of ideas, and creative 
                work that goes beyond traditional notions of failure or success.
                <a href="https://themuseumofhumanachievement.com/ ">themuseumofhumanachievement.com </a>
                </p>
        </div>
        <div class="col-2">
            <img src="/img/Social-buttons/MoHA_icon-blue.png" alt="The Fantastic arcade logo" style="width:72px; height:72px;">
        </div>
    </div>

    <!--Drop down demo-->

    <!--Values-->
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-12">
            <h2 style="text-align: center;">Values</h2>
        </div>
    </div>
    <div class="row" style=" text-align: center;">
        <div class="col-3">
            <h4>Diversity</h4>
            <p>Uplift, support, and promote underrepresented voices and creations </p>
        </div>
        <div class="col-3">
            <h4>Curiosity </h4>
            <p> Foster collaboration, discovery, and knowledge sharing</p>
        </div>
        <div class="col-3">
            <h4>Play</h4>
            <p> Celebrate creativity, innovation, and experimentation </p>
        </div>
        <div class="col-3">
            <h4>Community </h4>
            <p>  Nurture an inclusive, trusting, and supportive space </p>
        </div>             
    </div>

    <!--History-->
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-12">
            <h2>History</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <p>
                From 2010 to 2018, Juegos Rancheros was a monthly meetup for indie game developers and the primary curator and organizer of 
                Fantastic Arcade, which took place every September alongside Fantastic Fest, the yearly genre film festival put together by Austin’s 
                Alamo Drafthouse.
                <br> <br>
                    In 2019 Fantastic Arcade merged with The Museum of Human Achievement and presented the Fantastic Arcade 
                Retro(spective). Read more about the two orgs joining forces <a href="https://fantasticarcade.com/news/2019/06/17/juegos_and_moha">here.</a>
                <br> <br>
                In 2020 the new Fantastic Arcade committee gathered input from the community to build a more inclusive and supportive indie game community in Austin. Read about the process <a href="https://fantasticarcade.com/news/2020/04/04/Community_Letter">here.</a>  
                <br> <br>
                In March 2022, we launched Games Y'all! Read more about it <a href="https://fantasticarcade.com/news/2020/04/04/GamesYall_Announcement">here</a>. 
                <br></p>
            <p>The annual festival is on pause, stay tuned! </p>
        </div>
    </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
