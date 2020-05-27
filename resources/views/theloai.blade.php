@extends('index')
@section('content')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                @foreach( $tin as $t)
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{asset('admin/images/'.$t->Hinhdaidien)}}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="chitiet/{{$t->Id_tin}}" class="fh5co_magna py-2"> {{$t->Tieude}} </a> <a href="" class="fh5co_mini_time py-3"> {{$t->Tacgia}} -
                            {{$t->Ngaydangtin}} </a>
                            <div class="fh5co_consectetur"> {{$t->Mota}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Thể Loại</div>
                    </div>
                    <div class="clearfix"></div>
                    @foreach($theloai as $tl)
                    <div class="fh5co_tags_all">
                        <a href="theloai/{{$tl->Id_loaitin}}" class="fh5co_tagg">{{$tl->Ten_loaitin}}</a>
                    </div>
                    @endforeach          
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12 text-center pb-4 pt-4">
                    {{-- <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                    <a href="#" class="btn_pagging">1</a>
                    <a href="#" class="btn_pagging">2</a>
                    <a href="#" class="btn_pagging">3</a>
                    <a href="#" class="btn_pagging">...</a>
                    <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin liên quan</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
               @foreach($xuthe as $xt)
               <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{asset('admin/images/'.$xt->Hinhdaidien)}}" alt=""/></div>
                    <div>
                        <a href="chitiet/{{$xt->Id_tin}}" class="d-block fh5co_small_post_heading"><span class="">{{$xt->Tieude}}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i>{{$xt->Ngaydangtin}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection