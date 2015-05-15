@extends('main')
@section('content')
<?php
    var_dump($list_pr);
?>
 <div class="box">
      <h3> <a href="javascript:void(0)">Sản phẩm </a> </h3>
          <div class="productitem"> 
              <a href="que/que-che/index.html" title=""> 
                  <img src="{{Request::url()}}/../uploads/" alt="" onerror="this.src='images/logo.png'" />
              </a>
              <div class="info"> 
                  <a style="height: 20px; overflow: hidden;" href="que/que-che/index.html" title=""></a> 
                  <a href="que/que-che/index.html" title="" class="price"> Chi tiết </a> 
              </div>
          </div>
  </div><!-- end box productnew -->
@endsection