@extends('system.layout')
@section('title')
@section('content')
  <div class="container">
    <div class="all"> 
      <div class="col-sm-8 three">
        <div class="col-sm-12 second">
          <div class="col-sm-12 first">
            <form action="" method="post">
              <div class="form">
              <p class="text">Nhập mã số cần xem:</p>
              <div class="input"><input type="text" name="point"></div>
              <div class="input"><input type="submit" name="check" value="OK"></div>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>  
  </div>
@endsection