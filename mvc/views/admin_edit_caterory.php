<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sua danh muc</title>
  <link rel="stylesheet" href="../public/css/styleeditproduct.css">
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="..//public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="../public/bootstrap//css/bootstrap.min.css">
  <script src="../public/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
  <!-- header -->
  <div class="header">
    <p>Admin</p>
  </div>
  <!-- menu -->

  <div class="menu">
    <ul class="list">
      <li><a href="http://localhost/Do_An_2/addcaterory">Thêm danh mục</a></li>
      <li><a href="http://localhost/Do_An_2/listcaterory">Danh sách danh mục</a></li>
      <li><a href="http://localhost/Do_An_2/editcaterory">Sửa danh mục</a></li>
      <li><a href="http://localhost/Do_An_2/addproduct">Thêm sản phẩm</a></li>
      <li><a href="http://localhost/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
      <li><a href="http://localhost/Do_An_2/editproduct">Sửa sản phẩm</a></li>

    </ul>
  </div>
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12 column">

        <form action="/Do_An_2/editcaterory/suadanhmuc" method="POST" enctype="multipart/form-data">
  <?php
  while($caterory = mysqli_fetch_array($data['danhmuc'])){
    echo '<input class="form-control" name ="iddanhmuc" value=' .$caterory['id_danh_muc']. '>';
    echo '<input class="form-control" name = "tendanhmuc" value="' .$caterory['ten_danh_muc']. '" />';
    echo '<button type="submit" class=".btn-info form-control" value="update" name="submit">Update</button>';
  } 
  
  ?>

        </form>
      </div>
    </div>
  </div>


</body>
<html>