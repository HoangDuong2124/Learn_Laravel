@extends('admin_layout')
@section('admin_content')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục bác sĩ
                        </header>
                        <?php
	   $message= Session::get('message');
	   if($message){
		 echo '<span class="text-alert">',$message,'</span>' ;
		 Session::put('message',null);
	   }
	 ?>
                        <div class="panel-body">
                            @foreach($edit_category_doctor as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/admin-update-category-doctor/'.$edit_value->doctor_id)}}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name_doctor">Tên bác sĩ:</label>
                                    <input type="text" value="{{$edit_value->name_doctor}}" class="form-control" id="name_doctor" name="name_doctor" placeholder="Enter Doctor Name">
                                </div>
                                <div class="form-group">
                                    <label for="hospital_doctor">Nơi làm việc:</label>
                                    <input type="text" value="{{$edit_value->hospital_doctor}}" class="form-control" id="hospital_doctor" name="hospital_doctor" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="hospital_code">Mã bệnh viện:</label>
                                    <input type="text" value="{{$edit_value->hospital_code}}" class="form-control" id="hospital_code" name="hospital_code" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="specialist_doctor">Chuyên khoa:</label>
                                    <input type="text" value="{{$edit_value->specialist_doctor}}" class="form-control" id="specialist_doctor" name="specialist_doctor" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="star_doctor">Đánh giá:</label>
                                    <input type="text" value="{{$edit_value->star_doctor}}" class="form-control" id="star_doctor" name="star_doctor" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="price_book">Giá đặt khám:</label>
                                    <input type="text" value="{{$edit_value->price_book}}" class="form-control" id="price_book" name="price_book" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="img_doctor">Chọn file ảnh bác sĩ</label>
                                    <input type="file" value="{{$edit_value->img_doctor}}" id="img_doctor" name="img_doctor">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="book_doctor">Số lượng đặt khám:</label>
                                    <input type="text" value="{{$edit_value->book_doctor}}" class="form-control" id="book_doctor" name="book_doctor" placeholder="Enter Number of Registrations">
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


@endsection
