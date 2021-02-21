@extends('front.layouts.defaults',['title' => 'ENSEIGNEMENTS'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>Enseignements</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>Enseignements</li>
            </ul>
        </div>
    </div>
</div>

<div class="gc_about_sec_story_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gc_about_sec_heading_wrapper">
                    <div class="gc_about_sec_heading">
                        <h2>Missionnaire de Jesus</h2>
                        <h1>Nos enseigements</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_about_sec_cont_main_wrapper">
                    <div class="gc_about_sec_cont_wrapper">
                        <h2>MISSIONNAIRES DE JESUS : NOS ENSEIGNEMENTS</h2>
                        <p style="text-align: justify;">
                           Nous avons trois catégories d’enseignements disponibles pour tous sur notre site web.
                          Il s’agit :
                        </p>
                        <p style="text-align: justify;">
                           <strong>-Premier Niveau : Pour chrétiens débutants.</strong> Ces articles sont regroupés dans les séries ‘’APPELS A LA CONVERSION’’ et ‘’HISTOIRES BIBLIQUES POUR ENFANTS’’.<br>
                           <strong>-Deuxième Niveau : Pour chrétiens moyens. </strong>Ces articles sont dans les séries ‘’CLEFS DU SUCCES’’ et ‘’CAPSULES CHRETIENNES’’.<br>
                           <strong>-Troisième Niveau : Pour chrétiens matures.</strong> Ces articles sont dans les séries ‘’COURS BIBLIQUES’’ et ‘’COMPRENDRE LA FOI CATHOLIQUE’’.
                        </p>
                        <p style="text-align: justify;">
                            Nous vous offrons en tout :<br>
                            -100 Articles de la collection ‘’Appels à la conversion’’.<br>
                            -58 ‘’Histoires bibliques pour enfants’’.<br>
                            -1890 Articles de la collection ‘’Clefs du succès’’.<br>
                            -900 ‘’Capsules chrétiennes’’.<br>
                            -1763Articles de la collection ‘’Cours bibliques’’.<br>
                            -108 Articles de la collection ‘’Comprendre la foi catholique’’.<br>
                            -365 Pensées des Saints sur mes rapports avec Dieu et mon prochain.<br>
                            -165 Pensées des Saints sur l’Eucharistie.<br>
                            -130 Pensées des Saints sur le sacrement de la réconciliation.<br>
                            -33 Belles pages sur Marie.<br>
                            -425 Prières catholiques.<br>
                            -205 Prières à Marie.<br>
                            -23 Thèmes de prières-neuvaines-chapelets-litanies.<br>
                            -202 Poésies d’inspiration chrétienne.<br>
                            -Plusieurs enseignements et chants audio et vidéo.<br>
                           <blockquote>
                               <strong>Puisse le SAINT-ESPRIT vous édifier par nos enseignements</strong>
                           </blockquote>
                        </p>
                    </div>
                </div>  
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_about_sec_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                    <div class="item">
                      <img src="{{ asset('front/images/content/about/ens_1.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/about/ens_2.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/about/ens_3.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image: url(../../../public/front/images/content/testi_bg.jpg);background-size: cover;">
    <div class="gc_merry_count_wrapper">
        <div class="gc_merry_count">
            <h3>MISSIONNAIRES DE JESUS : NOS DEPARTEMENTS /<span>PUBLICATION – EVANGELISATION - ACTIVITES</span></h3>
        </div>
    </div>
</div> --}}

<div class="gc_video_main_wrapper">
    <div class="gc_video_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gc_video_box">
                    <h2>MISSIONNAIRES DE JESUS : NOS DEPARTEMENTS/ PUBLICATION – EVANGELISATION - ACTIVITES</h2>
                </div>
            </div>
        </div>
    </div>  
</div>
<div class="gc_about_counter_category_main_wrapper">
    <div class="container">
        <div class="row">
            <div style="padding-top: 5em;margin-left: 12em;padding-bottom: 2em;">
                 <h3>Notre fonctionnement interne s’articule autour de trois départements.</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="gc_about_cont_wrapper gc_about_count_cont_wrapper">
                    <div class="gc_about_icons_wrapper">
                        <i class="fa fa-arrows"></i>
                    </div>
                    <div class="gc_about_icons_cont_wrapper about_count_cont_heading">
                        <h3><a href="#">"Le département Publication"</a></h3>
                    </div>
                </div>
                <div class="gc_about_bottom_cont_wrapper">
                    <p>Chaque ‘’Missionnaire de Jésus mérite de bénéficier des services internes de la Communauté ; C’est l’étape du "recevoir". Par ce département, le membre bénéficie d’une formation approfondie spirituelle, religieuse et sociale. <br>En effet, la direction met à la disposition des membres, plusieurs enseignements. Comme Jésus-Christ, le bon Berger qui s’est constitué en banque spirituelle pour Ses disciples, nous avons la lourde responsabilité d’aider les membres à délier tous les nœuds de leur vie. <br>Ce faisant, nous avons constamment recours aux Prêtres de l’Eglise, colonne et support de vérité, pour accomplir notre mission divine.
                    </p>
                    <p>"Le département Publication" met à votre disposition ce site web et environ 180 livres sous formes de textes, d’audio et de vidéo.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="gc_about_cont_wrapper gc_about_count_cont_wrapper">
                    <div class="gc_about_icons_wrapper">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="gc_about_icons_cont_wrapper about_count_cont_heading">
                        <h3><a href="#">"Le département Evangélisation"</a></h3>
                    </div>
                </div>
                <div class="gc_about_bottom_cont_wrapper">
                    <p>Nous avons plusieurs champs missionnaires, principalement dans les zones démunies d’évangélisation, les villes et villages éloignés et souvent, difficilement accessibles. <br>
                    Chaque ‘’Missionnaire de Jésus’’ aguerri et bien formé se doit d’évangéliser avec ses moyens humains, logistiques et financiers ; C’est l’étape du "donner". Le don est une expression merveilleuse de l’adoration de notre cœur. C’est aussi une manière fantastique d’investir en Dieu. En donnant, je fais la démonstration que mon amour de Dieu et des autres surpasse l’emprise des biens et des richesses ; ainsi, la générosité est un moyen efficace de détruire la séduction de Satan qui cherche à faire de mes richesses le centre de ma vie. De plus, le don est aussi un moyen extraordinaire de rendre témoignage de l’amour de Dieu. Le don met en échec l’esprit de calcul et de profit présent dans ce monde ; il parle de Dieu.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"  style="padding-bottom: 2em;">
                <div class="gc_about_cont_wrapper gc_about_count_cont_wrapper">
                    <div class="gc_about_icons_wrapper">
                        <i class="fa fa-file"></i>
                    </div>
                    <div class="gc_about_icons_cont_wrapper about_count_cont_heading">
                        <h3><a href="#">"Le département Activités"</a></h3>
                    </div>
                </div>
                <div class="gc_about_bottom_cont_wrapper">
                    <p>Chaque ‘’Missionnaire de Jésus’’ devra avoir des activités orientées vers son prochain. C’est l’étape du "progresser". Pour progresser, nous devons d’abord considérer les biens les plus précieux ou ceux de notre société privée comme appartenant à Dieu. Nous Lui accordons le droit de gérer ces biens, et si telle est Sa volonté à les Lui rendre d’une manière ou d’une autre. Ensuite, nous devons rechercher comment consacrer une partie de notre capital pour aimer les autres. Cette libéralité peut se faire en destinant une part de notre temps pour servir Dieu, en faisant profiter les autres de nos efforts.
                    </p>
                    <p>Le Centre d’Accueil et de Transit de Katiola, dirigé par notre révérant Père et Conseiller GERMAIN KALARI COULIBALY est au service des enfants nécessiteux, orphelins et rejetés. C’est le service "Partage". 
                    Le service "Education" quant à lui, est assuré par la Congrégation des Sœurs Servantes du Sacré Cœur de Jésus, et dirigée par la Mère supérieure AGNES. 
                    </p>
                </div>
            </div>

            <div class="gc_testi_slider_main_wrapper">
                <div class="gc_testi_slider_img_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="gc_testi_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="gc_testi_slider_cont_wrapper">
                                            <div class="gc_testi_slider_logo_wrapper">
                                                <img src="{{ asset('front/images/content/testi_slider_logo.png') }}" alt="slider_img" class="img-responsive"/>
                                            </div>
                                            <div class="gc_testi_slider_content_wrapper">
                                                <h2>Jesus Christ dit:</h2>
                                                <div class="gc_dot_wrapper gc_dot_testi_slider_wrapper">
                                                    <div class="gc_dot" data-toggle="tooltip" data-placement="top" data-original-title="gc">
                                                        <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gc_testi_slider_bottom_content_wrapper">
                                                <h4>“Car Dieu a tant aimé le monde qu'il a donné son seul et unique Fils engendré, celui qui
                                                croit jamais en lui ne périra pas mais aura la vie éternelle. ”</h4>
                                                <p>Bible:<span>Matthieu 23:40</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="gc_testi_slider_cont_wrapper">
                                            <div class="gc_testi_slider_logo_wrapper">
                                                <img src="{{ asset('front/images/content/testi_slider_logo.png') }}" alt="slider_img" class="img-responsive"/>
                                            </div>
                                            <div class="gc_testi_slider_content_wrapper">
                                                <h2>Jesus Christ dit:</h2>
                                                <div class="gc_dot_wrapper gc_dot_testi_slider_wrapper">
                                                    <div class="gc_dot" data-toggle="tooltip" data-placement="top" data-original-title="gc">
                                                        <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gc_testi_slider_bottom_content_wrapper">
                                                <h4>“Car Dieu a tant aimé le monde qu'il a donné son seul et unique Fils engendré, celui qui
                                                croit jamais en lui ne périra pas mais aura la vie éternelle. ”</h4>
                                                <p>Bible:<span>Matthieu 23:40</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="gc_testi_slider_cont_wrapper">
                                            <div class="gc_testi_slider_logo_wrapper">
                                                <img src="{{ asset('front/images/content/testi_slider_logo.png') }}" alt="slider_img" class="img-responsive"/>
                                            </div>
                                            <div class="gc_testi_slider_content_wrapper">
                                                <h2>Jesus Christ dit</h2>
                                                <div class="gc_dot_wrapper gc_dot_testi_slider_wrapper">
                                                    <div class="gc_dot" data-toggle="tooltip" data-placement="top" data-original-title="gc">
                                                        <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gc_testi_slider_bottom_content_wrapper">
                                                <h4>“Car Dieu a tant aimé le monde qu'il a donné son seul et unique Fils engendré, celui qui
                                                croit jamais en lui ne périra pas mais aura la vie éternelle. ”</h4>
                                                <p>Bible:<span>Matthieu 23:40</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_causes_single_slider_bottom_cont">
                    <div class="gc_causes_single_slider_bottom_heading">
                        <h3>MISSIONNAIRES DE JESUS : NOTRE PROGRAMME D’ACTIVITES </h3>
                        <p style="text-align: justify;">‘’Missionnaires de Jésus’’ organise différentes sortes d’activités à savoir : <br>
                            <strong><u>LES PRIERES ORDINAIRES ET LES SEANCES D’ECOUTES SPIRITUELLES</u></strong><br>
                            Programme : louange-adoration-enseignement-échange fraternel.<br>
                            <strong><u>L’ORGANISATION DES SEMINAIRES, DES VEILLEES DE PRIERES ET DES CONCERTS DE LOUANGE </u></strong>
                        </p>
                        <p style="text-align: justify;">Les séminaires de formations ont lieu une fois par mois. <br>Il s’agit d’un temps d’édification, d’enseignement de la parole de DIEU, de louange et d’adoration. Ils ont lieu :<br>
                            •  Dans les lieux mixtes : Formation payante, salle à louer, décoration, logistique (location chaise bâche, sonorisation).<br> 
                            •   Dans les Paroisses : Formation non payante, autorisation paroissiale, cachet de l’Eglise.<br>
                            •   Dans les Communautés et Fraternités : Collaboration avec ladite communauté pour l’organisation.
                        </p>
                        <p style="text-align: justify;"><u>LA VENTE, LA DISTRIBUTION DE NOS LIVRES ET LA DIFFUSION DE NOS C.D AUDIO-VIDEO SUR LES RADIOS ET TELEVISIONS</u><br>
                            ‘’Missionnaires de Jésus’’ propose une série d’œuvres organisées en six collections. 
                        </p>
                        <p style="text-align: justify;">
                            Nous avons trois catégories de livres à savoir :<br>
                            -   La formation chrétienne (les collections ‘’Cours bibliques’’ et ‘’Comprendre la foi catholique’’).<br>
                            -   L’Initiation à la foi chrétienne (les collections ‘’Appels à la conversion’’ et ‘’Capsules chrétiennes’’).<br>
                            -   La Publication académique (les collections ‘’Clefs du succès’’ et ‘’Leadership’’).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_causes_single_slider_bottom_cont">
                    <div class="gc_causes_single_slider_bottom_heading">
                        <h3>MISSIONNAIRES DE JESUS : UNE INVITATION A SE METTRE AU SERVICE DE DIEU POUR L’HUMANITE</h3>
                        <p style="text-align: justify;">Dans Ezéchiel, chapitre 22, verset 29 et 30 nous lisons : " j’ai cherché un homme parmi eux " et dans Isaïe, chapitre 59, les versets 15 et 16, nous lisons : " Dieu a vu qu’il n’y avait pas un homme. " Dieu se demandait pourquoi personne n’intercédait. </p>
                        <p style="text-align: justify;">Comme aux temps d’Isaïe et d’Ezéchiel, Dieu cherche encore aujourd’hui des hommes et des femmes. Il y a certaines choses que seuls les hommes peuvent faire pour Lui. Il s’agit entre autres de partager le pain aux pauvres, de rendre service aux nécessiteux, de louer Dieu en assemblée, d’intercéder pour le salut des hommes égarés, d’annoncer la bonne nouvelle de l’Evangile et de rendre visite aux malades et aux prisonniers. </p>
                        <p style="text-align: justify;">‘’Missionnaires de Jésus’’, mandaté et organisé par l’Esprit de Dieu, se met totalement à la disposition du Seigneur pour être l’un de ces groupes d’hommes et de femmes sur qui Il peut compter. </p>
                        <p style="text-align: justify;">Dieu cherche donc des hommes et des femmes, qui ne restent pas indifférents devant les besoins de Son peuple, des gens réellement intéressés à l’œuvre divine (Ne 1,4). La plupart du temps, les hommes cherchent à exécuter leurs propres désirs. Mais Dieu recherche le cœur d’un homme dans lequel, Il pourra mettre Ses projets. Si vous en êtes un, alors nous vous attendons au sein de ‘’Missionnaires de Jésus’’ car c’est la famille de ceux qui s’oublient pour le service du Seigneur. 
                        </p>
                        <p style="text-align: justify;">Les ‘’Missionnaires de Jésus’’ se répartissent dans des départements spécialisés pour accomplir la mission divine. Il s’agit respectivement des départements " EVANGELISATION", "PUBLICATION" et " ACTIVITES ". 
                        </p>
                        <p style="text-align: justify;">Dieu vous attend donc au sein de ces départements pour faire Son travail. Le besoin divin en ressources humaines existe encore aujourd’hui. Chacun de vous a certainement des occupations particulières, mais pour Dieu, on trouve toujours du temps, et nous savons, que vous en trouverez dans votre programme. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
