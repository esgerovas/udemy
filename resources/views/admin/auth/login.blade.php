<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="/css/loginPage.css">
    <style>
        @font-face {
        font-family: 'Roboto';
        src: url("/assets/fonts/Roboto-Regular.ttf")
            }
Try it Yourself »
        body, html{
            font-family: 'Roboto';
            background-color: #287EA2;
        }
        .fa-btn {
            margin-right: 6px;
        }
        .margin{
            margin-left:15px;
        }
        .container-fluid{
           /* background-image: url("/assets/images/backg.jpg");
            background-attachment: fixed;
            background-position: center;*/
            background-color: #287EA2;

        }
        .panel-default {
            border-radius: none;
            margin: 40px 0;
        }
        .panel-default .head .image{
            /*34495e*/
            width: 100px;
            margin: 0 auto;
        }
        .panel-default .head .image img{
            margin-top: 15px;
            width: 100%;
            border: 3px solid #34495E;
            -webkit-border-radius: 50%; 
            -moz-border-radius: 50%;
            border-radius: 50%; 
        }
        .panel-default .head-content{
            margin: 10px 0;
            color: #34495E;
        }
        .panel-body{
            padding: 0 25px;
        }
        @media screen and (max-width: 480px){
            .form-group button{
                width: 100%;
                display: block;
                font-size: 13px;
            }
            .form-group a{
                width: 100%;
                display: block;
                text-align: center;
                font-size: 11px;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="row main">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default" >
                    <div class="head text-center">
                    <div class="image">
                        <img src="/assets/images/login.png">
                    </div>
                    <div class="head-content">
                        <span>Girişinizi təsdiqləyin</span>
                    </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="margin control-label">Email Adress</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="margin control-label">Şifrə</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Məni Xatırla
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Daxil Ol
                                    </button>

                                    <a class="btn btn-link pull-right" href="#">Şifrəni unutmusunuz ? </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
