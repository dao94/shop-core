<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<!-- Mirrored from www.tuanminhexport.com/home/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 14:00:17 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Nam phuong Tradding & Production Co.,Ltd</title>
    <meta name="description" content="Nam phuong Tradding & Production Co.,Ltd" />
    <meta name="keywords" content="tuanminhexport, Tuấn Minh JSC, Tuấn Minh,Nam phuong Tradding & Production Co.,Ltd" />
    <meta content='global' name='distribution'/>
    <meta content='1 days' name='revisit'/>
    <link href="{{asset('styles/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('styles/FSdetail_product.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('styles/FSmain.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{asset('scripts/jquery-1.7.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('scripts/jquery.vticker.js')}}"></script>
    <link rel="stylesheet" href="{{asset('scripts/nivo-slider/nivo-slider.css')}}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{asset('scripts/nivo-slider/jquery.nivo.slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('scripts/gen_validatorv31.js')}}"></script>

<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="{{asset('scripts/lightbox/js/jquery.lightbox-0.5.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('scripts/lightbox/css/jquery.lightbox-0.5.css')}}" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<style type="text/css">
    /* jQuery lightBox plugin - Gallery style */
    #gallery {
        padding: 10px;
        width: 600px;
    }
    #gallery ul { list-style: none; }
    #gallery ul li { display: inline; float: left; }
    #gallery ul img {
        width: 140px;
        border:1px solid #ccc;
        padding: 1px;
        margin-right: 3px;
    }
    #gallery ul a:hover img {
        border: 1px solid #000;
        color: #fff;
    }
    #gallery ul a:hover { color: #fff; }
</style>
</head>
    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1510399182539685&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="vns_main">
            <div class="header"> 
                <a href="index.html" title="Nam phuong Tradding & Production Co.,Ltd" rel="nofollow" id="logo">
                    <img src="{{asset('images/logo.png')}}" style="width:217px;height:70px" /> </a>
                <img id="slogan" src="{{asset('images/banner.png')}}" width="530" />
                <div class="searchbox">
                    <ul>
                        <li> <a href='{{URL::to("/home")}}' title="Nam phuong Tradding & Production Co.,Ltd">Home</a> </li>
                        <li> <a href="javascript:void(0);">Help</a> </li>
                        <li> <a href="lien-he.html">Contact</a> </li>
                    </ul>
                    <form method="get" action="http://www.tuanminhexport.com/">
                        <input type="text" name="search" />
                        <input type="submit" value=""/>
                    </form>
                </div>
                <!-- end searchbox --> 
                <!-- end searchbox --> 
            </div>
            <!-- end .header -->
            <div id="cssmenu">
                <ul>
                    <li><a href='{{URL::to("/home")}}' title="Nam phuong Tradding & Production Co.,Ltd"><span>Home</span></a></li>
                    <li class="has-sub"> 
                        <a href="about-us.html" title="Introduction"> <span>Introduction</span> </a> 
                            <ul>
                                <li>
                                    <a href="ve-chung-toi.html" title="About us">
                                    <span>About us</span>
                                    </a>
                                    <a href="khach-hang-thi-truong.html" title="customer and exporting market">
                                    <span>customer and exporting market</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub"> 
                        <a title="Product">
                            <span>Product</span>
                        </a>
                        <ul>
                            <li>
                                @foreach($list_category as $list)
                                <a href='{{URL::to("/product/$list->id")}}' title="">
                                    <span>{{$list->name}}</span>
                                </a>
                                @endforeach
                            </li>
                        </ul>
                    </li>
                    <li > 
                        <a href='{{URL::to("/news")}}' title="News"> <span>News</span> </a> 
                    </li>
                    <li > 
                        <a href="dich-vu.html" title="services"> <span>Services</span> </a> 
                    </li>
                    <li class="has-sub"> 
                        <a href="photo-of-shipment.html" title="Photo bank"> <span>Photo bank</span> </a> 
                    </li>
                    <li><a href="lien-he.html" title="Contacts"><span>Contacts</span></a></li>
                </ul>
            </div>
            <!-- end cssmenu -->
            <div class="slider">
            <div style="clear:both; height:15px;"></div>
            <div id="slide"> 
                <a href="index.html" title="Slide 3"> 
                    <img src="{{asset('images/slide8.png')}}" alt="Slide 3" /> 
                </a> 
                <a href="index.html" title="Slide 3"> 
                    <img src="{{asset('images/1.jpg')}}" alt="Slide 3" /> 
                </a> 
                <a href="index.html" title="Slide 3"> 
                    <img src="{{asset('images/2.jpg')}}" alt="Slide 3" /> 
                </a>
            </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slide').nivoSlider({
                effect:"boxRandom",
                slices:15,
                boxCols:8,
                boxRows:4,
                animSpeed:500,
                pauseTime:3000,
                startSlide:0,
                directionNav:true,
                directionNavHide:true,
                controlNav:true,
                controlNavThumbs:false,
                controlNavThumbsFromRel:true,
                keyboardNav:true,
                pauseOnHover:true,
                manualAdvance:false
            });                                     
        });
    </script>
</div>
<div class="vns_content">

<div class="vns_left">
    <div class="box">
        <h3>Product list</h3>
        <ul id="menuproductlist">
            @foreach($list_category as $list)
            <li>
                <a href='{{URL::to("/category/$list->id")}}' title="{{$list->name}}">{{$list->name}}</a>
            </li>
            @endforeach
        </ul>
        <script type="text/javascript">
            $('ul#menuproductlist li').hover(function(){
                $(this).find('>ul>li').show("200");
            });
        </script> 
    </div><!-- end box menuproductlist -->

    <div class="box">
        <h3>Statistic</h3>
        <div style="width:190px; background-color:#f5f5f5; margin-top:1px; line-height:24px; font-size:12px; color:#333">
            <p style="padding-left:10px;">Online: 12</p>
            <p style="padding-left:10px;">Total visite: 1234</p>
            <div style="clear:both"></div>
        </div>
    </div>
    <div class="box adv"> 
        <a href="http://vinastyle.vn/tuanminh/" target="_blank" title="QC6"> 
            <img src="{{asset('uploads/upload/images/product/huong-may-9-inches_1(1).jpg')}}" onerror="this.src='images/logo.png'" alt="QC6" /> 
        </a> 
    </div>
        
</div><!-- end .vns_left -->

<div class="vns_center">
       @yield('content')
</div><!-- end .vns_center -->

<div class="vns_right">
    <div class="box">
        <h3>Support online</h3>
        <ul id="supportlist">
            <li> 
                <a href="skype:phuong_thaoht?chat">
                    <img src="http://mystatus.skype.com/smallicon/phuong_thaoht" style="border: none;" width="16" height="16" alt="Ms. Thao" />
                </a> 
                <a href="ymsgr:sendIM?&amp;m=Hỗ trợ thông tin sản phẩm" >
                    <img src="http://opi.yahoo.com/online?u=&amp;t=5&amp;l=us" />
                </a> Ms. Thao 
            </li>
            <li> 
                <a href="skype:tuanminhco?chat">
                    <img src="http://mystatus.skype.com/smallicon/tuanminhco" style="border: none;" width="16" height="16" alt="Jenifer" />
                </a> 
                <a href="ymsgr:sendIM?ken_forever01@yahoo.com&amp;m=Hỗ trợ thông tin sản phẩm" >
                    <img src="http://opi.yahoo.com/online?u=ken_forever01@yahoo.com&amp;t=5&amp;l=us" />
                </a> Jenifer 
            </li>
            <li> 
                <a href="skype:export.japonica?chat">
                    <img src="http://mystatus.skype.com/smallicon/export.japonica" style="border: none;" width="16" height="16" alt="Lê Mai - Manager" />
                </a> 
                <a href="ymsgr:sendIM?lehoamaivn&amp;m=Hỗ trợ thông tin sản phẩm" >
                    <img src="http://opi.yahoo.com/online?u=lehoamaivn&amp;t=5&amp;l=us" />
                </a> Lê Mai - Manager 
            </li>
            <li> 
                <a href="skype:nguyendinhduc29?chat">
                    <img src="http://mystatus.skype.com/smallicon/nguyendinhduc29" style="border: none;" width="16" height="16" alt="Mr. Duc - Export Manager" />
                </a> 
                <a href="ymsgr:sendIM?dinhduck35c5&amp;m=Hỗ trợ thông tin sản phẩm" >
                    <img src="http://opi.yahoo.com/online?u=dinhduck35c5&amp;t=5&amp;l=us" />
                </a> Mr. Duc - Export Manager 
            </li>
            <li>
                <p style="font-size:12px; color:#cc0000; line-height:24px; margin-left:10px;"> Hotline: 0984 663 966 </p>
            </li>
        </ul>
    </div><!-- end box support -->
    <div class="box">
        <h3>Product hot</h3>
        <div style="clear:both; height:1px; background-color:#fff"></div>
        <div style="clear:both; height:10px; background-color:#f5f5f5"></div>
        <div id="advproduct" style="background-color:#f5f5f5; padding-left:5px;">
            <ul id="producthot">
                @foreach($list_product_status as $pr_stt)
                <li> 
                    <a href='{{URL::to("/product/$pr_stt->id")}}' title="{{$pr_stt->name}}"> 
                        <img src='{{asset("uploads/$pr_stt->images")}}' alt="{{$pr_stt->alt}}" onerror="this.src='images/logo.png'" /> 
                    </a> 
                    <a style="height: 16px; overflow: hidden" href='{{URL::to("/product/$pr_stt->id")}}' title="{{$pr_stt->name}}">
                        {{$pr_stt->name}}
                    </a> 
                    <span>Chi tiết</span> 
                </li>
                @endforeach
            </ul>
        </div><!--end.advproduct-->
    <script type="text/javascript">
        $('#advproduct').vTicker();
    </script> 
    </div><!-- end box producthot -->

    <div class="box adv"> 
        <a href="index.html" target="_blank" title="QCT"> 
            <img src="uploads/upload/images/gallery/thuvienanh.png" onerror="this.src='images/logo.png'" alt="QCT" /> 
        </a> 
        <a href="#" target="_blank" title="QCP"> 
            <img src="uploads/upload/images/product/Que3.png" onerror="this.src='images/logo.png'" alt="QCP" /> 
        </a> 
        <a href="#" target="_blank" title="QCTT"> 
            <img src="uploads/upload/images/Quang%20c%c3%a1o/2222(1).png" onerror="this.src='images/logo.png'" alt="QCTT" /> 
        </a> 
        <a href="#" target="_blank" title="QCT2"> 
            <img src="uploads/upload/images/Quang%20c%c3%a1o/qc11(1).png" onerror="this.src='images/logo.png'" alt="QCT2" /> 
        </a> 
    </div>
</div><!-- end .vns_right -->

</div>
<!-- end cssmenu --> 
<div style="clear:both"></div>
<div class="footer">
    <div class="vns_footer">
        <ul>
            <li><a href="index.html" title="Nam phuong Tradding & Production Co.,Ltd" rel="nofollow"><span>Home</span></a></li>
                        <li><a href="about-us.html" title="Giới thiệu"><span>Introduction</span></a></li>
                        <li><a href="spices-and-foods/index.html" title="Sản phẩm"><span>Product</span></a></li>
                        <li><a href="tin-tuc-su-kien.html" title="Tin tức & Sự kiện"><span>News</span></a></li>
                        <li><a href="dich-vu.html" title="Dịch vụ"><span>Services</span></a></li>
                        <li><a href="photo-of-shipment.html" title="Thư viện ảnh"><span>Photo bank</span></a></li>
            
            <li><a href="lien-he.html" title="Contacts"><span>Contacts</span></a></li>
        </ul>
        <div class="power">
            <a href="http://vinastyle.vn/">
                                <!-- Thiết kế bởi vinastyle.vn -->
                                
            </a>
        </div>
    </div>
    <div style="clear:both; height:10px;"></div>
    <div class="vns_footercontent">
        <a id="logo" href="index.html" title="Nam phuong Tradding & Production Co.,Ltd">
            <img src="{{asset('images/logo.png')}}" style="width:217px;height:70px;"/>
        </a>
        <div id="contact">
            <h2>
               <span style="color:#ff0000;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Nam phuong Tradding & Production Co.,Ltd</span></span></span>
           </h2>
            <div>
                <div>
                    <p>
                        <span style="font-size: small; background-color: rgb(255, 255, 255);">Trụ sở  Yahoo: &nbsp;<strong>lehoamaivn@yahoo.com</strong></span></p>
                    <p>
                        <span style="font-size: small; background-color: rgb(255, 255, 255);">VPGD:<strong>export.japonica</strong></span></p>
                    <p>
                        <span style="font-size: small; background-color: rgb(255, 255, 255);">ĐT: 043 771 3823 * Hotline: <span style="color:#ff0000;"><strong>0984 663 966 &nbsp; </strong></span></span><span style="font-size: small;">
                        </br>
                        Email: <strong>tuanminhcom@gmail.com</strong></span></p>
                    <p>
                        <span style="font-size: small; background-color: rgb(255, 255, 255);">Fax: 043 771 3834</span><strong style="color: rgb(255, 0, 0);">&nbsp;info@tuanminhexport.com</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both; height:5px;"></div>
</div>

</div><!-- end .vns_main -->
</body>
</html>