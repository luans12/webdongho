<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/stylecart.css">
    <title>Gio hang</title>
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

     <!--Form thong tin giao hang  -->
    <div class="form"id="input-group">
        <h3 class="title-group">Thông tin giao hàng</h3>
          <form class="col-sm-8 mx-auto">
            <input type="text" class="form-control" placeholder="Họ tên...">
            <input type="text" class="form-control" placeholder="Địa chỉ...">
            <input type="text" class="form-control" placeholder="Số điện thoại...">
            <input type="text" class="form-control" placeholder="Email...">

            <button class="btn btn-success btn-lg col-sm-12 mt-5" id="btn-buy">Thanh toán</button>
          </form> 
      </div>
      <!-- Form thong tin gio hang -->
      <div class="form" id="in-cart">
        <h3 class="title-group">Thông tin giỏ hàng</h3>

          <table>
              <tr>
                <th></th>
                <th>Tên SP</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thay đổi</th>
              </tr>
              <tr>
                <td><img class="anh" src="./public/image/hublot2.jpg" ></td>
                <td>Đồng hồ nữ rolex</td>
                <td>01</td>
                <td>810.000.000đ</td>
                <td><i class="fas fa-plus-circle"></i> 
                 <i class="fas fa-minus-circle"></i>
                </td>
              </tr>
              <tr>
                <td><img class="anh" src="./public/image/hublot1.jpg"></td>
                <td>Đồng hồ nữ hublot</td>
                <td>01</td>
                <td>1.200.000.000đ</td>
                <td><i class="fas fa-plus-circle"></i> 
                 <i class="fas fa-minus-circle"></i>
                </td>
              </tr>
              <tr>
                <td id="total-price">TỔNG</td>
                <td></td>
                <td>02</td>
                <td><strong>2.010.000.000đ</td>
                <td></td>
              </tr>
          </table>
          
      </div>
</body>
</html>