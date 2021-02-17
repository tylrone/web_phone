<form method="POST" action="index.php?controller=cart&act=update">
  <table border="1px solid black" style="border-collapse: collapse;text-align: center;margin-top: 10px;margin-bottom: 10px;border: none;">
    <tr>
      <th style="width: 200px">Ảnh</th>
      <th style="width: 300px;">Sản phẩm</th>
      <th style="width: 180px;">Số lượng</th>
      <th style="width: 120px;">Giá</th>
      <th></th>
    </tr>
     <?php foreach($_SESSION["cart"] as $rows): ?>
          <tr>
            <td><img src="public/upload/product/<?php echo $rows['c_img']; ?>"/></td>
            <td><a href="product/detail/<?php echo $rows["pk_product_id"]; ?>/<?php echo remove_unicode($rows["c_name"]); ?>"><?php echo $rows["c_name"]; ?></a></td>
            <td><input  type="number" min="1" value="<?php echo $rows['number']; ?>" name="product_<?php echo $rows['pk_product_id']; ?>" /></td>
              <td><p><b><?php echo number_format($rows["c_price"]*$rows["number"]); ?>₫</b></p></td>
            <td><a href="index.php?controller=cart&act=delete&id=<?php echo $rows["pk_product_id"]; ?>"><i class="fa fa-trash"></i></a></td>
          </tr>
          <?php endforeach; ?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><b>Số lượng các sản phẩm</b></td>
            <td><?php echo $this->cart_number(); ?> Sản phẩm</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><b>Tổng giá</b></td>
            <td><?php echo number_format($this->cart_total()); ?>đ</td>
          </tr>
  </table>
  <div>
    <a href="http://tylrone.byethost10.com/" style="line-height: 22px;width: 150px;padding: 10px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Tiếp tục mua hàng</a> 
        <input type="submit" value="Cập nhật sản phẩm" style="line-height: 22px;width: 200px;padding: 10px;background: #fca022;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">  
        <a href="index.php?controller=cart&act=destroy" style="line-height: 22px;width: 150px;padding: 10px;background: red;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Xóa giỏ hàng</a>
        <?php if($this->cart_number() > 0): ?>
        <a href="checkout.html" style="line-height: 22px;width: 150px;padding: 10px;background: green;color: white;font-size: 17px;border: 1px solid grey;border-radius: 5px;cursor: pointer;">Thanh toán</a>
      <?php endif;  ?></div>
</form>
