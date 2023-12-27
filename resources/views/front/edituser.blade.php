@extends('user_layout')
@section('title','Lịch sử đặt khám')
@section('main_content')
 <div class="main-content">
    <div class="user_profile">
         <div class="title">
            <h3 style="text-align: center;">Cập nhật tài khoản</h3>
         </div>
         <div id="edituser">
           <form  action="/edituser" method="POST">
            @csrf
                        <div class="form-group">
                            <label for="name">Họ và tên:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}" placeholder="Vui lòng nhập tên" required>
                        </div>
                     <div class="form-group">
                        <label for="phonenumber">Số điện thoại:</label>
                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="{{Auth::user()->phonenumber}}" placeholder="Vui lòng nhập số điện thoại" required >
                     </div>
                     <button type="submit" class="btn btn-primary">Cập nhật</button>
           </form>
         </div>
    </div>
 </div>
@endsection
