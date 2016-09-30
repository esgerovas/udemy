@extends('layouts.course_app')

@section('content')
        <!-- This page for Hemide -->
<section id="course-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Begin Teaching Online Full Time: Starter Course Unofficial</h1>
                <h5>Learn How To Create Your Very Own Online Video Course From Scratch Today!</h5>
                <div class="reiting">
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <i class="ud_i_star" aria-hidden="true"></i>
                    <span>4.3 (104 ratings) • 3,076 students enrolled</span>
                </div>
                <div class="author">
                    <h2>Instructed by</h2>&nbsp;<h3><a href="#"> Joe Parys</a> ,<a href="#"> Joe Parys Academy </a></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- video yerlesdirilecek -->
            <div class="col-md-8">
      {{--           <video class="afterglow video" id="myvideo"  width="100%" height="100%" data-volume=".7" preload="auto">
                    <source type="video/mp4" src="{{url('/assets/videos/yapon.mp4')}}">
                    <source type="video/mp4" src="ParovStelar_hd.mp4" data-quality="hd">
                    <source type="video/webm" src="ParovStelar.webm">
                    <source type="video/webm" src="ParovStelar_hd.webm" data-quality="hd">
                    <source type="video/ogg" src="ParovStelar.ogg">
                    <source type="video/ogg" src="ParovStelar_hd.ogg" data-quality="hd">
                </video> --}}
                <video width="320" height="240" controls>
                  <source src="assets/videos/yapon.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>

                    <script src="{{url('plugins/afterglow/afterglow.min.js')}}"></script>
            </div>
            
            <div class="col-md-4">
                <!-- <div class="take">
                    
                    <button type="button" class="btn btn-1">Take This Course</button>
                    
                    <button type="button" class="btn btn-2">Added to Cart</button>
                    <h6>Redeem a Coupon</h6> -->
                    <span class="startPreview">
                        <span>Free</span>
                        <span><a href="#"> Start Free Preview</a></span>
                    </span>
                    <!-- <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <h6>More Options</h6>
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Gift This Course</a></li>
                            <li><a href="#">Buy for My Team</a></li>
                            <hr>
                            <li><i class="fa fa-flag"><a href="#">Report Abuse</a></i></li>
                        </ul> -->
                        
                        <div class="col-md-4 col-xs-4 col-sm-4">
                            <div class="lectures">
                                <h5>Lectures</h5>
                                <h5>Video</h5>
                                <h5>Skill Level</h5>
                                <h5>Languages</h5>
                                <h5>Includes</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-8 col-sm-8">
                            <div class="eight">
                                <h5><b>8</b></h5>
                                <h5><b>1 hour</b></h5>
                                <h5><b>All Level</b></h5>
                                <h5><b>English</b></h5>
                                <h5><b>Lifetime access</b><br><b>30 day money back guarantee!
                                Available on iOS and Android
                                Certificate of Completion </b></h5>
                            </div>
                        </div>
                   <!--  </div> -->
                <!-- </div> -->
            </div>
        </div>
        
        
        <nav class="navbar navbar-light bg-faded">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#AboutThisCourse">About This Course <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#curriclum">
                    Curriculum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    Instructor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
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
                        <div class="col-md-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 1 </h5>
                        </div>
                        <div class="col-md-7">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 2 </h5>
                        </div>
                        <div class="col-md-7">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>


                    <!-- ikinci section h2 taginda sectionun basligidi -->
                    <h2>Section 2: Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time!</h2>
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 3 </h5>
                        </div>
                        <div class="col-md-7">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 4 </h5>
                        </div>
                        <div class="col-md-7">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>
                    <div class="Lecture_1 col-md-12">
                        <div class="col-md-2">
                            <h5><i class="fa fa-play-circle" aria-hidden="true"></i> Lecture 5 </h5>
                        </div>
                        <div class="col-md-7">
                             <span>Course Introduction and Benefits: Welcome to Begin Teaching Online Full Time! </span>
                        </div>
                        <div class="col-md-2"><button type="button" class="btn btn-primary btn-sm">Preview</button></div>
                        <div class="col-md-1"><h4>02:36</h4></div>
                       <!--  <p>A short introduction and course befits </p> -->
                    </div>
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

<section id="Curriculum">
    <div class="container">
        
    </div>
    </section>
    <section id="Instructor">
           <div class="container">
               <div class="row">
                   <h6>Instructor Biography</h6>
                     <div class="col-md-2">
                            <img src="assets/images/sekiller/profile.png">
                    </div>
                     <div class="col-md-10">
                        <h5><span>Joe Parys, </span>Bestselling Udemy Instructor, 50+ Courses, 130,000+ Students</h5>



                   
                         <div class="icon">
                              <i class="fa fa-twitter-square" aria-hidden="true"></i>
                               <i class="fa fa-facebook-square"></i>
                               <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                               <i class="fa fa-youtube-square" aria-hidden="true"></i>
                                 <div class="square">
                                     <i class="fa fa-globe" aria-hidden="true"></i>
                                 </div>
                        </div>
                       

                    </div>
                 </div>

               
                  
                
                   
                   <div class="col-md-12 list">
                       <span>Why are 130,000+ students enrolled in my Udemy courses?</span>
                       <ol>
                         <li>1.I teach with passion and purpose! Every course is delivered with my students in mind.</li>
                         <li>2. My courses will help you achieve real results and change your life today!</li>
                         <li>3.My dedication to Udemy and teaching online. Udemy has named me one of its top instructors.</li>
                       </ol>
                       <h1>► Try enrolling in a course with me and see for yourself! ◄</h1>
                       <hr>
                      <h2> Want to learn how to become A <span>Professional Web Developer?</span></h2>

<h2>Would you like to <span>Transform Your Confidence and Self-Esteem?</span></h2>


<h2>Or maybe how to earn thousands <span>Teaching Online Video Courses Full Time?</span></h2>

<span>Then Enroll in my Udemy Courses Today! You too can be doing this - and so much more!</span>
<hr>
<h3>About Joe Parys:</h3>
 <h4>Joe is a certified life coach, professional motivational speaker, entrepreneur, licensed psychology teacher and head basketball coach for USA Basketball. His main areas of expertise are teaching, coaching, public speaking, personal development, personal transformation, the human mind, maximizing human potential, motivation and goal setting.</h4>
<h3>My CV:</h3>

<h4>Joe has his bachelors degree from Coe College in Cedar Rapids, IA. He was a four year varsity letter winning college athlete in the sport of men's basketball. He is also a coach for USA basketball.</h4>

<h4><span>He is a Licensed Psychology, History and Government teacher for grades 5-12.</span> He has been teaching High School for the past three years.</h4>

<h4>Joe is also a <span>licensed and certified professional life coach and motivational speaker</span> from the Fowler Institute.</h4>
<h3>Business:</h3>
<h4>Joe Parys is an entrepreneur running his own life coaching and motivational speaking business, Joe Parys Academy. Joe has spoken and taught his courses in numerous high schools in the United States and continues to travel around the country inspiring students of all ages.</h4>

<h4>Mission Statement- Joe Parys Academy is committed to superior life coaching. Our products and services are created and marketed with the purpose of helping others worldwide prosper and improve their lives.</h4>

<h4>Vision Statement- Our vision at Joe Parys Academy is to help each client find their purpose in life, reach their goals and fulfill their lifelong dreams.</h4>
</div>

<h6>Instructor Biography</h6>

<div class="row">

             <div class="col-md-2">
               <img src="assets/images/sekiller/logo.png">
             </div>


             <div class="col-md-10">
                <h5><span>Joe Parys Academy </span>Best Selling Udemy Instructor & Founder of Joe Parys Academy</h5>



                   
                  <div class="icon">
                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
                   <i class="fa fa-facebook-square"></i>
                   <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                   <i class="fa fa-youtube-square" aria-hidden="true"></i>
                   <div class="square">
                     <i class="fa fa-globe" aria-hidden="true"></i>
                   </div>
             </div>
</div>



               

         <div class="col-md-12 list1">
             <span>Why are 100,000+ students enrolled in our Udemy courses?</span>
         </div>
              
                   <ol>
                      <li> Purpose: We teach with passion and purpose! Every course is delivered with our students in mind.</li>
                       <li>1.Quality: Our courses are life changing and help you achieve real results!</li>
                       <li>2.Commitment:My dedication to Udemy and teaching online. Udemy has named me one of its top instructors!</li>
                        
                  </ol> 
             
               
              <h1> ► Try enrolling in any of our courses today and experiecne us firsthand! ◄ </h1>
              <hr>
               <h2>Joe Parys Academy is a Leader in Online Education with more than <span>30+ Co-Authored Courses.</span></h2>

<h2>The Founder of Joe Parys Academy, Joe Parys, is a Bestselling Udemy instructor with more than<span> 100,000+ students </span>from more than 190 countries around the world! </h2>

<span>Mission Statement:</span>

<h2>Our Mission at Joe Parys Academy is to create the highest quality online courses available anywhere in the world. We are focused on producing competent professionals and supplying them with the knowledge and skills they need. </h2>

<span>Vision Statement: </span>

<h2>Our Vision at Joe Parys Academy is for our students to have the opportunity to learn about the subjects of their choosing, taught by our highly qualified teachers.</h2>

<hr>
<h2>Want to learn how to become A Professional Web Developer?</h2>

<h2>Do You Desire To Create Your Own Mobile Applications? </h2>

<h2>Or Maybe Learn How To Run Your Own Microsoft Access Business? </h2>

<span>Then Enroll in our Co-Authored Udemy Courses Today! </span>

You Too Can Be Doing All of This and So Much More! <hr><br><br>

<span>About The Founder of Joe Parys Academy:</span>

<h2>Joe Parys is a Bestselling Udemy instructor, certified life coach, professional motivational speaker, entrepreneur, licensed psychology teacher and head basketball coach! His main areas of expertise are teaching, coaching, public speaking, personal development, personal transformation, the human mind, maximizing human potential, motivation and goal setting.</h2>

<span>Joe Parys' CV:</span>

<h2>Joe has his bachelors degree from Coe College in Cedar Rapids, IA. He was a four year varsity letter winning college athlete in the sport of men's basketball. He is also a coach for USA basketballs pilot program.</h2>

<h2>He has been teaching Psychology, History and American Government for grades 5-12 the past three years. </h2>

<h2>Joe is also a licensed and certified professional life coach and motivational speaker from the Fowler Institute of Life Coaching. </h2>

<span>Business:</span>

<h2>Joe Parys is an entrepreneur running his own life coaching and motivational speaking business. Joe has spoken and taught his courses in numerous high schools in the United States and continues to travel around the country inspiring students of all ages.</h2>
   </section>


   <section id="Reviews">
      <div class="container">
          <div class="row">
              <h1>Reviews</h1>
              <div class="col-md-2">
                  <h5>Average Rating</h5>
                  <p>4.3</p>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_info "></i>
                   

              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3">
               <h6>Details</h6>
                 <label>5 Stars</label>
                 <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:48%"></div>

                </div>
              

                <label>4 Stars</label>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:35%"></div>
                </div>
               
                 <label>3 Stars</label>
                 <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:12%"></div>
                </div>
                 <label>2 Stars</label>
                <div class="progress">
                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="100" style="width:4%"></div>
                </div>
                
                   <label>1 Stars</label>
                  <div class="progress">
                         <div class="progress-bar progress-bar-warning"    style="width:1%"></div>
                </div>
                <div class="clearFix"></div>
         </div>
             <div class="col-md-2"></div>
              <div class="col-md-2"></div>
        </div>
             <hr> 
                <div class="row">
                <div class="col-md-1">
                   <img src="assets/images/sekiller/Screenshot_1.png">
                </div>
                <div class="col-md-9">
                   <p>Oleg Ilyushin</p>
                   <h5>posted 7 days ago</h5>
                   </div>
                   <div class="col-md-2">
                       <i class="fa fa-flag-o" aria-hidden="true"></i>
                   </div>
                   
                   <div class="row">
                   <div class="col-md-12">

                    <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                
                   <p>Good! Very easy to understand.</p>
                  
                   </div>
                   </div>

</div>
<hr>
 <div class="row">
                <div class="col-md-1">
                   <img src="assets/images/sekiller/img2.png">
                </div>
                <div class="col-md-9">
                   <p>Jorge Sciupac</p>
                   <h5>posted 14 days ago
</h5>
                   </div>
                   <div class="col-md-2">
                       <i class="fa fa-flag-o" aria-hidden="true"></i>
                   </div>

                   

                   <div class="row">
                   <div class="col-md-12">

                    <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                
                   <p>Very practical and to the point!</p>
                  
                   </div>
                   </div>

<hr>
             <div class="row">
                <div class="col-md-1">
                   <img src="assets/images/sekiller/img4.png">
                </div>
                <div class="col-md-9">
                   <p>
Saeed Ahmed Saeed Homeed</p>
                   <h5>posted 18 days ago
</h5>
                   </div>
                   <div class="col-md-2">
                       <i class="fa fa-flag-o" aria-hidden="true"></i>
                   </div>

                   

                   <div class="row">
                   <div class="col-md-12">

                    <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                
                   <p>this is goog cours</p>
                  
                   </div>
                   </div>

<hr>

   <div class="row">
                <div class="col-md-1">
                   <img src="assets/images/sekiller/img4.png">
                </div>
                <div class="col-md-9">
                   <p>
Navruzov Dilshod</p>
                   <h5>posted 21 days ago
</h5>
                   </div>
                   <div class="col-md-2">
                       <i class="fa fa-flag-o" aria-hidden="true"></i>
                   </div>

                   

                   <div class="row">
                   <div class="col-md-12">

                    <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                   <i class="ud_i_star" aria-hidden="true"></i>
                
                   <p>курс хороший.узнал для себя нового</p>
                  
                   </div>
                   </div>
<hr>


<p><span>11 - 20 of 38 Reviews</span>
 
<button class="btn btn-default bw1 fs16" ng-disabled="!pagination.isPreviousPageEnabled() || pagination.isLoading" ng-click="pagination.loadPreviousPage()" disabled="disabled"> <i class="fa fa-chevron-left nav-left icon-chevron-left"></i> </button>
<button class="btn btn-default bw1 fs16" ng-disabled="!pagination.isNextPageEnabled() || pagination.isLoading" ng-click="pagination.loadNextPage()"> <i class="fa fa-chevron-right nav-right icon-chevron-right"></i> </button></p>

<p>More from Joe Parys</p>

    
</div>

  <div class="row">
  <div class="col-md-4 col-xs-4 col-sm-4">
    <div class="thumbnail">
      <img src="assets/images/sekiller/one.png">
      <div class="caption">
         <h1>The Complete E-Commerce Web Developer Course 5.0</h1>
             <h2>Syed Raza,Top Udemy Instuctor!25000+ students</h2>
             
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <span> 4.9 (16 ratings)</span>
             <h5>$19<strike>$40</strike></h5>
        
      </div>
    </div>
  </div>
  <div class="col-md-4 col-xs-4 col-sm-4">
    <div class="thumbnail">
      <img src="assets/images/sekiller/three.png">
      <div class="caption">
         <h1>The Complete E-Commerce Web Developer Course 5.0</h1>
             <h2>Scott Paton, Executive Producer...</h2>
             
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <span> 4.9 (16 ratings)</span>
             <h5>$19<strike>$40</strike></h5>
        
      </div>
    </div>
  </div>





  <div class="col-md-4 col-xs-4 col-sm-4">
    <div class="thumbnail">
      <img src="assets/images/sekiller/two.png">
      <div class="caption">
         <h1>The Complete E-Commerce Web Developer Course 5.0</h1>
             <h2>Scott Paton, Executive Producer...</h2>
             
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <span> 4.9 (16 ratings)</span>
             <h5>$19<strike>$40</strike></h5>
        
      </div>
    </div>
  </div>
  <p>More from Joe Parys</p>

  <div class="col-md-4 col-xs-4 col-sm-4">
    <div class="thumbnail">
      <img src="assets/images/sekiller/one.png">
      <div class="caption">
         <h1>The Complete E-Commerce Web Developer Course 5.0</h1>
             <h2>Syed Raza,Top Udemy Instuctor!25000+ students</h2>
             
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <i class="ud_i_star" aria-hidden="true"></i>
             <span> 4.9 (16 ratings)</span>
             <h5>$19<strike>$40</strike></h5>
        
      </div>
    </div>
  </div>





  <div class="col-md-4 col-xs-4 col-sm-4">
    <div class="thumbnail">
      <img src="assets/images/sekiller/three.png">
      <div class="caption">
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
    </div>
  </div>
       <div class="col-md-4 col-xs-4 col-sm-4">
    <div class="thumbnail">
      <img src="assets/images/sekiller/two.png">
      <div class="caption">
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
    </div>
  </div>

</div>
</section>
@stop
