<section>
    <!-- NEW CATEGORY SESSION -->
    <div id="nCategory" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Bienvenue</h1>
                <p>Vous voulez ajouter une nouvelle catégorie</p>
                <div>
                    <img src=" {{ asset('assets/images/logo3.png') }} " alt="">
                </div>

            </div>
            <div class="log-in-pop-right text-center">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/images/cancel.png') }}" alt="" />
                </a>
                <h4> Nouvelle Catégorie</h4>
                <p>Veuillez renseigner les champs ci-dessous pour ajouter une nouvelle catégorie</p>
                <form method="POST" action="{{ route('new-category') }}" enctype="multipart/form-data" class="s12">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="text" id="name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            <label for="name">Nom de la catégorie</label>
                        </div>
                    </div>

                    <div class="file-field input-field s12">
                        <div class="btn admin-upload-btn">
                            <span>File</span>
                            <input name="image" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input name="image" class="file-path validate" type="text" placeholder="L'image de la catégorie">
                        </div>
                    </div>
                    <div class="input-field s12">
                        <textarea name="description"></textarea>
                        <label class="">Description de la catégorie</label>
                    </div>

                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Ajouter" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    {{-- <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Mot de passe oublié</a> </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Bienvenue</h1>
                <p>Veuillez-vous connecter pour accéder à la partie Admin de l'application</p>
                <div>
                    <img src=" {{ asset('assets/images/logo3.png') }} " alt="">
                </div>

            </div>
            <div class="log-in-pop-right text-center">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/images/cancel.png') }}" alt="" />
                </a>
                <h4> Login</h4>
                <p>Veuillez renseigner les champs ci-dessous pour vous connecter</p>
                <form method="POST" action="{{ route('login') }}" class="s12">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Identifiant</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="input-field s12">
                            <input type="password" id="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                            <label for="password">Mot de passe</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Se connecter" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Mot de passe oublié</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Bienvenue</h1>
                <p>Inscription pour accéder à la partie Admin de l'application</p>
                <p><strong>NB</strong> : Seulement réservé aux Administrateurs</p>
                <div>
                    <img src=" {{ asset('assets/images/logo3.png') }} " alt="">
                </div>

            </div>
            <div class="log-in-pop-right text-center">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>S'inscrire</h4>
                <p>Merci de vous inscrire pour créer un compte | Blog :) !!!</p>
                <form method="POST" action="{{ route('add-new-blogueur') }}" enctype="multipart/form-data" class="s12">
                    @csrf
                    <input type="hidden" name="profil" value="blogueur">
                    <div>
                        <div class="input-field s12">
                            <input type="text" id="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" name="name">
                            <label for="name">Entrez votre nom</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="input-field s12">
                            <input type="email" id="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email">
                            <label for="email">Entrez votre email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label for="password">Entrez votre mot de passe</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm">Confirmez votre mot de passe</label>
                        </div>
                    </div>
                    <div class="file-field input-field s12">
                        <div class="btn admin-upload-btn">
                            <span>Photo de profif</span>
                            <input name="image" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input name="image" class="file-path validate" type="text" placeholder="Entrez votre image de profil">
                        </div>
                    </div>

                    <div class="input-field s12">
                        <textarea name="description"></textarea>
                        <label class="">Parlez nous un peu de toi...</label>
                    </div>

                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="S'inscrire" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/images/cancel.png') }}" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
