<header>
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-12">
            <a class="banner-link" href="/">
                <img src="/img/GY_banner.jpg" class="banner-img" alt="Games Y'all Home page." /> 
            </a>
        </div>
    </div>

    <!-- Desktop Nav bar -->
    <div class="row" id="navbar" style="border-radius: 8px; margin-bottom: 0px;">
        <!--Desktop nav bar-->
        <div class="col-12">
            <ul class="navbar">
                <li class="navbar-items">
                    <a href="/" class="navbar-link">Home</a>
                </li>
                <li class="navbar-items">
                    <div class="dropdown">
                    <a class="dropbtn">Events
                        <i class="events-dropdown"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="/event-february-2025">Powerpoint Night</a>
                        <!-- <a href="https://withfriends.co/event/20872516/fantastic_arcade_fun_size_edition">Fantastic Arcade</a> -->
                        <a href="/events">Past Events</a>
                    </div>
                </li>
                <li class="navbar-items">
                    <div class="dropdown">
                    <a class="dropbtn">Get Involved
                        <i class="about-us-dropdown"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="/submit-a-game"> Submit a Game</a>
                        <a href="https://themuseumofhumanachievement.com/forms/volunteer/" target="_blank">Volunteer</a>
                        <a href="/apply-to-committee">Apply to Committee</a>
                    </div>
                </li>
                <li class="navbar-items">
                    <a href="/about-us" class="navbar-link">About Us</a>
                </li> 
                <li class="navbar-items">
                    <a href="/safety" class="navbar-link">Safety</a>
                </li>
                <li class="navbar-items">
                    <a href="/donate" class="navbar-link">Donate</a>
                </li>
                  <li class="navbar-items">
                    <a href="/sponsorship" class="navbar-link">Sponsorship</a>
                </li>
            </ul>
        </div>
    </div>

    <!--Mobile nav bar w/ a hamburger-->
    <div class="row" id="mobile-navbar">
        <!--Hamburger icon-->
        <a href="javascript:void(0);" class="icon" onclick="openMenu()">
            <img src="/img/hamburger-120x120.png" class="hamburger" >
        </a>

        <!--Hamburger drop down menu-->
        <div id="myLinks">
            <a href="index"> <u>Home</u></a>

            <!--Events has a drop down-->
            <a href="javascript:void(0);" onclick="openEvents()"> Events </a>
            <div id="events-submenu">
 					<a href="/event-february-2025">Powerpoint Night</a>
                    <a href="/events"> Past Events </a>
            </div>

            <!--Get Involved has a drop down-->
            <a href="javascript:void(0);" onclick="openGetInvolved()"> Get Involved </a>
            <div id="get-involved-submenu">
                <a href="/submit-a-game"> Submit a Game</a>
                <a href="https://themuseumofhumanachievement.com/forms/volunteer/" target="_blank">Volunteer</a>
                <a href="/apply-to-committee">Apply to Committee</a>
            </div>

            <a href="/about-us"> About Us </a>
            <a href="/safety"> Safety </a> 
            <a href="/donate"> Donate </a>
              <a href="/sponsorship"> Sponsorship </a>
        </div>
    </div>      
</header>
