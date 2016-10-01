@extends('layouts.course_app')

@section('content')
        <!-- This page for Hemide -->
<section id="course-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0 30px;">
                <h1>{{$crs->title}}</h1>
                <h5>{{$crs->headline}}</h5>
                <div class="reiting">
                &nbsp;
{{--                     <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <span>4.3 (104 ratings) • 3,076 students enrolled</span> --}}
                </div>
                <div class="author">
                    <h3><a href="#">{{$crs->teacher->name}}</a></h3>&nbsp;<h2 style="font-size: 15px;">tərəfindən hazırlanıb</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- video yerlesdirilecek -->
            <div class="col-md-8 col-sm-12 col-xs-12" style="padding: 0 30px;">
                <video class="afterglow video" id="myvideo"  width="100%" height="100%" data-volume=".7" preload="auto" data-skin="dark">
                    <source type="video/mp4" src="{{url('/storage/courseVideo/'.$crs->sections->first()->lectures->first()->video_link)}}">
                </video>
            </div>
            
            <div class="col-md-4 col-sm-12 col-xs-12">
                <span class="startPreview">
                    <span>&nbsp;</span>
                    <span><a href="#"> Kursa Başla</a></span>
                    <span>&nbsp;</span>
                </span>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="lectures">
                        <h5>Videoların sayı</h5>
                        <h5>Kursun müddəti</h5>
                        <h5>Səviyyəsi</h5>
                        <h5>Dili</h5>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="eight">
                        <h5><b>{{$lec_count[0]->lec_count}}</b></h5>
                        <h5><b>{{$dur}}</b></h5>
                        <h5><b>{{$crs->level->name}}</b></h5>
                        <h5><b>{{$crs->language->name}}</b></h5>
                    </div>
                </div>
            </div>
        </div>
        
        
        <nav class="navbar navbar-light bg-faded  hidden-xs">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#AboutThisCourse">Kurs haqqında<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#curriclum">Dərs Proqramı</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#instruct">Müəllifi</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section id="about_use">
    <div class="container">
    
        <p style="font-size: 40px; font-weight: 300;" id="AboutThisCourse">Kurs Haqqında</p>
        
        <i class="ud_icon-schedule pr5"></i>
        <span> Yaradılma tarixi &nbsp;&nbsp; {{date_format($crs->created_at ,"  m/Y")}}</span>
        
        <span>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</span>
        <i class="ud_i_website pr5">
        <span> {{$crs->language->name}}</span>
        </i>
        <div class="row">
            <div class="col-md-8"> 
            <span>&nbsp;</span>
                <div class="Description">
                <?php 
                 echo $crs->description;
                ?>
                 
                </div>
                <div  id="curriclum">
                    <h1 style="font-size: 40px; font-weight: 300;">Dərslərin Siyahısı</h1>
                    @foreach($crs->sections()->orderBy('order', 'asc')->get() as $section)
                    <h2>Bölmə {{$section->order}}: {{$section->name}}</h2>
                    <!-- lectureler -->
                    @foreach($section->lectures()->orderBy('order','asc')->get() as $lecture)
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2 col-xs-3">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Dərs {{$lecture->order}} </h5>
                        </div>
                        <div class="col-md-8 col-xs-7">
                             <span>{{$lecture->name}} &nbsp;&nbsp;&nbsp;</span>
                              @if($lecture->text)
                               <span data-id="{{$lecture->id}}" class="desc"><i class="fa fa-caret-down"></i></span>
                               @endif
                        </div>
                        <div class="text-right col-md-2"><h4>{{$lecture->duration}}</h4></div>
                    </div>
                     @if($lecture->text)
                        <div class="clearFix"></div>
                         <div id="open_{{$lecture->id}}" class="lect_desc" style="display:none;">
                             <p>{{$lecture->text}} </p>
                         </div>
                     @endif
                    @endforeach
                    <div class="clearFix"></div>
                    @endforeach
                </div>
            </div>
        <div class="col-md-4 Students">
        </div>
        <div class="clearFix"></div>
    </div>
</section>

<section id="instruct">
    <div class="container">
        <h1>Müəllif haqqında</h1>
        <img src="{{url('/assets/images/teacherImg/'.$t->image)}}">
        <h5><a href="#">{{$crs->teacher->name}}</a>, {{$t->job}}, {{$t->courses->count()}} Kurs  </h5>
        <div class="social">
            @if($t->facebook_link) 
            <a href="{{$t->facebook_link}}"><i class="fa fa-facebook-square"></i></a>
            @endif
             @if($t->twitter_link)
             <a href="{{$t->twitter_link}}"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            @endif
             @if($t->linked_link)
             <a href="{{$t->linked_link}}"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            @endif
             @if($t->youtube_link)
             <a href="{{$t->youtube_link}}"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            @endif
             @if($t->website_link)
                <div class="square">
                   <a href="{{$t->website_link}}"><i class="fa fa-globe" aria-hidden="true"></i></a>
                </div>
            @endif
            <div class="clearFix"></div>
        </div>
        <div class="clearFix"></div>
            <div class="about">           
                <p>{{$t->biography}}</p>
            </div>
        </div>
    </section>
@stop
