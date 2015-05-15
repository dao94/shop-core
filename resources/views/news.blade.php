@extends('main')
@section('content')
<div class="row">
    <div class="menu-introduction">
        <h4><a href="index.html">Trang Chủ</a>/<a href="#">Áo</a>/<em>áo mangto cho phái đẹp</em></h4>
    </div><!--menu-introduction-->
  </div>
  @foreach($list_news as $val) 
	<div class="media">
	  <a class="pull-left" href="#">
	    <img class="media-object" src="{{Request::url()}}/../uploads/{{$val->images}}" alt="..." style="width:150px;height:100px">
	  </a>
	  <div class="media-body">
	    <a href=""><h4 class="media-heading">{{$val->name}}</h4></a>
	    <p>{{$val->description}}</p>
	    <a href=""><em class="pull-right" style="color:red">Chi tiết ...</em></a>
	  </div>
	</div>
	@endforeach
@endsection