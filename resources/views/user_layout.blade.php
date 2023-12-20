<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('front/css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('front/css/Home.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('front/css/Modal.css')}}">
     <link rel="stylesheet" href="{{asset('front/css/Search.css')}}">
    <script class="u-script" type="text/javascript" src="{{asset('front/js/jquery.js')}}" "=" " defer=" "></script>
    <script class="u-script " type="text/javascript " src="{{asset('front/js/nicepage.js')}} " "="" defer=""></script>
    <script src="{{asset('front/js/bootstrap.js')}}"></script>
<script src="{{asset('front/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('front/js/scripts.js')}}"></script>
<script src="{{asset('front/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('front/js/jquery.nicescroll.js')}}"></script>

<script src="{{asset('front/js/jquery.scrollTo.js')}}"></script>
    <meta name="generator" content="Nicepage 4.15.11, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&display=swap">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" rel="stylesheet">
    <script>
        jQuery(document).ready(function($) {

            var TopFixMenu = $("#u-nav-container-scroll");

            $(window).scroll(function() {

                if ($(this).scrollTop() > 200) {

                    TopFixMenu.show();
                } else {
                    TopFixMenu.hide();
                }
            })
        })
    </script>
     <!--SCRIPT MODAL-->
     <script>
    jQuery(document).ready(function($){
        var $btn_open= $('#btn-open'),
            $btn_closee=$('#btn-closee'),
            $modal_container=$('#modal-container') ;
        $btn_open.on('click',function(){
             $modal_container.addClass('show');
        });
        $btn_closee.on('click',function(){
             $modal_container.removeClass('show');
        });
        $('#modal-container').on('click', function(event) {
                if ($(event.target).is($modal_container) ) {
                    $modal_container.removeClass('show');
                }
            });
    });
  </script>
    <!--END SCRIPT-->
  <script>
    jQuery(document).ready(function($){
        var $btn_open= $('#btn-open'),
            $btn_closee=$('#btn-closee'),
            $modal_container=$('#modal-container') ;
        $btn_open.on('click',function(){
             $modal_container.addClass('show');
        });
        $btn_closee.on('click',function(){
             $modal_container.removeClass('show');
        });
        $('#modal-container').on('click', function(event) {
                if ($(event.target).is($modal_container) ) {
                    $modal_container.removeClass('show');
                }
            });
    });
  </script>
<!-- SCRIPT DROPDOWN USER -->
<script>
    jQuery(document).ready(function(){
        var $wrap_user_login= $('.wrap-user-login'),
            $dropdown_user=$('.dropdown-menu-user') ;
        $wrap_user_login.on('click',function(){
             $dropdown_user.toggleClass('show');
        });

    });
  </script>
  <!-- SCRIPT DROPDOWN USER END -->
<script>
        jQuery(document).ready(function($) {
            var $form_modal = $('.cd-user-modal'),
                $form_login = $form_modal.find('#cd-login'),
                $form_signup = $form_modal.find('#cd-signup'),
                $form_forgot_password = $form_modal.find('#cd-reset-password'),
                $form_modal_tab = $('.cd-switcher'),
                $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
                $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
                $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
                $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
                $wrap_user = $('.wrap-user');
            //open modalwrap_user
            $wrap_user.on('click', function(event) {
                if ($(event.target).is($wrap_user)) {
                    // on mobile open the submenu
                    $(this).children('a').toggleClass('is-visible');
                } else {
                    // on mobile close submenu
                    $wrap_user.children('a').removeClass('is-visible');
                    //show modal layer
                    $form_modal.addClass('is-visible');
                    //show the selected form
                    ($(event.target).is('.cd-signup')) ? signup_selected(): login_selected();
                }
            });
            //close modal
            $('.cd-user-modal').on('click', function(event) {
                if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
                    $form_modal.removeClass('is-visible');
                }
            });
            //close modal when clicking the esc keyboard button
            $(document).keyup(function(event) {
                if (event.which == '27') {
                    $form_modal.removeClass('is-visible');
                }
            });
            //switch from a tab to another
            $form_modal_tab.on('click', function(event) {
                event.preventDefault();
                ($(event.target).is($tab_login)) ? login_selected(): signup_selected();
            });
            //hide or show password
            $('.hide-password').on('click', function() {
                var $this = $(this),
                    $password_field = $this.prev('input');
                ('password' == $password_field.attr('type')) ? $password_field.attr('type', 'text'): $password_field.attr('type', 'password');
                ('Hide' == $this.text()) ? $this.text('Show'): $this.text('Hide');
                //focus and move cursor to the end of input field
                $password_field.putCursorAtEnd();
            });
            //show forgot-password form
            $forgot_password_link.on('click', function(event) {
                event.preventDefault();
                forgot_password_selected();
            });
            //back to login from the forgot-password form
            $back_to_login_link.on('click', function(event) {
                event.preventDefault();
                login_selected();
            });

            function login_selected() {
                $form_login.addClass('is-selected');
                $form_signup.removeClass('is-selected');
                $form_forgot_password.removeClass('is-selected');
                $tab_login.addClass('selected');
                $tab_signup.removeClass('selected');
            }

            function signup_selected() {
                $form_login.removeClass('is-selected');
                $form_signup.addClass('is-selected');
                $form_forgot_password.removeClass('is-selected');
                $tab_login.removeClass('selected');
                $tab_signup.addClass('selected');
            }

            function forgot_password_selected() {
                $form_login.removeClass('is-selected');
                $form_signup.removeClass('is-selected');
                $form_forgot_password.addClass('is-selected');
            }
            //Kiểm tra form hợp lệ
            // $form_login.find('input[type="submit"]').on('click', function(event) {
            //     event.preventDefault();
            //     if ($('#signin-email').val() == '') {
            //         $form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
            //     }
            // });
            //IE9 placeholder fallback
            //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
            if (!Modernizr.input.placeholder) {
                $('[placeholder]').focus(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                }).blur(function() {
                    var input = $(this);
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                }).blur();
                $('[placeholder]').parents('form').submit(function() {
                    $(this).find('[placeholder]').each(function() {
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                            input.val('');
                        }
                    })
                });
            }
        });
        //credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
        jQuery.fn.putCursorAtEnd = function() {
            return this.each(function() {
                // If this function exists...
                if (this.setSelectionRange) {
                    // ... then use it (Doesn't work in IE)
                    // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
                    var len = $(this).val().length * 2;
                    this.setSelectionRange(len, len);
                } else {
                    // ... otherwise replace the contents with itself
                    // (Doesn't work in Google Chrome)
                    $(this).val($(this).val());
                }
            });
        };
        jQuery('#cody-info ul li').eq(1).on('click', function() {
            $('#cody-info').hide();
        });
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "{{asset('front/img/default-logo.png"
        }
    </script>
    <!--Back to top -->
    <button id="myBtn" title="Back to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
                <script>
                    window.onscroll = function() {
                        scrollFunction()
                    };

                    function scrollFunction() {
                        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                            document.getElementById("myBtn").style.display = "block";
                        } else {
                            document.getElementById("myBtn").style.display = "none";
                        }
                    }
                    document.getElementById('myBtn').addEventListener("click", function() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    });
                </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
   <!--TOP Section Begin-->
   <div id="topp">
        <?php

use Illuminate\Support\Facades\Auth;

                 if(Auth::check()){
                    echo '
                    <div class="justify-content-user">
            <div class="wrap-link-test">
                <div class="hotline">
                    <span class="text-hotline">Hotline đặt khám: </span>
                    <span class="link-hotline">
                        <a style="text-decoration: none;" href="#">0912345678</a>
                    </span>
                </div>
                <div class="support">
                    <a style="text-decoration: none;" href="#">Trung tâm trợ giúp</a>
                </div>
            </div>
                    <div class="wrap-user-login">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="/dashboard/img/2.png">
                        <span class="username">
                      ';
                     echo   Auth::user()->name;
                   echo'
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu-user extended logout ">
                        <li><a href="#"><i style="margin-right:3px;color:blueviolet" class=" fa-solid fa-user"></i> Profile</a></li>
                        <li><a href="/history-user"><i style="margin-right:3px;color:blueviolet" class="fa-regular fa-calendar-days"></i> Booking History</a></li>
                        <li><a href="#"><i style="margin-right:3px;color:#8b8e9e;" class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="/logout-user"><i style="margin-right:3px;color:#8b8e9e" class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                    </div>
                    ';
                 }
                 else{
                    echo '
                    <div class="justify-content">
                    <div class="wrap-link-test">
                        <div class="hotline">
                            <span class="text-hotline">Hotline đặt khám: </span>
                            <span class="link-hotline">
                                <a style="text-decoration: none;" href="#">0912345678</a>
                            </span>
                        </div>
                        <div class="support">
                            <a style="text-decoration: none;" href="#">Trung tâm trợ giúp</a>
                        </div>
                    </div>
                    <div class="wrap-user">
                    <div class="cd-signup">
                        <a style="text-decoration: none; cursor:pointer" >Đăng kí</a>
                    </div>
                    <div class="space"></div>
                    <div class="cd-signin">
                        <a style="text-decoration: none;cursor:pointer" >Đăng nhập</a>
                    </div>
                </div>
                    ';

                 }
        ?>


{{-- @if(Auth::check())
    <div class="justify-content-user">
<div class="wrap-link-test">
<div class="hotline">
    <span class="text-hotline">Hotline đặt khám: </span>
    <span class="link-hotline">
        <a style="text-decoration: none;" href="#">0912345678</a>
    </span>
</div>
<div class="support">
    <a style="text-decoration: none;" href="#">Trung tâm trợ giúp</a>
</div>
</div>
    <div class="wrap-user-login">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <img alt="" src="/dashboard/img/2.png">
        <span class="username">

        {{Auth::user()->name}}

        </span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu-user extended logout ">
        <li><a href="#"><i style="margin-right:3px;color:blueviolet" class=" fa-solid fa-user"></i> Profile</a></li>
        <li><a href="/history-user"><i style="margin-right:3px;color:blueviolet" class="fa-regular fa-calendar-days"></i> Booking History</a></li>
        <li><a href="#"><i style="margin-right:3px;color:#8b8e9e;" class="fa fa-cog"></i>  Settings</a></li>
        <li><a href="/logout-user"><i style="margin-right:3px;color:#8b8e9e" class="fa fa-key"></i> Log Out</a></li>
    </ul>
    </div>
 @else
    <div class="justify-content">
    <div class="wrap-link-test">
        <div class="hotline">
            <span class="text-hotline">Hotline đặt khám: </span>
            <span class="link-hotline">
                <a style="text-decoration: none;" href="#">0912345678</a>
            </span>
        </div>
        <div class="support">
            <a style="text-decoration: none;" href="#">Trung tâm trợ giúp</a>
        </div>
    </div>
    <div class="wrap-user">
    <div class="cd-signup">
        <a style="text-decoration: none; cursor:pointer" >Đăng kí</a>
    </div>
    <div class="space"></div>
    <div class="cd-signin">
        <a style="text-decoration: none;cursor:pointer" >Đăng nhập</a>
    </div>
</div>
@endif --}}

        </div>
    </div>
   <!--TOP Section End-->
   <!-----POPUP FORM SIGNIN SIGNUP SECTION BEGIN------->
   <div class="cd-user-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper -->
            <ul style="padding-left: 0px;" class="cd-switcher">
                <li>
                    <a style="cursor:pointer">Đăng nhập
            </a>
                </li>
                <li>
                    <a style="cursor:pointer">Tạo tài khoản
            </a>
                </li>
            </ul>

              <!-- <div class="alert alert-warning" role="alert">
                 ERROR
              </div>   -->
            <div id="cd-login">
                <!-- log in form -->
                <form class="cd-form" action="/signin-user" method="post">
                    @csrf
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin_email">Email
              </label>
                        <input class="full-width has-padding has-border" id="signin_email" name="signin_email" type="email" placeholder="E-mail" required>
                        <span class="cd-error-message">Email không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin_password">Password
              </label>
                        <input class="full-width has-padding has-border" id="signin_password" name="signin_password" type="password" placeholder="Password" required>
                        <a href="#0" class="hide-password">Hide
              </a>
                        <span class="cd-error-message">Password không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Nhớ đăng nhập
              </label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Đăng nhập">
                    </p>
                </form>
                <p class="cd-form-bottom-message">
                    <a href="#0">Quên mật khẩu?
            </a>
                </p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div>
            <!-- cd-login -->
            <div id="cd-signup">
                <!-- sign up form -->
                <form action="/signup-user" method="post"  class="cd-form" >
                  @csrf
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup_username" >Username
              </label>
                        <input class="full-width has-padding has-border" id="signup_username" name="signup_username" type="text" placeholder="Username" required>
                        <span class="cd-error-message">Username không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup_phone">Username
              </label>
                        <input class="full-width has-padding has-border" id="signup_phone" name="signup_phone" type="text" placeholder="Phone Number" required>
                        <span class="cd-error-message">Số điện thoại không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup_email">Email
              </label>
                        <input class="full-width has-padding has-border" id="signup_email" name="signup_email" type="email" placeholder="E-mail" required>
                        <span class="cd-error-message">Email không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup_password">Password
              </label>
                        <input class="full-width has-padding has-border" id="signup_password" name="signup_password" type="password" placeholder="Password" required>
                        <a href="#0" class="hide-password">Hide
              </a>
                        <span class="cd-error-message">Password không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">Tôi đồng ý với
                <a href="#0">Điều khoản & Chính sách
                </a>
              </label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Tạo tài khoản">
                    </p>
                </form>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div>
            <!-- cd-signup -->
            <div id="cd-reset-password">
                <!-- reset password form -->
                <p class="cd-form-message">Bạn quên mật khẩu? Vui lòng nhập email của bạn và chúng tôi sẽ gửi cho bạn một email có đường dẫn để thay đổi mật khẩu.
                </p>
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">Email
              </label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Email không được bỏ trống!
              </span>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>
                <p class="cd-form-bottom-message">
                    <a href="#0">Quay lại đăng nhập
            </a>
                </p>
            </div>
            <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close
        </a>
        </div>
        <!-- cd-user-modal-container -->
    </div>
   <!-----POPUP FORM SIGNIN SIGNUP SECTION END------->
    <header class="u-clearfix u-header u-header" id="sec-b139">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="/" class="u-image u-logo u-image-1">
                <img src="/front/img/logo.png" class="u-logo-image u-logo-image-1" alt="">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Booking</a>
                            <ul class="drop-down">
                                <li><a href="/search-hospital" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Hospital</a></li>
                                <li><a href="/search-doctor" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Doctor</a></li>
                                <li><a href="/search-service" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Service</a></li>
                            </ul>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/handbook" style="padding: 10px 20px;">HandBook</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/doi-tac" style="padding: 16px 20px;width:170px;height:70px;">Trở thành đối tác của<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HEALTH PLUS</a>
                        </li>
                    </ul>
                </div>
                <!--SCROLLLL -->



                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="form.html">Booking</a>

                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>

<!------Main Section Begin-------->
       @yield('main_content')
<!------Main Section End-------->

<div class="d-flex flex-column h-100">


        <!-- FOOTER -->
        <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">FB.</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-3">Newsletter</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <form action="#">
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @if (session('success'))
    <script>
        // Sử dụng JavaScript để hiển thị toast notification
        jQuery(document).ready(function ($) {
            $.toast({
                text: "{{ session('success') }}", // Sử dụng Blade syntax để lấy giá trị từ session
                heading: 'Thông báo!',
                icon: 'success',
                showHideTransition: 'fade',
                allowToastClose: true,
                hideAfter: 4000,
                stack: false,
                position: 'top-right',
                textAlign: 'left',
                loader: true,
                loaderBg: '#9EC600',

            });
        });

        {{ session()->forget('success') }}
    </script>
    @endif
    @if (session('error'))
    <script>
        // Sử dụng JavaScript để hiển thị toast notification
        jQuery(document).ready(function ($) {
            $.toast({
                text: "{{ session('error') }}", // Sử dụng Blade syntax để lấy giá trị từ session
                heading: 'Thông báo!',
                icon: 'error',
                showHideTransition: 'fade',
                allowToastClose: true,
                hideAfter: 4000,
                stack: false,
                position: 'top-right',
                textAlign: 'left',
                loader: true,
                loaderBg: '#ffcccc',

            });
        });

        {{ session()->forget('success') }}
    </script>
    @endif
</body>

</html>
