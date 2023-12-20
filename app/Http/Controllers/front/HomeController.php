<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Testing\Fluent\Concerns\Has;
use function Sodium\compare;
use App\Utilities\Constant;
use Illuminate\Support\Facades\Hash;

session_start();
class HomeController extends Controller
{
    //
    public function index(){
        return view('front.Home');
       }
    public function search_hospital(){
        $cate_hospital =  DB::table('all_category_hospital')->get();
        return view('front.Search_Hospital')->with('cate_hospital',$cate_hospital);
    }
    public function search_doctor(){
        $cate_doctor =  DB::table('all_category_doctor')->get();
        return view('front.Search_Doctor')->with('cate_doctor',$cate_doctor);
    }
    public function search_service(){
        //$cate_doctor =  DB::table('all_category_doctor')->get();
        return view('front.Search_Service');//->with('cate_doctor',$cate_doctor);
    }
    public function ho_so_csyt($hospital_code){
      $show_detail_hospital = DB::table('all_category_hospital')->where('hospital_code',$hospital_code)->get();
      $show_detail_doctor = DB::table('all_category_doctor')->where('hospital_code',$hospital_code)->get();
      $manager_category = view('front.Hosobv')->with('show_detail_hospital',$show_detail_hospital)->with('show_detail_doctor',$show_detail_doctor);
     // $show_all_hospital = DB::table('all_category_hospital')->join('all_category_doctor', 'all_category_hospital.hospital_code','=','all_category_doctor.hospital_code')->where('hospital_code',$hospital_code)->get();
      return view('user_layout')->with('front.Hosobv',$manager_category);
    }
    public function book_doctor($doctor_id){
        $show_detail_doctor = DB::table('all_category_doctor')->where('doctor_id',$doctor_id)->get();
      //  $show_detail_doctor = DB::table('all_category_doctor')->where('hospital_code',$hospital_code)->get();
       // $manager_category = view('front.Hosobv')->with('show_detail_hospital',$show_detail_hospital)->with('show_detail_doctor',$show_detail_doctor);
       // $show_all_hospital = DB::table('all_category_hospital')->join('all_category_doctor', 'all_category_hospital.hospital_code','=','all_category_doctor.hospital_code')->where('hospital_code',$hospital_code)->get();
        return view('front.Book_doctor')->with('show_detail_doctor',$show_detail_doctor);
      }
    public function signup_user(Request $request){
        $check_email = DB::table('users')->where('email',$request->signup_email)->count()==0;
        $data = array();
        $data['name'] = $request->signup_username;
        $data['phonenumber'] = $request->signup_phone;
        $data['email'] = $request->signup_email;
        $data['password'] = Hash::make($request->signup_password);
        if($check_email){
            DB::table('users')->insert($data);
            return back()->with('success','Đăng kí thành công');
        }
        else{
            return back()->with('error','Tài khoản email đã được đăng kí');
        }
     }
     public function signin_user(Request $request){
        $credentials = [
            'email' => $request->signin_email,
            'password' =>$request->signin_password,
        ];
        if(Auth::attempt($credentials)) {
            // Authentication passed...
            return back()->with('success','Đăng nhập thành công');
        }
        else{

           return  back()->with('error','ERROR: Email or Password is wrong');
        }
     }
     public function logout(){
        Auth::logout();
       //return back();
        return back();
    }
    // public function test1(){
    //     return view('test');
    // }
    public function test2(){
          return redirect('test1')->with('test','Hello ưorl');
}

}
