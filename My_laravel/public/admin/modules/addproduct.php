<?php  
  if(isset($_POST["addNew"])){
    // echo "<pre>";
    // print_r($_FILES);
    // die;
    $path = "uploads/";
    $fileName="";
    if(isset($_FILES["pro_image"]) && $_FILES["pro_image"]["name"]!=""){
      if($_FILES["pro_image"]["type"] =="image/jpeg" ||$_FILES["pro_image"]["type"] =="image/png"||$_FILES["pro_image"]["type"] =="image/jpg" || $_FILES["pro_image"]["type"] =="image/gif"){
        if($_FILES["pro_image"]["size"] <= 2440990){
          if($_FILES["pro_image"]["error"]==0){
            //thuc hien lưu file
            move_uploaded_file($_FILES["pro_image"]["tmp_name"], "../".$path.$_FILES["pro_image"]["name"]);
            $fileName = $path.$_FILES["pro_image"]["name"];
          }else{
            echo "file lỗi";
          }
        }else{
          echo "Lỗi kích thước file";
        }
      }else{
        echo "File không đúng định dạng";
      }
    }
    $table="tbl_product";
    $_POST["date_create"] = date("Y-m-d H:i:s");
    $_POST["pro_image"] = $fileName;
    $data = $_POST;

    save($table,$data);
    //header("location:index.php?view=listproduct");
  }
?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Thêm mới<small>sản phẩm</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form method="post" action="" class="form-horizontal form-label-left" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên sản phẩm<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="pro_name" id="pro_name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-7">Danh mục</label>
            <div class="col-md-6 col-sm-7 col-xs-12">
              <select class="form-control" id="cat_id" name="cat_id">
                <option value="">-- Chọn danh mục --</option>
                <?php  
                  $sqlSelectCat = "SELECT * FROM tbl_category WHERE status = 1";
                  $result = $conn->query($sqlSelectCat);
                  foreach ($result as $value) {
                ?>
                  <option value="<?php echo $value["cat_id"] ?>"><?php echo $value["cat_name"] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ảnh <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="file" name="pro_image" id="pro_image" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Giá<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="pro_price" id="pro_price" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Khuyến mại<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="sale_off" id="sale_off" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mô tả<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
             <textarea name="description" id="description" cols="80" rows="10" class="form-control col-md-12 col-xs-12"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Trạng thái<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="checkbox" id="status" value="1" name="status" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancel</button>
  <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" name="addNew" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>