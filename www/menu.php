<!--___SCRIPTS___-->
<script src="js/menu.js"></script>
<?php
$tmp = "";
$dir = getcwd()."\menu";
$files = array_diff(scandir($dir), array(".", ".."));
foreach ($files as $file){
  if (preg_match("#[0-9]{1,2}_[a-zA-Z0-9]+.php#", $file)) {
    $noextension = explode(".", $file);
    $name = explode("_", $noextension[0]);
    echo "<button>".$name[1]."</button>";
    $tmp .= $file."~";
  }
}
$include = preg_split("#~#", $tmp, NULL, PREG_SPLIT_NO_EMPTY);
foreach ($include as $inc) {
  include("menu/".$inc);
}
 ?>
