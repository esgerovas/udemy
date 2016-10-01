@extends('layouts.home_app')
@inject('course','App\Course')
 @section('content')
 <section id="courses-catalog">
        <!-- slider -->
        <div class="slider">
        <!-- backend hissesi ucun tekrarlanan class burda mainSlider classidi -->
            <div class="mainSlider">
            <img src="{{url('assets/images/MainPage/1.jpeg')}}">
            </div>
            <div class="mainSlider">
            <img src="{{url('assets/images/MainPage/b2.jpg')}}">
            </div>
              <div class="mainSlider">
            <img src="{{url('assets/images/MainPage/11.jpg')}}">
            </div>
              <div class="mainSlider">
            <img src="{{url('assets/images/MainPage/man_mockup_n.jpg')}}">
            </div>  
            <div class="mainSlider">
            <img src="{{url('assets/images/MainPage/woman_phone.jpg')}}">
            </div>
            <div class="go">
                <h1>GƏLƏCƏYİ KODLA</h1>
                <div><a href="{{url('/courses')}}">Öyrən</a></div>
            </div>
            <div class="sliderButton">
                <div class="buttons">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <li class="clearFix"></li>
                </div>
            </div>
        </div>
        <div class="container-manual">
        @foreach($course->orderBy('created_at','desc')->get() as $course)
            <a href="{{url('/course/'.$course->slug)}}" class="column">
                <div class="img">
                    <img src="{{url('assets/images/courseImg/'.$course->image)}}">
                </div>
                <div class="contents">
                    <h6>{{$course->title}}</h6>
                    <p>{{$course->teacher->name}} tərəfində</p>
                </div>
                <div class="column-footer">
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>202 baxış sayı</span>
                    </div>
                   {{--  <div class="price">
                        <span>$19</span>
                        <span><del>$50</del></span>
                    </div> --}}
                    <div class="clearFix"></div>
                </div>
            </a>
        @endforeach
            <div class="clearFix"></div>
        </div>
    </section>

    <section id="search-course">
        <div class="container">
            <div class="row text-center">
                {{-- <div class="col-md-12">
                    <a href="#">Browse course</a>
                </div> --}}
                <div class="col-md-12">
                    <h6 style="font-size:50px;">Axtarış</h6>
                    <form>
                        <input type="text" name="" placeholder="Kursun adını daxil edin">
                        <input type="submit" name="" value="Kurs axtar">
                    </form>
                </div>
            </div>
        </div>
    </section>
 @stop
