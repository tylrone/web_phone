<div class="row justify-content-center" style="width:100%;">
  <div class="col-md-12">
    <!-- panel -->
    <div class="card card-primary">
      <div class="card-header bg-primary text-white">Đăng ký tài khoản</div>
      <?php 
        if(isset($_GET["act"])&&$_GET["act"]=="success")
        {
       ?>
      <p style="color:red;">&nbsp;Bạn đã đăng ký thành công!</p>
      <?php }else{ ?>
        <p>&nbsp;Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
      <?php } ?>
      <div class="card-body">
        <!-- table -->
        <form method="post" action="">
        <table cellpadding="5" style="width: 100%;">  
          <tr>
            <td style="width: 100px;">Họ tên</td>
            <td><input type="text" name="hoten" required class="form-control"></td>
          </tr>
          <tr>
            <td style="width: 100px;">Địa chỉ</td>
            <td><input type="text" name="diachi" required class="form-control"></td>
          </tr>
          <tr>
            <td style="width: 100px;">Điện thoại</td>
            <td><input type="text" name="dienthoai" required class="form-control"></td>
          </tr>
          <tr>
            <td style="width: 100px;">Email</td>
            <td><input type="text" name="email" required class="form-control"></td>
          </tr>
          <tr>
            <td style="width: 100px;">Password</td>
            <td><input type="password" name="password" required class="form-control"></td>
          </tr>
          <tr>
            <td style="width: 100px;"></td>
            <td><input type="submit" value="Đăng ký" class="btn btn-primary"></td>
          </tr>
          <tr>
            <td></td>
            <td>Nếu bạn có tài khoản vui lòng <a href="login.html" style="color: red;font-weight: bold;">đăng nhập</a></td>
          </tr>
        </table>
        </form>
        <!-- end table -->
      </div>
    </div>
    <!-- end panel -->
  </div>
</div>