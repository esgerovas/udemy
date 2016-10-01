@extends('layouts.course_app')

@section('content')
        <!-- This page for Hemide -->
<section id="course-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0 30px;">
                <h1>{{$data->title}}</h1>
                <h5>{{$data->headline}}</h5>
                <div class="reiting">
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <span>4.3 (104 ratings) • 3,076 students enrolled</span>
                </div>
                <div class="author">
                    <h3><a href="#">{{$data->teacher->name}}</a></h3>&nbsp;<h2 style="font-size: 15px;">tərəfindən hazırlanıb</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- video yerlesdirilecek -->
            <div class="col-md-8 col-sm-12 col-xs-12" style="padding: 0 30px;">
                <video class="afterglow video" id="myvideo"  width="100%" height="100%" data-volume=".7" preload="auto" data-skin="dark">
                    <source type="video/mp4" src="{{url('/storage/courseVideo/'.$data->sections->first()->lectures->first()->video_link)}}">
                </video>
            </div>
            
            <div class="col-md-4 col-sm-12 col-xs-12">
                <span class="startPreview">
                    <!-- <span>Free</span> -->
                    <span><a href="#"> Start Free Preview</a></span>
                </span>
                <div class="col-md-4 col-xs-4 col-sm-4">
                    <div class="lectures">
                        <h5>Lectures</h5>
                        <h5>Video</h5>
                        <h5>Skill Level</h5>
                        <h5>Languages</h5>
                    </div>
                </div>
                <div class="col-md-8 col-xs-8 col-sm-8">
                    <div class="eight">
                        <h5><b>8</b></h5>
                        <h5><b>1 hour</b></h5>
                        <h5><b>All Level</b></h5>
                        <h5><b>English</b></h5>
                    </div>
                </div>
            </div>
        </div>
        
        
        <nav class="navbar navbar-light bg-faded  hidden-xs">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#AboutThisCourse">About This Course <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#curriclum">
                    Curriculum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#instruct">
                    Instructor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">
                    Reviews</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section id="about_use">
    <div class="container">
    
        <p style="font-size: 40px; font-weight: 300;" id="AboutThisCourse">About This Course</p>
        
        <i class="ud_icon-schedule pr5">
        <span> Published 5/2016 </span>
        </i>
        <!-- <i class="ud_i_website pr5">
        <span> English</span>
        </i> -->
        <div class="row">
            <div class="col-md-8">
                <div class="Description">
                    <h6>Course Description</h6>
                    <p>⇉ Want To Learn How Begin Teaching Online Full Time From Scratch?</p>
                    <p>⇉ Then Enroll Today In This FREE Course!</p>
                    <p>⇉ Watch the promo video <span>To See How You Can Begin </span>Teaching Online Full Today! </p>
                    <p>⇉ Join Over 100,000+ Students <span> Who Have Enrolled In My </span>50+<span> Udemy Courses This Year!</span></p>
                    <p>⇉ 3000+ Five Star Reviews Shows <span>Students Who Enroll Are Getting Real Results!</span></p>
                    
                    <h6>Here Is Everything You Will Learn In Our Complete Course: </h6>
                    <ul>
                        <li>The Course Creation Basics</li>
                        <li>How To Pick The Right Course Topics</li>
                        <li>Editing Your Videos</li>
                        <li>Essential Equipment For Your Online Courses</li>
                        <li>How To Publish Your Online Course</li>
                        <li>And So Much More! </li>
                        
                    </ul>
                    
                    
                    <ol >
                        <li><i>What I can't do in this Course</i>..</li>
                        <li><i>I can't guarantee your success – this course does take work on your part. But You Can Do It!</i></li>
                        <li><i>I am also not responsible for your actions. You are responsible for 100% of the decisions and actions you make while using this course.<i> </li>
                    </ol>
                    <h1>This course will not remain this price forever! It's time to take action!</h1>
                    <h2>Click the "take this course" button at the top right now!</h2>
                    <b><i>...every hour you delay is costing you money...</i></b>
                    <h1>See you in the course!</h1>
                    <h2>Sincerely,</h2>
                    <h2>Joe Parys </h2>
                    <h2>What are the requirements?</h2>
                    <ul>
                        <li><h1>They will need to no very little about course creation!</h1></li>
                        <h3>What am I going to get from this course?</h3>
                    </ul>
                    <ul>
                        <li><h1>Create their very own online video course!</h1></li>
                    </ul>
                    <h1>What is the target audience?</h1>
                    <h1>This course is for beginners</h1>
                </div>
                <div>
                     <span class="details">Full details</span>
                     <div class="clearFix"></div>
                </div>


                <div  id="curriclum">
                    <h1 style="font-size: 40px; font-weight: 300;">Curriculum</h1>
                    
                     <!-- birinci section h2 taginda sectionun basligidi -->
                    <h2>Section 1: Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time!</h2>

                    <!-- lectureler -->
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2 col-xs-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 1 </h5>
                        </div>
                        <div class="col-md-7 col-xs-8">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2 col-xs-1"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1 hidden-sm hidden-xs"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div><div class="Lecture_1 col-md-12">
                    
                    <div class="col-md-2 col-xs-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 1 </h5>
                        </div>
                        <div class="col-md-7 col-xs-8">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2 col-xs-1"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1 hidden-sm hidden-xs"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>
                    <div class="clearFix"></div>


                    <!-- ikinci section h2 taginda sectionun basligidi -->
                    <h2>Section 1: Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time!</h2>

                    <!-- lectureler -->
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2 col-xs-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 1 </h5>
                        </div>
                        <div class="col-md-7 col-xs-8">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2 col-xs-1"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1 hidden-sm hidden-xs"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div><div class="Lecture_1 col-md-12">
                    
                    <div class="col-md-2 col-xs-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 1 </h5>
                        </div>
                        <div class="col-md-7 col-xs-8">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2 col-xs-1"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1 hidden-sm hidden-xs"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>
                    <div class="clearFix"></div>
                </div>
            </div>
        <div class="col-md-4 Students">
            <p>Students Who Viewed This Course Also Viewed</p>
            <div class="first">
                 <div class="col-md-4 col-xs-4 col-sm-4">
                 <img src="assets/images/sekiller/first.png">
                 </div>
                 <div class="col-md-8 col-xs-8 col-sm-8">
                 <h1>How to Create and Promote a SkillBear Course in 24 Hours!</h1>
                 <h2>Warren Leslie Chalklen, PhD, Edu...</h2>
                 
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <span> 5.0 (2 ratings)</span>
                 <h5>$19<strike>$20</strike></h5>

                 </div>
            </div>
            <div class="second">
            <div class="col-md-4 col-xs-4 col-sm-4">
                <img src="assets/images/sekiller/second.png">
            </div>

             <div class="col-md-8 col-xs-8 col-sm-8">
                 <h1>How To Quit Your Day Job To Pursue The Work Of Your Dreams</h1>
                 <h2>Christopher Greenwood, Teaches...</h2>
                 
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <span>  4.9 (8 ratings)</span>
                 <h5>$19<strike>$100</strike></h5>

            </div>
            </div>
            
            <div class="third">
                 <div class="col-md-4 col-xs-4 col-sm-4">
                 <img src="assets/images/sekiller/third.png">
                 </div>
                 <div class="col-md-8 col-xs-8 col=sm-8">
                 <h1>Podcasts into Kindle & Print On Demand Books Real Fast!</h1>
                 <h2>Scott Paton, Executive Producer...</h2>
                 
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <i class="ud_i_star" aria-hidden="true"></i>
                 <span> 4.9 (16 ratings)</span>
                 <h5>$19<strike>$40</strike></h5>

                </div>
                    <h4>SHARE</h4>
                <div>
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i></div>
                    <div>
                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i></div>
                    <div>
                    <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                </div>
        </div>
        <div class="clearFix"></div>
    </div>
</section>

    <section id="instruct">
    <div class="container">
        <h1>Instructor Biography</h1>
        <img src="/assets/images/sekiller/profile.png">
        <h5><a href="#">Joe Parys</a>, Bestselling Instructor, 55 Courses, Serving 140,000 Students </h5>
        <div class="social">
            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            <div class="square">
                <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
            </div>
            <div class="clearFix"></div>
        </div>
        <div class="clearFix"></div>
        <div class="about">
            <h6>About Joe Parys:</h6>
            <p>Joe is a certified life coach, professional motivational speaker, entrepreneur, licensed psychology teacher and head basketball coach for USA Basketball. His main areas of expertise are teaching, coaching, public speaking, personal development, personal transformation, the human mind, maximizing human potential, motivation and goal setting.</p>
        </div>
        <div class="cv">
            <h6>My CV:</h6>
            <p>Joe has his bachelors degree from Coe College in Cedar Rapids, IA. He was a four year varsity letter winning college athlete in the sport of men's basketball. He is also a coach for USA basketball. </p>
        </div>
        <div class="businness">
            <h6>Businness:</h6>
            <p>Joe Parys is an entrepreneur running his own life coaching and motivational speaking business, Joe Parys Academy. Joe has spoken and taught his courses in numerous high schools in the United States and continues to travel around the country inspiring students of all ages. </p>
        </div>
        </div>

        <div id="reviews" class="container">
            <h1>Reviews</h1>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12 average">
                    <p>Average Raiting</p>
                    <h5>4.2</h5>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_info "></i>
                </div>
                <div class="col-md-3 col-sm-offset-2 col-sm-5 col-md-offset-2 col-xs-10 details">
                    <p>Details</p>
                    <div>
                        <label>5 Stars</label>
                         <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:75%"></div>
                        </div>
                        <div class="faiz">
                            <p>75 %</p>
                        </div>
                        <div class="clearFix"></div>
                    </div>
                    <div>
                        <label>5 Stars</label>
                         <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:45%"></div>
                        </div>
                        <div class="faiz">
                            <p>45%</p>
                        </div>
                        <div class="clearFix"></div>
                    </div>
                    <div>
                        <label>5 Stars</label>
                         <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:35%"></div>
                        </div>
                        <div class="faiz">
                            <p>35 %</p>
                        </div>
                        <div class="clearFix"></div>
                    </div>
                    <div>
                        <label>5 Stars</label>
                         <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:25%"></div>
                        </div>
                        <div class="faiz">
                            <p>25 %</p>
                        </div>
                        <div class="clearFix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="comment-bar" class="container">
            <div class="row " style="padding: 0 15px;">
                <div class="allcomment">
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        <img src="assets/images/sekiller/Screenshot_1.png">
                    
                        <h3>Oleg Ilyushin</h3>
                        <h5>posted 7 days ago</h5>
                        <div class="str">
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                        </div>
                        <div class="clearFix"></div>
                        <div class="comment">
                            <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <a href="#">
                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="clearFix"></div>
                </div>
                 <div class="allcomment">
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        <img src="assets/images/sekiller/Screenshot_1.png">
                    
                        <h3>Oleg Ilyushin</h3>
                        <h5>posted 7 days ago</h5>
                        <div class="str">
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                        </div>
                        <div class="clearFix"></div>
                        <div class="comment">
                            <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <a href="#">
                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="clearFix"></div>
                </div>
                <div class="allcomment">
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        <img src="assets/images/sekiller/Screenshot_1.png">
                    
                        <h3>Oleg Ilyushin</h3>
                        <h5>posted 7 days ago</h5>
                        <div class="str">
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                            <i class="ud_i_star" aria-hidden="true"></i>
                        </div>
                        <div class="clearFix"></div>
                        <div class="comment">
                            <p>comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment comment</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <a href="#">
                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="clearFix"></div>
                </div>
            </div>
        </div>
    </section>
@stop
