@extends('user_layout')
@section('title','Lịch sử đặt khám')
@section('main_content')
 <div class="main-content">
    <div class="user_profile">
         <div class="title">
            <h3>THÔNG TIN CÁ NHÂN</h3>
         </div>
         <div class="m-auto mt-5 mb-5 "
         style="border-radius: 30px; box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;">
         <div class="card" style="border: none;border-radius: 30px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 m-auto">
                        <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="/front/img/default-avatar.png" class="img-fluid rounded-circle" alt="Profile Picture">
                    </div>
                    <div class="col-lg-9">
                        <h1 class="mb-3">{{Auth::user()->name}}</h1>
                    </div>
                </div>
                <hr>
                <h4 class="mt-4">Thông tin</h4>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Họ và tên</td>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                        <td>Số điện thoại</td>
                        <td>{{Auth::user()->phonenumber}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ email</td>
                        <td>{{Auth::user()->email}}</td>
                    </tr>

                </tbody></table>
                <a href="/edituser" class="btn btn-primary">Đổi thông tin</a>
            </div>
        </div>
         </div>
    </div>
 </div>
@endsection
