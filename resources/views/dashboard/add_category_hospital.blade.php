@extends('admin_layout')
@section('admin_content')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục bệnh viện
                        </header>
                        <?php
	   $message= Session::get('message');
	   if($message){
		 echo '<span class="text-alert">',$message,'</span>' ;
		 Session::put('message',null);
	   }
	 ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="needs-validation" role="form" action="{{URL::to('/save-category-hospital')}}" method="post" enctype="multipart/form-data" >
                               {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name_hospital">Nhập tên bệnh viện:</label>
                                    <input type="text" class="form-control" id="name_hospital" name="name_hospital" placeholder="Enter Hospital Name"
                                   value="{{old('name_hospital')}}" required>

                                </div>
                                <div class="form-group">
                                    <label for="hospital_code">Nhập tên mã bệnh viện:</label>
                                    <input type="text" class="form-control" id="hospital_code" name="hospital_code" placeholder="Enter Hospital Code " required>
                                    <?php
	   $message_error= Session::get('message_error');
	   if($message_error){
		 echo '<span class="text-alert" style="text-align:left;">',$message_error,'</span>' ;
		 Session::put('message_error',null);
	   }
	 ?>
                                </div>
                                <div class="form-group">
                                    <label for="address_hospital">Nhập địa chỉ bệnh viện:</label>
                                    <input type="text" class="form-control" id="address_hospital" name="address_hospital" placeholder="Enter Hospital Address"
                                    value="{{old('address_hospital')}}" required>

                                </div>
                                <div class="form-group">
                                    <label for="NumberOfRegistrations">Số lượt đăng kí:</label>
                                    <input type="text" class="form-control" id="NumberOfRegistrations" name="NumberOfRegistrations" placeholder="Enter Number of Registrations"
                                    value="{{old('NumberOfRegistrations')}} " required>

                                </div>
                                <div class="form-group">
                                    <label for="img_hospital">Chọn file ảnh bệnh viện</label>
                                    <input type="file" id="img_hospital" name="img_hospital" value="{{old('img_hospital')}} " >
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="description_hospital">Chi tiết về bệnh viện</label>
                                    <div id="editor-container"></div>
                                    <input type="hidden" name="description_hospital" id="description_hospital">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button  type="submit" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

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

            document.querySelector('form').onsubmit = function() {
                var content = quill.root.innerHTML;
                document.getElementById('description_hospital').value = content;
            };
        </script>

@endsection
