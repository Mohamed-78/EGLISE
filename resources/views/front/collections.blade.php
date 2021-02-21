@extends('front.layouts.defaults',['title' => 'COLLECTIONS'])

@section('content')
<div class="gc_tittle_main_wrapper">
    <div class="gc_tittle_img_overlay"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="gc_main_tittle_heading">
            <h2>Collections</h2>
        </div>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding_zero">
        <div class="gc_main_tittle_side_nav">
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a> &nbsp;&nbsp;&nbsp;&nbsp;></li>
                <li>Collections</li>
            </ul>
        </div>
    </div>
</div>
<!-- gc event gallery Start -->
<div class="gc_event_index_main_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gc_event_index_heading_wrapper">
                    <div class="gc_event_index_heading">
                        <h2>Missionnaire de Jesus</h2>
                        <h1>Nos collections</h1>
                    </div>
                </div>
            </div>
            @if(isset($collection))
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gc_event_index_content">
                <div class="row">
                    @foreach($collection as $coll)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 width_50 gc_event_index_content_sec">
                            <div class="gc_upcom_slider_wrapper">
                                <div class="gc_com_slider_img_wrapper">
                                    <a href="/single_collection/{{ $coll->id }}">
                                    <img src="{{URL::asset('admin/media/'.$coll->image)}}" alt="slider_img" class="zoom image img-responsive"/>
                                    </a>
                                </div>
                                <div class="gc_com_slider_cont_wrapper">
                                    <div class="gc_com_slider_cont">
                                        <div class="gc_event_time_main_wrapper gc_com_slider_time_wrapper">
                                            <div class="gc_event_time_wrapper">
                                                <div class="gc_event_time">
                                                </div>
                                                <div class="gc_event_time_cont">
                                                    <i class="fa fa-circle"></i>
                                                    <p>{{ $coll->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gc_event_bottom_cont gc_com_bottom_cont_wrapper">
                                            <h2>{{ $coll->titre }}</h2>
                                            <p style="padding-top: 0.8em;">{{substr($coll->description,0,45)}}{{ (strlen($coll->description) >= 45) ? '...' : '' }}</p>
                                        </div>
                                        <div class="gc_event_btn gc_com_slider_btn">
                                            <ul>
                                                @if(isset($coll->lien))
                                                <li><a href="/single_collection/{{ $coll->id }}">Voir la video</a></li>
                                                @else
                                                <li><a href="/single_collection/{{ $coll->id }}">Voir plus</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="gc_event_date_wrapper gc_upcom_date_wrapper gc_event_index_wrapper">
                                           <h1>{{ (new DateTime($coll->date_ajout))->format('d') }}/</h1>
                                            <p>{{ (new DateTime($coll->date_ajout))->format('m') }}<br>{{ (new DateTime($coll->date_ajout))->format('Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pager_wrapper">
                        <ul class="pagination">
                         <p>{{ $collection->links() }}</p>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            @else
            <h5 style="text-align: center;color: red;">Aucune collection disponible</h5>
            @endif
        </div>
    </div>
</div>  
<!-- gc event gallery End -->
    
@endsection
