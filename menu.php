<script src="js/menu.js"></script>
<?php
$dir = getcwd()."\www\php\menu";
$files = array_diff(scandir($dir), array(".", ".."));
foreach ($files as $file){
  $noextension = explode(".", $file);
  $name = explode("_", $noextension[0]);
  echo "<button>".$name[1]."</button>";
}
 ?>
