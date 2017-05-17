<!DOCTYPE html>
<html>
<head lang="en">
    <title>WiC at RIT</title>
    <?php include 'includes/headinfo.php';
    ?>
    <style>
        #qa-header{
            background-color: #4D1F5B;
            padding-bottom: 10px;
        }
        #qa-header-imgs{
            padding: 10px;
            position: relative;
        }
        #qa-logo-img1{
            display:block;
            margin-left:10px;
            width:70%;
        }
        #qa-logo-img2{
            width: 110%;
        }
        .wicmenu{
            padding-left:0;
            float:right;
        }
        .btnheader{
            background-color: transparent;
        }
        div#qa-main{
            margin-top:-30px;
        }
        div.carousel{
            width: 100%;
            margin: auto;
        }
        .item{
            width: auto;
            height: 500px;
            max-height: 500px;
        }
        .meetings{
            padding-left: 30px ;
            height: 100%;
        }
        #qa-pad{
            padding-top:10px;
        }
        .col-md-4 p{
            padding:1em;
        }
        .col-md-4 img{
            display:block;
            margin:auto;
        }
        #qa-social{
            margin-top: 5%;
            text-align: center;
        }
        #qa-social a, i{
            color:white;
        }
        #qa-title{
            color:white;
            text-align:center;
            font-size: 45pt;
            margin-top: 7px;
            margin-bottom: 0;
        }
        .wicmenu{
            padding-left: 15%;
            margin-top: 0.6%;
            margin-bottom: 0;
        }
        #qa-footer{
            position:absolute;
            bottom:0;
            width:100%;
        }
        #qa-fe-news{
            font-size: 30pt;
        }
        .col-md-4 h3{
            text-align: center;
        }
    </style>
</head>
<body class="WiColor">
<div id="qa-header" class="row">
    <div id="qa-header-imgs" class="col-md-2">
        <img src="/images/WicHim_white.png" id="qa-logo-img1">
        <img src="/images/idbar-black.gif" id="qa-logo-img2">
    </div>
    <div class="btnheader col-md-8">
        <h2 id="qa-title">Women in Computing</h2>
        <div class="navbar wicmenu" role="navigation">
            <ul class="h3 big-nav nav navbar-nav">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/pages/who.php">Who We Are</a></li>
                <li><a href="/pages/what.php">What We Do</a></li>
                <li><a href="/pages/events.php">Events</a></li>
                <li><a href="/pages/after-hours.php">After Hours</a></li>
                <li><a href="/pages/blog.php">Blog</a></li>
            </ul>
        </div>
        <div class="navbar navbar-default hidden-lg hidden-md text-center" role="navigation">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse wicmenu" id="collapse">
                <ul class="small-nav nav navbar-nav">
                    <li class="tognav"><a href="/index.php">Home</a></li>
                    <li class="tognav"><a href="/pages/who.php">Who We Are</a></li>
                    <li class="tognav"><a href="/pages/what.php">What We Do</a></li>
                    <li class="tognav"><a href="/pages/events.php">Events</a></li>
                    <li class="tognav"><a href="/pages/after-hours.php">After Hours</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="qa-social" class="col-md-2">
        <div clas="row">
            <a href="https://www.facebook.com/WICATRIT"><i class="fa fa-facebook-square fa-3x"></i></a>
            <a href="https://twitter.com/RITWIC"><i class="fa fa-twitter-square fa-3x"></i></a>
            <a href="https://www.instagram.com/rit_wic/"><i class="fa fa-instagram fa-3x"></i></a>
            <br>
            <a href="pages/contact.php">Contact Us</a> |
            <a href="support.html">Support Us</a>
        </div>
    </div>
</div>
<div id="qa-main">
    <div id="wiccarousel" class="carousel slide row" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#wiccarousel" data-slide-to="0" class="active"></li>
            <li data-target="#wiccarousel" data-slide-to="1"></li>
            <li data-target="#wiccarousel" data-slide-to="2" ></li>
            <li data-target="#wiccarousel" data-slide-to="3"></li>
            <li data-target="#wiccarousel" data-slide-to="4"></li>
            <li data-target="#wiccarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="carousel-img" src="/images/STEM_Fair_2017/Pic3.JPG">
            </div>
            <div class="item">
                <img class="carousel-img" src="/images/WiC_Pre-Orientation_2016.jpg">
            </div>
            <div class="item">
                <img class="carousel-img" src="/images/GCCIS_Club_Day_2.JPG">
            </div>
            <div class="item">
                <img class="carousel-img" src="/images/STEM_Fair_2017/Pic1.JPG">
            </div>
            <div class="item">
                <img class="carousel-img" src="/images/Outside_Golisano.jpg">
            </div>
            <div class="item">
                <img class="carousel-img" src="/images/STEM_Fair_2017/Pic2.JPG">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 WiCcolorBK meetings">
            <h3>Spring Meeting Times</h3>
            <hr>
            <ul class="h4 nobullets">
                <li>General Meeting: Wed &bull; 6:30pm &bull; GOL-2455</li>
                <li>Events Committee: Thurs &bull; 6:30pm &bull; GOL-2600</li>
                <li>Outreach Committee: Fri &bull; 2:00pm &bull; GOL-2600</li>
                <li>Public Relations Committee: Mon &bull; 6:30pm &bull; GOL-2600</li>
                <li>WiC Allies: Mon &bull; 2:00pm &bull; GOL-2600</li>
                <li>WiCHacks Planning Committee: Thurs &bull; 11:00am &bull; GOL-2600</li>
                <li>Projects Committee: Thu &bull; 12:00pm &bull; GOL-2600</li>
                <ul class="nobullets pull-right">
                    <li>Raspberry Pi: Fri &bull; 11:00am &bull; RIT Construct</li>
                    <li>Alumni App: Thurs &bull; 4pm &bull; GOL-2600</li>
                    <li>
                        Nearables: RIT Construct/SE Team Room
                        <ul class="nobullets tab-right">
                            <li>Sun &bull; 1:30pm</li>
                            <li>Tue &bull; 5:00pm</li>
                            <li>Thurs &bull; 5:00pm</li>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="col-md-9">
            <h2 id="qa-fe-news">Featured News</h2><hr>
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <h2>Looking for Girls Who Code Summer Camp Instructor and TA</h2>
                    <p>Contact Lana: director@rit.edu</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <a href="http://bit.ly/WiConnects2017">Sign up for WiConnects!</a> <br/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <a href="https://www.youtube.com/watch?v=VrhxT86HW5Y">WiC students attend the Grace Hopper Conference.</a> <br/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <a href="https://www.youtube.com/watch?v=tacEIv64Jtk">WiC Hacks 2016 was a huge success! Check us out on TV!</a> <br/>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <a href="https://www.facebook.com/WICATRIT/photos/a.10152845186096777.1073741825.144033821776/10153849043636777/?type=1&permPage=1">Datto Dedicated a Red Chair to WiC!</a> <br/>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <a href="http://bit.ly/WiC_Workshops">Submit your ideas for more WiC Projects Workshops here!</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-calendar fa-1x"></i>
                    <a href="https://drive.google.com/file/d/0BwJ3QhYbueKObmdTcVYtcEJSTzA/view?usp=sharing">WiC '14-'15 Recap Video</a> <br/>

                </div>
            </div>

        </div>
    </div>
    <div class="row" id="qa-pad">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <img class="commiteeHeadImg img-circle" src="../images/CH_16-17/Laura_W.jpg"/>
                    <h3>Laura W</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae velit arcu. Integer rutrum imperdiet quam, in lobortis dui varius posuere. In sapien magna, aliquam sit amet fringilla id, bibendum blandit purus. Aliquam posuere justo elit, nec varius lorem faucibus et. Maecenas condimentum tempus nunc at consequat. Sed ornare dolor pretium dui dapibus ornare. Aenean quis semper nulla. Curabitur ut porttitor velit, ut ultrices dolor. Curabitur pretium rhoncus mollis. Morbi dictum, mi quis rhoncus imperdiet, quam tortor euismod tortor, vitae blandit erat lectus at quam. Curabitur eget erat quis augue interdum porttitor. Fusce suscipit leo quis hendrerit blandit. Phasellus a eros eget quam volutpat porta. Sed arcu justo, lobortis ac convallis vel, faucibus sit amet augue. Ut dui ex, blandit in mauris eget, aliquet sagittis lectus. Integer augue quam, dictum nec faucibus at, elementum ac dolor.
                    </p>
                </div>
                <div class="col-md-4">
                    <img class="commiteeHeadImg img-circle" src="../images/CH_16-17/Courtney.jpg"/>
                    <h3>Courtney C</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae velit arcu. Integer rutrum imperdiet quam, in lobortis dui varius posuere. In sapien magna, aliquam sit amet fringilla id, bibendum blandit purus. Aliquam posuere justo elit, nec varius lorem faucibus et. Maecenas condimentum tempus nunc at consequat. Sed ornare dolor pretium dui dapibus ornare. Aenean quis semper nulla. Curabitur ut porttitor velit, ut ultrices dolor. Curabitur pretium rhoncus mollis. Morbi dictum, mi quis rhoncus imperdiet, quam tortor euismod tortor, vitae blandit erat lectus at quam. Curabitur eget erat quis augue interdum porttitor. Fusce suscipit leo quis hendrerit blandit. Phasellus a eros eget quam volutpat porta. Sed arcu justo, lobortis ac convallis vel, faucibus sit amet augue. Ut dui ex, blandit in mauris eget, aliquet sagittis lectus. Integer augue quam, dictum nec faucibus at, elementum ac dolor.
                    </p>
                </div>
                <div class="col-md-4">
                    <img class="commiteeHeadImg img-circle" src="../images/CH_16-17/Kaitlin.jpg"/>
                    <h3>Kaitlin K</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae velit arcu. Integer rutrum imperdiet quam, in lobortis dui varius posuere. In sapien magna, aliquam sit amet fringilla id, bibendum blandit purus. Aliquam posuere justo elit, nec varius lorem faucibus et. Maecenas condimentum tempus nunc at consequat. Sed ornare dolor pretium dui dapibus ornare. Aenean quis semper nulla. Curabitur ut porttitor velit, ut ultrices dolor. Curabitur pretium rhoncus mollis. Morbi dictum, mi quis rhoncus imperdiet, quam tortor euismod tortor, vitae blandit erat lectus at quam. Curabitur eget erat quis augue interdum porttitor. Fusce suscipit leo quis hendrerit blandit. Phasellus a eros eget quam volutpat porta. Sed arcu justo, lobortis ac convallis vel, faucibus sit amet augue. Ut dui ex, blandit in mauris eget, aliquet sagittis lectus. Integer augue quam, dictum nec faucibus at, elementum ac dolor.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="qa-footer">
    <div id="ritfooter" class="row">
        <div class="col-md-6">
            Copyright &copy; <a href="http://www.rit.edu/">Rochester Institute of Technology</a><br/>
            <a href="http://www.rit.edu/copyright.html">Copyright Infringement</a> |
            <a href="http://www.rit.edu/privacystatement.html">Privacy Statement</a> |
            <a href="http://www.rit.edu/disclaimer.html">Disclaimer</a> |
            <a href="http://www.rit.edu/nondiscrimination.html">Nondiscrimination</a>
        </div>
        <div class="col-md-6 text-right">
            One Lomb Memorial Drive Rochester NY 14623-5603 <br/>
            Qustions or comments? <a href="http://www.rit.edu/ask/">Send us feedback.</a> Telephone 585-475-2411
        </div>
    </div>
</div>
</body>
</html>