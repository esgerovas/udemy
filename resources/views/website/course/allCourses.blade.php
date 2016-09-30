@extends('layouts.course_app')

@section('content')
    <!-- This page for Sara -->
    <section id="categories-wrap">
        <!-- ===================================== Category-header =================================== -->
        <div class="category-header">
            <div class="container">
                <div class="path">
                    <a href="index.html"><i class="fa fa-home"></i></a>
                    <a href="#">/ Development</a>
                    <span>/ Web Development</span>
                </div>
                <h1 class="header-title">Web Development</h1>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="{{url('/courses/featured')}}">Featured</a></li>
                    <li role="presentation" class="active"><a href="#">All Courses</a></li>
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
                            <h3>Refine</h3>
                            <form action="">
                                <label>Price</label>
                                <ul>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Paid (1721)</span>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox">
                                            <label></label>
                                        </div>
                                        <span>Free (191)</span>
                                    </li>
                                </ul>
                            </form>
                            <form action="">
                                <label>Level</label>
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
                                <label>Languages</label>
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
                            <h3>Related Topics</h3>
                            <ul>
                                <li><a href="#"><i class="ud_mobile-apps">&nbsp;</i><span>Mobile Apps</span></a></li>
                                <li><a href="#"><i class="ud_programming-languages">&nbsp;</i><span>Programming Languages</span></a></li>
                                <li><a href="#"><i class="ud_design-tools">&nbsp;</i><span>Design Tools</span></a></li>
                                <li><a href="#"><i class="ud_network-and-security">&nbsp;</i><span>Network &amp; Security</span></a></li>
                                <li><a href="#"><i class="ud_media">&nbsp;</i><span>Media</span></a></li>
                                <li><a href="#"><i class="ud_web-design">&nbsp;</i><span>Web Design</span></a></li>
                                <li><a href="#"><i class="ud_microsoft">&nbsp;</i><span>Microsoft</span></a></li>
                                <li><a href="#"><i class="ud_user-experience">&nbsp;</i><span>User Experience</span></a></li>
                                <li><a href="#"><i class="ud_finance">&nbsp;</i><span>Finance</span></a></li>
                                <li><a href="#"><i class="ud_social-media-marketing">&nbsp;</i><span>Social Media Marketing</span></a></li>
                            </ul>
                        </div><!-- sidebar-nav -->
                    </div><!-- sidebar -->
                    <div class="content">
                        <div class="sidebar-btn-forcourse">
                            <button class="btn refine">Refine</button>
                            <button class="btn relate">Related Topics</button>
                        </div>
                        <div class="main-row">
                            <label>Sort By:&nbsp;&nbsp; </label>
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
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/1.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/2.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>Ultimate Web Designer &amp; Developer Course: Build 23 Projects!</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/3.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/4.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/5.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/4.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box--> 
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/1.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/2.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>Ultimate Web Designer &amp; Developer Course: Build 23 Projects!</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/3.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/4.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->
                            <a class= "panel-box" href="#">
                                <div class="box-img">
                                    <img src="assets/images/categories/5.jpg">
                                </div>
                                <div class="box-info">
                                    <h6>The Web Developer Bootcamp</h6>
                                    <span>Colt steele, Developer and Bootcamp Instructor</span>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>$19</strong>
                                            <s>$200</s>
                                        </li>
                                        <li>
                                            <span class="star"><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i><i class="ud_i_star"></i></span> 
                                            <span>(6663)</span>
                                        </li>
                                        <li>
                                            <span>309 lectures, 42.5 hours video</span>
                                        </li>
                                         <li>
                                            <span>All Levels</span>
                                        </li>
                                    </ul>
                                </div>
                            </a><!-- panel-box-->                           
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
