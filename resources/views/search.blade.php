@extends('main')
@section('content')
<div class="box boxlist">
   <h3> 
        <a href='{{URL::to("/home")}}' title="">Search</a> 
        <a title="">{{$name}}</a> 
    </h3>
    @if(!empty($data_search))
    @foreach($data_search as $list)
    <div class="productitem"> 
        <a href='{{URL::to("/product/$list->id")}}' title="{{$list->name}}"> 
            <img src='{{asset("uploads/$list->images")}}' alt="{{$list->alt}}"/>
        </a>
        <div class="info"> 
            <a style="height: 20px; overflow: hidden;" href="que/que-che/index.html" title="">{{$list->name}}</a> 
            <a href='{{URL::to("/product/$list->id")}}' title="{{$list->name}}" class="price"> Detail </a> 
        </div>
    </div>
    @endforeach
    @else
    <p style="margin-top:10px;"><i>Không có sản phẩm nào !</i></p>
    @endif
</div><!-- end box productnew -->
@endsection