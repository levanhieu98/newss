<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-lg-11 ml-5 mr-3 ">
			<div class="container-fluid">
				<h4 class="card-title">Thêm nhóm tin</h4>
				<div class="basic-form ml-5">
					<div class="form-group ml-5">
						<div class="form-inline col-4">
							<div class="col-lg-5">Tên nhóm tin</div>
							<div class=" col-lg-7">
								<input type="text" id="ten" name="ten" class="form-control input-default" placeholder="Tên nhóm tin" >
							</div>
						</div>
						<div class="form-inline mt-3 col-4">
							<div class="col-lg-5">Trạng thái</div>
							<div class=" col-lg-7">
								<div class="form-group">
									<label class="radio-inline ml-4 mr-5">
										<input type="radio"  name="Anhien" value="1" checked="checked">Hiện</label>
										<label class="radio-inline ">
											<input type="radio" name="Anhien" value="0">Ẩn</label>
										</div>
									</div>
								</div>
								
								<div class="form-inline ml-5 mt-3 col-4">
									<button type="submit" id="gui" class="btn btn-primary mb-2 ml-5 form-control">Thêm nhóm tin</button>
								</div >
								<div id="thongbao"></div>
							</div>
								<div class="form-group mt-3 col-lg-8">
									<div class="col-lg-3">Tên nhóm tin</div>
									<div class=" col-lg-9">
										<select name="nhomtin" id="ht" class="form-control mt-3">
											<option value="" ></option>
										</select>
									</div>
								</div>
								<div class="col-lg-4  ">
									<button type="submit" id="lay" class="btn btn-primary mb-2 ml-5 form-control">Lấy nhóm tin</button>
								</div>
								<div class="col-lg-4  ">
									<button type="submit" id="xoa" class="btn btn-primary mb-2 ml-5 form-control">Xóa</button>
								</div>
								<div class="col-lg-4  ">
									<button type="submit" id="capnhap" class="btn btn-primary mb-2 ml-5 form-control">Cập nhật</button>
								</div>


							</div>
						</div>
					</div>
				</div>				
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- 	Them -->
			<script>
				$("#gui").click(function(){
					var ten=$("input[name='ten']").val();
					var hien=$("input[name='Anhien']").val();
					$.ajax({
						type: 'POST',
						url: 'api/nhomtin',
						data: {
							'Ten_nhomtin':ten,
							'Trangthai':hien,
						},
						success:function(data){
							console.log(data);
							
						}
					})

				});
				$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
			</script>
			<!-- Lay -->
			<script>
				$("#lay").click(function(){
					var kq=""
					$.get('api/nhomtin',function(data){
						$.each(data,function(k,v)
						{
							kq+='<option value="'+v.Id_nhomtin+'" id="ht">'+v.Ten_nhomtin+'</option>'
						});
						$('#ht').html(kq);
					});
				});	
			</script>
			<!-- Xoa -->
			<script>
				$("#xoa").click(function(){
					var id=document.getElementById('ht').value;
					$.ajax({
						type: 'DELETE',
						url: 'api/nhomtin/'+id,
						success:function(data){
							console.log(data);
							
						}
					})

				});	
			</script>
			<!-- sua -->
			<script >
				$("#capnhap").click(function(){
					var ten=$("input[name='ten']").val();
					var hien=$("input[name='Anhien']").val();
					var id=document.getElementById('ht').value;
					$.ajax({
						type: 'PUT',
						url: 'api/nhomtin/'+id,
						data: {
							'Ten_nhomtin':ten,
							'Trangthai':hien,
						},
						success:function(data){
							console.log(data);
							
						}
					})

				});
				$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
			</script>

		</body>
		</html>