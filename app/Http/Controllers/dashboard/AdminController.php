<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Auth;
session_start();
class AdminController extends Controller
{
    public function admin_dashboard(){
        $sum = DB::table('all_book_appointment')->count();
        $sum_xl = DB::table('all_book_appointment')->where('customer_status','0')->count();
        $sum_dxl = DB::table('all_book_appointment')->where('customer_status','1')->count();
        $show_all_book = DB::table('all_book_appointment')->orderBy('created_at','desc')->get();
        return view('dashboard.admin_index')
        ->with('show_all_book', $show_all_book)
        ->with('sum', $sum)
        ->with('sum_xl', $sum_xl)
        ->with('sum_dxl', $sum_dxl);

     }
    public function dashboard(Request $request){
        $credentials = [
            'admin_email' => $request->admin_email,
            'password' =>$request->admin_password,
        ];

      if(Auth::guard('admin')->attempt($credentials)){
        return redirect()->route('admin.index');

      }
      else{
        return back()->with('error','Email hoặc mật khẩu chưa chính xác');
      }
    }

    public function show_customer(Request $request){
        $keyworks= $request->keyword_customer;
        $search_customer= DB::table('all_book_appointment')->where('customer_name','like','%'.$keyworks.'%')->get();
        return view('dashboard.checkout.kq_search_customer')->with('search_customer',$search_customer);
     }
     public function show_detail_customer($customer_id){
        $show_detail_customer =  DB::table('all_book_appointment')->where('customer_id',$customer_id)->get();
         $manager_category_doctor = view('dashboard.show_detail_customer')->with('show_detail_customer',$show_detail_customer);
         return view('admin_layout')->with('dashboard.show_detail_customer', $manager_category_doctor);
     }
     public function update_detail_customer(Request $request, $customer_id){
        $data= array();
        $data['customer_status']= $request->customer_status;
        DB::table('all_book_appointment')->where('customer_id',$customer_id)->update($data);
   Session::put('message','Cập nhật thông tin khách hàng thành công');
   return Redirect::to('/admin-dashboard');
     }
    public function log_out(){
        Auth::guard('admin')->logout();
      return Redirect()->route('admin.login');
    }

}
