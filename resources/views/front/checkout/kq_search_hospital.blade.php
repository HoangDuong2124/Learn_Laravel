@extends('user_layout')
@section('main_content')

      <div class="main-content">
           <div class="btn-search">
              <h3 class="banner-title">Đặt khám tại Health Plus </h3>
              <p>Để được đón tiếp ưu tiên, không cần xếp hàng đợi tại các điểm bệnh viện </p>
             <div class="general-search">
             <form action="{{URL::to('/timkiem-bv')}}" method="post">
             {{ csrf_field() }}
                <div class="search-box">
                     
                   <div class="search-input">
                      <span class="icon-search">
                      <input type="submit" style="display:none">
                      <svg viewBox="64 64 896 896" focusable="false" data-icon="search" width="1.3em" height="1.3em" fill="currentColor" aria-hidden="true"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0011.6 0l43.6-43.5a8.2 8.2 0 000-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg>
                      </span>
                      <input type="text" name="keyword_search" class="text-search" placeholder="Tìm triệu chứng, chuyên khoa, tên bệnh viện, phòng khám">
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
             <h3 style="text-align: center;">Kết quả tìm kiếm</h3>
          </div>
            <div class="container">  
           <div class="row">
             @foreach($search_hospital as $key =>$cate)
           <div class="col-lg-4 col-xs-4" style="padding-left: 15px; padding-right: 15px;">
             <div class="item-hospital">
                <figure class="snip0015">
                    <img src="upload/hospital/{{$cate->img_hospital}}" class="img-avatar" alt="Logo BÁC SĨ ƠI - PHÒNG KHÁM O2O">
                </figure>
             <div class="content-item">
             <div class="content-hospital">
                <a style="text-decoration:none;" href="/ho-so-csyt/BAC-SI-OI---PHONG-KHAM-O2O-78"><h3 class="text-hospital">{{$cate->name_hospital}}</h3></a>
                <span class="text-address"><img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAILSURBVHgB5VXBUeNAEJxZg+9z5XMG6DKQLwHsCA6XiwcvJBKADIAIIAOLF1WAC4jAJgKUASIDAy+qQEMPy7IuIWEBL4r+SLua7d7pmbGJvjt4XkAYDdtErYiZ/xNJ8HqQKc1zOk+TQfJpgTA6CpkbpyL5AdFCkib9zH877uI4hM2SyH2cJmvZhwTC6DBgXgR5A4f7aXXcaAvZbIrcdtIknha/L1QdZG6ORUzP3dpZRZTjaTJnDZ77ECFjWkMs+0UeU3GrSIQmnvy4y9y6tOSCPel24tGVZulERKRtbauRAbOsqzWWXK1qbIswshlkLyGJFf2lt+7phq2TWcHrZG4G2A58QZtdkcfz2QLbW69OkNFzI9idRawpeMNULiAz73mA9bQ0Suga+bbdGh31p6aAK+ozTYawsCwG3bMElzO7eghg000tARTsgui3S/0MRMveCot/GyOtS+atY/jPZ0WuijaVRAuLF+2kaRid9jHJY5DqPExBHOS52mZin41Zxv5+kaly0DrxCeZAdm0xLSCELB7aasts0TUb/GwwumyntgDI0J6PmOS7XtmE+jht4+b4cjj4W/a9ssh6Q6R8gAndpnfgJp4+C7WqbEIVag2mfue984bmQCcaBd7zbWuh1mAOojLfPyRQZdWXrSli1qo61rxehGrCd1Ue659QVdcUMdciB2cVyMcqQj8GT1qDAvZxgkR3AAAAAElFTkSuQmCC" style="user-select: none;">{{$cate->address_hospital}}</span>
            </div>
            <div class="container-detail">
            <div>
            <div class="text-appointments"><img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADNSURBVHgB7ZPBDcIwDEW/qw7ACLBBOXQAJoAjPQGbME17ZQN6RUWCERihdxDGENFKKAmxVPWUd3GdWn5S7ACRyDicyxVO1aHLm+r4OQuAnH+a8gKmialiifLNuPW5wNSaXGK+ntvapHC7s15P3zD9yY1IzC48AiwwAG4BYQMdtU7A2ELHznaYQAvJoB+YdQP/Q6BAtoSf7y2pcZfZpHJ93cAHEchaUrJEXpjmwB6BeN5BZdk9uooss9bnhbWXcgaO5h48Am4RLlbURiJaXkZaLhTnQNZgAAAAAElFTkSuQmCC" style="user-select: none;">Lượt ĐK : {{$cate->book_hospital}}
           </div>
            </div>
             </div>
            </div>
            </div>
             </div>
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