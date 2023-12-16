@extends('user_layout')
@section('title','Search Doctor')
@section('main_content')

<div class="main-content">
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

       <div class="btn-content-hospital">
          <div class="btn-content-hospital-title">
             <div>Chọn bác sĩ</div>
          </div>
            <div class="container">
           <div class="row">
             @foreach($cate_doctor as $key => $cate)
           <div class="col-lg-3" style="padding-left: 15px; padding-right: 15px;">
             <div class="styled__WrapDoctor-sc-16nbxge-1 eQWZSE">
                 <div class="wrap_info">
                    <div class="logo">
                        <img src="upload/doctor/{{$cate->img_doctor}}" alt="{{$cate->name_doctor}}" class="avatar">
                    </div>
                <div class="info">
                    <h3 class="name">
                        <a style="list-style: none;color:rgb(47, 48, 53);text-decoration:none;" href="/ho-so-bac-si/PGS-TS-Nguyen-Quang-975">{{$cate->name_doctor}}</a>
                    </h3>
                <div class="detail">
                    <div class="appointments" title="Lượt đặt khám">
                        <img class="icon_detail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADNSURBVHgB7ZPBDcIwDEW/qw7ACLBBOXQAJoAjPQGbME17ZQN6RUWCERihdxDGENFKKAmxVPWUd3GdWn5S7ACRyDicyxVO1aHLm+r4OQuAnH+a8gKmialiifLNuPW5wNSaXGK+ntvapHC7s15P3zD9yY1IzC48AiwwAG4BYQMdtU7A2ELHznaYQAvJoB+YdQP/Q6BAtoSf7y2pcZfZpHJ93cAHEchaUrJEXpjmwB6BeN5BZdk9uooss9bnhbWXcgaO5h48Am4RLlbURiJaXkZaLhTnQNZgAAAAAElFTkSuQmCC" style="user-select: none;">{{$cate->book_doctor}}
                    </div>
                <div class="ratesStars" title="Đánh giá của người bệnh">
                    <img class="icon_detail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAD5SURBVHgB7VNNDsFAFP7aqb0j9AiOILHAjhMgsSAWOAFOIFYNK06AlWDjCG6gbmDfn/GqTZsmHTMiEYt+i8lL3ve99828N0COHL/FaTXEeTn/RKIpMw+WCabfXjFjJirdu4pMhyo03ohj1+koy4SZwLFBRX2tGDL1Fp1mlLXB/U3M9bFGvW9nlTFE9elubXA2EVgwqeEk4frBOc0uI0LgCrhCCn6JuJmQD/loTVNuUyb4ArXe6J1cPmSX7YS5giFdWXmDglcS5hyvia8bgLWi4EGbM6P3Hic5XpapDRmB3nkPnVPgjVEdhEM/WDv6dFv6GwpLkCPH3+MJZbc9lnl2XvAAAAAASUVORK5CYII=" style="user-select: none;">{{$cate->star_doctor}}
                </div>
                </div>
                <div class="hospital-name">{{$cate->hospital_doctor}}
                </div>
              <div class="specializations">{{$cate->specialist_doctor}}
              </div>

              </div>
             <div class="price-info">
          <div class="price-title">Giá khám:</div>
           <div class="price-detail"><span class="price-number">{{$cate->price_book}}VNĐ</span>
           </div>
           </div>
            </div>
          <div class="btn-footer-card">
             <button type="button" class="ant-btn ant-btn-default">
                 <a style="list-style: none;color:white;text-decoration:none;" href="/book-doctor/{{$cate->doctor_id}}">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGeSURBVHgB3VXtUcMwDFV6DJANCBOQDTATUCZomKDdoNmgZQLYgHaCsEFhgmSDdAMj06dDVR3SpP/67nSK9WHJshQTXQuSPgPvfcpszuSYMqVqmLZMmyRJGhoLDrDy52GFZAYHyNUmH0xTpgyUY/2ubOqgo6Fgp6LPEUHrQYHYaMk0pwEIpWLaIVDVZ1zAcIf1FNkJLSBfGLlDIDnRQu87MXGW4K/gOR06SkguNzVyxx22Z/4C/Yw6TiEXXStZCdkatU9VeTLIA0rl00KWx06SgX9HctiHWUC2FDhmYx+x3aoqnAQR4RddhgY8iwWJQTLtGrRbOgOTSAbaUU41s/0fOooOv5qAT6W6p+MEj5xOLh5yPdWtalvB2tiLzlEMqjOckZdmYwlYGrsilihFNtMZV7pMqmXXHf6SSPFfkNyfolXzUdq5UL5vXaew3eXAN0x3dLjQEKCg7sTCYFawCZf9aG1uOnx/h42dG6ylhWX9xLrQeQ/YPIXuufcBM+Vq1Xemsq4jJa38kLfE//15JVBh9PLPqsAdjYUf88pdPX4AVkVhoJ7NOBsAAAAASUVORK5CYII=">
                    <span>Đặt khám</span>
                 </a>
                </button>
                </div></div></div>
              @endforeach
      </div>
      </div>


      <div class="container-pagination">
        <ul class="ant-pagination" unselectable="unselectable">
            <li title="Previous Page" class="ant-pagination-prev ant-pagination-disabled" aria-disabled="true">
                <button class="ant-pagination-item-link" type="button" tabindex="-1" disabled="">
                    <span role="img" aria-label="left" class="anticon anticon-left"><svg viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg>
                     </span></button></li>
                     <li title="1" class="ant-pagination-item ant-pagination-item-1 ant-pagination-item-active" tabindex="0">
                        <a rel="nofollow">1</a></li>
                     <li title="2" class="ant-pagination-item ant-pagination-item-2" tabindex="0"><a rel="nofollow">2</a></li>
                     <li title="3" class="ant-pagination-item ant-pagination-item-3 ant-pagination-item-before-jump-next" tabindex="0"><a rel="nofollow">3</a></li>
                     <li title="Next 3 Pages" tabindex="0" class="ant-pagination-jump-next ant-pagination-jump-next-custom-icon">
                        <a class="ant-pagination-item-link">
                        <div class="ant-pagination-item-container">
                            <span role="img" aria-label="double-right" class="anticon anticon-double-right ant-pagination-item-link-icon">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="double-right" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M533.2 492.3L277.9 166.1c-3-3.9-7.7-6.1-12.6-6.1H188c-6.7 0-10.4 7.7-6.3 12.9L447.1 512 181.7 851.1A7.98 7.98 0 00188 864h77.3c4.9 0 9.6-2.3 12.6-6.1l255.3-326.1c9.1-11.7 9.1-27.9 0-39.5zm304 0L581.9 166.1c-3-3.9-7.7-6.1-12.6-6.1H492c-6.7 0-10.4 7.7-6.3 12.9L751.1 512 485.7 851.1A7.98 7.98 0 00492 864h77.3c4.9 0 9.6-2.3 12.6-6.1l255.3-326.1c9.1-11.7 9.1-27.9 0-39.5z"></path>
                                 </svg></span><span class="ant-pagination-item-ellipsis">•••</span></div></a></li>
                    <li title="7" class="ant-pagination-item ant-pagination-item-7" tabindex="0"><a rel="nofollow">7</a></li>
                    <li title="Next Page" tabindex="0" class="ant-pagination-next" aria-disabled="false">
                        <button class="ant-pagination-item-link" type="button" tabindex="-1"><span role="img" aria-label="right" class="anticon anticon-right"><svg viewBox="64 64 896 896" focusable="false" data-icon="right" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z"></path></svg></span></button>
                    </li></ul></div>

      </div>
       </div>
      </div>

@endsection
