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
            <h1>Growing</h1>
        </div>
        <!-- browse -->
        <div class="browse @yield('fixedMenu')"><span>Menu <i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <ul class="@yield('fixedMenuBar')">
                @foreach($cat->all() as $cat)
                 <li><a href="{{url('/courses/'.$cat->slug.'/'.$cat->subcategories->first()->slug)}}"><b class="menu__icon {{$cat->icon}}"></b>&nbsp; {{$cat->name}} <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul>
                    <li><h4><a>Bütün {{$cat->name}}</a></h4></li>
                    @foreach($cat->subcategories as $sub)
                        <li><a href="{{url('/courses/'.$cat->slug.'/'.$sub->slug)}}"><b class="menu__icon {{$sub->icon}}"></b>&nbsp; {{$sub->name}}</a></li>
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
            @if(Auth::user())
                <div class="text-center imgProfile">
                    <div>
                        <img src="{{url('/assets/images/'.Auth::user()->image)}}">
                        <span>{{Auth::user()->name}}</span>
                    </div>
                </div>
                <ul>
                    <li class="buttonBrowse"><a>Menu<i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Kurslar</a></li>
                    <li><a href="#">İsmarıclar</a></li>
                    <li><a href="#">Mesajlar</a></li>
                    <li><a href="{{url('/edit-profile')}}">Tənzimləmələr</a></li>
                    <li><a href="#">Kömək</a></li>
                    <li><a href="{{ url('/logout') }}">Çıxış</a></li>
                </ul>
                @else
                 <li class="buttonBrowse"><a>Menu<i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Kömək</a></li>
                    <li class="loggin"><a style="cursor:pointer;">Daxil ol</a></li>
                    <li class="sin"><a style="cursor:pointer;">Qeydiyyat</a></li>

                @endif
            </div>

            <div class="browseMenu">
                <div>
                    <span><i class="pull-left fa fa-angle-left" aria-hidden="true"></i> Geri</span>
                    <h6>Menu</h6>
                </div>
                <ul>
                @foreach($cat->get() as $cat)
                    <li><a href="{{url('/courses/'.$cat->slug.'/'.$cat->subcategories->first()->slug)}}"><b class="menu__icon {{$cat->icon}}"></b>&nbsp;{{$cat->name}}</a></li>
                @endforeach
                <li><a href="{{url('/courses')}}"><b class="menu__icon ud_academics"></b>Bütün kurslar</a></li>
                </ul>
            </div>
        </div>
        <!-- Search and button -->
        <div class="search">
           <form>
                <input type="text" name="" placeholder="Kurs Axtar">
                <!-- asagidaki button islemiyecek -->
                <button type="button">&#xf002;</button>
                <input type="submit" class="fa-input" value="&#xf002;">
                <!--asagidaki input islemiyecek -->
                <input class="submit" type="button" value="Ləğv et">
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
                    <div class="text-right"><a href="#">Hamısına bax <i class="pull-right fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="myCourses myCourses2" style="width:150px; border-left:0;"><a>{{ Auth::user()->name}}</a>
                
            </div>
            <!-- smile -->
            <div class="smile">
                <a href="{{url('/account-settings')}}"><img src="{{url('assets/images/'.Auth::user()->image)}}"></a>
                <div class="profil_menu">
                    <ul>
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Mesajlar</a></li>
                        <li>
                            <ul>
                                <li><a href="#">Kömək</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/edit-profile')}}">Tənzimləmələr</a></li>
                        <li><a href="{{ url('/logout') }}">Çıxış</a></li>
                    </ul>
                </div>
            </div>
            @else
                <div class="qeydiyyat"><button class="loggin">Daxil ol</button></div>
                <div class="qeydiyyat" ><button class="sin">Qeydiyyat</button></div>
            @endif
        </div>
        <div class="clearFix"></div>
    </section>

        @yield('content')

    <section id="footer-wrap">
        <div class="container-fluid">
            <div class="container">
                <ul>
                   <li><a href="#">Haqqımızda</a></li>
                    <li><a href="#">Vloq</a></li>
                    <li><a href="#">Mobile Proqramlama</a></li>
                    <li><a href="#">Dəstək</a></li>
                    <li><a href="#">Kariyera</a></li>
                </ul>
                 <ul>
                    <ul class="language_box">
                       <li><a href="#">Azərbaycanca <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                        <li><a href="#">İngiliscə <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                        <li><a href="#">Türkcə <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                        <li><a href="#">Rusca <i class="pull-right fa fa-check" aria-hidden="true"></i></a></li>
                    </ul>
                     <li class="language"><a><b class="icon-globe fa fa-globe mr5"></b> Azərbaycanca <b class="icon-caret-up fa fa-caret-up user-caret ml5"></b></a></li>
                    <li><span>Copyright &copy; 2016</span></li>
                    <li><a href="#">Qaydalarımız</a></li>
                    <li><a href="#">Gizlilik Şərtləri</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- jQuery  -->
    <script src="{{url('/assets/js/jquery-3.1.0.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
    <!-- custom -->
    <script src="{{url('/assets/js/header-wrap.js')}}"></script>
    <script src="{{url('/assets/js/content-wrap.js')}}"></script>
       <!-- categories -->
    <script src="{{url('/assets/js/categories.js')}}"></script>
    <script src="{{url('/assets/js/footer-wrap.js')}}"></script>
    <script src="{{url('/assets/js/viewCourseVideo.js')}}"></script>


    <script src="{{url('/plugins/afterglow/afterglow.min.js')}}"></script>
    

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