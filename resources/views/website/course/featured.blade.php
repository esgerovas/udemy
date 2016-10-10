@extends('layouts.course_app')

@section('content')
    <!-- This page for Sara -->
    <section id="categories-wrap">
        <!-- ===================================== Category-header =================================== -->
        <div class="category-header">
            <div class="container">
                <div class="path">
                    <a href="index.html"><i class="fa fa-home"></i></a>
                    <a href="#">/ {{ $data['cat']->name }}</a>
                    <span>/ {{ $data['sub']->name }}</span>
                </div>
                <h1 class="header-title">{{ $data['sub']->name }}</h1>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#">Xüsusi kurslar</a></li>
                    <li role="presentation"><a href="{{url('/courses/'.$data['cat']->slug.'/'.$data['sub']->slug.'/all-courses')}}">Bütün kurslar</a></li>
                </ul> <!-- Nav tabs -->
            </div>
        </div>
        
        <div class="tab-content">
        <!-- ======================================== Featured ====================================== -->
            <div role="tabpanel" class="tab-pane active" id="featured">
                <div class="container">
                    <div class="sidebar">
                         <div class="sidebar-nav">
                            <button class="btn closed"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                            <h3>Əlaqəli Mövzular</h3>
                            <ul>
                            @foreach($data['cat']->subcategories as $sub)
                                <li><a href="{{url('/courses/'.$data['cat']->slug.'/'.$sub->slug)}}"><i class="{{ $sub->icon }}">&nbsp;</i><span>{{ $sub->name }}</span></a></li>
                            @endforeach
                            </ul>
                        </div><!-- sidebar-nav -->
                    </div><!-- sidebar -->
                    <div class="content">
                        <div class="sidebar-btn">
                            <button class="btn relate">Əlaqəli Mövzular</button>
                        </div>
                        <div class="main-row">
                            <h2>&nbsp;</h2>
                            @foreach($data['sub']->courses->splice(0,1) as $course)
                            <a class = "main-panel-box" href="{{url('/course/'.$course->slug)}}">
                                <div class="box-img">
                                    <img src="{{url('assets/images/courseImg/'.$course->image)}}">
                                </div>
                                <div class="box-info">
                                    <h6>{{$course->title}} </h6>
                                    <span class="auther">{{$course->teacher->name}}, {{$course->teacher->job}}</span>
                                    <span>{{ $course->vcount($course->id) }} video</span>
                                    <span>2689 students</span>
                                    <span>{{$course->level->name}}</span>
                                    <div class="rank">
                                        <span class="star">
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                        </span> 
                                        
                                    </div>
                                    <div class="course-price">
                                       {{--  <strong>$19</strong>
                                        <s>$200</s> --}}
                                        <span class="review_count">436 dəfə baxılıb</span>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                       </div><!-- main-row-->
                       <?php $k=0;?>
                            @foreach($data['sub']->courses as $course)
                            @if($k%4==0)
                            <div class="sub-row">
                            <h2>&nbsp;</h2>
                            <div class="sub-panel">
                            @endif
                                <a class= "panel-box" href="{{url('/course/'.$course->slug)}}">
                                    <div class="box-img">
                                        <img src="{{url('assets/images/courseImg/'.$course->image)}}">
                                        <div class="img-info">
                                            <img src="{{url('assets/images/teacherImg/'.$course->teacher->image)}}">
                                            <span>{{ $course->vcount($course->id) }} video</span>
                                            <span>{{$course->vduration($course->id)}} hours video</span>
                                        </div>
                                    </div>
                                    <div class="box-info">
                                        <h6>{{$course->title}}</h6>
                                        <div class="auther">{{$course->teacher->name}}, {{$course->teacher->job}}</div>
                                        <div class="rank">
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span class="review_degree">4.7</span>
                                            <span class="review_count">(6663)</span>
                                        </div>
                                        <div class="course-price">
                                           {{--  <strong>$19</strong>
                                            <s>$200</s> --}}
                                        </div>
                                    </div>
                                </a><!-- panel-box-->
                                <?php $k++;?>
                                @if($k%4==0)
                                    </div>
                                </div><!--sub row-->
                                @endif
                            @endforeach
                        <div class="sub-row">
                            <h2>Əlaqəli Mövzular</h2>
                            <div class="sub-icon">
                                <ul>
                                @foreach($data['cat']->subcategories->take(5) as $lec)
                                    <li>
                                        <a href="#"><i class="{{$lec->icon}}"></i><span>{{$lec->name}}</span></a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div><!--sub row-->
                    </div><!-- content -->
                </div>
            </div>
        </div>
    </section>
    <div id ="pop-up" class=""></div>
@stop
