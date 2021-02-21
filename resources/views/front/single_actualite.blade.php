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
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_blog_index_post_wrapper">
                            <div class="gc_blog_index_img_wrapper">
                                <img src="{{URL::asset('admin/media/'.$single->image)}}" class="zoom image img-responsive" alt="blog_img"/>
                            </div>                         
                            <div class="gc_blog_index_date_main_sec">
                                <div class="gc_blog_index_date_wrapper">
                                    <div class="gc_blog_index_date">
                                        <p>{{ (new DateTime($single->date_ajout))->format('d') }}/<br><span><span>{{ (new DateTime($single->date_ajout))->format('m') }}</span></span></p>
                                    </div>
                                </div>
                                <div class="gc_blog_index_date_cont_wrapper gc_blog_single_index_pera_cont_wrapper">
                                    <h4>{{ $single->titre }}</h4>
                                    <p>{{ $single->description }}</p>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($others))
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 gc_blog_category_right_section_main">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_right_blog_news_wrapper">
                            <h3>Dernières collections</h3>
                            @foreach($others as $coll)
                            <div class="gc_footer_ln_main_wrapper">
                                <div class="gc_footer_ln_img_wrapper">
                                    <a href="/single_collection/{{ $coll->id }}">
                                    <img src="{{URL::asset('admin/media/'.$coll->image)}}" class="img-responsive" alt="ln_img"/></a>
                                </div>
                                <div class="gc_footer_ln_cont_wrapper">
                                    <a href="/single_collection/{{ $coll->id }}"><h4>{{ $coll->titre }}</h4></a>
                                    <p>{{substr($coll->description,0,10)}}{{ (strlen($coll->description) >=10) ? '...' : '' }}</p>
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
