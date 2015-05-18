@extends('main')
@section('content')
	<div class="box">
        <h3> <a href="javascript:void(0)">Photo</a> </h3>
        <div style="clear: both; height: 10px;"></div>
        <div id="gallery">
            <ul>
            	@foreach($list_image as $list)
                <li style="margin-bottom:10px;">
                    <a href='{{asset("uploads/$list->images")}}' title="{{$list->name}}">
                        <img src='{{asset("uploads/$list->images")}}' onerror="this.src='http://tuanminhexport.com/images/logo.png'" alt="{{$list->alt}}" style="width:190px; height:110px;" />
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- end box productnew -->
    <div style="clear:both; height:10px"></div>
    <script type="text/javascript">
        $('#gallery a').lightBox();
    </script>
@endsection