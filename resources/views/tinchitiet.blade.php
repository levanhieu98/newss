@extends('index')
@section('content')
<body class="single container ">
    @foreach($chitiet as $ct)
    <div id="fh5co-title-box" style=" background-image: url({{asset('admin/images/'.$ct->Hinhdaidien)}});background-position:50% 50%" >
        <div class="page-title">
            <span></span>
            <h6>{!! $ct->Tieude!!}</h6>
        </div>
    </div>
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">

                  {!!$ct->Noidung!!}


              </div>
              @endforeach
              <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                   <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Thể Loại
                   </div>
               </div>
               @foreach($theloai as $tl)
               <div class="clearfix"></div>

               <div class="fh5co_tags_all">
                <a href="theloai/{{$tl->Id_loaitin}}" class="fh5co_tagg">{{$tl->Ten_loaitin}}</a>

            </div>
            @endforeach
            <div>


            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin mới</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach($tinmoi as $tm)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{asset('admin/images/'.$tm->Hinhdaidien)}}" alt=""/></div>
                    <div>
                        <a href="chitiet/{{$tm->Id_tin}}" class="d-block fh5co_small_post_heading"><span class="">{{$tm->Tieude}}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> {{$tm->Ngaydangtin}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</body>
@endsection