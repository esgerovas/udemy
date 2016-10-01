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
                        <h4>Hesaba giriş</h4>
                        <form  role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <p>Email adresinizlə girin...</p>
                            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" class="{{ $errors->has('email') ? ' has-error' : '' }}">
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
                @if(Auth::user())
                    <div class="text-center imgProfile">
                        <div>
                            <img src="assets/images/{{ Auth::user()->image }}">
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                @endif
                    <ul>
                        <li class="buttonBrowse"><a>Courses <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Partners</a></li>
                    @if(Auth::user())
                     <li><a href="{{ url('/logout') }}" style="color:#993399;">Logout</a></li>
                    @else
                       <li><button class="loggin">Login</button></li>
                       <li><button class="sin">Sign Up</button></li>  
                    @endif
                        
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
                        <li><a href="{{url('/courses')}}">Bütün kurslar</a></li>
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

                     @if(Auth::user())
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                                <li><a href="{{ url('/logout') }}" class="btn btn-default"><i class="fa fa-btn fa-sign-out"></i> Çıxış</a></li>
                          </ul>
                        </li>

                    @else
                       <li><button class="loggin">Login</button></li>
                       <li><button class="sin">Sign Up</button></li>  
                    @endif
                </ul>
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


        <?php 
            if($errors->has('email') || $errors->has('password')) {
        ?>
            <script type="text/javascript">
            $("#main-Page .login-First").css({"display":"block"});
           </script>
        <?php  } ?>