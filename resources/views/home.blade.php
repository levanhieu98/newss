@extends('index')
@section('content')
<div class="container-fluid paddding mb-5">
	
	<div class="row mx-0">
		<div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
			<div class="fh5co_suceefh5co_height"><img src="{{asset('admin/images/'.$tinhot[0]->Hinhdaidien)}}" alt="img"/>
				<div class="fh5co_suceefh5co_height_position_absolute"></div>
				<div class="fh5co_suceefh5co_height_position_absolute_font">
					<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>{{$tinhot[0]->Ngaydangtin}}
					</a></div>
					<div class=""><a style="font-size:13px" href="chitiet/{{$tinhot[0]->Id_tin}}" class="fh5co_good_font"> {{$tinhot[0]->Tieude}} </a></div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="row">
				@foreach($tinhot as $tm)
				<div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
					<div class="fh5co_suceefh5co_height_2"><img src="{{asset('admin/images/'.$tm->Hinhdaidien)}}" alt="img"/>
						<div class="fh5co_suceefh5co_height_position_absolute"></div>
						<div class="fh5co_suceefh5co_height_position_absolute_font_2">
							<div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$tm->Ngaydangtin}}
							</a></div>
							<div ><a style="font-size:13px" href="chitiet/{{$tm->Id_tin}}" class="fh5co_good_font_2  "> {{$tm->Tieude}} </a></div>
						</div>
					</div>
				</div>
					@endforeach
			</div>
		</div>
	
	</div>
	
</div>
<div class="container-fluid pt-3">
	<div class="container animate-box" data-animate-effect="fadeIn">
		<div>
			<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin hot</div>
		</div>
		<div class="owl-carousel owl-theme js" id="slider1">
			@foreach($xuthe as $xt)
			<div class="item px-2">
				<div class="fh5co_latest_trading_img_position_relative">
					<div class="fh5co_latest_trading_img"><img style="width:500px" src="{{asset('admin/images/'.$xt->Hinhdaidien)}}" alt=""
						class="fh5co_img_special_relative"/></div>
						<div class="fh5co_latest_trading_img_position_absolute"></div>
						<div class="fh5co_latest_trading_img_position_absolute_1">
							<a href="chitiet/{{$xt->Id_tin}}"> {{$xt->Tieude}} </a>
							<div class="fh5co_latest_trading_date_and_name_color"> {{$xt->Tacgia}} - {{$xt->Ngaydangtin}}</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<div class="container-fluid pb-4 pt-5">
		<div class="container animate-box">
			<div>
				<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin mới</div>
			</div>
			<div class="owl-carousel owl-theme" id="slider2">
				@foreach($tinmoi as $t)
				<div class="item px-2">
					<div class="fh5co_hover_news_img">
						<div class="fh5co_news_img"><img src="{{asset('admin/images/'.$t->Hinhdaidien)}}" alt=""/></div>
						<div>
							<a href="chitiet/{{$t->Id_tin}}" class="d-block fh5co_small_post_heading"><span class="">{{$t->Tieude}}</span></a>
							<div class="c_g"><i class="fa fa-clock-o"></i> {{$t->Ngaydangtin}}</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="container-fluid fh5co_video_news_bg pb-4">
		<div class="container animate-box" data-animate-effect="fadeIn">

			<div>
				<div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-black">Các video mới</div>
			</div>
			<div>
				<div class="owl-carousel owl-theme" id="slider3">
					<div class="item px-2">
						<div class="fh5co_hover_news_img">
							<div class="fh5co_hover_news_img_video_tag_position_relative">
								<div class="fh5co_news_img">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/kUV0KMc83DQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
									<img src="images/ariel-lustre-208615.jpg" alt=""/>
								</div>
								<div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
									<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
										<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
											<span><i class="fa fa-play"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="pt-2">
								
								</div>
							</div>
						</div>
						<div class="item px-2">
							<div class="fh5co_hover_news_img">
								<div class="fh5co_hover_news_img_video_tag_position_relative">
									<div class="fh5co_news_img">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/vMNLE6zh870" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
										<img src="images/39-324x235.jpg" alt=""/></div>
										<div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2" id="play-video_2">
											<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
												<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
													<span><i class="fa fa-play"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div class="pt-2">
										
										</div>
									</div>
								</div>
								<div class="item px-2">
									<div class="fh5co_hover_news_img">
										<div class="fh5co_hover_news_img_video_tag_position_relative">
											<div class="fh5co_news_img">
												<iframe id="video_3" width="100%" height="200"
												src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
												frameborder="0" allowfullscreen></iframe>
											</div>
											<div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
												<img src="images/joe-gardner-75333.jpg" alt=""/></div>
												<div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3" id="play-video_3">
													<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
														<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
															<span><i class="fa fa-play"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="pt-2">
												
												</div>
											</div>
										</div>
										<div class="item px-2">
											<div class="fh5co_hover_news_img">
												<div class="fh5co_hover_news_img_video_tag_position_relative">
													<div class="fh5co_news_img">
														<iframe width="560" height="315" src="https://www.youtube.com/embed/kUV0KMc83DQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div>
													<div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
														<img src="images/vil-son-35490.jpg" alt=""/>
													</div>
													<div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4" id="play-video_4">
														<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
															<div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
																<span><i class="fa fa-play"></i></span>
															</div>
														</div>
													</div>
												</div>
												<div class="pt-2">
													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container-fluid pb-4 pt-4 paddding">
								<div class="container paddding">
									<div class="row mx-0">
										<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
											<div>
												<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Các tin khác</div>
											</div>
											@foreach($tin as $tt)
											<div class="row pb-4">
												<div class="col-md-5">
													<div class="fh5co_hover_news_img">
														<div class="fh5co_news_img"><img src="{{asset('admin/images/'.$tt->Hinhdaidien)}}" alt=""/></div>
														<div></div>
													</div>
												</div>
												<div class="col-md-7 animate-box">
													<a href="chitiet/{{$tt->Id_tin}}" class="fh5co_magna py-2"> {{$tt->Tieude}} </a> <a href="single.html" class="fh5co_mini_time py-3">{{$tt->Tacgia}} -
													{{$tt->Ngaydangtin}} </a>
													<div class="fh5co_consectetur"> {{$tt->Mota}}
													</div>
												</div>
											</div>
											@endforeach
										</div>
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
												<div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin hot </div>
											</div>
											@foreach($xuthe as $xt)
											<div class="row pb-3">
												<div class="col-5 align-self-center">
													<img style="width:100px" src="{{asset('admin/images/'.$xt->Hinhdaidien)}}" alt=""class="fh5co_most_trading"/>
												</div>
												<div class="col-7 paddding">
													<div class="most_fh5co_treding_font"><a href="chitiet/{{$t->Id_tin}}">{{$xt->Tieude}}</a></div>
													
													<div class="most_fh5co_treding_font_123">  {{$xt->Ngaydangtin}}</div>
												</div>
											</div>
										@endforeach
										</div>
										
										
									</div>
								</div>

								@endsection