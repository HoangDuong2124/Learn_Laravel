                             **SAU ĐÂY LÀ HƯỚNG DẪN CÁC BƯỚC ĐỂ CHẠY DỰ ÁN**
B1:CÀI ĐẶT COMPOSER DEPENDENCIES:
  Mở terminal (hoặc command prompt) và di chuyển đến thư mục của dự án Laravel đã clone. Sau đó chạy lệnh sau để cài đặt các dependencies của Composer: " composer install "

B2:TẠO FILE ENVIRONMENT:
  Sao chép file .env.example và đổi tên thành .env. Bạn cũng có thể tạo một bản sao từ terminal bằng cách chạy lệnh:   " cp .env.example .env "
  Mở file .env và đặt các thông số cấu hình như cơ sở dữ liệu, URL, và các cấu hình khác. Và vì trong file .env.example tôi đã điền tất cả những thông tin cần thiết nên giờ bạn chỉ cần copy và đổi tên thành file .env là xong.

B3:TẠO CƠ SỞ DỮ LIỆU VÀ KHOÁ ỨNG DỤNG:
- Bạn mở MySQL lên và tạo 1 cơ sở dữ liệu mới có tên là 'learn_laravel'
- Chạy lệnh sau để tạo khóa ứng dụng trong file .env: " php artisan key:generate "  

B4:TẠO VÀ CẬP NHẬT CƠ SỞ DỮ LIỆU:
- Chạy lệnh để tạo cơ sở dữ liệu và chạy các migration: " php artisan migrate "
- Chạy lệnh sau để điền dữ liệu mẫu vào cơ sở dữ liệu: " php artisan db:seed "
- Hoặc bạn cũng có thể gộp hai lệnh trên bằng lệnh sau: " php artisan migrate:refresh --seed "

B5:CHẠY MÁY CHỦ PHÁT TRIỂN: 
Sử dụng lệnh sau để khởi chạy máy chủ phát triển của Laravel: " php artisan serve "
Mặc định, máy chủ sẽ chạy tại http://localhost:8000. Bạn có thể truy cập đường dẫn này trong trình duyệt để kiểm tra dự án của mình.
Nhớ rằng, để chạy các lệnh Laravel, bạn cần cài đặt PHP và Composer trước đó. Hãy chắc chắn rằng bạn đã cài đặt chúng và cấu hình đúng đắn trên máy tính của mình.

