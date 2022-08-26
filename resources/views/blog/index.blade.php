@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-8">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h4>Articles</h4>
                            <p>La liste de mes articles.</p>
                        </div>
                    </div>
                    <div class="ho-event pg-eve-main pg-blog">
                      
                            <ul>
                             @foreach ($articles as $article )
                                <li>
                                    <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="pg-eve-desc pg-blog-desc">
                                        <a href="event-register.html">
                                            <h4>{{$article->title}}</h4>
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
                                        <p>{{$article->content}}</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                    <div class="pg-eve-reg pg-blog-reg">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                </li>
                           @endforeach
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
                            </div> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Football</a>  </h4>
                                </div>

                                <div class="me-auto">
                                100
                                </div>
                            </div> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Tennis</a>  </h4>
                                </div>

                                <div class="me-auto">
                                56
                                </div>
                            </div> <br>

                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">Golf</a>  </h4>
                                </div>

                                <div class="me-auto">
                                32
                                </div>
                            </div><br>

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
@endsection