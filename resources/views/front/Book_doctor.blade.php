@extends('user_layout')
@section('title','Book Doctor')
@section('main_content')
<script>
        $(document).ready(function(){
            $('.item-label').click(function(){
                 $(this).parent().toggleClass('active');
            //      $('button-select-date-time.active').removeClass('active').addClass('cl');
            //  $(this).addClass('active').removeClass('cl');
            })
        })

   </script>
<div style="background-color:#f4f4f4">
    <div class="container-profile-doctor container">
        @foreach($show_detail_doctor as $key=> $show_detail_doctor)
        <div class="doctor-info-head">
            <div class="doctor-image">
                <div class="doctor-image-online-icon">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE7SURBVHgB7VTRccIwDJU5BsgI2aB0g4zABmQDGIFOQDdIOkFHACagnSBhArqB+gQvjeu6jculd/3g3b1TYktPsk62yA0DcKmOqprBzPnbOud2MhYgvtGvaMDZUKyLiBUwBX9rcAmuwBfwCXzj/oLf9zhNK4mVVhpHwxb5viX3qlTxLuAAzu0kFDasvok5mU9qgi3FZpGkjxH/rCvoJ92J932k9VtxR7uAUB7ELmn3kgK2pMOzdyIN1iu2RmkzTyPXy8SVsQQHvQ4Vi9sG64XpTiluF8h6X8tlFFNhE1SShh34yvblHwmk7/v+NzcUhbUUqq0wiw3bM5VxsIb4MbYxkT/GWAnWkTGOJog6JaAEG5sk6e9OD87vSa9DwzGtg/Xz0+78JDAb+XyTh9CCD91rSo3zy4u1Wm74F3gHEJOvmn0/JnsAAAAASUVORK5CYII=" alt="">
         </div>
            <img src="/upload/doctor/{{$show_detail_doctor->img_doctor}}" alt="{{$show_detail_doctor->name_doctor}}" class="img-doctor">
            </div>
            <div class="doctor-text">
                <div class="doctor-text-head">
                    <h1 class="doctor-name">
                        BS.{{$show_detail_doctor->name_doctor}}
                    </h1>
                    <div class="container-like"><iframe src="https://www.facebook.com/plugins/share_button.php?href=
        https://isofhcare.com/ho-so-bac-si/TS-Nguyen-Hoang-Long-3574&amp;layout=button&amp;size=small&amp;appId=187875142367413&amp;width=119&amp;height=20" width="119" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></div>
                </div>
                <div class="doctor-text-more">
                    <div class="doctor-more">
                        <h4 class="hospital-name"><a href="/ho-so-csyt/BAC-SI-OI---PHONG-KHAM-O2O-78">
                        {{$show_detail_doctor->hospital_doctor}}
                        </a></h4>
                        <div class="price-info">
                            <div class="price-detail"><span class="price-icon"><svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.66669" y="0.5" width="16" height="16" fill="#FFAD4D"></rect>
                                        <g clip-path="url(#clip0_2121_5638)">
                                            <path d="M14.969 6.5001C14.8622 6.29437 14.6487 6.16676 14.4169 6.16676H10.3387L11.6627 2.85679C11.74 2.66473 11.7164 2.44584 11.6 2.27396C11.4836 2.10209 11.2684 2 11.0835 2H6.50005C6.18676 2 5.92217 2.23193 5.88076 2.54272L5.04741 8.79286C5.02298 8.97151 5.07751 9.1512 5.19632 9.28662C5.31512 9.42204 5.48674 9.50017 5.66669 9.50017H9.47668L8.38863 14.555C8.32597 14.8472 8.47897 15.1425 8.75322 15.2605C8.83343 15.318 8.91677 15.3336 9.0001 15.3336C9.20112 15.3336 9.39647 15.236 9.516 15.0618L14.9328 7.14491C15.0627 6.95324 15.0784 6.70584 14.969 6.5001Z" fill="white"></path>
                                        </g>
                                        <rect x="1.66669" y="0.5" width="16" height="16" stroke="#FFAD4D"></rect>
                                        <path d="M2 0.00250223V16.9975H0.143839C0.0570245 17.0031 0 16.9975 0 16.9975H0.143839C0.420571 16.9796 1 16.8472 1 16.0533C1 15.0104 0 15.2079 0 14.165C0 13.1221 1 13.3196 1 12.2767C1 11.2338 0 11.4312 0 10.3883C0 9.34544 1 9.5429 1 8.5C1 7.4571 0 7.65457 0 6.61167C0 5.56877 1 5.76623 1 4.72333C1 3.68044 0 3.8779 0 2.835C0 1.7921 1 1.98957 1 0.946669C1 0.152811 0.420569 0.0204488 0.143837 0.00250223H0C0 0.00250223 0.0570236 -0.00312778 0.143837 0.00250223H2Z" fill="#FFAD4D"></path>
                                        <path d="M17.8333 0.00250223V16.9975H19.6895C19.7763 17.0031 19.8333 16.9975 19.8333 16.9975H19.6895C19.4127 16.9796 18.8333 16.8472 18.8333 16.0533C18.8333 15.0104 19.8333 15.2079 19.8333 14.165C19.8333 13.1221 18.8333 13.3196 18.8333 12.2767C18.8333 11.2338 19.8333 11.4312 19.8333 10.3883C19.8333 9.34544 18.8333 9.5429 18.8333 8.5C18.8333 7.4571 19.8333 7.65457 19.8333 6.61167C19.8333 5.56877 18.8333 5.76623 18.8333 4.72333C18.8333 3.68044 19.8333 3.8779 19.8333 2.835C19.8333 1.7921 18.8333 1.98957 18.8333 0.946669C18.8333 0.152811 19.4127 0.0204488 19.6895 0.00250223H19.8333C19.8333 0.00250223 19.7763 -0.00312778 19.6895 0.00250223H17.8333Z" fill="#FFAD4D"></path>
                                        <defs>
                                            <clipPath id="clip0_2121_5638">
                                                <rect width="11.25" height="15" fill="white" transform="translate(4.04169 1)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></span><span class="price-number">200.000đ</span><span class="origin-price">{{$show_detail_doctor->price_book}}VNĐ</span></div>
                        </div>
                        <div class="special-items">
                            <div class="special-item">Chuyên khoa Ngoại</div>
                            <div class="special-item">Chuyên khoa Chấn thương chỉnh hình</div>
                            <div class="special-item">Chuyên khoa Phẫu Thuật Cột sống</div>
                            <div class="special-item">Chuyên khoa Cơ Xương Khớp</div>
                            <div class="special-item">Chuyên khoa Cơ - Xương - Khớp</div>
                        </div>
                    </div>
                    <div class="doctor-more">
                        <div class="more-item">
                            <div class="more-item-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGDSURBVHgB7VRNTsJAFP46UwwLFxyh3IAjYEyIuEFPICQmhBV6AvQEwsIQ3RROIC4MkQ0coTew3gBduBA642PaNNjW/qQLNeFLOpm+b+Z9835mgB1+G1rIMrvvAvKCZgbRFuAMUOuMErlUArNhE2BmaJXEKTRRiuQccYB6Z4EfwAK/XdehuKaNZZoM3GNoZGe9SI7zHmIQEEBFjXrBpFPZcGTfC6EKlRbCR7GvuBUbeZyBDAKWGoVsYjo0oHsRufalmu2vu4rbk2eegI0YfK/BlGrAI/K8phowioDhJpI7bk+QKoI6dYQjWn4kkAvlQBMW5X4S4jYFjnEeFlAW1oBkC8pTC5JbKMCkqF68r0dCjz6n09ptPJglPN1Wtk3BFFXJyRxZwLmBw/NXdUc0eUUtXUKt7fvVkRefqzI5H6lOk2GaIS/4pn1VG0civ0AC/oEAL8whcEn5t5MFikUL2bDEO3/DUbsPQXdCijH8e+Ii/Fw/351QuzXSeKe3ahz3ku7wN/AFZ1GRsakSS1wAAAAASUVORK5CYII=" alt=""></div>
                            <div class="more-item-text">Lượt gọi khám:<strong class="more-item-text-num">
                                    <!-- -->{{$show_detail_doctor->book_doctor}}
                                </strong></div>
                        </div>
                        <div class="more-item">
                            <div class="more-item-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGXSURBVHgB7VJNTsJAFP6mEEOCi3oDvEG9ASwEXYEnEFakOzwBcAJhQ9NoAjcAVvwtqDfgBvQGdmNCMJ1xZlpROg0l0WW/pOm8N9/7m+8BKVL8FeRs5uqlDdBWaI1w23w6Jyy+wGrQAiU6KE90b7oyOaOdIw6jXVTMDmZWAVlWAyMeyuYoucDKfgbDd6cuPi5ukN+v+dmIMF34tISMJu4KYbZedDJNKfCTHDIwv6vxvw4VHjTNOCQPYutRkloAxDkyfd4pRV+hMToFpV7E60ZpWSXQ9xt87DHPwDUgfa6Bw70OFpYOolUP/juzJ/kLqxv6PfisobSLOMysIh9fR6U5kfZ4qCO3M5AJn0NMFRQOsLTqii+E+kRiY4RwhFSDDl8fcbnfBmJqQ/mJ89LeYmHXJIehKH1zu5U8wdJ+hxDVp9dSRIIxTkFsUi63wSdvQqDcvDo9gUhO2VTuP0EbSchk2ig1uNhkg5ht02KDCNtgPRRkA4lgRakR89/ibtUtIphIwYJgB7/3PB4uHvgE84HHG3OQIsW/4wup3pCXi/IOPgAAAABJRU5ErkJggg==" alt=""></div>
                            <div class="more-item-text">Lượt tư vấn:<strong class="more-item-text-num"> 2</strong>
                            </div>
                        </div>
                        <div class="more-item">
                            <div class="more-item-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFgSURBVHgB7ZNNTsJAGIbfmZJu3NQb1BvICcSYgMRF6wmkiZE0Lown0BvoxjS4gRuAK0Jd0CN4A/UEdmNCLJ1xQKstMO2AJmx4Vl+/n3nT7wfY8K/49xd4bN0sU0KUM/ueCY0+T21NM3Fw+qpSRqEK4faPPY4c1TJ1AVqyfsW0PdUytRal25Pwrm/j2AmLSucFfK8xn0UtcNgZH0cPhD1kfTRErdmTCwxatvB08SeYg6rbSb6yM9D1QGgGWBkeIEaQ9iyewcC7Fm25wjIwXOKweTvrlg95MlhKhyLDRB4cL2CiLXU3WBTO3yKVmUTjMo7On2Th/DsgzEARWqmSFy44NO0ERVBi5YXlLRq2DUQfbzPpHfCYiAVIC4fi6HZkRyf/g2hkZx6J2T6qZw5qbkPYznS4XxjYGtmyZ+QCjH/3f7LbrJzZkro4JCYEk5thZBcr4d8VF/a9Crrt4mXYsDY+AXg+Y465F/8mAAAAAElFTkSuQmCC" alt=""></div>
                            <div class="more-item-text">Đánh giá:<strong class="more-item-text-num">
                                    <!-- -->{{$show_detail_doctor->star_doctor}}
                                    <!-- -->(6 đánh giá)
                                </strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctor-selecttime-container">
            <div class="container-time-booking container-time-booking-online">
                <div class="group-time-picker">
                    <div class="head-time-picker">
                        <div class="label-time-picker">Lịch tư vấn trực tuyến </div>
<!-- 
                        <div class="date-picker">
                            <div class="input">
                                <div class="result">Select Date: <span></span></div>
                                <button><i class="fa fa-calendar"></i></button>
                            </div>
                            <div class="calendar"></div>
                        </div> -->
                        <!-- <script>
                            $(function() {
                                $(".calendar").datepicker({
                                    dateFormat: 'dd/mm/yy',
                                    firstDay: 1
                                });

                                $(document).on('click', '.date-picker .input', function(e) {
                                    var $me = $(this),
                                        $parent = $me.parents('.date-picker');
                                    $parent.toggleClass('open');
                                });


                                $(".calendar").on("change", function() {
                                    var $me = $(this),
                                        $selected = $me.val(),
                                        $parent = $me.parents('.date-picker');
                                    $parent.find('.result').children('span').html($selected);
                                });
                            });
                        </script> -->
                        <form action="/booking-doctor/{{$show_detail_doctor->doctor_id}}" method="get">
                        <!-- <div class="content-date-time">
                                <div class="ant-picker datepicker-booking">
                                    <div class="ant-picker-input"><input readonly="" placeholder="Chọn thời điểm"
                                            title="24/10/2022" size="12" autocomplete="off" value="24/10/2022"><span
                                            class="ant-picker-suffix"><span role="img" aria-label="caret-down"
                                                class="anticon anticon-caret-down"><svg viewBox="0 0 1024 1024"
                                                    focusable="false" data-icon="caret-down" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                    </path>
                                                </svg></span></span></div>
                                </div>
                            </div> -->
                    </div>
          

                    <!-- <div class="time-picker">
                        <div class="list-time">
                            <div class="button-select-date-time active" >
                                <p class="item-label">08:30</p>
                            </div>
                            <div class="button-select-date-time " >
                                <p class="item-label">08:45</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">09:00</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">09:15</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">09:30</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">09:45</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">10:00</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">10:15</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">10:30</p>
                            </div>
                            <div class="button-select-date-time ">
                                <p class="item-label">10:45</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                    
                    <div class="radio">
                        <label>
                            <input type="radio" name="time" id="input" value=" Sáng" checked="checked">
                            Đặt hẹn sáng
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="time" id="input" value="Chiều" checked="checked">
                            Đặt hẹn chiều
                        </label>
                    </div>
                    
                <div class="container-button">
                    <button type="submit" class="button-booking">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAE7SURBVHgB7VTRccIwDJU5BsgI2aB0g4zABmQDGIFOQDdIOkFHACagnSBhArqB+gQvjeu6jculd/3g3b1TYktPsk62yA0DcKmOqprBzPnbOud2MhYgvtGvaMDZUKyLiBUwBX9rcAmuwBfwCXzj/oLf9zhNK4mVVhpHwxb5viX3qlTxLuAAzu0kFDasvok5mU9qgi3FZpGkjxH/rCvoJ92J932k9VtxR7uAUB7ELmn3kgK2pMOzdyIN1iu2RmkzTyPXy8SVsQQHvQ4Vi9sG64XpTiluF8h6X8tlFFNhE1SShh34yvblHwmk7/v+NzcUhbUUqq0wiw3bM5VxsIb4MbYxkT/GWAnWkTGOJog6JaAEG5sk6e9OD87vSa9DwzGtg/Xz0+78JDAb+XyTh9CCD91rSo3zy4u1Wm74F3gHEJOvmn0/JnsAAAAASUVORK5CYII=" alt="">
                          <span class="button-text">Đặt lịch
                             <span class="button-text-small"></span>
                            </span>
                        </button></div>          
            </form>
            </div>
        </div>
        <div class="container-doctor-exp">
            <h4 class="doctor-exp-title">Kinh nghiệm khám chữa bệnh</h4>
            <pre class="doctor-exp-text text-content">Thế mạnh chuyên môn:
    - Chỉnh hình cột sống.
    - Mổ ít xâm lấn cột sống.
    - Mổ thay đĩa đệm nhân tạo, mổ cột sống đường trước.
    - Mổ cột sống cổ cao.
    - Ung thư di căn cột sống, u nguyên phát cột sống, tủy sống.</pre>
            <div>
                <h4 class="doctor-exp-title">Quá trình công tác</h4>
                <ul class="timeline">
                    <li><span class="font-weight-bold">(
                            <!-- -->1996
                            <!-- --> -
                            <!-- -->2002
                            <!-- -->)
                        </span><span>
                            <!-- -->Học bác sĩ đa khoa
                            <!-- -->,
                        </span><span>Đại học Y Hà Nội</span></li>
                    <li><span class="font-weight-bold">(
                            <!-- -->2003
                            <!-- --> -
                            <!-- -->2006
                            <!-- -->)
                        </span><span>
                            <!-- -->Bác sĩ nội trú - Bệnh viện HN Việt Đức
                            <!-- -->,
                        </span><span>Đại học Y Hà Nội</span></li>
                    <li><span class="font-weight-bold">(
                            <!-- -->2007
                            <!-- --> -
                            <!-- -->2008
                            <!-- -->)
                        </span><span>
                            <!-- -->Bác sĩ khoa CTCH
                            <!-- -->,
                        </span><span>Bệnh viện HN Việt Đức</span></li>
                    <li><span class="font-weight-bold">(
                            <!-- -->2008
                            <!-- --> -
                            <!-- -->2016
                            <!-- -->)
                        </span><span>
                            <!-- -->Phẫu thuật cột sống
                            <!-- -->,
                        </span><span>Bệnh viện HN Việt Đức</span></li>
                    <li><span class="font-weight-bold">(
                            <!-- -->2010
                            <!-- --> -
                            <!-- -->2015
                            <!-- -->)
                        </span><span>
                            <!-- -->Nghiên cứu sinh chuyên ngành Chấn thương chỉnh hình
                            <!-- -->,
                        </span><span>Đại học Y Hà Nội</span></li>
                    <li><span class="font-weight-bold">(
                            <!-- -->2016
                            <!-- --> -
                            <!-- -->2021
                            <!-- -->)
                        </span><span>
                            <!-- -->Phó trưởng khoa Phẫu thuật cột sống
                            <!-- -->,
                        </span><span>Bệnh viện HN Việt Đức</span></li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="front/scripts.js"></script>
@endsection