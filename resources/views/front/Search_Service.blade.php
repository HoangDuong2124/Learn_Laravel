@extends('user_layout')
@section('main_content')

    <!------Main Section Begin-------->
    <div class="main-content">
        <div class="services-wrapper" style="background-color:#f4f4f4">
            <div class="categories-wrapper">
                <div class="container">
                    <div class="list-categories">
                        {{-- @foreach ($lists as $list) --}}
                        <div class="category-item "></div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>
                        <div class="category-item ">Khám Sức Khoẻ Lái Xe</div>
                        <div class="category-item ">hello</div>


                    </div>
                </div>
            </div>
        </div>
        <div class="btn-search">
              <h3 class="banner-title">Đặt khám tại Health Plus </h3>
              <p>Để được đón tiếp ưu tiên, không cần xếp hàng đợi tại các điểm bệnh viện </p>
             <div class="general-search">
             <form action="{{URL::to('/timkiem-bs')}}" method="post">
             {{ csrf_field() }}
                <div class="search-box">
                     
                   <div class="search-input">
                      <span class="icon-search">
                      <input type="submit" style="display:none">
                      <svg viewBox="64 64 896 896" focusable="false" data-icon="search" width="1.3em" height="1.3em" fill="currentColor" aria-hidden="true"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0011.6 0l43.6-43.5a8.2 8.2 0 000-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg>
                      </span>
                      <input type="text" name="keyword_search" class="text-search" placeholder="Tìm triệu chứng, chuyên khoa, tên bác sĩ, cơ sở làm việc...">
                   </div>
                   <div class="search-address">
                       <div class="ant-selecter">
                          <input type="text" class="text-ant-select" placeholder="Địa Điểm">
                       </div>
                       <span style="padding-top:4.5px;opacity:0.7;">
                       <svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="0.9em" height="0.9em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg>
                       </span>
                   </div>
                   
                </div>
             </form>
             </div> 
           </div>
        <div class="container">
            <div class="service-heading">
                <h2>Chọn dịch vụ đặt khám</h2>
            </div>

            <div class="list-service">
                <!-- {{-- @foreach ($lists as $list)
                    <a href="" class="service-item">
                        <div class="service-img">
                            <img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/xet-nghiem-benh-lay-truyen-qua-duong-tinh-duc-isofhcare-png_70f80c6b_f41f_481c_8826_03e4c6b443e3.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">{{ $list->nameService }}</h3>
                            <h4 class="hospital-service">{{ $list->clinicname }}</h4>
                            <div class="service-price">{{ $list->price }}</div>
                        </div>
                        <div class="service-icon">
                            <img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                @endforeach --}} -->
                <div class="list-service">
                    <a href="/chi-tiet-dich-vu/Chup-X-Quang-2864" class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/xquang_2683bf0a_9b58_4caa_a385_a8f5579cf07b.jpg">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Chụp X-Quang</h3>
                            <h4 class="hospital-service">Phòng Khám Chuyên Khoa Vật Lý Trị Liệu Và Phục Hồi Chức Năng
                                DR.ALLEN - Hai Bà
                                Trưng</h4>
                            <div class="service-price">120.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Dieu-tri-cac-benh-ly-co-xuong-khop-bang-PP-Chiropractic-voi-BS-nguoi-nuoc-ngoai--2863"
                        class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/nan-chinh_f3ac1f0b_abd1_4f08_98b1_92acadb92601.jpg">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Điều trị các bệnh lý cơ xương khớp bằng PP Chiropractic với BS
                                người nước ngoài
                            </h3>
                            <h4 class="hospital-service">Phòng Khám Chuyên Khoa Vật Lý Trị Liệu Và Phục Hồi Chức Năng
                                DR.ALLEN - Hai Bà
                                Trưng</h4>
                            <div class="service-price">850.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Dieu-tri-cac-benh-ly-co-xuong-khop-bang-PP-Chiropractic-voi-BS-nguoi-nuoc-ngoai--2862"
                        class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/nan-chinh_a33040f0_3e76_412b_86aa_40cd852509a8.jpg">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Điều trị các bệnh lý cơ xương khớp bằng PP Chiropractic với BS
                                người nước ngoài
                            </h3>
                            <h4 class="hospital-service">Phòng Khám Chuyên Khoa Vật Lý Trị Liệu Và Phục Hồi Chức Năng
                                DR.ALLEN - Cầu
                                Giấy</h4>
                            <div class="service-price">850.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-hoi-chan-(1-BS-+-1-GS)-2578" class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/phong-kham-phuc-hoi-chuc-nang-my-rehab-isofhcare-jpg_c6042b40_000b_4fb1_b7f8_23cf215d7582.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám hội chẩn (1 BS + 1 GS)</h3>
                            <h4 class="hospital-service">Trung Tâm Trị Liệu Phục Hồi Chức Năng MyRehab</h4>
                            <div class="service-price">2.160.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-hoi-chan-(2-BS-+-1-GS)-2579" class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/phong-kham-phuc-hoi-chuc-nang-my-rehab-isofhcare-jpg_c6042b40_000b_4fb1_b7f8_23cf215d7582.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám hội chẩn (2 BS + 1 GS)</h3>
                            <h4 class="hospital-service">Trung Tâm Trị Liệu Phục Hồi Chức Năng MyRehab</h4>
                            <div class="service-price">2.880.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-nam-hoc-2351" class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/1598498688731-logo_b86c2bbe_fd9b_4b42_9bf7_acacb768ef86.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám nam học</h3>
                            <h4 class="hospital-service">Tổ Hợp Phòng Khám MEDIPLUS</h4>
                            <div class="service-price">350.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-suc-khoe-di-lam,-di-hoc-tai-Phong-kham-Quoc-te-Thanh-Chan-1824"
                        class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/kham-suc-khoe-cap-giay-tai-pk-thanh-chan-jpg_e5d9480c_c1c0_4722_96f7_80044d02f742.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám sức khoẻ đi làm, đi học tại Phòng khám Quốc tế Thanh Chân
                            </h3>
                            <h4 class="hospital-service">PHÒNG KHÁM ĐA KHOA QUỐC TẾ THANH CHÂN</h4>
                            <div class="service-price">200.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-Suc-khoe-lai-xe--2355" class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/105922-kham_suc_khoe_toan_dien_benh_vien_108-jpg_2b596dad_8f55_46bd_bb7f_801ec0d024dc.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám Sức khoẻ lái xe </h3>
                            <h4 class="hospital-service">Phòng Khám Đa Khoa Việt Hàn</h4>
                            <div class="service-price">300.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-Suc-khoe-Lai-xe-tai-Phong-kham-Quoc-te-Thanh-Chan-1825"
                        class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/ksk-lai-xe-tai-phong-kham-thanh-chan-jpg_d1f43605_e931_443b_89dc_71a535d21a95.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám Sức khoẻ Lái xe tại Phòng khám Quốc tế Thanh Chân</h3>
                            <h4 class="hospital-service">PHÒNG KHÁM ĐA KHOA QUỐC TẾ THANH CHÂN</h4>
                            <div class="service-price">300.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                    <a href="/chi-tiet-dich-vu/Kham-Tai-Mui-Hong-voi-PGS-Hoai-An---Benh-vien-An-Viet-2681"
                        class="service-item">
                        <div class="service-img"><img
                                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/bs-hoai-an---bv-an-viet-png_f4f7167e_6b2a_4fd8_834b_65bc42724ecd.png">
                        </div>
                        <div class="service-info">
                            <h3 class="service-title">Khám Tai Mũi Họng với PGS Hoài An - Bệnh viện An Việt</h3>
                            <h4 class="hospital-service">Bệnh Viện An Việt</h4>
                            <div class="service-price">400.000 đ </div>
                        </div>
                        <div class="service-icon"><img alt="detail"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
                        </div>
                    </a>
                </div>
            </div>
            <ul class="ant-pagination" unselectable="unselectable">
                <li title="Previous Page" class="ant-pagination-prev ant-pagination-disabled" aria-disabled="true">
                    <button class="ant-pagination-item-link" type="button" tabindex="-1" disabled=""><span
                            role="img" aria-label="left" class="anticon anticon-left"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em"
                                height="1em" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z">
                                </path>
                            </svg></span></button>
                </li>
                <li title="1" class="ant-pagination-item ant-pagination-item-1 ant-pagination-item-active"
                    tabindex="0"><a rel="nofollow">1</a></li>
                <li title="2" class="ant-pagination-item ant-pagination-item-2" tabindex="0"><a
                        rel="nofollow">2</a></li>
                <li title="3" class="ant-pagination-item ant-pagination-item-3" tabindex="0"><a
                        rel="nofollow">3</a></li>
                <li title="4" class="ant-pagination-item ant-pagination-item-4" tabindex="0"><a
                        rel="nofollow">4</a></li>
                <li title="5"
                    class="ant-pagination-item ant-pagination-item-5 ant-pagination-item-before-jump-next"
                    tabindex="0"><a rel="nofollow">5</a></li>
                <li title="Next 5 Pages" tabindex="0"
                    class="ant-pagination-jump-next ant-pagination-jump-next-custom-icon"><a
                        class="ant-pagination-item-link">
                        <div class="ant-pagination-item-container"><span role="img" aria-label="double-right"
                                class="anticon anticon-double-right ant-pagination-item-link-icon"><svg
                                    viewBox="64 64 896 896" focusable="false" data-icon="double-right"
                                    width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M533.2 492.3L277.9 166.1c-3-3.9-7.7-6.1-12.6-6.1H188c-6.7 0-10.4 7.7-6.3 12.9L447.1 512 181.7 851.1A7.98 7.98 0 00188 864h77.3c4.9 0 9.6-2.3 12.6-6.1l255.3-326.1c9.1-11.7 9.1-27.9 0-39.5zm304 0L581.9 166.1c-3-3.9-7.7-6.1-12.6-6.1H492c-6.7 0-10.4 7.7-6.3 12.9L751.1 512 485.7 851.1A7.98 7.98 0 00492 864h77.3c4.9 0 9.6-2.3 12.6-6.1l255.3-326.1c9.1-11.7 9.1-27.9 0-39.5z">
                                    </path>
                                </svg></span><span class="ant-pagination-item-ellipsis">•••</span></div>
                    </a></li>
                <li title="126" class="ant-pagination-item ant-pagination-item-126" tabindex="0"><a
                        rel="nofollow">126</a></li>
                <li title="Next Page" tabindex="0" class="ant-pagination-next" aria-disabled="false"><button
                        class="ant-pagination-item-link" type="button" tabindex="-1"><span role="img"
                            aria-label="right" class="anticon anticon-right"><svg viewBox="64 64 896 896"
                                focusable="false" data-icon="right" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z">
                                </path>
                            </svg></span></button></li>
            </ul>
            {{-- //$('.ant-pagination li.page-item').eq(1).addClass('active'); --}}

        </div>
    </div>



{{-- <div class="list-service"><a href="/chi-tiet-dich-vu/Chup-X-Quang-2864" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/xquang_2683bf0a_9b58_4caa_a385_a8f5579cf07b.jpg">
        </div>
        <div class="service-info">
            <h3 class="service-title">Chụp X-Quang</h3>
            <h4 class="hospital-service">Phòng Khám Chuyên Khoa Vật Lý Trị Liệu Và Phục Hồi Chức Năng DR.ALLEN - Hai Bà
                Trưng</h4>
            <div class="service-price">120.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a
        href="/chi-tiet-dich-vu/Dieu-tri-cac-benh-ly-co-xuong-khop-bang-PP-Chiropractic-voi-BS-nguoi-nuoc-ngoai--2863"
        class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/nan-chinh_f3ac1f0b_abd1_4f08_98b1_92acadb92601.jpg">
        </div>
        <div class="service-info">
            <h3 class="service-title">Điều trị các bệnh lý cơ xương khớp bằng PP Chiropractic với BS người nước ngoài
            </h3>
            <h4 class="hospital-service">Phòng Khám Chuyên Khoa Vật Lý Trị Liệu Và Phục Hồi Chức Năng DR.ALLEN - Hai Bà
                Trưng</h4>
            <div class="service-price">850.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a
        href="/chi-tiet-dich-vu/Dieu-tri-cac-benh-ly-co-xuong-khop-bang-PP-Chiropractic-voi-BS-nguoi-nuoc-ngoai--2862"
        class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/nan-chinh_a33040f0_3e76_412b_86aa_40cd852509a8.jpg">
        </div>
        <div class="service-info">
            <h3 class="service-title">Điều trị các bệnh lý cơ xương khớp bằng PP Chiropractic với BS người nước ngoài
            </h3>
            <h4 class="hospital-service">Phòng Khám Chuyên Khoa Vật Lý Trị Liệu Và Phục Hồi Chức Năng DR.ALLEN - Cầu
                Giấy</h4>
            <div class="service-price">850.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-hoi-chan-(1-BS-+-1-GS)-2578" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/phong-kham-phuc-hoi-chuc-nang-my-rehab-isofhcare-jpg_c6042b40_000b_4fb1_b7f8_23cf215d7582.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám hội chẩn (1 BS + 1 GS)</h3>
            <h4 class="hospital-service">Trung Tâm Trị Liệu Phục Hồi Chức Năng MyRehab</h4>
            <div class="service-price">2.160.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-hoi-chan-(2-BS-+-1-GS)-2579" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/phong-kham-phuc-hoi-chuc-nang-my-rehab-isofhcare-jpg_c6042b40_000b_4fb1_b7f8_23cf215d7582.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám hội chẩn (2 BS + 1 GS)</h3>
            <h4 class="hospital-service">Trung Tâm Trị Liệu Phục Hồi Chức Năng MyRehab</h4>
            <div class="service-price">2.880.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-nam-hoc-2351" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/1598498688731-logo_b86c2bbe_fd9b_4b42_9bf7_acacb768ef86.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám nam học</h3>
            <h4 class="hospital-service">Tổ Hợp Phòng Khám MEDIPLUS</h4>
            <div class="service-price">350.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-suc-khoe-di-lam,-di-hoc-tai-Phong-kham-Quoc-te-Thanh-Chan-1824"
        class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/kham-suc-khoe-cap-giay-tai-pk-thanh-chan-jpg_e5d9480c_c1c0_4722_96f7_80044d02f742.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám sức khoẻ đi làm, đi học tại Phòng khám Quốc tế Thanh Chân</h3>
            <h4 class="hospital-service">PHÒNG KHÁM ĐA KHOA QUỐC TẾ THANH CHÂN</h4>
            <div class="service-price">200.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-Suc-khoe-lai-xe--2355" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/105922-kham_suc_khoe_toan_dien_benh_vien_108-jpg_2b596dad_8f55_46bd_bb7f_801ec0d024dc.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám Sức khoẻ lái xe </h3>
            <h4 class="hospital-service">Phòng Khám Đa Khoa Việt Hàn</h4>
            <div class="service-price">300.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-Suc-khoe-Lai-xe-tai-Phong-kham-Quoc-te-Thanh-Chan-1825" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/ksk-lai-xe-tai-phong-kham-thanh-chan-jpg_d1f43605_e931_443b_89dc_71a535d21a95.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám Sức khoẻ Lái xe tại Phòng khám Quốc tế Thanh Chân</h3>
            <h4 class="hospital-service">PHÒNG KHÁM ĐA KHOA QUỐC TẾ THANH CHÂN</h4>
            <div class="service-price">300.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">
        </div>
    </a><a href="/chi-tiet-dich-vu/Kham-Tai-Mui-Hong-voi-PGS-Hoai-An---Benh-vien-An-Viet-2681" class="service-item">
        <div class="service-img"><img
                src="https://isofhcare-backup.s3-ap-southeast-1.amazonaws.com/images/bs-hoai-an---bv-an-viet-png_f4f7167e_6b2a_4fd8_834b_65bc42724ecd.png">
        </div>
        <div class="service-info">
            <h3 class="service-title">Khám Tai Mũi Họng với PGS Hoài An - Bệnh viện An Việt</h3>
            <h4 class="hospital-service">Bệnh Viện An Việt</h4>
            <div class="service-price">400.000 đ </div>
        </div>
        <div class="service-icon"><img alt="detail"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAQCAYAAADqDXTRAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACkSURBVHgBvdWxDcIwEAXQ70NKzQgZgRVS0rECJROhVIyQEkEDo3gEFsDO/QHOafzzK0tXPOv8JQOKvOYLnvcxGhsUYMKCg30iuD86DF9UZD+NEdwfna4/lDK14ARVCJmDyWH4Bf5+kfMta9EGrEUDOOE9V+yb3L9IW6nqN2W4XjaYTWajC9e7M6gtUgBypEEboAbdAJn+7TU7tUBd+NMsj2M0XgHolFu0MNoBgAAAAABJRU5ErkJggg==">

        </div>
    </a></div> --}}

    @endsection
