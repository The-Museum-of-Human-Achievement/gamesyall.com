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

$headTitle = "1-800-DREAM-MAIL, a Digital Do-Si-Do - Games Y'all";
$headDescription = "Welcome to our first Digital Do-si-do of 2023! Let's celebrate summer by bringing life to the dead art of voicemail";
$headImage = "/img/event-img/DA-Banner-Dream-Mail-23.png";

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
                <a href="/events">Past Events</a> 
                >
                <a href="/event-dream-mail">June 30th, 2023</a>
            </p>
        </div>
    </div>

    <!--Content and Information-->
    <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>1-800-DREAM-MAIL</h1>
                
                    <h4> a Digital Do-Si-Do</h4>
                
				<p>We'll be chatting and hanging out on discord! <a href="https://discord.gg/nmrkDAEqar">Fantastic Arcade</a> </p>
	
			<br>
				<!--Sign-up Button -->
            <button class="button" id="Sign up"><a href="https://docs.google.com/forms/d/e/1FAIpQLScduqCnqFOy94kayb3K8ZSApXlCbOSxc2frToscARpd2Y5akw/viewform?usp=sf_link">Sign Up</a></button>
       <br><br>
            <button class="button" id="Discord"><a href="https://discord.gg/nmrkDAEqar">Join Discord</a></button>
       <br><br>
				    </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/DA-Banner-Dream-Mail-23.png" alt="Fantastic Arcade & the Museum of Human Achievement present, 1-800-DREAM-MAIL a digital do-si-do">
            </div>
            

		 <div class="col-10">
			<h5>1-800-DREAM-MAIL ✨ A Digital Do-si-do</h5>
			<br>
<p>
📱Welcome to our first Digital Do-si-do of 2023!!!📱 Let’s celebrate summer by bringing life to the dead art of voicemail ☎️ Prank caller? Phone Scammer? Celebrity Impersonator? Let’s leave some voicemails!
<br><br>
Sign up and submit a prompt for your DREAM voicemail. Your prompt can be anything you want. Do you want a deep-fake impression? A message from an imaginary loved one? A prank call? Write it out and wait to receive your OWN prompt to respond to. 
<br><br>
<center><p>Sign up by 6/13📶, submit on 6/30 🤙</p></center>
<br><br>
<p>● Tuesday June 13th - Sign-up deadline! Do-si-do! We’ll tell you who you’re making a voicemail for and what their prompt is. Interpret your prompt however you wish - get literal, get weird, get performative! Check the discord channel for tools, guides, and resources.
<br>
● Friday June 30th - Call our hotline and leave your message! If you want to share the voicemail you received you can post it to the #1-800-Dream-Mail discord channel.
</p><br><br>
<center><p>☎️💻Voicemail?💻☎️</p></center>
<br>
<p>● You don’t have to be a prankster! Your voicemail prompts can take any form you wish. 
<br>
● Would you like to receive a performance? An impression? A long awaited confession from your crush? A call from beyond the grave? 
<br>
● You can either pre-record your message or record it live. Refer to our tools and guides section for more information and guidance. 
<br><br>
Join from the #1-800-Dream-Mail channel on either the MoHA or Fantastic Arcade Discord server.
</p>
<br><br>

<center><p>✅Submission Guide✅</p></center>
<br>
<p>● Voicemails can be made using any tools<br>
● If you pre-recorded your message you should export it as a .mp3 or .wav file type<br>
● Export at either 16 or 24 bit rate, sample rate 44100Hz or 48000Hz<br>
● To submit your voicemail you must call the Dream Mail Hotline at +18648986642. You have 3 options
<br><br>
● Option 1: Record your voicemail live when prompted by the Dream Mail Hotline. <br>
● Option 2: Setup your pre-recorded audio on a speaker and record voicemail when prompted by the Dream Mail Hotline. <br>
●Option 3: Email audio file directly to us at games@themuseumofhumanachievement.com <br>
● We will forward all voicemails to their destined voicemail box.</p>
<br><br>

      <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by Fantastic Arcade for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
</p>
 <br>
          
      <h5>Fantastic Arcade</h5>
<p>Fantastic Arcade celebrates, amplifies, and supports the unique and underrepresented within indie games and beyond.</p>
 <br>
 
<h5>Museum of Human Achievement</h5>

<p>The Museum of Human Achievementis a multi-disciplinary art space and non-profit organization in Austin, Texas. MoHA cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
          </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
