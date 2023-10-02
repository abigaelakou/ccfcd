@extends('template')

@section('banner')
  <!--Breadcrumb Banner Area Start-->
  <div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Contact</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            <li>Contact</li>
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

      <!--Contact Area Start-->
      <div class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row g-0">
               <div class="col-md-12 col-lg-6 warning-bg">
                    <div class="edubuzz-address">
                        <h2 class="contact-title">Vous pouvez nous contacter:</h2>
                        <p>Si vous avez quelques problèmes ou si vous voulez des informations, écrivez-nous ou appelez-nous. Il y a toujours une personne disponible pour vous repondre.</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Adresse : 64R3+FWX,Gonzague,Corridor,Abidjan</li>
                            <li><i class="fa fa-phone"></i> Tél : +225 07 88 78 0130</li>
                            <li><i class="fa fa-envelope-o"></i> Email: ccfcdgonzagueville@gmail.com</li>
                        </ul>
                        <div class="contact-social">
                            <h3><strong>Cherchez nous aussi sur :</strong></h3>
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                {{-- <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
               <div class="col-md-12 col-lg-6 yellow-bg">
                    <div class="contact-form-wrap">
                        <h2 class="contact-title">Envoyer votre message</h2>
                        <form id="contact-form" action="{{ route('contact') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Nom*" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="phone" placeholder="Tél*" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="sujet" placeholder="Sujet*" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="email" placeholder="Email*" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-style">
                                        <textarea name="message" placeholder="Ecrivez votre message ici.."></textarea>
                                        <button class="button-default" type="submit"><span>Envoyer un Email</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- <p class="form-messege"></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Area End-->
    @if (session('flash'))
    <p style="color:brown">{{ session('flash') }}</p>
@endif
@endsection
