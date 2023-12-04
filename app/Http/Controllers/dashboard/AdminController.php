<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
session_start();
class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
       if($admin_id){
        return Redirect::to('admin-dashboard');
       } 
       return Redirect::to('admin-login')->send();
    }
    public function dashboard(Request $request){
        $admin_email= $request->admin_email;
        $admin_password= $request->admin_password;

        $result = DB::table('account_admin')->where('admin_email',$admin_email)->first();
         
        if($result&&Hash::check($admin_password, $result->admin_password)){
           Session::put('admin_name',$result->admin_name);
           Session::put('admin_id',$result->admin_id);  
           $sum = DB::table('all_book_appointment')->count();
           $sum_xl = DB::table('all_book_appointment')->where('customer_status','0')->count();
           $sum_dxl = DB::table('all_book_appointment')->where('customer_status','1')->count();
           $show_all_book = DB::table('all_book_appointment')->orderBy('created_at','desc')->get();
           return view('dashboard.admin_index')->with('show_all_book', $show_all_book)->with('sum',$sum)->with('sum_xl',$sum_xl)->with('sum_dxl',$sum_dxl);
           
        }else{
            Session::put('message','Tài Khoản hoặc mật khẩu chưa đúng. Vui lòng đăng nhập lại!');
            return Redirect::to('/admin-login');
        }
    }
    public function admin_dashboard(){
        $this->AuthLogin(); 
        $sum = DB::table('all_book_appointment')->count();
           $sum_xl = DB::table('all_book_appointment')->where('customer_status','0')->count();
           $sum_dxl = DB::table('all_book_appointment')->where('customer_status','1')->count();
           $show_all_book = DB::table('all_book_appointment')->orderBy('created_at','desc')->get();
           return view('dashboard.admin_index')->with('show_all_book', $show_all_book)->with('sum',$sum)->with('sum_xl',$sum_xl)->with('sum_dxl',$sum_dxl);
           
    }
    public function show_customer(Request $request){
        $this->AuthLogin();
        $keyworks= $request->keyword_customer;
        $search_customer= DB::table('all_book_appointment')->where('customer_name','like','%'.$keyworks.'%')->get();
        return view('dashboard.checkout.kq_search_customer')->with('search_customer',$search_customer);
     }
     public function show_detail_customer($customer_id){
        $this->AuthLogin();
        $show_detail_customer =  DB::table('all_book_appointment')->where('customer_id',$customer_id)->get(); 
         $manager_category_doctor = view('dashboard.show_detail_customer')->with('show_detail_customer',$show_detail_customer);
         return view('admin_layout')->with('dashboard.show_detail_customer', $manager_category_doctor);
     }
     public function update_detail_customer(Request $request, $customer_id){
        $this->AuthLogin();
        $data= array();
        $data['customer_status']= $request->customer_status; 
        DB::table('all_book_appointment')->where('customer_id',$customer_id)->update($data);
   Session::put('message','Cập nhật thông tin khách hàng thành công');
   return Redirect::to('/admin-dashboard');
     }
    public function log_out(){
      $this->AuthLogin();
      Session::put('admin_name',null);
      Session::put('admin_id',null);  
      return Redirect('admin-login');
    }

}
