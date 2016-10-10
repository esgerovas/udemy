@extends('layouts.course_app')
@inject('lang','App\Language')
@inject('level','App\Level')
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
                    <li role="presentation"><a href="{{url('/courses/'.$data['cat']->slug.'/'.$data['sub']->slug)}}">Xüsusi kurslar</a></li>
                    <li role="presentation" class="active"><a href="">Bütün kurslar</a>
                </ul> <!-- Nav tabs -->
            </div>
        </div>
 <!-- ================================== All Courses =================================== -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="allCourses">
                <div class="container">
                    <div class="sidebar">
                        <div class="sorting">
                            <button class="btn closed"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                            <h3>Müəyyənləşdir</h3>
                            <form action="">
                                <label>Səviyyə</label>
                                <ul>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>All Levels (1081)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Beginner (606)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Intermediate (192)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Expert (33)</span>
                                    </li>
                                </ul>
                            </form>
                            <form action="">
                                <label>Features</label>
                                <ul>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Closed Captions (36)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Quizzes (439)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Coding Exercises (47)</span>
                                    </li>
                                </ul>
                             </form>
                            <form action="">
                                <label>Dillər</label>
                                <ul>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>English (1478)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Türkçe (40)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Azerice (40)</span>
                                    </li>
                                </ul>
                             </form>
                             <button class="btn btn-close">Done</button>
                        </div><!-- price -->
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
                        <div class="sidebar-btn-forcourse">
                            <button class="btn refine">Müəyyənləşdir</button>
                            <button class="btn relate">Əlaqəli Mövzular</button>
                        </div>
                        <div class="main-row">
                            <label>Sirala:&nbsp;&nbsp; </label>
                            <div class="dropdown">
                                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default">Popularity <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Ratings</a></li>
                                    <li><a href="#">Newest</a></li>
                                    <li><a href="#">Price: Low-to-high</a></li>
                                    <li><a href="#">Price: High-to-low</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub-row">
                        @foreach($data['sub']->courses as $course)
                                <a class= "panel-box" href="{{url('/course/'.$course->slug)}}">
                                    <div class="box-img">
                                        <img src="{{url('assets/images/courseImg/'.$course->image)}}">
                                    </div>
                                    <div class="box-info">
                                        <h6>{{$course->title}}</h6>
                                        <span>{{$course->teacher->name}}, {{$course->teacher->job}}</span>
                                        <ul class="list-inline">
                                           {{--  <li>
                                                <strong>$19</strong>
                                                <s>$200</s>
                                            </li> --}}
                                            <li>
                                                <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                                <span>(6663)</span>
                                            </li>
                                            <li>
                                                <span>{{ $course->vcount($course->id) }} video,  {{$course->vduration($course->id)}} saat</span>
                                            </li>
                                             <li>
                                                <span>{{$course->level->name}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a><!-- panel-box-->
                            @endforeach                     
                        </div><!-- sub -row-->
                        <div class="pagination-block">
                            <ul class="list-inline">
                                <li class="disabled"><a href="#" aria-label="Previous"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">124</a></li>
                                <li class="disabled"><a href="#" aria-label="Next"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                            </ul>                          
                        </div><!-- pagination -->
                    </div><!-- content -->
                </div>
            </div>
        </div>
    </section>
    <div id ="pop-up" class=""></div>
@stop
