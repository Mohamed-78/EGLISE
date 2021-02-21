@extends('front.layouts.defaults',['title' => 'ORPHELINAT'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>L'orphelinat</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>L'orphelinat</li>
            </ul>
        </div>
    </div>
</div>


<div class="gc_causes_single_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_causes_single_Slider">
                    <div class="owl-carousel owl-theme">
                    <div class="item">
                      <img src="{{ asset('front/images/content/causes/causes_single_img1.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/causes/causes_single_img1.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/causes/causes_single_img1.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/causes/causes_single_img1.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_recent_slider_cont_wrapper gc_causes_single_slider_content">
                    <div class="gc_recent_slider_cont_heading">
                        <h3>L'orphelinat</h3>
                    </div>
                    <div class="gc_recent_slider_cont">
                        <p style="text-align: justify;">Nous croyons en l’enfant, en sa capacité à dépasser ses traumatismes et à se développer, si un environnement favorable lui est offert dans le contexte du placement. Toutes nos actions sont fondées sur une recherche constante de l’intérêt supérieur de l’enfant. Nous affirmons que l’enfant mérite qu’on lui accorde tout notre engagement, au-delà du strict respect des obligations légales.Acteurs de la protection de l’enfance, profondément attachés à la défense des droits de l’enfant, nous militons pour que ce droit soit reconnu et appliqué et au-delà, qu’il soit amélioré. Notre longue expérience d’accompagnement d’enfants, ainsi que notre travail autour de l’amélioration de nos pratiques peuvent contribuer aux débats et aux réflexions engagés dans le domaine de la protection de l’enfance.</p>
                    </div>
                    <div class="gc_recent_slider_btn gc_causes_single_donet_btn">
                        {{-- <ul>
                            <li><a href="#">DONATE</a></li>
                        </ul> --}}
                    </div>
                    <div class="gc_causes_single_social_wrapper">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gc_causes_single_slider_bottom_cont">
                    <div class="gc_causes_single_slider_bottom_heading">
                        <h3>NOUS ASSURONS À L’ENFANT UN CADRE DE TYPE FAMILIAL INDISPENSABLE À SON ÉPANOUISSEMENT</h3>
                        <p style="text-align: justify;">Tout enfant a le droit de grandir dans un environnement attentif et protecteur de type familial. C’est idéalement au sein de sa famille naturelle qu’un enfant se construit, affectivement et psychologiquement, qu’il vit pleinement son enfance et se prépare à son avenir d’adulte.
                        Malgré les mesures de prévention, il y a des situations où la famille n’est plus à même d’assumer son rôle. Nous avons dès lors l’obligation de soutenir les enfants séparés de leurs parents pour des raisons familiales graves, et de faire en sorte qu’ils grandissent et se développent dans les meilleures conditions qui soient.
                        Nous sommes convaincus qu’un enfant a toutes les chances de pouvoir se construire ou se reconstruire s’il se sent aimé et s’il peut aimer en retour.
                        La séparation d’avec sa famille rend l’enfant particulièrement vulnérable.
                        Dans l’hypothèse d’un placement de longue durée, nous sommes convaincus qu’une autre personne que les parents peut offrir à l’enfant l’affection, l’attention et la sécurité qui sont indispensables à son développement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gc_event_index_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="gc_video_main_wrapper">
                    <div class="gc_video_img_overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="gc_video_box">
                                    <h2 style="text-align: center;font-size: 35px;">LA CONGRÉGATION DES SŒURS SERVANTES DU SACRE CŒUR DE JESUS</h2> 
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="gc_causes_single_slider_bottom_cont">
                        <div class="gc_causes_single_slider_bottom_heading">
                            <h3>Spiritualité et Charismes : Adoration, prière des malades, Service (charité), et s’occuper des enfants abandonnés et des malades</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 2em;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gc_blog_index_post_wrapper">
                        <div class="gc_blog_index_img_wrapper">
                            <img src="{{ asset('front/images/soeur.jpg') }}" class="zoom image img-responsive" alt="blog_img"/>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gc_blog_index_date_main_sec">
                        <div class="gc_blog_index_date_cont_wrapper">
                            <h4>Mère supérieure:&nbsp;Sœur ADJA Agnès</h4>
                            <p style="font-size:20px;"><u>Contact</u> : 01 41 97 09 17 / 07 07 70 24 54.</p>
                            <h5><a href="front/images/doc.pdf"  download="doc.pdf">Télecharger le programme</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
