@extends('front.layouts.defaults',['title' => 'CONTACTS'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>Contacts</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>Contacts</li>
            </ul>
        </div>
    </div>
</div>

<div class="gc_map_main_wrapper gc_contact_map_wrapper">
    <div class="container">
        <div class="gc_get_box_wrapper">
            <div class="gc_get_heading_icon">
                <img src="{{ asset('front/images/header/map_icon.png') }}" alt="map_icon"/>
            </div>
            <div class="gc_get_heading">
                <h1>Notre emplacement</h1>
            </div>
            <div class="gc_get_pera">
                <p>Vous souhaitez rejoindre notre communauté? Consulter la map pour nous rejoindre pour louer le Christ</p>
            </div>
            <div class="gc_map_add_wrapper gc_map_add_wrapper1">
                <div class="gc_map_location_icon_wrapper">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <h3>Riviera Faya noin loin de la cité Génie
                     2000</h3>
                </div>
            </div>  
            <div class="gc_map_add_wrapper gc_map_add_wrapper2">
                <div class="gc_map_location_icon_wrapper">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <h3>(+225)21020201 / (+225)01012020</h3>
                </div>
            </div>
            <div class="gc_map_add_wrapper gc_map_add_wrapper3">
                <div class="gc_map_location_icon_wrapper">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <h3> <a href="#">infos@gmail.com</a></h3>
                </div>
            </div>
        </div>
        <div class="gc_right_map_main_wrapper">
            <div id="map" style="width:100%; float:left; height:450px;"></div>
            <div class="gc_map_label_wrapper">
                <p><a href="#">Localisation</a></p>
            </div>
        </div>
    </div>
</div>


<div class="gc_causes_single_contact_form_wrapper gc_contact_section_form_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_contact_heading_main_wrapper">
                <div class="gc_blog_heading_wrapper">
                    <div class="gc_blog_heading">
                        <h2>Missionnaire de Jesus</h2>
                        <h1>Contactez-nous</h1>
                    </div>
                </div>
                 @if(session()->has('message'))
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-success">
                    <button class="close" type="button" data-dismiss="alert">×</button><strong><i class="fa fa-ok"></i>SUCCES : <span style="font-size: 16px;">Opération effectuée avec succès.</span></strong>.
                  </div>
                </div>
            @endif
            </div>
            <form action="/poster_message" method="post" id="myForm">
                @csrf
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gc_causes_single_forms">
                        <input type="text" name="nom" placeholder="Nom" required=""><i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gc_causes_single_forms gc_causes_single_forms2">
                        <input type="email" name="email" placeholder="Adresse-email*"  required=""><i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="gc_causes_single_forms gc_causes_single_forms2">
                        <input type="text" name="objet" placeholder="Objet"  required=""><i class="fa fa-star"></i>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="gc_causes_single_teatarea">
                         <textarea placeholder="Message" name="message" rows="5"></textarea><i class="fa fa-pencil-square-o"  required=""></i>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="gc_causes_single_form_btn gc_contact_section_main_btn">
                        <ul>
                            <li><a onclick="document.getElementById('myForm').submit()">ENVOYER</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
