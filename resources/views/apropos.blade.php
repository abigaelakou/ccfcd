@extends('template')

@section('banner')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">APROPOS DE NOUS</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('index') }}">ACCUEIL</a></li>
                            <li>APROPOS DE NOUS</li>
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
<!--About Area Start-->
<div class="about-area mt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-container animated rotateInDownLeft">
                    <h3>CCFCD <span class="orange-color">meilleur établissement scolaire</span> <span
                            class="orange-color">à votre</span> service</h3>
                </div>
                <div class="col-lg-12 ">
                    <p class="text-justify">Situé à Gonzague-ville au corridor après l’institut hygiénique dans la
                        commune de Port-Bouët
                        à Abidjan, le Collège Catholique des Frères Carmes Déchaux (CCFCD)
                        est dirigé par l’Ordre religieux des Frères Carmes dans le diocèse de Grand-Bassam, avec la
                        lettre de reconnaissance de monseigneur Raymond AHOUA datée du 13/07/2010.</p>
                    <p class="text-justify"> Sur décision de création du 22 Septembre 2010 et sur décision d’ouverture
                        du 07/07/2016, le
                        CCFCD a ouvert ses portes à la rentrée scolaire 2015-2016 sous le statut du collège privé
                        confessionnel à base 2(6e, 5e, 4e, 3e) installé sur une superficie de 2 ha.</p>
                </div>
                <div class="col-lg-12text-justify">
                    <p> Le collège dispose d’un bloc administratif ( un hall d’attente,
                        quatre bureaux, une salle de profs, deux toilettes pour professeurs hommes, deux toilettes pour
                        professeurs dames), huit salles de classes de quarante places chacune, dont six sont
                        opérationnelles en cette rentrée scolaire 2021- 2022, un labo pour PC,
                        un labo pour SVT, une chambre froide pour la conservation des produits et des appareils de labo,
                        un bloc d’infirmerie en voie d’équipement,
                        une pelouse de football, une piste d’athlétisme,
                        un sautoir ( saut en hauteur, saut en longueur),
                        un espace pour les sports de main( en projet), une cantine opérationnelle
                        ( mais en attente de finition), un bloc de toilette séparé en deux dont chacun contient six WC
                        et
                        deux douches pour les élèves garçons et six WC et deux douches pour les élèves filles, un
                        parking pour le transport des élèves.</p>
                </div>
            </div>
            <div class="col-lg-6  animated rotateIn">
                <div class="about-image-area img-full">
                    <img src="{{asset('img/ccfcd/administration.jpg')}}" alt="">
                    <img src="{{asset('img/ccfcd/groupe.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <div class="about-image-area img-full">
                    <img src="{{asset('img/ccfcd/eleve_serieux1.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="col-lg-12">
                    <p class="text-justify  ">L’administration du CCFCD contient six membres dont quatre
                        religieux,
                        une religieuse et une laïque, dix sept professeurs dont quatorze hommes et trois dames, deux
                        techniciens de surface, quatre chauffeurs dont deux circonstanciels et deux cantinières pour
                        demi-pension. L’actuel Directeur Général est <b> le père Ambroise Marie Fare Kossi DJOVAKPO.</b>
                    </p>
                    <p class="text-justify"> Un regard jeté sur le passé permet de relever beaucoup de motifs de fierté
                        et de satisfactions
                        qui
                        doivent susciter notre gratitude envers la fidélité de Dieu. Depuis son ouverture il y a sept
                        ans,
                        le CCFCD a présenté trois fois des candidats au BEPC, et les trois promotions ont fait des
                        résultats
                        de 100 pour cent.</p>
                </div>
                <div class="col-lg-12">
                    <p class="text-justify">A cause de la rigueur dans le travail et de la discipline, le
                        CCFCD gagne de plus en plus la confiance des parents. Ainsi d’un effectif de <strong>neuf (9) élèves à
                            l’ouverture</strong> , nous totalisons en
                        cette année académique 2022-2023 un effectif de 294 élèves. Ces brillants résultats situent
                        notre
                        établissement parmi les figures de proue dans système éducatif de la DREN Abidjan 2 (toujours
                        disponible à répondre à nos sollicitations). Pour l’heure, le CCFCD salue ses relations de
                        respect
                        mutuel avec le SEDEC de Grand-Bassam.</p>
                    <p class="text-justify"> La devise du CCFCD s’intitule comme suit : <b>
                            « EDUQUER aujourd’hui les CITOYENS et les CITOYENNES de demain ».</b></p>
                    <!--About Image Area End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Area-->
<!--Fun Factor Area Start-->
<div class="fun-factor-area fun-bg-img">
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
<!--Teachers Area Start-->
<div class="teachers-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h1>Nos encadreurs</h1>
                        <p>Nous avons plusieurs religieux qui nous suivent</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="agent mb-30">
                    <div class="image img-full">
                        <a class="img" href="#"><img src="{{asset('img/ccfcd/dp_new1.jpg')}}" width="200" height="301"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="team-details.html">Fr. Ambroise Marie Fare Kossi DJOVAKPO</a></h4>
                        <a href="#" class="phone">(+225) 07 88 78 01 30</a>
                        <a href="#" class="email">ambroisemarie@ccfcd.org</a>
                        <span class="properties">Directeur Général</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="agent mb-30">
                    <div class="image img-full">
                        <a class="img" href="#"><img src="{{asset('img/ccfcd/DE.jpg')}}" width="401" height="301"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">Fr. Germain TONDE</a></h4>
                        <a href="#" class="phone">(+225) 07 88 78 01 30</a>
                        <a href="#" class="email">germaintonde@ccfcd.org</a>
                        <span class="properties">Directeur des Etudes</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="agent mb-30">
                    <div class="image img-full">
                        <a class="img" href="#"><img src="{{asset('img/ccfcd/frere_anatole1.jpg')}}"  width="401" height="301" alt=""></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">Fr. Anatole KOUEMA </a></h4>
                        <a href="#" class="phone">(+225) 07 88 78 01 30</a>
                        <a href="#" class="email">anatolekouema@ccfcd.org</a>
                        <span class="properties">Educateur</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="agent mb-30">
                    <div class="image img-full">
                        <a class="img" href="#"><img src="{{asset('img/ccfcd/frere_alain1.jpg')}}" alt="" width="401" height="301"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#">Fr. Alain SOME</a></h4>
                        <a href="#" class="phone">(+225) 07 88 78 0130</a>
                        <a href="#" class="email">alainsome@ccfcd.org</a>
                        <span class="properties">Charger des affaires extérieurs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Teachers Area End-->
<!--Testimonial Area Start-->
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="testimonial-slider-2 owl-carousel">
                <div class="col-12">
                    <div class="single-testimonial testimonial-style-2">
                        <div class="des-testimonial">
                            <p>J'entendais les gens dires que c'est une bonne école, mais je doutais jusqu'à ce que j'envoi ma fille après son cepe. J'avoue que j'ai été émerveillé, ma fille est devenue plus responsable vue la rigueure...</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="{{asset('img/ccfcd/icone_personne.png')}}" alt="">
                            </div>
                            <div class="author-content">
                                <h5>Un parent  </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-testimonial testimonial-style-2">
                        <div class="des-testimonial">
                            <p>Rigueur - travail - discipline ainsi je pourrais definir ce collège. Felicitations à l'administration et professeurs . Vous formez vraiment les leaders de demains!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="{{asset('img/ccfcd/icone_personne.png')}}" alt="">
                            </div>
                            <div class="author-content">
                                 <h5>SA </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-testimonial testimonial-style-2">
                        <div class="des-testimonial">
                            <p>Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci
                                luctus et ultrices posuere cubilia Etiam porttitor, lacus in ...</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="img/testimonial/testimonial1.png" alt="">
                            </div>
                            <div class="author-content">
                                <h5>John Doe </h5>
                                <p>demo@hastech.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-testimonial testimonial-style-2">
                        <div class="des-testimonial">
                            <p>Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci
                                luctus et ultrices posuere cubilia Etiam porttitor, lacus in ...</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="img/testimonial/testimonial1.png" alt="">
                            </div>
                            <div class="author-content">
                                <h5>John Doe </h5>
                                <p>demo@hastech.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Testimonial Area End-->
@endsection