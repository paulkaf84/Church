<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sion lubumbashi, nous sommes une paroisse de la communautee Sion baee en RDC likasi">
    <meta name="keywords" content="Elgise, Sion, Lubumbashi, Missionaire">
    <meta name="author" content="Surjith SM">
    <title>Sion Lubumbashi</title>

    <script src="https://demo.web3canvas.com/cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/church.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.png">

    <link href="../../../fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="../../../fonts.googleapis.com/cssbb86.css?family=Droid+Serif:400,700" rel="stylesheet" type="text/css">
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"> <img src="images/church-logo.png" alt="church logo" class="img-responsive"></a> </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="" href="#">Acceuil </a>
                </li>
                <li><a href="about.html">ABOUT</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li><a href="ministry.html">Childrens Ministry</a></li>
                        <li><a href="ministry.html">Students Ministry</a></li>
                        <li><a href="ministry.html">Groups</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERMONS <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li><a href="sermons.html">Christ-Occupied</a></li>
                        <li><a href="sermons.html">God's Love</a></li>
                        <li><a href="sermons.html">Faithfulness</a></li>
                        <li><a href="sermons.html">Praise Him</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-left" role="menu">
                        <li><a href="image-gallery.html">Image Gallery</a></li>
                        <li><a href="video-gallery.html">Video Gallery</a></li>
                        <li><a href="blog.html">Blog list</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="events-programs.html">Events &amp; Programs</a></li>
                        <li><a href="event-single.html">Event Single</a></li>
                        <li><a href="event-calendar.html">Event Calendar</a></li>
                        <li><a href="charity-donation.html">Charity &amp; Donations</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">OTHER PAGES</li>
                        <li><a href="prayers.html">Prayers</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="full-width.html">Full Width</a></li>
                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="../../../themeforest.net/item/church-website-template-responsive-our-church/8546860ce5c.html">Buy this Template</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>

    </div>
</div>


<div class="flexslider">
    <ul class="slides">
        <li class="slide-one">
            <div class="flexslider-caption">
                <h3>EXPERIENCE GOD'S</h3>
                <h1>UNCEASING PROVISION</h1>
                <p><a class="btn btn-giant btn-primary" href="charity-donation.html" role="button">JOIN US &rarr;</a></p>
            </div>
        </li>
        <li class="slide-two">
            <div class="flexslider-caption">
                <h2>Waves of Grace</h2>
                <p class="lead">Receive the unceasing wave after wave, after wave, after wave of Grace God has for you.</p>
                <p><a class="btn btn-lg btn-primary" href="ministry.html" role="button">Learn more &rarr;</a></p>
            </div>
        </li>
        <li class="slide-three">
            <div class="flexslider-caption">
                <h2>Grace and Truth</h2>
                <p class="lead">For God did not send his Son into the world to condemn the world, but to save the world through him. <em>John 3:17</em></p>
                <p><a class="btn btn-lg btn-primary" href="image-gallery.html" role="button">Browse gallery &rarr;</a></p>
            </div>
        </li>
    </ul>
</div>

{{--FIRST LATEST EVENTS--}}
<div class="highlight-bg has-margin-bottom">
    <div class="container event-cta">
        <div class="ec-txt"> <span>EVENNEMENT A VENIR</span>
            <p>"{{ $latestEvents->title }}" - Pasteur C.M</p>
        </div>
        <a class="btn btn-lg btn-primary" href="#" role="button">voir les details →</a> </div>
</div>

{{--FIVES LATEST EVENTS--}}
<div class="container">
    <div class="row feature-block">

        @foreach($events as $event)

            <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
                <h5>{{ $event->title }}</h5>
                <p>{{ $event->description }}</p>
                <p><a href="#" role="button">Read more →</a></p>
            </div>

        @endforeach

    </div>
</div>

{{--PROGRAMMES & EVENEMENTS--}}
<div class="highlight-bg has-margin-bottom">
    <div class="container event-list">
        <div class="section-title">
            <h4> PROGRAMMES &amp; EVENEMENTS </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel">

                    @foreach($events as $event)

                        <div class="el-block item">
                            <h4> {{ date('F j', strtotime($event->date)) }} </h4>
                            <p class="el-head">{{ $event->title }}</p>
                            <span>{{ $event->time }}</span>
                            <p class="el-cta"><a class="btn btn-primary" href="#" role="button">Details &rarr;</a></p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container has-margin-bottom">
    <div class="row">
        <div class="col-md-9 has-margin-bottom">
            <div class="section-title left-align-desktop">
                <h4> LATEST BULLETIN </h4>
            </div>

            <div class="row has-margin-bottom">
                <div class="col-md-4 col-sm-4"> <img class="img-responsive center-block" src="images/blog-thumb-1.jpg" alt="bulletin blog"> </div>
                <div class="col-md-8 col-sm-8 bulletin">
                    <h4 class="media-heading">Perseverance of the Saints </h4>
                    <p>on 17th June 2014 by <a href="#" class="link-reverse">Vincent John</a></p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet...</p>
                    <a class="btn btn-primary" href="blog-single.html" role="button">Read Article →</a> </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4"> <img class="img-responsive center-block" src="images/blog-thumb-2.jpg" alt="bulletin blog"> </div>
                <div class="col-md-8 col-sm-8 bulletin">
                    <h4 class="media-heading">Lord is Sufficient for all of our needs </h4>
                    <p>on 17th June 2014 by <a href="#" class="link-reverse">Jose Mathew</a></p>
                    <p class="media-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet...</p>
                    <a class="btn btn-primary" href="blog-single.html" role="button">Read Article →</a> </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="well">
                <div class="section-title">
                    <h4> RECENT SERMONS </h4>
                </div>
                <a href="#"><img src="images/video-thumb.jpg" class="img-responsive center-block" alt="video thumb"></a>
                <div class="list-group"> <a href="sermons.html" class="list-group-item">
                        <p class="list-group-item-heading">Heavens and the earth</p>
                        <p class="list-group-item-text">24:15 mins</p>
                    </a> <a href="sermons.html" class="list-group-item">
                        <p class="list-group-item-heading">Prayer and petition</p>
                        <p class="list-group-item-text">12:00 mins</p>
                    </a> <a href="sermons.html" class="list-group-item">
                        <p class="list-group-item-heading">Fruit of the Spirit</p>
                        <p class="list-group-item-text">30:25 mins</p>
                    </a> <a href="sermons.html" class="list-group-item">
                        <p class="list-group-item-heading">Do not be afraid; keep on...</p>
                        <p class="list-group-item-text">17:00 mins</p>
                    </a> </div>
            </div>
        </div>
    </div>
</div>


<div class="container has-margin-bottom">
    <div class="section-title">
        <h4>GRACE OUTREACH </h4>
    </div>
    <div class="charity-box">
        <div class="charity-image"> <img src="images/charity-donation.jpg" class="img-responsive" alt="charity donation fundraising"></div>
        <div class="charity-desc">
            <h3>Help human trafficking survivors</h3>
            <p> Posted by <a class="link-reverse" href="#">Steven</a> on Aug 11 2014</p>
            <h2 class="pledged-amount">$6560.00</h2>
            <p>Pledged of $15000 goal</p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span>60%</div>
            </div>
            <div class="pull-left has-margin-xs-right">
                <h3>24</h3>
                <p>Backers</p>
            </div>
            <div class="pull-left">
                <h3 class="pledged-amount">17</h3>
                <p>Days left</p>
            </div>
            <div class="donate-now"> <a href="charity-donation.html" class="btn btn-lg btn-primary">Donate Now →</a> </div>
        </div>
    </div>
</div>


<div class="container has-margin-bottom">
    <div class="section-title">
        <h4> OUR GALLERY </h4>
    </div>
    <div class="img-gallery row">
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_1.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_1.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_2.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_2.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_3.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_3.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_4.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_4.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_5.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_5.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_6.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_6.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_7.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_7.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
        <div class="col-sm-4 col-md-3"> <a class="fancybox" href="images/gallery/img_gallery_8.jpg" data-fancybox-group="gallery" title="church image gallery"> <img src="images/gallery/thumb/gallery_thumb_8.jpg" class="img-responsive" width="270" height="270" alt="church image gallery"> </a> </div>
    </div>
</div>


<div class="highlight-bg has-margin-bottom">
    <div class="container event-list">
        <div class="section-title">
            <h4> BIBLE QUOTES </h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel2">
                    <div class="item">
                        <blockquote class="blockquote-centered"> For God so loved the world that he gave his one and only begotten Son, that who ever believes in him shall not perish but have eternal life. <small>John 3:16 (KJV)</small> </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="blockquote-centered"> For if, by the trespass of the one man, death reigned through that one man, how much more will those who receive God's abundant provision of grace! <small>Romans 5:17 (NIV)</small> </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="blockquote-centered">For God did not send his Son into the world to condemn the world, but to save the world through him. <small>John 3:17</small> </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="section-title">
        <h4> OUR MINISTRIES </h4>
    </div>
    <div class="row feature-block">
        <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
            <h5>YOU CANNOT, BUT GOD CAN</h5>
            <p>The world says that blood and sweat equals success. But we can rest in Jesus' finished work at the cross because of His blood, sweat, tears... </p>
            <p><a href="ministry.html" role="button">Read more →</a></p>
        </div>

        <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_2.jpg" alt="ministry sermon">
            <h5>DELIGHT YOURSELF IN LORD</h5>
            <p>When we rest in the Lord and draw from His Word every day, we have the confidence in knowing our Father has already opened doors...</p>
            <p><a href="ministry.html" role="button">Read more →</a></p>
        </div>

        <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom"> <img class="img-responsive" src="images/ministry_3.jpg" alt="bulletin programs">
            <h5>FAITH DEVELOPS PERSEREVANCE</h5>
            <p>Through these he has given us his very great and precious promises, so that through them you may participate in the divine nature...</p>
            <p><a href="ministry.html" role="button">Read more →</a></p>
        </div>

    </div>
</div>


<div class="highlight-bg">
    <div class="container">
        <div class="row">
            <form action="https://demo.web3canvas.com/themeforest/our-church/subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
                <div class="form-group col-md-3 hidden-sm">
                    <h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
                </div>
                <div class="form-group col-sm-8 col-md-6">
                    <label class="sr-only">Email address</label>
                    <input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
                    <span class="help-block" id="result"></span> </div>
                <div class="form-group col-sm-4 col-md-3">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
                </div>
            </form>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h5>ABOUT THE CHURCH</h5>
                <p>For the word of God is living and active. Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, joints and marrow; it judges the thoughts and attitudes.</p>
            </div>
            <div class="col-sm-6 col-md-3">
                <h5>QUICK LINKS</h5>
                <ul class="footer-links">
                    <li><a href="#">Upcoming events</a></li>
                    <li><a href="#">Ministries</a></li>
                    <li><a href="#">Recent Sermons</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h5>OUR ADDRESS</h5>
                <p> Catholic Church<br>
                    121 King Street, Melbourne <br>
                    Victoria 3000 Australia<br>
                    <br>
                    Phone: +61 3 8376 6284<br>
                    Email: <a href="#"><span class="__cf_email__" data-cfemail="b1dcd0d8ddf1d2d0c5d9deddd8d2c6d4d3c2d8c5d49fd2dedc">[email&#160;protected]</span></a></p>
            </div>
            <div class="col-sm-6 col-md-3">
                <h5>CONNECT</h5>
                <div class="social-icons"><a href="#"><img src="images/fb-icon.png" alt="social"></a> <a href="#"><img src="images/tw-icon.png" alt="social"></a> <a href="#"><img src="images/in-icon.png" alt="social"></a></div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p class="text-center">Copyright © 2014 All rights reserved</p>
        </div>
    </div>
</footer>




<script data-cfasync="false" src="https://demo.web3canvas.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/ketchup.all.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"851b592feb7a16a9","version":"2024.2.0","r":1,"token":"1a2187940c214caa9d3fed19b4904902","b":1}' crossorigin="anonymous"></script>
</body>
</html>
