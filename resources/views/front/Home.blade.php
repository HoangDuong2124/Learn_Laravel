@extends('user_layout')
@section('title', 'Home')
@section('main_content')
    <section class="u-clearfix u-image u-section-1" id="carousel_3112">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-32 u-layout-cell-1"
                            src="">
                            <div class="u-container-layout u-valign-bottom">
                                <img class="u-image u-image-contain u-image-1"
                                    src="front/img/6158b984e0fd04ce18f390ab2b6eab25.png"
                                    data-animation-name="customAnimationIn" data-animation-duration="2000" alt="">
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-expand-resize u-layout-cell u-right-cell u-size-28 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <h1 class="u-text u-text-body-alt-color u-text-1">We're Always <br>Ready To Help
                                </h1>
                                <p class="u-text u-text-body-alt-color u-text-2">The Clinic provides diagnosis and
                                    management of pain in the head, face, mouth and teeth</p>
                                <button id="btn-open"
                                    class="u-border-none u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-1">Book
                                    An Appointment</button>
                            </div>
                            <!--MODAL-->
                            <div id="modal-container" class="">
                                <div id="modal" class="modal-demo">
                                    <div id="closee">
                                        <button id="btn-closee"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                    <div class="modal-headerr">
                                        <p>Đặt lịch khám nhanh</p>
                                        <span>Vui lòng để lại thông tin, chúng tôi sẽ liên hệ với bạn để tư vấn.</span>
                                    </div>
                                    <div class="modal-bodyy">
                                        <form action="/send-book" method="post" role="form" class="needs-validation">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="book_name" class="form-label">Name<span
                                                        style="color:green;">*</span></label>
                                                <input type="text" class="book-name" id="book_name" name="book_name"
                                                    placeholder="Ex:Nguyen Van A" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phonenumber" class="form-label">Phone Number<span
                                                        style="color:green;">*</span></label>
                                                <input type="text" class="phonenumber" name="phonenumber"
                                                    id="phonenumber" placeholder="Ex:0912345678" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email_address" class="form-label">Email Address<span
                                                        style="color:green;">*</span></label>
                                                <input type="email" class="email_address" id="email_address"
                                                    name="email_address" placeholder="Ex:abc@gmail.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="text_area" class="form-label">Examination needs</label>
                                                <textarea class="form-control" name="text_area" id="text_area" rows="3"
                                                    placeholder="Nhập nhu cầu khám chữa bệnh của bạn, ví dụ: Khu vực cần tìm phòng khám. Chi phí có thể đáp ứng;...."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-secondary"><i
                                                    class="fa-solid fa-paper-plane"></i> Send Require</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--END_MODAL-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-left u-clearfix u-palette-4-base u-section-2" id="carousel_e168">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1"> Why Choose Us</h5>
            <h2 class="u-text u-text-2"> We Have Patients Being Monitored by Doctors!</h2>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <h3 class="u-text u-text-default u-text-3"> How it work?</h3>
                                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="720"
                                    data-image-height="1080" data-animation-name="customAnimationIn"
                                    data-animation-duration="2000"></div>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-32 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <ul
                                    class="u-custom-font u-custom-list u-heading-font u-spacing-14 u-text u-text-default u-text-4">
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-1">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065">
                                                <path
                                                    d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div> Fitness Guidance to Patient
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-2">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065">
                                                <path
                                                    d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>Building a healthy environment.
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-3">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065">
                                                <path
                                                    d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>Diabetes &amp; blood pressor check up.
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-4">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065">
                                                <path
                                                    d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>Handle patient body in MRI.
                                    </li>
                                    <li>
                                        <div class="u-list-icon u-text-palette-3-base u-list-icon-5">
                                            <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-4065">
                                                <path
                                                    d="m506.88 244.288-137.856-128c-2.944-2.752-6.848-4.288-10.88-4.288h-342.144c-8.832 0-16 7.168-16 16v256c0 8.832 7.168 16 16 16h342.144c4.032 0 7.936-1.536 10.88-4.288l137.856-128c3.264-3.008 5.12-7.264 5.12-11.712s-1.856-8.704-5.12-11.712z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>Excellence in Healthcare every.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_aa3d">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <h5 class="u-text u-text-default u-text-1"> Departments</h5>
            <h2 class="u-text u-text-default u-text-palette-4-base u-text-2"> Dentists are Specialists</h2>
            <p class="u-heading-font u-text u-text-default u-text-3"> We have gathered only qualified specialists with
                extensive rience you for free you with any problem!</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1"><span
                                class="u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-1"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/1828743.png" alt=""></span>
                            <h5 class="u-text u-text-4"> Large network of clinics</h5>
                            <p class="u-heading-font u-text u-text-5">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2"><span
                                class="u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-2"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/1828743.png" alt=""></span>
                            <h5 class="u-text u-text-6"> Professional dentists</h5>
                            <p class="u-heading-font u-text u-text-7">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-3">
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span
                                class="u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-3"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/1828743.png" alt=""></span>
                            <h5 class="u-text u-text-8"> Durable materials</h5>
                            <p class="u-heading-font u-text u-text-9">Sample text. Click to select the Text Element.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="carousel_96ea">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-text u-text-default u-text-1"> Faq</h4>
            <h2 class="u-text u-text-default u-text-palette-4-base u-text-2"> Frequently Asked Questions</h2>
            <div class="u-accordion u-faq u-accordion-1">
                <div class="u-accordion-item">
                    <a class="active u-accordion-link u-button-style u-custom-font u-heading-font u-text-active-palette-4-base u-text-body-color u-accordion-link-1"
                        id="link-" aria-controls="" aria-selected="true">
                        <span class="u-accordion-link-text"> 01. You need a medical services?</span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-accordion-pane-1"
                        aria-labelledby="link-">
                        <div class="u-container-layout u-container-layout-1">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Online medical consultation is currently a trend that many people choose. With just a
                                    smartphone, laptop or PC with an internet connection, you can do a lot of things, from
                                    working remotely, chatting or even booking an online medical consultation at home. The
                                    application of technology in medicine has been growing rapidly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-custom-font u-heading-font u-text-active-palette-4-base u-text-body-color u-accordion-link-2"
                        id="link-" aria-controls="" aria-selected="false">
                        <span class="u-accordion-link-text"> 02. Medical services a scam?</span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-2" id=""
                        aria-labelledby="link-">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit
                                    ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et
                                    ultricies sapien. Quisque fringilla sit amet
                                    dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie
                                    ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-custom-font u-heading-font u-text-active-palette-4-base u-text-body-color u-accordion-link-3"
                        id="link-" aria-controls="" aria-selected="false">
                        <span class="u-accordion-link-text"> 03. Out of your medical services?</span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-accordion-pane-3" aria-labelledby="link-">
                        <div class="u-container-layout u-container-layout-3">
                            <div class="u-clearfix u-rich-text u-text">
                                <p>Answer. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit
                                    ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, et
                                    ultricies sapien. Quisque fringilla sit amet
                                    dolor commodo efficitur. Aliquam et sem odio. In ullamcorper nisi nunc, et molestie
                                    ipsum iaculis sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="u-image u-image-default u-image-1" src="front/img/pexels-karolina-grabowska-4386504.jpg"
                alt="" data-image-width="1280" data-image-height="853" data-animation-name="customAnimationIn"
                data-animation-duration="2000">
        </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_b39d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-expanded-width u-image u-image-default u-image-1"
                                src="front/img/pexels-chokniti-khongchum-2280571.jpg" alt=""
                                data-image-width="1619" data-image-height="1080"><span
                                class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-1"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/883407.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-1">
                                <div class="u-container-layout u-valign-bottom u-container-layout-2">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-1"> Laboratory Analysis</h5>
                                    <p class="u-text u-text-2">Sample text. Click to select the Text Element.</p>
                                    <a href="#"
                                        class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-1"
                                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                        data-animation-direction="">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img class="u-expanded-width u-image u-image-default u-image-2"
                                src="front/img/2378359_medium2000.jpg" alt="" data-image-width="150"
                                data-image-height="100"><span
                                class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-2"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/31792.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-2">
                                <div class="u-container-layout u-valign-bottom u-container-layout-4">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3"> Heart of
                                        Surgery</h5>
                                    <p class="u-text u-text-4">Sample text. Click to select the Text Element.</p>
                                    <a href="#"
                                        class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-2"
                                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                        data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                            <img class="u-expanded-width u-image u-image-default u-image-3"
                                src="front/img/1773337_medium2000.jpg" alt="" data-image-width="1348"
                                data-image-height="1000"><span
                                class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-3"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/2966334.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-3">
                                <div class="u-container-layout u-valign-bottom u-container-layout-6">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-5"> Pediatric
                                        Clinic</h5>
                                    <p class="u-text u-text-6">Sample text. Click to select the Text Element.</p>
                                    <a href="#"
                                        class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-3"
                                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                        data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-7">
                            <img class="u-expanded-width u-image u-image-default u-image-4"
                                src="front/img/2062048_medium2000.jpg" alt="" data-image-width="150"
                                data-image-height="90"><span
                                class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-4"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/1719695.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-4">
                                <div class="u-container-layout u-valign-bottom u-container-layout-8">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7"> Neurology
                                        Clinic</h5>
                                    <p class="u-text u-text-8">Sample text. Click to select the Text Element.</p>
                                    <a href="#"
                                        class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-4"
                                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                        data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-9">
                            <img class="u-expanded-width u-image u-image-default u-image-5"
                                src="front/img/2302047_medium2000.jpg" alt="" data-image-width="150"
                                data-image-height="102"><span
                                class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-5"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/3700547.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-5">
                                <div class="u-container-layout u-valign-bottom u-container-layout-10">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-9"> Pathology
                                        Clinic</h5>
                                    <p class="u-text u-text-10">Sample text. Click to select the Text Element.</p>
                                    <a href="#"
                                        class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-5"
                                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                        data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-11">
                            <img class="u-expanded-width u-image u-image-default u-image-6"
                                src="front/img/931111_medium2000.jpg" alt="" data-image-width="150"
                                data-image-height="85"><span
                                class="u-file-icon u-icon u-icon-rounded u-radius-20 u-text-palette-1-base u-white u-icon-6"
                                data-animation-name="customAnimationIn" data-animation-duration="2000"><img
                                    src="front/img/991921.png" alt=""></span>
                            <div class="u-container-style u-expanded-width u-group u-white u-group-6">
                                <div class="u-container-layout u-valign-bottom u-container-layout-12">
                                    <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-11"> Tablet
                                        Paralysis</h5>
                                    <p class="u-text u-text-12">Sample text. Click to select the Text Element.</p>
                                    <a href="#"
                                        class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-6"
                                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                        data-animation-direction=""> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-4-base u-section-6" id="carousel_7c33">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-default u-text-1"> Working Process</h5>
            <h2 class="u-text u-text-default u-text-2"> How We Work?</h2>
            <p class="u-text u-text-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <div class="u-image u-image-circle u-image-1" alt="" data-image-width="720"
                                data-image-height="1080" data-animation-name="customAnimationIn"
                                data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-4"> Appointment</h5>
                            <p class="u-text u-text-default u-text-5">Book an appointment to connect with doctors and
                                medical facilities quickly.</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                            <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1667"
                                data-image-height="1000" data-animation-name="customAnimationIn"
                                data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-6"> Expert Doctor</h5>
                            <p class="u-text u-text-default u-text-7">Find out and choose qualified doctors.</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                            <div class="u-image u-image-circle u-image-3" alt="" data-image-width="1500"
                                data-image-height="1000" data-animation-name="customAnimationIn"
                                data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-8"> Consultation</h5>
                            <p class="u-text u-text-default u-text-9">Let's talk about health together.</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <div class="u-image u-image-circle u-image-4" alt="" data-image-width="1348"
                                data-image-height="1000" data-animation-name="customAnimationIn"
                                data-animation-duration="2000"></div>
                            <h5 class="u-text u-text-default u-text-10"> Enjoy Life</h5>
                            <p class="u-text u-text-default u-text-11">Enjoy life the best you can.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_f0f9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1"><span
                                    class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-1"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-279e"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-279e"
                                        style="enable-background:new 0 0 60 60;">
                                        <g>
                                            <path d="M57,4h-7V1c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v3H19V1c0-0.553-0.447-1-1-1h-7c-0.553,0-1,0.447-1,1v3H3
      C2.447,4,2,4.447,2,5v11v43c0,0.553,0.447,1,1,1h54c0.553,0,1-0.447,1-1V16V5C58,4.447,57.553,4,57,4z M43,2h5v3v3h-5V5V2z M12,2h5
      v3v3h-5V5V2z M4,6h6v3c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V6h22v3c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V6h6v9H4V6z
      M4,58V17h52v41H4z"></path>
                                            <path d="M38,23h-7h-2h-7h-2h-9v9v2v7v2v9h9h2h7h2h7h2h9v-9v-2v-7v-2v-9h-9H38z M31,25h7v7h-7V25z M38,41h-7v-7h7V41z M22,34h7v7h-7
      V34z M22,25h7v7h-7V25z M13,25h7v7h-7V25z M13,34h7v7h-7V34z M20,50h-7v-7h7V50z M29,50h-7v-7h7V50z M38,50h-7v-7h7V50z M47,50h-7
      v-7h7V50z M47,41h-7v-7h7V41z M47,25v7h-7v-7H47z"></path>
                                        </g>
                                    </svg></span>
                                <h4 class="u-text u-text-1">Booking Now</h4>
                                <a href="/search-hospital"
                                    class="u-active-none u-border-2 u-border-active-black u-border-black u-border-hover-black u-btn u-button-style u-hover-none u-none u-text-black u-text-hover-black u-btn-1"
                                    data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                    data-animation-direction="">booking now</a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-15 u-image-1" data-image-width="150"
                            data-image-height="100">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                        <div
                            class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-15 u-layout-cell-3">
                            <div class="u-container-layout u-valign-middle u-container-layout-3"><span
                                    class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-2"><svg
                                        class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                        viewBox="0 0 52.966 52.966" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-48d8"></use>
                                    </svg><svg class="u-svg-content" viewBox="0 0 52.966 52.966" x="0px" y="0px"
                                        id="svg-48d8" style="enable-background:new 0 0 52.966 52.966;">
                                        <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
     c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
     C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
     S32.459,40,21.983,40z"></path>
                                    </svg></span>
                                <h4 class="u-text u-text-2"> Find The Best Doctors</h4>
                                <a href="/search-doctor"
                                    class="u-active-none u-border-2 u-border-active-black u-border-black u-border-hover-black u-btn u-button-style u-hover-none u-none u-text-black u-text-hover-black u-btn-2">booking
                                    now</a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-15 u-image-2" data-image-width="150"
                            data-image-height="111">
                            <div class="u-container-layout u-container-layout-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-8" id="carousel_f41d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="984"
                                    data-image-height="648" data-animation-name="customAnimationIn"
                                    data-animation-duration="2000"></div>
                                <h2 class="u-text u-text-palette-4-base u-text-1"> A full-term pregnancy has three
                                    trimesters and lasts around 40 weeks</h2>
                                <p class="u-text u-text-2">Etiam erat velit scelerisque in dictum non consectetur. Nisl
                                    purus in mollis nunc sed id semper. Cras fermentum odio eu feugiat pretium nibh ipsum.
                                </p>
                                <a href="https://nicepage.com/k/competition-website-templates"
                                    class="u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-text-body-alt-color u-btn-1"
                                    data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                    data-animation-direction="">read more</a>
                                <p class="u-text u-text-3">front/img from <a href="https://www.freepik.com/photos/people"
                                        class="u-active-none u-border-1 u-border-grey-75 u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-2"
                                        target="_blank">Freepik</a>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <div class="u-accordion u-expanded-width u-spacing-2 u-accordion-1">
                                    <div class="u-accordion-item u-accordion-item-1">
                                        <a class="active u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-1"
                                            id="link-accordion-7c0e" aria-controls="accordion-7c0e" aria-selected="true">
                                            <span class="u-accordion-link-text"> When do pregnancy cravings
                                                start?</span><span
                                                class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-1"><svg
                                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                    viewBox="0 0 426.66667 426.66667" style="">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#svg-347e"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667"
                                                    id="svg-347e">
                                                    <path
                                                        d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0">
                                                    </path>
                                                </svg></span>
                                        </a>
                                        <div class="u-accordion-active u-accordion-pane u-align-left u-container-style u-palette-4-light-2 u-accordion-pane-1"
                                            id="accordion-7c0e" aria-labelledby="link-accordion-7c0e">
                                            <div class="u-container-layout u-valign-top u-container-layout-3">
                                                <p class="u-text u-text-4">Interdum velit euismod in pellentesque massa
                                                    placerat duis. Tristique et egestas quis ipsum suspendisse ultrices
                                                    gravida dictum fusce. Nibh nisl condimentum.</p>
                                                <ul class="u-custom-list u-text u-text-5">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Mattis nunc sed blandit libero volutpat.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tortor at risus viverra adipiscing at in tellus.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Purus ut faucibus pulvinar elementum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Blandit turpis cursus in hac habitasse.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-accordion-item u-accordion-item-2">
                                        <a class="u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-2"
                                            id="link-accordion-05cb" aria-controls="accordion-05cb"
                                            aria-selected="false">
                                            <span class="u-accordion-link-text"> How should I sleep in
                                                pregnancy?</span><span
                                                class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-2"><svg
                                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                    viewBox="0 0 426.66667 426.66667" style="">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#svg-ae03"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667"
                                                    id="svg-ae03">
                                                    <path
                                                        d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0">
                                                    </path>
                                                </svg></span>
                                        </a>
                                        <div class="u-accordion-pane u-container-style u-palette-4-light-2 u-accordion-pane-2"
                                            id="accordion-05cb" aria-labelledby="link-accordion-05cb">
                                            <div class="u-container-layout u-valign-top u-container-layout-4">
                                                <ul class="u-custom-list u-text u-text-6">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Interdum velit euismod in pellentesque massa.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tristique et egestas quis ipsum suspendisse ultrices gravidae.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Nibh nisl condimentum id venenatis a condimentum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Diam volutpat commodo sed egestas egestas fringilla.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-accordion-item u-accordion-item-3">
                                        <a class="u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-3"
                                            id="link-accordion-a6bb" aria-controls="accordion-a6bb"
                                            aria-selected="false">
                                            <span class="u-accordion-link-text"> What is a birth plan?</span><span
                                                class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-3"><svg
                                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                    viewBox="0 0 426.66667 426.66667" style="">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#svg-a4a8"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667"
                                                    id="svg-a4a8">
                                                    <path
                                                        d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0">
                                                    </path>
                                                </svg></span>
                                        </a>
                                        <div class="u-accordion-pane u-container-style u-palette-4-light-2 u-accordion-pane-3"
                                            id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
                                            <div class="u-container-layout u-valign-top u-container-layout-5">
                                                <ul class="u-custom-list u-text u-text-7">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Mattis nunc sed blandit libero volutpat.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tortor at risus viverra adipiscing at in tellus.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Purus ut faucibus pulvinar elementum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Blandit turpis cursus in hac habitasse.e.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-accordion-item u-accordion-item-4">
                                        <a class="u-accordion-link u-button-style u-text-palette-4-base u-accordion-link-4"
                                            id="link-accordion-a6bb" aria-controls="accordion-a6bb"
                                            aria-selected="false">
                                            <span class="u-accordion-link-text"> Should I have the flu vaccine?</span><span
                                                class="u-accordion-link-icon u-active-palette-4-light-1 u-hover-palette-4-light-1 u-icon u-icon-circle u-palette-4-base u-text-active-white u-text-hover-white u-text-white u-icon-4"><svg
                                                    class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                    viewBox="0 0 426.66667 426.66667" style="">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#svg-f384"></use>
                                                </svg><svg class="u-svg-content" viewBox="0 0 426.66667 426.66667"
                                                    id="svg-f384">
                                                    <path
                                                        d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0">
                                                    </path>
                                                </svg></span>
                                        </a>
                                        <div class="u-accordion-pane u-container-style u-palette-4-light-2 u-accordion-pane-4"
                                            id="accordion-a6bb" aria-labelledby="link-accordion-a6bb">
                                            <div class="u-container-layout u-valign-top u-container-layout-6">
                                                <ul class="u-custom-list u-text u-text-8">
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Mattis nunc sed blandit libero volutpat.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Tortor at risus viverra adipiscing at in tellus.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Purus ut faucibus pulvinar elementum.
                                                    </li>
                                                    <li>
                                                        <div class="u-list-icon">
                                                            <div xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                                xml:space="preserve" class="u-svg-content">–</div>
                                                        </div>Blandit turpis cursus in hac habitasse.e.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-9" id="carousel_aca8" data-image-width="1619" data-image-height="1080">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-align-center u-container-style u-group u-white u-group-1"
                data-animation-name="customAnimationIn" data-animation-duration="2000">
                <div
                    class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-xl u-container-layout-1">
                    <h3 class="u-text u-text-palette-4-base u-text-1">Contacts</h3>
                    <h2 class="u-text u-text-2">monday — friday<br><b>8.00 </b>am —&nbsp;<b>8.00 </b>pm<br>call us <b>(111)
                            252 3366</b>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-10" src="" data-image-width="256"
        data-image-height="256" id="sec-923e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-text u-text-default u-title u-text-1">INTUITIVE</h1>
            <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Sample text. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
            <a href="#" class="u-btn u-button-style u-palette-2-base u-btn-1">Read More</a>
        </div>
    </section>
    @if (session('success'))
    <div id="notification-container">
        <div id="notification">{{session('success')}}</div>
    </div>

    <script>
        const notification = document.getElementById('notification');
    setTimeout(() => {
        notification.classList.add('hide');
        setTimeout(() => {
            notification.remove();
        }, 500); // Adjust the duration to match the CSS transition time
    }, 3000); // Adjust the time the notification stays visible
    </script>
    @endif
@endsection
