<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;
use Illuminate\Support\Facades\Redirect;
use function Ramsey\Uuid\v1;
session_start();
class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
       if($admin_id){
        return Redirect::to('admin-dashboard');
       } 
       return Redirect::to('admin-login')->send();
    }
    //
     public function all_category_hospital(){
        $this->AuthLogin();
          $all_category_product =  DB::table('all_category_hospital')->get(); 
          return view('dashboard.all_category_hospital')->with('all_category_product', $all_category_product);
     }

    public function add_category_product(){
        $this->AuthLogin();
        return view('dashboard.add_category_product');
    }

    public function save_category_hospital(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['name_hospital'] = $request->name_hospital;
        $data['address_hospital'] = $request->address_hospital;
        $data['book_hospital'] = $request->NumberOfRegistrations;
        $check_hospital_code = $request->hospital_code;
        $is_True = DB::table('all_category_hospital')->select('hospital_code')->where('hospital_code',$check_hospital_code)->count()==0;
        $get_image = $request->file('img_hospital');
         if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image)); 
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image ->move('upload/hospital',$new_image);
            $data['img_hospital'] = $new_image;   
            
            if($is_True){
                $data['hospital_code'] = $check_hospital_code; 
                DB::table('all_category_hospital')->insert($data);
                Session::put('message','Thêm danh mục bệnh viện thành công');
                return Redirect::to('admin-add-category-product');
            }else{
                Session::put('message_error','Mã bệnh viện đã tồn tại');
                $request->flash();
                return Redirect::to('admin-add-category-product');
            }
       
        }
      else{
         $data['img_hospital'] = '';
     if($is_True){
        $data['hospital_code'] = $check_hospital_code; 
        DB::table('all_category_hospital')->insert($data);
        Session::put('message','Thêm danh mục bệnh viện thành công');
        return Redirect::to('admin-add-category-product');
        }
     else{
        Session::put('message_error','Mã bệnh viện đã tồn tại');
        $request->flash();
        return Redirect::to('admin-add-category-product');
        }   
       }   
       
    }
    public function edit_category_hospital($hospital_id){
        $this->AuthLogin();
        $edit_category_hospital =  DB::table('all_category_hospital')->where('hospital_id',$hospital_id)->get(); 
        $manager_category_hospital = view('dashboard.edit_category_hospital')->with('edit_category_hospital',$edit_category_hospital);
        return view('admin_layout')->with('dashboard.edit_category_hospital', $manager_category_hospital);
    }
    public function update_category_hospital(Request $request,$hospital_id){
        $this->AuthLogin();
        $data = array();
        $data['name_hospital'] = $request->name_hospital;
        $data['hospital_code'] = $request->hospital_code;
        $data['address_hospital'] = $request->address_hospital;
        $data['book_hospital'] = $request->NumberOfRegistrations;
        $get_image =$request->file('img_hospital');
       if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image)); 
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image ->move('upload/hospital',$new_image);
            $data['img_hospital'] = $new_image;
            DB::table('all_category_hospital')->where('hospital_id',$hospital_id)->update($data);
            Session::put('message','Cập nhật danh mục bệnh viện thành công');
            return Redirect::to('admin-all-category-hospital');
       } 
            $data['img_hospital'] = '';
            DB::table('all_category_hospital')->where('hospital_id',$hospital_id)->update($data);
            Session::put('message','Cập nhật danh mục bệnh viện thành công');
            return Redirect::to('admin-all-category-hospital');
    }
    public function delete_category_hospital($hospital_id){
        $this->AuthLogin();
        DB::table('all_category_hospital')->where('hospital_id',$hospital_id)->delete();
        Session::put('message','Xóa danh mục bệnh viện thành công!');
       return Redirect::to('admin-all-category-hospital');
    }

    
public function all_category_doctor(){
    $this->AuthLogin();
      $all_category_product =  DB::table('all_category_doctor')->get(); 
      return view('dashboard.all_category_doctor')->with('all_category_product', $all_category_product);
 }
 public function edit_category_doctor($doctor_id){
    $this->AuthLogin();
    $edit_category_doctor =  DB::table('all_category_doctor')->where('doctor_id',$doctor_id)->get(); 
    $manager_category_doctor = view('dashboard.edit_category_doctor')->with('edit_category_doctor',$edit_category_doctor);
    return view('admin_layout')->with('dashboard.edit_category_doctor', $manager_category_doctor);
}
public function save_category_doctor(Request $request){
    $this->AuthLogin();
    $data = array();
    $data['name_doctor'] = $request->name_doctor;
    $data['hospital_doctor'] = $request->hospital_doctor;
    $data['hospital_code'] = $request->hospital_code;
    $data['specialist_doctor'] = $request->specialist_doctor;
    $data['star_doctor'] = $request->star_doctor;
    $data['price_book'] = $request->price_book;
    $data['book_doctor'] = $request->book_doctor;
    $get_image = $request->file('img_doctor');
     if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image)); 
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image ->move('upload/doctor',$new_image)->move('ho-so-csyt/upload/doctor',$new_image);
        $data['img_doctor'] = $new_image;
        DB::table('all_category_doctor')->insert($data);
   Session::put('message','Thêm danh mục bác sĩ thành công');
   return Redirect::to('admin-add-category-product');
     }
     $data['img_doctor'] = '';
   DB::table('all_category_doctor')->insert($data);
   Session::put('message','Thêm danh mục bác sĩ thành công');
   return Redirect::to('admin-add-category-product');
}
public function update_category_doctor(Request $request,$doctor_id){
    $this->AuthLogin();
    $data = array();
    $data['name_doctor'] = $request->name_doctor;
    $data['hospital_doctor'] = $request->hospital_doctor;
    $data['hospital_code'] = $request->hospital_code;
    $data['specialist_doctor'] = $request->specialist_doctor;
    $data['star_doctor'] = $request->star_doctor;
    $data['price_book'] = $request->price_book;
    $data['book_doctor'] = $request->book_doctor;
    $get_image =$request->file('img_doctor');
   if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
         $name_image = current(explode('.',$get_name_image)); 
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image ->move('upload/doctor',$new_image);
        $data['img_doctor'] = $new_image;
        DB::table('all_category_doctor')->where('doctor_id',$doctor_id)->update($data);
        Session::put('message','Cập nhật danh mục bác sĩ thành công');
        return Redirect::to('admin-all-category-doctor');
   } 
        $data['img_doctor'] = '';
        DB::table('all_category_doctor')->where('doctor_id',$doctor_id)->update($data);
        Session::put('message','Cập nhật danh mục bác sĩ thành công');
        return Redirect::to('admin-all-category-doctor');
}
public function delete_category_doctor($doctor_id){
    $this->AuthLogin();
    DB::table('all_category_doctor')->where('doctor_id',$doctor_id)->delete();
    Session::put('message','Xóa danh mục bác sĩ thành công!');
   return Redirect::to('admin-all-category-doctor');
}
public function Test(){
    $hospital_code = array(DB::table('all_category_hospital')->select('hospital_code')->get());
    echo '<pre>';
    print_r($hospital_code);
    echo '</pre>';
}
}
