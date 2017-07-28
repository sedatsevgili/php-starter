<?php
$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$strArray = count_chars($str,1);

foreach ($strArray as $key=>$value)
   {
   echo "The character '".chr($key)."' was found $value time(s)<\n>";

   }
echo substr_count($str, 'is');
?>
