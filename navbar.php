<?php


// Include the database configuration file 
include('db/dbpdo.php');

// // Get current page URL 
// $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
// $currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];

// // Get server related info 
// $user_ip_address = $_SERVER['REMOTE_ADDR'];
// $referrer_url = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
// $user_agent = $_SERVER['HTTP_USER_AGENT'];

// // Insert visitor log into database 
// $sql = "INSERT INTO visitor_logs (page_url, referrer_url, user_ip_address, user_agent, created) VALUES (:page_url, :referrer_url, :user_ip_address, :user_agent, NOW())";
// $stmt = $conn->prepare($sql);
// $stmt->bindParam(":page_url", $currentURL);
// $stmt->bindParam(":referrer_url", $referrer_url);
// $stmt->bindParam(":user_ip_address", $user_ip_address);
// $stmt->bindParam(":user_agent", $user_agent);

// $insert = $stmt->execute();


?>

<style>
    li{
        list-style: none;
    }
</style>



<div class="web_header">

    <div class="row">
        <div class="col-xl-3 col-md-3 col-sm-4 col-6 col-lg-3">

            <div class="web_logo_wrapper">
                <a href="/index.php">
                <img src="/images/Play2Health_Logo_rgb.png" alt="logo" style="width: 45px;" />
                </a>
            </div>

        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-6 resp_main_heade">
            <div class="web_menu_right_wrapper">
                <div id="web_toggle" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <button class="web_searchd_bar"><i class="fas fa-bars"></i></button>
                </div>
                <!-- <a href="#" class="web_btn_style d-none d-sm-block d-md-block d-lg-block d-xl-block">Get Started</a> -->
            </div>
            <div class="web_menu_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <nav class="menu_scroll">
                    <ul>
                        <li class="pt-c7 active"><a href="http://play2healthup.free.nf">Play</a></li>
                        <li class="pt-c7 "><a href="http://play2health.free.nf/highscorers.php" target="_blank">Rewards </a></li>
                        <li class="pt-c7 ">
                            <form action="/scripts/redeem.php" method="post">
                                <input type="hidden" name="email" id="email">
                                <input type="submit" style="/* position: relative; *//* border: none; */background-color: transparent;border: none;font-size: 19px;" name="redeem" value="Redeem Points">
                            </form>
                        </li>
                        <li><a class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Join In
                                </a>
                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="https://www.youtube.com/channel/UC6PENDkMRLo8Or4-jjtJ3aw" alt="play2help youtube link" target="_blank">YouTube</a>
                                    <a class="dropdown-item" href="https://mauricebigmoflynn.wordpress.com/" alt="play2help blog" target="_blank">Blog</a>
                                    <a class="dropdown-item" href="https://www.eventbrite.com/e/full-community-meetup-tickets-346061678797" alt="play2help events media" target="_blank">Events</a>
                                    <a class="dropdown-item" href="https://www.surveymonkey.com/r/ZKM37SK" alt="play2help survey votes link">Votes</a>
                                    <a class="dropdown-item" href="https://www.facebook.com/Play2.HelpWorld/photos/a.210431825738952/5317915491657201/" alt="jobs from our facebook page">Job</a>
                                    <a class="dropdown-item Click-here" href="#">Signin</a>
                                </span>
                            </a>
                        </li>
                        <li class="pt-c7"> <a href="http://play2health.free.nf/aboutus.php" alt="about play2help community page" target="_blank">Why</a> </li>
                        <li class="pt-c7"><a href="/contactus.php" alt="play2health contacts page">Contact Us</a></li>                             
    
                </ul>
            </nav>
        </div>                 
            </div>

        </div>
    </div>
<!--web_header wrapper end-->
<!--*************************************THIS IS THE NAVBAR FOR MOBILE**************************-->
<div id="web_sidebar" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <a class="web_sidebar_logo" href="index.php">
    <img src="images/Play2Health_Logo_rgb.png" alt="logo" style="width: 45px;" />
    </a>
    <div id="web_toggle_close">&times;</div>
    <div id='web_cssmenu' class="menu_scroll">
        <ul class="sidebb">
            <li><a href="http://play2healthup.free.nf">Play</a></li>
            <li><a href="/highscorers.php">Rewards</a></li>
            <li><a class="dropdown show d-none">
                    <a class="btn d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Join In
                    </a>
                    <span class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item p-1" href="https://www.youtube.com/channel/UC6PENDkMRLo8Or4-jjtJ3aw" alt="play2help youtube link" target="_blank">YouTube</a>
                        <a class="dropdown-item p-1" href="https://mauricebigmoflynn.wordpress.com/" alt="play2help blog" target="_blank">Blog</a>
                        <a class="dropdown-item p-1" href="https://www.eventbrite.com/e/full-community-meetup-tickets-346061678797" alt="play2help events media" target="_blank">Events</a>
                        <a class="dropdown-item p-1" href="https://www.surveymonkey.com/r/ZKM37SK" alt="play2help survey votes link">Votes</a>
                        <a class="dropdown-item p-1" href="https://www.facebook.com/Play2.HelpWorld/photos/a.210431825738952/5317915491657201/" alt="jobs from our facebook page">Jobs</a>
                        <a class="dropdown-item p-1 Click-here" href="#">Signin</a>
                    </span>
                </a>
            </li>
            <li><a href="https://play2health.free.nf/aboutus.php" alt="about play2help community page" target="_blank">Why</a></li>
            <li><a href="/contactus.php" alt="play2help contacts page">Contact Us</a></li>
        </ul>
    </div>
</div>

<script>
    var emailField = document.getElementById("email");

    if (localStorage.getItem('email')) {
        emailField.value = localStorage.getItem('email');
    }

    console.log(emailField.value);
</script>
