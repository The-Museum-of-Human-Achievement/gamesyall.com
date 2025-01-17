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
<!-- Above the Fold - Committee Info-->
  <div class="row">
  <div class="col-10">
    <h2>Join the Committee!</h2>
    <img src="/img/misc-img/committee-app.png" alt="COMMITTEE APPLICATION" width="400" height="400" style="float:left">
    <hr>
    <button class="button">
        <a href="https://form.jotform.com/231844967692169" target="_blank">I'm interested!</a>
    </button>
    <br><br>
    <p>We are seeking new voices to shape the reality of Fantastic Arcade and Games Y’all. </p>
    <p>We strive for strong representation of BIPOC, LGBTQIA+, female, gender nonbinary, and disabled individuals in our 
          leadership to best serve our diverse community. Folks of identities that are underrepresented in the games industry 
          are especially encouraged to apply (whether you work in the industry or not).</p>
  </div>
</div>
    <div class="row">
    <!-- Role Details-->
    <h1>Committees Roles</h1>
    <p>
    <h4>General Committee Members - OPEN</h4>
    This role is for NEW Indie Games committee members. General Committee Members will assist in person at meetups as well as offering support to committee coordinators in their tasks. Committee members will receive tasks from the committee secretary and chair.
    <br><br>
    <h4>Chair - Will Monroe</h4>
    This role organizes and leads committee meetings. They write committee meeting agendas and help organize future Games Y’all meetups. They speak directly to MoHA Staff with the needs  and concerns of the committee. They are available during Games Y'all events to help the event run smoothly, working directly with game devs.
    <br><br>
    <h4>Deputy Chair - Jonathan Levine & Coby West</h4>
    This role assists the chair. They help organize our committee meeting agenda, they are a stand-in if the chair or MoHA staff is unavailable, they are available for games y'all events and help to coordinate the volunteers at said events as well as answer questions from attendees.
    <br><br>
    <h4>Archivist - Coby West</h4>
    This role involves gathering/ taking notes during meetings  and sending those notes to the appropriate people whether they be missing members of the committee, Jay  or Rachel. The role is also responsible for distributing information via Discord and Asana, including direct contact with other members and  creating event notifications and invites. They collaborate with the MoHA Digital Art Coordinator in assigning tasks to Committee Members via Asana.
    <br><br>
    <h4>Games Coordinator - Coby West</h4>
    The Games Coordinator recruits submissions from BIPOC, LGBTQIA+, disabled, women, and non-binary game developers/artists, inform folks about our open calls and meetups, socialize with and support devs at the event, develop themes for meetups based on submissions, pitch guest curators for meetups/showcases. They organize the monthly voting for Games Y’all selections. All committee members vote on selections!
    <br><br>
    <h4>Communications Coordinator - Eriane Austria</h4>
    The communication coordinator is responsible for coordinating or performing documentation of events, writing social media copy, and posting on social media. They also help with Discord moderation. 
    <br><br>
    <h4>Membership Coordinator - Albert Mancias</h4>
    They welcome new members into the Discord and invite members to gatherings. They help with communications, Discord moderation, and in-person onboarding to newsletter, discord, etc at events. They also help onboard new committee members.
    <br><br>
    <h4>Venue Coordinator - Albert Mancias</h4>
    They are the point of contact between Games Y'all and our external venues, coordinating the needs of the organization and the venues to make sure the community has a space to hold Games Y'all on a monthly basis.
    <br><br>
    <h4>Web Admin - Franco Ramos</h4>
    The Web Admin updates the Games Y'all & Fantastic Arcade websites to stay current with ongoing events, updating pages before and after every event.
    <br><br>
    <h4>Marketing and Graphics - Matt Lindley</h4>
    This role involves reaching out to the public, understanding Games Y'alls affect on the community and working to make sure the branding of the organization reflects the needs of the public.
    <br><br>

    </p>
    <hr>
    <p style="text-align:center">Questions? Reach out to <a href="mailto:games@themuseumofhumanachievement.com">games@themuseumofhumanachievement.com</a></p>
  </div>
    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
