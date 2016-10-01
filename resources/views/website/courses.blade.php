@extends('layouts.course_app')
@section('fixedMenu','fixedMenu')
@section('fixedMenuBar','fixedMenuBar')
@inject('crs','App\Course')
@section('content')
    <section id="content-wrap">
        <div class="container-fluid">
            <div class="container1">
                <div class="clearFix"></div>
                <div class="courses_list">
                    <h2><i>"Ən Çox İzlənilmiş Kurslar"</i></h2>
                    <div class="right_buttons">
                        <button class="view_btn hidden-xs" ><span>View All <i class="icon-plus-sign fa fa-plus-circle"></i></span></button>
                        <button class="collapse_btn hidden-xs"><span>Collapse <i class="icon-minus-sign fa fa-minus-circle"></i></span></button>
                        {{-- <button class="hidden-xs" type="button"><i class="icon-chevron-left fa fa-chevron-left"></i></button>
                        <button class="hidden-xs" type="button"><i class="icon-chevron-right fa fa-chevron-right"></i></button>  --}}
                    </div>
                    <div class="clearFix"></div>
                    <div class="sub-panel">
                    @foreach($crs->get() as $course)
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
                                    <strong>$19</strong>
                                    <s>$200</s>
                                </div>
                            </div>
                        </a><!-- panel-box-->
                    @endforeach
                    </div>
                </div>

                <div class="clearFix"></div>
                <div class="courses_list">
                    <h2><i>"Ən Yeni Videolar"</i></h2>
                    <div class="right_buttons">
                        <button class="view_btn hidden-xs" ><span>View All <i class="icon-plus-sign fa fa-plus-circle"></i></span></button>
                        <button class="collapse_btn hidden-xs"><span>Collapse <i class="icon-minus-sign fa fa-minus-circle"></i></span></button>
                        
                       {{--  <button class="hidden-xs" type="button"><i class="icon-chevron-left fa fa-chevron-left"></i></button>
                        <button class="hidden-xs" type="button"><i class="icon-chevron-right fa fa-chevron-right"></i></button>  --}}
                    </div>
                    <div class="clearFix"></div>
                    <div class="sub-panel">
                      @foreach($crs->orderBy('created_at','desc')->get() as $course)
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
                                    <strong>$19</strong>
                                    <s>$200</s>
                                </div>
                            </div>
                        </a><!-- panel-box-->
                    @endforeach
                    </div>
                </div>
                <div class="clearFix"></div>
                <div class="courses_list">
                    <h2><i>"Ən Yeni Videolar"</i></h2>
                    <div class="right_buttons">
                        <button class="view_btn hidden-xs" ><span>View All <i class="icon-plus-sign fa fa-plus-circle"></i></span></button>
                        <button class="collapse_btn hidden-xs"><span>Collapse <i class="icon-minus-sign fa fa-minus-circle"></i></span></button>
                        
                        {{-- <button class="hidden-xs" type="button"><i class="icon-chevron-left fa fa-chevron-left"></i></button>
                        <button class="hidden-xs" type="button"><i class="icon-chevron-right fa fa-chevron-right"></i></button>  --}}
                    </div>
                    <div class="clearFix"></div>
                    <div class="sub-panel">
                    @foreach($crs->orderBy('created_at','desc')->get() as $course)
                        <a class= "panel-box" href="{{url('/course/'.$course->slug)}}">
                            <div class="box-img">
                                <img src="{{url('assets/images/courseImg/'.$course->image)}}">
                                <div class="img-info">
                                    <img src="{{url('assets/images/teacherImg/'.$course->teacher->image)}}">
                                    <span>{{ $course->vcount($course->id) }} video</span>
                                    <span>{{$course->vduration($course->id)}} saat video</span>
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
                                    <strong>$19</strong>
                                    <s>$200</s>
                                </div>
                            </div>
                        </a><!-- panel-box-->
                    @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
