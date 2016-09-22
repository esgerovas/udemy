<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grapes</title>

    <!-- iconsWebSite -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/iconsWebSite.css') }}">
    <!-- Bootstrap -->
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/font-awesome.min.css')}}">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/custom/style.css')}}">

    
  </head>
  <body>
    <!-- This page for Alim -->
    <section id="header-wrap">
        <!-- up line -->
        <div class="line"></div>    
        <!-- logo -->
        <div class="logo">
            <h1>grapes</h1>
        </div>
        <!-- browse -->
        <div class="browse @yield('fixedMenu')"><span>Browse <i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <ul class="@yield('fixedMenuBar')">
                <li><a href="#"><b class="menu__icon ud_development"></b>&nbsp; Development <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                        <li><h4><a href="#">All Development</a></h4></li>
                        <li><a href="{{url('/Web-Development')}}"><b class="menu__icon ud_web-development"></b>&nbsp; Web Development</a></li>
                        <li><a href="#"><b class="menu__icon ud_mobile-apps"></b>&nbsp; Mobile Apps</a></li>
                        <li><a href="#"><b class="menu__icon ud_programming-languages"></b>&nbsp; Programming Language</a></li>
                        <li><a href="#"><b class="menu__icon ud_game-development"></b>&nbsp; Game Development</a></li>
                        <li><a href="#"><b class="menu__icon ud_databases"></b>&nbsp; Databases</a></li>
                        <li><a href="#"><b class="menu__icon ud_software-testing"></b>&nbsp; Software Testing</a></li>
                        <li><a href="#"><b class="menu__icon ud_software-engineering"></b>&nbsp; Software Engineering</a></li>
                        <li><a href="#"><b class="menu__icon ud_development-tools"></b>&nbsp; Development Tools</a></li>
                    </ul>
                </li>
                <li><a href="#"><b class="menu__icon ud_it-and-software"></b>&nbsp; IT &amp; Software <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                        <li><h4><a href="#">All IT &amp; Software</a></h4></li>
                        <li><a href="#"><b class="menu__icon ud_it-certification"></b>&nbsp; IT Certification</a></li>
                        <li><a href="#"><b class="menu__icon ud_network-and-security"></b>&nbsp; Network &amp; Security</a></li>
                        <li><a href="#"><b class="menu__icon ud_hardware"></b>&nbsp; Hardware</a></li>
                        <li><a href="#"><b class="menu__icon ud_operating-systems"></b>&nbsp; Operating System</a></li>
                        <li><a href="#"><b class="menu__icon ud_it-and-software"></b>&nbsp; Other</a></li>
                    </ul>

                </li>
                <li><a href="#"><b class="menu__icon ud_office-productivity"></b>&nbsp; Office Productivity <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                        <li><h4><a href="#">All Office Productivity</a></h4></li>
                        <li><a href="#"><b class="fa fa-linux" aria-hidden="true"></b>&nbsp; Linux</a></li>
                        <li><a href="#"><b class="menu__icon ud_microsoft"></b>&nbsp; Microsoft</a></li>
                        <li><a href="#"><b class="menu__icon ud_apple"></b>&nbsp; Apple</a></li>
                        <li><a href="#"><b class="menu__icon ud_google"></b>&nbsp; Google</a></li>
                        <li><a href="#"><b class="menu__icon ud_oracle"></b>&nbsp; Oracle</a></li>
                        <li><a href="#"><b class="menu__icon ud_office-productivity"></b>&nbsp; Other</a></li>
                    </ul>
                </li>
                <li><a href="#"><b class="menu__icon ud_design"></b>&nbsp; Design <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                        <li><h4><a href="#">All Design</a></h4></li>
                        <li><a href="#"><b class="menu__icon ud_web-design"></b>&nbsp; Web Design</a></li>
                        <li><a href="#"><b class="menu__icon ud_graphic-design"></b>&nbsp; Graphic Desing</a></li>
                        <li><a href="#"><b class="menu__icon ud_design-tools"></b>&nbsp; Design Tools</a></li>
                        <li><a href="#"><b class="menu__icon ud_game-design"></b>&nbsp; Game Design</a></li>
                        <li><a href="#"><b class="menu__icon ud_3d-and-animation"></b>&nbsp; 3D &amp; Animation</a></li>
                        <li><a href="#"><b class="menu__icon ud_design"></b>&nbsp; Other</a></li>
                    </ul>
                </li>
                <li><a href="#"><b class="menu__icon ud_photography"></b>&nbsp; Photography <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                        <li><h4><a href="#">All Photography</a></h4></li>
                        <li><a href="#"><b class="menu__icon ud_digital-photography"></b>&nbsp; Digital Photography</a></li>
                        <li><a href="#"><b class="menu__icon ud_photography-fundamentals"></b> &nbsp;Photograph Fundamentals</a></li>
                        <li><a href="#"><b class="menu__icon ud_portraits"></b>&nbsp; Portraits</a></li>
                        <li><a href="#"><b class="menu__icon ud_portraits"></b>&nbsp; Landscape</a></li>
                        <li><a href="#"><b class="menu__icon ud_photography-tools"></b>&nbsp; Photography Tools</a></li>
                        <li><a href="#"><b class="menu__icon ud_mobile-photography"></b>&nbsp; Mobile Photography</a></li>
                        <li><a href="#"><b class="menu__icon ud_mobile-photography"></b>&nbsp; Video Design</a></li>
                    </ul>
                </li>
                <li><a href="#"><b class="menu__icon ud_language"></b>&nbsp; Language <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                        <li><h4><a href="#">All Language</a></h4></li>
                        <li><a href="#"><b class="menu__icon ud_spanish"></b>&nbsp; Azerbaijan</a></li>
                        <li><a href="#"><b class="menu__icon ud_english"></b>&nbsp; English</a></li>
                        <li><a href="#"><b class="menu__icon ud_hebrew"></b>&nbsp; Russian</a></li>
                        <li><a href="#"><b class="menu__icon ud_russian"></b>&nbsp; Turkish</a></li>
                        <li><a href="#"><b class="menu__icon ud_language"></b>&nbsp; Other</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--Navigator bar --> 
        <div class="navigator">
            <i class="navigat fa fa-bars" aria-hidden="true"></i>
            
            <div class="sidebar">
                <div class="text-center imgProfile">
                    <div>
                        <img src="assets/images/smileWhite.png">
                        <span>Alim</span>
                    </div>
                </div>
                <ul>
                    <li class="buttonBrowse"><a >Browse <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">My Courses</a></li>
                    <li><a href="#">My Notification</a></li>
                    <li><a href="#">My Messages</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Logout</a></li>   
                </ul>
            </div>

            <div class="browseMenu">
                <div>
                    <span><i class="pull-left fa fa-angle-left" aria-hidden="true"></i> Menu</span>
                    <h6>Browse</h6>
                </div>
                <ul>
                    <li><a href="#"><b class="menu__icon ud_development"></b>&nbsp; Development</a></li>
                    <li><a href="#"><b class="menu__icon ud_it-and-software"></b>&nbsp; IT &amp; Software</a></li>
                    <li><a href="#"><b class="menu__icon ud_office-productivity"></b>&nbsp; Office Productivity</a></li>
                    <li><a href="#"><b class="menu__icon ud_design"></b>&nbsp; Design</a></li>
                    <li><a href="#"><b class="menu__icon ud_photography"></b>&nbsp; Photography</a></li>
                    <li><a href="#"><b class="menu__icon ud_language"></b>&nbsp; Language</a></li>
                </ul>
            </div>
        </div>
        <!-- Search and button -->
        <div class="search">
           <form>
                <input type="text" name="" placeholder="Search for Courses">
                <!-- asagidaki button islemiyecek -->
                <button type="button">&#xf002;</button>
                <input type="submit" class="fa-input" value="&#xf002;">
                <!--asagidaki input islemiyecek -->
                <input class="submit" type="button" value="Cancel">
           </form>
        </div>
        <!-- for screen max 760px device -->
        <div class="logo2">
            <h1>grapes</h1>
        </div>
        <!-- My Courses -->
        <div class="right-panel">
            <div class="myCourses"><a href="{{url('/my-courses')}}">My Courses</a>
                <div class="quickStart">
                    <div><h4>Quick Start</h4></div>
                    <a href="#">
                        <img src="assets/images/2016.png">
                        <h5>Beginner PHP and</h5>
                        <p>By Infinite Skills, Hight</p>
                        <ul class="clearFix"></ul>
                    </a>
                    <a href="#">
                        <img src="assets/images/2016.png">
                        <h5>Java SE 7 Programlama</h5>
                        <p>By Mimar Aslan, Turkey</p>
                        <ul class="clearFix"></ul>
                    </a>
                    <div class="text-right"><a href="#">See All <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>

            </div>
            <!-- Shopping Cart -->
            <div class="shopping">
                <a href="{{url('shopping-card')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                <div class="shoppingCart">
                    <div>
                        <div><h4>Shopping Cart</h4></div>
                
                        <div>
                            <ul>
                                <a href="#"><img src="assets/images/2016.png"></a>
                                <a href="#">PHP, Javascript, MySql (Frontend and Backend)</a>
                                <p>By Infinite Skills, Hight</p>
                            </ul>
                            <ul><b>$19</b><del>$40</del></ul>
                            <li class="clearFix"></li>
                        </div>

                        <div>
                            <ul>
                                <a href="#"><img src="assets/images/2016.png"></a>
                                <a href="#">Jquery</a>
                                <p>By Infinite Skills, Hight</p>
                            </ul>
                            <ul><b>$11</b><del>$45</del></ul>
                            <li class="clearFix"></li>
                        </div>

                        <div class="total text-right"><span>Your Total:</span>&nbsp;<span>$30</span></div>
                        
                        <div>
                            <form>
                                <input type="submit" name="" value="Go to Cart">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- notification -->
            <div class="bell">
                <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>

                <div class="notifications">
                    <div>
                        <div>
                            <h4>Notification</h4>
                            <a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
                            <li class="clearFix"></li>
                        </div>
                
                        <div class="text-center">
                            <ul>
                                <li>No notifications.</li>
                            </ul>
                        </div>

                        <div class="empty"></div>
                    </div>
                </div>

            </div>
            <!-- smile -->
            <div class="smile">
                <a href="{{url('/account-settings')}}"><img src="assets/images/smile.png"></a>

                <div class="profil_menu">
                    <ul>
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">My Message</a></li>
                        <li>
                            <ul>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/edit-profile')}}">Account Setting</a></li>
                        <li><a href="#">Grapes Credits</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="clearFix"></div>
    </section>

        @yield('content')

    <section id="footer-wrap">
        <div class="container-fluid">
            <div class="container">
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Topics</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
                 <ul>
                    <ul class="language_box">
                        <li><a href="#">Azerbaijan <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                        <li><a href="#">English <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                        <li><a href="#">Turkish <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                        <li><a href="#">Russian <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                    </ul>
                    <li class="language"><a><b class="icon-globe fa fa-globe mr5"></b> English <b class="icon-caret-up fa fa-caret-up user-caret ml5"></b></a></li>
                    <li><span>Copyright &copy; 2016</span></li>
                    <li><a href="#">Term</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Intellectual Property</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- jQuery  -->
    <script src="/assets/js/jquery-3.1.0.min.js"></script>
    <!-- bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- custom -->
    <script src="/assets/js/header-wrap.js"></script>
    <script src="/assets/js/content-wrap.js"></script>
       <!-- categories -->
    <script src="/assets/js/categories.js"></script>
    <script src="/assets/js/footer-wrap.js"></script>
  </body>
</html>