@extends('main')
@section('content')
	<div class="box boxlist">
        <h3> 
            <a href='{{URL::to("/home")}}' title="Công ty TNHH Thương Mại và Sản Xuất Tuấn Minh">Home</a> 
            <a href='{{URL::to("/news")}}' title="Cơm dừa">News</a>
            <a title="Cơm dừa">{{$news_detail->name}}</a>  
        </h3>
        <div style="clear: both; height: 10px"></div>
        <div class="content_detail_news">
        <?php echo html_entity_decode($news_detail->name);?>
        </div>
    </div>
    <!-- end box productnew -->
@endsection