@extends('main')
@section('content')
	<div class="box boxlist">
        <h3> 
            <a href='{{URL::to("/home")}}' title="">Trang chủ</a> 
            <a title="">{{$product_detail->name}}</a> 
        </h3>
        <div class="product_detail product_detail_v2">
            <div class="fl">
                <div class="picture_fullsize"><a class="previous" href="javascript:;" style="left: auto; display: block; "></a><a class="next" href="javascript:;" style="left: auto; display: block; "></a>
                    <div class="loading hidden" style="left: auto; "></div>
                    <table align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="picture_larger">
                                        <img src='{{asset("uploads/$product_detail->images")}}' onerror="this.src='../../images/logo.png'" alt="{{$product_detail->alt}}" onclick="productPictureColorbox(2)">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="picture_thumbnail_list"><a class="left" href="javascript:;"></a>
                    <div class="center">
                        <table align="center" class="picture_thumbnail" cellpadding="0" cellspacing="3">
                            <tbody>
                                <tr>

                                    <td class="thums_m" realwidth="281" realheight="460">
                                        <a href="javascript:void(0);" class="colorbox cboxElement" rel="product_picture" mainpicture="../../uploads/upload/images/product/d%e1%bb%aba.jpg"> 
                                            <img src="../../uploads/upload/images/product/d%e1%bb%aba.jpg" onerror="this.src='../../images/logo.png'" alt="Cơm dừa sấy khô loại fine" width="40" height="40"> 
                                        </a>
                                    </td>
                                                                                                                                                                                    <td class="thums_m" realwidth="281" realheight="460">
                                        <a class="colorbox cboxElement" href="javascript:void(0);" mainpicture="http://www.tuanminhexport.com/../uploads/upload/images/product/d%E1%BB%ABa.jpg" rel="product_picture"> 
                                            <img alt="Cơm dừa sấy khô loại fine" width="40" height="40" src="../../uploads/upload/images/product/d%e1%bb%aba.jpg" onerror="this.src='this.src='http://www.tuanminhexport.com/images/logo.png'" title="Cơm dừa sấy khô loại fine"> 
                                        </a>
                                    </td>
                                                                                                        </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="right" href="javascript:;"></a> 
                </div> -->
            </div>
        </div>
        <div class="thongtin">
            <h1>{{$product_detail->name}}</h1>
            <table width="335">
                <tbody>
                	<?php echo html_entity_decode($product_detail->description);?>
                </tbody>
                <div class="clearfix"></div>
                <div class="fb-like" data-href='{{URL::to("/product/$product_detail->id")}}' data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
            </table>
            <div style="margin-top:10px;float:left;width:310px;"> 
                <div style="margin-top:10px;float:right;">		      
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript" src="../../../s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f31e17f662251de"></script>
                    <!-- AddThis Button END -->
                </div>
            </div>
        </div>
        <div style="clear: both; height: 10px"></div>
        <div style="line-height: 20px; font-size: 12px; line-height: 20px; color: #333; text-align: justify;">
            
        </div>
        <script type="text/javascript" src="../../scripts/pro_slider.js"></script>
    </div>
    <!-- end box productnew -->
    <div style="clear:both; height:10px"></div>
        <div class="box">
	        <h3> 
	            <a href="../index.html" title="Cơm dừa">Sản phẩm liên quan</a> 
	        </h3>
	        @foreach($product_same as $list)
	        <div class="productitem"> 
	            <a href='{{URL::to("/product/$list->id")}}' title="{{$list->name}}"> 
	                <img src='{{asset("uploads/$list->images")}}' alt="Cơm dừa sấy khô loại medium " />
	            </a>
	            <div class="info"> 
	                <a style="height: 20px; overflow: hidden;" href="../com-dua-say-kho-loai-medium/index.html" title="{{$list->name}}">{{$list->name}}</a> 
	                <a href="../com-dua-say-kho-loai-medium/index.html" title="{{$list->name}}" class="price">Detail<a> 
                </div>
	        </div>
	        @endforeach
        </div>
        <script type="text/javascript">
        $('.vns_center .productitem').each(function(){
            var index = $(this).index();
            if(((index) % 3) == 0) 
            {
                $(this).css("float", "right");
            }
            else if( ((index +  1) % 3) == 0) 
            {
                $(this).css("margin-left", "23px");
            }
        });
    </script> 
@endsection