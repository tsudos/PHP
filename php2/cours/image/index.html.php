<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
  $dir = opendir(".");
  while($file = readdir($dir)) {
    if (substr($file,-5)==".jfif") {
    echo "<img src=\"$file\" />\n";
    }
  }
  closedir($dir);
