@extends('index')
@section('content')
<div class="container-fluid  ">
	<div class="form-inline ml-5 mt-2">
	<input id="tk" type="text" name="tukhoa" class="form-control col-6 mr-1">
	<button id="gui" type="submit" class="form-control btn-success col-3">Tìm kiếm</button>
	</div>
	<div  class="text-center mt-3" id='show'>		
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
				$('#show').append('Không tìm thấy');
				return;
			}
			$.each(data, function(k,v) {
				kq+='<div>'+ v.Tieude+'</div>'
				

			});
			$('#show').append(kq);
		})
	})</script>

@endsection