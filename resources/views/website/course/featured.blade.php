@extends('layouts.course_app')

@section('content')
    <!-- This page for Sara -->
    <section id="categories-wrap">
        <!-- ===================================== Category-header =================================== -->
        <div class="category-header">
            <div class="container">
                <div class="path">
                    <a href="index.html"><i class="fa fa-home"></i></a>
                    <a href="#">/ {{$data['cat']->name}}</a>
                    <span>/ {{$data['sub']->name}}</span>
                </div>
                <h1 class="header-title">{{$data['sub']->name}}</h1>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#">Featured</a></li>
                    <li role="presentation"><a href="{{url('/courses/'.$data['cat']->id.'/'.$data['sub']->id.'/allCourses')}}">All Courses</a></li>
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
                            <h3>Related Topics</h3>
                            <ul>
                            @foreach($data['cat']->subcategories as $sub)
                                <li><a href="{{url('/courses/'.$data['cat']->id.'/'.$sub->id)}}"><i class="{{$sub->icon}}">&nbsp;</i><span>{{$sub->name}}</span></a></li>
                            @endforeach
                            </ul>
                        </div><!-- sidebar-nav -->
                    </div><!-- sidebar -->
                    <div class="content">
                        <div class="sidebar-btn">
                            <button class="btn relate">Related Topics</button>
                        </div>
                        <div class="main-row">
                            <h2>Featured Course with Coding Exercises</h2>
                            <a class = "main-panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/1.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>ES6 Javascript: The Complete Developer's Guide </h6>
                                    <span class="auther">Colt steele, Developer and Bootcamp Instructor</span>
                                    <span>309 lectures, video</span>
                                    <span>2689 students</span>
                                    <span>Beginner Level</span>
                                    <div class="rank">
                                        <span class="star">
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                            <i class="ud_i_star"></i>
                                        </span> 
                                        <span class="review_count">436 review</span>
                                    </div>
                                    <div class="course-price">
                                        <strong>$19</strong>
                                        <s>$200</s>
                                    </div>
                                </div>
                            </a>
                       </div><!-- main-row-->
                        <div class="sub-row">
                            <h2>&nbsp;</h2>
                            <div class="sub-panel">
                                <a class= "panel-box" href="#">
                                    <div class="box-img">
                                        <img src="{{url('assets/images/categories/2.jpg')}}">
                                        <div class="img-info">
                                            {{-- <img src="{{url('assets/images/categories/2.1.jpg')}}"> --}}
                                            <span>309 lectures</span>
                                            <span>42.5 hours video</span>
                                        </div>
                                    </div>
                                    <div class="box-info">
                                        <h6>The Web Developer Bootcamp </h6>
                                        <div class="auther">Colt steele, Developer and Bootcamp Instructor</div>
                                        <div class="rank">
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span class="review_degree">4.7</span>
                                            <span class="review_count">(6663)</span>
                                        </div>
                                        <div class="course-price">
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </div>
                                    </div>
                                </a><!-- panel-box-->
                            </div>
                        </div><!--sub row-->
                        <div class="sub-row">
                            <h2>Related Topics</h2>
                            <div class="sub-icon">
                                <ul>
                                    <li>
                                        <a href="#"><i class="ud_mobile-apps"></i><span>Mobile Apps</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ud_programming-languages"></i><span>Programming Languages</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ud_design-tools"></i><span>Design Tools</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ud_network-and-security"></i><span>Network &amp; Security</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ud_media"></i><span>Media</span></a>
                                    </li>
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