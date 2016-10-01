@extends('layouts.course_app')
@section('content')
	<section id="viewCourseVideo">
		<div class="container-fluid">
		<div class="viewList"><span>Dərslərin siyahısı</span></div>
			<div class="all">
				<div class="videoList">
					<div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
					<h2>Videoların Siyahısı</h2>
					@foreach($section as $section)
					<ul>
						<h6>Bölmə {{$section->order}}: {{$section->name}}</h6>
						@foreach($section->lectures as $lect)
						<li><span>-</span><a class="lect" href="{{url('/course/videos/'.$course->slug.'/watch='.$lect->id)}}">{{$lect->name}}</a></li>
						@endforeach
					</ul>
					@endforeach
				</div>
				<div class="videoPlace">
				<h3 style="margin-bottom:20px; text-align:center; color:grey; margin-top:30px;">{{$course->title}}</h3>
					<div class="border">
					@if($k==1)
						<video class="afterglow video" id="myvideo" width="100%" height="100%" data-volume=".7" preload="auto" data-skin="dark">
		                    <source type="video/mp4" src="{{url('/storage/courseVideo/'.$b)}}">
		                </video>
					@elseif($k==0)
					<video class="afterglow video" id="myvideo" width="100%" height="100%" data-volume=".7" preload="auto" data-skin="dark" data-youtube-id="{{$b}}"></video>
					@endif
						
					</div>
				</div>
				<div class="clearFix"></div>
			</div>
		</div>
	</section>
@stop