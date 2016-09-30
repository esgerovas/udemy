@inject("cat","App\Category")
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
        <!-- Login -->
        <div class="login-First">
            <div class="login">
                <div class="log">
                    <div class="exit">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div class="writeInfo">
                        <h4>Hesaba giriş</h4>
                        <form  role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <p>Email adresinizlə girin...</p>
                            <input type="email" name="email" placeholder="E-mail" class="{{ $errors->has('email') ? ' has-error' : '' }}">
                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <input type="password" name="password" placeholder="Şifrə" class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <input type="submit" name="" value="Giriş">
                            <h6><a href="#">Şifrənizi unutmusunuz?</a></h6>
                        </form>
                        <h5>Hesabınız yoxdur? <button>Qeydiyyat</button></h5>
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
                        <h4>Qeydiyyatdan keçin!</h4>

                        <form  role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <input type="text" name="name" placeholder="Ad və Soyad" class="{{ $errors->has('name') ? ' has-error' : '' }}">
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                            <input type="email" name="email" placeholder="E-mail" class="{{ $errors->has('email') ? ' has-error' : '' }}">
                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <input type="password" name="password" placeholder="Şifrə" class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <input type="password" name="password_confirmation" placeholder="Şifrəni təsdiqlə" class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                             @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif

                            <div class="clearFix"></div>
                            <input type="submit" name="" value="Qeydiyyat">
                            <h6>Qeydiyatdan keçərək bizim <a href="#">İstifadəçi şərtləri</a>ni qəbul etdiniz.</a></h6>
                        </form>
                        <h5>Sizin artıq hesabınız var? <button>Daxil ol</button></h5>
                    </div>
                </div>
            </div>
        </div> 
        <!-- logo -->
        <div class="logo">
            <h1>grapes</h1>
        </div>
        <!-- browse -->
        <div class="browse @yield('fixedMenu')"><span>Browse <i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <ul class="@yield('fixedMenuBar')">
                @foreach($cat->all() as $cat)
                 <li><a href="{{url('/courses/'.$cat->id.'/'.$cat->subcategories->first()->id)}}"><b class="menu__icon {{$cat->icon}}"></b>&nbsp; {{$cat->name}} <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                    <li><h4><a href="{{url('/courses/'.$cat->id.'/'.$cat->subcategories->first()->id)}}">All {{$cat->name}}</a></h4></li>
                    @foreach($cat->subcategories as $sub)
                        <li><a href="{{url('/courses/'.$cat->id.'/'.$sub->id)}}"><b class="menu__icon {{$sub->icon}}"></b>&nbsp; {{$sub->name}}</a></li>
                    @endforeach
                    </ul>
                </li>
                @endforeach
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
         @if(Auth::user())
            <div class="myCourses myCourses1"><a href="{{url('/my-courses')}}">Kurslarım</a>
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
            <div class="myCourses myCourses2" style="width:150px; border-left:0;"><a>{{ Auth::user()->name}}</a>
                
            </div>
            <!-- smile -->
            <div class="smile">
                <a href="{{url('/account-settings')}}"><img src="assets/images/{{ Auth::user()->image }}"></a>
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
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
            @else
                <div class="qeydiyyat"><button class="loggin">Login</button></div>
                <div class="qeydiyyat" ><button class="sin">Sign Up</button></div>
            @endif
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
    <script src="/assets/js/course-wrap.js"></script><script src="/plugins/afterglow/afterglow.min.js"></script>

  </body>
</html>
         @if(Auth::user())
                <script type="text/javascript">
                if($(window).width()<960 && $(window).width()>760){
                    $(".search").css({
                        "width": 'calc(100% - 401px)'
                    });
                }
                else{
                     $(".search").css({
                        "width": 'calc(100% - 551px)'
                    });
                }
            </script>
        @endif