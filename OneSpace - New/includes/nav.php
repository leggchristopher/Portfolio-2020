<?php 
  
  foreach ($navItems as $item) {
    echo "<li><a href=\"$item[slug]\" class=\"nav_text\">$item[title]</a></li>";
  }

?>

