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
    <link href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/font-awesome.min.css') }}">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/custom/style.css') }}">

    
  </head>
  <body>
    <!-- This page for Alim -->
    <section id="main-Page">
        <!-- Login -->
        <div class="login-First">
            <div class="login">
                <div class="log">
                    <div class="exit">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div class="writeInfo">
                        <h4>Login to your Grapes account!</h4>
                        <form>
                            <p>Login with your email</p>
                            <input type="email" name="" placeholder="E-mail">
                            <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                            <input type="password" name="" placeholder="Password">
                            <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                            <input type="submit" name="" value="Login">
                            <h6>or <a href="#">Forgot Password</a></h6>
                        </form>
                        <h5>Don't have an account? <button>Sign up</button></h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- signUP -->
        <div class="signUP-First">
            <div class="signUP">
                <div class="sign">
                    <div class="exit">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div class="writeInfo">
                        <h4>Sign up and start learning!</h4>
                        <form>
                            <input type="text" name="" placeholder="Full Name">
                            <!-- <i class="fa fa-users" aria-hidden="true"></i> -->
                            <input type="email" name="" placeholder="E-mail">
                            <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                            <input type="password" name="" placeholder="Password">
                            <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                            <input type="checkbox" name="">
                            <p>Be the first one to know about new courses and great offers!</p>
                            <div class="clearFix"></div>
                            <input type="submit" name="" value="Sign Up">
                            <h6>By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a></h6>
                        </form>
                        <h5>Already have an account? <button>Login</button></h5>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- up line -->
        <div class="upLine"></div>
        <div class="menu">
            <!-- logo -->
            <div class="logo">
                <h1>Grapes</h1>
            </div>
            <div class="logo2">
                <h1>Grapes</h1>
            </div>
             <!-- navigator --> 
            <div class="navigator">
                <i class="navigat fa fa-bars" aria-hidden="true"></i>
                <div class="sidebar">
                    <!-- <div class="text-center imgProfile">
                        <div>
                            <img src="assets/images/smileWhite.png">
                            <span>Alim</span>
                        </div>
                    </div> -->
                    <ul>
                        <li class="buttonBrowse"><a href="{{url('/courses')}}">Courses <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><button class="loggin">Login</button></li>
                        <li><button class="sin">Sign Up</button></li>  
                    </ul>
                </div>

                <div class="browseMenu">
                    <div>
                        <span><i class="pull-left fa fa-angle-left" aria-hidden="true"></i> Menu</span>
                        <h6>Courses</h6>
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
            <!-- menu -->
            <div class="menuList">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <ul>
                    <li><a href="{{url('/courses')}}">Courses</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><button class="loggin">Login</button></li>
                    <li><button class="sin">Sign Up</button></li>
                </ul>
            </div>
            <div class="clearFix"></div>
        </div>
                <!-- slider -->
        <div class="slider">
            <!-- slider left place -->
            <div class="sliderImage">
                <a href="#">
                    <img src="assets/images/MainPage/woman_phone.jpg">
                </a>
            </div>
            <!-- slider right place -->
            <div class="content">
                <div class="time">
                    <h6>Monday 12, September</h6>
                </div>
                <div class="header">
                    <h6><a href="#">Certified Ethical Hacker Bootcamp (CEH v9)</a></h6>
                </div>
                <div class="ratings">
                    <span class="star">
                        <i class="ud_i_star"></i>
                        <i class="ud_i_star"></i>
                        <i class="ud_i_star"></i>
                        <i class="ud_i_star"></i>
                        <i class="ud_i_star"></i>
                    </span> 
                    <span class="review_degree">4.7</span>
                    <span class="review_count">(6663)</span>
                </div>
                <div class="about">
                    <h5>About This Course</h5>
                    <h6>With over 133 lectures and more than 18 hours of HD content, this course will teach you everything you need to know about EC-Council's Certified Ethical Hacker certificate exam. With over 133 lectures and more than 18 hours of HD content, this course will teach you everything you need to know about EC-Council's Certified Ethical Hacker certificate exam.</h6>
                </div>
                <div class="duration">
                    <h5>Duration</h5>
                    <h6>19 Hours</h6>
                </div>
                <div class="takeCours">
                    <div class="count">
                        <h5>Price</h5>
                        <h6>19$</h6>
                        <div class="take">
                            <a href="#">Take this Course</a>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="clearFix"></div>
        </div>
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
    <script src="/assets/js/main-Page.js"></script>
    <script src="/assets/js/footer-wrap.js"></script>
  </body>
</html>
