@extends('udemy.layout.course_app')

@section('content')
        <!-- This page for Sevinc -->
        <section id="account_settings-wrap">
            <div class="container">
                <div class="row mainDiv">
                    <div class="col-md-2 col-xs-12 col-sm-12 viewProfile">
                        <div class="Picture text-center">
                            <img src="assets/images/profile.png" >
                        </div>
                        <h5 class="text-center"><b>Sevinc Rəhimova</b></h5>
                        <!-- DOWN MENU -->
                        <!--  VIEW PUBLIC profile -->
                        <ul>
                            <li>View Public Profile</li>
                            <li>Profile</li>
                            <li>Photo</li>
                            <li>Account</li>
                            <li>Credit Cards</li>
                            <li>Privacy</li>
                            <li>Notifications</li>
                            <li>Preferences</li>
                            <li>API Clients</li>
                            <li>Danger Zone</li>
                        </ul>
                    </div>
                    <div class=" col-md-10 col-xs-12 col-sm-12">
                        <div class="col-md-12 col-xs-12 col-sm-12  profile">
                            <h3 class="labels" ><b>Profile</b></h3>
                            <p style="color:#353535;margin-bottom:20px;">Add information about yourself to share on your profile</p>
                        </div>
                        <!-- ///////////BASICS///////// -->
                         <div class="labels">
                             <label for="" 
                                    ">Basics:</label>
                         </div>
                        <div class="basics pull-left">
                            <form action="" class="">
                                <div class="col-md-12 col-xs-12 col-sm-12 " >
                                   
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                    <input class="basicsInput" type="text" value="" placeholder="Designation" >
                                    
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                    <input class="basicsInput" type="text" value="" placeholder="name" >
                                    
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12  text-center">
                                    <input class="basicsInput" type="text" value="" placeholder="surname" >
                                    
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                    <input class=" basicsInput" type="text" value="" placeholder="Headline">
                                </div>
                            </form>
                        </div>   
                     </div>
        <!--   ///////////BIOGRAPHY////////// -->
                        
                                <label for="" class=" labels">Biography:</label>
                        <div class="biographyArea text-center">
                            <div class="col-md-12 col-xs-12  col-sm-12 text-center">
                            <textarea name="" id="" class="textArea">
                            
                            </textarea>
                            <input type="text" class="" >
                        </div>
                        </div>
                        
                        
                        
                        <!-- //////////////////////////LINKS/////////////////////////////// -->
                        <div class="col-md-12 col-xs-12 col-sm-12 ">
                            
                           
                            
                            <div class="InputDiv">
                                 <label for="">Links:</label>
                                <div class="input-group">
                                    
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Website(http(s)://..)">
                                </div>
                                
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">https://plus.google.com/</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Google+Link">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">http://twitter.com/</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Twitter Profile">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">http://www.facebook.com/</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Facebook Profile">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">http://www.linkedin.com/</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Linkedin Profile">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">http://www.youtube.com/</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Youtube Profile">
                                </div>
                                
                                <div class="col-md-12 col-xs-12 col-sm-12 lastDiv text-center ">
                                    <input type="submit" value="Save" class="saveButon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop