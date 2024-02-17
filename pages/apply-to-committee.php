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
           </p>

        <p>
          Questions? Reach out to jay@themuseumofhumanachievement.com
        </p>
        
   <div class="row" style="text-align: center;">
      <div class="col-12">
        <button class="button" style="align-items: center;">
          <a href="https://form.jotform.com/231844967692169"> I'm interested!</a>
        </button>
      </div>
    </div>
    
<h1>Committees Roles</h1>
<p>
<h4>General Committee Members - Jonathan Levine, Cat Musgrove</h4>
This role is for NEW Indie Games committee members. General Committee Members will assist in person at meetups as well as offering support to committee coordinators in their tasks. Committee members will receive tasks from the committee secretary and chair.
<br><br>
<h4>Chair - Coby West</h4>
This role organizes and leads committee meetings. They write committee meeting agendas and help organize future Games Y’all meetups. They speak directly to MoHA Staff with the needs  and concerns of the committee. They are available during Games Y'all events to help the event run smoothly, working directly with game devs.
<br><br>
<h4>Deputy Chair - Jay Roff-Garcia</h4>
This role assists the chair. They help organize our committee meeting agenda, they are a stand-in if the chair or MoHA staff is unavailable, they are available for games y'all events and help to coordinate the volunteers at said events as well as answer questions from attendees.
<br><br>
<h4>Archivist - OPEN</h4>
This role involves gathering/ taking notes during meetings  and sending those notes to the appropriate people whether they be missing members of the committee, Jay  or Rachel. The role is also responsible for distributing information via Discord and Asana, including direct contact with other members and  creating event notifications and invites. They collaborate with the MoHA Digital Art Coordinator in assigning tasks to Committee Members via Asana.
<br><br>
<h4>Games Coordinator - Maya Andow</h4>
The Games Coordinator recruits submissions from BIPOC, LGBTQIA+, disabled, women, and non-binary game developers/artists, inform folks about our open calls and meetups, socialize with and support devs at the event, develop themes for meetups based on submissions, pitch guest curators for meetups/showcases. They organize the monthly voting for Games Y’all selections. All committee members vote on selections!
<br><br>
<h4>Communications Coordinator - Eriane Austria</h4>
The communication coordinator is responsible for coordinating or performing documentation of events, writing social media copy, and posting on social media. They also help with Discord moderation. 
<br><br>
<h4>Membership Coordinator - Albert Mancias</h4>
They welcome new members into the Discord and invite members to gatherings. They help with communications, Discord moderation, and in-person onboarding to newsletter, discord, etc at events. They also help onboard new committee members.
</p>
      </div>
      <div class="col-2"></div>
    </div>


    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
