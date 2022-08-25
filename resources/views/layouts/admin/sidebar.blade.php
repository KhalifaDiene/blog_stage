<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li><img src="images/placeholder.jpg" alt="">
            </li>
            <li>
                <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="admin.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a href="admin-setting.html"><i class="fa fa-cogs" aria-hidden="true"></i> Parametre</a>
            </li>

            @if (Auth::user()->profil == "admin")
            <li><a href="admin-setting.html"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
            </li>
            @endif

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Categories</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        @if (Auth::user()->profil == "blogueur")
                            <li><a href="/blogueur/categories">Toutes les Categories</a>
                            </li>
                        @elseif(Auth::user()->profil == "admin")
                            <li><a href="/admin/categories">Toutes les Categories</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Article</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        @if (Auth::user()->profil == "blogueur")
                            <li><a href="/blogueur/articles">Tous les Articles</a>
                            </li>
                            <li><a href="/blogueur/new-article">Nouveau Article</a>
                            </li>
                        @else
                            <li><a href="/admin/articles">Tous les Articles</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Commentaire</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="admin-user-all.html">Article</a>
                        </li>
                        <!--<li><a href="admin-user-add.html">Ajouter Bloggeur</a>
                        </li>-->
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
