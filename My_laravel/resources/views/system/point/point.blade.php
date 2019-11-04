@extends('system.layout')
@section('title')
@section('content')
  <style type="text/css">
   td {
    padding: 5px;
    text-align: left;    
  }
  table {
    width: 100%;
  }
</style>
<div class="container">
  <div class="all"> 
    <div class="col-sm-8 three">
      <div class="col-sm-12 second">
        <table>
          <tr>
            <td>
              <span>
                Tên học sinh
              </span>
            </span>
          </td>
          <td>
            <span>
             Phạm Tuấn Anh
           </span>
         </td>
       </tr>
       <tr>
        <td>
         <span> 
          Giới tính
        </span>
      </td>
      <td>
        <span>
          Nam
        </span>
      </td>
    </tr>
    <tr>
      <td>
        <span>
          Ngày sinh
        </span>
      </td>
      <td>
        <span>
          30/01/1996
        </span>
      </td>
    </tr>
    <tr>
      <td>
        <span>
          Lớp
        </span>
      </td>
      <td>
        <span>
          10A1
        </span>
      </td>
    </tr>
    <tr>
      <td>
        <span>
          Địa chỉ
        </span>
      </td>
      <td>
        <span>
          Thanh Xuân Bắc
        </span>
      </td>
    </tr>
  </table>
</div>
</div>
</div>  
</div>

<div class="container bangdiem" >
  <table class="view-table" cellpadding="0" border="0" style="border-style:Solid;">
    <tbody>
      <tr class="title-diem" style="border-color:Blue;">
        <td title="Số thứ tự" align="center" style="width:16px;">
          <span class="Label" style="display:inline-block;width:16px;">STT</span>
        </td>
        <td title="Mã môn học" align="center" style="width:60px;">
          <span class="Label" style="display:inline-block;width:60px;">Mã Môn</span>
        </td>
        <td title="Tên môn học" align="left" style="width:250px;">
          <span class="Label" style="display:inline-block;width:250px;">Tên Môn</span>
        </td>
        <td title="Số tín chỉ" align="center" style="width:20px;">
          <span class="Label" style="display:inline-block;width:20px;">TC</span>
        </td>
        <td title="Phần trăm kiểm tra" align="center" style="width:35px;">
          <span class="Label" style="display:inline-block;width:35px;">% KT</span>
        </td>
        <td title="Phần trăm thi" align="center" style="width:35px;">
          <span class="Label" style="display:inline-block;width:35px;">% Thi</span>
        </td>
        <td title="Điểm Chuyên Cần" align="center">
          <span class="Label">Điểm Chuyên Cần</span>
        </td>
        <td title="Điểm Quá Trình" align="center">
          <span class="Label">Điểm Quá Trình</span>
        </td>
        <td title=" điểm thi lần 1" align="center">
          <span class="Label">Thi L1</span></td>
          <td title=" điểm tổng kết lần 1 (hệ 10/100)" align="center">
            <span class="Label">TK1(10)</span>
          </td>
          <td title=" điểm tổng kết (hệ 10/100)" align="center">
            <span class="Label">TK(10)</span>
          </td>
          <td title=" điểm tổng kết lần 1 (điểm chữ)" align="center">
            <span class="Label">TK1(CH)</span>
          </td>
          <td title=" điểm tổng kết (điểm chữ)" align="center">
            <span class="Label">TK(CH)</span>
          </td>
        </tr>
        <tr class="title-hk-diem" style="height:20px;">
          <td align="left" colspan="13">
            <span class="Label">Học kỳ 2 - Năm học 2017-2018</span>
          </td>
        </tr>
        <tr class="row-diem" style="height:20px;">
          <td align="left" style="width:16px;">
            <span class="Label" style="display:inline-block;width:16px;">1</span>
          </td>
          <td align="center" style="width:60px;">
            <span class="Label" style="display:inline-block;width:60px;">SN00011</span>
          </td>
          <td align="left" style="width:250px;">
            <span class="Label" style="display:inline-block;width:250px;">Tiếng Anh 0</span>
          </td>
          <td align="center" style="width:20px;">
            <span class="Label" style="display:inline-block;width:20px;">2</span>
          </td>
          <td title="40" align="center"><span class="Label">40</span>
          </td>
          <td title="60" align="center"><span class="Label">
          60</span>
        </td>
        <td title=" 9.0" align="center"><span class="Label"> 9.0</span>
        </td>
        <td title=" 6.0" align="center"><span class="Label"> 6.0</span>
        </td>
        <td title=" 6.5" align="center"><span class="Label"> 6.5</span>
        </td>
        <td title=" 6.6" align="center"><span class="Label"> 6.6</span>
        </td>
        <td title=" 6.6" align="center"><span class="Label"> 6.6</span>
        </td>
        <td title="C+" align="center"><span class="Label">C+</span>
        </td>
        <td title="C+" align="center"><span class="Label">C+</span>
        </td>
      </tr>

      <tr class="row-diem" style="height:20px;">
        <td align="left" style="width:16px;">
          <span class="Label" style="display:inline-block;width:16px;">1</span>
        </td>
        <td align="center" style="width:60px;">
          <span class="Label" style="display:inline-block;width:60px;">SN00011</span>
        </td>
        <td align="left" style="width:250px;">
          <span class="Label" style="display:inline-block;width:250px;">Tiếng Anh 0</span>
        </td>
        <td align="center" style="width:20px;">
          <span class="Label" style="display:inline-block;width:20px;">2</span>
        </td>
        <td title="40" align="center"><span class="Label">40</span>
        </td>
        <td title="60" align="center"><span class="Label">
        60</span>
      </td>
      <td title=" 9.0" align="center"><span class="Label"> 9.0</span>
      </td>
      <td title=" 6.0" align="center"><span class="Label"> 6.0</span>
      </td>
      <td title=" 6.5" align="center"><span class="Label"> 6.5</span>
      </td>
      <td title=" 6.6" align="center"><span class="Label"> 6.6</span>
      </td>
      <td title=" 6.6" align="center"><span class="Label"> 6.6</span>
      </td>
      <td title="C+" align="center"><span class="Label">C+</span>
      </td>
      <td title="C+" align="center"><span class="Label">C+</span>
      </td>
    </tr>


    <tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Điểm trung bình học kỳ hệ 10/100:</span><span class="Label"> 1.67</span></td>
    </tr><tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Điểm trung bình học kỳ hệ 4:</span><span class="Label"> 0.00</span></td>
    </tr><tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Điểm trung bình tích lũy:</span><span class="Label"> 5.95</span></td>
    </tr><tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Điểm trung bình tích lũy (hệ 4):</span><span class="Label"> 2.08</span></td>
    </tr><tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Số tín chỉ đạt:</span><span class="Label">0</span></td>
    </tr><tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Số tín chỉ tích lũy:</span><span class="Label">13</span></td>
    </tr><tr class="row-diemTK">
      <td align="left" colspan="13"><span class="Label" style="display:inline-block;width:300px;">Phân Loại ĐTB HK:</span><span class="Label">Kém</span></td>
    </tr>
  </tbody></table>
</div>
@endsection