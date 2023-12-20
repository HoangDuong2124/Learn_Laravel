@extends('admin_layout')
@section('admin_content')

        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục bác sĩ
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
                                <form class="needs-validation" role="form" action="{{URL::to('/save-category-doctor')}}" method="post" enctype="multipart/form-data" >
                               {{ csrf_field() }}
                               <div class="form-group">
                                    <label for="name_doctor">Tên bác sĩ:</label>
                                    <input type="text"  class="form-control is-valid" id="name_doctor" name="name_doctor" placeholder="Enter Doctor Name" required>

                                </div>
                                <div class="form-group">
                                    <label for="hospital_doctor">Bệnh viện đang công tác:</label>
                                    <input type="text"  class="form-control is-valid" id="hospital_doctor" name="hospital_doctor" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="hospital_code">Mã bệnh viện đang công tác:</label>
                                    <input type="text"  class="form-control is-valid" id="hospital_code" name="hospital_code" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="specialist_doctor">Chuyên khoa:</label>
                                    <input type="text"  class="form-control is-valid" id="specialist_doctor" name="specialist_doctor" placeholder="" required>

                                </div>
                                <div class="form-group">
                                    <label for="star_doctor ">Đánh giá:</label>
                                    <input type="text"  class="form-control is-valid" id="star_doctor" name="star_doctor" placeholder="" required>

                                </div>
                                <div class="form-group">
                                    <label for="price_book">Giá đặt khám:</label>
                                    <input type="text"  class="form-control is-valid" id="price_book" name="price_book" placeholder="" required>

                                </div>
                                <div class="form-group">
                                    <label for="book_doctor">Số lượng đặt khám:</label>
                                    <input type="text"  class="form-control is-valid" id="book_doctor" name="book_doctor" placeholder="Enter Number of Registrations" required>

                                </div>
                                <div class="form-group">
                                    <label for="img_doctor">Chọn file ảnh bác sĩ</label>
                                    <input type="file"  id="img_doctor" name="img_doctor">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="description_doctor">Chi tiết về bác sĩ</label>
                                    <div id="editor-container"></div>
                                    <input type="hidden" name="description_doctor" id="description_doctor">
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
                document.getElementById('description_doctor').value = content;
            };
        </script>

@endsection
