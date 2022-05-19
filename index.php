<?php require 'imageviewer.php'; ?>

Image below are not hidden: <br>
<img src="images/foto.jpg" style="width:400px;height:200px;">
<br>
<hr>
<br>
Image below are hidden: <br>
<img src="<?php echo img('foto.jpg'); ?>" style="width:400px;height:200px;">