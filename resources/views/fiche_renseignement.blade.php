@extends('template')

@section('banner')
<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Fiche de renseignement</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            <li>Fiche de renseignement</li>
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
<div class="contact-area pt-10 pb-10">
    <div class="container">
        <div class="text-center mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <u><h3>DOSSIERS A FOURNIR POUR LES INSCRIPTIONS EN 6<sup>ème</sup>  et 5<sup>ème</sup> :</h3></u> <br>
                    <ol>
                        <li class="text-justify">Un extrait d'acte de naissance original de moins de trois(3) mois</li>
                        <li class="text-justify">Une photocopie du relevé de notes du coucours d'entrée en 6<sup>ème</sup></li>
                        <li class="text-justify">Une attestation de correspondance signée et légalisée par les parents ou le tuteur légal</li>
                        <li class="text-justify">Le dossier de l'élève(pour les inscriptions en 5<sup>ème</sup>) avec ses bulletins de 6<sup>ème</sup></li>
                        <li class="text-justify">Une photocopie du dernier bilan de santé(les yeux, les oreilles, le coeur, la drépanocytose) </li>
                    </ul>
                    </div>
                </div>
            </div>
            <strong>
            <h3 class="text-center">COMPLEMENT</h3>
            </strong>
        </div>
        <div class="row g-0 shadow">
            <table class="center table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">INDICATION</th>
                        <th class="text-center">MONTANT</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="">Deux paquets (02) de bics Velleda effaçable</td>
                        <td class="text-center">8 000F</td>
                    </tr>
                    <tr>
                        <td class="">Trois paquets (03) paquets de Ramette</td>
                        <td class="text-center">12 000F</td>
                    </tr>
                    <tr>
                        <td class="">Trois paquets (06) paquets de copie double</td>
                        <td class="text-center">2 700F</td>
                    </tr>
                    <tr>
                        <td class="">Un lot (10) de papiers hygiénique</td>
                        <td class="text-center">1 000F</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-3">
            <strong>
                <h1 class="text-center mt-2">FRAIS D'INSCRIPTION: 25.000F</h1>
                <h1 class="text-center">FRAIS DE SCOLARITE: 250.000F</h1>
            </strong>
            <p><strong> NOTRE DEVISE: Eduquer aujourd'hui les citoyens et citoyennes de demains <br>NOTRE OBJECTIF: Atteindre chaque année le taux de 100%.</strong></p>
            <h3>L'établissement est équipée de deux laboratoires dotés du matériel pédagogique pour les manipulations  des élèves en S.V.T et en Physique Chimie.</h3> <br>
            <h2 class="text-center"> <strong> ECHEANCIER DES VERSEMENTS</strong></h2>
        </div>
        <div class="row g-0 shadow mt-4">
            <table class="center table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">PERIODE</th>
                        <th class="text-center">VERSEMENT</th>
                        <th class="text-center">MONTANT</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td rowspan="2">Fin Septembre</td>
                        <td class="text-center">Insciption</td>
                        <td class="text-center">25.000F</td>
                    </tr>
                    <tr>
                        <td class="text-center">1er Versement</td>
                        <td class="text-center">100 000F</td>
                    </tr>
                    <tr>
                        <td>Fin Novembre</td>
                        <td class="text-center">2ème Versement</td>
                        <td class="text-center">50.000F</td>
                    </tr>

                    <tr>
                        <td>Fin Janvier</td>
                        <td class="text-center">3ème Versement</td>
                        <td class="text-center">25.000F</td>
                    </tr>

                    <tr>
                        <td>Fin Février</td>
                        <td class="text-center">4ème Versement</td>
                        <td class="text-center">25.000F</td>
                    </tr>

                    <tr>
                        <td>Fin Mars</td>
                        <td class="text-center">5ème Versement</td>
                        <td class="text-center">25.000F</td>
                    </tr>
                    <tr>
                        <td>Fin Avril</td>
                        <td class="text-center">5ème Versement</td>
                        <td class="text-center">25.000F</td>
                    </tr>
                    <tr>
                        <td rowspan="3" colspan="3" class="text-center">
                            <h3> TOTAL : 275.000F </h3>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="text-center mt-3">
                    <strong>
                        <h3 class="text-center">CANTINE </h3>
                    </strong>
                </div>
                <div class="shadow">
                    <table class="center table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">PERIODE</th>
                                <th class="text-center">MONTANT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Fin Octobre</td>
                                <td class="text-center">1er Versement</td>
                                <td class="text-center">30.000F</td>
                            </tr>
                            <tr>
                                <td class="text-center">Fin Janvier</td>
                                <td class="text-center">2ème Versement</td>
                                <td class="text-center">30 000F</td>
                            </tr>
                            <tr>
                                <td class="text-center">Fin Mars</td>
                                <td class="text-center">3ème Versement</td>
                                <td class="text-center">30 000F</td>
                            </tr>

                            <tr>
                                <td rowspan="3" colspan="3" class="text-center">
                                    <h3> TOTAL : 90.000F </h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-center mt-3">
                    <strong>
                        <h3 class="text-center">TRANSPORT </h3>
                    </strong>
                </div>
                <div class="shadow">
                    <table class="center table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">PERIODE</th>
                                <th class="text-center">MONTANT</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            <tr>
                                <td class="text-center">Fin Novembre</td>
                                <td class="text-center">1er Versement</td>
                                <td class="text-center">60.000F</td>
                            </tr>
                            <tr>
                                <td class="text-center">Fin Janvier</td>
                                <td class="text-center">2ème Versement</td>
                                <td class="text-center">70 000F</td>
                            </tr>
                            <tr>
                                <td class="text-center">Fin Avril</td>
                                <td class="text-center">3ème Versement</td>
                                <td class="text-center">60 000F</td>
                            </tr>
        
                            <tr>
                                <td rowspan="3" colspan="3" class="text-center">
                                    <h3> TOTAL : 190.000F </h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div>
           <strong>NB:</strong>
           <h3><strong>* La réinscription des anciens élèves doit s'effectuer avant fin Juillet.</strong></h3>
           <h3><strong>* L'inscription doit se faire par un parent(père,mère ou tuteur légal); <br>  toute somme encaissée ne sera pas remboursée.</strong></h3>
           <h3><strong>* Nos élèves entrent dans l'enceinte et ressortent qu'à la fin des cours. <br>  Ils pourront trouver dans l'enceinte du collège le petit dejeuner et le déjeuner(cantine).</strong></h3>
           <h3><strong>* Le collège dispose d'un car pour les élèves.</strong></h3>
           <h3><strong>* Nous n'acceptons pas d'inscription une semaine après le début des cours.</strong></h3>

        </div>
        <div class="row col-md-6 col-lg-6 col-6 mx-auto text-30 mb-3">
            <button class="click-btn btn btn-block text-30"><a href="{{ asset('img/ccfcd/fiche.jpg') }} " download>Télécharger la fiche de renseignement.</a></button>
        </div>
    </div>


</div>
</div>
<!--Contact Area End-->
@endsection