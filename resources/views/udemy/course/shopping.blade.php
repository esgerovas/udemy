@extends('udemy.layout.course_app')

@section('content')
    <!-- This page for Togrul -->
    <section id="shopping-wrap">
        <div class="container-fluid ">
            <div class="shopping-cart">
                <div class="container">
                    <a href="#" class="fa fa-home"></a>
                    <span>/</span>
                    <a href="#">Shopping Cart</a>
                    <h1>Shopping Cart</h1><br>
                </div>
            </div>
        </div>

        <!-- COURSE NUMBER -->
        <div class="container-fluid ">
            <div class="course-number">
                <div class="container">
                    <h4>0 Courses in Cart</h4>
                </div>
            </div>
        </div>

        <!-- KEEP SHOPPING -->
        <div class="container-fluid ">
            <div class="keep-shopping">
                <div class="container">
                    <center>
                        <i class="sc-shopping-list__empty-icon ud_icon-cart"></i>
                        <p>Your cart is empty. Keep shopping to find a course!</p>
                        <a href="#">Keep Shopping</a>
                    </center>
                </div>
            </div>
        </div>

        <!-- SAVED LATER -->
        <div class="container-fluid ">
            <div class="saved-later">
                <div class="container">
                    <h4>Saved For Later</h4>
                    <p>You haven't saved any courses for later.</p>
                    <h4>Recently Wishlisted Courses</h4>
                    <p>You haven't added any courses to your wishlist.</p>
                </div>
            </div>
        </div>
    </section>

@stop