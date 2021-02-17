<b style="color: #36ae8f;line-height: 50px;">TIN TỨC SẢN PHẨM</b>
      <div class="row">
      <?php foreach($data as $rows): ?> 
        <!-- news -->
        <div class="col-md-6 col-sm-12">
          <article class="news">
            <figure> <img class="img-thumbnail" style="width: 100%;height: 300px;" src="public/upload/news/<?php echo $rows->c_img; ?>"> </figure>
            <div><a href="news/detail/<?php echo $rows->pk_news_id; ?>/<?php echo remove_unicode($rows->c_name); ?>">
              <h5><?php echo $rows->c_name; ?></h5>
              </a></div>
            <p><?php echo $rows->c_description; ?></p>
          </article>
        </div>
        <!-- end news --> 
      <?php endforeach; ?>
      </div>
       <ul class="pagination" style="margin-left: 85%;">
        <li class="page-item active"><a href="#" class="page-link">Trang</a></li>
        <?php for($i = 1; $i <= $num_page; $i++): ?>
        <li class="page-item"><a href="news/p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
        <?php endfor; ?>
      </ul>
      <!-- end paging -->