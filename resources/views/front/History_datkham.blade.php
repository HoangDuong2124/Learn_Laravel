@extends('user_layout')
@section('title','Lịch sử đặt khám')
@section('main_content')
 <div class="main-content">
    <div class="page">
     <div class="container container-booking-history mt-md-4">
      <div class="container-header  pt-5">
        <span class="content-header">
         <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIuNzYwOTkgMjIuNTAwMUMyLjQ1ODgzIDIyLjM2NzkgMi4yMzIyMSAyMi4xNjAxIDIuMjUxMSAyMS43ODI0QzIuMjY5OTggMjEuNDA0NyAyLjU3MjE0IDIxLjE0MDQgMi45Njg3MyAyMS4xNDA0QzQuMjE1MTMgMjEuMTQwNCA1LjQ2MTUzIDIxLjE0MDQgNi43MjY4MiAyMS4xNDA0QzExLjA3MDMgMjEuMTQwNCAxNS40MTM5IDIxLjE0MDQgMTkuNzU3NCAyMS4xNDA0QzE5LjgxNCAyMS4xNDA0IDE5Ljg3MDcgMjEuMTQwNCAxOS45MDg1IDIxLjE0MDRDMTkuOTA4NSAyMC41MTcyIDE5LjkyNzQgMTkuOTEyOCAxOS45MDg1IDE5LjMwODVDMTkuODUxOCAxOC4zMDc2IDE5LjgxNCAxNy4zMDY3IDE5LjYyNTIgMTYuMzA1OEMxOS40OTMgMTUuNTg4MiAxOS4xNzIgMTUuMDIxNyAxOC42MjQzIDE0LjU0OTVDMTcuODY4OSAxMy44ODg2IDE2Ljk4MTMgMTMuNDE2NCAxNi4wNzQ4IDEzLjAwMUMxNi4wMzcxIDEzLjA3NjUgMTUuOTk5MyAxMy4xNTIxIDE1Ljk2MTUgMTMuMjI3NkMxNS4wMTczIDE1LjE1MzggMTQuMDkxOSAxNy4wOTkgMTIuOTM5OSAxOC45MTE5QzEyLjc3IDE5LjE5NTIgMTIuNTgxMSAxOS40Nzg1IDEyLjM5MjMgMTkuNzQyOUMxMi4wNzEyIDIwLjE5NjEgMTEuNDg1OCAyMC4xOTYxIDExLjIwMjUgMTkuNzI0QzEwLjY3MzggMTguODc0MiAxMC4xMDcyIDE4LjAyNDQgOS42MzUwOSAxNy4xMzY4QzguOTM2MzUgMTUuODUyNiA4LjMxMzE1IDE0LjUzMDYgNy42MzMyOSAxMy4yMDg3QzcuNTk1NTIgMTMuMTMzMiA3LjU1Nzc1IDEzLjA3NjUgNy41MTk5OCAxMi45ODIxQzYuODAyMzYgMTMuMzAzMSA2LjEyMjUgMTMuNjgwOCA1LjQ4MDQyIDE0LjExNTJDNS4zNDgyMiAxNC4yMDk2IDUuMjE2MDMgMTQuMzIyOSA1LjA4MzgzIDE0LjQxNzNDNC4yMzQwMSAxNS4wNDA1IDMuOTEyOTcgMTUuOTQ3IDMuODM3NDMgMTYuOTY2OEMzLjc4MDc4IDE3Ljg5MjIgMy43OTk2NiAxOC43OTg2IDMuNzYxODkgMTkuNjg2MkMzLjc2MTg5IDE5Ljg3NTEgMy43MDUyNCAyMC4wODI4IDMuNjEwODEgMjAuMjUyOEMzLjQ3ODYyIDIwLjQ5ODMgMy4xNzY0NiAyMC41NzM4IDIuOTEyMDcgMjAuNDk4M0MyLjYyODggMjAuNDAzOCAyLjQzOTk1IDIwLjE5NjEgMi40Mzk5NSAxOS44OTRDMi40Mzk5NSAxOC45ODc1IDIuNDAyMTggMTguMDgxIDIuNDU4ODMgMTcuMTkzNEMyLjQ5NjYgMTYuNjQ1OCAyLjYwOTkxIDE2LjA5ODEgMi43NDIxMSAxNS41NjkzQzIuOTY4NzMgMTQuNjQ0IDMuNTczMDQgMTMuOTQ1MiA0LjI5MDY3IDEzLjM1OThDNS4yNzI2OCAxMi41NDc3IDYuNDA1NzggMTEuOTgxMiA3LjU3NjY0IDExLjUwOTFDNy45NzMyMiAxMS4zNTggOC4yOTQyNiAxMS41MDkxIDguNDgzMTEgMTEuODg2OEM5LjE4MTg2IDEzLjI4NDIgOS44NjE3MSAxNC43MDA2IDEwLjU3OTMgMTYuMDk4MUMxMC45MTkzIDE2Ljc3OCAxMS4zMzQ3IDE3LjQyIDExLjcxMjQgMTguMDk5OUMxMS43MzEzIDE4LjEzNzcgMTEuNzUwMiAxOC4xNTY1IDExLjc4OCAxOC4xOTQzQzExLjk5NTcgMTcuODU0NCAxMi4yMDM0IDE3LjUzMzMgMTIuMzczNCAxNy4xNzQ1QzEzLjI3OTkgMTUuNDc0OSAxNC4xNDg2IDEzLjc1NjQgMTUuMDE3MyAxMi4wMTlDMTUuMzAwNiAxMS40NzEzIDE1LjU4MzggMTEuMzM5MSAxNi4xNTA0IDExLjU4NDZDMTcuMzU5IDEyLjA3NTYgMTguNDkyMSAxMi42NjEgMTkuNDc0MSAxMy41MTA5QzIwLjI4NjIgMTQuMjA5NiAyMC43NzcyIDE1LjA1OTQgMjAuOTQ3MSAxNi4xMTdDMjEuMjExNSAxNy42NDY3IDIxLjI2ODIgMTkuMTc2MyAyMS4yODcxIDIwLjcwNkMyMS4yODcxIDIxLjAwODIgMjEuMjg3MSAyMS4zMTAzIDIxLjMwNiAyMS42MTI1QzIxLjM0MzcgMjIuMDI4IDIxLjE5MjYgMjIuMzMwMSAyMC43OTYxIDIyLjQ4MTJDMTQuNzkwNyAyMi41MDAxIDguNzY2MzkgMjIuNTAwMSAyLjc2MDk5IDIyLjUwMDFaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMTEuNTgwMiAxLjVDMTMuMDM0NCAxLjUxODg4IDE0LjIyNDEgMS44NTg4MSAxNS4yMDYxIDIuNzY1MjlDMTYuMDc0OCAzLjU3NzM0IDE2LjU0NyA0LjU5NzEyIDE2LjczNTggNS43NDkxQzE3LjAwMDIgNy4zOTIwOSAxNi41MDkyIDguODY1MTEgMTUuNjIxNiAxMC4yMjQ4QzE0LjgwOTUgMTEuNDcxMiAxMy42NzY1IDEyLjM3NzcgMTIuNDMgMTMuMTUyQzEyLjI0MTIgMTMuMjY1MyAxMi4wNTI0IDEzLjM3ODYgMTEuODQ0NiAxMy40OTE5QzExLjQ2NjkgMTMuNzE4NSAxMS4wNzAzIDEzLjYyNDEgMTAuODYyNiAxMy4yODQyQzEwLjY1NDkgMTIuOTYzMSAxMC43NjgyIDEyLjU2NjUgMTEuMTQ1OSAxMi4zMzk5QzExLjk1NzkgMTEuODQ4OSAxMi43NTExIDExLjMzOSAxMy40MzA5IDEwLjY5NjlDMTQuNDUwNyA5LjczMzgxIDE1LjE4NzIgOC42MDA3MiAxNS40MTM5IDcuMjAzMjRDMTUuNjQwNSA1LjgwNTc2IDE1LjA3MzkgNC4xMjUgMTMuODA4NiAzLjM2OTZDMTMuMzE3NiAzLjA4NjMzIDEyLjgwNzcgMi45MzUyNSAxMi4yNDEyIDIuODc4NkMxMS4zMTU4IDIuODAzMDYgMTAuNDA5NCAyLjkxNjM3IDkuNjE2MiAzLjQyNjI2QzguNjkwODQgNC4wMTE2OSA4LjE5OTgzIDQuODgwNCA4LjA4NjUyIDUuOTM3OTVDNy44OTc2NyA3LjUwNTQgOC4zNjk4IDguODQ2MjIgOS41NTk1NSA5Ljg4NDg5QzkuODk5NDcgMTAuMTg3MSAxMC4zMzM4IDEwLjM5NDggMTAuNzMwNCAxMC42NDAzQzExLjAzMjYgMTAuODEwMyAxMS4xODM2IDExLjExMjQgMTEuMTA4MSAxMS40MTQ2QzEwLjk5NDggMTEuODQ4OSAxMC41NjA0IDEyLjA1NjcgMTAuMTYzOSAxMS44Njc4QzguNjM0MTkgMTEuMTY5MSA3LjU3NjYzIDEwLjAzNiA3LjAyODk3IDguNDMwNzZDNi41NzU3MyA3LjA4OTkzIDYuNTU2ODUgNS43NDkxIDcuMTIzMzkgNC40MjcxNkM3Ljc2NTQ4IDIuODQwODMgOC45OTMgMS44Nzc3IDEwLjc0OTMgMS41OTQ0MkMxMS4wNzAzIDEuNTM3NzcgMTEuMzkxNCAxLjUxODg4IDExLjU4MDIgMS41WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTE2LjI0NDggMTguNTE1NEMxNS45ODA0IDE4LjUxNTQgMTUuNzUzOCAxOC41MTU0IDE1LjUyNzEgMTguNTE1NEMxNS4xMzA2IDE4LjQ5NjUgMTQuODQ3MyAxOC4yMTMyIDE0Ljg0NzMgMTcuODE2N0MxNC44NDczIDE3LjQzOSAxNS4xNDk0IDE3LjE3NDYgMTUuNTQ2IDE3LjE1NTdDMTUuNzE2IDE3LjE1NTcgMTUuODY3MSAxNy4xNTU3IDE2LjAzNyAxNy4xNTU3QzE2LjA5MzcgMTcuMTU1NyAxNi4xNTAzIDE3LjE1NTcgMTYuMjQ0OCAxNy4xNTU3QzE2LjI0NDggMTYuOTEwMiAxNi4yNDQ4IDE2LjY4MzYgMTYuMjQ0OCAxNi40NTY5QzE2LjI2MzcgMTUuOTg0OCAxNi42NDE0IDE1LjY2MzggMTcuMDc1NyAxNS43NTgyQzE3LjM1OSAxNS44MTQ5IDE3LjU2NjcgMTYuMDYwNCAxNy41ODU2IDE2LjM2MjVDMTcuNTg1NiAxNi40OTQ3IDE3LjU4NTYgMTYuNjI2OSAxNy41ODU2IDE2Ljc1OTFDMTcuNTg1NiAxNi44NzI0IDE3LjU4NTYgMTcuMDA0NiAxNy41ODU2IDE3LjE1NTdDMTcuODMxMSAxNy4xNTU3IDE4LjA1NzcgMTcuMTU1NyAxOC4zMDMyIDE3LjE1NTdDMTguNzE4NyAxNy4xNTU3IDE5LjAwMiAxNy40MzkgMTkuMDAyIDE3LjgxNjdDMTkuMDAyIDE4LjE5NDQgMTguNjk5OCAxOC40Nzc2IDE4LjMwMzIgMTguNDk2NUMxOC4wNzY2IDE4LjQ5NjUgMTcuODUgMTguNDk2NSAxNy41ODU2IDE4LjQ5NjVDMTcuNTg1NiAxOC43NDIgMTcuNTg1NiAxOC45Njg2IDE3LjU4NTYgMTkuMTk1M0MxNy41ODU2IDE5LjYxMDcgMTcuMzAyMyAxOS44OTQgMTYuOTI0NiAxOS44OTRDMTYuNTQ2OSAxOS44OTQgMTYuMjYzNyAxOS42MTA3IDE2LjI0NDggMTkuMjE0MUMxNi4yNDQ4IDE5LjAwNjQgMTYuMjQ0OCAxOC43Nzk4IDE2LjI0NDggMTguNTE1NFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" class="icon-doctor" alt="">
          <h2 class="text-header">Lịch sử đặt lịch</h2>
        </span>
      </div>
        <!-- <div class="container">
          <div class="row history-book" >
             <div class="col-lg-2 img-doctor" style="background:#fff;">
               <img style="width: 150px; height:150px;" " src="upload/doctor/bs98.png" alt="">
             </div>
             <div class="col-lg-7 " style="background:#fff;">
                <div>
                   <span>PGS.TS. Nguyễn Hoàng Long</span>
                </div>             </div>
          </div>
        </div> -->
     @foreach($show_history as $key=> $show_history )
           @if($show_history->user_id)
           <div class="tF2pJg">
        <div>
            <div class="_6nAGBW">
                <div class="_1ox39j">
                    <div class="_9bLyA+">
                        <div class="mzsqa6">BS.{{$show_history->name_doctor}}</div>
                    </div>
                    <div class="WPNwG4">
                        <div class="RcKSvW"><a style="text-decoration:underline;color:red " class="_2GgWAA" >
                           
                                <span class="_0vCgDb">
                                  @if($show_history->customer_status==0)
                                   Đang xử lí
                                  @endif 
                                  @if($show_history->customer_status==1)
                                   Đã lên lịch
                                  @endif
                                  @if($show_history->customer_status==2)
                                   Khám thành công
                                  @endif
                                  @if($show_history->customer_status==3)
                                   Đã hủy lịch
                                  @endif 
                                </span></a>
                            <div class="shopee-drawer" id="pc-drawer-id-8" tabindex="0">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="_60q+NM"></div><a style="text-decoration:none" href="/user/purchase/order/119470082271890?type=3">
                    <div class="giUtSy">
                        <div class="vdofqJ">
                            <div><span class="QkIuzE">
                                    <div></div>
                                    <div class="hDGdsD">
                                        <div class="_50XPwl">
                                            <div class="shopee-image__wrapper">
                                                <div class="shopee-image__place-holder">
                                                    <svg
                                                        enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                        y="0" class="shopee-svg-icon icon-loading-image">
                                                        <g>
                                                            <rect fill="none" height="8" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10"
                                                                width="10" x="1" y="4.5"></rect>
                                                            <line fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10" x1="1"
                                                                x2="11" y1="6.5" y2="6.5"></line>
                                                            <rect fill="none" height="3" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10" width="3"
                                                                x="11" y="6.5"></rect>
                                                            <line fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10" x1="1"
                                                                x2="11" y1="14.5" y2="14.5"></line>
                                                            <line fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10" x1="6"
                                                                x2="6" y1=".5" y2="3"></line>
                                                            <line fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10" x1="3.5"
                                                                x2="3.5" y1="1" y2="3"></line>
                                                            <line fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-miterlimit="10" x1="8.5"
                                                                x2="8.5" y1="1" y2="3"></line>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="shopee-image__content"
                                                    style="background-image: url(/upload/doctor/{{$show_history->img_doctor}});">
                                                    <div class="shopee-image__content--blur"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tODfT4">
                                            <div>
                                                <div class="QJqUaT"><span class="WVc4Oc"> 

                                                </span>
                                            </div>
                                            </div>
                                            <div>
                                                <div class="_9ca9GU">
                                                    {{$show_history->hospital_doctor}}
                                                </div>
                     
                                            </div>
                                        </div>
                                    </div>
                                    <div class="+QRFJX">
                                        <div>
                                            <div class="VN6h8+">
                                                <button class="stardust-button stardust-button--secondary Kz9HeM">
                                                Chi tiết lịch khám 
                                            </button>
                                                </div>
                                        </div>
                                    </div>
                                </span></div>
                            <div class="_472J0A"></div>
                        </div>
                    </div>
                </a>
                <div class="oPVPPp"></div>
            </div>
        </div>
        <div class="CqYika">
            <div class="oDBmi- n012K3"> </div>
            <div class="oDBmi- b-VPB8"> </div>
        </div>
        <div class="KinvoL">
            <div class="BAMNqz">
                <div class="Ge6yU5">Dịch Vụ Đã Đặt: Đặt khám bác sĩ</div>
                <!-- <div class="TDMlX1">
                    <p> Đặt khám bác sĩ</p>

                </div> -->
            </div>
        </div>
        <div class="_1ERzqw">
            <div class="cLwmWY">
                <span class="ZQEJyY">Ngày đặt khám 
                    <div class="shopee-drawer" id="pc-drawer-id-9" tabindex="0">
                        <u class="qMirbL">{{$show_history->created_at}}</u>
                    </div>
                </span>
                <!-- <span class="eGtmE+">
                    ghi gi do di
                </span> -->
            </div>
            <div class="NIZAp8">
                <div class="_8vTqu9">
                    <button class="stardust-button stardust-button--primary Kz9HeM">Đánh giá</button>
                </div>
                <!-- <div class="VN6h8+">
                    <button class="stardust-button stardust-button--secondary Kz9HeM">
                    Chi tiết lịch khám 
                </button>
                    </div> -->
                <div class="VN6h8+"><button style="background:orange;" class="stardust-button stardust-button--secondary book-again Kz9HeM"><a style="text-decoration: none;" href="/book-doctor/{{$show_history->doctor_id}}">Đặt lại</a></button>
                </div>
            </div>
        </div>
    </div>
           @else
           <div class="d-flex flex-column justify-content-center align-items-center container-empty-booking">
        <img src="front/img/img_none.png" alt="">
         <p class="mt-4 font-weight-bold">Bạn chưa có lịch hẹn nào với bác sĩ</p>
         <button class="button-booking">
            <a style="list-style: none;text-decoration:none;color: #fff" href="/search-hospital">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIGSURBVHgB3VVLTgJBEK0ZDB/DArcmJnMDPAIu3RG3LtS4V28gnkBvgDcQLyCu3IonEN0SMkOADDBA+55pSIMj07Ckkk7XVNev61X1iGwlKaXOsSpYniE7XJZt4rhAR6PRyA/DEKyqG3K/2+2q8Xj8BL5k69M1nHvYqliHxnnB5KFDvT3wRexVWTP70iwz7Dd0wNsY52UtK+tvq3LtxAkdx3mIkdWw1WRTmkwmj9Pp9JP1TtJl5tD3eVOxpSiK/MFgoMyyrAhQ6ff7BLyepDsH2XXdADcgmxhANOCpVOojSXEeADVu0AjkJRmhPEXokw3WCfDFHUGKkkyeDvBOPHDz+nA4VHp2KrEWbFEqUBF09p9nnN0SK2CmtPNP4tHr9VQQBKrVavkY1Dn4jmkM5RcEOUJtWd8GsiQuTeDDzuLy4NhjKXO53B2+a0jovT0M5fjrTU4LB3K5uy/5fD7IZrMcyMU5gMOTTCZzj+44QxYslUNnuhwKu8Pg6XT6DmzF7LhgGsl3FIoV6YeND17VKMe1li3MCQCfl6jT6ah2u832tXtGGGgWYIXOLw7UI4YE3GZYZ8bs96d/O2NR9yHuld1ZZUSQYfQM9lWSiTPRXBa6YkeehU5BYgbPJgBf0Cs95bE0e7Z54+UzRyxIt2NZB1t24mHdYl0gQHOjAEaWJflbrob+V2wp/QBOS6MbfbMSWQAAAABJRU5ErkJggg==" alt="">
             Đặt khám
            </a></button>
            </div>
         @endif
     @endforeach
     <!-- <div class="d-flex flex-column justify-content-center align-items-center container-empty-booking">
        <img src="front/img/img_none.png" alt="">
         <p class="mt-4 font-weight-bold">Bạn chưa có lịch hẹn nào với bác sĩ</p>
         <button class="button-booking">
            <a style="list-style: none;text-decoration:none;color: #fff" href="/search-hospital">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIGSURBVHgB3VVLTgJBEK0ZDB/DArcmJnMDPAIu3RG3LtS4V28gnkBvgDcQLyCu3IonEN0SMkOADDBA+55pSIMj07Ckkk7XVNev61X1iGwlKaXOsSpYniE7XJZt4rhAR6PRyA/DEKyqG3K/2+2q8Xj8BL5k69M1nHvYqliHxnnB5KFDvT3wRexVWTP70iwz7Dd0wNsY52UtK+tvq3LtxAkdx3mIkdWw1WRTmkwmj9Pp9JP1TtJl5tD3eVOxpSiK/MFgoMyyrAhQ6ff7BLyepDsH2XXdADcgmxhANOCpVOojSXEeADVu0AjkJRmhPEXokw3WCfDFHUGKkkyeDvBOPHDz+nA4VHp2KrEWbFEqUBF09p9nnN0SK2CmtPNP4tHr9VQQBKrVavkY1Dn4jmkM5RcEOUJtWd8GsiQuTeDDzuLy4NhjKXO53B2+a0jovT0M5fjrTU4LB3K5uy/5fD7IZrMcyMU5gMOTTCZzj+44QxYslUNnuhwKu8Pg6XT6DmzF7LhgGsl3FIoV6YeND17VKMe1li3MCQCfl6jT6ah2u832tXtGGGgWYIXOLw7UI4YE3GZYZ8bs96d/O2NR9yHuld1ZZUSQYfQM9lWSiTPRXBa6YkeehU5BYgbPJgBf0Cs95bE0e7Z54+UzRyxIt2NZB1t24mHdYl0gQHOjAEaWJflbrob+V2wp/QBOS6MbfbMSWQAAAABJRU5ErkJggg==" alt="">
             Đặt khám
            </a></button>
            </div> -->
        </div>
      </div> 
     </div>
@endsection