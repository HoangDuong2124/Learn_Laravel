<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;
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
        $data = array();
        $data['name'] = $request->signup_username;
        $data['phonenumber'] = $request->signup_phone;
        $data['email'] = $request->signup_email;
        $data['password'] = Hash::make($request->signup_password);
        DB::table('users')->insert($data);
        Session::put('message','Đăng kí tài khoản thành công');
        return Redirect::to('/');
     }
     public function signin_user(Request $request){
        $credentials = [
            'email' => $request->signin_email,
            'password' =>$request->signin_password,
        ];
        $remember = $request->remember;
        if(Auth::attempt($credentials,$remember)) {
            // Authentication passed...
            return redirect()->intended();
        }
        else{
            return 'fail';
          // return  back()->with('notification','ERROR: Email or Password is wrong');
        }
     }
     public function logout(){
        Auth::logout();
       //return back();
        return Redirect::to('/');
    }
}
