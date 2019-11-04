<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Table design <small>Custom design</small></h2>
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

      <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th>
                #
              </th>
              <th class="column-title">Tên danh mục</th>
              <th class="column-title">Trạng thái</th>
              <th class="column-title">Ngày tạo</th>
              <th class="column-title">Action </th>
            </tr>
          </thead>

          <tbody>
            <?php  
              $sqlSelectCat = "SELECT * FROM tbl_category";
              $result = $conn->query($sqlSelectCat);
              $i=0;
              foreach ($result as $value) {
                $i++;
            ?>
              <tr class="even pointer">
                <td class="a-center "><?php echo $i; ?></td>
                <td class=" "><?php echo $value["cat_name"] ?></td>
                <td class=" "><?php echo ($value["status"])?"Hiển thị":"Ẩn"; ?></td>
                <td class=" "><?php echo date("d-m-Y",strtotime($value["date_create"])); ?></td>               
                <td class=" last">
                  <a href="index.php?view=editcategory&id=<?php echo $value["cat_id"] ?>"><i class="fa fa-edit"></i></a>
                  <a href="index.php?view=delcategory&id=<?php echo $value["cat_id"] ?>"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>


    </div>
  </div>
</div>