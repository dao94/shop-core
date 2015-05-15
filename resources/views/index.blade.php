@extends('main')
@section('content')
 <div class="box">
      <h3> <a href="javascript:void(0)">Product list</a> </h3>
         @foreach($list_product_new as $val)
          <div class="productitem"> 
              <a href="que/que-che/index.html" title="{{$val->name}}"> 
                  <img src="{{Request::url()}}/../uploads/{{$val->images}}" alt="{{$val->alt}}" onerror="this.src='images/logo.png'" />
              </a>
              <div class="info"> 
                  <a style="height: 20px; overflow: hidden;" href="que/que-che/index.html" title="{{$val->name}}">{{$val->name}}</a> 
                  <a href="que/que-che/index.html" title="{{$val->name}}" class="price"> details </a> 
              </div>
          </div>
          @endforeach
  </div><!-- end box productnew -->
  <div style="clear:both; height:10px"></div>
      <div class="box">
          <h3> <a href="javascript:void(0)">Product hot</a> </h3>
          @foreach($list_product_status as $pr_stt)
          <div class="productitem"> 
              <a href="que/que-che/index.html" title="{{$pr_stt->name}}"> 
                  <img src="{{Request::url()}}/../uploads/{{$pr_stt->images}}" alt="{{$pr_stt->alt}}" onerror="this.src='images/logo.png'" /> 
              </a>
              <div class="info"> 
                  <a style="height: 20px; overflow: hidden;" href="que/que-che/index.html" title="{{$pr_stt->name}}">{{$pr_stt->name}}</a> 
                  <a href="que/que-che-p6/index.html" title="{{$pr_stt->name}}" class="price"> details </a> 
              </div>
          </div>
          @endforeach 
      </div><!-- end box productnew --> 
      <script type="text/javascript">
          $('.vns_center .productitem').each(function(){
              var index = $(this).index();
              if(((index) % 3) == 0) 
              {
                  $(this).css("float", "right");
              }
              else if( ((index + 1) % 3) == 0) 
              {
                  $(this).css("margin-left", "23px");
              }
          });
      </script> 
      <div style="clear: both; height: 10px"></div>
      <div class="box">
      <h3>
          <a href="tin-tuc-su-kien.html" title="news">News</a>
      </h3>
      <div style="clear:both; height:10px"></div>
          <div class="newhome">
              <h3>
                  <a href="tin-tuc-su-kien/muc-kich-rung-que-co-van-yen-n19.html" title="{{$one_news->name}}">{{$one_news->name}}</a>
              </h3>
              <br />
              <a href="tin-tuc-su-kien/muc-kich-rung-que-co-van-yen-n19.html" title="{{$one_news->name}}">
                  <img src="{{Request::url()}}/../uploads/{{$one_news->images}}" onerror="this.src='images/logo.png'" alt="{{$one_news->name}}" />
              </a>
              <span>
              {{$one_news->description}}
              </span>
          </div><!--newhome-->
              <div class="newhomerelat">
                  <ul>
                      @foreach($news as $new)
                      <li>
                          <a href="tin-tuc-su-kien/nguy-co-tan-kiet-rung-que-n20.html" title="{{$new->name}}">{{$new->name}}</a>
                      </li>
                      @endforeach
                  </ul>
              </div>
          <div style="clear:both"></div>
      </div><!--box-->
  <div style="clear: both; height: 10px"></div>
@endsection