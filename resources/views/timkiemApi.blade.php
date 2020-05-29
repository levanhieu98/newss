@extends('index')
@section('content')

<div class="container-fluid  ">
	<div class="form-inline ml-5 mt-2">
	<input id="tk" type="text" name="tukhoa" class="form-control col-6 mr-1">
	<button id="gui" type="submit" class="form-control btn-success col-3">Tìm kiếm</button>
	</div>
	<div  class="text-center mt-3 " id='show' name='ht'>		
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
				kq+='<div>'+'<img src="admin/images/'+v.Hinhdaidien+'" alt="" >'+'</div>'+'<div>'+'<a href="chitiet/'+v.Id_tin+'">'+ v.Tieude+'</a>'+'</div>'
				

			});
			document.getElementById('show').innerHTML=kq;

		})
	})</script>

@endsection