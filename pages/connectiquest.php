<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
$headTitle = "ConnectiQuest LARP Information";
$headDescription = "Details about how to play, the playbooks, and how to recreate ConnectiQuest for yourself.";
$headImage = "/img/event-img/GY-Banner-Sep-24.png"; // this is optional! only needed if the page has an image

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
            <a href="/connectiquest">ConnectiQuest</a>
        </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
        <h1>ConnectiQuest</h1>
        
            <h4>ConnectiQuest was held September 20th, 2024 - 7-10pm at<a href="https://maps.app.goo.gl/WWRbD2tmVacS79YH6">The Museum of Human Achievement</a></h4>
        
            <p>
                ConnectiQuest was a way to meet new folks, play new games, and earn cool swag. There were 6 playbooks to complete, each with different themes and objectives.
                <br/><br/>
                For details about attending orgs, games shown, and swag donors see the<a href="/event-september-2024">September 2024 Games Y'all page</a>!
            </p>
        <p>
        
          ConnectiQuest is a LARP based heavily on the incredible<a href="https://www.bigbadcon.com/blog/big-bad-world/">Big Bad World</a>.
           <br /><br />
           A PDF of the playboks can be found here:<a href="https://drive.google.com/file/d/1mgxAoSRpnSriiXoHioVtB-OXg4djOfhU/view?usp=sharing">on Google Drive</a>.
           <br /><br />
          The layout used to make these cards can be found on<a href="www.dextrous.com.au/layouts/shared/JFKByVHuOsMbNTEZO8AeKUFMmJU2/sOApq6hbwVjUb5p0YRxn">Dextrous</a>
          <br /><br />
          The playbooks are all below the data from these is being pulled from this<a href="https://docs.google.com/spreadsheets/d/1Y0uecFSYUsVOOFncs_mWSXvMRzwkKJt4tBupt7AaAGQ/edit?gid=0#gid=0">Google Docs spreadsheet</a>.
				<p/>
                <img src="/img/misc-img/connectiquest-how-to-play.png" alt="How to Play
Get a playbook
Head to the Quest Desk to pick up a playbook that sounds interesting!
Different playbooks contain different types of objectives, the 'Basic Moves' are shared between most playbooks.

turn in playbook
Once you have marked all the XP slots on a playbook head back to the Quest Desk to turn it in and grab a piece of swag.

complete objectives
Review your playbook to determine how to 'Mark XP' ConnectiQuest is a grade your own homework type of event. As you complete objectives mark off experience on your track.

repeat
Pick a new playbook that you haven't completed yet and get to work."><br/>
    <img src="/img/misc-img/connectiquest-card-networker.png" alt="Example playbook 'The Networker' NETWORKER You are here to meet new people and make new friends. You know that ships rise together and making friends at your level is just as good as those above and below!
PRINCIPLES
Prioritize the comfort of yourself and others
Make room in your circle and space
Learn about new organizations and people
Learn the names of those around you.
Mark XP
Whenever you ask someone.. About their discipline in games
how they got to where they are in games
what they enjoy most in games
what they enjoy most outside of games

Basic Moves - Also mark xp whenever you:
Introduce yourself to someone with your name, pronouns, and the group you most attend
Check on someone's well being
en you mark your 5th XP
Turn in your playbook for a new one">

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
