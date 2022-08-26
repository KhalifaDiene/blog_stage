@extends('layouts.app')

@section('title')
    DETAIL BLOG
@endsection

@section('content')

  
    <!--SECTION START-->
    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-8">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h4>Categorie</h4>
                            <p>Nom Categorie.</p>
                        </div>
                    </div>
                    <div class="ho-event pg-eve-main pg-blog">
                        <ul>
                            <li>
                                <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                </div>
                                <div class="pg-eve-desc pg-blog-desc">
                                    <a href="event-register.html">
                                        <h4>Best Study Spots on Campus</h4>
                                    </a>
                                    <img src="images/blog/6.jpg" alt="">
                                    <div class="share-btn blog-share-btn">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                                <div class="pg-eve-reg pg-blog-reg">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </li>
                   
                        </ul>
                    </div>
                </div>
                {{-- <div style="top: 2rem" class="col-md-4 position-sticky">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4>Register & Login</h4>
                            <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s12" style="font-weight:bold" >Categories
                            </li>
                            <!--<li class="tab col s6"><a href="#hom_log">Login</a>
                            </li>-->
                        </ul>
                        <div id="hom-vijay" class="row col s12">
                         <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Musique</a>  </h4>
                                </div>

                                <div class="me-auto">
                                202
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Football</a>  </h4>
                                </div>

                                <div class="me-auto">
                                100
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Tennis</a>  </h4>
                                </div>

                                <div class="me-auto">
                                56
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Golf</a>  </h4>
                                </div>

                                <div class="me-auto">
                                32
                                </div>
                            </div> <br> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Théatre</a>  </h4>
                                </div>

                                <div class="me-auto">
                                300
                                </div>
                            </div> 
                        </div>
                        <div id="hom_log" class="col s12">
                        </div>
                    </div>
                </div> --}}
                 @include('blog.liste_categorie')
            </div>
        </div>
    </section>

  

       <!-- POPULAR COURSES -->
       <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>AUTRES  <span>SUGGESTION</span></h2>
                    <!--<p>VOICI LA LISTES DE QUELQUES ARTICLES.</p>-->
                </div>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slider1 active">
                        <!-- <img src="images/slider/4.jpg" alt=""> -->
                        <div class="home-top-cour col-6">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-4.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- <img src="images/slider/6.jpg" alt="">--> 
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-4.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
    
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-chevron-left slider-arr"></i>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fa fa-chevron-right slider-arr"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-1.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Aerospace Engineering</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-2.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-3.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-4.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->

                        <!--Commentaire-->
                        <br> <br> <div >
                            <input type="text"  placeholder="Commentaire"  > <br>
                            <button class="btn btn-primary" type="submit" id="button-addon2">Commenter</button>
                          </div> <br> <br>&

                          <!--<div class="ho-event pg-eve-main pg-blog">-->
                            <ul>
                                <li>
                                    <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="pg-eve-desc pg-blog-desc">
                                        <a href="event-register.html">
                                            <h4>Best Study Spots on Campus</h4>
                                        </a>
                                        <!--<img src="images/blog/6.jpg" alt="">
                                        <div class="share-btn blog-share-btn">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                                </li>
                                            </ul>
                                        </div>-->
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                                   
                          <!--End commentaire-->


                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-5.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Fashion Technology</h3>
                                </a>
                                <h4>Technology / Trends / Fashion</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-6.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-7.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--POPULAR COURSES-->
                        <!--<div class="home-top-cour">-->
                            <!--POPULAR COURSES IMAGE-->
                            <!--<div class="col-md-3"> <img src="images/course/sm-8.jpg" alt=""> </div>-->
                            <!--POPULAR COURSES: CONTENT-->
                            <!--<div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>


   

@endsection