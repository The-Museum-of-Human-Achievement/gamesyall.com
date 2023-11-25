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

$headTitle = "Season of GIFing - A Digital Do-Si-Do - Games Y'all";
$headDescription = "Let’s celebrate the end of 2022 by making animated GIFs for each other! Think secret santa, but more pixels and more lolz.";
$headImage = "/img/event-img/DA-season-of-gifing-22.gif"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!--BREAD CRUMS-->
  
    <div class="row" style="margin-bottom: 0px; margin-top: 0px;">
            <div class="col-4" style="justify-content: left;">
                <p>
                    <a href="/events">Events</a> 
                    >
                    <a href="/event-season-of-gifing">December 31st, 2022</a>
                </p>
            </div>
        </div>
  

       <!--Content and infomration-->
        <div class="row">
                 
            <div class="col-8">
                <!--Add your event image here-->
                <img src="../img/event-img/DA-season-of-gifing-22.gif" alt="A GIF with the words Season of Gifing A Digital Do-Si-Do. There are flashing christmas lights on a large string above 5 small evergreen trees with christmas lights on snow capped brown hills.'">
            </div>
            
             <div class="col-10">
                    <h1>Fantastic Arcade and The Museum of Human Achievement present</h1>
                    <br>
<h2>✨ 🎁 Season of GIFing - A Digital Do-Si-Do 🎁 ✨</h2>
<br>
                <button class="button" id="Join Our Discord"><a href="https://discord.gg/zUGqntHu">Join Our Discord</a></button <br>
<br><br>		
<p>Let’s celebrate the end of 2022 by making animated GIFs for each other! Think secret santa, but more pixels and more lolz. Sign up by Dec 9, submit on Dec 31. 
 <br><br>
• Friday Dec 9 - Sign up deadline. Join the discord channel!
<br><br>
• Friday Dec 16 - Do-si-do! We’ll tell you who you’re making a .GIF for and what their prompt is. Interpret your prompt however you wish - get literal, get festive, get silly.
<br><br>
• Saturday Dec 31 - Post what you made in the #season-of-gifing channel and tag your partner! </p>
<br><br>
<p>
☁️🌵 Swing your Partner 🌵☁️
<br>
○Howdy Y’all! This channel is shared between the Fantastic Arcade and The Museum of Human Achievement Discord Servers so game devs and artists can hang out and make stuff together.
<br>
○We’re using Connections Bot, which has some quirks. Emoji reactions are turned off, but other features seem to work fine. Let us know if anything seems funky.
<br>
○Add some inspo to your wishlist to inspire your dream GIF. This could be a favorite phrase, song, cozy location, pastry, deodorant scent, texture, type of cat, etc!
<br><br>

🎨 Animated GIFs?! 🎨 
<br>
○ Even if you’ve never made a GIF before, we encourage you to join in and give it a shot!
<br>
○ GIFs can be made on a computer or smartphone from photos, drawings, pixel art, game engine exports, screenshots, video clips, etc.
<br>
○ Try opening a .gif in Photoshop or Gimp to see what its guts look like. You can “remix” an 
existing GIF this way by altering the individual frames of the animation
<br><br>

☃️ Sign Up ☃️
<br>
○ DM @Rachel or @Jay that you’d like to join and we’ll assign you the Season of GIFing role.
<br>
○ In your DM include your email address and your wishlist.
<br>
○ Your wishlist should serve as a prompt for someone else to make your GIF.
<br>
○ You’ll receive a message on Friday Dec 16th telling you who you’re making something for and what their prompt is!
<br><br>

❄️ Rules/Details ❄️
<br>
○ We’re here for a good time! Keep it friendly and positive. When in doubt, read the #rules.
<br>
○ Don’t leave your GIF recipient hanging! By opting in, you are agreeing to make and post a GIF on Dec 31st.
<br>
○ Questions? Contact @Jay RG#4863 or @Rachel Stuckey#8121 on Discord or by email at jay@themuseumofhumanachievement.com or rachel@themuseumofhumanachievement.com

<br><br>
🎄 Guides and Tools 🎄
<br>
○ Keep your file size under 8MB
<br>
○ <a href="https://neondigitalarts.com/how-to-make-a-gif-using-gimp-software/">Tutorial for making GIFs from image files using GIMP</a>
<br>
○  <a href="https://medium.com/@EightyLevel/how-to-make-and-share-gifs-of-your-ue4-or-unity-game-f42e38a9da42"> Tutorial for making GIFs using Photoshop</a>
<br>
○ <a href="https://www.screentogif.com/">Screen to GIF tool</a>
<br>
○ <a href="https://www.commonsense.org/education/articles/5-free-gif-apps-for-students-and-teachers">Free GIF making tools</a>
<br>
○ <a href="https://www.pixilart.com/">Pixel Art + GIF Maker Tool</a>
</p>

<!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
    
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="../img/Archived-img/December-2022/gifing/Cherrys - By Ish for Lady Cherry.gif" alt="Cherrys">
                    <p> .GIF Art by Ish Archbold<p/>
                    <img src="../img/Archived-img/December-2022/gifing/Cube Schematic - By Rachel for Adam.gif" alt="Cube Schematic">
                     <p> .GIF Art by Rachel Stuckey<p/>
                    <img src="../img/Archived-img/December-2022/gifing/Cumbia Cryptid - By Andrew for Jay.gif" alt="Cumbia Cryptid">
                     <p> .GIF Art by Andrew Gansky<p/>
                    <img src="../img/Archived-img/December-2022/gifing/dragon gargoyle in a bowl of noodles - By Vidya for Alice.gif" alt="dragon gargoyle in a bowl of noodles">
                     <p> .GIF Art by Vidya<p/>
                    <img src="../img/Archived-img/December-2022/gifing/Goth Lisa Frank - By Lady Cherry for Rachel.gif" alt="Goth Lisa Frank">
                     <p> .GIF Art by Lady Cherry<p/>
                    <img src="../img/Archived-img/December-2022/gifing/Pangolin - By Dylan for Vidya.gif" alt="Pangolin">
                     <p> .GIF Art by Dylan Ledbetter<p/>
                    <img src="../img/Archived-img/December-2022/gifing/Pasta nonstop 24 7 and or the downfall of academia - By Seppi for Andrew.gif" alt="Pasta nonstop 24 7 and the downfall of academia">
                    <p> .GIF Art by Seppi P<p/>
                    <img src="../img/Archived-img/December-2022/gifing/raccoons, skunks, coatimundis, possums underwater - By Jay for Ish.gif" alt="raccoons, skunks, coatimundis, possums underwater">
                    <p> .GIF Art by Jay Roff-Garcia<p/>
                    <img src="../img/Archived-img/December-2022/gifing/blackhole - by Alice for Lauren.gif" alt="Blackhole">
                     <p> .GIF Art by Alice<p/>
                    <img src="../img/Archived-img/December-2022/gifing/Alice in Wonderland's Cheshire Cat - By Adam for Seppi.gif" alt="Alice in Wonderland's Cheshire Cat">
                    <p> .GIF Art by Adam Zeiner<p/>
                    <img src="../img/Archived-img/December-2022/gifing/all your dreams - By Lauren for Dylan.gif" alt="all your dreams">
                     <p> .GIF Art by Lauren Schroeder<p/>
            </div>
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
