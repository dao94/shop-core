@extends('main')
@section('content')
  <div class="box boxlist">
      <h3> 
          <a href='{{URL::to("/home")}}' title="Home">Home</a> 
          <a href='{{URL::to("/news")}}' title="News">News</a>
          <a title="{{$detail_intro->name}}">{{$detail_intro->name}}</a>  
      </h3>
      <div style="clear: both; height: 10px"></div>
      <div class="content_detail_news" style="padding:0px 10px;margin-bottom:10px;text-align:justify">
        <?php echo html_entity_decode($detail_intro->content);?>
        <div class="clearfix"></div>
      </div>
      <div class="fb-like" data-href='{{URL::to("/product/$detail_intro->id")}}' data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
  </div>
    <!-- end box productnew -->
@endsection