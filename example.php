<?php
    require "foxes.php";
?>
<img src="<?php echo foxes_fox([])?>">
<img src="<?php echo foxes_fox(["width" => 150])?>">
<img src="<?php echo foxes_fox(["width" => 150, "height" => 150])?>">
<img src="<?php echo foxes_fox(["width" => 150, "height" => 150, "aspect_ratio" => "1:2"])?>">
