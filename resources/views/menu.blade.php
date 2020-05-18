<div class="container padding_786">
	<nav class="navbar navbar-toggleable-md navbar-light ">
		<button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
		<a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="/">Trang chủ<span class="sr-only">(current)</span></a>
				</li>
				@foreach($nhomtin as $nt)
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="/?id={{$nt->Id_nhomtin}}" id="dropdownMenuButton2" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">{{$nt->Ten_nhomtin}} <span class="sr-only">(current)</span></a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
							@foreach($theloai as $tl)
							@if($tl->Id_nhomtin==$nt->Id_nhomtin)
							<a class="dropdown-item" href="#">{{$tl->Ten_loaitin}}</a>
							@endif
							@endforeach
							
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</nav>
	</div>