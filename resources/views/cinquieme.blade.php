@extends('template')

@section('banner')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">EMPLOIS DU TEMPS</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('index') }}">ACCUEIL</a></li>
                            <li>EMPLOI DU TEMPS</li>
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
 <!--Single Product Start-->
 <div class="single-product-area ">
    <div class="container">
        <div class="col-lg-8 col-10 ">
                <div class="single-product-content">
                    <h1 class="single-product-name text-center">Télécharger votre emploi du temps en un clic</h1>

                  <div class="row">  
                <div class="col-lg-3">
                    <a href="{{ asset('Emploi_du_temps/5eme1.pdf') }}" download>
                    <img src="{{ asset('img/ccfcd/img_emptps.png') }}"  width="104" height="142">
                    </a>
                    <p>5ème1</p>
                </div>

                <div class="col-lg-3">
                    <a href="{{ asset('Emploi_du_temps/5eme2.pdf') }}" download>
                    <img src="{{ asset('img/ccfcd/img_emptps.png') }}" width="104" height="142">
                    </a>
                    <p>5ème2</p>
                </div>
            </div> 
                </div>
            </div>
    </div>
</div>

<!--Single Product End-->

<!--Testimonial Area End-->
@endsection