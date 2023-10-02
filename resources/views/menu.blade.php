<div class="header-logo-menu sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{asset('img/ccfcd/logo.JPG')}} " style="width: 65px;" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="mainmenu-area pull-right">
                    <div class="mainmenu d-none d-lg-block">
                        <nav>
                            <ul id="nav">
                                <li class="current"><a href="{{ route('index') }}">Accueil</a>

                                </li>
                                <li><a href="{{ route('apropos') }}">Apropos de Nous</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('renseignement') }}">Frais de scolarité</a></li>
                                        <li><a href="#">Réglement intérieur</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Emploi du temps</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('empl_sixieme') }}">6<sup>ème</sup></a></li>
                                        <li><a href="{{ route('empl_cinquieme') }}">5<sup>ème</sup></a></li>
                                        <li><a href="{{ route('empl_quatrieme') }}">4<sup>ème</sup></a></li>
                                        <li><a href="{{ route('empl_troisieme') }}">3<sup>ème</sup></a></li>
                                        <li><a href="#">2<sup>nde</sup></a></li>
                                        <li><a href="#">1<sup>ère</sup></a></li>
                                        <li><a href="#">T<sup>le</sup></a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('galerie') }}">Galerie</a>
                                </li>
                                {{-- <li><a href="{{ route('librairie') }}">Librairie</a>
                                </li> --}}
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('contact') }}">Administration</a></li>
                            </ul>
                        </nav>
                    </div>
                    {{-- <ul class="header-search">
                        <li class="search-menu">
                            <i id="toggle-search" class="zmdi zmdi-search"></i>
                        </li>
                    </ul> --}}
                    <!--Search Form-->
                    {{-- <div class="search">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="Search here..." name="search" />
                                <button type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </form>
                        </div>
                    </div> --}}
                    <!--End of Search Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area start -->
<div class="mobile-menu-area">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="current"><a href="{{ route('index') }}">Accueil</a></li>

                            <li><a href="{{ route('apropos') }}">Apropos de Nous</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('renseignement') }}">Frais de scolarité</a></li>
                                    <li><a href="#">Réglement intérieur</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Emploi du temps</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('empl_sixieme') }}">6<sup>ème</sup></a></li>
                                    <li><a href="#">5<sup>ème</sup></a></li>
                                    <li><a href="#">4<sup>ème</sup></a></li>
                                    <li><a href="#">3<sup>ème</sup></a></li>
                                    <li><a href="#">2<sup>nde</sup></a></li>
                                    <li><a href="#">1<sup>ère</sup></a></li>
                                    <li><a href="#">T<sup>le</sup></a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('galerie') }}">Galerie</a>
                            </li>
                            <li><a href="{{ route('librairie') }}">Librairie</a>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>					
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end --> 
