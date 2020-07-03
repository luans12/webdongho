<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiet san pham</title>
    <link rel="stylesheet" href="http://localhost/Do_An_2/public/css/styledetail.css">
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="../public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
        <?php
  while($sp = mysqli_fetch_array($data['data1'])){
    echo ' <img class="anhsp"src="http://localhost/Do_An_2/public/image/' . $sp['anh_san_pham'] . '" />';
    echo ' <p class="mr-4 tensp">' . $sp['ten_san_pham'] . '</p>';
    echo ' <p class="mr-4 giasp">' . $sp['gia'] . '</p>';
    echo ' <p class="mr-4 thongtinsp">' . $sp['thong_tin'] . '</p>';
  } 
  
  ?>
    

</body>
</html>