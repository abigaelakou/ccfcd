@extends('template')
<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--Loading Area End-->
<!--Main Wrapper Start-->
<div class="as-mainwrapper">
    <!--Bg White Start-->
    <div class="bg-white">
        @section('banner')
         <div class="slider-area">
            <div class="hero-slider owl-carousel">
                <!--Single Slider Start-->
                <div class="single-slider single-slider-2" style="background-image: url({{ asset('img/ccfcd/photo6_1.JPG')}})"> 
                    <div class="hero-slider-content slider-content-2">
                        <h1>Eduquer aujourd'hui les Citoyen <br>et Citoyennes de demain!</h1>
                        <p>L'Excellence notre crédo!</p>
                    </div>
                </div>
                <!--Single Slider End-->
                <!--Single Slider Start-->
                <div class="single-slider single-slider-2" style="background-image: url({{ asset('img/ccfcd/photo6_3.JPG')}})">   
                    <div class="hero-slider-content slider-content-2">
                        <h1>AU CCFCD <br>Nous formons les leaders de demain.</h1>
                        <p>L'avenir de vos enfants depend vous</p>
                    </div>
                </div>
                <!--Single Slider End-->
            </div>
        </div>
        <!--Slider Area End-->
        <!--About Area Start--> 
        <div class="about-area mt-100 mb-100">
            <div class="container">
                <div class="about-box">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="about-container">
                                <h3>meilleur <span class="orange-color"> établissement scolaire</span> <span class="orange-color">à votre </span>service </h3>
                                <p>Situé à Gonzague-ville au corridor après l’institut hygiénique  dans la commune de Port-Bouët à Abidjan, le Collège Catholique des Frères Carmes Déchaux(CCFCD) est dirigé par l’Ordre religieux des Frères Carmes dans le diocèse de Grand-Bassam, avec la lettre de reconnaissance de monseigneur Raymond AHOUA datée du 13/07/2010.</p>
                                <p>Sur décision de création du 22 Septembre 2010 et sur décision d’ouverture du 07/07/2016, le CCFCD a ouvert ses portes à la rentrée scolaire 2015-2016 sous le statut du collège privé confessionnel à base 2(6e, 5e, 4e, 3e) installé sur une superficie de 2 ha.</p>
                                <a class="button-default" href="{{route('apropos') }}">Voir Plus</a>	      
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!--About Image Area Start-->
                            <div class="about-image-area img-full">
                                <img src="{{asset('img/ccfcd/en_classe.jpg')}}" alt="">
                            </div>
                            <!--About Image Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of About Area-->
        @endsection
        <!--About Area Start-->
    @section('body')
        <!--Fun Factor Area Start-->
        <div class="fun-factor-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-fun-factor mb-30">
                            <h2><span class="counter">19</span>+</h2>
                            <h4>Professeurs</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-fun-factor mb-30">
                            <h2><span class="counter">294</span>+</h2>
                            <h4>Elèves</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-fun-factor mb-30">
                            <h2><span class="counter">6</span>+</h2>
                            <h4>Encadreurs</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-fun-factor mb-30">
                            <h2><span class="counter">1</span>+</h2>
                            <h4>Pays</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Fun Factor Area-->
        <!--Online Product Area Start-->
        <div class="product-area section-bottom-padding bg-white mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Gadget</h3>
                                <p>Nous vous proposons des gadgets scolaires</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!--Single Product Start-->
                        <div class="single-product mb-30">
                            <div class="product-img img-full">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('img/ccfcd/macaron.jpeg') }}" alt="">
                                </a>
                                
                                <span class="onsale">Ecole!</span>
                            </div>
                            <div class="product-content">
                                <h2><a href="#" tabindex="0">Macaron</a></h2>
                                
                            </div>
                        </div>
                        <!--Single Product Start-->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!--Single Product Start-->
                        <div class="single-product ">
                            <div class="product-img img-full">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('img/ccfcd/tenue_sport1.png') }}" alt="">
                                </a>
                                <span class="onsale">Ecole!</span>
                            </div>
                            <div class="product-content">
                                <h2><a href="#" tabindex="0">Tenue de sport</a></h2>
                            </div>
                        </div>
                        <!--Single Product Start-->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!--Single Product Start-->
                        <div class="single-product mb-30">
                            <div class="product-img img-full">
                                <a href="{{ route('librairie') }}" tabindex="0">
                                    <img src="{{ asset('img/ccfcd/carnet_correspondance.png') }}" alt="">
                                </a>
                                <span class="onsale">Ecole!</span>
                            </div>
                            <div class="product-content">
                                <h2><a href="#" tabindex="0">Carnet de correspondance</a></h2>
                            </div>
                        </div>
                        <!--Single Product Start-->
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End of Online Product Area-->
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="testimonial-slider owl-carousel">
                        <div class="col-12">
                            <!--Single Testimonial Area Start-->
                            <div class="single-testimonial-area">
                                <div class="testimonial-image">
                                    <img src="{{ asset('img/ccfcd/icone_personne.png') }}" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p class="author-desc"> J'ai été dans cette école et si j'ai un très bon niveau, c'est grace à la rigeure
                                        des encadeurs. Merci pour tout !</p>
                                    <p class="testimonial-author">Ancien</p>
                                </div>
                            </div>
                            <!--Single Testimonial Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Testimonial Area End-->
        <!--Event Area Start-->
        <div class="event-area section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>NOS EVENEMENTS</h3>
                                <p>Il y a plusieurs evenements qui meublent notre année scolaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event-item">
                            <div class="single-event-image">
                                <a href="#">
                                    <img src="{{ asset('img/ccfcd/photo3.jpg') }}" alt="">
                                    <span>12 Sept</span>
                                </a>
                            </div>
                            <div class="single-event-text">
                                <h3><a href="#">Cérémonie de la rentrée</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-time"></i>8.00  - 10.00 </span>
                                    <span><i class="zmdi zmdi-pin"></i>CCFCD</span>
                                </div>
                                <p>Au cours de cette cénémonie, nous accueillons les nouveaux et presentons les professeurs et les membres de l'administration. </p>
                                {{-- <a class="button-default" href="event-details.html">LEARN Now</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event-item">
                            <div class="single-event-image">
                                <a href="#">
                                    <img src="{{asset('img/ccfcd/terrain.jpg') }}" alt="">
                                    <span>Semaine</span>
                                </a>
                            </div>
                            <div class="single-event-text">
                                <h3><a href="#">Journée mon école propre</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-time"></i>16.20  - 17.30 </span>
                                    <span><i class="zmdi zmdi-pin"></i>CCFCD</span>
                                </div>
                                <p>Cette jounée denommée travaux manuels, se fait une fois par semaine par les élèves de chaque classe, assisté par un encadreur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event-item">
                            <div class="single-event-image">
                                <a href="#">
                                    <img src="{{asset('img/ccfcd/photo5.jpg') }}" alt="">
                                    <span>Debut Juin</span>
                                </a>
                            </div>
                            <div class="single-event-text">
                                <h3><a href="#">Fete de fin d'année</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-time"></i>8.00  - 17.00 </span>
                                    <span><i class="zmdi zmdi-pin"></i>CCFCD</span>
                                </div>
                                <p>Nous ne savons pas que travailler, nous jouons et faisons valoir nos talents. En cette journée nous recompensons les meilleurs élèves de chaque classe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End of Bg White-->
</div>
<!--End of Main Wrapper Area-->


@endsection
