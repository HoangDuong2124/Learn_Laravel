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
                            <div class="price-detail"><span class="price-number">{{$show_detail_doctor->price_book}}VNĐ</span></div>
                        </div>
                        <div class="special-items">
                            <div class="special-item">{{$show_detail_doctor->specialist_doctor}}</div>
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
            {!! $show_detail_doctor->description_doctor !!}
        </div>
        @endforeach
    </div>
</div>
</div>


@endsection
