<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Mail;
use App\Mail\sendEmail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
session_start();
class CheckOutController extends Controller
{
     public function search_hospital(Request $request){
        $keyworks= $request->keyword_search;
        $search_hospital= DB::table('all_category_hospital')->where('name_hospital','like','%'.$keyworks.'%')->get();
        return view('front.checkout.kq_search_hospital')->with('search_hospital',$search_hospital);
     }
     public function search_doctor(Request $request){
        $keyworks= $request->keyword_search;
        $search_doctor= DB::table('all_category_doctor')->where('name_doctor','like','%'.$keyworks.'%')->orWhere('hospital_doctor','like','%'.$keyworks.'%')->orWhere('specialist_doctor','like','%'.$keyworks.'%')->get();
        return view('front.checkout.kq_search_doctor')->with('search_doctor',$search_doctor);
     }
     public function sendBook(Request $request){
        $data = array();
        $data['customer_name'] = $request->book_name;
        $data['customer_phone'] = $request->phonenumber;
        $data['customer_email'] = $request->email_address;
        $data['book_type'] = "Đặt khám nhanh";
        $data['customer_status'] = "0";
        $data['describe'] = $request->text_area;
        DB::table('all_book_appointment')->insert($data);
        session()->flash('success', 'Đã đặt lịch thành công. Vui lòng check mail để xem lại thông tin.');
        $email_to = $request->email_address;
        Mail::to($email_to)->send(new SendEmail());
       return redirect()->route('home');

     }
     public function booking_doctor($doctor_id){
      // $show= DB::table('all_book_appointment')
      // ->join('all_category_doctor', 'all_book_appointment.doctor_id', '=', 'all_category_doctor.doctor_id')
      // ->join('users', 'all_book_appointment.user_id', '=', 'users.id')
      // ->select('all_book_appointment.*','all_category_doctor.img_doctor','all_category_doctor.name_doctor','all_category_doctor.hospital_doctor','users.name')
      // ->where('user_id',Auth::user()->id)
      // ->get();
      $data = array();
      $data['customer_name'] = Auth::user()->name;
      $data['user_id'] = Auth::user()->id;
      $data['doctor_id'] = $doctor_id;
      $data['customer_phone'] = Auth::user()->phonenumber;
      $data['customer_email'] = Auth::user()->email;
      $data['book_type'] = "Đặt khám bác sĩ";
      $data['customer_status'] = "0";
      DB::table('all_book_appointment')->insert($data);

     return back()->with('success','Đặt lịch thành công');

   }
    //
   //  public function sendmail(){
   //     $email_to = "nguannguoiungthu@gmail.com";
   //     Mail::to($email_to)->send(new SendEmail());
   //  }
    public function history_book(){
       $show_history = DB::table('all_book_appointment')
                   ->join('all_category_doctor', 'all_book_appointment.doctor_id', '=', 'all_category_doctor.doctor_id')
                   ->join('users', 'all_book_appointment.user_id', '=', 'users.id')
                   ->select('all_book_appointment.*','all_category_doctor.img_doctor','all_category_doctor.name_doctor','all_category_doctor.hospital_doctor','users.name')
                   ->where('user_id',Auth::user()->id)->orderBy('created_at','desc')
                   ->get();
       return view('front.History_datkham')->with('show_history',$show_history);
    }
   }
