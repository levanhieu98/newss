  <div class="container">
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Tên nhóm tin</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="form-group ml-5">
              <div class="form-inline">
                <div class="col-lg-3">Tên nhóm tin</div>
                <div class=" col-lg-9">
                  <input type="text" name="ten" class="form-control input-default" placeholder="Tên nhóm tin" value="">
                </div>
              </div>
              <div class="form-inline mt-3">
                <div class="col-lg-3">Trạng thái</div>
                <div class=" col-lg-9">
                  <div class="form-group">
                    <label class="radio-inline ml-4 mr-5">
                      <input type="radio" name="Anhien" value="1" >Hiện</label>
                      <label class="radio-inline ">
                        <input type="radio" name="Anhien" value="0">Ẩn</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto ml-5 mt-3">
                    <button id="them" type="submit" class="btn btn-primary mb-2 ml-5" data-dismiss="modal">Thêm nhóm tin</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        $("#them").click(function(){
          var ten=$("input[name='ten']").val();
          var hien=$('input[name="Anhien"]:radio:checked').val();
          $.ajax({
            type: 'POST',
            url: 'api/nhomtin',
            data: {
              'Ten_nhomtin':ten,
              'Trangthai':hien,
            },
            success:function(data)
            {
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
                  kq1+='<option id="id_nt" value="'+v.Id_nhomtin+'">'+v.Ten_nhomtin+'</option>'
                });
                $('#ht').html(kq);
                $('#exampleFormControlSelect1').html(kq1);
              });
            }
          })
        });
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
      </script>

      