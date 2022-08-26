 <div style="top: 2rem" class="col-md-4 position-sticky">
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
                            @foreach ($categories as $category )
                            <div style="display:flex; position: relative; justify-content: space-between">

                                <div >
                                    <h4>  <a href="#">{{ $category->name }}</a>  </h4>
                                </div>

                                <div class="me-auto">
                                {{ $category->articles()->where('articles.status', 1)->count() }}
                                </div>
                            </div> <br>
                                
                            @endforeach
                               
                          
                        </div>
                        <div id="hom_log" class="col s12">
                        
                        </div>
                    </div>
                </div>