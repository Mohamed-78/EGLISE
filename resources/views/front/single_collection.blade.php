@extends('front.layouts.defaults',['title' => 'DETAILS'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>{{ $single->titre }}</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>Details</li>
            </ul>
        </div>
    </div>
</div>

<div class="gc_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <style type="text/css" media="screen">
                .video-embarquee {
                  position: relative;
                  width: 100%;
                  padding-bottom: 56.25%; 
                  height: 0;
                }
                .video-embarquee iframe {
                  position: absolute;
                  top:0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                }
            </style>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_blog_index_post_wrapper">
                            @if(isset($single->lien))
                            <div class="gc_blog_index_img_wrapper">
                               <div class="video-embarquee">
                                    <iframe width="560" height="315" src="{{ $single->lien }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            @else
                             <div class="gc_blog_index_img_wrapper">
                                 <img src="{{URL::asset('admin/media/'.$single->image)}}" alt="slider_img" class="zoom image img-responsive"/>
                            </div>
                            @endif                        
                            <div class="gc_blog_index_date_main_sec">
                                <div class="gc_blog_index_date_wrapper">
                                    <div class="gc_blog_index_date">
                                        <p>{{ (new DateTime($single->date_ajout))->format('d') }}/<br><span>{{ (new DateTime($single->date_ajout))->format('m') }}</span></p>
                                    </div>
                                </div>
                                <div class="gc_blog_index_date_cont_wrapper gc_blog_single_index_pera_cont_wrapper">
                                    <h4>{{ $single->titre }}</h4>
                                    <p>{{ $single->description }}</p>
                                </div>
                                <div style="width: 100%;">
                                    @if(isset($single->lien))
                                    <img src="{{URL::asset('admin/media/'.$single->image)}}" alt="slider_img" class="img-responsive"/>
                                    @endif
                                </div> 
                            </div>  
                        </div>
                    </div>
                    <!--Commentaire-->
                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contect_heading_wrapper">
                            <div class="gc_blog_single_form_heading">
                                <h4>Leave A Comments</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="blog_contect_wrapper">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contect_form1">
                                        <input type="text" placeholder="Full Name *"><i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contect_form2">
                                        <input type="email" placeholder="Email *"><i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contect_form4">
                                        <textarea rows="4" placeholder="Write Comment"></textarea><i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contect_btn">
                                        <ul>
                                            <li><a href="#">Submit</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div> --}}
                    <!--Fin-->
                </div>
            </div>
            @if($others)
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 gc_blog_category_right_section_main">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_right_blog_news_wrapper">
                            <h3>Dernières actualités</h3>
                            @foreach($others as $actu)
                            <div class="gc_footer_ln_main_wrapper">
                                <div class="gc_footer_ln_img_wrapper">
                                    <a href="{{ route('single_actu',$actu->id) }}">
                                    <img src="{{URL::asset('admin/media/'.$actu->image)}}" class="img-responsive" alt="ln_img"/></a>
                                </div>
                                <div class="gc_footer_ln_cont_wrapper">
                                    <h4>{{ $actu->titre }}</h4>
                                    <p>{{substr($actu->description,0,10)}}{{ (strlen($actu->description) >=10) ? '...' : '' }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
    
@endsection
