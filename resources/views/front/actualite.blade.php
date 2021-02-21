@extends('front.layouts.defaults',['title' => 'ACTUALITES'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>Actualités</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>Actualités</li>
            </ul>
        </div>
    </div>
</div>

<div class="gc_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach($actualite as $actu)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gc_blog_index_post_wrapper">
                        <div class="gc_blog_index_img_wrapper">
                            <a href="{{ route('single_actu',$actu->id) }}">
                            <img src="{{URL::asset('admin/media/'.$actu->image)}}" class="zoom image img-responsive" alt="blog_img"/></a>
                        </div>
                        <div class="gc_blog_index_date_main_sec">
                            <div class="gc_blog_index_date_wrapper">
                                <div class="gc_blog_index_date">
                                    <p>{{ (new DateTime($actu->date_ajout))->format('d') }}/<br><span>{{ (new DateTime($actu->date_ajout))->format('m') }}</span></p>
                                </div>
                            </div>
                            <div class="gc_blog_index_date_cont_wrapper">
                                <h4>{{ $actu->titre }}</h4>
                                <p>{{substr($actu->description,0,45)}}{{ (strlen($actu->description) >= 45) ? '...' : '' }}</p>
                                <h5><a href="{{ route('single_actu',$actu->id) }}">Voir plus</a></h5>
                            </div>
                        </div>  
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pager_wrapper gc_blog_pagination">
                        <p>{{ $actualite->links() }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    
@endsection
