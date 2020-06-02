<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<div class="row bg-success">
			<div class="col-lg-12 ">
				<div class="card container ">
					<div class="card-body ">
						<h4 class="card-title text-center">Danh sách nhóm tin</h4>
						<div class="table ">
							<div class="form-group container">
								<div class="form-inline  ">
									<label for="exampleFormControlSelect1">Chọn nhóm tin sữa</label>
									<select class="form-control ml-1" id="exampleFormControlSelect1">
									</select>
								</div >
								<div class="form-inline mt-1 ">
									<label for="exampleFormControlSelect1">Tên mới</label>
									<input type="text" name="tennhom" class="form-control ml-5">
								</div>
								<div class="form-group mt-1">
									<label for="exampleFormControlSelect1">Trạng thái</label>
									<label class="radio-inline ml-4 mr-5">
										<input type="radio" name="Anhien" value="1" checked="checked">Hiện</label>
										<label class="radio-inline ">
											<input type="radio" name="Anhien" value="0">Ẩn</label>
										</div>
										<button id="sua" type="button" class="btn btn-primary ml-5 form-control col-lg-2 align-content-center ">Sữa</button>
									</div>
								</div>
								<table class="table table-bordered verticle-middle">
									<thead class="text-center">
										<tr>
											<th scope="col">Id nhóm tin</th>
											<th scope="col">Tên nhóm tin</th>
											<th scope="col">Trạng thái</th>
											<th scope="col">Sữa&Xóa</th>
										</tr>
									</thead>
									<tbody class="text-center" id="ht">

									</tbody>
								</table>
								<button type="button" class="btn btn-primary mr-1 form-control " data-toggle="modal" data-target="#myModal" >Thêm</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- hien thi -->
			<script>
				$(document).ready(function(){
					var kq=""
					var kq1=""

					$.get('api/nhomtin',function(data){
						$.each(data,function(k,v)
						{
							kq+='<tr >'+
							'<td id="id_nt" >'+v.Id_nhomtin+'</td>'+
							'<td>'
							+v.Ten_nhomtin+
							'</td>'+
							'<td>'+v.Trangthai+'</td>'+
							'<td>'+
							'<button  onclick="xoa('+v.Id_nhomtin+')"  type="button" class="btn btn-primary"  >'+'Xoá'+'</td>'+
							'</tr>'
							kq1+='<option  value="'+v.Id_nhomtin+'">'+v.Ten_nhomtin+'</option>'
						});
						$('#ht').html(kq);
						$('#exampleFormControlSelect1').html(kq1);
					});
				});	
			</script>
			<!-- Thêm -->
			@include('themmodal')
			<!-- Xoa -->
			<script>	
				function xoa(id)
				{ 	
					$.ajax({
						type: 'DELETE',
						url: 'api/nhomtin/'+id,
						success:function(data)
						{var kq="";
						var kq1="";
						$.get('api/nhomtin',function(data)
						{
							$.each(data,function(k,v)
							{
								kq+='<tr >'+
								'<td id="id_nt" >'+v.Id_nhomtin+'</td>'+
								'<td>'
								+v.Ten_nhomtin+
								'</td>'+
								'<td>'+v.Trangthai+'</td>'+
								'<td>'+
								'<button  onclick="xoa('+v.Id_nhomtin+')"  type="button" class="btn btn-primary"  >'+'Xoá'+'</td>'+
								'</tr>'
								kq1+='<option  value="'+v.Id_nhomtin+'">'+v.Ten_nhomtin+'</option>'
							});
							$('#ht').html(kq);
							$('#exampleFormControlSelect1').html(kq1);
						});

					}
				});
				}
			</script>
			<!-- sữa -->
			<script >
				$("#sua").click(function(){
					var ten=$("input[name='tennhom']").val();
					var hien=$('input[name="Anhien"]:radio:checked').val();
					var id=document.getElementById('exampleFormControlSelect1').value;
					$.ajax({
						type: 'PUT',
						url: 'api/nhomtin/'+id,
						data: {
							'Ten_nhomtin':ten,
							'Trangthai':hien,
						},
						success:function(data){
							var kq=""
							var kq1=""
							$.get('api/nhomtin',function(data)
							{
								$.each(data,function(k,v)
								{
									kq+='<tr >'+
									'<td id="id_nt" >'+v.Id_nhomtin+'</td>'+
									'<td>'
									+v.Ten_nhomtin+
									'</td>'+
									'<td>'+v.Trangthai+'</td>'+
									'<td>'+
									'<button  onclick="xoa('+v.Id_nhomtin+')"  type="button" class="btn btn-primary"  >'+'Xoá'+'</td>'+
									'</tr>'
									kq1+='<option  value="'+v.Id_nhomtin+'">'+v.Ten_nhomtin+'</option>'
								});
								$('#ht').html(kq);
								$('#exampleFormControlSelect1').html(kq1);
							});

						}
					})

				});
				$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
			</script>

		</body>
		</html>