@extends('admin_layout')
@section('admin_content')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục bệnh viện
                        </header>
                        <?php
	   $message= Session::get('message');
	   if($message){
		 echo '<span class="text-alert">',$message,'</span>' ;
		 Session::put('message',null);
	   }
	 ?>
                        <div class="panel-body">
                            @foreach($edit_category_hospital as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/admin-update-category-hospital/'.$edit_value->hospital_id)}}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name_hospital">Tên bệnh viện:</label>
                                    <input type="text" value="{{$edit_value->name_hospital}}" class="form-control" id="name_hospital" name="name_hospital" placeholder="Enter Hospital Name">
                                </div>
                                <div class="form-group">
                                    <label for="hospital_code">Mã bệnh viện:</label>
                                    <input type="text" value="{{$edit_value->hospital_code}}" class="form-control" id="hospital_code" name="hospital_code" placeholder="Enter Hospital Code">
                                </div>
                                <div class="form-group">
                                    <label for="address_hospital">Tên địa chỉ bệnh viện:</label>
                                    <input type="text" value="{{$edit_value->address_hospital}}" class="form-control" id="address_hospital" name="address_hospital" placeholder="Enter Hospital Address">
                                </div>
                                <div class="form-group">
                                    <label for="NumberOfRegistrations">Số lượt đăng kí:</label>
                                    <input type="text" value="{{$edit_value->book_hospital}}" class="form-control" id="NumberOfRegistrations" name="NumberOfRegistrations" placeholder="Enter Number of Registrations">
                                </div>
                                <div class="form-group">
                                    <label for="img_hospital">Chọn file ảnh bệnh viện</label>
                                    <input type="file" value="{{$edit_value->img_hospital}}" id="img_hospital" name="img_hospital">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="description_hospital">Chi tiết về bệnh viện</label>
                                    <div id="editor-container">{!!$edit_value->description_hospital!!}</div>
                                    <input type="hidden" name="description_hospital" id="description_hospital">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button type="submit" name="update_category_hospital" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                             @endforeach
                        </div>
                    </section>

            </div>


            </div>
        </div>

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],
                        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                        ['link', 'image'],
                        ['clean'],
                        ['blockquote', 'code-block'],
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        [{ 'color': [] }, { 'background': [] }],
                        [{ 'font': [] }],
                        [{ 'align': [] }],
                    ],
                },
            });
quill.root.innerHTML = '{!! $edit_value->description_hospital !!}';
            document.querySelector('form').onsubmit = function() {
                var content = quill.root.innerHTML;
                document.getElementById('description_hospital').value = content;
            };
        </script>

@endsection
