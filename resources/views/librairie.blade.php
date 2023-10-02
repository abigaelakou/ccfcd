@extends('template')

@section('banner')
  <!--Breadcrumb Banner Area Start-->
  <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Librairie</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            <li>Librairie</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
@endsection

@section('body')

     <!--Online Product Area Start-->
     <div class="product-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Complement scolaire</h3>
                            <p>Il y a des gadgets scolaires supplementaires au sein de l'établissement. Pour plus d'infos prière nous contacter.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!--Single Product Start-->
                    <div class="single-product mb-30">
                        <div class="product-img img-full">
                            <span class="onsale">Ecole!</span>
                            <a href="#" tabindex="0">
                                <img src="{{ asset('img/ccfcd/macaron.jpeg') }}" alt="">
                            </a>
                            
                          
                        </div>
                        <div class="product-content">
                            <h6><a href="#" tabindex="0">Macaron</a></h6>
                        </div>
                        
                    </div>
                    <!--Single Product Start-->
                </div>
        
                <div class="col-lg-3 col-md-6">
                    <!--Single Product Start-->
                    <div class="single-product mb-30">
                        <div class="product-img img-full">
                            <a href="#" tabindex="0">
                                <img src="{{ asset('img/ccfcd/carnet_correspondance.jpeg') }}" alt="">
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
@endsection
