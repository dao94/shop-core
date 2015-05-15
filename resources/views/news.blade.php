@extends('main')
@section('content')
	<div class="box">
		<h3> <a href="javascript:void(0)">News</a> </h3>
		@if(!empty($news))
		@foreach($news as $new)
		<div class="media">
		  <a class="pull-left" href="#">
		    <img class="media-object" src='{{asset("uploads/$new->images")}}' alt="" style="width:150px;height:100px">
		  </a>
		  <div class="media-body">
		    <a href=""><h4 class="media-heading">{{$new->name}}</h4></a>
		    <p>{{$new->description}}</p>
		    <a href=""><em class="pull-right" style="color:red">detail ...</em></a>
		  </div>
		</div>
		<div class="clearfix"></div>
		@endforeach
		@else
		<p style="margin-top:10px;"><i>Không có tin tức nào !</i></p>
		@endif
	</div><!-- end box productnew -->
@endsection