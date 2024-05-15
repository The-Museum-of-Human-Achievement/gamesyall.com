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

$headTitle = "Safety & Community Guidelines - Games Y'all";
$headDescription = "We want you to feel safe and to be safe at our events. ";

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

<div class="row" style="margin-bottom: 40px;">
        </div>
             <hr>
                <Img src="/img/misc-img/safety.png"></Img>
        <!--Universal Safety card only appears on MOBILE-->
        <div class="row">
            <div class="col-12"  id="safety-card-mobile">
                <h4> Problem, Issue, Concern? </h4>
                <br>
   
                <p>
                    
                    Reach out to anyone wearing a <b>yellow lanyard</b> at the event <br>
                  <hr>
                  <br><br>
                    Text our help hotline - <b>(512) 666-7862</b><br>
                    Report a Code of Conduct Violation - <a href="https://form.jotform.com/231854725944162">Here</a><br>
                    <br><br><br>     <br><br><br>
                    Email us at <b>info@themuseumofhumanachievement.com</b>
                </p>
            </div>
        </div>

        <div class="row" id="safety-content-desktop">
            <h3 style="text-align: center;"> Need Help? </h3>
            <!--Look for yellow-->
            <div class="col-5" style="text-align: center;">
                <h4> Look for Yellow</h4>
                <p> Reach out to  anyone with a Yellow Lanyard to speak 
                <br>
                with a staff member about immediate safety concerns or issues <p/>
                <div id="look-for-yell-img-desktop">
                    
                </div>
            </div>

            <div class="col-2">
                <h4> OR </h4>
            </div>

            <!--Contact information-->
            <div class="col-5">
                <h4>Contact us </h4>
                <p>                    
                    Text our help hotline - <b>(512) 957-6642</b><br>
                    Email us at <b>info@themuseumofhumanachievement.com</b>
                    <br>
                </p>
                      Report a Code of Conduct Violation
                         <button class="button" id="Report'"><a href="https://form.jotform.com/231854725944162">Report</a></button>
            </div>
        </div>

        <!--Information and text MOBILE-->
        <div class="row"  id="community-guildelines-text-mobile">
            <div class="col-2"></div>
            <div class="col-8">
                <h2>COMMUNITY GUIDELINES</h2>
                <p>
                    <b>We want you to feel safe and to be safe at our events.</b> The most important thing we want you to know is that if 
                    something or someone makes you feel uncomfortable at one of our events, no matter how minor it seems, you can 
                    report it to us.  <br> <br>
                </p>

                <h6>Harassment Policy</h6>
                <p>
                    Harassment of event participants, staff or volunteers at Fantastic Arcade events will not be tolerated.  
                    Anyone violating this policy may be expelled from this and future events. <br> <br>
                </p>
                <p>
                    Harassment includes offensive verbal comments or attitudes related to gender identity and expression, sexual 
                    orientation, disability, neurodivergence, physical appearance, race, religion; deliberate intimidation, stalking,
                     non-consensual photography or recording, sustained disruption of the event, inappropriate physical contact, and 
                     unwelcome sexual attention. Participants asked to stop any harassing behavior are expected to comply immediately. 
                     We prioritize marginalized people’s safety over privileged people’s comfort. <br> <br>
                </p>

                <h6>No Excuses</h6>
                <p>
                    Neither ignorance nor intoxication are an excuse for harassment.
                    Fantastic Arcade also accepts that we are not above our own policies so please know all of the above applies to 
                    all members of our team in equal measure. <br>     <br>
                </p>

                <h6>Build Respect</h6>
                <p>
                    We are dedicated to providing an inclusive environment for all. Let’s create a respectful and positive space together! <br> <br>
                </p>

                <div style="text-align: center;">                
                    <button class="button">
                        <a href="https://moha.wiki/Code_of_Conduct">Full Code of Conduct</a>
                    </button>
                </div>


            </div>
            <div class="col-2"></div>
        </div>

        <!--Information and text DESKTOP-->
        <div class="row"  id="community-guildelines-text-desktop">
                <div class="col-12">
                    <h2>COMMUNITY GUIDELINES</h2>
                    <p>
                        <b>We want you to feel safe and to be safe at our events.</b> The most important thing we want you to know is that if 
                        something or someone makes you feel uncomfortable at one of our events, no matter how minor it seems, you can 
                        report it to us.  <br> <br>
                    </p>
        
                    <h6>Harassment Policy</h6>
                    <p>
                        Harassment of event participants, staff or volunteers at Fantastic Arcade events will not be tolerated.  
                        Anyone violating this policy may be expelled from this and future events. <br> <br>
                    </p>
                    <p>
                        Harassment includes offensive verbal comments or attitudes related to gender identity and expression, sexual 
                        orientation, disability, neurodivergence, physical appearance, race, religion; deliberate intimidation, stalking,
                        non-consensual photography or recording, sustained disruption of the event, inappropriate physical contact, and 
                        unwelcome sexual attention. Participants asked to stop any harassing behavior are expected to comply immediately. 
                        We prioritize marginalized people’s safety over privileged people’s comfort. <br> <br>
                    </p>
        
                    <h6>No Excuses</h6>
                    <p>
                        Neither ignorance nor intoxication are an excuse for harassment.
                        Fantastic Arcade also accepts that we are not above our own policies so please know all of the above applies to 
                        all members of our team in equal measure. <br>     <br>
                    </p>
        
                    <h6>Build Respect</h6>
                    <p>
                        We are dedicated to providing an inclusive environment for all. Let’s create a respectful and positive space together! <br> <br>
                    </p>
        
                    <div style="text-align: center;">                
                        <button class="button">
                            <a href="https://docs.google.com/document/d/1vA1P_608XVhhz3-PQTwZcrDHjXG53W3L-MoQU8cY1TI/edit?usp=sharing">Full Code of Conduct</a>
                        </button>
                    </div>
                </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
