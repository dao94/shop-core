@extends('main')
@section('content')
<div class="box">
    <h3> <a href="javascript:void(0)">{{$name_category}}</a> </h3>
    @if(!empty($list_pr))
    @foreach($list_pr as $list)
    <div class="productitem"> 
        <a href="que/que-che/index.html" title=""> 
            <img src='{{asset("uploads/$list->images")}}' alt="" onerror="this.src='images/logo.png'" />
        </a>
        <div class="info"> 
            <a style="height: 20px; overflow: hidden;" href="que/que-che/index.html" title="">{{$list->name}}</a> 
            <a href="que/que-che/index.html" title="" class="price"> Chi tiết </a> 
        </div>
    </div>
    @endforeach
    @else
    <p style="margin-top:10px;"><i>Không có sản phẩm nào !</i></p>
    @endif
</div><!-- end box productnew -->
@endsection