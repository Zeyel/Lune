<script src="js/menu.js"></script>
<?php
$dir = "/www/php/menu";
echo $dir;
$files = scandir($dir);
echo $files;
foreach ($files as $file){
  echo($file);
}
 ?>
