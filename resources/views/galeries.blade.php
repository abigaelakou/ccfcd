@extends('template')

@section('banner')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">GalerIE</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('index') }}">ACCUEIL</a></li>
                            <li>GALERIE</li>
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

<!--Gallery Area Start-->
<div class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/administration.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/administration.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/cantine.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/cantine.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/cantine2.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/cantine2.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/cantine3.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/cantine3.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/cantine7.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/cantine7.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/en_classe.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/en_classe.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/eleves.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/eleves.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/terrain.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/terrain.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->
            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/terrain2.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/terrain2.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->

            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/vue_ensemble.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/vue_ensemble.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->

            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/veu_densemble.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/veu_densemble.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->

            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/groupe1.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/groupe1.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->


            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/photo3.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/photo3.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->


            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/photo4.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/photo4.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->

            <!--Single Gallery Image Start-->
            <div class="col-md-4 col-sm-6">
                <div class="single-gallery-img mb-30">
                    <a href="{{ asset('img/ccfcd/photo5.jpg') }}" data-fancybox="images"><img
                            src="{{ asset('img/ccfcd/photo5.jpg') }}" alt=""></a>
                </div>
            </div>
            <!--Single Gallery Image End-->

  <!--Single Gallery Image Start-->
  <div class="col-md-4 col-sm-6">
    <div class="single-gallery-img mb-30">
        <a href="{{ asset('img/ccfcd/eleve_en_classe.jpg') }}" data-fancybox="images"><img
                src="{{ asset('img/ccfcd/eleve_en_classe.jpg') }}" alt=""></a>
    </div>
</div>
<!--Single Gallery Image End-->

  <!--Single Gallery Image Start-->
  <div class="col-md-4 col-sm-6">
    <div class="single-gallery-img mb-30">
        <a href="{{ asset('img/ccfcd/en_classe2.jpg') }}" data-fancybox="images"><img
                src="{{ asset('img/ccfcd/en_classe2.jpg') }}" alt=""></a>
    </div>
</div>
<!--Single Gallery Image End-->
  <!--Single Gallery Image Start-->
  <div class="col-md-4 col-sm-6">
    <div class="single-gallery-img mb-30">
        <a href="{{ asset('img/ccfcd/groupe.jpg') }}" data-fancybox="images"><img
                src="{{ asset('img/ccfcd/groupe.jpg') }}" alt=""></a>
    </div>
</div>
<!--Single Gallery Image End-->
            
        </div>
    </div>
</div>
<!--Gallery Area End--->
@endsection