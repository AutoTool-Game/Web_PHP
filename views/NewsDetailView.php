<?php
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-8 middle">
    <!-- chi tiet -->
    <h3><?php echo $record->name; ?></h3>
    <img src="http://dev.doan.vn/assets/upload/news/<?php echo $record->photo; ?>" style="width:100%;">
    <p><?php echo $record->description; ?></p>
    <p><?php echo $record->content; ?></p>
    <!-- chi tiet -->
</div>
