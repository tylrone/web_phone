<div class="row justify-content-center" style="width:100%;">
  <div class="col-md-12">
    <!-- panel -->
    <div class="card card-primary">
      <div class="card-header bg-primary text-white">Đăng nhập tài khoản</div>
      <?php if(isset($_GET["act"])&&$_GET["act"]=="fail"){ ?>
      <p style="color:red">Đăng nhập chưa thành công</p>
      <?php }else{ ?>
      <p>&nbsp;Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
      <?php } ?>
      <div class="card-body">
        <!-- table -->
        <form method="post" action="">
        <table cellpadding="5" style="width: 100%;">  
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
            <td><input type="submit" value="Đăng nhập" class="btn btn-primary"></td>
          </tr>
          <tr>
            <td></td>
            <td>Nếu bạn chưa có tài khoản vui lòng <a href="register.html" style="color: red;font-weight: bold;">đăng ký</a></td>
          </tr>
        </table>
        </form>
        <!-- end table -->
      </div>
    </div>
    <!-- end panel -->
  </div>
</div>