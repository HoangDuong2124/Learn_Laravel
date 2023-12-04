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

@endsection
