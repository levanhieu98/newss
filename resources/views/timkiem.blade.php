@extends('index')
@section('content')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kết quả </div>
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
           
        </div>
       {{--  <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div> --}}
    </div>
</div>

</div>
@endsection