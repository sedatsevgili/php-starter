
<?php
$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

echo "Frequency of 'is' : ".substr_count($str, 'is');
echo "\n";

$uzunluk=strlen($str);
echo "cumle uzunlugu = $uzunluk";
echo "\n";

$harfler=str_split($str);

$result = array_count_values($harfler);
arsort($result);
print_r($result);

?>
