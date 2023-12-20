<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Hoàng Dương ',
                'phonenumber' => '0912345678',
                'email' => 'abc@gmail.com',
                'password' => Hash::make('123456789'),

            ],
            [
                'id' => 2,
                'name' => 'Hảo Nhi ',
                'phonenumber' => '0912349876',
                'email' => '1234@gmail.com',
                'password' => Hash::make('111111111'),
            ],
        ]);
        DB::table('account_admin')->insert([
            [
                'id' => 1,
                'admin_email' =>'admin@gmail.com',
                'admin_name' => 'Hoàng Dương ',
                'admin_phone' => '0912345678',
                'password' => Hash::make('admin1234'),

            ],
            [
                'id' => 2,
                'admin_email' =>'admin2@gmail.com',
                'admin_name' => 'Nguyễn Văn A ',
                'admin_phone' => '0912345678',
                'password' => Hash::make('demoadmin1234'),

            ],

        ]);
        DB::table('all_category_hospital')->insert([
            [
                'hospital_id' => 1,
                'hospital_code' => 'ma01',
                'img_hospital' => 'bv_vietduc47.png',
                'name_hospital' => 'Bệnh viện Hữu Nghị Việt Đức',
                'address_hospital' =>'40 P. Tràng Thi, Hàng Bông, Hoàn Kiếm, Hà Nội',
                'book_hospital' => 50,
                'description_hospital'=> '<h2><strong>Giới thiệu chung</strong></h2><p><strong>Tổng đài tư vấn và đặt lịch khám: 1900638367</strong></p><p><br></p><p>Bệnh viện Hữu Nghị Việt Đức là một trong 5 bệnh viện tuyến trung ương hạng đặc biệt hàng đầu của Việt Nam. Tọa lạc giữa trung tâm thủ đô Hà Nội, có nhiều cổng nằm trên các mặt đường Tràng Thi, Phủ Doãn, Quán Sứ thuộc quận Hoàn Kiếm, Thành phố Hà Nội.</p><p><br></p><p>Bệnh viện là một trong những trung tâm phẫu thuật lớn của cả nước với nhiều thế hệ y bác sĩ nổi tiếng, bệnh viện có nhiều thế mạnh về các chuyên khoa: Thần kinh, Gan mật, Tiêu hóa, Chấn thương, Cột sống, Nam học…Bệnh viện có nhiều dịch vụ y tế chất lượng cao cùng trang thiết bị hiện đại như:</p><ul><li>Phẫu thuật nội soi chuyên ngành tiêu hóa, tim mạch lồng ngực, tiết niệu nam học, nhi khoa, chấn thương chỉnh hình, cột sống và phẫu thuật thần kinh…</li><li>Cơ sở hàng đầu của cả nước về chuyên ngành ghép tạng: ghép đa tạng, ghép tim, ghép phổi, ghép gan, ghép thận, ghép chi thể.</li></ul><p><br></p>',
            ],

            [
                'hospital_id' => 2,
                'hospital_code' => 'ma02',
                'img_hospital' => 'bvE89.jpg',
                'name_hospital' => 'Bệnh viện E',
                'address_hospital' =>'89 Đ. Trần Cung, Nghĩa Tân, Cầu Giấy, Hà Nội',
                'book_hospital' => 10,
                'description_hospital'=> '<p><strong style="color: rgb(153, 51, 255);">Giới thiệu chung</strong></p><p class="ql-align-justify"><strong>Bệnh viện E Hà Nội</strong>&nbsp;là bệnh viện đa khoa&nbsp;hạng I trực thuộc Bộ Y tế, được thành lập từ năm 1967, tọa lạc trên mặt đường Trần Cung, Nghĩa Tân, Cầu Giấy, Hà Nội. Bệnh viện có&nbsp;khuôn viên rộng rãi (diện tích 41.000 m2), thoáng mát, xanh, sạch, đẹp cùng dịch vụ chăm sóc người bệnh nhiệt tình.</p><p class="ql-align-justify">Bệnh viện đầu tư trang bị đầy đủ cơ sở hạ tầng, cập nhật các thiết bị kỹ thuật hiện đại và đội ngũ y bác sĩ y đức, giàu chuyên môn, thực hiện khám chữa các chuyên khoa như: Nội, Ngoại, Sản, Nhi, Ung bướu, Tai mũi họng, Răng hàm mặt, Mắt...để phục vụ nhu cầu khám và điều trị bệnh của người dân.</p><p><br></p>',
            ],
            [
                'hospital_id' => 3,
                'hospital_code' => 'ma03',
                'img_hospital' => 'bv_xanhpon40.jpg',
                'name_hospital' => 'Bệnh viện Xanh Pôn',
                'address_hospital' =>'12 P. Chu Văn An, Điện Biên, Ba Đình, Hà Nội',
                'book_hospital' => 12,
                'description_hospital'=> '',
            ],
            [
                'hospital_id' => 4,
                'hospital_code' => 'ma04',
                'img_hospital' => 'bv_phusan91.jpg',
                'name_hospital' => 'Bệnh viện Phụ Sản',
                'address_hospital' =>'929 Đ. La Thành, Láng Thượng, Ba Đình, Hà Nội',
                'book_hospital' => 4,
                'description_hospital'=> '',
            ],
            [
                'hospital_id' => 5,
                'hospital_code' => 'ma05',
                'img_hospital' => 'bvK18.jpg',
                'name_hospital' => 'Bệnh viện K',
                'address_hospital' =>'43 P. Quán Sứ, Hàng Bông, Hoàn Kiếm, Hà Nội',
                'book_hospital' => 0,
                'description_hospital'=> '',
            ],
            [
                'hospital_id' => 6,
                'hospital_code' => 'ma06',
                'img_hospital' => 'bv_mattw23.jpg',
                'name_hospital' => 'Bệnh viện mắt Trung Ương',
                'address_hospital' =>'85 Phố Bà Triệu, Nguyễn Du, Hai Bà Trưng, Thành phố Hà Nội',
                'book_hospital' => 15,
                'description_hospital'=> '',
            ],
        ]);
        DB::table('all_category_doctor')->insert([
            [
                'doctor_id' =>1,
                'img_doctor'=>'vd_hoanglong40.png',
                'name_doctor'=>'PGS.TS Hoàng Long',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện Hữu Nghị Việt Đức',
                'hospital_code' =>'ma01',
                'specialist_doctor' =>'Chuyên khoa Phẫu thuật tiết niệu',
                'price_book' => 500000,
                'description_doctor'=> '<p><strong>KINH NGHIỆM KHÁM CHỮA BỆNH</strong></p><p>Bác sĩ khoa Phẫu Thuật tiết niệu</p><p>Giảng viên cao cấp - Bộ môn Ngoại, Trường Đại học Y Hà Nội.</p><p><br></p><p>Quá trình đào tạo:</p><p>-Năm 1984: Tốt nghiệp Đại học Y Hà Nội. Tốt nghiệp Bác sĩ nội trú tại bệnh viện Hospièr - Đại học Luis Pasteur.</p><p>-Năm 2000: Bảo vệ luận văn Thạc sĩ tại trường Đại học Y Hà Nội.&nbsp;</p><p>-Năm 2010: Bảo vệ luận án Tiến sỹ tại trường Đại học Y Hà Nội.</p><p>-Năm 2013: Phong hàm Phó Giáo sư tại trường Đại học Y Hà Nội.</p><p><br></p><p>Thế mạnh chuyên môn:</p><p>-Phẫu thuật tiêu hóa.</p>',
            ],
            [
                'doctor_id' =>2,
                'img_doctor'=>'vd_vanthach97.jpg',
                'name_doctor'=>'PGS.TS Nguyễn Văn Thạch',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện Hữu Nghị Việt Đức',
                'hospital_code' =>'ma01',
                'specialist_doctor' =>'Chuyên khoa Phẫu Thuật Cột sống',
                'price_book' => 500000,
                'description_doctor'=> '',
            ],
            [
                'doctor_id' =>3,
                'img_doctor'=>'vd_truongthanh74.jpg',
                'name_doctor'=>'PGS.TS Đỗ Trường Thành',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện Hữu Nghị Việt Đức',
                'hospital_code' =>'ma01',
                'specialist_doctor' =>'Chuyên khoa Phẫu thuật tiết niệu',
                'price_book' => 500000,
                'description_doctor'=> '',
            ],
            [
                'doctor_id' =>4,
                'img_doctor'=>'vd_vantuan94.png',
                'name_doctor'=>'PGS.TS Trịnh Văn Tuấn',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện Hữu Nghị Việt Đức',
                'hospital_code' =>'ma01',
                'specialist_doctor' =>'Chuyên khoa Phẫu Thuật Cột sống',
                'price_book' => 500000,
                'description_doctor'=> '',
            ],
            [
                'doctor_id' =>5,
                'img_doctor'=>'bve_ngocthanh.jpg',
                'name_doctor'=>'GS LÊ NGỌC THÀNH',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện E',
                'hospital_code' =>'ma02',
                'specialist_doctor' =>'Ngoại tim mạch',
                'price_book' => 300000,
                'description_doctor'=> '',
            ],
            [
                'doctor_id' =>6,
                'img_doctor'=>'bve_conghuu.jpg',
                'name_doctor'=>'TS.BS NGUYỄN CÔNG HỰU',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện E',
                'hospital_code' =>'ma02',
                'specialist_doctor' =>'Ngoại tim mạch',
                'price_book' => 300000,
                'description_doctor'=> '',
            ],
            [
                'doctor_id' =>7,
                'img_doctor'=>'bve_minhtam.jpg',
                'name_doctor'=>'TS.BS MAI THỊ MINH TÂM',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện E',
                'hospital_code' =>'ma02',
                'specialist_doctor' =>'Cơ Xương Khớp',
                'price_book' => 300000,
                'description_doctor'=> '',
            ],
            [
                'doctor_id' =>8,
                'img_doctor'=>'bve_dinhlien.jpg',
                'name_doctor'=>'TS.BS NGUYỄN ĐÌNH LIÊN',
                'book_doctor' =>10,
                'star_doctor' => 5,
                'hospital_doctor' =>'Bệnh viện E',
                'hospital_code' =>'ma02',
                'specialist_doctor' =>'Ngoại tim mạch',
                'price_book' => 300000,
                'description_doctor'=> '',
            ],
        ]);
    }
}
