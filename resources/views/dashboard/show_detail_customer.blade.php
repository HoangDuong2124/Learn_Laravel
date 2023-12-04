@extends('admin_layout')
@section('admin_content')
      <h3>Thông tin khách hàng</h3>
      @foreach($show_detail_customer as $key => $show_detail)
      <div  class="show-detail-customer">
         <span>Tên khách hàng</span>
         <p>{{$show_detail->customer_name}}</p>  
      </div>
      <div class="show-detail-customer">
         <span>Số điện thoại</span>
         <p>{{$show_detail->customer_phone}}</p>  
      </div>
      <div class="show-detail-customer">
         <span>Địa chỉ email</span>
         <p>{{$show_detail->customer_email}}</p>  
      </div>
      <div class="show-detail-customer">
         <span>Chi tiết đặt lịch</span>
         <p>{{$show_detail->book_type}}</p>  
      </div>
      <div class="show-detail-customer">
         <span>Thời gian đặt lịch</span>
         <p>{{$show_detail->created_at}}</p>  
      </div>
      <div class="show-detail-customer">
         <span>Nhu cầu đặt lịch</span>
         <p>{{$show_detail->describe}}</p>  
      </div>
      <div class="show-detail-customer">
      <span>Tình trạng khách hàng</span>
        <form action="{{URL::to('/update-detail-customer/'.$show_detail->customer_id)}}" method="get">     
           <select name="customer_status" id="customer_status" class="form-control form-detal" required="required" >
            
            @if($show_detail->customer_status=='0')
            <option value="0" selected>Đang xác nhận</option>
            <option value="1">Đã đặt được lịch</option>
            <option value="2">Khám thành công</option>
            <option value="3">Đã hủy lịch</option>
         </select>
            <button type="submit">Cập nhật tình trạng</button>
            @endif
            @if($show_detail->customer_status=='1')
            <option value="1" selected>Đã đặt được lịch</option>
            <option value="2">Khám thành công</option>
            <option value="3">Đã hủy lịch</option>
         </select>
            <button type="submit">Cập nhật tình trạng</button>
            @endif
            @if($show_detail->customer_status=='2')           
            <option value="2" selected>Khám thành công</option>
         </select>
            @endif 
            @if($show_detail->customer_status=='3')           
            <option value="3" selected>Đã hủy lịch</option>
         </select>
            @endif
           
          
        </form>
         
      </div>  
      @endforeach
@endsection