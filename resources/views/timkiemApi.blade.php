@extends('index')
@section('content')

<div class="container  ">
	<div class="form-inline ml-5 mt-2">
		<input id="tk" type="text" name="tukhoa" class="form-control col-6 mr-1">
		<button id="gui" type="submit" class="form-control btn-success col-3">Tìm kiếm</button>
	</div>
	<div class="container-fluid pb-4 pt-4 paddding">
		<div class="container paddding">
			<div class="row mx-0">
				<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
					<div>
						<div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kết quả </div>
					</div>
					<div class="row pb-4 " id="show">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$( "#gui" ).click(function() {
		var tu=document.getElementById('tk').value;
		$.get('api/tin/'+tu,function(
			data){
			var kq="";
			if(data.length==0)
			{
				document.getElementById('show').innerHTML='Khong tim thay'
				return;
			}
			$.each(data, function(k,v) {
				// kq+='<div>'+'<img src="admin/images/'+v.Hinhdaidien+'" alt="" >'+'</div>'+'<div>'+'<a href="chitiet/'+v.Id_tin+'">'+ v.Tieude+'</a>'+'</div>'
				kq+='<div>'+
				'<div class="fh5co_hover_news_img">'+
				'<div class="fh5co_news_img">'+'<img src="admin/images/'+v.Hinhdaidien+'" alt=""/>'+'</div>'+
				'</div>'+
				'</div>'+
				'</div>'+
				' <div ">'+
				'<a href="chitiet/'+v.Id_tin+'" class="fh5co_magna py-2">'+v.Tieude+'</a>' +'<a  class="fh5co_mini_time py-3">'+ v.Tacgia+ 
				+v.Ngaydangtin +'</a>'+
				'<div  class="fh5co_heading_border_bottom py-2 mb-4">'+v.Mota+
				'	</div>'+
				'</div>'	

				
				

			});
			document.getElementById('show').innerHTML=kq;

		})
	})</script>

	@endsection