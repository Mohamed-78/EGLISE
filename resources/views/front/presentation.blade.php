@extends('front.layouts.defaults',['title' => 'QUI SOMMES-NOUS'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>Qui sommes-nous</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>Qui sommes-nous</li>
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
                        <h1>Qui sommes-nous?</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_about_sec_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                    <div class="item">
                      <img src="{{ asset('front/images/content/about/story_img.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/about/story_img_2.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                    <div class="item">
                      <img src="{{ asset('front/images/content/about/story_img_3.jpg') }}" class="img-responsive" alt="story_img"/>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_about_sec_cont_main_wrapper">
                    <div class="gc_about_sec_cont_wrapper">
                        <h2>NOTREVISION</h2>
                        <p>
                            Notre vision est principalement basée sur le livre de Daniel, le chapitre 1, verset 4 : « des garçons en qui il n’y eût aucun défaut, beaux à voir, instruits en toute sagesse, experts en savoir, comprenant la science et ayant en eux de la vigueur, pour qu’ils se tiennent dans le palais du roi et qu’on leur enseigne la littérature et la langue des chaldéens. »
                        </p>
                        <p>
                            Le Missionnaire de Jésus se veut d’être :<br>
                            -   Un chrétien consacré à Dieu ;  <br>
                            -   Un chrétien beau à voir et à regarder ;<br>
                            -   Un chrétien sage ; <br>
                            -   Un chrétien responsable (vie familiale, sociale et professionnelle excellente) ; <br>
                            -   Un chrétien comprenant les lois du monde physique et spirituel ; 
                            -   Un chrétien qui fuit le péché ; <br>
                            -   Un chrétien qui lutte contre la maladie, la passivité, la misère et le démon.
                        </p>
                        <blockquote cite="http://example.com/facts">
                            <p>«Et souviens-toi de ton Créateur aux jours de ton adolescence, avant que ne viennent les mauvais jours et que n’arrivent les années dont tu diras : " je n’y ai aucun plaisir" » (Eccl 12,1)</p>
                        </blockquote>
                    </div>
                   {{--  <div class="gc_about_sec_cont_wrapper2">
                        <h2>Our Mission</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean tudin, lorem quis bibendum auctor. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.<br><br>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                    </div> --}}
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="gc_counter_main_wrapper gc_counter_about_main_wrapper">
    <div class="gc_counter_cont_wrapper">
        <div class="gc_counter_icon">
            <i class="fa fa-heart"></i>
        </div>
        <div class="count-description">
            <span class="timer">2540</span><i class="fa fa-plus"></i>
            <h5 class="con1">Disciples Hommes</h5>
        </div>
    </div>
    <div class="gc_counter_cont_wrapper2">
        <div class="gc_counter_icon">
            <i class="fa fa-globe"></i>
        </div>
        <div class="count-description">
            <span class="timer">7325</span><i class="fa fa-plus"></i>
            <h5 class="con2">Disciples Femmes</h5>
        </div>
    </div>
    <div class="gc_counter_cont_wrapper3">
        <div class="gc_counter_icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="count-description">
            <span class="timer">1924</span><i class="fa fa-plus"></i>
            <h5 class="con3">Prêtes</h5>
        </div>
    </div>
    <div class="gc_counter_cont_wrapper4">
        <div class="gc_counter_icon">
            <i class="fa  fa-users"></i>
        </div>
        <div class="count-description">
            <span class="timer">4275</span><i class="fa fa-plus"></i>
            <h5 class="con4">Orphelins</h5>
        </div>
    </div>
</div>

<div class="gc_about_counter_category_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <div class="gc_about_cont_wrapper gc_about_count_cont_wrapper">
                    <div class="gc_about_icons_wrapper">
                        <i class="fa fa-arrows"></i>
                    </div>
                    <div class="gc_about_icons_cont_wrapper about_count_cont_heading">
                        <h3><a href="#">NOTRE HYMME</a></h3>
                    </div>
                </div>
                <div class="gc_about_bottom_cont_wrapper">
                    <p>Sa divine puissance nous a donné (<strong>quoi ?</strong>)<br>
                    Tout ce qui contribue à la vie et à la piété (<strong>comment ?</strong>)<br>
                    En nous faisant connaitre (<strong>qui ?</strong>) <br>
                    Celui qui nous a appelés par Sa propre gloire et par Sa Vertu.<br> Par elles, les promesses les plus précieuses et les plus grandes (<strong>ont fait quoi ?</strong>)<br>
                    Nous ont été données (<strong>pourquoi ?</strong>) <br>
                    Afin que par elles, nous devenions participants de la nature divine (<strong>comment ?</strong>)<br>
                    En fuyant la corruption qui existe dans le monde par la convoitise. 
                    (2 P 1,3-4)
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="gc_about_cont_wrapper gc_about_count_cont_wrapper">
                    <div class="gc_about_icons_wrapper">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="gc_about_icons_cont_wrapper about_count_cont_heading">
                        <h3><a href="#">NOTRE DEVISE</a></h3>
                    </div>
                </div>
                <div class="gc_about_bottom_cont_wrapper">
                    <p>Efforts (persévérance)<br>
                    Foi (croyance en la toute-puissance de Dieu)<br>       
                    Vertu (Sagesse)<br>      
                    Science (connaissance)<br>      
                    Tempérance (maîtrise de soi)<br>       
                    Patience (espérance)<br>       
                    Piété (vie de prière)<br>
                    Amitié (Communion Fraternelle)<br>       
                    Amour (charité)  
                    (2 P 1, 5-7)
                    </p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <blockquote cite="http://example.com/facts">
                    <p>«Car ces qualités, si vous les possédez en abondance, ne vous laissent pas inactifs ni stériles pour connaître notre Seigneur Jésus Christ.»<br>(2 P1,8)</p>
                </blockquote>
            </div>
            <div class="gc_video_main_wrapper">
                <div class="gc_video_img_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="gc_video_box">
                                <h2 style="text-align: center;">Rejoignez-notre communauté pour adorer Jesus Christ</h2> 
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            {{-- <div class="gc_testi_slider_main_wrapper">
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
            </div> --}}

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_causes_single_slider_bottom_cont">
                    <div class="gc_causes_single_slider_bottom_heading">
                        <h3>MISSIONNAIRES DE JESUS : NOTRE GRANDE MISSION D’EVANGELISATION</h3>
                        <p style="text-align: justify;">Dans la grande mission, Jésus nous dit clairement que des signes suivront ceux qui auront cru quand ils prêcheront l’Evangile. Défiés, commissionnés et autorisés comme les premiers croyants, nous ferons l’expérience de la joie du Seigneur travaillant avec nous quand nous proclamons Son Evangile : "Et ils s’en allèrent prêcher partout".</p>
                        <p style="text-align: justify;">La clé pour atteindre le monde se trouve donc dans cette évangélisation instituée par Dieu, dans les mains de chaque croyant et aussi de chaque ‘’Missionnaire de Jésus’’. L’évangélisation permet aux chrétiens de devenir des gagneurs d’âmes chaque jour dans la grande récolte du temps. Comme les croyants du livre des Actes des Apôtres, nous pouvons faire l’expérience de la joie d’atteindre les égarés pendant que Dieu confirme Sa parole à travers les signes, les prodiges et les miracles de tout genre. Cependant, toute évangélisation doit se faire dans l’esprit de l’Eglise qui est colonne et support de vérité ! </p>
                        <p style="text-align: justify;">Qu’ils soient instruits ou illettrés, riches ou pauvres, tous répondent à Christ quand ils voient Sa compassion manifestée pour guérir les malades, chasser les démons et apporter la joie aux cœurs troublés : </p>
                        <p style="text-align: justify;">-Le prophète Elie, dans la Bible, a dénoncé les œuvres de Baal (dieu païen) et les gens se sont détournés de leur culte païen pour se tourner vers l’Eternel Dieu.Depuis ce temps jusqu’à notre époque, les gens sont prêts à servir le Dieu Tout-Puissant qui manifeste Sa réalité par des miracles d’amour.<br>
                        -   Dans la ville de Samarie, les foules étaient attentives à ce que disait Philippe, lorsqu’elles apprirent et virent les miracles qu’il faisait (Ac 8,6) : les esprits impurs sortaient,plusieurs paralytiques et boiteux furent guéris. Alors il y avait une grande joie dans la ville. Il semble que toute la ville accepta Jésus !<br>
                        -   Paul a attribué le succès de son ministère au fait que Dieu le confirmait par des miracles (He 2, 3-4 ; Rm 15,18-19) ;<br>
                        -   Pierre et Jean opérant dans le ministère de guérison, permirent à un homme boiteux étendu à la porte appelée la belle, d’être guéri et aussitôt une foule de cinq mille hommes s’assembla et cru;<br>
                        -   Paul a écrit : "ma parole et ma prédication ne reposaient pas sur les discours persuasifs de la sagesse, mais sur une démonstration d’Esprit et de puissance."  Et Dieu faisait des miracles extraordinaires par les mains de Paul, au point qu’on appliquait sur les malades des linges ou des étoffes qui avaient touché son corps, alors les maladies les quittaient et les esprits mauvais sortaient.
                        </p>
                        <p style="text-align: justify;">Notre suggestion avant d’atteindre des hauteurs dans l’évangélisation, est de nous imprégner de la vérité de la parole de Dieu concernant la grande mission. A cet effet, ‘’Missionnaires de Jésus’’ met à la disposition de ses membres en particulier et de tous en général, des cours de formations chrétiennes. </p>
                    </div>
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gc_causes_single_slider_bottom_cont">
                    <div class="gc_causes_single_slider_bottom_heading">
                        <h3>MISSIONNAIRES DE JESUS : NOTRE MOTIVATION </h3>
                        <p style="text-align: justify;">"Relevez les tribus de Jacob, rassemblez les survivants d’Israël, ce ne sera pas là tout ton service : Je veux encore faire de toi la lumière des nations, pour que Mon salut s’étende (soit manifesté) jusqu’aux extrémités de la terre’’ (Is 49,6). </p>
                        <p style="text-align: justify;">Jésus aime les peuples de toutes les races. Ceci doit être un exemple pour nous. N’a-t-il pas dit :" comme le Père M’a envoyé, Moi aussi, Je vous envoie" (Jn20,21) ; "Allez, faites de toutes les nations des disciples, baptisez-les au nom du Père, du Fils et du Saint-Esprit ; et enseignez-leur à garder tout ce que Je vous ai prescrit. Je suis avec vous tous les jours jusqu’à la fin du temps’’ (Mt 28,19-20). ‘’Mais vous recevrez une puissance, celle du Saint-Esprit survenant sur vous et vous serez Mes témoins à Jérusalem, dans toute la Judée, dans la Samarie et jusqu’aux extrémités de la terre’’ (Ac1,8).Dès lors, le Saint-Esprit a commencé l’envoie des chrétiens partout dans le monde. </p>
                        <p style="text-align: justify;">Ac 8 : citons entre autres celui de Philipe. Dieu l’envoya auprès d’un Africain, trésorier du roi d’Ethiopie. </p>
                        <p style="text-align: justify;">Ac 10 : puis ce fut le tour de Pierre auprès d’un Italien à Césarée. Pierre confessa : ‘’vous savez qu’il est interdit à un Juif de se lier à un étranger ou d’entrer chez lui ; mais Dieu m’a montré qu’il ne fallait dire d’aucun homme qu’il est souillé ou impur. Pour Dieu il n’y a pas de considération de personne’’ (Ac 10,34-35).<br> Ac 10 : puis ce fut le tour de Pierre auprès d’un Italien à Césarée. Pierre confessa : ‘’vous savez qu’il est interdit à un Juif de se lier à un étranger ou d’entrer chez lui ; mais Dieu m’a montré qu’il ne fallait dire d’aucun homme qu’il est souillé ou impur. Pour Dieu il n’y a pas de considération de personne’’ (Ac 10,34-35).<br>Ac 16 : après cela, Dieu envoya Paul sur le continent européen, en Macédoine. En ces temps-là, les européens avaient de nombreux dieux et ils étaient très surpris de voir celui qui prêchait un Dieu étranger. Ils disaient de Paul qu’il proclame des coutumes qu’il ne leur est pas permis d’honorer (Ac 16, 21). Pourtant Paul ne se découragea pas, il les exhorta à abandonner leurs dieux pour se tourner vers le Dieu Créateur (Ac 17, 18-31). 
                        </p>
                        <p style="text-align: justify;">L’histoire nous apprend que des missionnaires Européens ont apporté l’Evangile partout dans le monde, en Amérique, en Afrique et en Asie.
                         Notre vision consiste à être des ‘’Missionnaires de Jésus-Christ’’ à temps et à contre temps, dans les occasions favorables ou non. Nous devons être des témoins de Jésus; des personnes qui vivent l’Evangile au quotidien, malgré les obstacles qu’elles rencontrent.
                        Dans ce sens, nous, frères et sœurs, désirons vous communiquer quelque chose de notre réponse à cet appel. Notre vie est basée principalement sur les lois et les clefs du royaume, les mystères ou paraboles, les béatitudes, les sacrements, la Sainte Vierge Marie et la doctrine de l’Eglise catholique. Chaque membre consacre ses talents et tous ses efforts, dans toute la fougue reconnue aux jeunes, pour la mission. L’argent, les possessions des membres ne sont que des instruments au service de notre mission.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
